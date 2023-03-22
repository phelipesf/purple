<?php

session_start();
if (isset($_SESSION['loggedin'])){header("location:"."dns.php");}

$db = new SQLite3('./api/.db.db');
$db->exec("CREATE TABLE IF NOT EXISTS USERS(ID INT PRIMARY KEY,USERNAME TEXT ,PASSWORD TEXT)");
$db->exec("CREATE TABLE IF NOT EXISTS messages(id INTEGER PRIMARY KEY  AUTOINCREMENT  NOT NULL, message VARCHAR(100), userid TEXT,status TEXT,expire TEXT)");
$db->exec("CREATE TABLE IF NOT EXISTS apps1(id INTEGER PRIMARY KEY NOT NULL,status VARCHAR(25) ,appname1 VARCHAR(100),appimg1 VARCHAR(100),appurl1 VARCHAR(100),appname2 VARCHAR(100),appimg2 VARCHAR(100),appurl2 VARCHAR(100),appname3 VARCHAR(100),appimg3 VARCHAR(100),appurl3 VARCHAR(100))");
$db->exec("CREATE TABLE IF NOT EXISTS apps2(id INTEGER PRIMARY KEY NOT NULL,status VARCHAR(25) ,appname4 VARCHAR(100),appimg4 VARCHAR(100),appurl4 VARCHAR(100),appname5 VARCHAR(100),appimg5 VARCHAR(100),appurl5 VARCHAR(100),appname6 VARCHAR(100),appimg6 VARCHAR(100),appurl6 VARCHAR(100))");
$db->exec("CREATE TABLE IF NOT EXISTS apps3(id INTEGER PRIMARY KEY NOT NULL,status VARCHAR(25) ,appname7 VARCHAR(100),appimg7 VARCHAR(100),appurl7 VARCHAR(100),appname8 VARCHAR(100),appimg8 VARCHAR(100),appurl8 VARCHAR(100),appname9 VARCHAR(100),appimg9 VARCHAR(100),appurl9 VARCHAR(100))");
$db->exec("CREATE TABLE IF NOT EXISTS apps4(id INTEGER PRIMARY KEY NOT NULL,status VARCHAR(25) ,appname10 VARCHAR(100),appimg10 VARCHAR(100),appurl10 VARCHAR(100),appname11 VARCHAR(100),appimg11 VARCHAR(100),appurl11 VARCHAR(100),appname12 VARCHAR(100),appimg12 VARCHAR(100),appurl12 VARCHAR(100))");
$db->exec("CREATE TABLE IF NOT EXISTS apps5(id INTEGER PRIMARY KEY NOT NULL,status VARCHAR(25) ,appname13 VARCHAR(100),appimg13 VARCHAR(100),appurl13 VARCHAR(100),appname14 VARCHAR(100),appimg14 VARCHAR(100),appurl14 VARCHAR(100),appname15 VARCHAR(100),appimg15 VARCHAR(100),appurl15 VARCHAR(100))");
$db->exec("CREATE TABLE IF NOT EXISTS apps6(id INTEGER PRIMARY KEY NOT NULL,status VARCHAR(25) ,appname16 VARCHAR(100),appimg16 VARCHAR(100),appurl16 VARCHAR(100),appname17 VARCHAR(100),appimg17 VARCHAR(100),appurl17 VARCHAR(100),appname18 VARCHAR(100),appimg18 VARCHAR(100),appurl18 VARCHAR(100))");
$db->exec("CREATE TABLE IF NOT EXISTS contact(id INTEGER PRIMARY KEY NOT NULL,status VARCHAR(25) ,whatsapp VARCHAR(100),email VARCHAR(100),skype VARCHAR(100),telegram VARCHAR(100),website VARCHAR(100),privacy VARCHAR(100))");
$db->exec("CREATE TABLE IF NOT EXISTS DNS(id INTEGER PRIMARY KEY NOT NULL,status VARCHAR(25) ,portal1 VARCHAR(100),portal2 VARCHAR(100),portal3 VARCHAR(100),portal4 VARCHAR(100),portal5 VARCHAR(100),portal6 VARCHAR(100),portal7 VARCHAR(100),portal8 VARCHAR(100),portal9 VARCHAR(100),portal10 VARCHAR(100))");
$db->exec("CREATE TABLE IF NOT EXISTS images(id INTEGER PRIMARY KEY NOT NULL,status VARCHAR(25) ,image1 VARCHAR(100),image2 VARCHAR(100),image3 VARCHAR(100),image4 VARCHAR(100),image5 VARCHAR(100),image6 VARCHAR(100),image7 VARCHAR(100),image8 VARCHAR(100),image9 VARCHAR(100),image10 VARCHAR(100))");
$db->exec("CREATE TABLE IF NOT EXISTS settings(id INTEGER PRIMARY KEY NOT NULL,status VARCHAR(25) ,sett1 VARCHAR(100),sett2 VARCHAR(100),sett3 VARCHAR(100),sett4 VARCHAR(100),sett5 VARCHAR(100),sett6 VARCHAR(100),sett7 VARCHAR(100),sett8 VARCHAR(100),sett9 VARCHAR(100),sett10 VARCHAR(100))");

