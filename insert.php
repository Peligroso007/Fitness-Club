<?php
$con = mysqli_connect('localhost','root','');

if(!$con)
{
    echo 'Not connected to server';
}

if(!mysqli_select_db($con,'registration'))
{
    echo 'Database not selected';
}

$fname = $_POST['fname'];
$lname = $_POST['lname'];
$contact = $_POST['contact'];
$address = $_POST['address'];
$email = $_POST['email'];
$payment = $_POST['payment'];

$sql = "INSERT INTO donator (fname,lname,contact,address,email,payment) VALUES ('$fname','$lname','$contact','$address','$email','$payment')";

if(!mysqli_query($con,$sql))
{
    echo 'Not Inserted';
}
else
{
    echo 'Inserted';
}

header("refresh:1; url=index.php");

?>