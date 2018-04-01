<?php
include 'header.php';
require_once("../database/configer.php");


if (!isset($_SESSION['username'])) {
    header("Location:index.php");
}

$sql = "SELECT * FROM `info` WHERE id = '1'";
$execute_sql = $conn->query($sql);
$row = $execute_sql->fetch_assoc();

//print_r($execute_sql);
//exit();

if (isset($_POST['update'])) {

    $dhaka_text = $_POST['dhaka_text'];
    $dhaka_time = $_POST['dhaka_time'];

    $chittagong_text = $_POST['chittagong_text'];
    $chittagong_time = $_POST['chittagong_time'];

    $sylet_text = $_POST['sylet_text'];
    $sylet_time = $_POST['sylet_time'];


    $update_sql = "UPDATE `info` SET `dhaka_text`= '$dhaka_text',`dhaka_time`= '$dhaka_time',`chittagong_text`= '$chittagong_text',`chittagong_time`= '$chittagong_time' , `sylet_text` = '$sylet_text', `sylet_time` = '$sylet_time' WHERE id = '1'";

    // echo $update_sql;

    if (!mysqli_query($conn, $update_sql)) {
        echo "<script type='text/javascript'>alert('Update failed!')</script>";
    } else {
        echo "<script type='text/javascript'>alert('Update Success!')</script>";
    }
     
}

$day_sql = "SELECT * FROM `live_day` ORDER BY `live_day`.`id` DESC";
    $day_result = $conn->query($day_sql);
    $day_row = $day_result->fetch_assoc();
    


    if(isset($_POST['day_update'])){
        
         $dhaka_fr = $_POST['dhaka_fr'];
    $chittagong_fr = $_POST['chittagong_fr'];
    $sylet_fr = $_POST['sylet_fr'];


    $dhaka_sa = $_POST['dhaka_sa'];
    $chittagong_sa = $_POST['chittagong_sa'];
    $sylet_sa = $_POST['sylet_sa'];

    $dhaka_su = $_POST['dhaka_su'];
    $chittagong_su = $_POST['chittagong_su'];
    $sylet_su = $_POST['sylet_su'];


    $dhaka_mo = $_POST['dhaka_mo'];
    $chittagong_mo = $_POST['chittagong_mo'];
    $sylet_mo = $_POST['sylet_mo'];

    $dhaka_tu = $_POST['dhaka_tu'];
    $chittagong_tu = $_POST['chittagong_tu'];
    $sylet_tu = $_POST['sylet_tu'];

    $dhaka_we = $_POST['dhaka_we'];
    $chittagong_we = $_POST['chittagong_we'];
    $sylet_we = $_POST['sylet_we'];


    $dhaka_th = $_POST['dhaka_th'];
    $chittagong_th = $_POST['chittagong_th'];
    $sylet_th = $_POST['sylet_th'];
        
        
        
   $day_update_sql = "UPDATE `live_day` SET `dhaka_fr`='$dhaka_fr',`chittagong_fr`='$chittagong_fr',`sylet_fr`='$sylet_fr',`dhaka_sa`='$dhaka_sa',`chittagong_sa`='$chittagong_sa',`sylet_sa`='$sylet_sa',`dhaka_su`='$dhaka_su',`chittagong_su`='$chittagong_su',`sylet_su`='$sylet_su',`dhaka_mo`='$dhaka_mo',`chittagong_mo`='$chittagong_mo',`sylet_mo`='$sylet_mo',`dhaka_tu`='$dhaka_tu',`chittagong_tu`='$chittagong_tu',`sylet_tu`='$sylet_tu',`dhaka_we`='$dhaka_we',`chittagong_we`='$chittagong_we',`sylet_we`='$sylet_we',`dhaka_th`='$dhaka_th',`chittagong_th`='$chittagong_th',`sylet_th`='$sylet_th' WHERE id = '1'";
//    $update_result = mysqli_query($conn, $day_update_sql);
//    echo $update_result;
    
//    exit();
    
 if (!mysqli_query($conn, $day_update_sql)) {
        echo "<script type='text/javascript'>alert('Update failed!')</script>";
    } else {
        echo "<script type='text/javascript'>alert('Update Success!')</script>";
    }
    }
    

