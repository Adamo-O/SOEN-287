<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../../CSS/style.css">
  <link href="../../css-fas/all.css" rel="stylesheet">
  <link rel="shortcut icon" href="../../Images/re.ico" type="image/x-icon">
  <link rel="stylesheet" href="../../CSS/ProductDes.css">
  <title>Pineapple</title>
</head>

<body onload="checkItemPrice()">
<?php


$file = fopen("../..//DB/products.json", "r");
$data = file_get_contents("../..//DB/products.json");
$data = json_decode($data,true);

?>
  <section class="header">
    <h1><a href="../index.php">La Meilleure Épicerie</a></h1>
  </section>
  <section class="nav-bar">
    <ul class="nav-bar-content">
      <li><a href="../index.php">Home</a></li>
      <li><a href="../index.php#aisles">Aisles</a></li>
      <li><a href="../index.php#offers">Offers</a></li>
      <li><a href="../../HTML/Login.html">Login</a></li>
      <li><a href="../../HTML/Sign Up.html">Sign Up</a></li>
      <li><a href="../../HTML/ShoppingCart.html" id="right">Shopping Cart</a></li>
    </ul>
  </section>
  <div class="content-container">
    <div class="col-50">
      <h3><?php echo $data['products'][0]['name']?></h3>
      <div class="img-container">
       <?php  print('<img src="../../Images/Fruits-and-Vegetables-Aisle/' . $data['products'][0]['image'] . '.png" alt="' . $value->name . ' Image">');?>
      </div>
    </div>
    <div class="col-50">
      <p id="price" class="price">For only $<?php echo $data['products'][0]['price'];?>per pound</p>
      <button class="general-btn" onclick="getData()">Add To Cart</button>
      <div class="quantity-container">
        <label for="quantity"></label>
        <button class="general-btn add" onclick="add()">+</button>
        <input readonly type="text" id="quantity" name="quantity" placeholder="Quantity">
        <button class="general-btn subtract inactive-btn" onclick="subtract()">-</button>
      </div>
      <button class="general-btn des-btn" onclick="description()">More Description</button>
      <div class="description">
        <p class="description-details">
          Take a break and taste the tropics.<br> Our fresh organic Hawaiian pineapples are full of
          Bromelain which is one of the most unique nutritional components since it helps our body to easily digest
          proteins. Recent research also indicates that it may have other beneficial health benefits.
        </p>
        <table class="nutrition-value">
          <tr>
            <th colspan="2">Nutrition Facts</th>
          </tr>
          <tr>
            <th colspan="2">Amounts are pers serving</th>
          </tr>
          <tr>
            <th>Total fat</th>
            <td>0%</td>
          </tr>
          <tr>
            <th>Total Carbohydrate</th>
            <td>4%</td>
          </tr>
          <tr>
            <th colspan="2">Vitamins & Minerals</th>
          </tr>
          <tr>
            <td>Vitamin A 2%</td>
            <td>Vitamin C 50%</td>
          </tr>
          <tr>
            <td>Calcium 2%</td>
            <td>Iron 2%</td>
          </tr>
        </table>
      </div>
    </div>
  </div>
  <section id="footer">
    <a href="https://facebook.com" target="_blank"><em class="fab fa-facebook fa-2x"></em></a>
    <a href="https://instagram.com" target="_blank"><em class="fab fa-instagram fa-2x"></em></a>
    <a href="https://twitter.com" target="_blank"><em class="fab fa-twitter-square fa-2x"></em></a>
    <h6>
      Thanks for shopping at La Meilleure Épicerie. <br>
      To contact us, please click <a href="../../HTML/contact-us.html" class="contact-page">here</a>.
    </h6>
  </section>
  <script src="../../JS/products.js"></script>
  <script src="../../JS/prices.js"></script>
  <script src ="../../JS/p3.js"></script>
</body>

</html>