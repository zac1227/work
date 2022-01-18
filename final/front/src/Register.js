
import React, {useState} from 'react';

import { Button, Input } from '@mui/material';

import axios from 'axios';

export default function StudentAddEdit() {

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

    

  }



  return (

    <div>

      <Input label ="名字" name ="name" variant="outlined" value={student.name}  onChange={handleClick}/>

      <Input label ="帳號" type="text" name ="account" variant="outlined" value={student.account}  onChange={handleClick}/>

      <Input label ="密碼" type="password" name ="password" variant="outlined" value={student.password} onChange={handleClick}/>  


    <Button variant="contained" color="primary" >新增</Button>

    <Button variant="contained" color="secondary" >取消</Button>

    </div>

  );

}