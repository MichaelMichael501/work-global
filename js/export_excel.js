function exportTable() {
  // Get the table element
  var table = document.getElementById("table");

  // Create a new workbook
  var wb = XLSX.utils.book_new();

  // Convert the table to a worksheet and add it to the workbook
  var ws = XLSX.utils.table_to_sheet(table);
  XLSX.utils.book_append_sheet(wb, ws, "Sheet1");

  // Save the workbook as a file
  XLSX.writeFile(wb, "Applicant_List.xlsx");
}