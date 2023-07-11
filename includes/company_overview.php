
<?php
$empId=$_SESSION['employerId'];
$sqlcompanyInfo =@"SELECT * FROM `employer_information` WHERE `id`='$empId'";
$result = mysqli_query($con, $sqlcompanyInfo);
$value = mysqli_fetch_assoc($result);
$sqlcompanyPhoto =@"SELECT * FROM `employer_logo` WHERE `id`='$empId'";
$photo = mysqli_query($con, $sqlcompanyPhoto);
$photoDir = mysqli_fetch_assoc($photo);
?>
<div class="employer-overview">
  <div class="company-info">
  <h1 class="company-name"><?php echo $value['company_name'];?></h1>
  <h5 class="company-address"><?php echo $value['address'];?></h5>
  </div>
  <img src="<?php echo $photoDir['photo_dir'];?>" alt="" class="employer-logo">
  <!--<div class="stars">
    <label >Ratings:</label>
    <span class="star" data-rating="1">&#9733;</span>
    <span class="star" data-rating="2">&#9733;</span>
    <span class="star" data-rating="3">&#9733;</span>
    <span class="star" data-rating="4">&#9733;</span>
    <span class="star" data-rating="5">&#9733;</span>
  </div>-->

  <div class="company-desc">
    <h2>Company Overview</h2>  
    <p>
      <?php echo $value['company_overview'];?>
   </p>
    <h2>Company Industry</h2>
   <p>
   <?php echo $value['industry'];?>
   <h5>company registration number</h5>
   <?php echo $value['registered_number'];?>
   <h5>Website</h5>
   <a href=""><?php echo $value['website'];?></a>
   <h5>Company Size </h5>
   <?php echo $value['company_size'];?>
   </p>
   
  </div>
      
</div>

