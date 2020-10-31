<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Full Stack Music</title>

    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Grenze+Gotisch:wght@300&display=swap" rel="stylesheet">
    <script src="javaScript/functions.js"></script>
</head>
<body>
    <!-- <nav class="menu">
        <ul>
            <li><a id="logo" href="./index.html"><img src="./assets/images.jfif" alt="Full Stack Music"></a></li>
            <li><a href="products.html">Products</a></li>
            <li><a href="stores.html">Stores</a></li>
            <li> <a href="contact.html">Contact</a></li>
            <div class="search"><input  placeholder="type your search"></input> <a><img src="./assets/search-icon.png" alt="search"></a></div>
        </ul>
    </nav> -->
    <?php 
        include_once('menu.html');
    ?>
    <main>
        <h1> Be welcome !</h1>
        <P>Here in our store, <em>programmers have discounts</em> on vinyl disks!</P>

        <div class="categories">
            <h3>Categories</h3>
            <ul>
                <li onmouseover="spotlight(this)" onmouseout="defocus(this)" onclick="show_allCategories()">All(12)</li>
                <li onmouseover="spotlight(this)" onmouseout="defocus(this)" onclick="show_categories('heavMetal')">Heavy Metal(3)</li>
                <li onmouseover="spotlight(this)" onmouseout="defocus(this)" onclick="show_categories('blackMetal')">Black Metal(1)</li></a>
                <li onmouseover="spotlight(this)" onmouseout="defocus(this)" onclick="show_categories('trashMetal')">Thrash Metal(4)</li></a>
                <li onmouseover="spotlight(this)" onmouseout="defocus(this)" onclick="show_categories('progressiveRock')">Progressive Rock(1)</li></a>
                <li onmouseover="spotlight(this)" onmouseout="defocus(this)" onclick="show_categories('folkMetal')">Folk Metal (1)</li></a>
                <li onmouseover="spotlight(this)" onmouseout="defocus(this)" onclick="show_categories('hardRock')">Hard Rock (2)</li></a>
                <a onmouseover="spotlight(this)" onmouseout="defocus(this)" href="views/releases.html" alt="releases"></a><li>Releases</li></a>
                <a onmouseover="spotlight(this)" onmouseout="defocus(this)" href="views/promotions.html" alt="promotions"><li>Promotions</li></a>
                <a onmouseover="spotlight(this)" onmouseout="defocus(this)" href="views/rareRecords.html" alt="rareRecords"><li>Rare Records</li></a>
                <a onmouseover="spotlight(this)" onmouseout="defocus(this)" href="views/bestSellers.html" alt="bestSellers"><li>Best Sellers</li></a>
                <a onmouseover="spotlight(this)" onmouseout="defocus(this)" href="views/sellYourVinyls.html" alt="sellYourVinyls"><li>Sell your vinyls</li></a>
                <a onmouseover="spotlight(this)" onmouseout="defocus(this)" href="views/used.html" alt="used"><li>Used</li></a>
            <ul>
        </div>
    </div>
    <div class="banner">
        <h1>You won't hear anything like that in the next decade</h1>
        <img src="/assets/krisiun-assassination.jpg" alt="featured discs">
    </div>

    <div class="banner">
        <h1>don't forget that brutes also love</h1>
        <img src="/assets/aerosmith -permanent vacation.jpg" alt="featured discs">
    </div>
    </main>
    
        <br><br><br><br>  <br><br><br><br> <br><br><br>

         <footer id="footer">
            <p id="payment_methods"><b> Payment methods: </b></p>
            <img src="./assets/peyment methods.png" alt="payment methods">
            </p>&copy; Recode Pro turmas 2020</p>
         </footer>

</body>
</html>