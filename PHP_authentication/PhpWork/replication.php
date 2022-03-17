<?php
  mysql_connect("127.0.0.1","root","takming");
  mysql_select_db("phpwork");
  $UserName=$_GET['UserName'];
  $Password=$_GET['Password'];
  $sql="select * from accountdata where binary UserName='$UserName'";
  $result=mysql_query($sql);
  if ($UserName==""||$Password==""){
      session_start();
      $report = "0";
      $_SESSION["report"]=$report;
      header('Location:signup.php');
  }
  else{
        if (mysql_num_rows($result)==0){
            session_start();
            $report = "1";
            $_SESSION["report"]=$report;
            $sql="insert into accountdata values('$UserName', '$Password')";
            mysql_query($sql);
            header('Location:signup.php');
        }
        else{
            session_start();
            $report = "2";
            $_SESSION["report"]=$report;
            header('Location:signup.php');
        }
  }
?>