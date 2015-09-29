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
    print "<h2>php program to add 2 numbers...</h2><br />";
              $val1 = 20;
              $val2 = 20;
              $sum = $val2 + $val2;   /* Assignment operator */
              echo "Result(SUM): $sum";
  ?>
  
</body>
</html>