<?php
include './db.php';
?>
<head>
    <script src="ckeditor/ckeditor.js"></script>
    <!--<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />-->
</head>
<?php include 'navbar.php'; ?>
<?php include 'sidebar.php'; ?>

<?php
$sql = "SELECT * FROM footer";
$res_data = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($res_data);
//    echo $row['info'];
?>



<section class="content">
    <div class="text-center">
        <h4> Footer</h4>
    </div>
    <form action="" method="post" enctype="multipart/form-data">

        <form action="" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="comment">About Us</label>
                <textarea class="ckeditor form-control" rows="5" name="editor"><?php echo $row['about']; ?></textarea>
                <label class="fg-label">Footer Address</label>
                <input type="text" name="address" class="form-control fg-input form-group" value="<?php echo $row['address']; ?>" required="">
                <label class="fg-label">Footer Contact</label>
                <input type="text" name="contact" class="form-control fg-input form-group" value="<?php echo $row['contact']; ?>" required="">
                <label class="fg-label">Footer E-mail</label>
                <input type="text" name="email" class="form-control fg-input form-group" value="<?php echo $row['email']; ?>" required="">
                <label class="fg-label">Facebook Link</label>
                <input type="text" name="fb" class="form-control fg-input form-group" value="<?php echo $row['fb']; ?>" required="">
                <label class="fg-label">Pintrest Link</label>
                <input type="text" name="pintres" class="form-control fg-input form-group" value="<?php echo $row['pintres']; ?>" required="">
                <label class="fg-label">Twitter Link</label>
                <input type="text" name="twitter" class="form-control fg-input form-group" value="<?php echo $row['twitter']; ?>" required="">
                <label class="fg-label">Instagram Link</label>
                <input type="text" name="insta" class="form-control fg-input form-group" value="<?php echo $row['insta']; ?>" required="">
                <label class="fg-label">Youtube Link</label>
                <input type="text" name="youtube" class="form-control fg-input form-group" value="<?php echo $row['youtube']; ?>" required="">
            </div>
            <input type="submit" name="submit" class="btn btn-primary">
        </form>

</section>

<div class="container">
    <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Change The File</h4>
                </div>
                <div class="modal-body">
                    <form action="" method="post" enctype="multipart/form-data">
                        <label class="fg-label">Upload The File</label>
                        <input type="file" name="pdf" class="form-control fg-input form-group" required="">
                        <input type="submit" name="submit1" class="btn btn-primary">
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
</div>


<?php
error_reporting(0);
if (isset($_POST['submit'])) {
    $about = $_POST['editor'];
    $address = $_POST['address'];
    $contact = $conn->real_escape_string($_POST['contact']);
//    $contact = $_POST['contact'];
    $email = $_POST['email'];
    $fb = $_POST['fb'];
    $pintres = $_POST['pintres'];
    $twitter = $_POST['twitter'];
    $insta = $_POST['insta'];
    $youtube = $_POST['youtube'];

    $sql = "UPDATE footer SET about='$about', address='$address', contact='$contact', email='$email', fb='$fb', pintres='$pintres', twitter='$twitter', insta='$insta',youtube='$youtube'";

    if (mysqli_query($conn, $sql)) {
        echo "New record created successfully";
        echo'<script>window.location="footer-admin.php";</script>';
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}
?>

<?php
if (isset($_POST['submit1'])) {
    $target_dir = "images/pdf";
    $tmp_name = $_FILES["pdf"]["tmp_name"];
    $name = $_FILES["pdf"]["name"];
    move_uploaded_file($tmp_name, "$target_dir/$name");
    $pdf = $name;

    $sql = "UPDATE footer SET file='$pdf'";

    if (mysqli_query($conn, $sql)) {
        echo "New record created successfully";
        echo'<script>window.location="footer-admin.php";</script>';
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}
?>  


<?php include 'footer.php'; ?>