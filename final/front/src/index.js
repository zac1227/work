
import React, {useEffect} from "react";
import ReactDOM from "react-dom";
import "./index.css";
import App from "./App";
import Record from "./Record";
import reportWebVitals from "./reportWebVitals";
import {BrowserRouter, Routes, Route} from 'react-router-dom';

import Account from './Account';

import Login from './Login';

import AppRouter from './AppRouter';

import Stu from './Stu';

import StuAcc from './StuAcc';

import Register from './Register';

ReactDOM.render(
    <React.StrictMode>
    
    <BrowserRouter>
        <Routes>
    

<Route path="/Account" element={<Account/>} />

<Route path="/Record" element={<Record/>}/>



<Route path="/logout" element={<Record/>}/>

<Route path="/Login" element={<Login/>}/>

<Route path="/" element={<Stu/>}/>

<Route path="/Stu" element={<Stu/>}/>

<Route path="/StuAcc" element={<StuAcc/>}/>

<Route path="/Register" element={<Register/>}/>


</Routes>
      </BrowserRouter>

  </React.StrictMode>,
  document.getElementById("root")
);

// If you want to start measuring performance in your app, pass a function
// to log results (for example: reportWebVitals(console.log))
// or send to an analytics endpoint. Learn more: https://bit.ly/CRA-vitals
reportWebVitals();
//<Route path="/ManAccount" component={ManAccount}/>

{/* <Router>
    <Switch>

<Route path="/Account" component={Account}/>

<Route path="/Record" component={Record}/>



<Route path="/logout" component={Record}/>

<Route path="/Login" component={Login}/>

<Route path="/" component={Record}/>



</Switch>
    </Router> */}