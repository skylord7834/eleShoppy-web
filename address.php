<?php
$name=$_POST['name'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$pincode=$_POST['pincode'];
$district=$_POST['district'];
$locality=$_POST['locality'];
$addresstype=$_POST['addresstype'];


//database connection //server name login server.
$conn= new mysqli('localhost','root','','login server');
if($conn->connect_error){
    die('connection failed:' .$conn->connect_error);
}
else{//tablename addresses
    $stmt=$conn->prepare("insert into addresses(name, email, phone, pincode, district, locality, addresstype) values(?,?,?,?,?,?,?)");
    $stmt->bind_param("ssiisss",$name,$email,$phone,$pincode, $district, $locality, $addresstype);
    $stmt->execute();
    echo"Address registered successfully";
    $stmt->close();
    $conn->close();

}
?>

<!-- name email phone pincode district locality addresstype -->