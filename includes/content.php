<?php
/******Employer Dashboard Side Content*********************************************************************************************/

/**************************************************************************************************************/

/****Side Option*******************************************************************************************************************/

$sideOption=
<<<HTML
<div class="side-option">
<h3>SETTINGS</h3>
<button class="setting-button" onclick="editProfile()" type="button" role="button">Edit Profile</button><br>
<button class="setting-button" onclick="userpassword()" type="button" role="button">Username & Password</button><br>
<button class="setting-button" onclick="activityLog()" type="button" role="button">Activity Log</button>
</div>
HTML;

/**********************************************************************************************************************************/

/****Employer Edit Profile*************************************************************************************************************/
$ediProfile=
<<<HTML

<div class="company-profile" id="companyProfile">
    <form action="process/update_employer.php" method="post">
    <!-- First Page -->
    <div id="companyOverview">
        <h4>Company Profile Change</h4>
        <label>What's your company name?</label><br>
        <input type="text" class="text-field" id="companyName" name="companyName">
        <label>What's the industry of your business belongs to?</label><br>
HTML;
$editprofile2=
<<<HTML
        <label>Company Overview</label><br>
        <textarea class="company-overview" name="companyDesc" id="companyDesc" cols="80" rows="20"></textarea><br>
    </div>
    <!-- Second Page -->
    <div id="otherInfo" style="display: none;">
        <label>what's your registration number?</label><br>
        <input type="text" id="regNumber" name="regNumber" class="text-field">
        <label>What's your company address?</label><br>
        <input type="text" id="comAddress" name="comAddress" class="text-field">
        <label>What's your company contact number?</label><br>
        <input type="text" id="comContact" name="comContact" class="text-field">
        <label>What's your company website?</label><br>
        <input type="text" id="website" name="website" class="text-field">
        <label>What's your company size?</label><br>
        <input  id="minNumber" name="minNumber" class="number-fieldmax" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
        type = "number" maxlength = "5" placeholder="maximum">
        <input  id="maxNumber" name="maxNumber" class="number-fieldmin" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
        type = "number" maxlength = "5" placeholder="minimum">
        <br><br>
    </div>
    <!--Third Page-->
    <div id="companyPhoto" style="display:none;">
        <!-- Company Logo -->
        <form id="upload-form">
        <label for="fileInput" class="custom-file-upload">
         Choose Image
        </label>
        <input type="file" id="image-input" class="file-upload-btn" accept="image/*">
        </form>
        <div id="preview"></div><br>
        <input type="submit" value="Done" class="button-next" >
        </form>
        <!------------------------------------------------------------------------------------------->
    </div>

        

    <button class="button-next" id="nextbtn" onclick="nextpage()">NEXT</button>
    <button class="button-prev" id="prevbtn" onclick="prevpage()" style="display: none;">PREVIOUS</button>
</div>
</div>

HTML;


/**********************************************************************************************************************************/

/****User's*************************************************************************************************************************/

