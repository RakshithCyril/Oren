<?php
include './db.php';
?>
<?php include 'navbar.php'; ?>
<?php include 'sidebar.php'; ?>
<link rel="stylesheet" href="//cdn.datatables.net/1.11.0/css/jquery.dataTables.min.css">
<link rel="shortcut icon"  href="images/favicon.jpg" />

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


<style>
.nono{
    display: inline-flex;
    padding-top: 30px;

    /* border: none !important; */
}

</style>
<head>
<link rel="shortcut icon"  href="images/favicon.jpg" />

</head>
<body onload="check_image();">
    <section class="content">
        <div id="page-content">
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel text-center">
                        <div class="panel-heading">
                       
                            <h2 class="panel-title"style="padding:20px;">Case Study information</h2>
                        </div>
                        <div class="panel-body">
                            <div class="pad-btm form-inline">


                                <table id="demo-foo-filtering" class="table table-bordered table-hover toggle-circle " data-page-size="7">
                                    <thead class="text-center">
                                        <tr>

                                            <th class="text-center" > id</th>
                                            <th class="text-center">Title</th>
                                            <th class="text-center">Description</th>
                                            <th class="text-center">Landing Photo</th>
                                            <th class="text-center">Additional image</th>
                                            <th class="text-center"> Author</th>
                                            <th class="text-center">Date</th>
                                            <th class="text-center">Display on</th>
                                            <th class="text-center">Action</th>
                                           

                                        </tr>
                                    </thead>
                                    <tbody id="tdata">
                                        <?php
                                   $sql = "SELECT `id`, `title`, `description`, `author`, `landing_photo`,`additional_photo`,`date`,`category`  FROM `case_study`";

                                        $count=0;
                                        $res_data = mysqli_query($conn, $sql);
                                        while ($row = mysqli_fetch_array($res_data)) {
                                            $count++;

                                            ?>
                                            <tr>
                                            <td><?php echo $count; ?></td>
                                                <td><?php echo $row['title']; ?></td>
                                                <td><?php echo $row['description']; ?></td>
                                                <td class=""><img src="../img/oren-home/case_study/<?php echo $row['landing_photo'] ?>" height=100px width=100px></td>
                                                <td class=""><img src="../img/oren-home/case_study/<?php echo $row['additional_photo'] ?>" height=100px width=100px></td>
                                                
                                                <td><?php echo $row['author']; ?></td>
                                                <td><?php echo $row['date']; ?></td>
                                                <td><?php echo $row['category']; ?></td>
            
                                                <td >
                                                <div class="nono">
                                                    <a href="edit.php?id=<?php echo $row['id']; ?>"><button type="button" class="delete btn btn-primary btn-sm needmarright"><span class="glyphicon glyphicon-edit"></span></button></a>
                                                </br>&nbsp
                                                    <a href="case_delete.php?id=<?php echo $row['id']; ?>"><button type="button" class="delete btn btn-danger btn-sm"><span class="glyphicon glyphicon-trash"></span></button></a>
                                                </td>
                                                </div>
                                            </tr>
                                            <?php
                                        }
                                        ?>

                                    </tbody>

                                </table>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
   
</body>

<?php include 'footer.php'; ?>

