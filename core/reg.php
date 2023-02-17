<?php
        include_once("../conn.php");

?>
<!DOCTYPE html>
<html>
<head>
	<title>Register | My Diary</title>
    <style>
	*{
			font-family: 'Space Mono', monospace;
		}
        body{
	 /* font-family: 'Space Mono', monospace; */
	 background-image: url('https://media.giphy.com/media/BHNfhgU63qrks/giphy.gif');
       background-repeat: no-repeat;
    background-size: cover;
    height: 85vh;
    padding:0;
    margin:0;
}
 
h1{
	text-align: center;
	font-weight: 300;
}
 
.tulisan_login{
	text-align: center;
}
 
.kotak_login{
	width: 350px;
	background: rgba(0, 0, 0, 0.5);
    color:#fff;
	margin: 80px auto;
	padding: 30px 20px;
	/* box-shadow: 0px 0px 100px 4px #d6d6d6; */
	border-radius: 10px;

}
 
label{
	font-size: 11pt;
}
 
.form_login{
	box-sizing : border-box;
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
 
.link{
	color: #232323;
	text-decoration: none;
	font-size: 10pt;
}
 
.alert{
	background: #e44e4e;
	color: white;
	padding: 10px;
	text-align: center;
	border:1px solid #b32929;
	margin:0px;
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

		<title>Register | MY</title>
	</head>
 
	<div class="kotak_login">
		<p style="font-size: 15px" class="tulisan_login">My-Diary register</p> 
		<form action="" method="post">
        <input type="text" class="form-control" name="nama_lengkap" id="nama_lengkap" placeholder="Enter nama lengkap"><br>
            <input type="text" class="form-control" name="username" placeholder="Enter username"><br>
             <input type="password" class="form-control" name="pass" placeholder="Password"><br>
 
			<input type="submit"  name="Submit" id="Submit" style="width: 100%; margin-bottom: 20px; " class="btn btn-outline-success" value="Regis"><br>
            <a class="btn btn-outline-info" style="width: 100%;" href="index.php" role="button">Login</a>
			<br/>
			<br/>
		</form>
		
	</div>
    <?php
    if(isset($_POST['Submit'])) {
        $nama_lengkap = $_POST['nama_lengkap'];
        $username = $_POST['username'];
        $pass = md5($_POST['pass']);
        

        include_once("../conn.php");
        $result = mysqli_query($conn, "INSERT INTO tb_user(name,name_user,password) VALUES('$nama_lengkap','$username','$pass')");
        
    }
    ?>
 
</body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</html>