$employerUser=
<<<HTML
  <div id="addUser" class="add-user" style="display: none;">
    <div class="user-table" id="userTable" >
        <table class="all-table">
            <thead>
                <tr>
                    <th><button class="all-button" onclick="userAdd()">Add</button></th>
                    <th><button class="all-button" onclick="userUpdate()">Update</button></th>
                    <th><form><button class="all-button" >Delete</button></form></th>
                    <th></th>
                    <th></th>
                </tr>
                <tr>
                    <th><input type="checkbox" name="" id=""></th>
                    <th>Name</th>
                    <th>Gender</th>
                    <th>Address</th>
                    <th>Position</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>

                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    <div id="add" class=add style="display: none;">
    <button class="all-button" onclick="back()">Back</button>
        <form action="" onsubmit="createAccount(); return false;">
        <h1>Add User</h1>
        <h5>Name*</h5>
        <input type="text" class="name-field" name="" id="" required tabindex="1" placeholder="First Name">
        <input type="text" class="name-field" name="" id="" required tabindex="2" placeholder="Middle Name">
        <input type="text" class="name-field" name="" id="" required tabindex="3" placeholder="Last Name">
        <br><br>
        <h5 class="title-text">Gender:</h5><h5>Age:</h5>
        <input  class="number-fieldmin" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
        type = "number" maxlength = "3">
        <div class="gender-ratio">
        <input type="radio" name="select" id="option-1" checked>
        <input type="radio" name="select" id="option-2">
        <label for="option-1" class="option option-1">
        <div class="dot"></div>
        <span>Male</span>
        </label>
        <label for="option-2" class="option option-2">
        <div class="dot"></div>
        <span>Female</span>
        </label>
        </div>
        <br>
        <label>Username: </label><br><input type="text" class="username-field" name="username" id="username" required placeholder="Username" onkeydown="return /[a-z,a-z,0-9,@]/i.test(event.key)" required />
        <br><br>
        <!-- Password text field-->
        <label>Password: </label><br>
        <input type="Password" class="password-field" name="password" id="password" placeholder="Password" onkeydown="return /[a-z,0-9,@]/i.test(event.key)" required /><br><br>
        <input type="Password" class="password-field" name="confirm_password" id="confirm_password" placeholder=" Confirm Password" onkeydown="return /[a-z,0-9,@]/i.test(event.key)" required /><br>
        <!--Show/hide Password-->
        <input type="checkbox" onclick="myFunction()"><label>Show Password</label>
        <br><br>
        <input type="submit" class="all-button" value="Create Account">
        </form>
    </div>

    <div id="update" class="update" style="display: none;">
    <button class="all-button" onclick="back()">Back</button>
        <form action="" onsubmit="createAccount(); return false;">
        <h1>Update User</h1>
        <h5>Name*</h5>
        <input type="text" class="name-field" name="" id="" required tabindex="1" placeholder="First Name">
        <input type="text" class="name-field" name="" id="" required tabindex="2" placeholder="Middle Name">
        <input type="text" class="name-field" name="" id="" required tabindex="3" placeholder="Last Name">
        <br><br>
        <h5 class="update-text">Gender:</h5><h5>Age:</h5>
        <input  class="number-fieldmin" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
        type = "number" maxlength = "3">
        <div class="gender-ratio">
        <input type="radio" name="select" id="option-1" checked>
        <input type="radio" name="select" id="option-2">
        <label for="option-1" class="option option-1">
        <div class="dot"></div>
        <span>Male</span>
        </label>
        <label for="option-2" class="option option-2">
        <div class="dot"></div>
        <span>Female</span>
        </label>
        </div>
        <br><br>
        <input type="submit" class="all-button" value="Create Account">
        </form>
    </div>
</div>
HTML;

/**********************************************************************************************************************************/

/****Account***********************************************************************************************************************/
$userAccount =
<<<HTML
  <div id="userPassword" style="display:none;">
    <div class="account-form">
    <form id="changeAccount" action="process/change_password.php">
    <label>New Username: </label><br>
    <input type="text" class="account-field" name="username" id="username" required placeholder="Username" onkeydown="return /[a-z,a-z,0-9,@]/i.test(event.key)" required /><br><br>

    <label>New Password: </label><br>
    <input type="password" class="password-field" name="password" id="password" placeholder="Password" onkeydown="return /[a-z,0-9,@]/i.test(event.key)" minlength="8" required /><br><br>

    <input type="password" class="password-field" name="confirm_password" id="confirm_password" placeholder="Confirm Password" onkeydown="return /[a-z,0-9,@]/i.test(event.key)" minlength="8" required /><br>

    <input type="checkbox" onclick="myFunction()"><label>Show Password</label><br><br>

    <input type="submit" class="all-button" value="Update Account">
</form>
    </div>
</div>
HTML;
/**********************************************************************************************************************************/

/****Activity Log******************************************************************************************************************/
$activityLog=
<<<HTML
<div class="user-table" id="activityTable" style="display:none;">
        <table class="all-table">
            <thead>
                <tr>
                    <th>User</th>
                    <th>Activity</th>
                    <th>Date</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Admin</td>
                    <td>Log-in</td>
                    <td>May 16 2023</td>
                </tr>
            </tbody>
        </table>
    </div>
HTML;  
/**********************************************************************************************************************************/

/**** Create Employer*************************************************************************************************************/
$createEmp=
<<<HTML

