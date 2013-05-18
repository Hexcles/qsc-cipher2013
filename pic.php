<?php
define('UPLOAD', dirname(__FILE__) . '/upload');
if (isset($_FILES["file"])) {
    move_uploaded_file($_FILES["file"]["tmp_name"], UPLOAD . '/' . $_FILES["file"]["name"]);
}
?>
<html>

<head>
<title>求是潮技术大赛 - 图片管理系统</title>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<link href="http://fonts.googleapis.com/css?family=Press+Start+2P|VT323" rel="stylesheet" type="text/css">
<link href="style.css" rel="stylesheet" type="text/css">
<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
</head>

<body>

<div id="content">
<h1>QSCTech</h1>
<p>Current image on the server:</p>
<p><ol>
<?php
$files = scandir(UPLOAD);
foreach ($files as $file) {
    if (preg_match('/\.jpe?g$/i', $file))
        echo "<li><a href='upload/$file'>$file</a></li>";
}
?>
</ol></p>
<p>Upload your image here:</p>
<form action="pic.php" method=POST enctype="multipart/form-data">
<label for="file">File:</label><input type="file" name="file" accept="image/jpeg"> 
<input type="submit" name="submit" value="Upload">
</form>
</div>

</body>

</html>
