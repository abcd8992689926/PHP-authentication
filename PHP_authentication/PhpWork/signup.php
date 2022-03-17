<html>
	<head>
		<meta charset="utf-8">
		<title>Welcome</title>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
		<link rel="stylesheet" type="text/css" href="style.css">
		<style>
			body{
				background:#121212;
			}
		</style>
	</head>
	<body>
		<?php
			session_start();
			$report=$_SESSION["report"];
		?>
		<div class="modal-dialog modal-dialog-centered" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="SingInModalCenterTitle">Sign up</h5>
				</div>
				<div class="modal-body">
					<label id="report"><b>report</b></label><br>
					<label for="UserName" class="col-form-label">Username:</label>
					<input type="text" class="form-control" id="UserName">
					<label for="Password" class="col-form-label">Password:</label>
					<input type="password" class="form-control" id="Password">
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-primary" id="signin" onclick="SignUp()">Next</button>
				</div>
			</div>
		</div>
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
		<script type="text/javascript">
			function SignUp(){
				UserName =  $("input[id='UserName']").val();
				Password =  $("input[id='Password']").val();
				location.href="replication.php?UserName=" +UserName+"&Password=" +Password;
			}
			var report="<?php echo $report; ?>";
			if (report==0){
				document.getElementById("report").innerHTML="<b>Enter your Username, Password</b>";
			}
			if (report==1){
				document.getElementById("report").innerHTML="<b>Registration success!!5seconds back to sign in</b>";
				BackIndex();
			}
			if (report==2){
				document.getElementById("report").innerHTML="<b>That username is taken.Try another.</b>";
			}
			function BackIndex(){  
				<?php
					session_start();
					$error = "0";
					$_SESSION["error"]=$error;
				?>
				setTimeout("location.href='reenter.php'",5000);
			}
		</script>
	</body>
</html>