<div class="create-profile" id="companyProfile">
    <a href="login_form.php"><button class="all-button">Back</button></a>
    <br><br>
    <form action="process/create_employer.php" enctype="multipart/form-data" method="post">
    <!-- First Page -->
    <div id="companyOverview">
        <h4>Employer Sign-up</h4>
        <label>What's your company name?*</label><br>
        <input type="text" id="companyName" name="companyName" class="text-field"require>
        <label>What's your President/CEO name?*</label><br>
        <input type="text" id="ceoPresident" name="ceoPresident" class="text-field" require>
        <label>What's the industry of your business belongs to?</label><br>
HTML;
$createEmp2=
<<<HTML
        <label>Company Overview*</label><br>
        <textarea class="company-overview" name="overview" id="overview" cols="80" rows="20" require></textarea><br>
    </div>
    <!-- Second Page -->
    <div id="otherInfo" class="other-info" style="display: none;">
        <label>what's your company registration number?*</label><br>
        <input type="text" class="text-field" id="registeredNum" name="registeredNum" require>
        <label>What's your company address?*</label><br>
        <input type="text" id="address" name="address" class="text-field" require>
        <label>What's your company contact number?*</label><br>
        <input id="contact" name="contact" class="text-field" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
         type = "number" maxlength = "11" require>
        <label>What's your company website?</label><br>
        <input type="text" id="website" name="website" class="text-field">
        <label>What's your company size?</label><br>
        <input  class="number-fieldmax" id="minNumber" name="minNumber" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
        type = "number" maxlength = "5" placeholder="maximum">
        <input  class="number-fieldmin" id="maxNumber" name="maxNumber" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
        type = "number" maxlength = "5" placeholder="minimum">
        <br><br>
    </div>
    <!--Third Page-->
    <div id="companyPhoto" class="company-photo" style="display:none;">
        <!-- Company Logo -->
        <form id="upload-form">
        <label for="fileInput" class="custom-file-upload">
        Select Company Registration File<br> 
        Choose File*
        </label>
        <input type="file" id="file-input" name="file-input" class="file-upload-btn" accept=".pdf,.docx,image/*" required>
        <label for="fileInput" class="custom-file-upload">
         Choose Image*
        </label>
        <input type="file" id="image-input" name="image-input" class="file-upload-btn" accept="image/*" required>
        </form>
        <div id="preview"></div><br>
        <label>Username: </label><br><input type="text" class="" name="username" id="username" required placeholder="Username" onkeydown="return /[a-z,a-z,0-9,@]/i.test(event.key)" required />
        <br><br>
        <!-- Password text field-->
        <label>Password: </label><br>
        <input type="Password" class="" name="password" id="password" placeholder="Password" onkeydown="return /[a-z,0-9,@]/i.test(event.key)" required /><br><br>
        <input type="Password" class="" name="confirm_password" id="confirm_password" placeholder=" Confirm Password" onkeydown="return /[a-z,0-9,@]/i.test(event.key)" required /><br>
        <!--Show/hide Password-->
        <input type="checkbox" onclick="myFunction()"><label>Show Password</label>
        <br><br>
        <!------------------------------------------------------------------------------------------->
        <input type="submit" value="Done" class="button-next">
        </form>
</div>
    <button class="button-next" id="nextbtn" onclick="nextpage()">NEXT</button>
    <button class="button-prev" id="prevbtn" onclick="prevpage()" style="display: none;">PREVIOUS</button>
</div>
</div>

HTML;


/**********************************************************************************************************************************/

/****Job Post Page******************************************************************************************************************/
$jobPost=
<<<HTML
<div id="job-post" class="job-post">
    <!-- Company Logo -->
<form action="process/job_offer_post.php" enctype="multipart/form-data" method="post">
    <label for="fileInput" class="custom-file-upload">
         Choose Image
    </label>
    <br>
    <input type="file" id="image-input" name="image-input" class="input-image file-upload-btn" accept="image/*" >
    
<div class="post-preview" id="preview"></div><br>
</div>
<div class="desc-container">
    <label for="">Title:</label><br>
    <input type="text" class="title-field" name="jobTitle" id="jobTitle" maxlength="30" required><br>

    <label for="">Position:</label><br>
    <input type="text" class="position-field" name="position" id="position" required><br>

    <label for="">Salary:</label><br>
    <input type="text" class="salary-field" name="salary" id="salary" maxlength="12" required><br>

    <label for="">Schedule:</label><br>
    <input type="text" class="sched-field" name="Schedule" id="Schedule" maxlength="12" required><br>
