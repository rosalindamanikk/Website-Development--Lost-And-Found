<?php

include 'config.php';
session_start();

if(isset($_POST['submit'])){

   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $pass  = mysqli_real_escape_string($conn, md5($_POST['password']));

   $select  = mysqli_query($conn, "SELECT * FROM `user` WHERE email = '$email' AND password = '$pass'") or die('query failed');
   $select2 = mysqli_query($conn, "SELECT * FROM `user` WHERE email = '$email'") or die('query failed');
   $select3 = mysqli_query($conn, "SELECT * FROM `user` WHERE password = '$pass'") or die('query failed');
   $cek  = mysqli_num_rows($select);
   $cek2 = mysqli_num_rows($select2);
   $cek3 = mysqli_num_rows($select3);
   if($cek2==0){
      $message[] = 'Email Salah';
   }else if($cek3==0){
      $message[] = 'Password Salah';
   }else{
      $data = mysqli_fetch_assoc($select);
      if($email == $data['email'] && $pass == $data['password']){
         $_SESSION['user_id'] = $data['id'];
         header('location:index.php');
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
   <title>Selamat Datang di Laporkan Saja!</title>
   <link rel="stylesheet" href="css/styleLogin.css">
</head>
<body>
<div class="form-container">
   <form action="" method="post" enctype="multipart/form-data">
   <center><img src="img/logo.png" width="440px"></center>
   <h1 style="color: #3498db;">LOGIN</h1>
      <?php
      if(isset($message)){
         foreach($message as $message){
            echo '<div class="message">'.$message.'</div>';
         }
      }
      ?>
      <input type="email" name="email" placeholder="Masukkan Email" class="box" required>
      <input type="password" name="password" placeholder="Masukkan Password" class="box" required>
      <input type="submit" name="submit" value="Login" class="btn">
      <p>Belum punya akun? <a href="register.php" style="color : #3498db;">Registrasi</a></p>
      <p>Masuk Sebagai Admin? <a href="loginAdmin.php" style="color : #3498db;">Login</a></p>
   </form>
</div>
</body>
</html>