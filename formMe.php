<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" 
    integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>form.php</title>
</head>
<body>
   <?php
//    if(isset($_POST['submit'])){
//        $ID = $_POST['id'];
//        $users = $_POST['username'];
//        $level = $_POST['level'];
//        $psd = $_POST['password'];

//        $all = array("sanny", "sunday","others");
//        if(strlen($users)< 5){
//            echo "username is too short";
//        }
//        if(!in_array($users,$all)){
//            echo "you have not registered";
//        }else{
//            echo "Welcome";
//        }
    //    echo "your id is" . $ID;
    //    echo "<br>";
    //    echo "your username is" .$users;
    //    echo "<br>";
    //    echo "you are in ". $level. "level";
    //    echo "<br>";
    //    echo "finally ".$psd . "is ur password";

  // }
   ?> 

<form action="formP.php" method="post">
     <input type="number" name="id" placeholder="enter ur ID"> <br>
    <input type="text" name="username" placeholder="enter ur username"> <br>
     <input type="number" name="level" placeholder="enter ur level"><br>
     <input type="text" name="password" placeholder="enter ur password"> <br>
     <input type="submit" name="submit">
    </form>
</body>
</html>