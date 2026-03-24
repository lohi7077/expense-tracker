<?php
include "db.php";
$name=$_POST['name'];
$email=$_POST['email'];
$password=$_POST['password'];
$sql ="insert into users(name,email.password) VALUES('$name','$email','$password')";
if($conn->query($sql)){
    echo"Registration Successful";
}
?>