<?php
$fullname=$_POST['fullname'];
$email=$_POST['email'];
$feedback=$_POST['feedback'];


//database connection //server name login server.
$conn= new mysqli('localhost','root','','login server');
if($conn->connect_error){
    die('connection failed:' .$conn->connect_error);
}
else{//tablename feedbacks
    $stmt=$conn->prepare("insert into feedbacks(fullname, email, feedback) values(?,?,?)");
    $stmt->bind_param("sss",$fullname,$email,$feedback);
    $stmt->execute();
    echo"feedback sent successfully";
    $stmt->close();
    $conn->close();

}
?>