<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
    $connection = mysqli_connect('localhost', 'root', '', 'portal');
    if(!$connection){
        die('database failed');
    }
    ?>
    <?php
    if(isset($_post['submit'])){
        print "this is cool";
    }
    ?>
    <?php
    echo "welcome to my database";
    if(3 > 7){
        print "yeah";
    } else{
        print "nope";
    }
    echo "<br>";
    print "<h2>switch statements</h2>";
    $switch = "sunday";
    switch($switch){
        case "monday";
        echo "today is monday";
    break;
        case "tuesday";
        echo "tuesday";
break;
    case "wednesday";
    echo "wednesday";
break;
default;
    echo "<h1>sunday</h1>";
    }
    ?>
    <h2>my form</h2>
    <form method="post">
    ID: <input type="number" name="ID"> <br>
    name:<input type="text" name="Name"> <br>
    department: <input type="text" name="Department"><br>
    level : <input type="text" name="level"> <br>
    submit: <button type="submit">submit</button>
    </form>
    <?php
    $count = 0;
    while($count<10){
        print "count";
        $count++;
        print $count;
    }
    ?>
</body>
</html>