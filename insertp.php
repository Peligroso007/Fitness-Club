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
$program = $_POST['program'];
$duration = $_POST['duration'];

$sql = "INSERT INTO program (fname,contact,address,program,duration) VALUES ('$fname','$contact','$address','$program','$duration')";

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