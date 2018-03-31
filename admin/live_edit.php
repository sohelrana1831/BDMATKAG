<?php
	include 'header.php'; 
	require_once("../database/configer.php");
 

  if (!isset($_SESSION['username'])) {
    header("Location:index.php");
    
  }

  $sql = "SELECT * FROM `info` WHERE id = '1'";
  $execute_sql= $conn->query($sql);
  $row = $execute_sql->fetch_assoc();
  
	if(isset($_POST['update'])){

		$dhaka_text = $_POST['dhaka_text'];
		$dhaka_time = $_POST['dhaka_time'];

		$chittagong_text = $_POST['chittagong_text'];
		$chittagong_time = $_POST['chittagong_time'];

		$sylet_text = $_POST['sylet_text'];
		$sylet_time = $_POST['sylet_time'];


		$update_sql = "UPDATE `info` SET `dhaka_text`= '$dhaka_text',`dhaka_time`= '$dhaka_time',`chittagong_text`= '$chittagong_text',`chittagong_time`= '$chittagong_time' , `sylet_text` = '$sylet_text', `sylet_time` = '$sylet_time' WHERE id = '1'";

		// echo $update_sql;

		if(!mysqli_query($conn, $update_sql)){
			echo 'Not Update';
		}else{
			header("location:../live.php");
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
					    <input type="text" name="chittagong_text" value="<?php echo $row['chittagong_text'] ;?>">
					    <p>CHITTAGONG TIME</p>
					    <input type="text" name="chittagong_time" value="<?php echo $row['chittagong_time'] ;?>">
				    </div>
				    <span class="span1"></span>

				    <div class="dhaka">
					    <h3>SYLET NIGHT</h3>
					    <p>SYLET TEXT</p>
					    <input type="text" name="sylet_text" value="<?php echo $row['sylet_text'] ;?>">
					    <p>SYLET TIME</p>
					    <input type="text" name="sylet_time" value="<?php echo $row['sylet_time'] ;?>">
					    <div class="w3ls-btn">
							<input type="submit" value="Update" name="update">
						</div>
				    </div>
				    <span class="span1"></span>
				</div>
			</form>
		</div>

	</div>
</body>
</html>
