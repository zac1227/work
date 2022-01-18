import React, { useEffect, useState } from "react";

import {
  Box,
  List,
  ListItem,
  ListItemText,
  Tab,
  Table,
  TableBody,
  TableCell,
  TableContainer,
  TableHead,
  TableRow,
} from "@mui/material";

import axios from "axios";

export default function CustomerList() {
  const [students, setStudents] = useState([]);

  useEffect(() => {
    async function fetchData() {
      const result = await axios.get("/student1");

      setStudents(result.data);

      console.log(result.data);
    }

    fetchData();
  }, []);

  console.log(students);

  return (
    <Box
      sx={{
        width: "100vw",

        height: "100vh",

        backgroundColor: "background.paper",

        color: "black",

        textAlign: "left",
      }}
    >
      <Table>
        {students.map((student, index) => (
          <tr>
            <td> {student.week_Day}</td>
          </tr>
        ))}
      </Table>
    </Box>
  );
}
