<?php
 
$username = $_POST['username'];
$password = $_POST['password'];
$email = $_POST['email'];

$conn = new mysqli('localhost','root','','test');

if($conn->connect_error){

    die("COnnect error");
}
else {
    
    $query = 'INSERT INTO users (username, password, email) VALUES (?, ?, ?)'; 
    $result = $conn->prepare($query);
    $result->bind_param('sss', $username, $password, $email); 
    $result->execute(); 
    die("Registration success");
}
?>