<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "recodepro";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Full Stack Music</title>

    <link rel="stylesheet" href="./css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Grenze+Gotisch:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

</head>

<body>

    <?php
    include_once('./includes/menu_simple.html');
    ?>
    <div class="container-fluid text-center">
        <h1 class="text-white"> Be welcome !</h1>
        <P class="text-white">Here in our store, <em>programmers have discounts</em> on vinyl disks!</P>
        
        
        <div class="banner">
            <h1>You won't hear anything like that in the next decade</h1>
            <img src="./assets/krisiun.jpg" alt="featured discs">
        </div>

        <div class="banner">
            <h1>don't forget that brutes also love</h1>
            <img src="./assets/aerosmith2.jpg" alt="featured discs">
        </div>
    </div>
</div>

    <br><br><br><br> <br><br><br><br> <br><br><br>

    <footer class="text-center">
        <p id="payment_methods"><b> Payment methods: </b></p>
        <img src="./assets/peyment methods.png" alt="payment methods">
        </p>&copy; Recode Pro turmas 2020</p>
    </footer>


    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>

</html>