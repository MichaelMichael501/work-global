<?php
include('process/config.php');

$sqllocation=mysqli_query($con,"SELECT * FROM `countries`");
?>
<label for="">Location:</label><br>
<select class="select-prov" name="location" id="location">
    <?php
    while($res = mysqli_fetch_array($sqllocation)) 
    {  
        echo "<option value='".$res['country_name']."'>".$res['country_name']."</option>";  
    }
    ?>    
</select>

