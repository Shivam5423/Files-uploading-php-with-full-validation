<?php

?>
<!Doctype html>
<html>
	<head>
	</head>
	<body>
		<h1>$_FILES - Validation in PHP</h1>
		<form action="valid-upload.php?/=<?php echo basename($_SERVER['PHP_SELF']);?>" method="post" enctype="multipart/form-data">
			<input type="file" name="files"/>
			<input type="submit" name="btn">
		</form>
	</body>
</html>