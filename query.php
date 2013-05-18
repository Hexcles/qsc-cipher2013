<?php
if (isset($_POST['PASSCODE']))
    $code = $_POST['PASSCODE'];
else if (isset($_POST['passcode']))
    $code = $_POST['passcode'];
else die("Too young too simple.");

if (strtolower($code) == 'qsctech')
    echo '9ec86b81335d46b956c84acb2fdc88e8';
else echo 'Wrong PASSCODE';
?>
