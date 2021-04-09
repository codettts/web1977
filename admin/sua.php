<?php
include("../inc/conn.php");
if( $_SERVER['REQUEST_METHOD']=='POST'){
  $id = $_GET['id'];
  $tensp=$_POST['name'];
  $giasp=$_POST['price'];
  
  if( !empty( $file)){
    $filename = rand() . $file['proName'];
    if( move_uploaded_file($file['tmp_name'], "../img/" . $filename) ){
      $sql = "UPDATE song SET image=? WHERE id=?";
      $stmt = mysqli_prepare($conn ,$sql);
      mysqli_stmt_bind_param($stmt, "sd", $filename, $id);
      mysqli_stmt_execute($stmt);
      echo "Update picture successful <br/>";
    }
    else{
      echo" co loi khi upload";
    }
  }
  $id = $_GET['id'];

  $sql = "UPDATE product SET proName=?, proPrice=? WHERE proID=?";
  $stmt = mysqli_prepare($conn, $sql);
  mysqli_stmt_bind_param($stmt, "ssdd", $proName, $proPrice, $proID);
  if( mysqli_stmt_execute($stmt)) {
    echo "update successful <br>";
  }else{
    echo "Error : " .mysqli_error($conn);
  }

}
$id = $_GET['id'];
$sql = mysqli_query($conn, "SELECT * FROM product WHERE proID={$id}");
$product = mysqli_fetch_assoc($sql);
include("header.php");
?>
 <h2 style="margin-left: 430px;"> Update product: <?= $product['proName'] ?></h2>
 <form class="form" method="post" enctype="multipart/form-data">
 
  <label>Enter song name</label>
  <input type="text" name="name" value="<?= $product['proName']?>"/>
  <label>Enter the song price</label>
  <input type="text" name="price" value="<?= $product['proPrice']?>">
  <label>Choose the song img</label>
  <img class="anhsp" src="../img/<?= $product['image']?>"/>
  <input type="file" name="images">
  <label>Choose the song file</label>
  <input type="file" name="file">
  <input type="submit" name="submit" value="Update">
 </form>
 <?php