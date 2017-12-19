<!DOCTYPE html>
<html>
<head>
	<title>Php File Upload</title>
	<style type="text/css">
		
		*{
			font-family: arial;
			background-color: #d4f2ff;
		}
		#FileName{
			padding: 10px; width: 450px; border-radius: 3px; border: 1px solid #ddd;
		}

	</style>
</head>
<body>

	<center><h2>Php File Upload</h2></center>
	<form action="" method="POST" style="width: 585px; margin: auto;" enctype="multipart/form-data">
			
		<input type="file" name="File" id="FileName" />
		<input type="submit" name="FileUpload" value="Upload File" style="padding: 12px; width: 100px; border-radius: 3px; border: 1px solid #ddd; background-color: #f6f6f6; margin-top: 10px;" /><br /><br />

	</form>

<?php
	
	if(isset($_POST['FileUpload'])){

		$DirFolder = './files/';
		$UploadFile = $DirFolder. basename($_FILES['File']['name']);

		if (move_uploaded_file($_FILES['File']['tmp_name'], $UploadFile)){

		    echo "<center>File is valid, and was successfully uploaded.</center>";

		} else {

		    echo "<center>Possible file upload attack!</center>";

		}

	}

?>

</body>
</html>
