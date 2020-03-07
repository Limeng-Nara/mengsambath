<?php
include_once 'index.php';
if (isset($_POST['save'])) {

	$kind = $_POST['kind'];
	$price = $_POST['price'];
	$image = $_POST['image'];


	$sql = "INSERT INTO product(kind,price,image)
	 VALUES ('$kind','$price','$image')";
	if (mysqli_query($conn, $sql)) {
		echo "New record created successfully !";
	} else {
		echo "Error: " . $sql . "
" . mysqli_error($conn);
	}
	mysqli_close($conn);
}
