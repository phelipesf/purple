<?php
session_start();
if (!isset($_SESSION['loggedin'])) {
	header("location:"."index.php");
	exit();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Admin - Dashboard</title>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="css/jquery.datetimepicker.min.css"/>

</head>

<body id="page-top">

  <nav class="navbar navbar-expand navbar-dark bg-dark sticky-top">

    <a class="navbar-brand mr-1" href="dns.php">PURPLE PLAYER PANNEL</a>

    <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
      <i class="fa fa-bars"></i>
    </button>
	<form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
		<div class="form-group">
			<div>
				<a href="logout.php" class="btn btn-danger " role="button" aria-disabled="true">Logout</a>
			</div>
		</div>
	</form>
  </nav>

  <div id="wrapper">
    <!-- Sidebar -->
    <ul class="sidebar navbar-nav">
	  <li class="nav-item <?php if(basename($_SERVER["SCRIPT_FILENAME"], '.php') == 'app'){echo('active');}?>">
        <a class="nav-link" href="dns.php">
          <i class="fa fa-home fa-lg"></i>
          <br><span>Dns</span></a>
      </li>
      <li class="nav-item <?php if(basename($_SERVER["SCRIPT_FILENAME"], '.php') == 'app'){echo('active');}?>">
        <a class="nav-link" href="images.php">
          <i class="fa fa-home fa-lg"></i>
          <br><span>Images</span></a>
      </li>
      <li class="nav-item <?php if(basename($_SERVER["SCRIPT_FILENAME"], '.php') == 'app'){echo('active');}?>">
        <a class="nav-link" href="settings.php">
          <i class="fa fa-home fa-lg"></i>
          <br><span>SETTINGS</span></a>
      </li>
      <li class="nav-item <?php if(basename($_SERVER["SCRIPT_FILENAME"], '.php') == 'app'){echo('active');}?>">
        <a class="nav-link" href="apps1.php">
          <i class="fa fa-home fa-lg"></i>
          <br><span>apps 1-3</span></a>
      </li> 
        <li class="nav-item <?php if(basename($_SERVER["SCRIPT_FILENAME"], '.php') == 'app'){echo('active');}?>">
        <a class="nav-link" href="apps2.php">
          <i class="fa fa-home fa-lg"></i>
          <br><span>apps 4-6</span></a>
      </li>
      <li class="nav-item <?php if(basename($_SERVER["SCRIPT_FILENAME"], '.php') == 'app'){echo('active');}?>">
        <a class="nav-link" href="apps3.php">
          <i class="fa fa-home fa-lg"></i>
          <br><span>apps 7-9</span></a>
      </li>
      <li class="nav-item <?php if(basename($_SERVER["SCRIPT_FILENAME"], '.php') == 'app'){echo('active');}?>">
        <a class="nav-link" href="apps4.php">
          <i class="fa fa-home fa-lg"></i>
          <br><span>apps 10-12</span></a>
      </li>
      <li class="nav-item <?php if(basename($_SERVER["SCRIPT_FILENAME"], '.php') == 'app'){echo('active');}?>">
        <a class="nav-link" href="apps5.php">
          <i class="fa fa-home fa-lg"></i>
          <br><span>apps 13-15</span></a>
      </li>
      <li class="nav-item <?php if(basename($_SERVER["SCRIPT_FILENAME"], '.php') == 'app'){echo('active');}?>">
        <a class="nav-link" href="apps6.php">
          <i class="fa fa-home fa-lg"></i>
          <br><span>apps 16-18</span></a>
      </li>
      <li class="nav-item <?php if(basename($_SERVER["SCRIPT_FILENAME"], '.php') == 'app'){echo('active');}?>">
        <a class="nav-link" href="contact.php">
          <i class="fa fa-home fa-lg"></i>
          <br><span>Contact info</span></a>
      </li>
                    <br>
      <li class="nav-item <?php if(basename($_SERVER["SCRIPT_FILENAME"], '.php') == 'user'){echo('active');}?>">
        <a class="nav-link" href="user.php">
          <i class="fa fa-address-book fa-lg"></i>
          <span>Update User / Pass</span></a>
      </li>
    </ul>

