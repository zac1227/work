import React from 'react';



import {Link} from 'react-router-dom';

import { AppBar, Button, Toolbar } from '@mui/material';

 

export default function AppMenu() {

 

  return (

    <AppBar>

      <Toolbar>

        
        <Button component={Link} to='/Stu' color="inherit">租借教室</Button>
       
        <Button component={Link} to='/Login' color="inherit">Logout</Button>
      </Toolbar>
    </AppBar>

  )



}