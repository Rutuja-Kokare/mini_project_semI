<!DOCTYPE html>
<html lang="en">
<head>
    <title>Homepage</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="main">
        <div class="navbar">
            <div class="icon">
                <h2 class="logo"></h2>
            </div>
            <div class="menu">
                <ul>
                    </li>
                    <li><a href="disease.php">DISEASE</a></li>
                    <li><a href="adoptionhomepage.php">ADOPT</a></li>
                    <li><a href="ContactUs.php">CONTACT</a></li>
                    <li><a href="about.php">ABOUT</a></li>
                     <li><a href="report.php">REPORT</a></li>                    
                     <?php
                        session_start();
                        if(isset($_SESSION['loggedin'])) {
                            echo '<li><a href="logout.php">LOGOUT</a></li>';
                        } else {
                            echo '<li><a href="SeparateLogin.php">LOGIN</a></li>';
                        }
                    ?>                      
                        <a href="adminLogIn.php" class="search"> <button class="btn">ADMIN LOGIN</button></a>
                        <!-- <a href="SeparateLogin.php"> <button class="btn">User LOGIN</button></a> -->
                   
                </ul>
            </div>
        </div>
        <div class="content">
            <h1>
                PAW
                <a href="#"><ion-icon name="paw-sharp"></ion-icon></a>
                <span>sitive</span>ALLY
            </h1>
            <p class="par">Are you ready to make a profound difference in the life of a furry friend? Consider animal adoption <br> as your gateway to unconditional love and companionship. Every year, countless animals find <br>  themselves in shelters, yearning for a forever home. By choosing to adopt, you're not just gaining <br> a pet; you're providing a second chance at happiness for a deserving creature. From playful puppies <br> and affectionate kittens to seasoned seniors seeking warmth and care, there's a companion waiting for you.
            </p>
            <button class="cn"><a href="#">JOIN US</a></button>           
        </div>
    </div>
    </div>
    </div>
    <script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>
</body>

</html>