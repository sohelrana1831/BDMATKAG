<?php
require_once("../database/configer.php");
session_start();

$error_mes = "";
$image  = "";

if(isset($_POST['submit'])){

$target_dir = "images/";
$target_file = $target_dir . $_FILES["image"]["name"];
$imageFileType = pathinfo($target_file, PATHINFO_EXTENSION);
// echo $imageFileType;
// exit();
//echo $target_file;
//exit();
move_uploaded_file($_FILES["image"]["tmp_name"], $target_file);
    

    
$sql = "INSERT INTO `history_img`(`image`) VALUES ('$target_file')";


if(!mysqli_query($conn, $sql)){
    
    $_SESSION['img_no'] = "failed";
        header('Location: history.php');
//    echo "<script type='text/javascript'>alert('failed!')</script>";
}else{
    $_SESSION['img_ok'] = "Success";
        header('Location: history.php');
//     echo "<script type='text/javascript'>alert('Success!')</script>";

}

}

?>