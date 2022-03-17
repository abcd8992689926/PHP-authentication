<?php
  mysql_connect("127.0.0.1","root","takming");
  mysql_select_db("phpwork");
  $UserName=$_GET['UserName'];
  $Password=$_GET['Password'];
  $sql="select * from accountdata where binary UserName ='$UserName'";
  $result=mysql_query($sql);
  if ($UserName==""||$Password==""){
      session_start();
      $error = "0";
      $_SESSION["error"]=$error;
      header('Location:reenter.php');
  }
  else{
    if (mysql_num_rows($result)==0){
      session_start();
      $error = "1";
      $_SESSION["error"]=$error;
      header('Location:reenter.php');
    }
    else{
      $sql="select * from accountdata where binary UserName ='$UserName' and binary Password ='$Password'";
      $result=mysql_query($sql);
      if (mysql_num_rows($result)==0){
      session_start();
      $error = "2";
      $_SESSION["error"]=$error;
      header('Location:reenter.php');
      }
      else{
        session_start();
        $_SESSION["UserName"]=$UserName;
        header('Location:homepage.php');
      }
    }
  }
?>