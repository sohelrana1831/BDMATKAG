<?php include 'header.php';
require_once("database/configer.php");

$sql = "SELECT * FROM `history_img` ORDER BY `history_img`.`id` DESC";
$result = mysqli_query($conn, $sql);
?>




<div class="container-fluid">
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-12 col-md-6  text-center">
            <?php while ($row = mysqli_fetch_assoc($result)) { ?>
                
            
            <div class="zoom">
                <img src="admin/<?php echo $row['image'];?>" class=".img-thumbnail" alt="">
            </div>
           <?php } ?>
            
        </div>
        <div class="col-md-3"></div>
    </div>
</div>
<div class="clearfix"></div>


<?php include 'footer.php'; ?>