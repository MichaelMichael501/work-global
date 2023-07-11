<?php
include('process/config.php');

$sqllocation=mysqli_query($con,"SELECT * FROM `job_offer`");
?>
<label for="">Job Offer:</label><br>
<select class="select-job" name="jobOffer" id="jobOffer">
    <?php
    while($res = mysqli_fetch_array($sqllocation)) 
    {  
        echo "<option value='".$res['job_id']."'>".$res['job_title']."/".$res['position']."</option>";  
    }
    ?>    
</select>