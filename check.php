<?php

$username = $_POST['username'];
$password = $_POST['password'];

$conn = new mysqli('localhost','root','','test');

if($conn->connect_error){

    echo("Connect Eror".$conn->connect_error);
}
else{

  $query = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
  $result = mysqli_query($conn, $query);

  if(mysqli_num_rows($result) == 1){
    session_start();
    $_SESSION['username'] = $username;
    header("Location: home.html");
  } else {
    echo "<script language=javascript>alert('Incorrect Username or Password');</script>";

    die("Incorrect Username or Password");
}
}

?>