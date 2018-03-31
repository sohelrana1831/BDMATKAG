<?php
include 'header.php';
require_once("../database/configer.php");

        
    
$sql = "SELECT * FROM `history_img` ORDER BY `history_img`.`id` DESC";
$result = mysqli_query($conn, $sql);



?>




<div class="clearfix"></div>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-12 col-md-6  text-center" style="margin-top: 30px">
            
          <?php  if(!empty($_SESSION['img_ok'])){ ?>

    <div class="alert alert-success text-center">
        <strong><?php echo $_SESSION['img_ok']; ?></strong>
    </div>

<?php } unset($_SESSION['img_ok']) ?>
            
            
            <form action="img_insert.php" method="post" enctype="multipart/form-data" id="form1" runat="server">
                <input type='file' name="image" id="imgInp" required=""/>
                 <button style="margin-left: 90px;" type="submit" name="submit" class="btn btn-primary mb-2">Submit</button>
                <img id="blah" src="#" alt="" width="556" height="350" />
              </form>
        </div>
        <div class="col-md-3"></div>
    </div>
</div>
<div class="clearfix"></div>
<?php
$i = 1;
?>
<?php


if(!empty($_SESSION['ok'])){ ?>

    <div class="alert alert-success text-center">
        <strong><?php echo $_SESSION['ok']; ?></strong>
    </div>

<?php } unset($_SESSION['ok']) ?>

<div class="container">
    <table class="table table-bordered text-center">
        <thead>
            
          <tr>
            <th scope="col">#</th>
            <th scope="col">Image</th>
            <th scope="col">Action</th>
          </tr>
          
        </thead>
        <tbody>
             <?php while ($row = mysqli_fetch_assoc($result)) { ?>
              <tr>
                  <th scope="row"><?php echo $i++ ;?></th>
                <td> <img src="<?php echo $row['image'];?>" alt="Image" width="200" height="150" /> </td>
                <td class="text-center" style="vertical-align: middle"> <a class="btn btn-danger" href="img_delete.php?delete=<?php echo $row['id'];?>" onclick="return confirm('Are you sure you want to delete this item?');">Delete</a> </td>
                
              </tr>
              <?php } ?>
        </tbody>
     </table>
</div>


<script>
    function readURL(input) {

  if (input.files && input.files[0]) {
    var reader = new FileReader();

    reader.onload = function(e) {
      $('#blah').attr('src', e.target.result);
    }

    reader.readAsDataURL(input.files[0]);
  }
}

$("#imgInp").change(function() {
  readURL(this);
});

</script>
</body>
</html>
