<html>
<head>
	<meta charset="UTF-8">
  <title>eShop</title>
  <link rel="stylesheet" href="CSS/style.css">
  <link rel="stylesheet" href="CSS/home.css">
  <script src="JS/index.js"></script>

</head>
<body>
	<header class="head">
      <img src="IMG/logo.png" class="websiteLogo" alt="Logo">
      <ul class="navbar">
        <li><a href="#">Shopping Cart</a></li>
        <li><a href="Register.php">Register</a></li>
        <li><a href="#">Sign in</a></li>
      </ul>
  </header>

  <?php  
    $db = mysqli_connect("localhost","root","","eshop"); //keep your db name
    $id = 1;
    $sql = "SELECT * FROM items WHERE id = $id";
    $sth = $db->query($sql);
    $result=mysqli_fetch_array($sth);
    echo '<img src="data:image/jpeg;base64,'.base64_encode( $result['image'] ).'"/>';
    
  ?>

  <div id="goods" class="goods">
    <div id="product" class="product">
      <span id="info" class="info">
        <div id="index">
          <img src="<?php echo '<img src="data:image/jpeg;base64,'.base64_encode( $result['image'] ).'"/>'; ?>" alt="PLZ" id="pic">
        </div>
        <span id="text" class="text">
          <h2 id="name">Suit</h2>
          <p class="description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean ornare facilisis ante, nec rutrum tellus. Vivamus ante augue.</p>
          <h3>Colors</h3>
          <ul>
            <li id="color_one"></li>
            <li id="color_two"></li>
            <li id="color_three"></li>
            <li id="color_four"></li>
          </ul>
          <span id="price">$<span id="num">229</span>
          </span>
        </span>
      </span>
      <button>Add to cart</button>
    </div>
    <div id="product" class="product">
      <span id="info" class="info">
                <div id="index">
                  <img src="http://gdurl.com/dLcj" alt="" id="pic">
                </div>
          <span id="text" class="text">
            <h2 id="name">Bow tie</h2>
            <p class="description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean ornare facilisis ante, nec rutrum tellus. Vivamus ante augue.</p>
            <h3>Colors</h3>
            <ul>
            <li id="color_one"></li>
            <li id="color_two"></li>
            <li id="color_three"></li>
            <li id="color_four"></li>
            </ul>
            <span id="price">$<span id="num">25</span></span>
      </span>
      </span>
      <button>Add to cart</button>
    </div>
    <div id="product" class="product">
      <span id="info" class="info">
                <div id="index">
                  <img src="http://gdurl.com/co-O" alt="" id="pic">
                </div>
          <span id="text" class="text">
            <h2 id="name">Sweater</h2>
            <p class="description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean ornare facilisis ante, nec rutrum tellus. Vivamus ante augue.</p>
            <h3>Colors</h3>
            <ul>
            <li id="color_one"></li>
            <li id="color_two"></li>
            <li id="color_three"></li>
            <li id="color_four"></li>
            </ul>
            <span id="price">$<span id="num">69.50</span></span>
      </span>
      </span>
      <button>Add to cart</button>
    </div>
    <div id="product" class="product">
      <span id="info" class="info">
                <div id="index">
                  <img src="http://gdurl.com/NndH" alt="" id="pic">
                </div>
          <span id="text" class="text">
            <h2 id="name">Hat</h2>
            <p class="description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean ornare facilisis ante, nec rutrum tellus. Vivamus ante augue.</p>
            <h3>Colors</h3>
            <ul>
            <li id="color_one"></li>
            <li id="color_two"></li>
            <li id="color_three"></li>
            <li id="color_four"></li>
            </ul>
            <span id="price">$<span id="num">34</span></span>
      </span>
      </span>
      <button>Add to cart</button>
    </div>
    <div id="product" class="product">
      <span id="info" class="info">
                <div id="index">
                  <img src="http://gdurl.com/TcSI" alt="" id="pic">
                </div>
          <span id="text" class="text">
            <h2 id="name">Shoes</h2>
            <p class="description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean ornare facilisis ante, nec rutrum tellus. Vivamus ante augue.</p>
            <h3>Colors</h3>
            <ul>
            <li id="color_one"></li>
            <li id="color_two"></li>
            <li id="color_three"></li>
            <li id="color_four"></li>
            </ul>
            <span id="price">$<span id="num">120</span></span>
      </span>
      </span>
      <button>Add to cart</button>
    </div>
    <div id="product" class="product">
      <span id="info" class="info">
                <div id="index">
                  <img src="http://gdurl.com/YG8N" alt="" id="pic">
                </div>
          <span id="text" class="text">
            <h2 id="name">Glasses</h2>
            <p class="description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean ornare facilisis ante, nec rutrum tellus. Vivamus ante augue.</p>
            <h3>Colors</h3>
            <ul>
            <li id="color_one"></li>
            <li id="color_two"></li>
            <li id="color_three"></li>
            <li id="color_four"></li>
            </ul>
            <span id="price">$<span id="num">25</span></span>
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

  <?php
    mysql_connect('localhost', "root", "");
    mysql_select_db('eshop');
    mysql_close();
  ?>
  <script src="JS/index.js"></script>
  
</body>
</html>