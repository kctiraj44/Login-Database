<?php

include_once 'includes.php';
?>

<!DOCTYPE html>
<html>
<head>
	<title>welcome</title>
</head>
<body>
	<?php

$sql ="SELECT * FROM loginsystem;";
$result = mysqli_query($conn, $sql);
$resultcheck= mysqli_num_rows($result);

if($resultcheck >0){
	while($row = mysqli_fetch_assoc($result)){
echo $row['Name']. "<br>";
echo $row['Password'] ."<br>";
	}
}


	?>



</body>
</html>