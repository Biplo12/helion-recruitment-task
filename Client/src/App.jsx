import React from "react";
import { DataGrid } from "@mui/x-data-grid";
import dataBooks from "../products.json";
const App = () => {
  const columns = [
    { field: "ident", headerName: "Ident", width: 100 },
    { field: "tytul", headerName: "Tytuł", width: 300 },
    { field: "liczbastron", headerName: "Liczba stron", width: 100 },
    { field: "datawydania", headerName: "Data wydania", width: 100 },
  ];

  return (
    <div style={{ height: 800 }}>
      <DataGrid
        rows={dataBooks.ksiazka}
        columns={columns}
        pageSize={13}
        rowsPerPageOptions={[13]}
        getRowId={(dataBooks) => dataBooks.ident}
      />
    </div>
  );
};

export default App;
