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
$contact = $_POST['contact'];
$address = $_POST['address'];
$sex = $_POST['sex'];

$sql = "INSERT INTO volunteer (fname,contact,address,sex) VALUES ('$fname','$contact','$address','$sex')";

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