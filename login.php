<?php
session_start();
 require('connect.php');

if (isset($_POST['username']) and isset($_POST['password'])){

$username = $_POST['username'];
$password = $_POST['password'];

$query = "SELECT * FROM `user` WHERE username='$username' and password='$password'";

$result = mysql_query($query) or die(mysql_error());
$count = mysql_num_rows($result);

if ($count == 1){
$_SESSION['username'] = $username;
}else{

echo "Neparei dati";
}
}
if (isset($_SESSION['username'])){
$username = $_SESSION['username'];
echo "Cau " . $username . "
";
echo "tu esi ieksha
";
echo "<a href='logout.php'>Iziet</a>";

}else{

?>
<!DOCTYPE html>
 <head>
<title>Vadim awesome webpage!</title>
<link rel="stylesheet" type="text/css" href="style.css" />
</head>
<body>

<div class="register-form">
<?php
	if(isset($msg) & !empty($msg)){
		echo $msg;
	}
 ?>
<h1>Login</h1>
<form action="" method="POST">
    <p><label>Lietotaja vards : </label>
	<input id="username" type="text" name="username" placeholder="username" /></p>

     <p><label>Parole: &nbsp;&nbsp; : </label>
	 <input id="password" type="password" name="password" placeholder="password" /></p>

    <a class="btn" href="register.php">Registreties</a>
    <input class="btn register" type="submit" name="submit" value="Login" />
    </form>
</div>
<?php } ?>
</body>
</html>