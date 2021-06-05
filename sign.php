<?php
error_reporting(0);
if($_POST['submit']){
$name=$_POST['san'];
//enter userar pass of from
$name1=$_POST['pass'];
$prn=$_POST['prn'];
$conn=  mysqli_connect("localhost","root","");
$db="student13";
$sql2="CREATE DATABASE $db";
mysqli_query($conn,$sql2);
$conn1=  mysqli_connect("localhost","root","","$db");
$conn2="CREATE TABLE student(ID INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,NAME VARCHAR(20),PASS VARCHAR(20),PRN VARCHAR(20))";
mysqli_query($conn1,$conn2);
$conn3="INSERT INTO student(ID,NAME,PASS,PRN)VALUE('','$name','$name1','$prn')";
if(mysqli_query($conn1,$conn3)){
      header( "REFRESH:1");
      header( 'location:index.php');
}  else {
    
echo "no";
}

}
?>