<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Registration PHP 0906</title>
</head>

<body class="container">
<!-- Define variables -->
<?php
$firstName = "";
$lastName = "";
$email = "";
$gender = "";

$firstNameError = $lastNameError = $emailError = $genderErr = "";

?>


    <form action="<?php echo htmlspecialchars($_SERVER["PHP_self"])?> method="POST">
    <div class="row">
  <label for="firstName" class="col-md-4 col-form-label col-form-label-lg">First Name:</label>
  <div class="col-md-8">
    <input type="input" class="form-control form-control-lg" id="firstName" placeholder="Angelo">
  </div>
  
  <div class="row">
  <label for="lastName" class="col-md-4 col-form-label col-form-label-lg">Last Name:</label>
  <div class="col-md-8">
    <input type="input" class="form-control form-control-lg" id="lastName" placeholder="Anire">
  </div>
</div>

    <div class="row">
  <label for="email" class="col-md-4 col-form-label col-form-label-lg">Email:</label>
  <div class="col-md-8">
    <input type="email" class="form-control form-control-lg" id="email" placeholder="andrewcustomerhelper@gmail.com">
  </div>
</div>
<div class="row">
    <label for="Gender" class="col-md-4 col-form-label col-form-label-lg">Gender:</label>
    <div class="col-md-8">
<div class="btn-group" role="group" aria-label="Gender radio button group">
    
  <input type="radio" class="btn-check" name="Gender" id="male" autocomplete="off" checked>
  <label class="btn btn-outline-primary" for="male">Male</label>

  <input type="radio" class="btn-check" name="Gender" id="female" autocomplete="off">
  <label class="btn btn-outline-primary" for="female">Female</label>
</div>
</div>
</div>
<div class="row">
    <input type="submit" value="Submit" class="btn btn-primary mt-2">
</div>

</form>

   

    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>