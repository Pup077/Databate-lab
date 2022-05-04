<!DOCTYPE html>
<html>
<head></head>
<body>

<?php
include "connectdb.php";

if($conn->connect_error){
echo "error";
}
// echo "OK<br>";
$opt = $_POST['optdelete'];
if($opt=="tbfaculty"){
$facid = $_POST['facid'];

}elseif($opt=="tbuniversity"){
$unid = $_POST['unid'];

// $sql = "CALL delUniv($unid);";
$sql = "DELETE FROM tbuniversity WHERE unid='$unid';";
}
$res = $conn->query($sql);
if($res){
echo 'DELETE Data Successfully.';
if($opt=="tbfaculty"){
header("Location: facultydata.php");
}else if ($opt=="tbuniversity"){
header("Location: universitydata.php");
}
exit();
}else{
echo 'Error : Can not insert data.';
echo "<br>$sql";
}
$conn->close();
?>