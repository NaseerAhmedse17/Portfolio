<!DOCTYPE html>
<html>
<head>
<title>PHP Program</title>
</head>
<body>
<h1>Welcome to My Webpage</h1>
<?php
echo "Hello world <br/>";
$var="This is my Webpage ";
echo $var;
$str=str_word_count($var);
echo $str;
?>
<form action="welcome.php" method="post">
<label for=fname>First Name</label>
<input type="text" name="fname"><br>
<label for=lname>Last Name</label>
<input type="text" name="lname"><br>
<input type="submit" name="">
</form>


<form action="welcome.php" method="post" enctype="multipart/from-data">
	select image to upload:
	<input type="file" name="FileToUploads"><br>
	<input type="submit" name="FileUpload">
	
</form>
</body>
</html>