$rows = $db->query("SELECT COUNT(*) as count FROM USERS");
$row = $rows->fetchArray();
$numRows = $row['count'];
if ($numRows == 0){
	$db->exec("INSERT INTO USERS(ID ,USERNAME, PASSWORD) VALUES('1' ,'admin', 'admin')");
	}

if (isset($_POST["login"])){
	if(!$db){
		echo $db->lastErrorMsg();
	} else {
	}
	$sql ='SELECT * from USERS where USERNAME="'.$_POST["username"].'";';
	$ret = $db->query($sql);
	while($row = $ret->fetchArray() ){
		$id=$row['ID'];
		$username=$row["USERNAME"];
		$password=$row['PASSWORD'];
	}
	if ($id!=""){
		if ($password==$_POST["password"]){
			session_regenerate_id();
			$_SESSION['loggedin'] = TRUE;
			$_SESSION['N'] = $_POST['USERNAME'];
			header('Location: dns.php');    
		}else{
		echo "Wrong Password";
        }
		}else{
		echo "User not exist, please register to continue!";
		}
	$db->close();
	}


////Get User IP
function real_ip() {
	$ip = 'undefined';
	if (isset($_SERVER)) {
		$ip = $_SERVER['REMOTE_ADDR'];
		if (isset($_SERVER['HTTP_X_FORWARDED_FOR'])) $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
		elseif (isset($_SERVER['HTTP_CLIENT_IP'])) $ip = $_SERVER['HTTP_CLIENT_IP'];
	} else {
		$ip = getenv('REMOTE_ADDR');
		if (getenv('HTTP_X_FORWARDED_FOR')) $ip = getenv('HTTP_X_FORWARDED_FOR');
		elseif (getenv('HTTP_CLIENT_IP')) $ip = getenv('HTTP_CLIENT_IP');
	}
	$ip = htmlspecialchars($ip, ENT_QUOTES, 'UTF-8');
	return $ip;
}



?>

<!DOCTYPE html>
    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<!-- Required meta tags -->
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<!-- Bootstrap CSS -->
<link rel="stylesheet" href="assets/css/material-dashboard.css" rel="stylesheet" />

<head>
<title>Purple Panel</title>
<link rel="icon" type="image/png" href="img/apk.png">
</head>

<style>
    select * {
    }
	body {
    background-image: radial-gradient( black 40%, #000954 99%);
    height: 100vh;
	}
	@-webkit-keyframes autofill {
	to {
		color: white;
		background: transparent;
	}
	}
	
	input:-webkit-autofill {
	-webkit-animation-name: autofill;
	-webkit-animation-fill-mode: both;
	}
</style>
<body class="dark-edition">
  <div class="wrapper ">
  <br><br><br>
	<div class="container" style="margin-top:30px">
	    <div style="width:400px; margin:0 auto;">
		<div class="row">
			<div class="center">
			    <h1 class="text-center text-warning">Purple Panel v4</h1>
				<h2 class="text-center text-warning">Sign in</h2>
				<div>
				    <div style="width:400px; margin:0 auto;">
					<form method="post">
					<input type="text" class="form-control" placeholder="Username" name="username" required autofocus><br>
					<input type="password" class="form-control" placeholder="Password" name="password" required><br>
					<button class="btn btn-lg btn btn-primary btn-block" name="login" type="submit">Sign in</button>
				</form>
				</div>
			<div class="card-body">
				<div class="panel-body">
				<div class='panel-heading text-center'>
				<p class="text-warning">Time Of Arrival: "<i><?php echo  date('H:i:s D-M-Y')?></i> "</p>
				<p class="text-warning">Logged IP Address: "<i><?php echo  real_ip()?></i> "</p>
			</div>
			</div>
		</div>
	</div>

<!-- jQuery first, then Popper.js, then Bootstrap JS -->	
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>


  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin.min.js"></script>
  <script src="js/jquery.datetimepicker.js"></script>
 
<script>

$timezone = date_default_timezone_get();
var today = new Date();
var date = today.getFullYear()+'-'+(today.getMonth()+1)+'-'+today.getDate();
var time = today.getHours() + ":" + today.getMinutes() + ":" + today.getSeconds();
var dateTime = date+' '+time;

$('#datetimepicker').datetimepicker({
	//value:dateTime, 
	step:30,
	format:'Y-m-d H:i:s',
	});
	

$(document).ready(function () {
    $("#flash-msg").delay(3000).fadeOut("slow");
});

</script><!-- Optional JavaScript -->
</body>
</html>
