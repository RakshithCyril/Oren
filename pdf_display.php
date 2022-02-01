<?php include './db.php'; ?>
<?php
                        $id = $_GET['id'];
                        $sql = "SELECT * FROM whitepaper where id='$id'";
                        $res_data = mysqli_query($conn, $sql);
                        $row = mysqli_fetch_array($res_data);
                        
                        ?>
<div style="margin: -10px; overflow:hidden;">
<embed src="whitepaper/<?php echo $row['pdf_file'] ?>" width="1350px" height="2100px" />
</div>