HTML;
$jobPostpart=
<<<HTML
<br><br>
<label for="description">Description:</label><br>
<textarea class="desc-field" name="description" id="description" cols="60" rows="13" required></textarea><br><br>
<label for="requirment" class="req-title">Requirement:</label><br>
<textarea class="req-field" name="requirement" id="requirement" cols="60" rows="13" required>•</textarea>
   <br>
    <input type="submit" class="post-button" value="Post">
</form>
        
</div>
HTML;
/**********************************************************************************************************************************/

/*****Applicant Carousel*****************************************************************************************************************************/
$carousel=<<<HTML
<!-- Carousel Start -->
    <div class="container-fluid p-0" id="carouselcontent">
        <div id="header-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="img/carousel-1.png" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 1000px;">
                            <h5 class="text-white text-uppercase mb-3 animated slideInDown">Want To Take Job Abroad </h5>
                            <h1 class="display-1 text-white mb-md-4 animated zoomIn">Take The Best Job That Suit To You Internationally</h1>
                            <a href="sign-up.php" class="all-button btn-primary py-md-3 px-md-5 me-3 animated slideInLeft" >Sign Up Now !</a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="img/carousel-2.jpg" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 1000px;">
                            <h5 class="text-white text-uppercase mb-3 animated slideInDown">Want To Take Job Locally</h5>
                            <h1 class="display-1 text-white mb-md-4 animated zoomIn">Take The Best Job That Suit To You Here in Philippines</h1>
                            <a href="#" class="all-button btn-primary py-md-3 px-md-5 me-3 animated slideInLeft" >Go to Job Access</a>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#header-carousel"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <!-- Carousel End -->
HTML;
/**********************************************************************************************************************************/

/****Applicant Content******************************************************************************************************************************/
$applicantdashboardcontent=<<<HTML
<div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s" id="bodyofcontent">

                    <h3 class="quote-for-job1">Right person for the right job</h3>
                    <h5 class="quote-for-job2">we can help you to find the best position  </h5>
                    <h5 class="quote-for-job3">that match your experience</h5>
                    <h5 class="quote-for-job4">and if you have professional work experience </h5>
                    <h5 class="quote-for-job5">or solid technical and interpersonal skills and interest </h6>
                    <h5 class="quote-for-job6">in working for the best organization overseas </h5>
                    <a href="job_offer.php" class="apply-now-btn">Apply Now!</a>
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-7">
                    <div class="section-title mb-4">
                            <img src="img/Work_Global-Wordpress-Banner.gif" class="applicant-dash-img">
                        </div>
                    </div>
                </div>
            </div>
        </div>
HTML;
/**********************************************************************************************************************************/

/**** Half Part content of Applicant Dashboard ******************************************************************************************************************************/
$applicantdashboardcontenthalf=<<<HTML
</div>
            </div>
<div class="container-fluid py-5" id="contcatus">
        <div class="container">
            <div class="row g-5">
                <div class="col-xl-4 col-lg-6 wow slideInUp" data-wow-delay="0.1s">
                    <div class="bg-light rounded h-100 p-5">
                        <div class="section-title">
                            <h5 class="position-relative d-inline-block text-primary text-uppercase">Contact Us</h5>
                            <h1 class="display-6 mb-4">Feel Free To Contact Us</h1>
                        </div>
                        
                        <div class="container-fluid py-5" id="contcatus">
