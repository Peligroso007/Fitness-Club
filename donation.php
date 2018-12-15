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
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>anytime fitness club</title>
    <link rel="stylesheet" type="text/css" href="donations.css">
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
    <form action="insert.php" method="post">
        <table>
            <tr>
                <td><h3>First Name:-</h3></td>
                <td><input type="text" name="fname"></td>
            </tr>
            <tr>
                <td><h3>Last Name:-</h3></td>
                <td><input type="text" name="lname"></td>
            </tr>
            <tr>
                <td><h3>Contact Number:-</h3></td>
                <td><input type="text" name="contact"></td>
            </tr>
            <tr>
                <td><h3>Address:-</h3></td>
                <td><input type="text" name="address"></td>
            </tr>
            <tr>
                <td><h3>Email:-</h3></td>
                <td><input type="text" name="email"></td>
            </tr>
            <tr>
                <td><h3>Payment:-</h3></td>
                <td><select name="payment" >
                <option value="card">Card</option>
                <option value="cash">Cash</option>
                </select></td>
            </tr>
            <tr>
                <td colspan="2"><input type="submit" class="button" value="Submit"></td>
            </tr>
        </table>
        </form>
        <div id="explain">You can also donate money, so we can give it to the charity for the orphanage home.In order to donate fill the following form.</div>
    <div id="explain2">We will also provide you certificate of donation. Thank you for your help!!!</div>
</body>
</html>