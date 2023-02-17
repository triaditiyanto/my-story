<!DOCTYPE html>
<html>

<head>
	<title>Login | My diary</title>
	<style>
		body {
			background-image: url('https://media.giphy.com/media/BHNfhgU63qrks/giphy.gif');
			background-repeat: no-repeat;
			background-size: cover;
			height: 85vh;
			padding: 0;
			margin: 0;
		}

		h1 {
			text-align: center;
			font-weight: 300;
		}

		.tulisan_login {
			text-align: center;
			font-family: 'Space Mono', monospace;
		}

		.kotak_login {
			width: 350px;
			background: rgba(0, 0, 0, 0.5);
			color: #fff;
			margin: 80px auto;
			padding: 30px 20px;
			/* box-shadow: 0px 0px 100px 4px #d6d6d6; */
			border-radius: 10px;

		}

		label {
			font-size: 11pt;
		}

		.form_login {
			box-sizing: border-box;
			width: 100%;
			padding: 10px;
			font-size: 11pt;
			margin-bottom: 20px;
		}

		/* .tombol_login{
	background: black;
	color: white;
	font-size: 10pt;
	width: 100%;
	border: none;
	border-radius: 3px;
	padding: 10px 20px;
} */

		.link {
			color: #232323;
			text-decoration: none;
			font-size: 10pt;
		}
	</style>
</head>

<body>

	<!DOCTYPE html>
	<html lang="en">

	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins">
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
		<script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
		<title>Login | My Diary</title>
	</head>

	<body>

	</body>

	</html>

	<?php
	if (isset($_GET['pesan'])) {
		if ($_GET['pesan'] == "gagal") {
			echo "<div class='alert alert-success fade in'>
			<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
			Pesan Alert Sukses
		</div>";
		}
	}
	?>

	<div class="kotak_login">
		<p style="font-size: 15px" style="font-family: courier;" class="tulisan_login">My | Story</p>
		<form action="cek_login.php" method="POST" onSubmit="validasi()">
			<input type="text" class="form-control" style=" font-family: 'Space Mono', monospace;" id="username" name="username" aria-describedby="emailHelp" placeholder="Enter username"><br>
			<input type="password" class="form-control" style=" font-family: 'Space Mono', monospace;" id="password" name="password" placeholder="Password"><br>

			<input type="submit" style="width: 100%; margin-bottom: 20px; font-family: 'Space Mono', monospace; " class="btn btn-outline-success" value="Login"><br>
			<a class="btn btn-outline-info" style="width: 100%; font-family: 'Space Mono', monospace;" href="reg.php" role="button">Register</a>
			<br />
			<br />
		</form>

	</div>

</body>
<script type="text/javascript">
	function validasi() {
		var nama = document.getElementById("username").value;
		var password = document.getElementById("password").value;
		if (nama != "" && password != "") {
			return true;
			window.location.replace("index.php");
		} else {
			alert('Anda harus mengisi data dengan lengkap !');
		}
	}
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>

</html>