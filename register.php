<?php
	require('connect.php');

    if (isset($_POST['username']) && isset($_POST['password'])){
        $username = $_POST['username'];
		$email = $_POST['email'];
        $password = $_POST['password'];

        $query = "INSERT INTO `user` (username, password, email) VALUES ('$username', '$password', '$email')";
        $result = mysql_query($query);
        if($result){
            $msg = "Lietotais ir registrets!";
        }
    }
    ?>
<!DOCTYPE html>
<html>
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
<h1>Register</h1>
<form action="" method="POST">
    <p><label>Lietotaja vards : </label>
	<input id="username" type="text" name="username" placeholder="username" /></p>

	<p><label>Emails&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : </label>
	 <input id="password" type="email" name="email" required placeholder="vivek@email.com" /></p>

     <p><label>Parole&nbsp;&nbsp; : </label>
	 <input id="password" type="password" name="password" placeholder="password" /></p>

    <a class="btn" href="login.php">Ienakt</a>
    <input class="btn register" type="submit" name="submit" value="Register" />
    </form>
</div>
</body>
</html>