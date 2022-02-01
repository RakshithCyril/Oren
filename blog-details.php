
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
    <link rel="shortcut icon"  href="img/favicon.png" />

    <!-- Google Fonts -->
    <!--<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">-->
    <!--<link href="https://fonts.googleapis.com/css2?family=Barlow:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">-->
    <!--<link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">-->
    <!--<link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300;400;500;600;700&display=swap" rel="stylesheet">-->
    <!--<link href="https://fonts.googleapis.com/css2?family=Barlow+Condensed:wght@200;300;400;500;600;700&display=swap" rel="stylesheet">-->

    <!-- Plugins -->
    <link rel="stylesheet" href="css/plugins.css" />

    <!-- Core Style Css -->
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/index.css" />
    <link rel="stylesheet" href="css/about.css">
    <link rel="stylesheet" href="css/services.css">
    <link rel="stylesheet" href="css/internal-blog.css">
    <link rel="stylesheet" href="css/tab-responsive.css" />

    <!--<link rel="preconnect" href="https://fonts.googleapis.com">-->
    <!--<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>-->
    <!--<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&display=swap" rel="stylesheet">-->
    <style>
        @font-face {
            font-family: Gilroy;
            src: url(fonts/Gilroy/Radomir\ Tinkov\ -\ Gilroy-ExtraBold.otf);
        }

        @font-face {
            font-family: Monteserrat family;
            src: url(fonts/Monteserratfamily/Montserrat-Regular.ttf);
        }

        body h1 {
            font-family: Gilroy !important;
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
.link_hover:hover{
 cursor: pointer;
}


</style>

</head>

<body style="overflow-x:hidden !important;" >



    <!-- ==================== Start Loading ==================== -->
    
    <div id="loader"></div>
    <div id="content">

    <!-- ==================== End Loading ==================== -->


   

    <!-- ==================== Start Navbar ==================== -->

    <?php include 'header.php' ?>

    <!-- ==================== End Navbar ==================== -->



    <!-- ==================== Start Slider ==================== -->
    <?php
            $id=$_GET['id'];
           $result= mysqli_query($conn,"select * from blog where id='$id'");
           while($row=mysqli_fetch_array($result)){
               $landing_photo=$row['landing_photo'];
               $title=$row['title'];
               $author=$row['author'];
               $date=$row['date'];
               $full_desc=$row['full_desc'];
               $date=date('jS F Y',strtotime($date));


        ?>  
        
    <header class="pages-header backgroundimage  bg-img valign " style="background-image: url('img/oren-home/blog/<?php echo $landing_photo;?>');">
        
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="cont text-center">
                        <h1></h1>

                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- ==================== End Slider ==================== -->

    <!-- ==================== Start Services ==================== -->



    <!-- ==================== end Services ==================== -->
    <!-- ==================== start about ==================== -->

    <section class="aboutsec002" id="">
        <div class="container">


            <div class=" col-md-12">
                <a href="blog.php"><button class="button viewblog"><i class="fas fa-caret-left "></i> &nbsp;&nbsp; View All Blogs</button> </a>

            </div>
         
            
          
            <h1 class="pt-30 pb-30 givesize blogdetailstitle"><?php echo $title;?></h1>
            <div class="row">
                <div class="col-md-3">
                    <a href="">
                <img src="img/oren-home/About/linkedin.png" style="width: 30px; margin-top:-40px;" alt="">
                </a>
                <a href="https://twitter.com/intent/tweet?text=https://www.orennow.com/blog-details.php?id=<?php echo $id ?>">
                <img src="img/oren-home/About/twitter.png" style="width: 30px; margin-top:-40px;" alt="">
                </a>
                <img onclick="copy()" class="link_hover" src="img/oren-home/About/copy_link.png" style="width: 30px; margin-top:-40px;" alt="">
                </div>
                
            </div>
 
            <div class="row aboutbottom">

                <div class="col-lg-12">
                    <div class="cont">
                        <div class="row  pb-30">

                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 ">
                                <p class="responsivepara"><?php echo $author;?> </p>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 ">
                                <p class="responsivepara pull-right"><?php echo $date;?></p>
                            </div>

                        </div>

                        <div class="funders22">
                        <p class="funders">
                            <?php echo $full_desc; ?>
                        </p>
                        </div>



                    </div>
                </div>



            </div>

        </div>

    </section>
    <!-- ==================== about ends ==================== -->

<?php } ?>


   <!-- <============================= our blog starts ===============================> -->
 <section class="blog-curs section-padding1 sub-bg addingback">
 <div class="container">
     <div class="sec-head sec-head1 custom-font text-center">
        
         <h3 class="wow1" >Our Blog</h3>
        
     </div>
     <div class="row">
         <div class="col-12">
             <div class="blg-swipe wow fadeInUp" data-wow-delay=".5s">

                 <?php
                 $sql="select * from blog";
                 $result=mysqli_query($conn,$sql);
                 while($row=mysqli_fetch_array($result)){

                     $id=$row['id'];
                     $author=$row['author'];
                     $title=$row['title'];
                     $date=$row['date'];
                     $photo=$row['photo'];
                     $date=date('jS M ',strtotime($date));

               ?>
                 <div class="item-box">
                     <div class="item">
                         <div class="bimg">
                             <div class="">
                            
                            <img  class="img bg-img" src="img/oren-home/blog/<?php echo $photo;?>" alt="">
                            </div>

                         </div>
                         <div class="cont valign radiusright">
                             <div class="full-width focolor">
                                 <div class="info custom-font ">
                                     <a href="#0" class="author">
                                         <span><?php echo $author;?></span>
                                     </a>
                                     <a href="#0" class="date">
                                         <span><?php echo $date; ?></span>
                                     </a>
                                 </div>
                                 <h6 class="custom-font title">
                                     <a href="blog-details.php"><?php echo $title;?></a>
                                 </h6>
                                 <div class="btn-more custom-font">
                                     <a href="blog-details.php?id=<?php echo $id;?>" class="simple-btn2">Read More</a>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>
               
               <?php }                 
                 ?>


               
                
                
             </div>
         </div>
     </div>
 </div>
</section>
<!-- <============================= our blog Ends ===============================> -->


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
    <script type="text/javascript">
               let test = window.location.href
                async function copy(){
                    await navigator.clipboard.writeText(test);
                    alert('link copied')
                }
            </script>

</body>

</html>