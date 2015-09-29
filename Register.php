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
        <li><a href="#">Register</a></li>
        <li><a href="Register.php">Sign in</a></li>
      </ul>
  </header>
  <?php
    mysql_connect('localhost', "root", "");
    mysql_select_db('eshop');
    mysql_close();
  ?>
  <div id="backgroundOverlay">
    <h1 id="CreateAccount">Create Account</h1>
    <div id="login">
      <form action="Default.php" method=" POST">
        <input type="text" placeholder="First Name" id="topText" required/>
        <input type="text" placeholder="Last Name" id="textBox" required/>
        <input type="text" placeholder="Email" id="textBox" required/>
        <input type="password" placeholder="Password" id="textBox" required/>
        <input type="password" placeholder="Confirm password" id="botText" required/>
        <input type="submit" id="loginButton" value="Sign up"></input>
        <a href="http://codepen.io/Nyloxz/pen/ejBqc" id="signUp">Already an account? <b>Login!</b></a>
      </form>      
    </div>
  </div>

</body>
</html>