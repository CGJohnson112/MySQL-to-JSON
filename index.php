<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>DB</title>
</head>
<body>
	<?php 
	$connect = mysqli_connect('localhost', 'root', 'root', 'SSP_portfolio_uploader');

	$sql = "SELECT * from portfolios";

	$result = mysqli_query($connect, $sql);

	$json_array = array();

	while($row = mysqli_fetch_assoc($result))
	{
		$json_array[] = $row;
	}

	echo '<pre>';
	print_r($json_array);
	echo '</pre>';

	?>
	
</body>
</html>