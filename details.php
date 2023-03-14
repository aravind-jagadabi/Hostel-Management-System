<?php
$servername = "localhost";
$username="root";
$password="";
$dbname="projectdb";

$conn=new mysqli($servername,$username,$password,$dbname);

if($conn->connect_error){
	die("connection failed".$conn->connect_error);
}
$email=$_GET['emal'];
$sql="SELECT StudentName,FatherName,gender,email,addresss,Phnumber FROM profile where email='$email'";
$result = $conn->query($sql);

if($result->num_rows > 0)
{
	while ($row = $result->fetch_assoc()) {
		?>
		
	

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>detailsform</title>
    <link rel="stylesheet" href="style.css" type="text/css">
    <script src="https://kit.fontawesome.com/ab2155e76b.js" crossorigin="anonymous"></script>

<link rel="stylesheet" href="style1.css">
<style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins&display=swap');
    </style>
</head>
<body>
    <div class="container">
        <div class="header"> 
          <h2>Profile</h2>
        </div>
        <form action="connect.php" method="post" class="form" id="form">
          <div class="form-control ">
          <label for="StudentName" >Student Name</label>
           <input id="StudentName" name="StudentName" type= "text"  placeholder="<?php echo $row["StudentName"]; ?>"> 
          </div>

            <div class="form-control ">
            <label for="fatherName" >Father Name</label>
            <input id="FatherName" name="FatherName" type= "text"  placeholder="<?php echo $row["FatherName"]; ?>"> 
            </div>
            
            <div class="form-control radio ">
            <label for="gender" >Gender:</label>
             <input id="gen" name="gender" type= "text"  placeholder=" <?php echo $row["gender"]; ?>">   
                </div> 

          <div class="form-control ">
          <label for="email">Email</label>
          <input id="email" name="email" type= "email"  placeholder="<?php echo $row["email"]; ?>" >
          </div>

          <div class="form-control">
          <label for="address">Address</label>
          <input id="address" name="address" type= "text"  placeholder="<?php echo $row["addresss"]; ?>" >
          </div>

          <div class="form-control">
            <label for="Phnumber">Phone Number</label>
            <input type="tel" placeholder="<?php echo $row["Phnumber"]; ?>" id="Phnumber" name="Phnumber" >
          </div>

         
        </form>
      </div>

      <script src="/app.js"></script>
    
</body>
</html>
<?php
}
}
else{
	echo "no records";
}
?>