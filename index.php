<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }
?>
<!DOCTYPE html>
<html>
<head>
	<title>Anytime Fitness Club</title>
	<link rel="stylesheet" type="text/css" href="indexstyle.css">
</head>
<body>
  	<?php if (isset($_SESSION['success'])) : ?>
      <div class="error success" >
      	<h3>
          <?php 
          	echo $_SESSION['success']; 
          	unset($_SESSION['success']);
          ?>
      	</h3>
      </div>
  	<?php endif ?> 

    <div id="log">
 <?php  if (isset($_SESSION['username'])) : ?>
    	<p> <a style="position: absolute; float: right;" href="index.php?logout='1'" style="color: red;">logout</a> </p>
    <?php endif ?>
    </div>
<img src="images/logo.png" id="logo">
<h2>Anytime Fitness Club</h2> 
<div id="nav">
    <ul>
        <li><a href="index.php">HOME</a></li>
        <li><a href="about.php">ABOUT</a></li>
    </ul>

</div>
<div id="choose">
    <a href="donation.php"><input class="button" type="button" value="Donation"></a>
    <a href="volunteer.php"><input class="button" type="button" value="Volunteer"></a>
    <a href="program.php"><input class="button" type="button" value="Programs"></a>
</div>
<div class="con">
    <h3>Contact Number:- 02 9876 5432</h3>
    <h3>Address:-17 delmar parade, dee why, sydney</h3>
</div>		
</body>
</html>