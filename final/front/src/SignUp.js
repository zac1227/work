import React ,{useState} from "react";
import './App.css';
import { TextField, Button, Box} from '@mui/material';


import { Link } from 'react-router-dom';
import Snackbar from '@mui/material/Snackbar';
import Alert from '@mui/material/Alert';
import { useNavigate } from "react-router-dom";

import axios from "axios";

export default function Signup(){
  const [account, setAccount] = useState({
    account: "",
    password:"",
    name:"",
    
  });
  const [open, setOpen] = React.useState(false);
  // eslint-disable-next-line no-unused-vars
  const [message, setMessage] = useState("");
  const navigate = useNavigate();

  const handleClose = () => {
    setOpen(false);
  };

  const handleChange = function (e) {
    setAccount({ ...account, [e.target.name]: e.target.value });
  };

  const handleSubmit = async function () {
    setMessage("");
    try {
      const res = await axios.post("/account", account);
      if (res) {
        console.log(res);
        console.log(res.statusText);
        if(res.data === "帳號已註冊成功"){
          setOpen(true);
          setTimeout(function(){
            navigate('/');
          },5000);
        }
        setMessage(res.data);
      }
    } catch (error) {
      console.log(error);
      setMessage("無法註冊");
    }
  };

    return (
      <Box className="register">
      <div>
        <img className="img" src={Logo} alt="logo"></img>
        <h2 className="text">~ 歡迎註冊 ~</h2>
        <form className="loginform">
          <TextField className="input" type = "email" name = "buyer_mail" value={account.account} placeholder="E-mail" label="E-mail" onChange={handleChange}/>
          <TextField className="input" type = "name" name = "buyer_name" value={account.password} placeholder="姓名" label="姓名" onChange={handleChange}/>
          <TextField className="input" type = "password" name = "password" value={account.name} placeholder="密碼" label="密碼" onChange={handleChange}/>
        
          
          <Button variant="contained" color="primary" sx={{marginTop:"15px"}} onClick={handleSubmit}>確認</Button>
          <Link to="/login">
            <Button variant="outlined" color="primary" sx={{marginTop:"15px"}}>返回登入</Button>
          </Link>
        </form>
      </div>
      <Snackbar open={open} autoHideDuration={6000} onClose={handleClose} anchorOrigin={{ vertical: 'top', horizontal: 'center' }}>
        <Alert onClose={handleClose} severity="success">註冊成功！請返回登入頁進行登入</Alert>
      </Snackbar>
      </Box>
    );
  }
