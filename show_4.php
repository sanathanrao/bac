<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List Menu add</title>
</head>

<style>
    * {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

body {
  font-family: Arial, sans-serif;
  padding: 0;
  margin: 0;
  /* height: 2000px; For scrolling demo */
}

/* Main horizontal navbar */
.navbar {
  position: sticky;
  top: 0;
  width: 100%;
  background-color: #fff;
  display: flex;
  justify-content: flex-start;
  align-items: center;
  padding: 10px 20px;
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Box shadow for a nice look */
  z-index: 1000;
}

/* Toggle button */
.toggle-btn {
  color: #000;
  font-size: 30px;
  cursor: pointer;
}

/* Logo on the right */
.logo {
  color: white;
  width: 40px;
  height: 40px;
  margin-left: 10px;
}
.srfe{
  margin-left: 10px;
}
/* ----------------------------- */
.lgnae{
  display: flex;
  align-items: center;
  padding-bottom: 10px;
  border-bottom: 1px solid #eaeaea;
}
/* Side navigation (initially hidden) */
.side-nav {
  font-family: "Open Sans", sans-serif;
  height: 100%;
  width: 0;
  position: fixed;
  top: 0;
  left: 0;
  background-color: #fff;
  overflow-x: hidden;
  transition: 0.5s;
  padding-top: 10px; /* Push content below the sticky navbar */
  z-index: 1500;
}
.hdm{
  font-weight: 600;
  padding: 10px 15px;
}

.listfoodes{
 font-weight: 500;
 padding-top: 10px;
 padding-left: 30px;
 padding-bottom: 6px;
 letter-spacing: .7px;
}

.side-nav a {
  font-family: "Open Sans", sans-serif;
  text-decoration: none;
  font-size: 18px;
  color: #000;
  display: block;
  transition: 0.3s;
  display: flex;
  align-items: center;
}


/* Close button for side menu */
.side-nav .close-btn {
  position: absolute;
  top: 10px;
  right: 20px;
  font-size: 36px;
  cursor: pointer;
  color: white;
}

/* Overlay when side nav is open */
.overlay {
  display: none;
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background-color: rgba(0, 0, 0, 0.5);
  z-index: 1000;
}
/* ----------------------------------------------------------------------------------- */
.image-row {
    display: flex;
    justify-content: center; 
    gap: 10px; /* Adds space between images */
    overflow-x: hidden; /* No scrolling on larger screens */
    margin: 20px 0;
    padding: 10px;
    max-width: 100%;
    text-align: center;
}
.image-row a{
    text-decoration: none;
}
.smrdc{
    font-family: "Open Sans", sans-serif;
    color: #000;
    letter-spacing: 1px;
    font-weight: 500;
}
/* Style for each image */
.menu-image {
    border-radius: 5px;
    border: 1px solid #fff;
    width: 80px; /* Fixed width */
    height: 80px; /* Fixed height */
    cursor: pointer;
    transition: transform 0.3s ease, filter 0.3s ease; /* Transition for zoom and blur */
    flex-shrink: 0; /* Prevents image from shrinking */
    object-fit: cover; /* Ensures images fit within the size without distortion */
}

/* Blur effect for unselected images */
.image-blur {
    filter: blur(3px); /* Apply blur to unselected images */
    opacity: 0.6; /* Make unselected images slightly transparent */
}

/* Highlight effect for the selected image */
.image-highlight {
    transform: scale(1.2); /* Make the clicked image larger */
    filter: none; /* Remove any blur from the selected image */
    opacity: 1; /* Full opacity for selected image */
}

/* Enable scrolling with small images on small screens */
@media (max-width: 768px) {
    .image-row {
        overflow-x: auto; /* Enable horizontal scroll */
        flex-wrap: nowrap; /* Prevent wrapping of images */
        scroll-behavior: smooth; /* Smooth scrolling */
        -webkit-overflow-scrolling: touch; /* Smooth scroll on iOS */
    }

    .menu-image {
        width: 80px; /* Fixed width for small screens */
        height: 80px; /* Fixed height for small screens */
    }
}
@media screen and (max-width: 500px){
    .image-row{
        justify-content: flex-start;
    }
}

</style>

<body>
     <!-- ------------------------------------------ -->
   <!-- Main Navbar -->
   <div class="navbar">
    <span class="toggle-btn" onclick="toggleSideNav()">☰</span>
    <img class="logo" src="images/poifis1.png" alt="">
</div>

<!-- Side Navigation -->
<div id="sideNav" class="side-nav">
  <div class="lgnae">
    <a href="index.php">
     <img class="logo" src="images/poifis1.png" alt="">
     <h3 class="srfe">Sorshe</h3>
  </a>
  </div>
    <a class="hdm" href="./index.php">Home</a>
    <a class="hdm" href="show_1.php">Digital Menu</a>
    <a href="show_1.php"><h4 class="listfoodes">Stater</h4></a>
    <a href="show_2.php"><h4 class="listfoodes">Main Course</h4></a>
    <a href="show_3.php"><h4 class="listfoodes">Rice</h4></a>
    <a href="show_4.php"><h4 class="listfoodes">Desserts</h4></a>
    <a href="show_5.php"><h4 class="listfoodes">Combos</h4></a>
    <a href="show_6.php"><h4 class="listfoodes">Beverages</h4></a>
</div>
<!-- --------------------------------------------------- -->

<div class="image-row">
        <a href="show_1.php">
            <h4 class="smrdc">Stater</h4>  
            <img src="gallery/DSC00475.JPG" alt="Image 1" class="menu-image">
        </a>
        <a href="show_2.php">
            <h4 class="smrdc">MainCourse</h4>
            <img src="gallery/DSC00489.JPG" alt="Image 2" class="menu-image">
        </a>
        <a href="show_3.php">
            <h4 class="smrdc">Rice</h4>
            <img src="gallery/basanti.jpg" alt="Image 3" class="menu-image">
        </a>
        <a href="show_4.php">
            <h4 class="smrdc">Desserts</h4>
            <img src="gallery/dsco1.png" alt="Image 4" class="menu-image">
        </a>
        <a href="show_5.php">
            <h4 class="smrdc">Combos</h4>
            <img src="gallery/DSC00464.JPG" alt="Image 5" class="menu-image">
        </a>
        <a href="show_6.php">
            <h4 class="smrdc">Beverages</h4>
            <img src="gallery/DSC00415.JPG" alt="Image 5" class="menu-image">
        </a>
    </div>
<!-- --------------------------------------------------- -->
 
<script src="script.js"></script>
</body>
</html>


















<?php
$servername = "localhost";
$username = "root";
$password = "";  // Empty password
$dbname = "menu_db";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT id, name, price, description FROM menu_items";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu List</title>
    <style>
         @import url('https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap');
        body {
          font-family: "Open Sans", sans-serif;
          background-color: #f4f4f9;
       }

        h1 {
            text-align: center;
            color: #333;
        }
       
        .menu-container {
            max-width: 600px;
            margin: 0 auto;
            background-color: #f9fafb;
            padding: 15px;
            /* border-radius: 10px; */
            /* box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1); */
        }

        .menu-item {
            display: flex;
            justify-content: space-between;
            /* align-items: center; */
            padding: 10px 0;
        }

        /* .menu-item:hover {
            background-color: #f1f1f1;
        } */

        .menu-name {
            font-weight: 500;
            font-size: 18px;
            display: flex;
            align-items: center;
            
        }

        .menu-description {
            font-size: 16px;
            color: #8e8e8e;
        }

        .menu-price {
            font-weight: 500;
            color: #e74c3c;
        }

        .delete-button {
            background-color: #e74c3c;
            color: white;
            border: none;
            padding: 8px 12px;
            border-radius: 5px;
            cursor: pointer;
        }

        .delete-button:hover {
            background-color: #c0392b;
        }

        .add-button {
            display: inline-block;
            padding: 10px 15px;
            margin-bottom: 20px;
            background-color: #2ecc71;
            color: white;
            text-decoration: none;
            border-radius: 5px;
        }

        .add-button:hover {
            background-color: #27ae60;
        }

        a {
            text-decoration: none;
            color: white;
        }
    </style>
</head>
<body>

    <!-- <h1>Menu Items</h1> -->
    <!-- <h2 class="stat">STARTER</h2> -->
    <div class="menu-container">
    <h2 class="stat">STARTER</h2>
        <!-- <a class="add-button" href="create_menu.php">Add New Item</a> -->

        <?php if ($result->num_rows > 0): ?>
            <?php while($row = $result->fetch_assoc()): ?>
                <div class="menu-item">
                    <div>
                   <?php  $veg_icon_path = "./images/greenveg.png"; ?>
                   <?php  $non_veg_icon_path = "./images/nonvegtri.png"; ?>



                <?php   echo '<ul>'; ?>
                        <div class="menu-name"> <?php echo '<img src="' . $non_veg_icon_path . '" alt="Veg Icon" style="width: 16px; height: 16px; margin-right: 10px;"> ' . $row['name']; ?></div>

                        <div class="menu-description"><?php echo $row['description']; ?></div>
                    </div>
                    <div>
                        <span class="menu-price">₹<?php echo $row['price']; ?></span>
                        <form action="delete_menu.php" method="POST" style="display:inline;">
                            <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                            <!-- <button class="delete-button" type="submit">Delete</button> -->
                        </form>
                    </div>
                </div>
            <?php endwhile; ?>
        <?php else: ?>
            <p>No menu items found.</p>
        <?php endif; ?>

    </div>

<?php
$conn->close();
?>
</body>
</html>
