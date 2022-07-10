import React, { useState, useEffect } from "react";
import { DataGrid } from "@mui/x-data-grid";
const App = () => {
  const [tableData, setTableData] = useState([]);
  useEffect(() => {
    fetch("http://127.0.0.1/helion/index.php")
      .then((data) => data.json())
      .then((data) => setTableData(data.lista.ksiazka));
  }, []);
  console.log(tableData);

  const columns = [
    { field: "ident", headerName: "Ident" },
    { field: "tytul", headerName: "Tytuł", width: 300 },
    { field: "liczbastron", headerName: "Liczba stron", width: 600 },
    { field: "datawydania", headerName: "Data wydania", width: 600 },
  ];

  return (
    <div style={{ height: 700, width: "100%" }}>
      <DataGrid
        rows={tableData}
        columns={columns}
        pageSize={12}
        getRowId={(tableData) => tableData.ident}
      />
    </div>
  );
};

export default App;
