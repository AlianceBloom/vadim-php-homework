<?php session_start();
include "connect.php";
if (isset($_POST['username'])){
    $username = $_POST['username'];
    $query="select * from user where username='$username'";
    $result   = mysql_query($query);
    $count=mysql_num_rows($result);

    if($count==1)
    {
        $rows=mysql_fetch_array($result);
        $pass  =  $rows['password'];

        $to = $rows['email'];


        $from = "Vadim Registration Service";
        $url = "http://46.101.157.113/";
        $body  =  "My first php awesome webpage
        -----------------------------------------------
        Url : $url;
        email Details is : $to;
        Here is your password  : $pass;
        Sincerely,
        Amazin WBPAG";
        $from = "vadim@jefimov.com";
        $subject = "This is my first php websize!";
        $headers1 = "From: $from\n";
        $headers1 .= "Content-type: text/html;charset=iso-8859-1\r\n";
        $headers1 .= "X-Priority: 1\r\n";
        $headers1 .= "X-MSMail-Priority: High\r\n";
        $headers1 .= "X-Mailer: Just My Server\r\n";
        $sentmail = mail ( $to, $subject, $body, $headers1 );
    } else {
    if ($_POST ['email'] != "") {
    echo "<span style='color: #ff0000;'>Tavs emails nav atrasts! </span>";
        }
        }
    if($sentmail==1)
    {
        echo "<span style='color: #ff0000;'> Jusu parole nosutita jums.</span>";
    }
        else
        {
        if($_POST['email']!="")
        echo "<span style='color: #ff0000;'>Oups, tagat mes nevaram nosutit jums paroli! </span>";
    }
}
?>
 <!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="style.css" />
<title>Vadim awesome webpage!</title>
</head>
<body>


<div class="register-form">
<?php
	if(isset($msg) & !empty($msg)){
		echo $msg;
	}
 ?>
<h1>Aizmirsu paroli.</h1>
<form action="" method="POST">
    <p><label>Lietotaja vards: : </label>
	<input id="username" type="text" name="username" placeholder="username" /></p>

    <input class="btn register" type="submit" name="submit" value="Submit" />
    </form>
</div>

</body>
</html>