</div>
                        <div class="d-flex align-items-center mb-2">
                            <i class="bi bi-geo-alt fs-1 text-primary me-3"></i>
                            <div class="text-start">
                                <h5 class="mb-0">Our Office</h5>
                                <span>Unit 1 Eden Townhomes 2001 Eden Street Corner, Pedro Gil St, Santa Ana, Manila, 1009 Metro Manila</span>
                            </div>
                        </div>
                        <div class="d-flex align-items-center mb-2">
                            <i class="bi bi-envelope-open fs-1 text-primary me-3"></i>
                            <div class="text-start">
                                <h5 class="mb-0">Email Us</h5>
                                <span>info@crempcoop.com</span>
                            </div>
                        </div>
                        <div class="d-flex align-items-center">
                            <i class="bi bi-phone-vibrate fs-1 text-primary me-3"></i>
                            <div class="text-start">
                                <h5 class="mb-0">Call Us</h5>
                                <span>+63 02 561 0405</span>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Google map start-->
                <div class="col-xl-4 col-lg-12 wow slideInUp" data-wow-delay="0.6s">
                    <iframe class="position-relative rounded w-100 h-400"
                        src="https://maps.google.com/maps?q=SMC Manpower Agency Philippines Company, Unit 1 Eden Townhomes 2001 Eden Street Corner, Pedro Gil Street, Santa Ana, Manila, Metro Manila&t=&z=10&ie=UTF8&iwloc=&output=embed"
                        frameborder="0" style="min-height: 400px; border:0;" allowfullscreen="" aria-hidden="false"
                        tabindex="0"></iframe>
                </div>
                <!--Google map end-->
            </div>
        </div>
    </div>

HTML;
/**********************************************************************************************************************************/

/**** About Us******************************************************************************************************************************/
$aboutUs=<<<HTML
<div class="container-fluid py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-xl-4 col-lg-6 wow slideInUp" data-wow-delay="0.1s">
                    <div class="bg-light rounded h-100 p-5">
                        <div class="section-title">
                            <h5 class="position-relative d-inline-block text-primary text-uppercase">Contact Us</h5>
                            <h1 class="display-6 mb-4">Feel Free To Contact Us</h1>
                        </div>
                        <!-- contact and address  start-->
                        <div class="d-flex align-items-center mb-2">
                            <i class="bi bi-geo-alt fs-1 text-primary me-3"></i>
                            <div class="text-start">
                                <h5 class="mb-0">Our Office</h5>
                                <span>Unit 1 Eden Townhomes 2001 Eden Street Corner, Pedro Gil St, Santa Ana, Manila, 1009 Metro Manila</span>
                            </div>
                        </div>
                        <div class="d-flex align-items-center mb-2">
                            <i class="bi bi-envelope-open fs-1 text-primary me-3"></i>
                            <div class="text-start">
                                <h5 class="mb-0">Email Us</h5>
                                <span> info@crempcoop.com</span>
                            </div>
                        </div>
                        <div class="d-flex align-items-center">
                            <i class="bi bi-phone-vibrate fs-1 text-primary me-3"></i>
                            <div class="text-start">
                                <h5 class="mb-0">Call Us</h5>
                                <span>+63 02 561 0405</span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- contact and address  start-->

                <!--Google map start-->
                <div class="col-xl-4 col-lg-12 wow slideInUp" data-wow-delay="0.6s">
                    <iframe class="position-relative rounded w-100 h-400"
                        src="https://maps.google.com/maps?q=SMC Manpower Agency Philippines Company, Unit 1 Eden Townhomes 2001 Eden Street Corner, Pedro Gil Street, Santa Ana, Manila, Metro Manila&t=&z=10&ie=UTF8&iwloc=&output=embed"
                        frameborder="0" style="min-height: 400px; border:0;" allowfullscreen="" aria-hidden="false"
                        tabindex="0"></iframe>
                </div>
                <!--Google map end-->
            </div>
        </div>
    </div>

HTML;
/**********************************************************************************************************************************/

/**** Applicant Footer******************************************************************************************************************************/

