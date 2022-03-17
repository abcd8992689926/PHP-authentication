<html>
<head>
<meta charset="utf-8">
<title></title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="style.css">
<style>
body{
  background-color:#121212;
}
table{
  border: 0;
  border-collapse: collapse;
  width: 600px;
  border:1pt black solid;
  margin:30 auto 20;
}
td{
    border:1pt black solid;
    text-align:center;
    height:50pt;
    white-space: nowrap;
}
th{
    border:1pt black solid;
}
#title{
    text-align:center;
    font-size:18pt;
}
.button{
    background-color:white;
    height:100%;
    width:100%;
    border: none;
}
.button:hover{
    background-color:#808A87;
}
#content{
    width:700px;
    background-color:white;
    margin:80 auto;
    border-radius:10px;
}
#button{
    margin:0 auto;
    width:200;
    height:80;
}
.title{
    font-weight: 900;
    font-size: 5.5em;
    margin:0 auto;
    color: black;
    text-align:center;
}
</style>
</head>
<body>
<?php
    session_start();
    $UserName=$_SESSION["UserName"];
    mysql_connect("127.0.0.1","root","takming");
    mysql_select_db("phpwork");
    $UserName=$_GET['UserName'];
    $sql="select * from emeo where binary UserName='$UserName'";
    $result=mysql_query($sql);
    echo "<div id=content>";
    echo "<table>";
    echo "<div><h1 class='title'>Search Results</h1></div>";
    echo "<tr id=title><th>Text</th><th>Date</th><th>Time</th><th>Done</th><th>Modify</th><th>Delete</th></tr>";
    while ($rowdata=mysql_fetch_array($result))
    {
        $Text=$rowdata["Text"];
        $Date=$rowdata["Date"];
        $Time=$rowdata["Time"];
        $Done=$rowdata["Flag"];
        if ($Done==1){
            $Done1="Yes";
        }
        else if($Done==0){
            $Done1="No";
        }
        $Time1 = substr($Time,0,2);
        $Time2 = substr($Time,2,4);
        echo "<tr><td>$Text</td><td class=TdWidth>$Date</td><td class=TdWidth>$Time1 ： $Time2</td><td>$Done1</td><td><a href=Modify.php?UserName=$UserName&Text=$Text&Date=$Date&Time=$Time><button type='button' class='button'>Modify</button></a></td><td><a href=alter.php?MoD=D&UserName=$UserName&Text=$Text&Time=$Time><button type='button' class='button'>Delete</button></a></td></tr>";
    }
    echo "</table>";
    echo "<div id=button>";
    echo "<a href=homepage.php><button type='button' class='btn btn-secondary'>Close</button></a>";
    echo "</div>";
    echo "</div>";
?>
      <div class="modal fade" id="ModifyModalCenter" tabindex="-1" role="dialog" aria-labelledby="ModifyModalCenterTitle" aria-hidden="true">
        
      </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script type="text/javascript">
</script>
</body>
</html>