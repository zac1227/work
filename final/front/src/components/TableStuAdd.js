
import React, {useState} from 'react';

import { Button, Dialog, TextField  } from '@mui/material';

import axios from 'axios';

export default function StudentAddEdit(props) {

  const [student, setStudent] = useState({name:"", account:"" , password:""});

  

  const handleClick = function(e){

    setStudent({...student,[e.target.name]:e.target.value})

  }



  const update = async function(){

    try{

      await axios.post("/student",student);

    }

    catch(e){

      console.log(e);

    }

    props.close();

  }



  return (

    <Dialog open={props.open}>

      <TextField label ="名字" name ="name" variant="outlined" value={student.name}  onChange={handleClick}/>

      <TextField label ="帳號" type="text" name ="account" variant="outlined" value={student.account}  onChange={handleClick}/>

      <TextField label ="密碼" type="password" name ="password" variant="outlined" value={student.password} onChange={handleClick}/>  


    <Button variant="contained" color="primary" onClick={update}>新增</Button>

    <Button variant="contained" color="secondary" onClick={()=>props.close()}>取消</Button>

    </Dialog>

  );

}