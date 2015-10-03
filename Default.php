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
<body onload="deleteAllCookies()">
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

  ?>

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
      <button id="1">Add to cart</button>

      <div style="display:none">
        <P id="stock1"><?php echo $result['state']; ?></P>
      </div>
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
      <button id="2">Add to cart</button>
      
      <div style="display:none">
        <P id="stock2"><?php echo $result['state']; ?></P>
      </div>
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
      <button id="3">Add to cart</button>
      
      <div style="display:none">
        <P id="stock3"><?php echo $result['state']; ?></P>
      </div>
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
      <button id="4">Add to cart</button>
      
      <div style="display:none">
        <P id="stock4"><?php echo $result['state']; ?></P>
      </div>
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
      <button id="5">Add to cart</button>
      
      <div style="display:none">
        <P id="stock5"><?php echo $result['state']; ?></P>
      </div>
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
      <button id="6">Add to cart</button>
      
      <div style="display:none">
        <P id="stock6"><?php echo $result['state']; ?></P>
      </div>
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
      <button id="7">Add to cart</button>
      
      <div style="display:none">
        <P id="stock7"><?php echo $result['state']; ?></P>
      </div>
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
      <button id="8">Add to cart</button>
      
      <div style="display:none">
        <P id="stock8"><?php echo $result['state']; ?></P>
      </div>
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
      <button id="9">Add to cart</button>
      
      <div style="display:none">
        <P id="stock9"><?php echo $result['state']; ?></P>
      </div>
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
      <button id="10">Add to cart</button>
      
      <div style="display:none">
        <P id="stock10"><?php echo $result['state']; ?></P>
      </div>
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
      <button id="11">Add to cart</button>
      
      <div style="display:none">
        <P id="stock11"><?php echo $result['state']; ?></P>
      </div>
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
      <button id="12">Add to cart</button>
      
      <div style="display:none">
        <P id="stock12"><?php echo $result['state']; ?></P>
      </div>
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
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" enctype="multipart/form-data" method="POST">
      <input type="submit" id="loginButton" value="Checkout" name="submit"/>
    </form>
  </div>

  <?php

    if (isset($_POST['submit'])) {
      if (!$flag) {
        echo '<script language="javascript">';
        echo 'alert("LogIn First.")';
        echo '</script>';
      }
      else {

        //echo '<script language="javascript">';
        //echo 'if (confirm("!Confirm Purchase ?")){';
        //echo '</script>';

        // Create connection
        $conn = mysqli_connect("localhost", "root", "", "eshop");
        // Check connection
        if (!$conn) {
          die("Connection failed: " . mysqli_connect_error());
        }

        for($i = 1; $i <= 12; $i++)
        {
          for($k = 0; true; $k++)
          {
            if(!isset($_COOKIE[$i . '-' . $k]))
            {
              break;
            }
            else
            {
              $id = $_COOKIE[$i . '-' . $k];

              $db = mysqli_connect("localhost","root","","eshop");
              $sql = "SELECT * FROM items WHERE id = \"$id\"";
              $sth = $db->query($sql);
              $result=mysqli_fetch_array($sth);
              $item_name = $result['name'];

              $timestamp = date("Y/m/d h:m:sa");

              $sql = "INSERT INTO history (item_id, item_name, email, date) VALUES ('$id', '$item_name', '$address', '$timestamp')";
              if ($conn->query($sql) === TRUE) {
                } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
              }

              $sql = "UPDATE `eshop`.`items` SET `state` = 'state - 1' WHERE `items`.`id` = '$id'";
              if ($conn->query($sql) === TRUE) {
                } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
              }
            }
          }
        }
        
        echo '<script type="text/javascript">';
        echo 'alert("Purchase Successful.")';
        echo '</script>';

      }
    }

  ?>

  <script src="JS/index.js"></script>
  
</body>
</html>