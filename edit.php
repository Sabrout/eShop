<?php
  session_start();
  if (isset($_SESSION['EMAIL'])) {
    $firstname = $_SESSION["FNAME"];
    $lastname = $_SESSION["LNAME"];
    $address = $_SESSION["EMAIL"];
    $flag = true;
    } else {
      $flag = false;
      die("LOGIN REQUIRED");
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
        <li><a href="Profile.php">Profie</a></li>
        <?php 
        if (!$flag) { echo '<li><a href="Signin.php">Sign in</a></li>';} else { $flage = false; echo '<li><a href="logout.php">Sign Out</a></li>'; }
         ?>
      </ul>
  </header>

  <div id="backgroundOverlay">
    <div id="login">
    <h1 id="CreateAccount">Edit Profile</h1>
      <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" enctype="multipart/form-data" method="POST">
        <input type="text" placeholder="First Name" id="topText" required name="fname" value="<?php echo $firstname; ?>"/>
        <input type="text" placeholder="Last Name" id="textBox" required name="lname" value="<?php echo $lastname; ?>"/>
        <input type="password" placeholder="Old Password" id="textBox" required name="oldpassword"/>
        <input type="password" placeholder="New Password" id="textBox" required name="newpassword"/>
        <input type="password" placeholder="Confirm New Password" id="botText" required name="conPassword" />
        <input type="submit" id="loginButton" value="Update Profile" name="submit"></input>
        <br>
        <br>
        <input type="file" id="uploadButton" name="image">
        <input type="submit" id="loginButton" value="Update Picture" name="submitImage"></input>
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
        $oldPassword = hash("md5", test_input($_POST["oldpassword"]));
        $newPassword = hash("md5", test_input($_POST["newpassword"]));
        
        if ($_POST["newpassword"] == $_POST["conPassword"]) {
          $passFlag = true;
        } else {
          $passFlag = false;
        }
        }

      if ($passFlag) {
        $sql = "UPDATE `eshop`.`users` SET `fname` = '$fname', `lname` = '$lname', `password` = '$newPassword' WHERE `users`.`email` = '$address'";
        if ($conn->query($sql) === TRUE) {
        echo '<script language="javascript">';
        echo 'alert("EDITED")';
        echo '</script>';
        $_SESSION["FNAME"] = "$fname";
        $_SESSION["LNAME"] = "$lname";
        $_SESSION["EMAIL"] = "$address";
        header("Location: Profile.php");
        } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
        }
      } else {
        echo '<script language="javascript">';
        echo 'alert("PASSWORDS DID NOT MATCH")';
        echo '</script>';
      } 
    }

    if (isset($_POST['submitImage'])) {
      // Create connection
      $conn = mysqli_connect("localhost", "root", "", "eshop");
      // Check connection
      if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
      }

      if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $imageData = mysql_real_escape_string(file_get_contents($_FILES["image"]["tmp_name"]));
        $imageType = mysql_real_escape_string($_FILES["image"]["type"]);
      }

      if (substr($imageType, 0, 5) == "image") {
        $sql = "UPDATE `eshop`.`users` SET `avatar` = '$imageData' WHERE `users`.`email` = '$address'";
        if ($conn->query($sql) === TRUE) {
        echo '<script language="javascript">';
        echo 'alert("EDITED")';
        echo '</script>';
        header("Location: Profile.php");
      }
      } else {
        echo '<script language="javascript">';
        echo 'alert("UPLOADED FILE IS NOT AN IMAGE TYPE")';
        echo '</script>';
      }
    }
    
  ?>

</body>
</html>