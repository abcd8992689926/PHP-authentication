<html>
<head>
<meta charset="utf-8">
<title>Welcome</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="style.css">
<script src="http://apps.bdimg.com/libs/jquery/1.8.3/jquery.min.js"></script>
<style>
body{
    background-color:#121212;
}
#m12{
    display:block;
}
.m12{
    font-weight: 900;
    font-size: 5.5em;
    margin:100 auto;
    color: white;
    text-align:center;
}
.body-section{
    display:block;
}
#SearchMemo{
    margin:0 auto;
}
</style>
</head>
<body>
<?php
    session_start();
    $UserName=$_SESSION["UserName"];
    echo "<div id=m12><h1 class=m12>Welcome!!User:".$UserName."</h1></div>";
    mysql_connect("127.0.0.1","root","takming");
    mysql_select_db("phpwork");
?>
    <link href="https://fonts.googleapis.com/css?family=Roboto+Mono" rel="stylesheet">
    <svg style="position: absolute; width: 0; height: 0;" width="0" height="0" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" class="svg-sprite">
        <defs>
            <filter id="filter">
                <feTurbulence type="fractalNoise" baseFrequency="0.000001 0.000001" numOctaves="1" result="warp" seed="1"></feTurbulence>
                <feDisplacementMap xChannelSelector="R" yChannelSelector="G" scale="30" in="SourceGraphic" in2="warp"></feDisplacementMap>
            </filter>
        </defs>
    </svg>
    <div class="body-section" id="body-section">
        <div class="half dark">
            <div class="btn btn-small btn-clear btn-light btn-glitch" id="menu" data-toggle="modal" data-target="#AddMemoModalCenter">Add memo</div>
            <div class="btn btn-small btn-clear btn-light btn-glitch" id="" onclick="Search()">Search memo</div>
        </div>
    </div>
    <div class="modal fade" id="AddMemoModalCenter" tabindex="-1" role="dialog" aria-labelledby="AddMemoModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document" style="width:900px">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="AddMemoModalCenterTitle">Add memo</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <form name="myForm">
            <div class="modal-body">
                <label for="Memo" class="col-form-label">Memo:</label>
                <input type="text" class="form-control" id="Memo" maxlength="20"><br>
                <label for="Dateint" class="col-form-label">Date:</label>
                <input type="date" id="Dateint"><br>
                <label for="Timeint" class="col-form-label">Time:</label>
                <input type="text" class="form-control" id="Timeint" oninput = "value=value.replace(/[^\d]/g,'')" value="" placeholder="Hour&Minute：0101" maxlength="4"><br>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <button type="button"  class="btn btn-primary" onclick="add()">Next</button>
            </div>
            </form>
          </div>
        </div>
      </div>



    <script src="https://cpwebassets.codepen.io/assets/common/stopExecutionOnTimeout-157cd5b220a5c80d4ff8e0e70ac069bffd87a61252088146915e8726e5d9f147.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.18.4/TweenMax.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script type="text/javascript">
      function add(){
        var UserName =  "<?php echo $UserName ?>";
        //alert(UserName);
        var Memo =  $("input[id='Memo']").val();
        //alert(Memo);
        var Dateint = $("input[id='Dateint']").val();
        //alert(Dateint);
        var Timeint =  $("input[id='Timeint']").val();
        //alert(Timeint);
        if (Memo==""){
            alert("Enter Memo");
            location.href="homepage.php";
        }
        if (Dateint==0){
            alert("Enter Date");
            location.href="homepage.php";
        }
        if (Timeint==""){
            alert("Enter Time");
            location.href="homepage.php";
        }
        location.href="add.php?UserName=" +UserName+ "&Memo=" +Memo+ "&Dateint=" +Dateint+ "&Timeint=" +Timeint;
      }
      function Search(){
        var UserName =  "<?php echo $UserName ?>";
        location.href="Search.php?UserName=" +UserName;
      }
       
var $text = document.querySelector('.btn-glitch-active'),
    $filter = document.querySelector('.svg-sprite'),
    $turb = $filter.querySelector('#filter feTurbulence'),
    turbVal = { val: 0.000001 },
    turbValX = { val: 0.000001 };

var glitchTimeline = function() {
    var timeline = new TimelineMax({
        repeat: -1,
        repeatDelay: 2,
        paused: true,
        onUpdate: function () {
            $turb.setAttribute('baseFrequency', turbVal.val + ' ' + turbValX.val);
        }
    });

    timeline
        .to(turbValX, 0.1, { val: 0.5 })
        .to(turbVal, 0.1, { val: 0.02 });
    timeline
        .set(turbValX, { val: 0.000001 })
        .set(turbVal, { val: 0.000001 });
    timeline
        .to(turbValX, 0.2, { val: 0.4 }, 0.4)
        .to(turbVal, 0.2, { val: 0.002 }, 0.4);
    timeline
        .set(turbValX, { val: 0.000001 })
        .set(turbVal, { val: 0.000001 });

    // console.log("duration is: " + timeline.duration());

    return {
        start: function() {
            timeline.play(0);
        },
        stop: function() {
            timeline.pause();
        }
    };
};

btnGlitch = new glitchTimeline();

$('.btn-glitch')
    .on('mouseenter', function () {
          $(this).addClass('btn-glitch-active');
          btnGlitch.start();
    })
    .on('mouseleave', function () {
        var $this = $(this);
        if ( $this.hasClass('btn-glitch-active') ) {
            $this.removeClass('btn-glitch-active');
            btnGlitch.stop();
        }
    });

    </script>
</body>
</html>