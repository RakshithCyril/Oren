<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    if(isset($_POST['submit'])){
        echo "Done";
    }else{
        echo "not done";
    }
    setcookie("user", "signed_up", time() + 120, "/"); 
    ?>

<form action="" method="post" enctype="multipart/form-data">
<input type="text" name="test">
<button name="submit">Submit</button>
</form>
</body>
</html>

