<?php
$servername = "localhost";
$username = "root";
$password = "";

$con = mysqli_connect($servername, $username, $password);


if($con){
    echo "Connection successful";
}else{
    echo "No connection";
}
mysqli_select_db($con, 'websiteuserdata');

$user = $_POST['user'];
$mobile = $_POST['mobile'];
$email = $_POST['email'];
$comments = $_POST['comments'];
$messages = $_POST['messages'];

$query =  "insert into websiteinfodata ( `user`, `mobile`, `email`, `comments`, `messages`) 
values ('$user', '$mobile', '$email', '$comments', '$messages') ";

echo "$query";
mysqli_query($con, $query );


header('location:index.php');
?>