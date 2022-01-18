import React from 'react';



import {Link} from 'react-router-dom';

import { AppBar, Button, Toolbar } from '@mui/material';

 

export default function AppMenu() {

 

  return (

    <AppBar>

      <Toolbar>

        <Button component={Link} to='/Account' color="inherit">帳號管理</Button>

        <Button component={Link} to='/Record' color="inherit">租借紀錄</Button>
       
        <Button component={Link} to='/Login' color="inherit">Logout</Button>
      </Toolbar>
    </AppBar>

  )



}