<?php
$this->load->helper("url");
$base = base_url() . index_page();
$img_base = base_url() . "assets/images/";

?>
<!DOCTYPE html>
<html lang="en">


<head>
  <title><?php echo $pageTitle; ?></title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
</head>


<body>
  <header>
    <h1><a href="<?php echo base_url(); ?>"><img src="<?php echo base_url(); ?>assets/images/site/logo.png" alt="logo" style="width:100px;height:100px;"></a>Kilkee Krafts</h1>
  </header>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark static-top">
    <div class="container">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="#">Home
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo site_url('products/'); ?>">Products</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Admin</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo site_url('shoppingcart/'); ?>">Cart</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo site_url('wishlist/'); ?>">Wishlist</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo site_url('orders/'); ?>">Orders</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url() . "index.php/login"; ?>">Login</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <main>
    <h2><?php echo $mainHeading; ?></h2>
    <?php echo $mainContent; ?>
  </main>
  <footer>
    Copyright: Rhys quilter
  </footer>
</body>

</html>