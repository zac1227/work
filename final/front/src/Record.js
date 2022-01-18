import "./App.css";
import Header from "./Header";
import Table from "./components/Table";

import TableSem from "./components/TableSem";


function Record() {
  return (
    <div className="App">
      <Header />
      <Table />
      <TableSem />
    </div>
  );
}
export default Record;
