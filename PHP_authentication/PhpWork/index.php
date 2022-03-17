<html>
	<head>
		<meta charset="utf-8">
			<title>Welcome</title>
			<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
			<link rel="stylesheet" type="text/css" href="style.css">
			<link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
	</head>
    <script src="http://apps.bdimg.com/libs/jquery/1.8.3/jquery.min.js"></script>
	<script type="text/javascript">
        $(function(){
        var i=0,i2; 
        var tid;
        $(".box").mousedown(function(){
        tid = setInterval(function(){
        i++;
        if (i<180){
            i2=parseInt(i)-180;
            i2=i2+"deg";
            console.log(i2);
            document.documentElement.style.setProperty('--percent1',i2);
        }
        else if (i==180){
            document.documentElement.style.setProperty('--pr2width','120px');
            document.documentElement.style.setProperty('--pr2height','240px');
        }
        else if (i<360){
            i2=parseInt(i)-180;
            i2=i2+"deg";
            console.log(i2);
            document.documentElement.style.setProperty('--percent2',i2);
        }
        else if (i==360){
            document.getElementById("press").style.display="none";
            document.getElementById("box").style.display="none";
            document.body.style.background ="#121212";
            document.getElementById("m12").style.display="block";
            document.getElementById("body-section").style.display="block";
        }
        },3)
        })
        $(".box").mouseup(function(){
        clearInterval(tid);
        })
        $(".box").mouseout(function(){
        clearInterval(tid);
        })
        })
	</script>
	<body>
	    <div id="press">
			<h1 class="press">Press!!</h1>
		</div>
		<div class="box" id="box">
			<div class="bg1"></div>
			<div class="bg2"></div>
			<div class="pr1"></div>
			<div class="pr2"></div>
			<div class="content">
				<i class="icon-off icon-5x"></i>
			</div>
			<div class="content2"></div>
		</div>
		<div id="m12">
			<h1 class="ml2">WELCOME!!</h1>
		</div>
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
				<div class="btn btn-small btn-clear btn-light btn-glitch" id="leftbutton" data-toggle="modal" data-target="#SingInModalCenter">Users</div>
				<div class="btn btn-small btn-clear btn-light btn-glitch" id="rightbutton" data-toggle="modal" data-target="#SignUpModalCenter">New Users</div>
			</div>
		</div>
		<div class="modal fade" id="SingInModalCenter" tabindex="-1" role="dialog" aria-labelledby="SingInModalCenterTitle" aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="SingInModalCenterTitle">Sign in</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<label for="UserName1" class="col-form-label">Username:</label>
						<input type="text" class="form-control" id="UserName1">
						<label for="Password1" class="col-form-label">Password:</label>
						<input type="password" class="form-control" id="Password1">
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
						<button type="button" class="btn btn-primary" onclick="SignIn()">Next</button>
					</div>
				</div>
			</div>
		</div>
		<div class="modal fade" id="SignUpModalCenter" tabindex="-1" role="dialog" aria-labelledby="SignUpModalCenterTitle" aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="SignUpModalCenterTitle">Sign up</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<label for="UserName2" class="col-form-label">Username:</label>
						<input type="text" class="form-control" id="UserName2">
						<label for="Password2" class="col-form-label">Password:</label>
						<input type="password" class="form-control" id="Password2">
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
						<button type="button" class="btn btn-primary" onclick="SignUp()">Next</button>
					</div>
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
            function SignIn(){
                UserName =  $("input[id='UserName1']").val();
                Password =  $("input[id='Password1']").val();
                location.href="verification.php?UserName=" +UserName+"&Password=" +Password;
            }
            function SignUp(){
                UserName =  $("input[id='UserName2']").val();
                Password =  $("input[id='Password2']").val();
                location.href="replication.php?UserName=" +UserName+"&Password=" +Password;
            }
            var textWrapper = document.querySelector('.ml2');
            textWrapper.innerHTML = textWrapper.textContent.replace(/\S/g, "<span class='letter'>$&</span>");
            anime.timeline({loop: true})
            .add({
                targets: '.ml2 .letter',
                scale: [4,1],
                opacity: [0,1],
                translateZ: 0,
                easing: "easeOutExpo",
                duration: 950,
                delay: (el, i) => 70*i
            })
            .add({
                targets: '.ml2',
                opacity: 0,
                duration: 1000,
                easing: "easeOutExpo",
                delay: 1000
            });
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