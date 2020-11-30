<?php
include 'connection.php';

if (isset($_POST['delete'])) {

$id = $_POST['delete_id'];



$deletequery = "delete from tb_updatemodal where id = '$id'";

$query = mysqli_query($con,$deletequery);


if($query){
	?>
	<script>
		alert("Data successfully Deleted.");
		location.replace("index.php");
	</script>
	<?php
}else{
	?>
	<script>
		alert("Data Not Deleted.");
		location.replace("index.php");
	</script>
	<?php
}
}
?>