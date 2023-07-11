function exportToExcel() {
  var htmltable = document.getElementById('table').outerHTML;
  var uri = 'data:application/vnd.ms-excel;base64,';
  var base64 = function(s) {
    return window.btoa(unescape(encodeURIComponent(s)));
  };
  var format = function(s, c) {
    return s.replace(/{(\w+)}/g, function(m, p) {
      return c[p];
    });
  }
  var ctx = {
    worksheet: 'Sheet1',
    table: htmltable
  };
  var link = document.createElement('a');
  link.href = uri + base64(format(template, ctx));
  link.download = 'table.xls';
  link.click();
}
