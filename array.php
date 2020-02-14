<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Arrays.com</title>
</head>
<body>
    <h1>welcome to array course</h1>
    <?php
        $array = array('sunday', "monday", "tuesday");
        $asoc = array("num1"=> 10, "num2"=> 20);
        echo $asoc['num1']. "<br>". "<br>";

        $nums = array(24,24,45,6787,95,76,34);
        foreach($nums as $num){
            echo $num."<br>";
        }

        // function calculate($num1, $num2) {
        //     $sum = $num1 + $num2;
        //     return $sum;
        // }
        // addNum(5, 6);
        echo "eror";
    ?>
</body>
</html>