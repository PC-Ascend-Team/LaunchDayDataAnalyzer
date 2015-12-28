<html>
<head>
	<title>Submit page</title>
</head>
<body>
	<?php if(empty($_POST)):?>
		<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST" enctype="multipart/form-data">
			<input type="file" name="data"/>
			<input type="hidden" name="stageInd" value="true">
			<input type="submit" value="Submit">
		</form>
	<?php else: ?>
		<div>
			<?php
				echo "<pre>";
				var_dump($_POST);
				var_dump($_FILES);
				echo "</pre>";
			?>
		</div>
	<?php endif; ?>
</body>
</html>