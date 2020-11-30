<?php
include 'connection.php';

if (isset($_POST['submit'])) {

$id = $_POST['update_id'];


$name = $_POST['name'];
$contact = $_POST['contact'];
$email = $_POST['email'];
$blength = $_POST['blength'];
$qty = $_POST['qty'];
$amount = $_POST['amount'];
$total = $amount;
$recived = $_POST['recived'];
$newrecived = $_POST['newrecived'];
$sum = $recived + $newrecived;
$pending = $_POST['pending'];
$pending = $amount - $sum;


$updatequery =  "update tb_updatemodal SET name='$name', contact = '$contact', email = '$email' , qty = '$qty', blength = '$blength',amount = '$amount', recived = '$sum', pending = '$pending' WHERE id ='$id'";
$result = mysqli_query($con,$updatequery);
if($result){
	?>
	<script>
     alert("Data Update Successfully");
      location.replace("index.php");
    </script>
	<?php
}else{
	?>
	<script>

	alert("Data Not Updated");

     location.replace("index.php");
   </script>
	<?php
}

	}
?>