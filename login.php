<?php
include "";
$email=$_POST["eamil"];
$password=md5($_POST["password"]);
$sql="SELECT*FROM user where email='$email',password='$password'";
$result=$conn->query($sql);
if($result->num_rows>0){
    echo"successful";
}else{
    echo"invalid login";
}

?>