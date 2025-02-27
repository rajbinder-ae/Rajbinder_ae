<?php
$host = "localhost";
$username = "root";
$password = "";
$dbname = "Rajbinder.ae Portfolio";

$con = mysqli_connect($host, $username, $password, $dbname);

if(!$con)
{
    echo "failed to load!";
}

// start


$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$message = $_POST['message'];

$sql ="INSERT INTO `users`(`id`, `First Name`, `Last Name`, `Email`, `Mobile no.`, `Message`) 
VALUES ('[value-1]','$firstname','$lastname','$email','$phone','$message')";


$result = mysqli_query($con , $sql);

if($result)
{
    echo "Data Submited";
}

else
{
    echo "Query Failed......!";
}
?>