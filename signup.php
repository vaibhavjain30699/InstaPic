<?php

  $host = "localhost";
  $user = "root";
  $pass = "";
  $db = "InstaPic";

  $sql = mysqli_connect($host,$user,$pass,$db);

  if($_POST['password']==$_POST['cpassword'])
  {
    $email = $_POST['email'];
    $pass = $_POST['password'];
    $query = "INSERT INTO login(id,email,password) VALUES(NULL,'".$email."','".$pass."')";
    if(mysqli_query($sql,$query))
    {
      echo '<script language="javascript">';
      echo 'alert("Registered Successfully")';
      echo '</script>';
      echo file_get_contents("redirect1.html");
    }
    else {
      echo '<script language="javascript">';
      echo 'alert("Registration Unsuccessful")';
      echo '</script>';
      echo file_get_contents("redirect.html");
    }
  }
  else {
    echo '<script language="javascript">';
    echo 'alert("Confirm Password not equal to Password")';
    echo '</script>';
    echo file_get_contents("redirect.html");
  }

 ?>
