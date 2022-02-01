<?php include './db.php'; ?>
<?php
// if (isset($_POST['submit'])) {
//     $name = $_POST['name'];
//     setcookie("user", $name, time() + 120, "/");
// }

setcookie("user", "signed_up", time() + 120, "/"); 

?>


<!DOCTYPE html>
<html lang="zxx">

<head>

    <!-- Metas -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="keywords" content="Enviornment, Social and Governance" />
    <meta name="description" content="Oren - Making Sustainability
SIMPLE & ACCESSIBLE for all businesses." />
    <meta name="author" content="" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <!-- Title  -->
    <title>Oren</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="img/favicon.png" />

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Barlow:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Barlow+Condensed:wght@200;300;400;500;600;700&display=swap" rel="stylesheet">

    <!-- Plugins -->
    <link rel="stylesheet" href="css/plugins.css" />

    <!-- Core Style Css -->
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/index.css" />
    <link rel="stylesheet" href="css/about.css">
    <link rel="stylesheet" href="css/blog.css">
    <link rel="stylesheet" href="css/tab-responsive.css" />
    <link rel="stylesheet" href="css/resources.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        @font-face {
            font-family: Gilroy;
            src: url(fonts/Gilroy/Radomir\ Tinkov\ -\ Gilroy-ExtraBold.otf);
        }

        @font-face {
            font-family: Monteserrat family;
            src: url(fonts/Monteserratfamily/Montserrat-Regular.ttf);
        }
    </style>


    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-T5V5H4XW36"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());
        gtag('config', 'G-T5V5H4XW36');
    </script>


    <style>
        @media only screen and (max-width: 720px) {
            .row .col-md-3 {
                margin: 10px 20px 0px auto;
            }
        }

        @media only screen and (max-width: 600px) {
            .row .col-lg-5 {
                margin: 15px -9px 0px auto;
            }

            .row .col-md-3 {
                margin: 10px -25px 0px auto;
            }
        }

        .lead_form {
            display: none;
        }
    </style>

</head>

