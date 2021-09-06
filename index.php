<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Samples</title>
</head>

<body>
    <?php

    use function PHPSTORM_META\map;

    $firstName = "Prince";
    $lastName = "Anire";
    $message = "Hello World!";
    echo "<br>";
    echo $message;
    echo "<br>";
    echo "My name is " . $firstName . " " . $lastName;
    echo "<br>";
    $x = 10;
    $y = 20;


    echo $firstName . " " . " says" .  $message;
    echo "<br>";
    echo $x + $y;
    echo "<br>";

    function test()
    {
        $x = 5;
        echo $x;
        echo "<br>";
        $quotation = "Good Job For Perserving another day andrew!!";
        echo $quotation;
        echo str_word_count($quotation);
    }
    test();
    echo "<br>";
    echo strlen($firstName);
    echo "My first name in reverse is" . strrev($firstName);

    //2:02:48
    //https://www.youtube.com/watch?v=KEPf9Dsx-uM&t=4890s
    var_dump(is_string($firstName));
    echo "<br>";

    echo (min(5, 2, 3, 4, 5, 2));
    echo "<br>";
    echo max(4, 5, 2, 100, 50);
    echo "<br>";

    echo (sin(180));
    echo "<br>";
    echo rand(0, 100);

    $time = date("H");
    if ($time < "10") {
        echo "Have a good day!";
    } elseif ($time < "20") {
        echo "Have a good day!";
    } else {
        echo "Have a good night!";
    }

    $fruit = "guavsa";
    echo "<br>";

    switch ($fruit) {
        case "banana":
            echo "Your favorite fruit is $fruit!";
            break;
        case "guava":
            echo "Your favorite fruit is $fruit";
            break;
        case "apple":      
            echo" Your favorite fruit is $fruit";
            break;
        default:
            echo "We don't know the answer!";
    }
    $i = 1;
    while ($i <= 5) {
         echo "The number is " . $i . "</br>";
         $i++;
    }
    $a = 1;
    do {
        $a++;
        echo "The number is " . $a . "</br>";
    }
    while ($a <= 10);

    for ($x =0; $x <= 5; $x++) {
        echo "The number is " . $x . "</br>";
    }


    ?>

</body>

</html>