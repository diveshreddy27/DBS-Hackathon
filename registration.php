<?php
$first_name=$_POST['firstname'];
$middle_name=$_POST['middlename']
$last_name=$_POST['lastname'];
$email=$_POST['email'];
$password=$_POST['password'];
$conn=new mysqli('localhost','root','','railway');
if($conn->connect_error){
    die('Connection failed:'.$conn->connect_error);
}
else{
    $stmt=$conn->prepare("insert into registration(FirstName,MiddleName,LastName,Email,Password)values(?,?,?,?,?)");
    $stmt->bind_param("sssss":,$first_name,$middle_name,$last_name,$email,$password);
    $stmt->execute();
    echo " registration successfull...";
    $stmt->close();
    $conn->close();
}
?>?php
$first_name=$_POST['firstname'];
$middle_name=$_POST['middlename']
$last_name=$_POST['lastname'];
$email=$_POST['email'];
$password=$_POST['password'];
$conn=new mysqli('localhost','root','','railway');
if($conn->connect_error){
    die('Connection failed:'.$conn->connect_error);
}
else{
    $stmt=$conn->prepare("insert into registration(FirstName,MiddleName,LastName,Email,Password)values(?,?,?,?,?)");
    $stmt->bind_param("sssss":,$first_name,$last_name,$middle_name,$email,$password);
    $stmt->execute();
    echo " registration successfull...";
    $stmt->close();
    $conn->close();
}
?>