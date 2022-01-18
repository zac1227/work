
import React, {useEffect, useState} from 'react';

import { Button, Dialog, TextField  } from '@mui/material';

import axios from 'axios';

export default function StudentUpdate(props) {

  const [student, setStudent] = useState({id:props.id, name:props.name, account:props.account , password:props.password ,categories:"1"});
  //const [id, setId] = useState(props.id);

  useEffect(()=>setStudent({...student, id:props.id,name:props.name, account:props.account , password:props.password}),[props.id,props.name,props.account,props.password]);

  const handleClick = function(e){

    setStudent({...student,[e.target.name]:e.target.value})

  }



  const update = async function(){

    try{
      console.log(student);
      await axios.put("/student",student);

    }

    catch(e){

      console.log(e);

    }

    props.close();

  }



  return (

    <Dialog open={props.open}>
      <TextField label ="id" name ="id" variant="outlined" value={student.id} onChange={handleClick} disabled/>

      <TextField label ="名字" name ="name" variant="outlined" value={student.name} onChange={handleClick}/>

      <TextField label ="帳號" type="text" name ="account" variant="outlined" value={student.account} onChange={handleClick} disabled />

      <TextField label ="密碼" type="password" name ="password" variant="outlined" value={student.password} onChange={handleClick}/>  


    <Button variant="contained" color="primary" onClick={update}>修改</Button>

    <Button variant="contained" color="secondary" onClick={()=>props.close()}>取消</Button>

    </Dialog>

  );

}