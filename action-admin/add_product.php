<?php
include './db.php';
?>

<?php

if (isset($_POST['submit'])) {
    
   $title =     $_POST['title'];
   $short_desc=$_POST['short_desc'];
   $desc = $_POST['description'];
    $author =   $_POST['author'];
   $date =     $_POST['date'];
   $category =$_POST['category'];
   


    $target_dir = "../img/oren-home/product_tour";
    $tmp_name = $_FILES["additional_image"]["tmp_name"];
    $name = $_FILES["additional_image"]["name"];
    move_uploaded_file($tmp_name, "$target_dir/$name");
    $additional = $name;

    $target_dir = "../img/oren-home/product_tour";
    $tmp_name = $_FILES["landing_image"]["tmp_name"];
    $name2 = $_FILES["landing_image"]["name"];
    move_uploaded_file($tmp_name, "$target_dir/$name2");
    $landing = $name2;

    
 


    $sql ="INSERT INTO `product_tour`( `title`,`short_desc`, `description`,`landing_image`,`additional_image`,`author`,`date`,`category`)
     VALUES (' $title','$short_desc',' $desc','$landing','$additional','$author','$date','$category')";

    if (mysqli_query($conn, $sql)) {
        echo "<script> alert('New record created successfully') </script>";
        
        echo'<script>window.location="product_info.php";</script>';
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
    <div class="text-center" style="padding:20px;"><h3>Add Product Tour</h3></div>
    <form action="" method="post" enctype="multipart/form-data">
        
        <label class="fg-label"> Product Tour title:-</label>
        <!--<input type="text" name="title" class="form-control fg-input form-group" >-->
         <textarea class=" form-control" rows="1" name="title"></textarea>
                
        <label class="fg-label">Product Tour Short Description:-</label>
        <textarea class=" form-control" rows="5" name="short_desc"></textarea>
        <label class="fg-label">Product Tour Description:-</label>
        <textarea class=" form-control" rows="5" name="description"></textarea>

        <div class="row">
        
        <div class="col-md-6">
        <label class="fg-label">Landing image :-</label>
        <input type="file" name="landing_image" class="form-control fg-input form-group" required />
        </div>
        <div class="col-md-6">
        <label class="fg-label">additional image:-</label>
        <input type="file" name="additional_image" class="form-control fg-input form-group" required />
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
                    <option value="About us">About us</option> 
                </select>
            </div>
        </div>
       

        <!-- <label class="fg-label">Upload course background image:-</label>
        <input type="file" name="image2" class="form-control fg-input form-group" required /> -->





        <input type="submit" name="submit" class="btn btn-primary">
    </form>
</section>






<?php include 'footer.php'; ?>

