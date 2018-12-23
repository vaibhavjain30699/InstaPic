<?php

  $db = "InstaPic";
  $user = "root";
  $password = "";
  $host = "localhost";

  $linkk = mysqli_connect($host,$user,$password,$db);
  if(isset($_POST['email'])){

    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "select * from login where email='".$email."'AND password='".$password."' limit 1";
    $result = mysqli_query($linkk,$sql);

    if(mysqli_num_rows($result)==1){
      //$file = file_get_html('user.html');
      //readfile("user.html");
      echo file_get_contents("redirect2.html");
      exit();
    }
    else{
      echo '<script language="javascript">';
      echo 'alert("Invalid  Credentials")';
      echo '</script>';
      echo file_get_contents("redirect1.html");
      exit();
    }

  }

 ?>
