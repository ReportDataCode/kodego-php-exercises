<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<!-- echo $_GET["firstName"] . " " . $_GET["lastName"];  -->
<body>
    <h2>
        Welcome! <?php
        
     echo $_POST["firstName"] ." " . $_POST["lastName"];
     echo $_POST["email"]; ?>
</h2>

</body>

</html>