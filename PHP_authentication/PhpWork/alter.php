<?php
    mysql_connect("127.0.0.1","root","takming");
    mysql_select_db("phpwork");
    $MoD=$_GET['MoD'];
    if ($MoD=="M"){
        $UserName=$_GET['UserName'];
        $OText=$_GET['OText'];
        $OTime=$_GET['OTime'];
        $Text=$_GET['Text'];
        $Dateint=$_GET['Dateint'];
        $Timeint=$_GET['Timeint'];
        $done=$_GET['done'];
        $sql="update emeo set UserName = '$UserName',Text = '$Text',Date = '$Dateint',Time = $Timeint,Flag = $done where binary UserName='$UserName' and binary Text='$OText' and Time=$OTime";
        $result=mysql_query($sql);
        echo "<script>alert('Modify successfully')</script>";
        echo "<script>location.href='homepage.php'</script>";
    }
    if ($MoD=="D"){
        $UserName=$_GET['UserName'];
        $Text=$_GET['Text'];
        $Time=$_GET['Time'];
        $sql="delete from emeo where binary UserName='$UserName' and binary Text='$Text' and Time=$Time";
        //echo $sql;
        $result=mysql_query($sql);
        echo "<script>alert('Delete successfully')</script>";
        echo "<script>location.href='homepage.php'</script>";
    }
?>
