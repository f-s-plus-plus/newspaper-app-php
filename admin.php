<DOCTYPE! html>
<html>
<head>
	<?php
		include 'head.php';
	?>
</head>
<body>
<?php
	
	$db_servername = "localhost";
	$db_username = "root";
	$db_password = "";
	
	$conn = new mysqli($db_servername, $db_username, $db_password) or die("ERROR : " . $conn->connect_error);
	
	$create = "CREATE DATABASE IF NOT EXISTS newspaper_db";
	if(!$conn->query($create)) {
		echo "failure! : " . mysqli_error($conn);
	}
	
	$conn->select_db("newspaper_db");
	
	$create_table = "CREATE TABLE IF NOT EXISTS articles(id INT NOT NULL, title VARCHAR(255), body MEDIUMTEXT, PRIMARY KEY(id))";
	if(!$conn->query($create_table)) {
		echo "failure! : " . mysqli_error($conn);
	}
?>
	<p> hello </p>
	<form method="post" action="post" class="form-article">
		<input type="text" name="title">
		<textarea name="body" placeholder="write here"></textarea>
	</form>

</body>
</html>