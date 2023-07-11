<?php
include('process/config.php');
$result = @mysqli_query($con, "SELECT DISTINCT `position` FROM `job_offer` LIMIT 10;");
?>

<div class="filter-btn">
    <form action="" method="post">
        <?php
        echo '<input type="submit" id="position" name="position" class="filter-button" value="All">';
        while ($res = mysqli_fetch_array($result)) {
            $position=$res['position'];
            echo '<input type="submit" id="position" name="position" class="filter-button" value="'.$position.'">';
        }
        ?>
    </form>
</div>