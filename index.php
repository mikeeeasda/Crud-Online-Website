<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
</head>
<body>
<div class="menu-container">
        <nav>
            <a href="index.php">Home</a>
           

            <!-- Dropdown Example -->
            <div class="dropdown">
                <a href="#">Website</a>
                <div class="dropdown-content">
                    <a href="Church_Management/index.php">Church Managemet</a></br>
                    <a href="crud/index.php">Hotel Reservation</a></br>
                    <a href="clothing/index.php">T-Shirt Clothing</a></br>
                    <a href="My Crud/home.php">JRP Clothing</a></br>
                    <a href="cake shop/index.php">Cake Shop</a></br>
                </div>
            </div>

            <a href="contact.php">Contact</a>
            <a href="about.php">About</a>
        </nav>
    </div>
    <div class="container">
        <div id="slide">
            <div class="item" style="background-image: url(1.jpg);">
                <div class="content">
                    <div class="name">Church Managemet</div>
                    <div class="des">anuary 28, 2022 - Find and compare top Church Management software on Capterra, with our free and interactive tool. Quickly browse through hundreds of Church Management tools and systems and narrow down your top choices. Filter by popular features, pricing options, number of users, and read reviews from real ...</div>
                   
                </div>
            </div>
            <div class="item" style="background-image: url(4.jpg);">
                <div class="content">
                    <div class="name">Hotel Reservation</div>
                    <div class="des">A hotel reservation system is the mechanism through which guests can create secure online reservations. While the process is similar to booking with an online travel agent (OTA), the difference is the hotel’s booking engine essentially links up to their own website so that there are no additional fees incurred for the property. </div>
                 
                </div>
            </div>
            <div class="item" style="background-image: url(3.jpg);">
                <div class="content">
                    <div class="name">T-Shirt Clothing</div>
                    <div class="des">The Seinfeld character was based on the real J. Peterman, who owns the J. Peterman Company, which started as a real catalog clothing company.</div>
                 
                </div>
            </div>
            <div class="item" style="background-image: url(2.jpg);">
                <div class="content">
                    <div class="name">JRP Clothing</div>
                    <div class="des"> JRP is your Canadian source for automotive excellence. We are an Automotive Aftermarket distributor committed to bringing you the greatest products the industry has to offer.</div>
               
                </div>
            </div>
            <div class="item" style="background-image: url(5.jpg);">
                <div class="content">
                    <div class="name">Cake Shop</div>
                    <div class="des">Cake Shop Bakery. Whether you are searching for a special birthday cake, or simply looking for a sweet ending to an everyday meal, The Cake Shop is sure to have something freshly ...</div>
                
                </div>
            
        </div>
        <div class="buttons">
            <button id="prev"><i class="fa-solid fa-angle-left"></i></button>
            <button id="next"><i class="fa-solid fa-angle-right"></i></button>
        </div>
    </div>

    <script src="script.js"></script>
</body>
</html>
  


<style>
        /* Reset some default styles */
        body, ul {
            margin: 0;
            padding: 0;
        }

        /* Style for the boxed container */
        .menu-container {
            background-color: #333;
            padding: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        /* Style for the navigation bar */
        nav {
            text-align: center;
        }

        /* Style for the navigation links */
        nav a {
            text-decoration: none;
            color: #fff;
            padding: 10px 20px;
            display: inline-block;
        }

        /* Change color on hover */
        nav a:hover {
            background-color: #555;
        }

        /* Style for the dropdown */
        .dropdown {
            position: relative;
            display: inline-block;
        }

        /* Style for the dropdown content */
        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #333;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
            z-index: 1;
        }

        /* Style for the dropdown links */
        .dropdown-content a {
            color: #fff;
            padding: 12px 16px;
            display: block;
            text-decoration: none;
        }

        /* Change color on hover */
        .dropdown-content a:hover {
            background-color: #555;
        }

        /* Show dropdown content on hover */
        .dropdown:hover .dropdown-content {
            display: block;
        }
    </style>