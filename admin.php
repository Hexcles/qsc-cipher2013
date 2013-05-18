<?php
    $db_host = 'localhost';
    $db_user = 'root';
    $db_pass = 'helloqsctech';
    $db_chosen = 'cipher';
?>
<html>

<head>
<title>求是潮技术大赛 - 管理界面</title>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<link href="http://fonts.googleapis.com/css?family=Press+Start+2P|VT323" rel="stylesheet" type="text/css">
<link href="style.css" rel="stylesheet" type="text/css">
<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
</head>

<body>
<div id="content">
<h1>QSCTech</h1>

<?php
    if(!isset($_POST['user'])) {
?>

<form id="pass" method="POST" action="admin.php"  align="center">
    <label>Username:</label><input type="text" name="user"><br>
    <label>Password:</label><input type="password" name="pass"><br><br>
    <input type="submit" value="Login">
</form>

<?php
    } else {
        $link = mysql_connect($db_host,$db_user,$db_pass) or die('Could not connect: ' . mysql_error());
        mysql_select_db($db_chosen) or die('Could not select database');
        mysql_query('set names utf8');
        $user = $_POST['user'];
        $pass = $_POST['pass'];
        $result = mysql_query("SELECT * FROM `auth` WHERE `user`='$user' AND `pass`='$pass'");
        if (mysql_num_rows($result) == 0) {
            echo '<p style="text-align: center;">Permission denied.</p>';
        } else {
            $row = mysql_fetch_assoc($result);
            echo '<p>';
            foreach ( $row as $key=>$value ) {
                echo "$key: $value<br>";
            }
            echo '</p>';
        }
    }
?>

</div>
</body>

</html>
