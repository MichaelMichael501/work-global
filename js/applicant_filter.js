function filterTable() {
  const citySelect = document.getElementById('location');
  const selectedCity = citySelect.value;

  const table = document.getElementById('table');
  const rows = table.getElementsByTagName('tr');

  // Loop through the rows, starting from index 1 to skip the table header row
  for (let i = 1; i < rows.length; i++) {
    const row = rows[i];
    const city = row.getElementsByTagName('td')[5].textContent;

    // Apply filtering based on the selected city
    if (selectedCity === 'all' || selectedCity === city) {
      row.classList.remove('hide');
    } else {
      row.classList.add('hide');
    }
  }
}

// Attach the filterTable function to the onchange event of the city select element
const citySelect = document.getElementById('citySelect');
citySelect.onchange = filterTable;