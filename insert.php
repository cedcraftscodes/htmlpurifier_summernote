<?php 

include 'connect.php';
$stmt = $conn->prepare("INSERT INTO `tblsample`(`content`) VALUES (:text)"); 
$stmt->bindParam("text", $_POST['content']);
$stmt->execute(); 

header("Location: index.php");


?>
