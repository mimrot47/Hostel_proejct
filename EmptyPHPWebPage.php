
<?php
if(isset($_post['submit'] )){
$name=$_POST['name'];
$pass=$_POST['pass'];
$cal4=mysqli_connect("localhost","root","","AJAY");
$cal1="CREATE DATABASE AJAY";
mysqli_query($cal4,$cal1);
$cal3="CREATE TABLE STUDENT(NAME VARCHAR(20), PASS VARCHAR(20))";
mysqli_query($cal4,$cal3);
$sam="INSERT INTO STUDENT(NAME,PASS) VALUE('$name','$pass')";
mysqli_query($cal4,$sam);  
}
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title> this is demo</title>
    </head>
    <body>
    <center>
        <from action="" method="POST">
            <input type="text" name="name"  placeholder="Enter your name" /><br>
            <input type="password" neme="pass"   placeholder="your pass"  /><br>
            <input type="submit" name="submit" />
            
        </from>      
    </center>
    </body>
</html>
