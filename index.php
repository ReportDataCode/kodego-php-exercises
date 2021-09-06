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

    //2:02:48
    //https://www.youtube.com/watch?v=KEPf9Dsx-uM&t=4890s
    ?>

</body>

</html>