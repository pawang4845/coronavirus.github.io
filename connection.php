<?php 

$server = 'localhost';
$username = 'root';
$password = '';
$dbname = 'coronadata';

$conn = mysqli_connect($server,$username,$password,$dbname);

if ($conn) {
	?>
  <script>
  	
  alert("connection Succesfull");

  </script>

	<?php
	 
	 // echo "Connection succefull";
}
else{
	?>

<script>
	
 alert("No connection");

</script>


	<?Php
	  // echo "Faild !";
}


 ?>