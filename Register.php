<?php
  session_start();

  if (isset($_SESSION['EMAIL'])) {
    die("ALREADY REGISTERED");
    $flag = true;
    } else {
      $flag = false;
    }
?>

<html>
<head>
	<meta charset="UTF-8">
  <title>eShop</title>
  <link rel="stylesheet" href="CSS/signup.css">
  <script src="JS/index.js"></script>
</head>
<body>
	<header class="header">
      <a href="Default.php">
      <img src="IMG/logo.png" class="logo" alt="Logo">
      </a>
      <ul class="nav">
        <li><a href="Register.php">Register</a></li>
        <li><a href="Signin.php">Sign in</a></li>
      </ul>
  </header>

  <div id="backgroundOverlay">
    <div id="login">
    <h1 id="CreateAccount">Create Account</h1>
      <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" enctype="multipart/form-data" method="POST">
        <input type="text" placeholder="First Name" id="topText" required name="fname" />
        <input type="text" placeholder="Last Name" id="textBox" required name="lname"/>
        <input type="text" placeholder="Email" id="textBox" required name="email"/>
        <input type="password" placeholder="Password" id="textBox" required name="password"/>
        <input type="password" placeholder="Confirm Password" id="botText" required name="conPassword" />
        <input type="file" id="uploadButton" name="image">
        <input type="submit" id="loginButton" value="Sign up" name="submit"></input>
        <a href="Default.php">Already have an account? <b>Login!</b></a>
      </form>      
    </div>
  </div>
  <?php
    if (isset($_POST['submit'])) {
      // Create connection
      $conn = mysqli_connect("localhost", "root", "", "eshop");
      // Check connection
      if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
      }

      function test_input($data) {
          $data = trim($data);
          $data = stripslashes($data);
          $data = htmlspecialchars($data);
          return $data;
        }
      // define variables and set to empty values
      $fname = $lname = $email = $password = "";

      if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $fname = test_input($_POST["fname"]);
        $lname = test_input($_POST["lname"]);
        $email = test_input($_POST["email"]);
        $password = hash("md5", test_input($_POST["password"]));
        $imageData = mysql_real_escape_string(file_get_contents($_FILES["image"]["tmp_name"]));
        $imageType = mysql_real_escape_string($_FILES["image"]["type"]);
        if ($_POST["password"] == $_POST["conPassword"]) {
          $passFlag = true;
        } else {
          $passFlag = false;
        }
        }

      if (substr($imageType, 0, 5) == "image" && $passFlag) {
        $sql = "INSERT INTO users (fname, lname, email, password, avatar) VALUES ('$fname', '$lname', '$email', '$password', '$imageData')";
      } else if (!$passFlag) {
        echo '<script language="javascript">';
        echo 'alert("PASSWORDS DID NOT MATCH")';
        echo '</script>';
      } else {
        echo '<script language="javascript">';
        echo 'alert("UPLOADED FILE IS NOT AN IMAGE TYPE")';
        echo '</script>';
      } 

      if ($conn->query($sql) === TRUE) {
        echo '<script language="javascript">';
        echo 'alert("Welcom, " + $fname)';
        echo '</script>';
        } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
        }
    header("Location: Default.php");
    die();
    }
    
  ?>

</body>
</html>