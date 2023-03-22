<?php
//ini_set('display_errors', 1);
//ini_set('display_startup_errors', 1);
//error_reporting(E_ALL);

$db = new SQLite3('./api/.db.db');
$db->exec("CREATE TABLE IF NOT EXISTS DNS(id INTEGER PRIMARY KEY NOT NULL,status VARCHAR(25) ,portal1 VARCHAR(100),portal2 VARCHAR(100),portal3 VARCHAR(100),portal4 VARCHAR(100),portal5 VARCHAR(100),portal6 VARCHAR(100),portal7 VARCHAR(100),portal8 VARCHAR(100),portal9 VARCHAR(100),portal10 VARCHAR(100))");

$rows2 = $db->query("SELECT COUNT(*) as count FROM DNS");
$row2 = $rows2->fetchArray();
$numRows2 = $row2['count'];
if ($numRows2 == 0){
	$db->exec("INSERT INTO DNS(status,portal1,portal2,portal3,portal4,portal5,portal6,portal7,portal8,portal9,portal10) VALUES('true','http://changeme.net:80','http://changeme.net:80','http://changeme.net:80','http://changeme.net:80','http://changeme.net:80','http://changeme.net:80','http://changeme.net:80','http://changeme.net:80','http://changeme.net:80','http://changeme.net:80')");
}
$rows3 = $db->query("SELECT * FROM DNS");
$row3 = $rows3->fetchArray();

if(isset($_GET['delete'])){
$db->exec("DELETE FROM DNS WHERE id=".$_GET['delete']);
header("Location: dns.php");
}
//read and change dns
if(isset($_POST['text'])){
	//maybe create a gen config file for keys if all client has diff key??
	// $status	=   "true";
	$portal1	= strip_tags($_REQUEST['data1']);
	$portal2	= strip_tags($_REQUEST['data2']);
	$portal3	= strip_tags($_REQUEST['data3']);
    $portal4	= strip_tags($_REQUEST['data4']);
    $portal5	= strip_tags($_REQUEST['data5']);
	$portal6	= strip_tags($_REQUEST['data6']);
	$portal7	= strip_tags($_REQUEST['data7']);
    $portal8	= strip_tags($_REQUEST['data8']);
    $portal9	= strip_tags($_REQUEST['data9']);
    $portal10	= strip_tags($_REQUEST['data10']);
		//to not duplicate////
		$sql = "DELETE FROM DNS";
		$db->exec($sql);
    $db->exec("INSERT INTO DNS(id ,status, portal1,portal2,portal3,portal4,portal5,portal6,portal7,portal8,portal9,portal10) VALUES('1' ,'true','$portal1','$portal2','$portal3','$portal4','$portal5','$portal6','$portal7','$portal8','$portal9','$portal10')");
    header('Location: ' . $_SERVER['PHP_SELF']);
}
?>
<!DOCTYPE html>
    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<!-- Bootstrap CSS -->
<link rel="stylesheet" href="assets/css/black-dashboard.css" rel="stylesheet" />
<html lang="en">

