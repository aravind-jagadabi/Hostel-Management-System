
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Client-side Form Validation</title>
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
          <h2>Registration Form</h2>
        </div>
        <form action="testmail.php" method="post" class="form" id="form">
          <div class="form-control ">
          <label for="StudentName" >Student Name</label>
          <input id="StudentName" name="StudentName" type= "text"  placeholder="Enter Your Name">
            
            
  
          
          </div>

          <div class="form-control ">
            <label for="fatherName" >Father Name</label>
            <input id="FatherName" name="FatherName" type= "text"  placeholder="Enter Father Name">
              
            
            
            </div>
            <div class="form-control radio ">
              <label for="gender" >Gender:</label>
              <span>
                <label for="male">
              <input id="male" value="male" name="gender" type= "radio" > Male
               
                </label>
             
              </span>

              <span>
                <label for="female">
              <input id="female" value="female" name="gender" type= "radio" > Female
               
                </label>
                
              </span>
              <span>
                <label for="other">
              <input type="radio"
              name="gender"
              value="o"
              id="others"> Other
                
                </label>
              
              </span>
              </div>
          <div class="form-control">
          <label for="address">Address</label>
          <input id="address"
          name="address" type= "text"  placeholder="Enter Address">
          </div>
          <div class="form-control">
            <label for="Phnumber">Phone Number</label>
            <input
              type="tel" placeholder="Enter Your Phone Number" id="Phnumber"
              name="Phnumber">
          
          </div>

          <input id="button"  type="submit">
          <?php
          
        session_start();
        $_SESSION['to_email'];
        $_SESSION['mobile'];
        
         ?>
          
        </form>
      </div>

      <script src="/app.js"></script>
    
</body>
</html>