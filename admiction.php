<?php
error_reporting(0);
$name=$_POST['name'];
$mname=$_POST['mname'];
$lname=$_POST['lname'];
$moname=$_POST['moname'];
$mobail=$_POST['mobail'];
$bdate=$_POST['date'];
$birthp=$_POST['birthp'];
$city=$_POST['city'];
$village=$_POST['village'];
$dist=$_POST['dist'];
$photo=$_POST['photo'];
$sign=$_POST['sign'];
$conn=mysqli_connect("localhost","root","","admission");
if($conn){
    echo "database is conneted  ";
}  else {
echo "not connect";    
}
$sql1="INSERT INTO student(ID,NAME,MNAME,LNAME,MOTHER,MONO,DATE,CITY,VILL,DIST,PHOTO,SIGN)
       value('','$name','$mname','$lname','$moname','$mobail','$bdate','$birthp','$city','$village','$dist','$photo'
    ,'$sign')";
     if(mysqli_query($conn,$sql1)){
         echo "   database connect <br>";
   }  else {
     echo "database is not connected";     
}
           
?>

<html>
<head>
<title>application form</title>
<style type="text/css" >
    form{
        width:800px;
        height:700px;
       background-image:url("img/img2.png"); 
       background-size:cover; 
        padding-top:40px;
        font-size:20px;
        border-radius:20px 20px 20px 20px ;
        opacity:0.9;
        color:black;
        font-size:25px; 
        color:red;
        text-shadow:5px 5px 5px white; 
        border:4px solid gold;
        box-shadow:9px 9px 10px 9px gray; 
    } 
    input{
        height:30px;
        margin-top:10px;
        border-radius:10px 10px 10px 10px ;
        border:2px solid skyblue; 
        font-size:17px;
        padding-left:5px; 
   }
   .sam{
       background-color:#00adee;
       height:40px; 
       width:200px; 
   }
    
    
</style>
</head>
<body bgcolor="pink">
<font size="10"><b><center><u><b><i><font size="10" face="Times New Roman" color="red">Admission Form</font>
</i></b></u></center><b><br></font>
<br>
<center><form>
Fist Name:<input type="textbox" name="name">
Middle Name:<input type="textbox" name="mname"><br>
Last Name:<input type="textbox" name="lname">
Mother Name:<input type="textbox"name="moname">  <br>    Mobile Number:<input type="textbox" nmae="mobail">
<br><br>
Date of Birth:<input type="date" name="date">   Age:<input type="textbox" name="age">  
<br><br>
Email:-<input type="textbox">  Birth Place:-<input type="textbox" name="birthp">
<br><br>
Male<input type =checkbox cheked name="male" value="m"/>
Female<input type =checkbox cheked name="femal" value="f"/>
<br><br>
Address
<br><br>
city:-<input type="textbox" name="city">Village:-<input type="textbox" name="village"><br>
District:-<input type="textbox" name="dist">
State:-<input type="textbox">
<br>
photo<input type="file" name="fileupload" accept="image/*" value="photo" name="photo"/><br>
sign<input type="file" name="fileupload" accept="image/*" value="sign" name="sign"/>
<br><br>

<center><input type="submit" value="save data" class="sam">
<input type="reset" name="reset" value="Reset" class="sam" /></center>
</form></center>
</body>
</html>
