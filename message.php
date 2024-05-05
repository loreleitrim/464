<!DOCTYPE html>
<html>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="css/navbar.css">
  <link rel="stylesheet" type="text/css" href="css/home.css">

  

  <body>
  <div class="bar" id="nav-bar">
      <div>
        <a href="index.php"><img src="images/home.png" class="home-svg"></a>
      </div>
      <div class="bar-links">
        <a class="nav-element" href="college.html">College</a>
        <a class="nav-element" href="extra.html">About Me</a>
        <a href="message.php" class="nav-element">Message</a>
      </div>
    </div>
    <div class="body-small">
    <div id="dropdown-nav-bar">
        <div class="dropdown">
          <button class="btn nav-carat dropdown-toggle" type="button" data-toggle="dropdown">
          <span class="caret"></span></button>
          <ul class="dropdown-menu">
            <li><a href="index.php">Home</a></li>
            <li><a href="college.html">College</a></li>
            <li><a href="extra.html">About Me</a></li>
            <li><a href="message.php">Message</a></li>
          </ul>
        </div>
      </div>
    </div>

    <div class="message">
      <div class="message-space">Leave Me a Message</div>
      <form method="post" action="message.php">
        <p>Message: <input type="text" name="message"></p>
        <p style="float:right"><input type="submit" name="submit" value="Submit"></p>
      </form>
   
    <?php

      $user = 'root';
      $password = 'root';
      $db = 'final_464';
      $host = 'localhost';
      $port = 3306;

      $link = mysqli_init();
      $db = mysqli_real_connect(
        $link,
        $host,
        $user,
        $password,
        $db,
        $port
      );

      $message = $_POST['message'];

      $insert = "INSERT INTO message(message) VALUES ('$message');";
      mysqli_query($link, $insert);

      $query = "SELECT message from message";
      $result = mysqli_query($link, $query);

      $numRows = mysqli_num_rows($result);
      $messages = array();  
      for ($i = $numRows -1; $i >= 0; $i--) {
        $row = mysqli_fetch_array($result);
        $messages[] = $row['message'];
        echo "<div> $mess <div>";
      }
    
      for ($i = $numRows -1; $i >= 0; $i--){
        echo "<div> $messages[$i] <div>";
      }
    ?>
  </div>
</body>
</html>