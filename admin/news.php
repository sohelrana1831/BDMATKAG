<?php
include 'header.php';
require_once("../database/configer.php");

	$news_sql = "SELECT * FROM `news` WHERE 1";
	$news_result = mysqli_query($conn, $news_sql);
	$news_row = $news_result->fetch_assoc();


	if (isset($_POST['update'])) {

		$news = $_POST['news'];

		$news_uptade_sql = "UPDATE `news` SET `news`='$news' WHERE 1";

		if (!mysqli_query($conn, $news_uptade_sql)) {
        echo "<script type='text/javascript'>alert('Update failed!')</script>";
	    } else {
	        echo "<script type='text/javascript'>alert('Update Success!')</script>";
	    }

	}

?>

<div class="clearfix"></div>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-12 col-md-6  text-center" style="margin-top: 30px">
            <form action="" method="post" onsubmit="setTimeout(function(){window.location.reload();},10)">
                <textarea name="news" rows="5" cols="40"><?php  echo $news_row['news'];?></textarea> <br> <br>
                 <button  type="submit" name="update" class="btn btn-primary mb-2">Update</button>
                <img id="blah" src="#" alt="" width="556" height="350" />
              </form>
        </div>
        <div class="col-md-3"></div>
    </div>
</div>
<div class="clearfix"></div>