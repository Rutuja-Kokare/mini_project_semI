<?php
include 'login.php';
session_start();
if (!isset($_SESSION['loggedin']) ) { 
    header("Location:SeparateLogin.php");
    exit;
} 
include 'question_phpcode.php';
if (!isset($_SESSION['questionnaire_completed']) ){
    header("Location: questionaire.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adoption category</title>
    <link rel="stylesheet" href="adoption-category.css">
</head>
<body>  
    <div class="navbar">
        <div class="icon">
            <h2 class="logo"></h2>
            <div class="content">
                <h1>              
                    PAW
                     <a href="#"><ion-icon name="paw-sharp"></ion-icon></a>
                    <span >sitive</span>ALLY
                </h1>
                </div>
        </div>
        <div class="menu">
            <ul>
                
                <li><a href="homepage.php">HOME</a></li>
                <li><a href="ContactUs.php">CONTACT</a></li>
            </ul>
        </div>
    </div>
    <h1 style="text-align: center;">Adopt Pet</h1>
    <form action="">
        <input type="text" id="search-input" placeholder="search for animal">
        <button id="search">Search</button>
    </form>
   <h1 class="cat-h1"> <a href="">Cats</a></h1>
    <div class="search-results">      
    <?php
       include 'connect.php'; // Include the database connection file
     // Fetching data from the database
     $sql = "SELECT pet_breed, pet_image FROM cat_prov ORDER BY RAND() LIMIT 3"; // Selecting pet breed and image path from the pet_donations table
    $result = $con->query($sql);
    if ($result->num_rows > 0) {
    // Output data of each row
    while ($row = $result->fetch_assoc()) {
        echo '<div class="search-result">';
        echo '<img src="' . $row["pet_image"] . '" alt="">';
        echo '<a href="catbreed.php#' . $row["pet_breed"] . '" target="_self">' . $row["pet_breed"] . '</a>';
        echo '</div>';
    }
    }  else {
    echo "No pet donations found.";
   }
   echo '<h1 class="cat-h1"> <a href="">Dogs</a></h1>';

    $sql = "SELECT pet_breed, pet_image FROM dog_prov ORDER BY RAND() LIMIT 3"; // Selecting pet breed and image path from the pet_donations table
    $result = $con->query($sql);

    if ($result->num_rows > 0) {
    // Output data of each row
    while ($row = $result->fetch_assoc()) {
        echo '<div class="search-result">';
        echo '<img src="' . $row["pet_image"] . '" alt="">';
        echo '<a href="dogbreed.php#' . $row["pet_breed"] . '" target="_self">' . $row["pet_breed"] . '</a>';
        echo '</div>';
    }
    } else {
    echo "No pet donations found.";
    }
    $con->close();
    ?>
    </div>
    <section class="contact-info">
        <h2>Contact Information</h2>
        <address>
            PAWsitiveALLY<br><br>
            123 Main Street<br><br>
            Karad,415110<br><br>
            Phone: <a href="tel:1234567890">123-456-7890</a><br><br>
            Email: <a href="mailto:info@example.com">pawsitiveallyinfo@example.com</a><br>
        </address>
    </section>
    <footer>
        <p>© 2023 Your Company. All rights reserved.</p>
    </footer>
    <script src="youtube.js"></script>
    <script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>
     <script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>
</body>
</html>