<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>formvalidate.ext</title>
</head>
<body>
<?php
   if(isset($_POST['submit'])){
       $ID = $_POST['id'];
       $users = $_POST['username'];
       $level = $_POST['level'];
       $psd = $_POST['password'];

       $connect = mysqli_connect('localhost', 'root', "", 'userlogin');
       if($connect ){
           echo 'we r connected';
       } else {
           die("database failed");
       }
       if ($ID && $users && $level && $psd){
       $all = array("sanny", "sunday","others");
       if(strlen($users)< 5){
           echo "username is too short";
       }
       if(!in_array($users,$all)){
           echo "you have not registered";
       }else{
           echo "Welcome";
       }
    }
    //    echo "your id is" . $ID;
    //    echo "<br>";
    //    echo "your username is" .$users;
    //    echo "<br>";
    //    echo "you are in ". $level. "level";
    //    echo "<br>";
    //    echo "finally ".$psd . "is ur password";

   }
   ?> 

</body>
</html>