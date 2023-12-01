<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="">
  <title></title>
  <script src="js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="style3.css">
  <style>
    body{
    background-image: url('iso.jpg');
    background-repeat: no-repeat;
    background-attachment: fixed; 
    background-size: 100% 100%;
    background-position: bottom;
    background-color: white;
}
    .accordion {
      background-color: #f7f7f7;
      border: 1px solid #ddd;
      border-radius: 4px;
      margin-bottom: 12px;
    }
    
    .accordion .accordion-title {
      background-color: #eee;
      color: #333;
      cursor: pointer;
      padding: 10px;
      font-weight: bold;
    }
    
    /* Accordion content */
    .accordion .accordion-content {
      padding: 10px;
      display: none;
    }
  </style>
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
  <header>
    <h1 style="margin-top: 30px; margin-left: 50px; margin-bottom: 30px; font-size: 80px;">Our<code>{Websites}</code>
    </h1>
  </header>
  <div class="accordion" style="width: 60%; margin-left: 200px; margin-top: 80px; ">

    <div class="accordion-title" onclick="toggleAccordion(1)">Church Management</div>
    <div class="accordion-content">
      <p>
A Church Management System (CMS), can enhance efficiency, improve communication, and contribute to the overall organization and effectiveness of a religious institution. These systems are tailored to meet the specific needs of churches and provide a centralized platform for managing various aspects of church administration.
</p>
    </div>
  </div>
  
  <div class="accordion" style="width: 60%; margin-left: 200px; margin-top: 20px; ">
    <div class="accordion-title" onclick="toggleAccordion(2)">Hotel Reservation</div>
    <div class="accordion-content">
      <p>A hotel reservation system is the mechanism through which guests can create secure online reservations. While the process is similar to booking with an online travel agent (OTA), the difference is the hotel’s booking engine essentially links up to their own website so that there are no additional fees incurred for the property.</p>
    </div>
  </div>
  
  <div class="accordion"style="width: 60%; margin-left: 200px; margin-top: 20px;">
    <div class="accordion-title" onclick="toggleAccordion(3)">T-shirt Clothing</div>
    <div class="accordion-content">
      <p>It refers to items worn on the body, typically made of fabric, designed to cover, protect, or adorn oneself. It includes garments such as shirts, pants, dresses, and accessories like hats, scarves, and gloves. Clothing serves both functional and aesthetic purposes, reflecting cultural, social, and personal identities.</p>
    </div>
  </div>
  
  <div class="accordion"style="width: 60%; margin-left: 200px; margin-top: 20px;">
    
    <div class="accordion-title" onclick="toggleAccordion(4)">JRP Clothing</div>
    <div class="accordion-content">
      <p>JRP clothing, Launching and managing a clothing line involves various aspects, including design, production, marketing, and distribution. Successful clothing lines are often characterized by a strong brand image, consistency in design and quality, and effective marketing strategies that connect with their intended customer base.





</p>
    </div>
  </div>
  
  <div class="accordion"style="width: 60%; margin-left: 200px; margin-top: 20px;">
    
    <div class="accordion-title" onclick="toggleAccordion(5)">Cake Shop</div>
    <div class="accordion-content">
      <p>Cake Shop is an establishment that produces and sells flour-based food baked in an oven such as bread, cookies, cakes, doughnuts, bagels, pastries, and pies. Some retail bakeries are also categorized as cafés, serving coffee and tea to customers who wish to consume the baked goods on the premises. Confectionery items are also made in most bakeries throughout the world.</p>
    </div>
  </div>
  
  <script>
    function toggleAccordion(index) {
      var accordionContent = document.getElementsByClassName("accordion-content");
      accordionContent[index-1].style.display = accordionContent[index-1].style.display === "block" ? "none" : "block";
    }
  </script>
</body>
</html>
