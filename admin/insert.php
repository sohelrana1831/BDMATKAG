<?php

session_start();
require_once("../database/configer.php");

$dhaka_text = "";
$dhaka_time = "";

$chittagong_text = "";
$chittagong_time = "";

$sylet_text = "";
$sylet_time = "";


if (isset($_POST['submit'])) {
    $dhaka_text = $_POST['dhaka_text'];
    $dhaka_time = $_POST['dhaka_time'];

    $chittagong_text = $_POST['chittagong_text'];
    $chittagong_time = $_POST['chittagong_time'];

    $sylet_text = $_POST['sylet_text'];
    $sylet_time = $_POST['sylet_time'];


    $sql = "INSERT INTO `info`(`dhaka_text`, `dhaka_time`, `chittagong_text`, `chittagong_time`, `sylet_time`, `sylet_text`) VALUES ('$dhaka_text', '$dhaka_time', '$chittagong_text', '$chittagong_time', '$sylet_text', '$sylet_time')";

    // echo $sql;
    // exit;
    
    $data = array('dhaka_text', 'dhaka_time', 'chittagong_text', 'chittagong_time', 'sylet_time', 'sylet_text');

    $faied = FALSE;
    foreach ($data as $value) {
        if (!empty($_POST[$value])) {
            $faied = TRUE;
        }
    }
    
    if ($faied){
        if (!mysqli_query($conn, $sql)) {
        $_SESSION['no'] = "failed";
        header('Location: live_insert.php');
    } else {
        $_SESSION['yes'] = "yes";
        header('Location: live_insert.php');
    }
    } else {
        $_SESSION['no'] = "failed";
        header('Location: live_insert.php');
    }
    
    
}


//Live day input



$dhaka_fr = "";
$chittagong_fr = "";
$sylet_fr = "";


$dhaka_sa = '';
$chittagong_sa = '';
$sylet_sa = '';

$dhaka_su = '';
$chittagong_su = '';
$sylet_su = '';


$dhaka_mo = '';
$chittagong_mo = '';
$sylet_mo = '';

$dhaka_tu = '';
$chittagong_tu = '';
$sylet_tu = '';

$dhaka_we = '';
$chittagong_we = '';
$sylet_we = '';


$dhaka_th = '';
$chittagong_th = '';
$sylet_th = '';


if (isset($_POST['day-submit'])) {

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

    $day_sql = "INSERT INTO `live_day`(`dhaka_fr`, `chittagong_fr`, `sylet_fr`, `dhaka_sa`, `chittagong_sa`, `sylet_sa`, `dhaka_su`, `chittagong_su`, `sylet_su`, `dhaka_mo`, `chittagong_mo`, `sylet_mo`, `dhaka_tu`, `chittagong_tu`, `sylet_tu`, `dhaka_we`, `chittagong_we`, `sylet_we`, `dhaka_th`, `chittagong_th`, `sylet_th`) VALUES ('$dhaka_fr', '$chittagong_sa', '$sylet_fr', '$dhaka_sa', '$chittagong_sa', '$sylet_sa', '$dhaka_su', '$chittagong_su', '$sylet_su', '$dhaka_mo', '$chittagong_mo', '$sylet_mo', '$dhaka_tu', '$chittagong_tu', '$sylet_tu', '$dhaka_we', '$chittagong_we', '$sylet_we', '$dhaka_th', '$chittagong_th', '$sylet_th')";

//         echo $day_sql;
//		 exit;
    // Required field names
    $required = array('dhaka_fr', 'chittagong_fr', 'sylet_fr', 'dhaka_sa', 'chittagong_sa', 'sylet_sa', 'dhaka_su', 'chittagong_su', 'sylet_su', 'dhaka_mo', 'chittagong_mo', 'sylet_mo', 'dhaka_tu', 'chittagong_tu', 'sylet_tu', 'dhaka_we', 'chittagong_we', 'sylet_we', 'dhaka_th', 'chittagong_th', 'sylet_th');

// Loop over field names, make sure each one exists and is not empty
    $error = false;
    foreach ($required as $field) {
        if (!empty($_POST[$field])) {
            $error = true;
        }
    }

    if ($error) {
        if (!mysqli_query($conn, $day_sql)) {
            $_SESSION['no'] = "failed";
            header('Location: live_insert.php');
        } else {
            $_SESSION['yes'] = "yes";
            header('Location: live_insert.php');
        }
    } else {
        $_SESSION['no'] = "failed";
        header('Location: live_insert.php');
    }
}
?>