$applicantFooter=
<<<HTML
<div class="container-fluid bg-dark text-light py-5 wow fadeInUp" data-wow-delay="0.3s" style="margin-top: auto;">
        <div class="container pt-5">
            <div class="row g-5 pt-4">
                <div class="col-lg-3 col-md-6">
                    <h3 class="text-white mb-4">Quick Links</h3>
                    <div class="d-flex flex-column justify-content-start">
                        <a class="text-light mb-2" href="index.php"><i class="bi bi-arrow-right text-primary me-2"></i>Home</a>
                        <a class="text-light mb-2" href="about_us.php"><i class="bi bi-arrow-right text-primary me-2"></i>About Us</a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h3 class="text-white mb-4">Popular Links</h3>
                    <div class="d-flex flex-column justify-content-start">
                        <a class="text-light mb-2" href="index.php.php"><i class="bi bi-arrow-right text-primary me-2"></i>Home</a>
                        <a class="text-light mb-2" href="about_us.php"><i class="bi bi-arrow-right text-primary me-2"></i>About Us</a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h3 class="text-white mb-4">Get In Touch</h3>
                    <p class="mb-2"><i class="bi bi-geo-alt text-primary me-2"></i>Unit 1 Eden Townhomes 2001 Eden Street Corner, Pedro Gil St, Santa Ana, Manila, 1009 Metro Manila</p>
                    <p class="mb-2"><i class="bi bi-envelope-open text-primary me-2"></i>info@crempcoop.com</p>
                    <p class="mb-0"><i class="bi bi-telephone text-primary me-2"></i>+012 345 67890</p>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h3 class="text-white mb-4">Follow Us</h3>
                    <div class="d-flex">
                        <a class="btn btn-lg btn-primary btn-lg-square rounded me-2" href="#"><i class="fab fa-twitter fw-normal"></i></a>
                        <a class="btn btn-lg btn-primary btn-lg-square rounded me-2" href="#"><i class="fab fa-facebook-f fw-normal"></i></a>
                        <a class="btn btn-lg btn-primary btn-lg-square rounded" href="#"><i class="fab fa-instagram fw-normal"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid text-light py-4" style="background: #051225; margin-top:auto;">
        <div class="container">
            <div class="row g-0">
                <div class="col-md-6 text-center text-md-start">
                    <p class="mb-md-0">&copy; <a class="text-white border-bottom" href="index.php">Work Global brought to you by Crempco</a> © 2023. All rights reserved.<a href="privacy_policy.php" class="text-white border-bottom"><u>Privacy Policy</u></a><br>This 
                    Website Still under development</p>
                </div>
            </div>
        </div>
    </div>
HTML;
/**********************************************************************************************************************************/

/****Applicant Login******************************************************************************************************************************/
$applicantLogin=
<<<HTML
    <div id="login-form">
        <form action = "" method = "post">
        <div class="content">
<div class="container">
<div class="row">
<div class="col-md-6">
<img src="img/undraw_remotely_2j6y.svg" alt="Image" class="img-fluid">
</div>
<div class="col-md-6 contents">
<div class="row justify-content-center">
<div class="col-md-8">
<div class="mb-4">
<h3>Sign In</h3>
<p class="mb-4"></p>
</div>
<form action="https://preview.colorlib.com/theme/bootstrap/login-form-07/#" method="post">

<label for="username">Username</label><br>
<input type="text" class="app-username" id="username" name="username"><br><br>

<label for="password">Password</label><br>
  <input type="password" class="app-password" name="password" autocomplete="current-password" require id="id_password">
  <i class="far fa-eye" id="togglePassword" style="margin-left: -30px; cursor: pointer;"></i>
  <br><br>
<a href="sign-up.php">Sign-Up</a><a href="forgot_password_app" style="margin-left:20px;">Forgot Password</a><br>


<input type="submit" value="Log In" class="all-button">
        </form>
</div></div></div></div></div></div>
HTML;
/**********************************************************************************************************************************/

/****Applicant Registration******************************************************************************************************************************/
$applicantRegistration=
<<<HTML
<div id="firstPage" style="background-color:white; background-repeat: no-repeat; background-size: cover;">
<a href="index.php"><button class="all-button">Back </button></a>
</div>


<!-- Sign-up Start -->
<!--First page(Personal Information)-->
<div id="firstPage" style="background-color:white; background-repeat: no-repeat; background-size: cover;">
<form name="form" action="process/applicant_registration.php" onsubmit="return validateForm()" enctype="multipart/form-data" method="post">
<!-- Resume insert -->

<br><h1>Personal Information</h1>
<label for="fileInput" class="custom-file-upload">
     Choose Resume
    </label>
<input type="file" id="file-input" name="file-input" class="file-upload-btn" accept=".PDF,.DOCX" require>
<br><br>



