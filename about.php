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
	<link rel="stylesheet" type="text/css" href="aboutstyle.css">
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
<div id="contain">
    <h3>Mission</h3>
    <p>Everybody in this world should be fit and fine with a great body and mind.</p>
    <img src="images/owner.jpg" id="owner">
    <div id="details"><p style="color: cyan;">This club was started by mr. milan bashyal in 2015 with great thought of making the people of his community healthy and sound. he has been a role model to his society and have worked very hard to motivate the people of his community.This club was started with only one program of weight lifting but now this club offers jumba classes, cardio, and many more special diet plan for the people. many celebraties has also inrole in this club in past and has a remarkable body. </p>
</div>	</div>	
</body>
</html>