<body style="overflow-x:hidden !important;">



    <!-- ==================== Start Loading ==================== -->

    <div id="loader"></div>
    <div id="content">

        <!-- ==================== End Loading ==================== -->





        <!-- ==================== Start Navbar ==================== -->

        <?php include 'header.php' ?>

        <!-- ==================== End Navbar ==================== -->



        <!-- ==================== Start Slider ==================== -->
        <header class="container cont blog-header">
            <h1>Our Resources</h1>
            <!-- <p class="header-p">We are growing by learning and exploring <br> here we share our knowledge with you all the time.</p> -->
            <form id="search" action="">
                <input type="search" name="search" id="search_in" class="search_desk" placeholder="Search">
                <button><img src="img/oren-home/About/search.png" alt=""></button>
            </form>
            <div class="nav2">
                <div class="row container">

                    <div class="col-sm-2 container">
                        <a style="background:#f99564; color:#1e2b56;" href="blog.php">Blogs</a>
                    </div>
                    <div class="col-sm-2 container">
                        <a href="white_paper.php" style="background: #1e2b56;color:white;">White Paper</a>
                        <hr style="border: 2px solid #1e2b56;border-radius: 20px;width: 140px; margin: 15px auto 10px auto; display:block;">
                    </div>
                    <div class="col-sm-2 container">
                        <a href="case_studies.php" style="background: #f4cc69;">Case Studies</a>
                    </div>
                    <div class="col-sm-2 container">
                        <a href="product.php" style="background: #d59af7;">Products</a>
                    </div>
                    <div class="col-sm-2 container">
                        <a href="events.php" style="background: #8ce1ff;">Events</a>
                    </div>
                </div>
            </div>

        </header>

        <!-- <section class="lead_form">
            <form action="" method="POST">
            <label for="name">Name</label>
            <input type="text" id="name" name="name" placeholder="enter name"><br>
                <label for="email">Email</label>
                <input type="email" placeholder="Enter Email" id="emial" name="email"><br>
                <label for="phone">Phone</label>
                <input type="tel" id="phone" name="phone" placeholder="Enter Phone number"  pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}"><br>                
                <button name="submit" onclick="openPDF()">Submit</button>
            </form>
        </section> -->

        <!-- ======================================whitepaper======================================== -->


        <div class="container">
           
            <div class="row container">
                <?php
                // $result = mysqli_query($con,"SELECT * FROM users order by ID desc limit 10");
                $sql = mysqli_query($conn, "select * from whitepaper order by id DESC limit 2");
                    while ($row = mysqli_fetch_array($sql)) {
                        $id = $row['id'];
                        $title = $row['title'];
                        $date = $row['date'];
                        $photo = $row["landing_photo"];
                        

                ?>
                <div style="background-image: url('./whitepaper/img/<?php echo $photo ?>') ;" class="col-lg-5 white-head ">
                    <p class="new">New</p>
                    <a href="#" onclick="form(<?php echo $id ?>)">
                        <h1 class="white-sub-head"><?php echo $title ?></h1>
                        <p class="white-end">08 Aug 2020</p>
                    </a>
                </div>
                 <section id="form-sec0" class="container">
                            <form target="_blank" action="pdf_display.php?id=<?php echo $id ?>" id="form_display<?php echo $id ?>" class="form lead_form test" method="post">
                            <input type="text" required name="fname" class="form-control" id="fname" placeholder="Enter First Name">
                               <input type="text" required name="lname" class="form-control" id="lname" placeholder="Enter Last Name">
                                <input type="email" required class="form-control" placeholder="Enter email" id="email" name="email">
                               
                                
                                <input type="tel" required id="phone" class="form-control"  name="phone" placeholder="Enter Phone number" pattern="[6-9]{1}[0-9]{9}" >
                                
                                <input type="text" required class="form-control" placeholder="Company Name"  name="c-name" id="c-name"><br>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </form>
                        </section>
               
                <?php   }
                    ?>
            </div>
        </div>

        <div class="container cont">

            <div class="wow fadeInUp">
                <div class="row container">
                    <?php

                    $sql = mysqli_query($conn, "select * from whitepaper order by id DESC ");
                    while ($row = mysqli_fetch_array($sql)) {
                        $id = $row['id'];
                        $title = $row['title'];
                        $short_desc = $row['short_desc'];
                        $author = $row['author'];
                        $date = $row['date'];
                        $pdf_file = $row['pdf_file'];
                        $photo = $row['landing_photo'];

                    ?>
                    


                        <div style="background-image: url('./whitepaper/img/<?php echo $photo ?>') ;" class="col-md-3 white-download  container">
                            <h1><?php echo $title ?></h1>
                            <a href="#" onclick="form(<?php echo $id ?>)">Download</a>
                        </div>
                       
<?php
                        if(isset($_POST['lead_submit'])){
                            $fname= $_POST['fname'];
                            $lname=$_POST['lname'];
                            $email = $_POST['email'];
                            $phone = $_POST['phone'];
                            $cname=$_POST['c-name'];

                            // echo'<script>window.open=pdf_display?id'.$id.';</script>';

                            $subject = "This is an Enquiry mail from Customers";
                            $comment = $_POST['message'];
                        
                          
                            $message = 
                                    "Email:<h3>$fname</h3>" . "<br>" ;
                                    "Email:<h3>$lname</h3>" . "<br>" ;
                                    "Email:<h3>$email</h3>" . "<br>" ;
                                    "Email:<h3>$phone</h3>" . "<br>" ;
                                    "Email:<h3>$cname</h3>" . "<br>" ;
                                    
                        
                            $toMail = "rakshithcyril.7@gmail.com";
                            $from = $email;
                            // $from = "shrimantvk@gmail.com";
                            $headers = "From:$from" . "\r\n" .
                                    "Content-type: text/html" . "\r\n";
                        
                            mail($toMail, $subject, $message, $headers);
                        
                        
                        
                            echo "<script>alert('Thank you for your email address. We will get in touch with you soon!')</script>";
                            header("Refresh:0");
                            
                        }
                        ?>
                        <section id="form-sec" class="container">
                            <form target="_blank" id="form_display<?php echo $id ?>" class="form lead_form test" action="pdf_display.php?id=<?php echo $id ?>" method="post">
                            <input required type="text" name="fname" class="form-control" id="fname" placeholder="Enter First Name">
                               <input required type="text" name="lname" class="form-control" id="lname" placeholder="Enter Last Name">
                                <input required type="email" class="form-control" placeholder="Enter email" id="email" name="email">
                                <input required type="tel" id="phone" class="form-control"  name="phone" placeholder="Enter Phone number" >
                                <input required type="text" class="form-control" placeholder="Company Name"  name="c-name" id="c-name" ><br>
                                <button name="lead_submit" class="btn btn-primary">Submit</button>
                            </form>
                        </section>

                    <?php   }
                    ?>
                </div>
            </div>
        </div>
        <div class="container" style="margin: 100px;">

        </div>


        <!-- ==========================================whitepaper Ends============================================= -->


        <?php include 'footer.php' ?>


        <!-- jQuery -->
        <script src="js/jquery-3.0.0.min.js"></script>
        <script src="js/jquery-migrate-3.0.0.min.js"></script>

        <!-- plugins -->
        <script src="js/plugins.js"></script>

        <!-- custom scripts -->
        <script type="text/javascript" src="js/scripts.js"></script>
        

</body>

</html>