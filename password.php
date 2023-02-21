<?php
  session_start();

  if(isset($_SESSION['password'])) {
    $password = $_SESSION['psw'];
    echo "<p>La tua password casuale è: <strong>$password</strong></p>";

  } else {
    header("Location: index.php");
  }
?>
