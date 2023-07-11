<!DOCTYPE html>
<html lang="en">
<?php 
include('process/Store-Applicant-Information.php');
include('process/sidenavbar.php');
include ('process/content.php');
include('process/auth.php');
?>
<head>
    <link rel="stylesheet" href="Sign-up.css">
    <title></title>
<!-- CSS Library -->
    <?php
    include ('process/include_css.php');
    ?>
    <link href="css/style.css" rel="stylesheet">
    <link href="css/signp.css" rel="stylesheet">
    <link href="css/upload.css" rel="stylesheet">
    <link href="css/exam.css" rel="stylesheet">
</head>

<body style="background-color:White;" id="signupbody">
    <!-- Spinner Start -->
    <?php echo $spinnerloading;?>
    <!-- Spinner End -->
    
    <!-- Navbar Start -->
    <?php
    echo $applicant_navigation;
    echo $applicant_navigation1;
    ?>
    <!-- Navbar End -->
   


    <!-- Examenation for employment -->
        
  <div id="ExamPage">
      <a href="Written-interview.php" class="nav-item nav-link"><button class="button-5" role="button">Skip</button></a>
  <form name="form" action="process/store-exam-and-result.php" enctype="multipart/form-data" method="post">
    
    <H1> Examination</H1>
    <!-- psychological exam -->
    <h3>Psychologial Evaluation Test</h3>
    <label>1. I always want to</label>
    <input type="input"  name="psycho1" id='psycho1' required /><br><br>
    <label>2. if i given a task</label>
    <input type="input"  name="psycho2" id='psycho2' required /><br><br>
    <label>3. For me tomorow is</label>
    <input type="input"  name="psycho3" id='psycho3' required /><br><br>
    <label>4. It's funny but i scared of</label>
    <input type="input"  name="psycho4" id='psycho4' required /><br><br>
    <label>5. True friend is</label>
    <input type="input"  name="psycho5" id='psycho5' required /><br><br>
    <label>6. When i was a child</label>
    <input type="input"  name="psycho6" id='psycho6' required /><br><br>
    <label>7. My ideal(man, woman)</label>
    <input type="input"  name="psycho7" id='psycho7' required /><br><br>
    <label>8. My mother</label>
    <input type="input"  name="psycho8" id='psycho8' required /><br><br>
    <label>9. I will do anything to keep in mind the</label>
    <input type="input"  name="psycho9" id='psycho9' required /><br><br>
    <label>10. If my father is a</label>
    <input type="input"  name="psycho10" id='psycho10' required /><br><br>
    <label>11. I believe myself that i can</label>
    <input type="input"  name="psycho11" id='psycho11' required /><br><br>
    <label>12. The life is</label>
    <input type="input"  name="psycho12" id='psycho12' required /><br><br>
    <label>13. In School, My teacher is</label>
    <input type="input"  name="psycho13" id='psycho13' required /><br><br>
    <label>14. Almost all of my friends</label>
    <input type="input"  name="psycho14" id='psycho14' required /><br><br>
    <label>15. I despise people</label>
    <input type="input"  name="psycho15" id='psycho15' required /><br><br>
    <!-- Mathematical Exam -->
    <h3>Mathematical Evaluation Test</h3>
    <label>16. The sum of the numerator and denominators of a certain fraction is 8. If 2 is added to both the numerator and the denominator the value of the fraction is increased by 4/35 then the fraction is:</label>
    <input type="radio" id="math1" name="math1" value="a" checked><label>1/7</label> <br>
    <input type="radio" id="math1" name="math1" value="b"><label>5/3</label> <br>
    <input type="radio" id="math1" name="math1" value="c"><label>3/5</label> <br>
    <input type="radio" id="math1" name="math1" value="d"><label>35/4</label> <br>
    <input type="radio" id="math1" name="math1" value="e"><label>none</label><br><br>
    <label>17.In a number of three digits, the digits in the unit’s place and the ten’s place are equal and the sum of all the digits is 8. The digit of unit place is:</label>
    <input type="radio" id="math2" name="math2" value="a" checked><label>4</label><br>
    <input type="radio" id="math2" name="math2" value="b"><label>3</label><br>
    <input type="radio" id="math2" name="math2" value="c"><label>5</label><br>
    <input type="radio" id="math2" name="math2" value="d"><label>6</label><br>
    <input type="radio" id="math2" name="math2" value="e"><label>none</label> <br><br>    
    <label>18.The sum of the squares of three consecutive natural numbers is 2030. Then what is the middle number?</label><br>
    <input type="radio" id="math3" name="math3" value="a" checked><label>27</label><br>
    <input type="radio" id="math3" name="math3" value="b"><label>26</label><br>
    <input type="radio" id="math3" name="math3" value="c"><label>25</label><br>
    <input type="radio" id="math3" name="math3" value="d"><label>28</label><br>
    <input type="radio" id="math3" name="math3" value="e"><label>24</label><br><br>    
    <label>19.55% of a number is more than 1/3 rd of that number by 52. What is 2/5
    th of that number?</label><br>
    <input type="radio" id="math4" name="math4" value="a" checked><label>240</label><br>
    <input type="radio" id="math4" name="math4" value="b"><label>69</label><br>
    <input type="radio" id="math4" name="math4" value="c"><label>96</label><br>
    <input type="radio" id="math4" name="math4" value="d"><label>144</label><br>
    <input type="radio" id="math4" name="math4" value="e"><label>345</label><br><br>
    <label>20.The digit of two digit number are in the ratio of 2:3 and the number obtained by interchanging the digits is bigger than the original number by 27. What is the original number?</label><br>
    <input type="radio" id="math5" name="math5" value="a" checked><label>69</label><br>
    <input type="radio" id="math5" name="math5" value="b"><label>96</label><br>
    <input type="radio" id="math5" name="math5" value="c"><label>46</label><br>
    <input type="radio" id="math5" name="math5" value="d"><label>64</label><br>
    <input type="radio" id="math5" name="math5" value="e"><label>54</label><br><br>
    <h3>English Comprehension Evaluation Test</h3>
    <label>21.Reading Comprehension:  A dog is bigger than a mouse but smaller than an elephant.</label><br>
    <input type="radio" id="eng1" name="eng1" value="a" checked><label>A. A dog is smaller than a mouse.</label><br>
    <input type="radio" id="eng1" name="eng1" value="b"><label>B. A dog is very big.</label><br>
    <input type="radio" id="eng1" name="eng1" value="c"><label>C. A dog is the biggest.</label><br>
    <input type="radio" id="eng1" name="eng1" value="d"><label>D. An elephant is bigger than a dog.</label><br><br>
    <label>22.Verb Forms: We usually ______ dinner at 8:00 p.m.</label><br>
    <input type="radio" id="eng2" name="eng2" value="a" checked><label>A. Eat</label>    <br>
    <input type="radio" id="eng2" name="eng2" value="b"><label>B. Eating</label><br>
    <input type="radio" id="eng2" name="eng2" value="c"><label>C. Never have eaten</label><br>
    <input type="radio" id="eng2" name="eng2" value="d"><label>D. I don't know</label><br><br>
    <label>23.Verb Forms: Yesterday, we ______ a very interesting conference call about the new ERP project.</label> <br>
    <input type="radio" id="eng3" name="eng3" value="a" checked><label>A. Are having</label><br>
    <input type="radio" id="eng3" name="eng3" value="b"><label>B. Have</label><br>
    <input type="radio" id="eng3" name="eng3" value="c"><label>C. Had</label><br>
    <input type="radio" id="eng3" name="eng3" value="d"><label>D. Were had</label><br><br>
    <label>24.Verb: The plane _____ at New York's Kennedy Airport.</label><br>
    <input type="radio" id="eng4" name="eng4" value="a" checked><label>A. Took off</label><br>
    <input type="radio" id="eng4" name="eng4" value="b"><label>B. Took down</label><br>
    <input type="radio" id="eng4" name="eng4" value="c"><label>C. Landed</label><br>
    <input type="radio" id="eng4" name="eng4" value="d"><label>D. Drove</label><br><br>
    <label>25.Compound Nouns: Thomas White, who orchestrated ___________ rescue packages, will address the group.</label><br>
    <input type="radio" id="eng5" name="eng5" value="a" checked><label>A. Multi billion-dollars</label><br>
    <input type="radio" id="eng5" name="eng5" value="b"><label>B. Multi billions dollars</label><br>
    <input type="radio" id="eng5" name="eng5" value="c"><label>C. Multi billion-dollar</label><br>
    <input type="radio" id="eng5" name="eng5" value="d"><label>D. Multi billion dollar</label><br><br>
    <h3>Logical Reasoning Evaluation Test</h3>
    <div id="logic-question1">
    <input type="radio" id="logic1" name="logic1" value="a" checked><label>a.&nbsp;&nbsp;</label><img src="img/logicaltest1a.png">&nbsp;&nbsp;&nbsp;&nbsp;
    <input type="radio" id="logic1" name="logic1" value="b"><label>b.&nbsp;&nbsp;</label><img src="img/logicaltest1b.png"><br><br>
    <input type="radio" id="logic1" name="logic1" value="c"><label>c.&nbsp;&nbsp;</label><img src="img/logicaltest1c.png">&nbsp;&nbsp;&nbsp;&nbsp;
    <input type="radio" id="logic1" name="logic1" value="d"><label>d.&nbsp;&nbsp;</label><img src="img/logicaltest1d.png">
    </div>
    <label>26.</label><img src="img/logicaltest1.png">
    <div id="logic-question1">
    <input type="radio" id="logic2" name="logic2" value="a" checked><label>a.&nbsp;&nbsp;</label><img src="img/logicaltest2a.png">&nbsp;&nbsp;&nbsp;&nbsp;
    <input type="radio" id="logic2" name="logic2" value="b"><label>b.&nbsp;&nbsp;</label><img src="img/logicaltest2b.png"><br><br>
    <input type="radio" id="logic2" name="logic2" value="c"><label>c.&nbsp;&nbsp;</label><img src="img/logicaltest2c.png">&nbsp;&nbsp;&nbsp;&nbsp;
    <input type="radio" id="logic2" name="logic2" value="d"><label>d.&nbsp;&nbsp;</label><img src="img/logicaltest2d.png">
    </div><br><br>
    <label>27.</label><img src="img/logicaltest2.png">
    <div id="logic-question1">
    <input type="radio" id="logic3" name="logic3" value="a" checked><label>a.&nbsp;&nbsp;</label><img src="img/logicaltest3a.png">&nbsp;&nbsp;&nbsp;&nbsp;
    <input type="radio" id="logic3" name="logic3" value="b"><label>b.&nbsp;&nbsp;</label><img src="img/logicaltest3b.png"><br><br>
    <input type="radio" id="logic3" name="logic3" value="c"><label>c.&nbsp;&nbsp;</label><img src="img/logicaltest3c.png">&nbsp;&nbsp;&nbsp;&nbsp;
    <input type="radio" id="logic3" name="logic3" value="d"><label>d.&nbsp;&nbsp;</label><img src="img/logicaltest3d.png">
    </div>
    <br><br>
    <label>28.</label><img src="img/logicaltest3.png">
    <div id="logic-question1">
    <input type="radio" id="logic4" name="logic4" value="a" checked><label>a.&nbsp;&nbsp;</label><img src="img/logicaltest4a.png">&nbsp;&nbsp;&nbsp;&nbsp;
    <input type="radio" id="logic4" name="logic4" value="b"><label>b.&nbsp;&nbsp;</label><img src="img/logicaltest4b.png"><br><br>
    <input type="radio" id="logic4" name="logic4" value="c"><label>c.&nbsp;&nbsp;</label><img src="img/logicaltest4c.png">&nbsp;&nbsp;&nbsp;&nbsp;
    <input type="radio" id="logic4" name="logic4" value="d"><label>d.&nbsp;&nbsp;</label><img src="img/logicaltest4d.png">
    </div>
    <br><br>
    <label>29.</label><img src="img/logicaltest4.png">
    <div id="logic-question1">
    <input type="radio" id="logic5" name="logic5" value="a" checked><label>a.&nbsp;&nbsp;</label><img src="img/logicaltest5a.png">&nbsp;&nbsp;&nbsp;&nbsp;
    <input type="radio" id="logic5" name="logic5" value="b"><label>b.&nbsp;&nbsp;</label><img src="img/logicaltest5b.png"><br><br>
    <input type="radio" id="logic5" name="logic5" value="c"><label>c.&nbsp;&nbsp;</label><img src="img/logicaltest5c.png">&nbsp;&nbsp;&nbsp;&nbsp;
    <input type="radio" id="logic5" name="logic5" value="d"><label>d.&nbsp;&nbsp;</label><img src="img/logicaltest5d.png">
    </div>
    <br><br>
    <label>30.</label><img src="img/logicaltest5.png">
    <br><br>
    <input type="submit" name="submit" id="submit" value="Submit" class="button-5"/>
    </form>
    </div>
    </div></div><br><br><br>
    <!-- Sign-up End -->


   <!-- Footer Start -->
    <div class="container-fluid bg-dark text-light py-5 wow fadeInUp" data-wow-delay="0.3s" style="margin-top: auto;">
        <div class="container pt-5">
            <div class="row g-5 pt-4">
                <div class="col-lg-3 col-md-6">
                    <h3 class="text-white mb-4">Quick Links</h3>
                    <div class="d-flex flex-column justify-content-start">
                        <a class="text-light mb-2" href="../Pages/Applicant-Dashboard.php"><i class="bi bi-arrow-right text-primary me-2"></i>Home</a>
                        <a class="text-light mb-2" href="About-Us.php"><i class="bi bi-arrow-right text-primary me-2"></i>About Us</a>
                        <a class="text-light" href="Contact.php"><i class="bi bi-arrow-right text-primary me-2"></i>Contact Us</a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h3 class="text-white mb-4">Popular Links</h3>
                    <div class="d-flex flex-column justify-content-start">
                        <a class="text-light mb-2" href="../Pages/Applicant-Dashboard.php"><i class="bi bi-arrow-right text-primary me-2"></i>Home</a>
                        <a class="text-light mb-2" href="About-Us.php"><i class="bi bi-arrow-right text-primary me-2"></i>About Us</a>
                        <a class="text-light" href="Contact-Us.php"><i class="bi bi-arrow-right text-primary me-2"></i>Contact Us</a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h3 class="text-white mb-4">Get In Touch</h3>
                    <p class="mb-2"><i class="bi bi-geo-alt text-primary me-2"></i>Unit 1 Eden Townhomes 2001 Eden Street Corner, Pedro Gil St, Santa Ana, Manila, 1009 Metro Manila</p>
                    <p class="mb-2"><i class="bi bi-envelope-open text-primary me-2"></i>info@example.com</p>
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
    <div class="container-fluid text-light py-4" style="background: #051225; margin-top:auto;" >
        <div class="container">
            <div class="row g-0">
                <div class="col-md-6 text-center text-md-start">
                    <p class="mb-md-0">&copy; <a class="text-white border-bottom" href="#">Job Access brought to you by Crempco</a> © 2023. All rights reserved.</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>
    <script src="lib/twentytwenty/jquery.event.move.js"></script>
    <script src="lib/twentytwenty/jquery.twentytwenty.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
    <script src="js/signupform.js"></script>
    <script src="js/empform.js"></script>
    <script src="js/passwordvalid.js"></script>
    <script src="js/autotop-scroll.js"></script>
    <script src="js/upload.js"></script>
    <script src="js/post.js"></script>
</body>

</html>