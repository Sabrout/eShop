<?php
  session_start();
  if (isset($_SESSION['EMAIL'])) {
    $firstname = $_SESSION["FNAME"];
    $lastname = $_SESSION["LNAME"];
    $address = $_SESSION["EMAIL"];
    $flag = true;
    } else {
      $flag = false;
      // die("LOGIN REQUIRED");
    }
?>
<html>
<head>
	<meta charset="UTF-8">
  <title>eShop</title>
  <link rel="stylesheet" href="CSS/style.css">
  <link rel="stylesheet" href="CSS/home.css">
  <script src="JS/index.js"></script>

</head>
<body>
	<header class="header">
      <a href="Default.php">
      <img src="IMG/logo.png" class="logo" alt="Logo">
      </a>
      <ul class="nav">
        <?php 
        if (!$flag) { echo '<li class="omar1"><a href="Register.php">Register</a></li>';} else { $flage = false; echo '<li class="omar1"><a href="Profile.php">Profile</a></li>';}
        if (!$flag) { echo '<li class="omar2"><a href="Signin.php">SignIn</a></li>';} else { $flage = false; echo '<li class="omar2"><a href="logout.php">SignOut</a></li>';}
         ?>
      </ul>
  </header>

  <?php
    $db = mysqli_connect("localhost","root","","eshop"); //keep your db name
    $id = 1;
    $sql = "SELECT * FROM items WHERE id = $id";
    $sth = $db->query($sql);
    $result=mysqli_fetch_array($sth);
    if ($result['state'] == 0) {
      $state = "OUT OF STOCK";
    } else {
      $state = "Available";
    }

    function decrementState($data) {
          $data = trim($data);
          $data = stripslashes($data);
          $data = htmlspecialchars($data);
          return $data;
        }
  ?>
  <script type="text/javascript">
    //Decrementing state colulmn

  </script>

  <div id="goods" class="goods">
    <div id="product" class="product">
      <span id="info" class="info">
        <div id="index">
          <?php echo '<img src="data:image/jpeg;base64,'.base64_encode( $result['image'] ).'"/>'; ?> 
        </div>
        <span id="text" class="text">
          <h2 id="name"><?php echo $result['name']; ?></h2>
          <p class="description"><?php echo $result['description']; ?></p>
          <h3><?php echo $state; ?></h3>
          <span id="price">$<span id="num"><?php echo $result['price']; ?></span>
          </span>
        </span>
      </span>
      <button>Add to cart</button>
    </div>

  <?php
    $id = 2;
    $sql = "SELECT * FROM items WHERE id = $id";
    $sth = $db->query($sql);
    $result=mysqli_fetch_array($sth);
    if ($result['state'] == 0) {
      $state = "OUT OF STOCK";

    } else {
      $state = "Available";
    }
  ?>

    <div id="product" class="product">
      <span id="info" class="info">
        <div id="index">
          <?php echo '<img src="data:image/jpeg;base64,'.base64_encode( $result['image'] ).'"/>'; ?> 
        </div>
        <span id="text" class="text">
          <h2 id="name"><?php echo $result['name']; ?></h2>
          <p class="description"><?php echo $result['description']; ?></p>
          <h3><?php echo $state; ?></h3>
          <span id="price">$<span id="num"><?php echo $result['price']; ?></span>
          </span>
        </span>
      </span>
      <button>Add to cart</button>
    </div>


  <?php
    $id = 3;
    $sql = "SELECT * FROM items WHERE id = $id";
    $sth = $db->query($sql);
    $result=mysqli_fetch_array($sth);
    if ($result['state'] == 0) {
      $state = "OUT OF STOCK";
    } else {
      $state = "Available";
    }
  ?>
  
    <div id="product" class="product">
      <span id="info" class="info">
        <div id="index">
          <?php echo '<img src="data:image/jpeg;base64,'.base64_encode( $result['image'] ).'"/>'; ?> 
        </div>
        <span id="text" class="text">
          <h2 id="name"><?php echo $result['name']; ?></h2>
          <p class="description"><?php echo $result['description']; ?></p>
          <h3><?php echo $state; ?></h3>
          <span id="price">$<span id="num"><?php echo $result['price']; ?></span>
          </span>
        </span>
      </span>
      <button>Add to cart</button>
    </div>


  <?php
    $id = 4;
    $sql = "SELECT * FROM items WHERE id = $id";
    $sth = $db->query($sql);
    $result=mysqli_fetch_array($sth);
    if ($result['state'] == 0) {
      $state = "OUT OF STOCK";
    } else {
      $state = "Available";
    }
  ?>
  
    <div id="product" class="product">
      <span id="info" class="info">
        <div id="index">
          <?php echo '<img src="data:image/jpeg;base64,'.base64_encode( $result['image'] ).'"/>'; ?> 
        </div>
        <span id="text" class="text">
          <h2 id="name"><?php echo $result['name']; ?></h2>
          <p class="description"><?php echo $result['description']; ?></p>
          <h3><?php echo $state; ?></h3>
          <span id="price">$<span id="num"><?php echo $result['price']; ?></span>
          </span>
        </span>
      </span>
      <button>Add to cart</button>
    </div>


  <?php  
    $id = 5;
    $sql = "SELECT * FROM items WHERE id = $id";
    $sth = $db->query($sql);
    $result=mysqli_fetch_array($sth);
    if ($result['state'] == 0) {
      $state = "OUT OF STOCK";
    } else {
      $state = "Available";
    }
  ?>
  
    <div id="product" class="product">
      <span id="info" class="info">
        <div id="index">
          <?php echo '<img src="data:image/jpeg;base64,'.base64_encode( $result['image'] ).'"/>'; ?> 
        </div>
        <span id="text" class="text">
          <h2 id="name"><?php echo $result['name']; ?></h2>
          <p class="description"><?php echo $result['description']; ?></p>
          <h3><?php echo $state; ?></h3>
          <span id="price">$<span id="num"><?php echo $result['price']; ?></span>
          </span>
        </span>
      </span>
      <button>Add to cart</button>
    </div>


  <?php  
    $id = 6;
    $sql = "SELECT * FROM items WHERE id = $id";
    $sth = $db->query($sql);
    $result=mysqli_fetch_array($sth);
    if ($result['state'] == 0) {
      $state = "OUT OF STOCK";
    } else {
      $state = "Available";
    }
  ?>
  
    <div id="product" class="product">
      <span id="info" class="info">
        <div id="index">
          <?php echo '<img src="data:image/jpeg;base64,'.base64_encode( $result['image'] ).'"/>'; ?> 
        </div>
        <span id="text" class="text">
          <h2 id="name"><?php echo $result['name']; ?></h2>
          <p class="description"><?php echo $result['description']; ?></p>
          <h3><?php echo $state; ?></h3>
          <span id="price">$<span id="num"><?php echo $result['price']; ?></span>
          </span>
        </span>
      </span>
      <button>Add to cart</button>
    </div>


  <?php  
    $id = 7;
    $sql = "SELECT * FROM items WHERE id = $id";
    $sth = $db->query($sql);
    $result=mysqli_fetch_array($sth);
    if ($result['state'] == 0) {
      $state = "OUT OF STOCK";
    } else {
      $state = "Available";
    }
  ?>
  
    <div id="product" class="product">
      <span id="info" class="info">
        <div id="index">
          <?php echo '<img src="data:image/jpeg;base64,'.base64_encode( $result['image'] ).'"/>'; ?> 
        </div>
        <span id="text" class="text">
          <h2 id="name"><?php echo $result['name']; ?></h2>
          <p class="description"><?php echo $result['description']; ?></p>
          <h3><?php echo $state; ?></h3>
          <span id="price">$<span id="num"><?php echo $result['price']; ?></span>
          </span>
        </span>
      </span>
      <button>Add to cart</button>
    </div>


  <?php  
    $id = 8;
    $sql = "SELECT * FROM items WHERE id = $id";
    $sth = $db->query($sql);
    $result=mysqli_fetch_array($sth);
    if ($result['state'] == 0) {
      $state = "OUT OF STOCK";
    } else {
      $state = "Available";
    }
  ?>
  
    <div id="product" class="product">
      <span id="info" class="info">
        <div id="index">
          <?php echo '<img src="data:image/jpeg;base64,'.base64_encode( $result['image'] ).'"/>'; ?> 
        </div>
        <span id="text" class="text">
          <h2 id="name"><?php echo $result['name']; ?></h2>
          <p class="description"><?php echo $result['description']; ?></p>
          <h3><?php echo $state; ?></h3>
          <span id="price">$<span id="num"><?php echo $result['price']; ?></span>
          </span>
        </span>
      </span>
      <button>Add to cart</button>
    </div>


  <?php  
    $id = 9;
    $sql = "SELECT * FROM items WHERE id = $id";
    $sth = $db->query($sql);
    $result=mysqli_fetch_array($sth);
    if ($result['state'] == 0) {
      $state = "OUT OF STOCK";
    } else {
      $state = "Available";
    }
  ?>
  
    <div id="product" class="product">
      <span id="info" class="info">
        <div id="index">
          <?php echo '<img src="data:image/jpeg;base64,'.base64_encode( $result['image'] ).'"/>'; ?> 
        </div>
        <span id="text" class="text">
          <h2 id="name"><?php echo $result['name']; ?></h2>
          <p class="description"><?php echo $result['description']; ?></p>
          <h3><?php echo $state; ?></h3>
          <span id="price">$<span id="num"><?php echo $result['price']; ?></span>
          </span>
        </span>
      </span>
      <button>Add to cart</button>
    </div>


  <?php  
    $id = 10;
    $sql = "SELECT * FROM items WHERE id = $id";
    $sth = $db->query($sql);
    $result=mysqli_fetch_array($sth);
    if ($result['state'] == 0) {
      $state = "OUT OF STOCK";
    } else {
      $state = "Available";
    }
  ?>
  
    <div id="product" class="product">
      <span id="info" class="info">
        <div id="index">
          <?php echo '<img src="data:image/jpeg;base64,'.base64_encode( $result['image'] ).'"/>'; ?> 
        </div>
        <span id="text" class="text">
          <h2 id="name"><?php echo $result['name']; ?></h2>
          <p class="description"><?php echo $result['description']; ?></p>
          <h3><?php echo $state; ?></h3>
          <span id="price">$<span id="num"><?php echo $result['price']; ?></span>
          </span>
        </span>
      </span>
      <button>Add to cart</button>
    </div>


  <?php  
    $id = 11;
    $sql = "SELECT * FROM items WHERE id = $id";
    $sth = $db->query($sql);
    $result=mysqli_fetch_array($sth);
    if ($result['state'] == 0) {
      $state = "OUT OF STOCK";
    } else {
      $state = "Available";
    }
  ?>
  
    <div id="product" class="product">
      <span id="info" class="info">
        <div id="index">
          <?php echo '<img src="data:image/jpeg;base64,'.base64_encode( $result['image'] ).'"/>'; ?> 
        </div>
        <span id="text" class="text">
          <h2 id="name"><?php echo $result['name']; ?></h2>
          <p class="description"><?php echo $result['description']; ?></p>
          <h3><?php echo $state; ?></h3>
          <span id="price">$<span id="num"><?php echo $result['price']; ?></span>
          </span>
        </span>
      </span>
      <button>Add to cart</button>
    </div>


  <?php  
    $id = 12;
    $sql = "SELECT * FROM items WHERE id = $id";
    $sth = $db->query($sql);
    $result=mysqli_fetch_array($sth);
    if ($result['state'] == 0) {
      $state = "OUT OF STOCK";
    } else {
      $state = "Available";
    }
  ?>
  
    <div id="product" class="product">
      <span id="info" class="info">
        <div id="index">
          <?php echo '<img src="data:image/jpeg;base64,'.base64_encode( $result['image'] ).'"/>'; ?> 
        </div>
        <span id="text" class="text">
          <h2 id="name"><?php echo $result['name']; ?></h2>
          <p class="description"><?php echo $result['description']; ?></p>
          <h3><?php echo $state; ?></h3>
          <span id="price">$<span id="num"><?php echo $result['price']; ?></span>
          </span>
        </span>
      </span>
      <button>Add to cart</button>
    </div>

  </div>
  <div id="cart" class="cart">
    <h1>Cart</h1>
    <div id="all">
    </div>
    <div class="total">
      <h2>Total</h2>
      <span class="right price">$<span id="total"></span></span>
    </div>
    <button>Checkout</button>
  </div>

  <script src="JS/index.js"></script>
  
</body>
</html>