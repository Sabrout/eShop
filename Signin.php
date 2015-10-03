<?php
  session_start();
?>
<html>
<head>
  <meta charset="UTF-8">
  <title>eShop</title>
  <link rel="stylesheet" href="CSS/signup.css">
</head>
<body>
  <header class="header">
      <a href="Default.php">
      <img src="IMG/logo.png" class="logo" alt="Logo">
      </a>
      <ul class="nav">
        <li><a href="Register.php">Register</a></li>
      </ul>
  </header>

  <div id="backgroundOverlay">
    <div id="login">
    <h1 id="CreateAccount">Create Account</h1>
      <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" enctype="multipart/form-data" method="POST">
        <input type="text" placeholder="Email" id="topText" required name="mail" />
        <input type="password" placeholder="Password" id="textBox" required name="pass"/>
        <input type="submit" id="loginButton" value="Sign in" name="login">
      </form>      
    </div>
  </div>
  <?php
    if (isset($_POST['login'])) {
      // Create connection
      $db = mysqli_connect("localhost", "root", "", "eshop");
      // Check connection
      

      function test_input($data) {
          $data = trim($data);
          $data = stripslashes($data);
          $data = htmlspecialchars($data);
          return $data;
        }
        
      // define variables and set to empty values
      $mail = $pass = "";

      if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $mail = test_input($_POST["mail"]);
        $pass = test_input(hash("md5",$_POST["pass"]));
        }

        $query = "SELECT * FROM users WHERE email = \"$mail\"";

        $sth = $db->query($query);
        $result=mysqli_fetch_array($sth);

        if (!$result) {
          printf("Error: %s\n", mysqli_error($db));
          exit();
        }

        $originPass = $result['password'];
        $first = $result['fname'];
        $last = $result['lname'];
        
        if ($originPass==$pass) {
          $_SESSION["FNAME"] = "$first";
          $_SESSION["LNAME"] = "$last";
          $_SESSION["EMAIL"] = "$mail";
          $_SESSION["PASSWORD"] = "$originPass";
          header("Location: Profile.php");
        }else{
        echo '<script language="javascript">';
        echo 'alert("Wrong email or password")';
        echo '</script>';
      }
      

    }
    
  ?>

</body>
</html>