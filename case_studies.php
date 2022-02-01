<?php include './db.php'; ?>

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
        #loader {
            position: fixed;
            width: 100%;
            height: 100%;
            z-index: 9999999;
            overflow: visible;
            background: #fff url('img/loader.gif') no-repeat center center;
            transform: translate(-50%, -50%);
            left: 50%;
            top: 50%;
            background-size: 25% auto;
        }

        @media only screen and (max-width: 720px) {
            .row .col-md-3 {
                display: block;
                margin: 15px auto 0px auto;
            }
        }

        @media only screen and (max-width: 600px) {
            .row .col-lg-5 {
                display: block;
                margin: 20px auto 0px 30px;
            }
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
            <div class="container nav2">
                <div class="row">

                    <div class="col-sm-2 container">
                        <a style="background:#f99564; color:#1e2b56;" href="blog.php">Blogs</a>
                    </div>
                    <div class="col-sm-2 container">
                        <a href="white_paper.php" style="background: #9bdd9b;">White Paper</a>
                    </div>
                    <div class="col-sm-2 container">
                        <a href="case_studies.php" style="background: #1e2b56;color:white;">Case Studies</a>
                        <hr style="border: 2px solid #1e2b56;border-radius: 20px;width: 140px; margin: 15px auto -10px auto; display:block;">
                        <!-- #f4cc69 -->
                    </div>
                    <div class="col-sm-2 container">
                        <a href="product.php" style="background: #d59af7;">Products </a>
                    </div>
                    <div class="col-sm-2 container">
                        <a href="events.php" style="background: #8ce1ff;">Events</a>
                    </div>
                </div>
            </div>

        </header>

        <!-- ======================================whitepaper======================================== -->
        <div class="container">
            <div class="row container">
                <div class="col-lg-5 white-head">
                    <p class="new">New</p>
                    <h1 class="white-sub-head">Inovative sustainable products for a sustainable Living</h1>
                    <p class="white-end">08 Aug 2020</p>
                </div>
                <div class="col-lg-5 white-head ">
                    <p class="new">New</p>
                    <h1 class="white-sub-head">Inovative sustainable products for a sustainable Living</h1>
                    <p class="white-end">08 Aug 2020</p>
                </div>
            </div>
        </div>
        <div class="container cont">

            <div class="wow fadeInUp">
                <div class="row ">
                    <div class="col-md-3 head-case container">
                        <img src="img/oren-home/blog/3.jpeg" id="case-img1" alt="">
                        <h1>Are you recycling? Think before you toss it.</h1>
                        <a href="">Read Story &rarr;</a>
                    </div>
                    <div class="col-md-3 head-case container ">
                        <img src="img/oren-home/blog/2.jpg" id="case-img2" alt="">
                        <h1>Are you recycling? Think before you toss it.</h1>
                        <a href="">Read Story &rarr;</a>
                    </div>
                    <div class="col-md-3 head-case container">
                        <img src="img/oren-home/blog/3.jpeg" id="case-img3" alt="">
                        <h1>Are you recycling? Think before you toss it.</h1>
                        <a href="">Read Story &rarr;</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="container" style="margin: 100px;">

        </div>


        <!-- ==========================================whitepaper Ends============================================= -->
        <!-- ==================== Start Footer ==================== -->

        <?php include 'footer.php' ?>

        <!-- ==================== End Footer ==================== -->






        <!-- jQuery -->
        <script src="js/jquery-3.0.0.min.js"></script>
        <script src="js/jquery-migrate-3.0.0.min.js"></script>

        <!-- plugins -->
        <script src="js/plugins.js"></script>

        <!-- custom scripts -->
        <script src="js/scripts.js"></script>

</body>

</html>