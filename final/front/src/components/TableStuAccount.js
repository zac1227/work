import * as React from "react";

import { useEffect, useState } from "react";

import { Add as AddIcon } from '@mui/icons-material';

import {
  Table,
  TableBody,
  TableCell,
  TableContainer,
  TableHead,
  TableRow,
  Button,
  Fab,
  Box,
  List,
  ListItem,
  ListItemText
} from "@mui/material";

import Paper from "@mui/material/Paper";

import axios from "axios";

import TableStuAdd from './TableStuAdd';

import TableStuUp from './TableStuUpdate';

function createData(
    id,
    account,
    password,
    name,
    categories
) {
  return {
    id,
    account,
    password,
    name,
    categories
  };
}




export default function CustomerList(props) {
  const [students, setStudents] = useState([]);
  const [open, setOpen] = useState(false);
  const [look, setLook] = useState(false);
  const [studentid, setStudentid] = useState(100);
  const [studentacc, setStudentacc] = useState(100);

  useEffect(() => {
    async function fetchData() {
      const result = await axios.get("/student");

      setStudents(result.data);

      console.log(result.data);
    }

    fetchData();
  }, [look, open]);

  const addData = function() {

    setOpen(true);
    setLook(true);
  
  }
  
  const close = function() {
  
    setOpen(false);
    setLook(false);
  
  }

  const updateData = function(id, acc) {
    console.log("1");
    console.log(id);

    setStudentid(id);
    setStudentacc(acc);
    setOpen(true);
  }

  const deleteData = async function(id) {
    try{

      await axios.delete("/student/"+id);
      if(look==true){
        setLook(false);
      }
      else if(look==false){
        setLook(true);
      }

    }

    catch(e){

      console.log(e);

    }
  }

  return (
    <div>
      <h1>學生帳號管理</h1>
    
    <TableContainer component={Paper}>
      <Table sx={{ minWidth: 650 }} aria-label="simple table">
        <TableHead>
          <TableRow>
            <TableCell>id</TableCell>
            <TableCell>帳號</TableCell>
            <TableCell>密碼</TableCell>
            <TableCell>名字</TableCell>
            <TableCell>修改</TableCell>
            <TableCell>刪除</TableCell>
            
          </TableRow>
        </TableHead>
        <TableBody>
          {students.map((student) => (
            <TableRow
              key={student.name}
              sx={{ "&:last-child td, &:last-child th": { border: 0 } }}
            >
              <TableCell component="th" scope="row">
                {student.id}
              </TableCell>
              <TableCell>{student.account}</TableCell>
              <TableCell>{student.password}</TableCell>
              <TableCell>{student.name}</TableCell>
              <TableCell><Button variant="contained" color="primary" onClick={()=>updateData(student.id, student.account)}>修改</Button></TableCell>
              <TableCell><Button variant="contained" color="secondary" onClick={()=>deleteData(student.id)}>刪除</Button></TableCell>
              
            </TableRow>
          ))}
        </TableBody>
      </Table>
    </TableContainer>
    {/* <Button variant="contained" color="primary" onClick={update}>修改</Button> */}
    

<TableStuAdd open={open} close={close}/>
<TableStuUp open={open} close={close} id={studentid} account={studentacc}/>
    
    </div>
  );
}