<!-- firstname text field -->
<label>First Name*:</label><br>
<input type="text" class="first-name" name="firstName" id="firstName" required placeholder="First Name" autocapitalize="words" onkeydown="return /[a-z, ]/i.test(event.key)" tabindex="1"/><br>
<!-- middle name text field-->
<label>Middle Name: </label><br>
<input type="text" class="middle-name" name="middleName" id="middleName" placeholder="Middle Name" onkeydown="return /[a-z, ]/i.test(event.key)" tabindex="2"/><br>
<!-- last name text field-->
<label>Last Name*: </label><br>
<input type="text" class="last-name" name="lastName" id="LastName" required placeholder="Last Name" onkeydown="return /[a-z, ]/i.test(event.key)" tabindex="3"/><br>
<!-- suffix name text field-->
<label id="labelsuffix">Suffix: </label><br>
<input type="text" class="suffix" name="suffix" id="suffix" placeholder="Ex. Jr., Sr., I, etc."onkeydown="return /[a-z, ,.]/i.test(event.key)" tabindex="4"/>
<br>
<label id="labelgender">Gender: </label><br>
<div class="gender-ratio">
<input type="radio" name="Gender" id="option-1" value="Male" checked>
<input type="radio" name="Gender" id="option-2" value="Female">
<label for="option-1" class="option option-1">
<div class="dot"></div>
<span>Male</span>
</label>
<label for="option-2" class="option option-2">
<div class="dot"></div>
<span>Female</span>
</label>
</div><br>
<label id="contact-label">Phone Number*:</label><br>
<input class="applicant-contact" name="applicantContact" id="applicantContact" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" type = "number" maxlength = "11" 
placeholder="Ex.: 09123456789" required tabindex="5"/>




<h1>Account Registration: </h1>
<!-- account Registration Form -->
<label class="email-label">Email: </label>
<input type="email" class="applicant-email" name="email" id="email" placeholder="Email" tabindex="5"/>
<!-- Username text field -->
<label class="email-label">Username*: </label><br>
<input type="text" class="app-username" name="username" id="username" required placeholder="Username" onkeydown="return /[a-z,a-z,0-9,@]/i.test(event.key)" minlength="8" required tabindex="6"/>
<br>
<!-- Password text field-->
<label class="email-label">Password*: </label><br>
<input type="Password" class="app-password" name="password" id="password" placeholder="Password:" onkeydown="return /[a-z,0-9,@]/i.test(event.key)" minlength="8" required tabindex="7"/>
<br><label class="email-label">Password Confirm*: </label><br>
<input type="Password" class="confirm-pass" name="confirm_password" id="confirm_password" placeholder="Password:" onkeydown="return /[a-z,0-9,@]/i.test(event.key)" minlength="8" required tabindex="8"/>
<!--Show/hide Password--><br>
<input type="checkbox" onclick="myFunction()" class="show-password"><label class="email-label">Show Password</label>
<br><br>
<input class="all-button" type="submit" name="submit" value="Register"/>
</form>
</div>
<!-- Sign-up End -->
HTML;
/**********************************************************************************************************************************/

/****Add Applicant******************************************************************************************************************************/
$addApplicant=
<<<HTML
<div id="firstPage" style="background-color:white; background-repeat: no-repeat; background-size: cover;">
<a href="admin_application.php"><button class="all-button">Back </button></a>
</div>


<!-- Sign-up Start -->
<!--First page(Personal Information)-->
<div id="firstPage" style="background-color:white; background-repeat: no-repeat; background-size: cover;">
<form name="form" action="process/add_applicant.php" onsubmit="return validateForm()" enctype="multipart/form-data" method="post">
<!-- Resume insert -->

<br><h1>Personal Information</h1>
<label for="fileInput" class="custom-file-upload">
     Choose Resume
    </label>
<input type="file" id="file-input" name="file-input" class="file-upload-btn" accept=".PDF,.DOCX" require>
<br><br>



