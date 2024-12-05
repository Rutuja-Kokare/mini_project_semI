<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .dropbtn {
            background-color: #4CAF50;
            color: white;
            padding: 16px;
            font-size: 16px;
            border: none;
            cursor: pointer;
            border-radius: 4px;
        }

        /* Dropdown Button on Hover & Focus */
        .dropbtn:hover, .dropbtn:focus {
            background-color: #45a049;
        }
        .dropdown {
            position: relative;
            display: inline-block;
        }

        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #f9f9f9;
            min-width: 160px;
            box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
            z-index: 1;
        }

        .dropdown-content a {
            color: black;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
        }

        .dropdown-content a:hover {
            background-color: #f1f1f1;
        }

        .dropdown:hover .dropdown-content {
            display: block;
        }
    </style>
</head>
<body>
<h1 style="text-align: center;">Report</h1>
<div class="dropdown">
    <button class="dropbtn">Registration Report</button>
    <div class="dropdown-content">
        <a href="report_login.php">User</a>
        <a href="report_ad_login.php">Admin</a>
        <a href="report_prov_login.php">Provider</a>
    </div>
</div>
<div class="dropdown">
    <button class="dropbtn">Pet Details</button>
    <div class="dropdown-content">
        <a href="report_cat_data.php">Cat Details</a>
        <a href="report_dog_data.php">Dog Details</a>
    </div>
</div>
<div class="dropdown">
    <button class="dropbtn">Order Details</button>
    <div class="dropdown-content">
        <a href="report_cat_order_manage.php">Cat Orders</a>
        <a href="report_dog_order_manage.php">Dog Orders</a>
    </div>
</div>
<div class="dropdown">
    <button class="dropbtn">Provider Details</button>
    <div class="dropdown-content">
        <a href="report_cat_provider.php">Cat Provider</a>
        <a href="report_dog_provider.php">Dog Provider</a>
    </div>
</div>

<script>
    window.onclick = function(event) {
        if (!event.target.matches('.dropbtn')) {
            var dropdowns = document.getElementsByClassName("dropdown-content");
            var i;
            for (i = 0; i < dropdowns.length; i++) {
                var openDropdown = dropdowns[i];
                if (openDropdown.style.display === "block") {
                    openDropdown.style.display = "none";
                }
            }
        }
    }
</script>
</body>
</html>
