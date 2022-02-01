<?php
include './db.php';
?>

<?php

if (isset($_POST['submit'])) {
    
   $title =     $_POST['title'];
   $short_desc = $_POST['short_desc'];
    $full_desc = $_POST['full_desc'];
  
    $author =   $_POST['author'];
   $date =     $_POST['date'];
   $category = $_POST['category'];
   


    $target_dir = "../img/oren-home/blog";
    $tmp_name = $_FILES["photo"]["tmp_name"];
    $name = $_FILES["photo"]["name"];
    move_uploaded_file($tmp_name, "$target_dir/$name");
    $image = $name;

    $target_dir = "../img/oren-home/blog";
    $tmp_name = $_FILES["landing_photo"]["tmp_name"];
    $name2 = $_FILES["landing_photo"]["name"];
    move_uploaded_file($tmp_name, "$target_dir/$name2");
    $image2 = $name2;
   
    $target_dir = "../img/oren-home/blog";
    $tmp_name = $_FILES["additional_image1"]["tmp_name"];
    $name3 = $_FILES["additional_image1"]["name"];
    move_uploaded_file($tmp_name, "$target_dir/$name3");
    $image3 = $name3;
    
    $target_dir = "../img/oren-home/blog";
    $tmp_name = $_FILES["additional_image2"]["tmp_name"];
    $name4 = $_FILES["additional_image2"]["name"];
    move_uploaded_file($tmp_name, "$target_dir/$name4");
    $image4 = $name4;

    
 


    $sql ="INSERT INTO `blog`( `title`, `short_desc`, `full_desc`, `photo`,`landing_photo`, `author`, `date`,`additional_image1`,`additional_image2`,`category`)
     VALUES (' $title',' $short_desc','$full_desc','$image','$image2','$author',' $date','$name3','$name4','$category')";

    if (mysqli_query($conn, $sql)) {
        echo "<script> alert('New record created successfully') </script>";
        
        echo'<script>window.location="blog_info.php";</script>';
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
       
    }
}
?>

<head>
    <script src="ckeditor/ckeditor.js"></script>
        <link rel="shortcut icon"  href="images/favicon.png" />

</head>
<?php include 'navbar.php'; ?>
<?php include 'sidebar.php'; ?>

   

<section class="content"> 
    <div class="text-center" style="padding:20px;"><h3>Add Blog</h3></div>
    <form action="" method="post" enctype="multipart/form-data">
        
        <label class="fg-label"> Blog title:-</label>
        <!--<input type="text" name="title" class="form-control fg-input form-group" >-->
        <textarea class="form-control" rows="1" name="title"></textarea>
                
        <label class="fg-label">Blog Introduction :-</label>
        <textarea class=" form-control" rows="5" name="short_desc"></textarea>

        <label class="fg-label">Blog Description</label>
        <textarea class="ckeditor form-control" rows="5" name="full_desc"></textarea>

        <div class="row">
        <div class="col-md-6">
        
        <label class="fg-label">Blog thumbnail image:-</label>
        <input type="file" name="photo" class="form-control fg-input form-group" required />
        </div>
        <div class="col-md-6">
        <label class="fg-label">Blog Landing image (please upload image size of 1280 X 720 px) :-</label>
        <input type="file" name="landing_photo" class="form-control fg-input form-group" required />
        </div>
        <div class="col-md-6">
        <label class="fg-label">additional image 1(please upload image size of 1280 X 720 px) :-</label>
        <input type="file" name="additional_image1" class="form-control fg-input form-group" required />
        </div>
        <div class="col-md-6">
        <label class="fg-label">additional image 2(please upload image size of 1280 X 720 px) :-</label>
        <input type="file" name="additional_image2" class="form-control fg-input form-group" required />
        </div>
        </div>
        <div class="row">
        <div class="col-md-6">
       
        <label class="fg-label"> Author</label>
        <input type="text" name="author" class="form-control fg-input form-group" >
        </div>
        <div class="col-md-6">
        <label class="fg-label"> Date</label>
        <input type="date" name="date" class="form-control fg-input form-group" >
        </div>
        <div class="col-md-6">
                <label for="category">Display On:-</label>
                <select name="category" id="category">
                    <option value="Home">Home</option>
                    <option value="ESG Software">ESG Software</option>
                    <option value="Solutions">Solutions</option>
                    <option value="About">About us</option>
                </select>
            </div>
        </div>
       

        <!-- <label class="fg-label">Upload course background image:-</label>
        <input type="file" name="image2" class="form-control fg-input form-group" required /> -->





        <input type="submit" name="submit" class="btn btn-primary">
    </form>
</section>






<?php include 'footer.php'; ?>