<head>
<title>Purple Panel</title>
<link rel="icon" type="image/png" href="img/apk.png">
<meta charset="utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<style>
    select * {
        background-color:#202940;
        color: #000;
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
  /* Dropdown Button */
.dropbtn {
  background-color: #4CAF50;
  color: white;
  padding: 16px;
  font-size: 16px;
  border: none;
}

/* The container <div> - needed to position the dropdown content */
.dropdown {
  position: relative;
  display: inline-block;
}

/* Dropdown Content (Hidden by Default) */
.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f1f1f1;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

/* Links inside the dropdown */
.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

/* Change color of dropdown links on hover */
.dropdown-content a:hover {background-color: #ddd;}

/* Show the dropdown menu on hover */
.dropdown:hover .dropdown-content {display: block;}

/* Change the background color of the dropdown button when the dropdown content is shown */
.dropdown:hover .dropbtn {background-color: #3e8e41;
}
</style>
  <!-- Custom styles for this template-->
  <link href="css/black-dashboard.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="css/jquery.datetimepicker.min.css"/>

</head>



  <!-- TOPBAR -->
  <nav class="navbar navbar-expand-md bg-dark navbar-dark">
  <a class="navbar-brand" href="app.php"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="dns.php">DNS</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="images.php">Images</a>
        </li> 
        <li class="nav-item">
        <a class="nav-link" href="settings.php">Settings</a>
        </li> 
        <li class="nav-item">
        <a class="nav-link" href="apps1.php">Apps 1-3</a>
        </li> 
        <li class="nav-item">
        <a class="nav-link" href="apps2.php">Apps 4-6</a>
        </li> 
        <li class="nav-item">
        <a class="nav-link" href="apps3.php">Apps 7-9</a>
        </li> 
        <li class="nav-item">
        <a class="nav-link" href="apps4.php">Apps 10-12</a>
        </li> 
        <li class="nav-item">
        <a class="nav-link" href="apps5.php">Apps 13-15</a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="apps6.php">Apps 16-18</a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="contact.php">Contact</a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="user_update.php">User/Pass</a>
        </li>  
      <li class="nav-item">
        <a class="nav-link" href="logout.php">Logout</a>
        </li>   
      <li class="nav-item">
        <a class="nav-link" href="#"></a>
        </li>   
    </ul>
  </div>  
</nav>

  <!-- SIDEBAR -->
</style>
<body class="dark-edition">
  <div class="wrapper ">
    <div class="sidebar " data-color="orange" data-background-color="black" data-image="assets/img/image-6.png">
      <div class="logo"><a class="simple-text logo-normal">
          <h3 class="text-warning">Purple Panel v4</h3>
        </a></div>
        <div class="sidebar-wrapper">
      <ul class="nav">
        <ul class="nav">
	  <li class="nav-item ">
        <a class="nav-link" href="dns.php">
        <i class="material-icons">domain</i>
              <p>Dns</p>
              </a>
      </li>
      <li class="nav-item ">
        <a class="nav-link" href="images.php">
        <i class="material-icons">image</i>
              <p>Images</p>
              </a>
      </li>
      <li class="nav-item ">
        <a class="nav-link" href="settings.php">
        <i class="material-icons">settings_backup_restore</i>
              <p>Settings</p>
              </a>
      </li>
      <li class="nav-item ">
        <a class="nav-link" href="apps1.php">
        <i class="material-icons">dashboard</i>
              <p>Appstore 1</p>
              </a>
      </li>
        <li class="nav-item ">
        <a class="nav-link" href="apps2.php">
        <i class="material-icons">dashboard</i>
              <p>Appstore 2</p>
              </a>
      </li>
      <li class="nav-item ">
        <a class="nav-link" href="apps3.php">
        <i class="material-icons">dashboard</i>
              <p>Appstore 3</p>
              </a>
      </li>
      <li class="nav-item ">
        <a class="nav-link" href="apps4.php">
        <i class="material-icons">dashboard</i>
              <p>Appstore 4</p>
              </a>
      </li>
      <li class="nav-item ">
        <a class="nav-link" href="apps5.php">
        <i class="material-icons">dashboard</i>
              <p>Appstore 5</p>
              </a>
      </li>
      <li class="nav-item ">
        <a class="nav-link" href="apps6.php">
        <i class="material-icons">dashboard</i>
              <p>Appstore 6</p>
              </a>
      </li>
      <li class="nav-item ">
        <a class="nav-link" href="contact.php">
        <i class="material-icons">notifications</i>
              <p>Contact Info</p>
              </a>
      </li>
      <li class="nav-item ">
        <a class="nav-link" href="user_update.php">
        <i class="material-icons">person</i>
              <p>Change User & Pass</p>
              </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="logout.php">
            <i class="material-icons">warning</i>
              <p>Logout</p>
            </a>
            </li>
      </ul>
      </div>
    </div>
      <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top " id="navigation-example">
        <div class="container-fluid">
          <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation" data-target="#navigation-example">
            <span class="sr-only">Toggle navigation</span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
          </button>
		</div>
  </nav>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>
<style>
body {
	background-color: #ffffff;
}
input[type=text] {
  background-color: #ffffff;
  color: blacl;
}
.box {
  background: #ffffff;
  color: #ffffff;
  width: 250px;
  padding: 10px;
  margin: 1em auto;
}
p {
  margin: 1.5em 0;
  padding: 0;
}
input[type="checkbox"] {
  visibility: hidden;
}
label {
  cursor: pointer;
}
input[type="checkbox"] + label:before {
  border: 1px solid #ffffff;
  content: "\00a0";
  display: inline-block;
  font: 16px/1em sans-serif;
  height: 16px;
  margin: 0 .25em 0 0;
  padding: 0;
  vertical-align: top;
  width: 16px;
}
input[type="checkbox"]:checked + label:before {
  background: #fff;
  color: #333;
  content: "\2713";
  text-align: center;
}
input[type="checkbox"]:checked + label:after {
  font-weight: bold;
}

input[type="checkbox"]:focus + label::before {
    outline: rgb(59, 153, 252) auto 5px;
}


</style>
<body>

      <!-- Navbar -->

<div class="main-panel">
      <div class="content">
        <div class="container-fluid">

		<div class="container" >
	    <div style="width:600px; margin:0 auto;">
		<div class="row">
		<div class="center">
					<div style="width:600px; margin:0 auto;">
>						<h4 class="text-center text-success">Change DNS</h4>
						<form method="post">
							<div class="form-group">
							<h6 class="form-text text-info">Portal 1</h6>
								<input type="text" class="form-control" placeholder="DNS:PORT 1" name="data1" value="<?php echo $row3['portal1'];?>">
							</div>
							<div class="form-group">
							<h6 class="form-text text-info">Portal 2</h6>
								<input type="text" class="form-control" placeholder="DNS:PORT 2" name="data2" value="<?php echo $row3['portal2'];?>">
							</div>
							<div class="form-group">
							<h6 class="form-text text-info">Portal 3</h6>
								<input type="text" class="form-control" placeholder="DNS:PORT 3" name="data3" value="<?php echo $row3['portal3'];?>">
							</div>
							<div class="form-group">
							<h6 class="form-text text-info">Portal 4</h6>
								<input type="text" class="form-control" placeholder="DNS:PORT 4" name="data4" value="<?php echo $row3['portal4'];?>">
							</div>
							<div class="form-group">
							<h6 class="form-text text-info">Portal 5</h6>
								<input type="text" class="form-control" placeholder="DNS:PORT 5" name="data5" value="<?php echo $row3['portal5'];?>">
							</div>
							<div class="form-group">
							<h6 class="form-text text-info">Portal 6</h6>
								<input type="text" class="form-control" placeholder="DNS:PORT 6" name="data6" value="<?php echo $row3['portal6'];?>">
							</div>
							<div class="form-group">
							<h6 class="form-text text-info">Portal 7</h6>
								<input type="text" class="form-control" placeholder="DNS:PORT 7" name="data7" value="<?php echo $row3['portal7'];?>">
							</div>
							<div class="form-group">
							<h6 class="form-text text-info">Portal 8</h6>
								<input type="text" class="form-control" placeholder="DNS:PORT 8" name="data8" value="<?php echo $row3['portal8'];?>">
							</div>
							<div class="form-group">
							<h6 class="form-text text-info">Portal 9</h6>
								<input type="text" class="form-control" placeholder="DNS:PORT 9" name="data9" value="<?php echo $row3['portal9'];?>">
							</div>
							<div class="form-group">
							<h6 class="form-text text-info">Portal 10</h6>
								<input type="text" class="form-control" placeholder="DNS:PORT 10" name="data10" value="<?php echo $row3['portal10'];?>">
							</div>

							<button type="submit" name="text" class="btn btn-primary">Update</button>
						</form>
						<br>

						<br>

								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

<br><br>
<br><br>
</body>
</html>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
