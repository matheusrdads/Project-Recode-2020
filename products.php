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
    <title>Products - Full Stack Music</title>
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <script src="./javaScript/functions.js"></script>
</head>

<body>

    <?php
    include_once('./includes/menu.html');
    ?>

    <h3 class="text-white">Products</h3>

    <div class="container-fluid">

        <div class="row text-white">
            <div class="col-sm3">
                <h3>Categories</h3>
                <ul>
                    <li onmouseover="spotlight(this)" onmouseout="defocus(this)" onclick="show_allCategories()">All(12)</li>
                    <li onmouseover="spotlight(this)" onmouseout="defocus(this)" onclick="show_categories('heavymetal')">Heavy Metal(3)</li>
                    <li onmouseover="spotlight(this)" onmouseout="defocus(this)" onclick="show_categories('blackmetal')">Black Metal(1)</li></a>
                    <li onmouseover="spotlight(this)" onmouseout="defocus(this)" onclick="show_categories('thrashmetal')">Thrash Metal(4)</li></a>
                    <li onmouseover="spotlight(this)" onmouseout="defocus(this)" onclick="show_categories('progressivemetal')">Progressive Rock(1)</li></a>
                    <li onmouseover="spotlight(this)" onmouseout="defocus(this)" onclick="show_categories('folkmetal')">Folk Metal (1)</li></a>
                    <li onmouseover="spotlight(this)" onmouseout="defocus(this)" onclick="show_categories('hardrock')">Hard Rock (2)</li></a>
                    <ul>
            </div>

            <div class="col-sm-9">
                <div class="products_c">
                    <?php
                    $sql = "SELECT * FROM products";    
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                        while ($rows = $result->fetch_assoc()) {
                    ?>

                            <div class="box_products" id="<?php echo $rows["categories"]; ?>">
                                <img src="<?php echo $rows["images"]; ?>" width="182" onclick="when_zoom(this)">
                                <p class="description"></p><?php echo $rows["descripton"]; ?></p>
                                <p class="old_price"> $ <?php echo $rows["price"]; ?></p>
                                <p class="price"> $ <?php echo $rows["finalprice"]; ?></p>
                            </div>

                    <?php
                        }
                    } else {
                        echo "Nenhum produto cadastrado!";
                    }
                    ?>

                </div>
            </div>
        </div>
        <br><br><br><br> <br><br><br><br> <br><br><br>

        <footer id="footer">
            <p id="payment_methods"><b> Payment methods: </b></p>
            <img src="./assets/peyment methods.png" alt="payment methods">
            </p>&copy; Recode Pro turmas 2020</p>
        </footer>
    </div>






    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</body>

</html>