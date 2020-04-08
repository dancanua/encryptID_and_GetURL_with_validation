<?php 

	$serverName = "localhost";
	$userName = "root";
	$passWord = "";
	$dataBase = "dbpractice";

	$con = mysqli_connect($serverName, $userName, $passWord, $dataBase);


?>
<!DOCTYPE html>
<html>
<head>
	<title>Get ID PHP</title>
</head>
<body>

	<?php 

		// get id from index.php
		$getID = $_GET['id'];


			// query the selected id
			$outputGetData = "SELECT * FROM tablepractice WHERE hashName='$getID'";
			$executeOutputGetID = mysqli_query($con, $outputGetData);

				// get the date from tablepractice
				while ($rows = mysqli_fetch_assoc($executeOutputGetID)) {
					$id = $rows['id'];
					$firstName = $rows['firstName'];
					$hashName = $rows['hashName'];
				}


				// validate if the user try to change the encrypted data in the url
				// redirect to index.php
				if ($getID !== $hashName) {
					header("location: index.php");
				} else {
					echo 'proceed';
				}
	?>



</body>
</html>