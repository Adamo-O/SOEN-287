<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <title>Oreo</title>
    <link rel="stylesheet" href="../../CSS/style.css">
    <link href="../../css-fas/all.css" rel="stylesheet">
    <link rel="shortcut icon" href="../../Images/re.ico" type="image/x-icon">
    <link rel="stylesheet" href="../../CSS/P3.css">
    <link rel="stylesheet" href="../../CSS/ProductDes.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</head>
<body>
<?php


$file = fopen("../..//DB/products.json", "r");
$data = file_get_contents("../..//DB/products.json");
$data = json_decode($data,true);

?>
  <?php require('../navbarAisle.php'); ?>
    <div class="container h-100 d-flex flex-column">
      <div class="row h-100 mb-4">
        <div class="col-md-6 col-lg-6 grey" style="margin-top:30px">
          <h2 class ="product"><?php echo $data['products'][26]['name']?></h2>
          <br/>
          <div class ="image">
          <?php  print('<img src="../../Images/Snacks-Aisle/' . $data['products'][26]['image'] . '" alt="' . $value->name . ' Image">');?>
          </div>
        </div> 
        <div class="col-md-6 col-sm-12 col-lg-6 grey" style="margin-top:30px">
          <h3 id="price" class ="price">For only $<?php echo $data['products'][26]['price']?>/ 500g</h3>
          <form method ="POST" action = "../Order.php">

          <button class="general-btn" type ="submit" class="btn" class ="general-btn" onclick ="alert('Succesfully added to cart')" value ="Add To Cart🛒">Add To Cart</button>
          <input type ="hidden" name ="name" value ="Oreo" class ="name">
          <input type ="hidden" value = "<?php echo $data['products'][26]['price']?>" name ="price"> </h3>
          <button type ="button" class="general-btn add" onclick="add()">+</button>
          
          <input readonly type="text" id="quantity" name="quantity" placeholder="Quantity">
          <button type ="button" class="general-btn subtract inactive-btn" onclick="subtract()">-</button>
        
      </form>
          <br/>
          <button  class="btn" style ="background-color:cyan" class="desButton" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">More Description</button>
          <br/>
          <h4 class="collapse" id="collapseExample"><br/><?php echo $data['products'][26]['description']?><br/></h4> 
          <table class="collapse"  id="collapseExample" style="border: 1px solid">
            <tr><th>Nutrition</th></tr>
            <tr>
              <th colspan ="2"></th>
              <th colspan ="2">% DV</th>
            </tr>
            <tr>
              <th>Total fat</th>
              <td></td>
              <td>7%</td>
            </tr>
            <tr>
              <th>Total carbohydrate</th>
              <td></td>
              <td>6%</td>
            </tr>
            <tr>
              <th>Sodium</th>
              <td></td>
              <td>3%</td>
            </tr>
            <tr>
              <th>Calcium</th>
              <td></td>
              <td>6%</td>
            </tr>
            <tr>
              <th>Iron</th>
              <td></td>
              <td>6%</td>
            </tr>
          </table><br/>
          <button class="btn" style ="background-color:cyan"onclick="getData()" id ="cartButton"  onclick="addRow()">Add To Cart🛒</button>
        </div>
    </div>
    <?php require('../footerAisle.php'); ?>
  <script src="../../JS/p3.js"></script>
  <script src ="../../JS/products.js"></script>
</body>
</html>