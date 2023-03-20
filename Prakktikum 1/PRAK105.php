<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
    <link rel = "stylesheet" href = "Style.css" type="text/css"/>
</head>
<body>
<?php 
$hp = ["merek1"=>"Samsung Galaxy S22","merek2"=>"Samsung Galaxy S22","merek3"=> "Samsung Galaxy A03","merek4"=> "Samsung Galaxy Xcover 5"];
echo "<table border='1'>";
echo "<tr>";
echo "<th>";
echo "<h1>Daftar Smartphone Samsung</h1>";
echo "</th>";
echo "</tr>";
foreach ($hp as $handphone => $handphonevalue) {
 
	echo "<tr><td>". $handphonevalue ."</td></tr>";
}
echo "</table>";
?>	
</body>
</html>