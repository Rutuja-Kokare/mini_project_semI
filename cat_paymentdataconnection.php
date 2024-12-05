<?php
include 'connect.php';
if(isset($_POST['submit'])) {
    // Retrieve form data
    $userName = $_POST['userName'];
    $userEmail = $_POST['userEmail'];
    $shippingAddress = $_POST['shippingAddress'];
    $permanentAddress = $_POST['permanentAddress'];
    $city = $_POST['city'];
    $pincode = $_POST['pincode'];
    $catId = $_POST['catId'];
    $catName = $_POST['catName'];
    $catPrice = $_POST['catPrice'];
   $sql = "INSERT INTO adopt_orders (userName, userEmail, shippingAddress, permanentAddress, city, pincode, catId, catName, catPrice)
            VALUES ('$userName', '$userEmail', '$shippingAddress', '$permanentAddress', '$city', '$pincode', '$catId', '$catName', '$catPrice')";
   
   if ($con->query($sql) === TRUE) {
        // echo "Order placed successfully!";
        $adopted_pet_id=$_POST['catId'];
        $sql_delete="DELETE FROM cat_prov where id=$adopted_pet_id";
        if($con->query($sql_delete)==TRUE){
            echo "deleted successfully";      
        }
        else{
            echo "error";
        }
        header("Location: order_confirmation.php?userName=$userName&userEmail=$userEmail&shippingAddress=$shippingAddress&permanentAddress=$permanentAddress&city=$city&pincode=$pincode&catId=$catId&catName=$catName&catPrice=$catPrice");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
$con->close();
?>
