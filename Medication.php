<?php



include_once 'includes.php';

$when =$_POST['when'];
$what =$_POST['what'];
$quantity=$_POST['quantity'];                                               








$sql ="INSERT INTO  medication (wheen,what,quantity) VALUES 
('$wheen', '$what','$quantity'); ";
mysqli_query($conn, $sql);

header("Location: MedicationMain.php?signup=Success");
?>