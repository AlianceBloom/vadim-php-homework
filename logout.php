<?php
  session_start();
  $_SESSION['username'] = NULL;
?>

<!DOCTYPE html>
 <head>
<title>Vadim awesome webpage!</title>
<link rel="stylesheet" type="text/css" href="style.css" />
</head>
<body>
<a href="/login.php"> Login </a> or
<a href="/register.php"> Registration </a>
</body>
</html>