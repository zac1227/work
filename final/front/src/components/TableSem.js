import * as React from "react";

import { useEffect, useState } from "react";

import {
  Table,
  TableBody,
  TableCell,
  TableContainer,
  TableHead,
  TableRow,
} from "@mui/material";

import Paper from "@mui/material/Paper";

import axios from "axios";


function createData(
  rent_id,
  building,
  room_day,
  room_avail_start,
  room_avail_end
) {
  return {
    rent_id,
    building,
    room_day,
    
    room_avail_start,
    room_avail_end,
  };
}
export default function CustomerList() {
  const [as, setAs] = useState([]);

  useEffect(() => {
    async function fetchData() {
      const result = await axios.get("/a");

      setAs(result.data);

      console.log(result.data);
    }

    fetchData();
  }, []);

  return (
    <div>
    <h1 className="title">學期預借</h1>
    
    
    <TableContainer component={Paper}>
      <Table sx={{ minWidth: 650 }} aria-label="simple table">
        <TableHead>
          <TableRow>
            <TableCell>租借流水號</TableCell>
            <TableCell>教室</TableCell>
            <TableCell>星期</TableCell>
            
            <TableCell>開始(節)</TableCell>
            <TableCell>結束(節)</TableCell>
          </TableRow>
        </TableHead>
        <TableBody>
          {as.map((a) => (
            <TableRow
              key={a.name}
              sx={{ "&:last-child td, &:last-child th": { border: 0 } }}
            >
              
              <TableCell>{a.rent_Id}</TableCell>
              <TableCell>{a.building}</TableCell>
              <TableCell>{a.room_Day}</TableCell>
              
              <TableCell>{a.room_avail_start}</TableCell>
              <TableCell>{a.room_avail_end}</TableCell>
            </TableRow>
          ))}
        </TableBody>
      </Table>
    </TableContainer>
    </div>
  );
}
