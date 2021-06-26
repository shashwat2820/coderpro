<?php

// database connection code
$con = mysqli_connect('localhost', 'root', '','regform');
// get the post records
$name = $_POST['firstname'];
$address = $_POST['add'];
$emailaddress = $_POST['emailadd'];
$pass = $_POST['password'];
// database insert SQL code
$s = "select * from entry where name = '$name'";

$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);
if($num == 1)
{
    echo " USERNAME ALREADY TAKEN";
}
else {
    $sql = "INSERT INTO `entry` (`name`, `address`, `email`, `password`)
    VALUES ('$name', '$address', '$emailaddress', '$pass')";
    // insert in database
    $rs = mysqli_query($con, $sql);
    if($rs)
    {
    echo "REGISTRATION SUCCESSFUL<br>";
    }
    $sql = "INSERT INTO `login` (`username`, `password`)
    VALUES ('$name', '$pass')";
    $rs = mysqli_query($con, $sql);
    if($rs)
    {
    echo "INFO. ADDED TO LOGIN FORM";
    }
}

?>