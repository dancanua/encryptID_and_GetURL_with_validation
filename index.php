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
    <title>Practice session - encrypt auto increment id and get id on URL with validation</title>
    <style type="text/css">
    	* {
    		margin: 0;
    		padding: 0;
    	}
    	form{
    		text-align: center;
    		margin-top: 15%;
    	}
    </style>
</head>
<body onload="myBody()">


	<form method="post">
		<label>My First name: </label>
		<input type="text" name="firstName" autofocus="on" autocomplete="off" required/>
		<br>
		<br>
		<input type="submit" name="buttonSubmit" value="Insert this Data">
	</form>


	<?php 

		if (isset($_POST['buttonSubmit'])) {


			$firstName = mysqli_real_escape_string($con, $_POST['firstName']);

			$firstQuery = "INSERT INTO tablepractice VALUES('','$firstName','','0')";
			$executeFirstQuery = mysqli_query($con, $firstQuery);

			$getLastID = md5(mysqli_insert_id($con));

			$selectQuery = "SELECT * FROM tablepractice";
			$executeSelectQuery = mysqli_query($con, $selectQuery);

				while ($rows = mysqli_fetch_assoc($executeSelectQuery)) {
					$id = $rows['id'];
					$myName = $rows['firstName'];
					$hashName = $rows['hashName'];
				}

				// count if there's already a data in tablepractice
				$countFirstQuery = mysqli_num_rows($executeSelectQuery);


				// if there's a data >> then update the hashname to the last id and encrypt it
				if ($countFirstQuery > 0) {
					$updateQuery = "UPDATE tablepractice SET hashName='$getLastID' WHERE id='$id'";
					$executeUpdateQuery = mysqli_query($con, $updateQuery);
				}

		}

	?>
  
  	<?php 

  				// output the data so we can grab it 
  				// and perform a GET method in our next page
  				$outputData = "SELECT * FROM tablepractice";
				$executeOutputData = mysqli_query($con, $outputData);

				while ($rows = mysqli_fetch_assoc($executeOutputData)) {
					$id = $rows['id'];
					$firstName = $rows['firstName'];
					$hashName = $rows['hashName'];

  	?>

	<a style="text-align: center; margin-left: 50%; margin-top: 5%; position: absolute;" href="getid.php?id=<?php echo $hashName; ?>"><?php echo $firstName; ?></a>
	<br>

	<?php } ?>
</body>
</html>