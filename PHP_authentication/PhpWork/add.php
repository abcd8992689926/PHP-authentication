<?php
    mysql_connect("127.0.0.1","root","takming");
    mysql_select_db("phpwork");
    $UserName=$_GET['UserName'];
    $Memo=$_GET['Memo'];
    $Dateint=$_GET['Dateint'];
    $Timeint=$_GET['Timeint'];
    //echo $UserName;
    //echo $Memo;
    //echo $Dateint;
    //echo $Timeint;
    $sql="insert into emeo (UserName,Text,Date,Time)values('$UserName', '$Memo','$Dateint',$Timeint)";
    mysql_query($sql);
    echo "<script>alert('add successfully')</script>";
    echo "<script>location.href='homepage.php'</script>";
?>