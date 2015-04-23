<?php
require_once 'connect.php';
if (isset($_POST['submit'])){
    $username = $_POST['username'];
    $password = $_POST['password'];

$sql = "SELECT * FROM `user` WHERE username='$username' and password='$password' and active=1";
$result = mysql_query($sql) or die(mysql_error());
$count = mysql_num_rows($result);
if ($count == 1){
    echo "TU esi ieksha";
}else {
    echo "NEvari ienakt!";
}
}
?>
<html>
<head>
<title>Login</title>
</head>
<body>
<h1></h1>
<form action="" method="post">
<label>Lietotaja vards :</label>
<input type="text" name="username" /><br />
<label>Parole :</label>
<input type="password" name="password" /><br />
<input type="submit" value="Login" name="submit"/>
</form>
<?php

?>
</body>
</html>