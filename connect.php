<?php
$email=$_POST['email'];
$username=$_POST['username'];
$password=$_POST['password'];


//database connection //server name login server.
$conn= new mysqli('localhost','root','','login server');
if($conn->connect_error){
    die('connection failed:' .$conn->connect_error);
}
else{//tablename login details
    $stmt=$conn->prepare("insert into logindetails(email, username, password) values(?,?,?)");
    $stmt->bind_param("sss",$email,$username,$password);
    $stmt->execute();
    echo"Logged in successfully";
    $stmt->close();
    $conn->close();

}
?>