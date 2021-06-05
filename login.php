<?php
//session_start();

$user1=$_POST['usearname'];
$pass=$_POST['password'];
$username="gokul";
$password= 312151;
if(isset($_POST['submit'])){
    if($username==$user1){
        echo "usear name is match";
         if($pass==$password){
             echo "password is match";
         }
         else{
             echo 'password is not match';
         }
    }else{
        echo "usear name is not match";
    }
}
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <style type="text/css" >
            body{
               background-image: url("bookimg3.jpg"); 
                opacity:0.8;
                background-size:cover;
            }
            form{
                color:black;
                 background-image: url("bookimg3.jpg");
                 background-size:cover;
                 width:500px;
                height:300px;
                text-align:center;
                padding-top:40px;
                //font-style:italic;
                font-size:20px;
                padding-top:40px; 
                border-radius:25px 25px 25px 25px ;
                margin-top:60px; 
            }
            input{
                width:300px;
                height:40px;
                border-radius:8px 8px 8px 8px ;
                border:1px solid red;
                padding-left: 20px;
                font-size:25px; 
            }
            a{
                color:blue;
                font-size:40px;
                text-align:center;
                text-decoration:none;
            }
          
            
            
            
        </style>
    </head>
    <body>
        
    <center><form action="sign.php" method="post">
            name <br>
            <input type="text"  name="usearname" placeholder="Usear name"><br>
            PASS<br>
            <input type="password" name="password" placeholder="Password"><BR>
            <br>
            <input type="submit" value="login" name="submit"><br>
            <a href="sign.php">create new account</a>
        </form>
    </center>   
    </body>
</html>
