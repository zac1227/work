import * as React from "react";

import { useEffect, useState } from "react";

import {
  Table,
  TableBody,
  TableCell,
  TableContainer,
  TableHead,
  TableRow,
  Button,

} from "@mui/material";

import Paper from "@mui/material/Paper";

import axios from "axios";



function createData(
  rent_id,
  building,
  week_Day,
  normal_date,
  room_avail_start,
  room_avail_end
) {
  return {
    rent_id,
    building,
    week_Day,
    normal_date,
    room_avail_start,
    room_avail_end,
  };
}
export default function CustomerList() {
  const [students, setStudents] = useState([]);
  const [open, setOpen] = useState(false);
  const [look, setLook] = useState(false);
  const [studentid, setStudentid] = useState(100);

  useEffect(() => {
    async function fetchData() {
      const result = await axios.get("/student1");

      setStudents(result.data);

      console.log(result.data);
    }

    fetchData();
  }, [look,open]);

 

  const deleteData = async function(rent_id) {
    try{

      await axios.delete("/student1/"+rent_id);
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
    <h1 className="title">平時預借</h1>
    
    
    <TableContainer component={Paper}>
      <Table sx={{ minWidth: 650 }} aria-label="simple table">
        <TableHead>
          <TableRow>
            <TableCell>租借流水號</TableCell>
            <TableCell>教室</TableCell>
            <TableCell>星期</TableCell>
            <TableCell>日期</TableCell>
            <TableCell>開始(節)</TableCell>
            <TableCell>結束(節)</TableCell>
            
            <TableCell>否決審核</TableCell>
          </TableRow>
        </TableHead>
        <TableBody>
          {students.map((student) => (
            <TableRow
              key={student.name}
              sx={{ "&:last-child td, &:last-child th": { border: 0 } }}
            >
              
              <TableCell>{student.rent_Id}</TableCell>
              <TableCell>{student.building}</TableCell>
              <TableCell>{student.week_day}</TableCell>
              <TableCell>{student.normal_day}</TableCell>
              <TableCell>{student.room_avail_start}</TableCell>
              <TableCell>{student.room_avail_end}</TableCell>
              
              <TableCell><Button variant="contained" color="secondary" onClick={()=>deleteData(student.rent_Id)}>刪除</Button></TableCell>
            </TableRow>
          ))}
        </TableBody>
      </Table>
    </TableContainer>
    </div>
  );
}
