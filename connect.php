

<?php 

include 'config.php';

if (isset($_POST['submit'])) {
	$StudentName = $_POST['StudentName'];
	$FatherName = $_POST['FatherName'];
	$gender = $_POST['gender'];
	$email = $_POST['email'];
	$address = $_POST['address'];
	$Phnumber = $_POST['Phnumber'];
	$sql = "SELECT * FROM profile WHERE email='$email'";
		$result = mysqli_query($conn, $sql);
		if (!$result->num_rows > 0) {
	$sql="insert into profile (StudentName, FatherName, gender, email, addresss, Phnumber) values('$StudentName', '$FatherName', '$gender', '$email', '$address', '$Phnumber')";
		if(mysqli_query($conn,$sql)){
			echo "<script>alert('Submitted successfully')</script>";
		}
		else{
			echo "error".mysqli_errno($con);
		}
	}
		else {
			echo "<script>alert('Woops! Email Already Exists.')</script>";
		}
	mysqli_close($conn);
}

?>