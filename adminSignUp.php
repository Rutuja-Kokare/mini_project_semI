<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include 'connect.php';
    $adminname = $_POST['adminname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];
    $stmt = $con->prepare("SELECT * FROM adregistration WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();
    if ($result->num_rows > 0) {
        $email_error = "email already exists";  
    } 
    else if (strlen($password) < 6) {
        $password_error = "enter at least 6 characters";      
    }
    else if ($password != $confirm_password) {
        $conpassword_error = "password doesnt match";      
    }
  else{
    $sql = "INSERT INTO adregistration (adminname, email, password) VALUES ('$adminname', '$email', '$confirm_password')";
    if ($con->query($sql) === TRUE) {
        $regis_success="sign up successfully";
    } else {
         $regis_error="invalid input";
    }
  }
    $con->close();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="registration.css">
    <title>Document</title>
</head>
<body>    
   <div class="content">
    <div class="icon">
        <h2 class="logo"></h2>
    </div>
    <h1>
    PAW<span>
    <a href="#"><ion-icon name="paw-sharp"></ion-icon></a>
    sitive</span>ALLY</h1>
   </div>
       <form action="adminSignUp.php" method="post">
       <div class="form">
           <h2>Admin Sign Up </h2>
           <input type="name" name="adminname" placeholder="Enter admin name">
           <input type="email" name="email" placeholder="Enter E-mail">
           <?php if (isset($email_error)): ?>
                <span style="color: white;"><?php echo $email_error; ?></span>
          <?php endif ?>
           <input type="password" name="password" placeholder="Create Password">
           <?php if (isset($password_error)): ?>
                <span style="color: white;"><?php echo $password_error; ?></span>
          <?php endif ?>
           <input type="password" name="confirm_password" placeholder="Confirm Password">
           <?php if (isset($conpassword_error)): ?>
                <span style="color: white;"><?php echo $conpassword_error; ?></span>
          <?php endif ?>
           <button class="btnn"><a href="#">Sign Up</a></button>
           <br>
           <?php if (isset($regis_success)): ?>
                <span style="color: white;"><?php header("Location:homepage.php"); ?></span>
          <?php endif ?>
          <?php if (isset($regis_error)): ?>
                <span style="color: white;"><?php echo $regis_error; ?></span>
          <?php endif ?>
           <p class="link">Already have an account?<br>
               <a href="adminLogIn.php">Log In</a> here</a>
           </p>
       </div>  
       </form>
        <script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>
</body>
</html>