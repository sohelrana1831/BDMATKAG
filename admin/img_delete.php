<?php
session_start();
    require_once("../database/configer.php");
    
    $delete_id = $_GET['delete'];
    
    $sql_img = "SELECT * FROM `history_img` WHERE id = '$delete_id'";
    
    $result_img = mysqli_query($conn, $sql_img);
    $row = $result_img->fetch_assoc();
    
    

    
    if($delete_id){
        $sql = "DELETE FROM `history_img` WHERE id = '$delete_id'";
        $result = mysqli_query($conn, $sql);
        unlink($row["image"]); 
        if($result){
            
            $_SESSION['ok'] = 'Delete Success';
            header('Location: history.php'); 
        }
        
    } 
    
    
?>