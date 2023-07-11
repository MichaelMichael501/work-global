<?php
include("process/config.php");
?>
<div class="application-list">
  <table class="application-table">
  <thead>
      <tr>
        <th colspan="2"><a href="#" class="anchor-list">Job List</a></th>
      </tr>
      <tr>
        <th>Title</th>
        <th>Position</th>
      </tr>
    </thead>
            <tbody>
            <?php 
            $empId=$_SESSION['employerId'];
            $sqlJob=mysqli_query($con,"SELECT * FROM `job_offer` WHERE `employer_id`='$empId' AND `status`<>'Expire'");
            while($res = mysqli_fetch_array($sqlJob)) 
            {
         
            echo "<tr>";
            echo "<td class='data-compress'>".$res['job_title']."</td>";
            echo "<td class='data-compress'>".$res['position']."</td>";
            echo "</tr>";
            ?>
             
            <?php
            }
            ?>   
            </tbody>
        
<?php
?>
    </table>
</div>