<?php
include './db.php';
?>
<?php include 'navbar.php'; ?>
<?php include 'sidebar.php'; ?>

<head>
    <script src="ckeditor/ckeditor.js"></script>
            <link rel="shortcut icon"  href="images/favicon.jpg" />
            <link rel="stylesheet" href="css/orenadmin.css">

    <style>
    .putbullet li {
    list-style: decimal !important;
}
.col-md-4{
    margin: 0px 0px 0px -40px;
}

    </style>
    
    
</head>
<body onload="check_image();">
    <section class="content">
        <div class="container" id="page-content">
            <div class="row">
                <div class="col-lg-10 ">
                    <div class="container">
                    <div class="panel text-center">
                        <?php
                        $id = $_GET['id'];
                        $sql = "SELECT * FROM whitepaper where id='$id'";
                        $res_data = mysqli_query($conn, $sql);
                        $row = mysqli_fetch_array($res_data);
                        
                        ?>
                        
                        <div class="panel-heading">
                            <h2 class="panel-title"> Enter Details</h3>
                        </div>
                        </form>
                            </div>
                            <div class="col-md-4">
                            <form action="" method="post" enctype="multipart/form-data">
                            <div class="text-center row"> 
                            <img src="../whitepaper/img/<?php echo $row['landing_photo'] ?>" height=100px width=100px>
                            <h3 class="panel-title"> Whitepaper Landing Photo <br> </h3>
                            </div>
                            <button type="button" style="margin: 20px 0px 0px 100px";  class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal22" id="addimg">Change the Image</button>
                        </form>
                            </div>
                            <div class="col-md-4">
                            <form action="" method="post" enctype="multipart/form-data">
                            <div class="text-center row"> 
                            <embed src="../whitepaper/<?php echo $row['pdf_file'] ?>" type="application/pdf" width="150px" height="150px" />
                            <h3 class="panel-title"> whitepaper PDF <br> </h3>
                            </div>
                            <button type="button" style="margin: 20px 0px 0px 100px";  class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal3" id="addimg">Change the PDF</button>
                        </form>  
                            </div>
                        </div>
                        

                        
                        
                      

                        
                        
                        <form action="" method="post" enctype="multipart/form-data">

                            <label class="fg-label">Title</label>
                            <!--<input type="text" name="title" value="<?php echo $row['title']; ?>" class="form-control fg-input form-group" required="">-->
                            <textarea class="ckeditor form-control fg-input form-group" rows="1" name="title"><?php echo $row['title']; ?></textarea>

                            <label class="fg-label">Short Desc</label>
                            <textarea class="ckeditor form-control" rows="5" name="short_desc"><?php echo $row['short_desc']; ?></textarea>
                           

                            
                            
                           <div class="row">

                           <div class="col-md-6">
                            <label class="fg-label">Author</label>
                            <input type="text" name="author" value="<?php echo $row['author']; ?>" class="form-control fg-input form-group" required="">
                            </div>
                            <div class="col-md-6">
                            <label class="fg-label">Date</label>
                            <input type="date" name="date" value="<?php echo $row['date']; ?>" class="form-control fg-input form-group" required="">
                            </div>
                            </div>

                            <input type="submit" name="submit" value="<?php echo 'Update' ?>" class="btn btn-primary">
                        

                        
                        </form>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <div class="container">
        <div class="modal fade" id="myModal22" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Change The Landing Image</h4>
                    </div>
                    <div class="modal-body">
                        <form action="" method="post" enctype="multipart/form-data">
                            <label class="fg-label">Upload The Image</label>
                            <input type="file" name="landing_photo" class="form-control fg-input form-group" required="">
                            <input type="submit" name="submit22" class="btn btn-primary">
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="container">
        <div class="modal fade" id="myModal3" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Change pdf</h4>
                    </div>
                    <div class="modal-body">
                        <form action="" method="post" enctype="multipart/form-data">
                            <label class="fg-label">Upload The Image</label>
                            <input type="file" name="pdf_file" class="form-control fg-input form-group" required="">
                            <input type="submit" name="submit3" class="btn btn-primary">
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
    </div>



</body>
<?php
if (isset($_POST['submit'])) {
    $id = $_GET['id'];
    $title = $_POST['title'];
    $short_desc = $_POST['short_desc'];
    $author = $_POST['author'];
    $date = $_POST['date'];
   
    




    $sql = "UPDATE `whitepaper` SET `title`='$title',`short_desc`='$short_desc',`author`='$author',`date`='$date' WHERE `whitepaper`.`id` = $id";

    if (mysqli_query($conn, $sql)) {
        // alert('New record created successfully');
        echo'<script>alert("Blog Updated successfully")</script>';
        echo'<script>window.location="whitepaper_info.php";</script>';
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}
?>    



<?php
if (isset($_POST['submit22'])) {
    $id = $_GET['id'];

   $target_dir = "../whitepaper/img/";
    $tmp_name = $_FILES["landing_photo"]["tmp_name"];
    $name2 = $_FILES["landing_photo"]["name"];
    move_uploaded_file($tmp_name, "$target_dir/$name2");
    $image2 = $name2;

    $sql = "UPDATE whitepaper SET landing_photo ='$image2' where id='$id'";

    if (mysqli_query($conn, $sql)) {
        // alert('New record created successfully');
        echo "<script>alert('Image Updated successfully')</script>";
        echo'<script>window.location="whitepaper_info.php?id=' . $id .'";</script>';
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}
?>  
<?php
if (isset($_POST['submit3'])) {
    $id = $_GET['id'];

   $target_dir = "../whitepaper/";
    $tmp_name = $_FILES["additional_image1"]["tmp_name"];
    $name3 = $_FILES["pdf_file"]["name"];
    move_uploaded_file($tmp_name, "$target_dir/$name3");
    $image3 = $name3;

    $sql = "UPDATE whitepaper SET pdf_file ='$image3' where id='$id'";

    if (mysqli_query($conn, $sql)) {
        // alert('New record created successfully');
        echo "<script>alert('Image Updated successfully')</script>";
        echo'<script>window.location="whitepaper_info.php?id=' . $id .'";</script>';
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}
?>  

<?php include 'footer.php'; ?>

