<?php

$con = mysqli_connect('localhost','root');

if($con){
    echo "Connection successful";
}else{
    echo "No connection";
}

mysqli_select_db($con, 'workshopsitedata');

$user = $POST['user'];
$email = $POST['email'];
$mobile = $POST['mobile'];
$Comments = $POST['comments'];

$query = "insert into userinfodata (user,email,mobile,comments)
values ('$user','$email','mobile','comments')";

mysqli_query($con,$query);
?>
