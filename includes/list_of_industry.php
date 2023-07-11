<?php

/***Calling Table of Industry****************************************************/
$industryQuery = @"SELECT * FROM company_industries";
$result = mysqli_query($con, $industryQuery);
/*******************************************************/

echo '<ul class="list-industry">';
while ($row = mysqli_fetch_assoc($result)) {
  echo '<li>';
  echo '<input type="checkbox" name="selected_items[]" value="' . $row['industry_name'] . '">';
  echo $row['industry_name'];
  echo '</li>';
}
echo '</ul>';


?>