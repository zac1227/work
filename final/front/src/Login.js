import React, { useState } from "react";
import { Button, TextField, Box } from "@mui/material";
import axios from "axios";
import './index.css';
import banner from './banner_1.png'
import { Link } from 'react-router-dom';
import { useNavigate } from "react-router-dom";

export default function SignIn() {
  const [account, setAccount] = useState({
    username:"",
    password: "",
    
  });
  const navigate = useNavigate();
  const [message, setMessage] = useState("");

  const handleChange = function (e) {
    setAccount({ ...account, [e.target.name]: e.target.value });
  };
  const a = function (){
    console.log("123")
  }
  const handleSubmit = async function () {
   
    setMessage("");
    let auth = { auth: account };
    console.log("auth:", auth);
    try {
      //const result = await axios.get("/logout");
      const res = await axios.get("/account", auth);
      
      console.log("res:", res);

      if (res) {
        console.log(res);
        console.log(res.statusText);
        setMessage(res.data);
        navigate('/Record');
      }
      else if (res) {
        console.log(res);
        console.log(res.statusText);
        setMessage(res.data);
        navigate('/Stu');
      }
      else{
        setMessage("無法登入");
      }
    } catch (error) {
      console.log(error);
      setMessage("無法登入");
    }
  };

  return (

    
    <Box className="login">
      
      <div>
        <img className="img" src={banner} alt="logo" className='baner' />
        <div >
          <TextField
            className="input"
            type="text"
            name="username"
            value={account.username}
            placeholder="帳號"
            label="帳號"
            onChange={handleChange}
            autoComplete="account"
          />
          <br/>
          <TextField
            className="input"
            type="password"
            name="password"
            value={account.password}
            placeholder="密碼"
            label="密碼"
            onChange={handleChange}
            autoComplete="current-password"
          />
          {message}
          <br />
          <div>
            <Button variant="contained" color="primary" onClick={handleSubmit} sx={{margin:"10px 10px"}}>
              登入
            </Button>
            <Link to="/SignUp">
              
            </Link>
          </div>
          
        </div>
      </div>
    </Box>
  )
}
