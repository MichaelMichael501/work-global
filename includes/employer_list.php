<div class="list-container">
    <h1 class="list-title">Employers</h1>
    <div class="list-employer">
        <?php
        $employerLogo = @mysqli_query($con, "SELECT * FROM `employer_logo`");

        while ($res = mysqli_fetch_array($employerLogo)) {
            echo '<form method="post" action="job_offer_emp.php">';
                echo '<button type="submit" class="image-btn" name="submit_button" style="border: none; background: none; padding: 0;">';
                    echo '<input type="hidden" id="employerId" name="employerId" value="'.$res['id'].'">';
                    echo '<img src="' . $res['photo_dir'] . '" class="employer-list" alt="Click me">';
                echo '</button>';
            echo '</form>';
        }
        ?>
    </div>
</div>