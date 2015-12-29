<?php $secDiv = "<br>=================================<br>"; ?>
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
				$finfo = new finfo(FILEINFO_MIME_TYPE);
				$fileDat = file_get_contents($_FILES['data']['tmp_name']);
				$launchData = array();
				$name = "";
				for($count = 0; isset($fileDat[$count]) && $fileDat[$count + 1] != "\n"; $count++){
					if($fileDat[$count] == ","){
						$launchData[$name] = array();
						$name = "";
					}
					$name = ($fileDat[$count] == ",")? "":$name . $fileDat[$count];
				}
				$launchData[$name] = array();
				echo "<pre>";
				var_dump($launchData);
				echo "</pre>";
			?>
		</div>
	<?php endif; ?>
</body>
</html>