?>
<div class="container-fluid second">
    <div class="">
        <form action="" method="post">
            <div class="open">
                <div class="refresh">
                    <a href="#">REFRESH GAMES</a>
                </div>
                <span class="span1"></span>
                <span class="span2"></span>
                <div class="dhaka">
                    <h3>DHAKA NIGHT</h3>
                    <p>DHAKA TEXT</p>
                    <input type="text" name="dhaka_text" value="<?php echo $row['dhaka_text']; ?>" required>
                    <p>DHAKA TIME</p>
                    <input type="text" name="dhaka_time" value="<?php echo $row['dhaka_time']; ?>">
                </div>
                <span class="span1"></span>
                <div class="dhaka">
                    <h3>CHITTAGONG DAY</h3>
                    <p>CHITTAGONG TEXT</p>
                    <input type="text" name="chittagong_text" value="<?php echo $row['chittagong_text']; ?>">
                    <p>CHITTAGONG TIME</p>
                    <input type="text" name="chittagong_time" value="<?php echo $row['chittagong_time']; ?>">
                </div>
                <span class="span1"></span>

                <div class="dhaka">
                    <h3>SYLET NIGHT</h3>
                    <p>SYLET TEXT</p>
                    <input type="text" name="sylet_text" value="<?php echo $row['sylet_text']; ?>">
                    <p>SYLET TIME</p>
                    <input type="text" name="sylet_time" value="<?php echo $row['sylet_time']; ?>">
                    <div class="w3ls-btn">
                        <input type="submit" value="Update" name="update">
                    </div>
                </div>
                <span class="span1"></span>
            </div>
        </form>
    </div>



    <form action="" method="post">
        <table class="table table-bordered text-center" style="background: #fff;">
            <thead>
                <tr class="bg-success">
                    <th scope="col">DAY</th>
                    <th scope="col">DHAKA</th>
                    <th scope="col">CHITTAGONG</th>
                    <th scope="col">SYLHET</th>
                </tr>
            </thead>
            <tbody>
                <tr class="table-light">
                    <th scope="row">FR</th>
                    <td> <input type="text" name="dhaka_fr" value="<?php echo $day_row['dhaka_fr'];?>"> </td>
                    <td> <input type="text" name="chittagong_fr" value="<?php echo $day_row['chittagong_fr'];?>"> </td>
                    <td> <input type="text" name="sylet_fr" value="<?php echo $day_row['sylet_fr'];?>"> </td>
                </tr>
                <tr class="table-warning">
                    <th scope="row">SA</th>
                    <td> <input type="text" name="dhaka_sa" value="<?php echo $day_row['dhaka_sa'];?>"> </td>
                    <td> <input type="text" name="chittagong_sa" value="<?php echo $day_row['chittagong_sa'];?>"> </td>
                    <td> <input type="text" name="sylet_sa" value="<?php echo $day_row['sylet_sa'];?>"> </td>
                </tr>
                <tr class="table-info">
                    <th scope="row">SU</th>
                    <td> <input type="text" name="dhaka_su" value="<?php echo $day_row['dhaka_su'];?>"> </td>
                    <td> <input type="text" name="chittagong_su" value="<?php echo $day_row['chittagong_su'];?>"> </td>
                    <td> <input type="text" name="sylet_su" value="<?php echo $day_row['sylet_su'];?>"> </td>
                </tr>
                <tr class="table-danger">
                    <th scope="row">MO</th>
                    <td> <input type="text" name="dhaka_mo" value="<?php echo $day_row['dhaka_mo'];?>"> </td>
                    <td> <input type="text" name="chittagong_mo" value="<?php echo $day_row['chittagong_mo'];?>"> </td>
                    <td> <input type="text" name="sylet_mo" value="<?php echo $day_row['sylet_mo'];?>"> </td>
                </tr>
                <tr class="table-primary">
                    <th scope="row">TU</th>
                    <td> <input type="text" name="dhaka_tu" value="<?php echo $day_row['dhaka_tu'];?>"> </td>
                    <td> <input type="text" name="chittagong_tu" value="<?php echo $day_row['chittagong_tu'];?>"> </td>
                    <td> <input type="text" name="sylet_tu" value="<?php echo $day_row['sylet_tu'];?>"> </td>
                </tr>
                <tr class="table-active">
                    <th scope="row">WE</th>
                    <td> <input type="text" name="dhaka_we" value="<?php echo $day_row['dhaka_we'];?>"> </td>
                    <td> <input type="text" name="chittagong_we" value="<?php echo $day_row['chittagong_we'];?>"> </td>
                    <td> <input type="text" name="sylet_we" value="<?php echo $day_row['sylet_we'];?>"> </td>
                </tr>
                <tr class="table-success">
                    <th scope="row">TH</th>
                    <td> <input type="text" name="dhaka_th" value="<?php echo $day_row['dhaka_th'];?>"> </td>
                    <td> <input type="text" name="chittagong_th" value="<?php echo $day_row['chittagong_th'];?>"> </td>
                    <td> <input type="text" name="sylet_th" value="<?php echo $day_row['sylet_th'];?>"> </td>
                </tr>
            </tbody>
            <tfoot>
                <tr>
                    <td colspan="4" class="text-center">
                        <button style="margin-left: 90px;" type="submit" name="day_update" class="btn btn-primary mb-2">Update</button>
                    </td>
                </tr>
            </tfoot>
        </table>
    </form>

</div>
</body>
</html>
