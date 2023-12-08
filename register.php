<?php

include 'config.php';

if(isset($_POST['submit'])){

   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $pass = mysqli_real_escape_string($conn, md5($_POST['password']));
   $cpass = mysqli_real_escape_string($conn, md5($_POST['cpassword']));
   $image = $_FILES['image']['name'];
   $image_size = $_FILES['image']['size'];
   $image_tmp_name = $_FILES['image']['tmp_name'];
   $image_folder = 'uploaded_img/'.$image;

   $select = mysqli_query($conn, "SELECT * FROM `user` WHERE email = '$email' AND password = '$pass'") or die('query failed');

   if(mysqli_num_rows($select) > 0){
      $message[] = 'Username udah dipake'; 
   }else{
      if($pass != $cpass){
         $message[] = 'Password tidak sama, pelan-pelan makanya';
      }elseif($image_size > 2000000){
         $message[] = 'Kegedean gambarnya (Size)';
      }else{
         $insert = mysqli_query($conn, "INSERT INTO `user`(name, email, password, image) VALUES('$name', '$email', '$pass', '$image')") or die('query failed');

         if($insert){
            move_uploaded_file($image_tmp_name, $image_folder);
            $message[] = 'Berhasil Registrasi!';
            header('location:login.php');
         }else{
            $message[] = 'Menggagal Registrasi :(';
         }
      }
   }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Buat Akun</title>
   <link rel="stylesheet" href="css/styleLogin.css">
</head>
<body>
   
<div class="form-container">

   <form action="" method="post" enctype="multipart/form-data">
   <h1 style="color: #3498db;">REGISTRASI</h1>
      <?php
      if(isset($message)){
         foreach($message as $message){
            echo '<div class="message">'.$message.'</div>';
         }
      }
      ?>
      <input type="text" name="name" placeholder="Masukkan Username" class="box" required>
      <input type="text" name="name" placeholder="Masukkan No HP" class="box" required>
      <input type="email" name="email" placeholder="Masukkan Email" class="box" required>
      <input type="email" name="email" placeholder="Jenis Kelamin" class="box" required>
      <input type="password" name="password" placeholder="Masukkan Password" class="box" required>
      <input type="password" name="cpassword" placeholder="Konfirmasi Password" class="box" required>
      <input type="submit" name="submit" value="Registrasi" class="btn">
      <p>Punya akun? <a href="login.php" style="color: #3498db;">Login</a></p>
   </form>

</div>

</body>
</html>