 <?php



$username = "root";
$password = "";
$server  = "localhost";
$db = 'db_updatemodal';


$con = mysqli_connect($server,$username,$password,$db); 


if($con){
	//echo "connect suucces";
	?>
	<!--  <script>
		alert("connection successfully");
	</script>   -->
	<?php
}else{
	// echo "no connection";
	?>
	<!-- <script>
		alert("No connection.");
	</script>   -->
	<?php
}


?>