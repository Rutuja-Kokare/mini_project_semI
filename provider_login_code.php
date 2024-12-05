<?php 
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include 'connect.php';
    $providername = $_POST['providername'];
    $password = $_POST['password'];
    // Protect against SQL injection
    $providername = mysqli_real_escape_string($con, $providername);
    $password = mysqli_real_escape_string($con, $password);

    $sql = "SELECT * FROM prov_registration WHERE providername='$providername' AND password ='$password'";
    $result = $con->query($sql);

    if ($result->num_rows == 1) {
        // Redirect to homepage or wherever you want after successful login
        header("Location:provider_form.php");
        exit(); // Ensure that script execution stops after redirection
    } else {
        $login_msgerror = "Invalid providername and password";
    }

    $con->close();
}
?>
