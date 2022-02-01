<!-- ==================== Start Footer ==================== -->

<footer class="hello footer-half sub-bg section-padding pb-0">
    <div class="container">
        <div class="row">
            <div class="col-lg-5 col-md-5 col-sm-5 col-xs-12 ">
                <div class="cont">
                    <div class="logo">
                        <a href="#0">
                            <img class="footlogo" src="img/oren-home/logo/Oren Logo.png" alt="">
                        </a>
                    </div>
                    <div class="con-info custom-font timefont">
                        <ul>
                            <li><a href="mailto:contact@orennow.com"> <img src="img/oren-home//new-images//Group (7).png" alt=""> Email: contact@orennow.com</a></li> <br>

                            <li style="font-weight: 600;"> <img src="img/oren-home/new-images/Group (8).png" alt=""> INDIA</li>
                            <li>Address : Mumbai </li>
                            <li><a href="tel: +91 9673794567">Phone : +91 9673794567</a></li>
                            </li><br>
                            <li style="font-weight: 600;"> <img src="img/oren-home/new-images/Group (8).png" alt=""> USA</li>
                            <li>Address : Chicago </li>
                            <li><a href="tel: +1 (773) 236-6782">Phone : +1 (773) 236-6782</a></li>
                        </ul>

                    </div>

                    <!-- ==================================== social media ================================================== -->

                    <h3 class="follow">Follow Us</h3>
                    <div class="social-icon social-icon2">


                        <div class="social">
                            <!-- <a href="#0" class="icon fbicon">
                                    <img src="img/oren-home/Footer/Facebook Logo.png" alt="">
                                </a> -->
                            <a href="https://www.instagram.com/oren.now/" target="_blank" class="icon instaicon">
                                <img src="img/oren-home/Footer/Instagram Logo.png" alt="">
                            </a>
                            <a href="https://www.linkedin.com/company/orennow" target="_blank" class="icon linkicon">
                                <img src="img/oren-home/Footer/LinkedIN Logo.png" alt="">
                            </a>

                        </div>
                    </div>


                </div>
            </div>
            <div class="col-lg-5 col-md-5 col-sm-5  offset-sm-2 col-xs-12  offset-lg-2">
                <div class="subscribe mb-50">

                    <h2 class="getinhead footerhead footergetinhead" id="form-head">Want to connect with us?</h2>


                    <!-- <form action="" method="post">
                        <div class="form-group">
                            <input type="email" class="form-control" name="connectemail" id="exampleInputEmail2" aria-describedby="emailHelp" placeholder="Enter email">
                        </div>
                         <button class="button button3" type="submit" name="request">Request Demo</button>
                    </form> -->

                    <form id="footer-form">
                        <div class="row">
                            <div class="col">
                                <input type="text" class="form-control" id="fname" placeholder="First Name" name="fname">
                            </div>
                            <div class="col">
                                <input type="text" class="form-control" placeholder="Last Name" name="lname">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <input type="text" class="form-control" id="email" placeholder="Enter email" name="mail">
                            </div>
                            <div class="col">
                                <input type="number" class="form-control" placeholder="Enter Phone" name="phone">
                            </div>
                        </div>
                        <select name="cars" class="custom-select form-control">
                            <option selected>Select</option>
                            <option value="volvo">Value</option>
                            <option value="fiat">Value</option>
                            <option value="audi">Value</option>
                        </select>
                        <div class="form-group">
                            <textarea class="form-control" rows="5" id="comment" placeholder="Message..."></textarea>
                        </div>
                        <button class="" type="submit" name="request">Submit</button>
                    </form>




                </div>
                <div class="logo needinright">
                    <a href="#0">
                        <img class="footlogo2" src="img/oren-home/logo/Oren Logo.png" alt="">
                    </a>
                </div>

            </div>

        </div>
        <div class=" offset-lg-2 offset-sm-0 col-lg-8 col-xs-12 copyrights text-center">
            <p>Copyright ©️ 2021 All rights reserved</a>.</p>
        </div>
    </div>
</footer>
<?php
//error_reporting(0);
if (isset($_POST['request'])) {

    $email = $_POST['connectemail'];


    $subject = "Connect with us";
    $comment = $_POST['message'];


    $message =
        "Email:<h3>$email</h3>" . "<br>";


    $toMail = "arooshi@orennow.com";
    // $toMail = "pushpakkshirsagar4@gmail.com";
    $from = $email;
    // $from = "shrimantvk@gmail.com";
    $headers = "From:$from" . "\r\n" .
        "Content-type: text/html" . "\r\n";

    mail($toMail, $subject, $message, $headers);



    echo "<script>alert('Thank you for your email address. We will get in touch with you soon!')</script>";
    header("Refresh:0");
}

?>

<!-- ==================== End Footer ==================== -->