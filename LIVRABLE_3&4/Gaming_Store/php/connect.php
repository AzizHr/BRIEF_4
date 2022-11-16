<?php
require_once 'database.php';


$username=$_POST['username'];
$pass=$_POST['password'];

$stmt = $conn->prepare("SELECT `ID`, `USERNAME`, `PASSWORD` FROM `admin` WHERE `USERNAME`=:username  and `PASSWORD`=:pass");
$stmt->bindParam(':username',$username);
$stmt->bindParam(':pass',$pass);
$stmt->execute();
if ($stmt->rowCount()>0) {
  while($row = $stmt->fetch()){
    $_SESSION['name']=$row['USERNAME'];
    $_SESSION['pass']=$row['PASSWORD'];
    header('location:../management.php');
    exit();
  }
  
} 
else {
    header('location:../login.php?etat=fail');
    exit();
}

?>