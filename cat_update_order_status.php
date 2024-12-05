<?php
include 'connect.php';
if(isset($_POST['update_status'])) 
 {
    $orderId = $_POST['orderId'];
    $new_status = $_POST['new_status'];
 $sql = "UPDATE adopt_orders SET status='$new_status' WHERE orderId=$orderId";
 if ($con->query($sql) === TRUE) {
    } else {
        echo "Error updating order status: " . $con->error;
    }
}
$con->close();
?>
