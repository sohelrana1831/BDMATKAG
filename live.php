<?php
include 'header.php';
require_once("database/configer.php");

$select_sql = "SELECT * FROM `info` ORDER BY `info`.`id` DESC";
$result = $conn->query($select_sql);
$row = $result->fetch_assoc();

$day_sql = "SELECT * FROM `live_day` ORDER BY `live_day`.`id` DESC";
$day_result = $conn->query($day_sql);
$day_row = $day_result->fetch_assoc();


?>


<div class="container-fluid second">
    <div class="">
        <div class="open">
            <div class="refresh text-center">
                <a href="" class="btn btn-info btn-lg">
                    <i class="fa fa-refresh" aria-hidden="true"></i> Refresh
                </a>
            </div>
            <span class="span1"></span>
            <span class="span2"></span>

            <div class="dhaka bg-success">
                <h3>DHAKA NIGHT</h3>
                <h5><?php echo $row['dhaka_text']; ?></h5>
                <h6>( <?php echo $row['dhaka_time']; ?> )</h6>
            </div>
            <span class="span1"></span>

            <div class="dhaka bg-warning">
                <h3>CHITTAGONG DAY</h3>
                <h5><?php echo $row['chittagong_text']; ?></h5>
                <h6>( <?php echo $row['chittagong_time']; ?> )</h6>
            </div>
            <span class="span1"></span> 

            <div class="dhaka bg-info">
                <h3>SYLHET NIGHT</h3>
                <h5><?php echo $row['sylet_text']; ?></h5>
                <h6>( <?php echo $row['sylet_time']; ?> )</h6>
            </div>
            <span class="span1"></span>

        </div>
    </div>


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
                <td> <?php echo $day_row['dhaka_fr'];?> </td>
                <td> <?php echo $day_row['chittagong_fr'];?> </td>
                <td> <?php echo $day_row['sylet_fr'];?> </td>
            </tr>
            <tr class="table-warning">
                <th scope="row">SA</th>
                <td> <?php echo $day_row['dhaka_sa'];?> </td>
                <td> <?php echo $day_row['chittagong_sa'];?> </td>
                <td> <?php echo $day_row['sylet_sa'];?> </td>
            </tr>
            <tr class="table-info">
                <th scope="row">SU</th>
                <td> <?php echo $day_row['dhaka_su'];?> </td>
                <td> <?php echo $day_row['chittagong_su'];?> </td>
                <td> <?php echo $day_row['sylet_su'];?> </td>
            </tr>
            <tr class="table-danger">
                <th scope="row">MO</th>
                <td> <?php echo $day_row['dhaka_mo'];?> </td>
                <td> <?php echo $day_row['chittagong_mo'];?> </td>
                <td> <?php echo $day_row['sylet_mo'];?> </td>
            </tr>
            <tr class="table-primary">
                <th scope="row">TU</th>
                <td> <?php echo $day_row['dhaka_tu'];?> </td>
                <td> <?php echo $day_row['chittagong_tu'];?> </td>
                <td> <?php echo $day_row['sylet_tu'];?> </td>
            </tr>
            <tr class="table-active">
                <th scope="row">WE</th>
                <td> <?php echo $day_row['dhaka_we'];?> </td>
                <td> <?php echo $day_row['chittagong_we'];?> </td>
                <td> <?php echo $day_row['sylet_we'];?> </td>
            </tr>
            <tr class="table-success">
                <th scope="row">TH</th>
                <td> <?php echo $day_row['dhaka_th'];?> </td>
                <td> <?php echo $day_row['chittagong_th'];?> </td>
                <td> <?php echo $day_row['sylet_th'];?> </td>
            </tr>
        </tbody>
    </table>
</div>

<?php include 'footer.php'; ?>