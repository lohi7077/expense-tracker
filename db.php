<?php
$conn=new mysqli("localhost","root","","expensetracker");
if ($conn->connect_error){
    die("connection failed");
    
}
?>