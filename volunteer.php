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
    <link rel="stylesheet" type="text/css" href="volunteer.css">
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
    <form action="insertv.php" method="post">
        <table>
            <tr>
                <td><h3>Full Name:-</h3></td>
                <td><input type="text" name="fname"></td>
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
                <td><h3>sex:-</h3></td>
                <td><select name="sex">
                <option value="male">Male</option>
                <option value="female">Female</option>
                </select></td>
            </tr>
            <tr>
                <td colspan="2"><input type="submit" class="button" value="Submit"></td>
            </tr>
        </table>
        </form>
    <div id="explain">We conduct many programs in order to aware the people.so any body intrested in volunteer can fill up this form and take part in this program and the member who take part in this program will get certificate.</div>
</body>
</html>