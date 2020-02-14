<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>calculate your age</title>
</head>
<body>
    <form action="" method="post">
       <h1>please select your year of birth <br> 
       <input type="date" name="year" id="yearOfBirth" placeholder="yearOfBirth" required></h1>
       <input type="submit" name="s" placeholder="submit"> <br>
    </form>
   <?php
   if(isset($_POST['s']))
   {
    $dateOfBirth = $_POST["year"];
    $today = date("m-d-Y");
    $age = date_diff(date_create($dateOfBirth), date_create($today));
    echo "Age is ".$age->format('%y')."Year old";
    }
   ?> 
</body>
</html>