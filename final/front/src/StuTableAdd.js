
import React, {useState} from 'react';

import { Button, Dialog, TextField  } from '@mui/material';

import axios from 'axios';

export default function NormalAddEdit(props) {

  const [student, setStudent] = useState({building:"", week_day:"" , normal_day:{Date} , room_avail_start:"",room_avail_end:""});

  

  const handleClick = function(e){

    setStudent({...student,[e.target.name]:e.target.value})

  }



  const update = async function(){

    try{

      await axios.post("/student1",student);

    }

    catch(e){

      console.log(e);

    }

    props.close();

  }



  return (

    <Dialog open={props.open}>


<TextField label ="教室" type="text" name ="building" variant="outlined" value={student.building}  onChange={handleClick}/>
      <TextField label ="星期" type="text" name ="week_day" variant="outlined" value={student.week_day}  onChange={handleClick}/>

      <TextField  type="date" name ="normal_day" variant="outlined" value={student.normal_day} onChange={handleClick}/>  

        <TextField label = "開始(節)" type="text" name="room_avail_start" value={student.password} onChange={handleClick}/>
        <TextField label = "開始(節)" type="text" name="room_avail_end" value={student.password} onChange={handleClick}/>

    <Button variant="contained" color="primary" onClick={update}>新增</Button>

    <Button variant="contained" color="secondary" onClick={()=>props.close()}>取消</Button>

    </Dialog>

  );

}