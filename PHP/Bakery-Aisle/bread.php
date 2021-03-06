<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <title>Bread</title>
    <link rel="stylesheet" href="../../CSS/style.css">
    <link href="../css-fas/all.css" rel="stylesheet">
    <link rel="shortcut icon" href="../../Images/re.ico" type="image/x-icon">
    <link rel="stylesheet" href="../../CSS/P3.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../CSS/ProductDes.css">
</head>
<body onload ="checkItemPrice()">
<?php


$file = fopen("../..//DB/products.json", "r");
$data = file_get_contents("../..//DB/products.json");
$data = json_decode($data,true);

?>
  <?php require('../navbarAisle.php'); ?>
    <div class="container h-100 d-flex flex-column">
      <div class="row h-75 mb-4">
        <div class="col-md-6 col-lg-6 grey" style="margin-top:30px">
          <h2 class ="product"><?php echo $data['products'][12]['name']?></h2>
          <div class ="image">
          <?php  print('<img src="../../Images/Bakery-Aisle/' . $data['products'][12]['image'] . '" alt="' . $value->name . ' Image">');?>
          </div>
        </div> 
        <div class="col-md-6 col-sm-12 col-lg-6 grey" style="margin-top:30px">
          <h3 id="price" class ="price">

          </h3>
          <form method ="POST" action = "http://localhost/SOEN-287/PHP/Shopping Cart.php">

            <input type ="hidden" name ="name" value ="<?php echo $data['products'][12]['name']?>" class ="name">
            <input type ="hidden" value = "0.99" name ="price"> </h3>
            <label for="quantity">Quantity:</label></br>
            <input type="number" id="quantity" class="quantity" name="quantity"></br>
            <input type ="submit" name ="submit" class="btn" class ="cartButton" onclick ="alert('Succesfully added to cart')" value ="Add To Cart🛒">
          
          </form>
          <button  class="btn" id="desButtonBread" onclick ="showDescriptionBread()" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">More Description</button>
          <br/><br/>
          <h4 class="collapse" id="collapseExample"></h4> 
          <div id="descContainerBread" class="container-sm success shadow bg-success offset-3 p-4" hidden>
            <h6 style="color: white;"><? echo $data['products'][12]['description']?></h6>
            <style>
              table,
              th,
              td {
                padding: 10px;
                border: 2px solid white;
                border-collapse: collapse;
                text-align: center;
              }
            </style>
            <table id="descTableBread" style="color:white;">
              <tr>
                <th colspan="2">Nutrition Table</th>
              </tr>
              <tr>
                <td>Calories</td>
                <td>274</td>
              </tr>
              <tr>
                <th>Values (per 100g)</th>
                <th>Daily %</th>
              </tr>
              <tr>
                <td>Total Fat 4.5g</td>
                <td>6%</td>
              </tr>
              <tr>
                <td>Sodium 473mg</td>
                <td>21%</td>
              </tr>
              <tr>
                <td>Carbohydrate 48g</td>
                <td>17%</td>
              </tr>
              <tr>
                <td>Protein 11g</td>
                <td>22%</td>
              </tr>
            </table>
          </div>
        </div>
    </div>
    
    <?php require('../footerAisle.php'); ?>
  <script src ="../../JS/p3.js"></script>
  <script src="../../JS/products.js"></script>
  <script src="../../JS/prices.js"></script>
  <script src="../../JS/bakery.js"></script>
</body>
</html>