<html>
<head>
<title></title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="style.css">
<style>
body{
  background:#121212;
}
</style>
</head>
<body>
<div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="ModifyModalCenterTitle">Modify</h5>
              <button type="button" class="close" onclick="batsearch()">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
                <?php
                    $UserName=$_GET['UserName'];
                    $OText=$_GET['Text'];
                    $Dateint=$_GET['Dateint'];
                    $OTime=$_GET['Time'];
                    //echo $UserName;
                    //echo $Text;
                    //echo $Dateint;
                    //echo $Time;
                    mysql_connect("127.0.0.1","root","takming");
                    mysql_select_db("phpwork");
                    $sql="select * from emeo where binary UserName='$UserName' and binary Text='$OText' and Time='$OTime'";
                    $result=mysql_query($sql);
                    $rowdata=mysql_fetch_array($result);
                    echo "<label for='Text' class='col-form-label'>Text:</label>";
                    echo "<input type='text' class='form-control' id='Text' maxlength='20' value=$rowdata[1]><br>";
                    echo "<label for='Dateint' class='col-form-label'>Date:</label>";
                    echo "<input type='date' class='form-control' id='Dateint' value=$rowdata[2]><br>";
                    echo "<label for='Timeint' class='col-form-label'>Time ( Hour&Minute：0101 ):</label>";
                    echo "<input type='text' class='form-control' id='Timeint' oninput = 'value=value.replace(/[^\d]/g,'')' value=$rowdata[3] maxlength='4'><br>";
                    echo "<label class='col-form-label'>Done</label>";
                    echo "<input type='radio' name='done' value='1'>Yes　 <input type='radio' name='done' value='0'>No";
                ?>
            </div>
            <div class="modal-footer" >
              <button type="button" class="btn btn-secondary" onclick="batsearch()">Close</button>
              <button type="button" class="btn btn-primary" onclick="update()">Next</button>
            </div>
          </div>
        </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script type="text/javascript">
    var rowdata = <?php echo $rowdata[4]; ?>;
    //console.log(rowdata);
    if (rowdata==0) $('input[name="done"]')[1].checked = true;
    else if (rowdata==1) $('input[name="done"]')[0].checked = true;
    function update(){
        var UserName = "<?php echo $UserName ?>"
        var OText = "<?php echo $OText ?>"
        var OTime =  "<?php echo $OTime ?>";
        //alert(UserName);
        var Text =  $("input[id='Text']").val();
        //alert(Text);
        var Dateint = $("input[id='Dateint']").val();
        //alert(Dateint);
        var Timeint =  $("input[id='Timeint']").val();
        //alert(Timeint);
        var done = $('input[name=done]:checked').val()
        //alert(done);
        location.href="alter.php?MoD=M&UserName=" +UserName+ "&OText=" +OText+ "&OTime=" +OTime+ "&Text=" +Text+ "&Dateint=" +Dateint+ "&Timeint=" +Timeint+ "&done=" +done;
    }
    function batsearch(){
      var UserName = "<?php echo $UserName ?>"
      location.href="Search.php?UserName=" +UserName;
    }
</script>
</body>
</html>