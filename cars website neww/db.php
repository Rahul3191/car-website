<?php

$server_name=”localhost”;

$username=”root”;

$password=””;

$database_name=”carpool_rideshare″;

$conn=mysqli_connect($username,$password,$contact,$email,);
//now check the connection
if(!$conn)
{die("Connection Failed:" . mysqli_connect_error());}
if(isset($_POST['save']))
{
$username = $_POST['username'];
$password = $_POST['password'];
$phone = $_POST['contact'];
$email = $_POST['email'];
//For inserting the values to mysql database 
$sql_query = "INSERT INTO login_cp (username,password,mobile,email)
VALUES ('$username','$password','$phone','$email)";
if (mysqli_query($conn, $sql_query))
{
echo "New Details Entry inserted successfully !";
}
