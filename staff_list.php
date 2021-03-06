<!DOCTYPE html>
<html>
<head>
	<title>Search Patient Details </title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>

<?php 
include("layout.php");
if (isset($_POST['staff_search'])) {
	$id = filter_input(INPUT_POST, 'search');
	$query = "SELECT * FROM staff WHERE ID = '$id' ";
	$result = mysqli_query($conn,$query);
	echo "
	<div class='card-body' style='background-color: #3A81FF;'>
				<table class='table table-hover' style=' color:white; font-family: serif;'>
  <thead>
    <tr>
      <th scope='col'>ID</th>
      <th scope='col'>First Name</th>
      <th scope='col'>Last Name</th>
      <th scope='col'>Father's Name</th>
      <th scope='col'>City</th>
      <th scope='col'>State</th>
      <th scope='col'>email</th>
      <th scope='col'>Contact</th>
    </tr>
  </thead>
  <tbody>";
	while ($row=mysqli_fetch_array($result)) {
	 		$id = $row['ID'];
			$firstn = $row['firstname'];
			$lastn = $row['lastname'];
			$fatname = $row['fathername'];
			$ct = $row['city'];
			$state = $row['state'];
			$email = $row['email'];
			$contact = $row['contact'];

			echo "<tr>
			  <td>$id</td>
		      <td>$firstn</td>
		      <td>$lastn</td>
		      <td>$fatname</td>
		      <td>$ct</td>
		      <td>$state</td>
		      <td>$email</td>
		      <td>$contact</td>
		    </tr>";
	 } 
	 echo "</tbody></table></div>";
}

?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

</body>
</html>

