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
  <link rel="stylesheet" href="CSS/card.css">
  <link rel="stylesheet" href="CSS/table.css">
  <script src="JS/index.js"></script>
</head>
<body>

  <?php
    $db = mysqli_connect("localhost","root","","eshop");
    $sql = "SELECT * FROM users WHERE email = \"$address\"";
    $sth = $db->query($sql);
    $result=mysqli_fetch_array($sth);
  ?>

  <header class="header">
      <a href="Default.php">
      <img src="IMG/logo.png" class="logo" alt="Logo">
      </a>
      <ul class="nav">
        <li><a href="Profile.php">Profile</a></li>
        <?php 
        if (!$flag) { echo '<li><a href="Signin.php">Sign in</a></li>';} else { $flage = false; echo '<li><a href="logout.php">Sign Out</a></li>'; }
         ?>
      </ul>
  </header>

  <aside class="profile-card">
    <header>
      <!-- here’s the avatar -->
      <a href="http://ali.shahab.pk">
        <?php echo '<img src="data:image/jpeg;base64,'.base64_encode( $result['avatar'] ).'"/>'; ?>
      </a>
      <h1><?php echo $firstname; echo " "; echo $lastname; ?></h1> <br>
      <h2><?php echo $address; ?></h2>
      <input type="button" id="loginButton" value="Edit Profile" style="text-align: center;" onclick="location.href='edit.php';" />
    </header>
  </aside>



  <table>
  <thead>
    <tr>
      <th>ITEM</th>
      <th>DATE</th>
    </tr>
  </thead>
    <?php
    $mail=$_SESSION["EMAIL"];
    $query = "SELECT * FROM history WHERE email = \"$mail\"";
        
        $result = $db->query($query);
        if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
          echo '<tbody>
          <tr>
          <td> '.$row["item_name"].' </td>
          <td> '.$row["date"] .'</td>
          </tr>
          </tbody>';
      }
      }
      ?>
</table>

</body>
</html>