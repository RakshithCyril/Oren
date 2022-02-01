<?php include './db.php';?>

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
    <link rel="shortcut icon"  href="img/favicon.png" />

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Barlow:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Barlow+Condensed:wght@200;300;400;500;600;700&display=swap"
        rel="stylesheet">

    <!-- Plugins -->
    <link rel="stylesheet" href="css/plugins.css" />

    <!-- Core Style Css -->
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/index.css" />
    <link rel="stylesheet" href="css/about.css">
    <link rel="stylesheet" href="css/blog.css">
    <link rel="stylesheet" href="css/tab-responsive.css" />

    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        @font-face {
    font-family: Gilroy;
    src: url(fonts/Gilroy/Radomir\ Tinkov\ -\ Gilroy-ExtraBold.otf);
  }
@font-face {
    font-family:  Monteserrat family;
    src: url(fonts/Monteserratfamily/Montserrat-Regular.ttf);
  }
    </style>


<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-T5V5H4XW36"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
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
      left:50%;
      top:50%;
        background-size: 25% auto;


}


</style>

</head>

<body style="overflow-x:hidden !important;" >



    <!-- ==================== Start Loading ==================== -->
    
    <div id="loader"></div>
    <div id="content">

    <!-- ==================== End Loading ==================== -->


   


    <!-- ==================== Start Navbar ==================== -->

    <?php  include 'header.php' ?>

    <!-- ==================== End Navbar ==================== -->



    <!-- ==================== Start Slider ==================== -->

    <header class="pages-header backgroundimage  bg-img valign parallaxie "  style="background-image: url(img/oren-home/blog/Landing\ Image.png);"     >
        <!-- data-background="img/oren-home/aboutus-asset/Landing Page/Landing Image.png" -->
        <!-- <img src="" alt=""> -->
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="cont text-center">
                        <h1>Blogs</h1>
                        
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- ==================== End Slider ==================== -->
    
    <!-- <============================= our blog starts ===============================> -->
<section class="blog-curs section-padding1 sub-bg addingbackblog">
    <div class="container">
        
        <div class="row">
            <div class="col-12">
                <div class=" wow fadeInUp" >

                    <?php
                    $sql=mysqli_query($conn,"select * from blog order by id DESC");
                    while($row=mysqli_fetch_array($sql)){
                        $id=$row['id'];
                        $title=$row['title'];
                        $short_desc=$row['short_desc'];
                        $photo=$row['photo'];
                        ?>
 
                    
                    <div class="item-box">
                        <div class="item">
                            <div class="bimg">
                            <div class="">
                            
                            <img  class="img img-fluid" src="img/oren-home/blog/<?php echo $photo;?>" alt="">
                            </div>

                            </div>
                            <div class="cont valign radiusright">
                                <div class="full-width focolor">
                                    
                                    <h4 class="custom-font blogtitle">
                                    <?php echo $title; ?>
                                    </h4>
                                    <p>
                                    <?php echo $short_desc; ?>
                                    </p>
                                    <div class="col-12 blogbtn text-right">
                                        
                                    <a href="blog-details.php?id=<?php echo $id; ?>"><button class="button blogbutton">Read More</button></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
             <?php   }             
                                    ?>
                   
                   
                </div>
            </div>
        </div>
    </div>
</section>
<!-- <============================= our blog Ends ===============================> -->

    

    



    <!-- ==================== Start Footer ==================== -->

    <?php  include 'footer.php' ?>

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