<!-- firstname text field -->
<label>First Name*:</label><br>
<input type="text" class="first-name" name="firstName" id="firstName" required placeholder="First Name" autocapitalize="words" onkeydown="return /[a-z, ]/i.test(event.key)" tabindex="1"/><br>
<!-- middle name text field-->
<label>Middle Name: </label><br>
<input type="text" class="middle-name" name="middleName" id="middleName" placeholder="Middle Name" onkeydown="return /[a-z, ]/i.test(event.key)" tabindex="2"/><br>
<!-- last name text field-->
<label>Last Name*: </label><br>
<input type="text" class="last-name" name="lastName" id="LastName" required placeholder="Last Name" onkeydown="return /[a-z, ]/i.test(event.key)" tabindex="3"/><br>
<!-- suffix name text field-->
<label id="labelsuffix">Suffix: </label><br>
<input type="text" class="suffix" name="suffix" id="suffix" placeholder="Ex. Jr., Sr., I, etc."onkeydown="return /[a-z, ,.]/i.test(event.key)" tabindex="4"/>
<br>
<label id="labelgender">Gender: </label><br>
<div class="gender-ratio">
<input type="radio" name="Gender" id="option-1" value="Male" checked>
<input type="radio" name="Gender" id="option-2" value="Female">
<label for="option-1" class="option option-1">
<div class="dot"></div>
<span>Male</span>
</label>
<label for="option-2" class="option option-2">
<div class="dot"></div>
<span>Female</span>
</label>
</div><br>
<label id="contact-label">Phone Number*:</label><br>
<input class="applicant-contact" name="applicantContact" id="applicantContact" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" type = "number" maxlength = "11" 
placeholder="Ex.: 09123456789" required tabindex="5"/>
<!-- account Registration Form --><br>
<label class="email-label">Email: </label>
<input type="email" class="applicant-email" name="email" id="email" placeholder="Email" tabindex="5"/>
HTML;
$addApplicantpart=
<<<HTML
<input class="all-button" type="submit" name="submit" value="Add"/>
</form>
</div>
<!-- Sign-up End -->
HTML;
/**********************************************************************************************************************************/

/**** Applicant profile Update******************************************************************************************************************************/
$applicantProfile=
<<<HTML
    <!--Applicant update profile Start -->
    <!--First page(Personal Information)-->
    <div class="firstPage" id="updatePage" style="display:none;">
    <form name="form" action="process/applicant_update.php" onsubmit="return validateForm()" enctype="multipart/form-data" method="post">
    <!-- Resume insert -->

    <br><h1>Personal Information</h1>
    <label for="fileInput" class="custom-file-upload">
         Choose Image
    </label>
    <br>
    <input type="file" id="image-input" name="image-input" class="input-image file-upload-btn" accept="image/*">
    
<div class="post-preview" id="preview"></div><br><br>
    <label for="fileInput" class="custom-file-upload">
     Choose Resume
    </label>
    <input type="file" id="file-input" name="file-input" class="file-upload-btn" accept=".PDF,.DOCX" >
    <br><br>

    <!-- firstname text field -->
    <label>First Name*:</label><br>
    <input type="text" class="first-name" name="firstName" id="firstName"  placeholder="First Name" autocapitalize="words" onkeydown="return /[a-z, ]/i.test(event.key)" tabindex="1"/><br>
    <!-- middle name text field-->
    <label>Middle Name: </label><br>
    <input type="text" class="middle-name" name="middleName" id="middleName" placeholder="Middle Name" onkeydown="return /[a-z, ]/i.test(event.key)" tabindex="2"/><br>
    <!-- last name text field-->
    <label>Last Name*: </label><br>
    <input type="text" class="last-name" name="lastName" id="LastName"  placeholder="Last Name" onkeydown="return /[a-z, ]/i.test(event.key)" tabindex="3"/><br>
    <!-- suffix name text field-->
    <label id="labelsuffix">Suffix: </label><br>
    <input type="text" class="suffix" name="suffix" id="suffix" placeholder="Ex. Jr., Sr., I, etc."onkeydown="return /[a-z, ,.]/i.test(event.key)" tabindex="4"/>
    <br>
    <label id="labelgender">Gender: </label><br>
    <div class="gender-ratio">
    <input type="radio" name="Gender" id="option-1" value="Male" checked>
    <input type="radio" name="Gender" id="option-2" value="Female">
    <label for="option-1" class="option option-1">
    <div class="dot"></div>
    <span>Male</span>
    </label>
    <label for="option-2" class="option option-2">
    <div class="dot"></div>
    <span>Female</span>
    </label>
    </div><br>
    <label id="contact-label">Phone Number*:</label><br>
    <input class="applicant-contact" name="applicantContact" id="applicantContact" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" type = "number" maxlength = "11" 
    placeholder="Ex.: 09123456789"  tabindex="5"/>
    <br><br>
<input class="all-button" type="submit" name="submit" value="Register"/>
</form>
</div><br><br>
HTML;

/**********************************************************************************************************************************/
