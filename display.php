<?php
$host    = "localhost";
$user    = "root";
$pass    = "";
$db_name = "mengsambath";
$db_connection = new mysqli($host, $user, $pass, $db_name);
$sql = "select * from product";
$result = $db_connection->query($sql);
$products = [];
if ($result->num_rows) {
  while ($product = $result->fetch_assoc()) {
    $products[] = $product;
  }
}
$db_connection->close();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <script src="https://kit.fontawesome.com/86d70f53ac.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/mdb.min.css">
  <link rel="stylesheet" href="css/style.min.css">
</head>
<body>
<nav class="navbar navbar-dark default-color">
    <nav class="navbar navbar-dark default-color">
      <form class="form-inline my-2 my-lg-0 ml-auto">
        <input class="form-control" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-white btn-md my-2 my-sm-0 ml-3" type="submit">Search</button>
      </form>
    </nav>
      <h4 style="color: brown; font-weight: bold; text-align: center;">Meng Sambath</h4>
    <a href="HomePage.php"> <button class="btn peach-gradient"> Home</button></a>
  </nav>
  <h2 class="h1 text-center text-uppercase font-weight-bold mt-5 mb-3 mt-5">Everything for Sell</h2>
  <p class="section-description mt-5 pt-2">*Note: Do not tranfer money before you meet the owner.</p>

  <?php
  if (count($products) > 0) {
  ?>
    <div class="row ml-3 mr-3 pb-4 pt-1">
      <?php foreach ($products as $product) { ?>

        <figure class="col-md-3">
          <a href="image/h1.jpg" data-size="1600x1067">
            <img src="image/<?php echo $product['image'] ?>" class="img-fluid z-depth-1">
          </a>
          <p class="text-uppercase font-weight-bold blue-grey-text mt-4">ID : <b><?php echo $product["Id"] ?></b></p>
          <p class="text-uppercase font-weight-bold blue-grey-text mt-4">Kind : <b><?php echo $product["kind"] ?></b></p>
          <p class="text-uppercase font-weight-bold blue-grey-text mt-4">Price : <b><?php echo $product["price"] ?></b></p>
        </figure>
      <?php } ?>
    </div>
  <?php } ?>
  <footer class="page-footer font-small blue">
    <div class="footer-copyright text-center py-3">© 2019 Copyright:
      Limeng Nara
    </div>
  </footer>
  <script type="text/javascript" src="js/js.js"></script>
  <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
  <script type="text/javascript" src="js/popper.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <script type="text/javascript" src="js/mdb.min.js"></script>
</body>
</html>