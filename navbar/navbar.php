  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>


<?php session_start(); ?>



<nav class="navbar navbar-expand-lg navbar-dark bg-primary sticky-top" >
  <a class="navbar-brand" href="../main.php">FoodShala</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#vegcatalog">View veg Menu</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="#nonvegmenu" tabindex="-1">View Non-Veg Menu</a>
      </li>
    </ul>

    <ul class="nav navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="api/orderlist.php">
          <?php    if($_SESSION){$tp = $_SESSION["type"];if($tp=="owner" or $tp=="Owner") echo "My Orders";}    ?>
        </a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="catalog/addproduct.php">
          <?php    if($_SESSION){$tp = $_SESSION["type"];if($tp=="owner" or $tp=="Owner") echo "Add product";}    ?>
        </a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="catalog/deleteproductdata.php">
          <?php    if($_SESSION){$tp = $_SESSION["type"];if($tp=="owner" or $tp=="Owner") echo "Remove product";}    ?>  
        </a>
      </li>
    </ul>

    <ul class="nav navbar-nav navbar-right">
      <li class="nav-item active">
        <a class="nav-link" href="api/customerorderlist.php">
          <?php    if($_SESSION){$tp =$_SESSION["type"];if($tp=="customer" or $tp=="Customer") echo "My Previous Orders";}
                    ?>
        </a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="login/login3.html">
        <?php    if(!$_SESSION) echo "Log In/Sign Up";     ?>
        </a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="api/logout.php">
          <?php    if($_SESSION)echo "Log Out";    ?>
        </a>
      </li>
      <li class="nav-item active">
                <?php    if($_SESSION){$name = $_SESSION["name"];echo "<p>$name</p>";}    ?>
      </li>
    </ul>
  </div>
</nav>