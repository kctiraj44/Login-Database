<?php



include_once 'includes.php';

$billed =$_POST['billed'];
$amount =$_POST['amount'];
$date=$_POST['date'];
$info=$_POST['info'];









$sql ="INSERT INTO  billing (Amount_Billed,Amount,Date_Paid,Insurance_Information) VALUES 
('$billed', '$amount','$date','$info'); ";
mysqli_query($conn, $sql);

header("Location: BillingMain.php?signup=Success");
?>