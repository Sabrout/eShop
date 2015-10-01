<html>
<head>
	<meta charset="UTF-8">
  <title>eShop</title>
  <link rel="stylesheet" href="CSS/style.css">

</head>
<body>
	<header class="header">
      <h1 class="logo">Logo</h1>
      <ul class="nav">
        <li><a href="#">Shopping Cart</a></li>
        <li><a href="Register.php">Register</a></li>
        <li><a href="#">Sign in</a></li>
      </ul>
  </header>
  <?php
    mysql_connect('localhost', "root", "");
    mysql_select_db('eshop');
    mysql_close();
  ?>
  
</body>
</html>