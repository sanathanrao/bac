# Updated content for create_menu.php to include Veg/Non-Veg option
updated_create_menu_content = '''
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Menu Item</title>
</head>

<style>
   @import url('https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap');
    body {
    font-family: "Open Sans", sans-serif; 
  }
    .inpd{
        font-size: 20px;
    }
    form input{
        padding: 3px 20px;
        font-size: 20px;
    }
    form textarea{
        font-size: 20px;
    }
    .btn{
    padding: 10px 15px;
    margin-bottom: 20px;
    text-decoration: none;
    border-radius: 5px;
    }

</style>


<body>
    <h1 class="cnmi">Create New Menu Item</h1>
    <form action="save_menu.php" method="POST">
        <label class="inpd" for="name">Item Name:</label>
        <input type="text" name="name" required><br><br>

        <label class="inpd" for="price">Price:</label>
        <input type="number" step="0.01" name="price" required><br><br>

        <label class="inpd" for="description">Description:</label><br><br>
        <textarea name="description" required></textarea><br><br>

        <label class="inpd">Category:</label><br>
        <input type="radio" id="veg" name="category" value="veg" required>
        <label for="veg">Vegetarian</label><br>
        <input type="radio" id="non-veg" name="category" value="non-veg">
        <label for="non-veg">Non-Vegetarian</label><br><br>

        <button class="btn" type="submit">Save</button>
    </form>
</body>
</html>
'''

# Update list_menu.php to display veg/non-veg images
updated_list_menu_content = '''
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
}

.navbar {
  position: sticky;
  top: 0;
  width: 100%;
  background-color: #fff;
  display: flex;
  justify-content: flex-start;
  align-items: center;
  padding: 10px 20px;
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
  z-index: 1000;
}

.toggle-btn {
  color: #333;
}

.menu-container {
  margin: 20px;
}

.menu-item {
  padding: 20px;
  margin-bottom: 10px;
  background-color: #f1f1f1;
  display: flex;
  justify-content: space-between;
  align-items: center;
  border-radius: 5px;
}

.menu-name {
  font-size: 22px;
}

.menu-description {
  font-size: 16px;
}

.menu-price {
  font-weight: bold;
  color: #e74c3c;
}

.menu-image {
  width: 20px;
  height: 20px;
  margin-right: 10px;
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

    <h1>Menu Items</h1>

    <div class="menu-container">
        <a class="add-button" href="create_menu.php">Add New Item</a>

        <?php if ($result->num_rows > 0): ?>
            <?php while($row = $result->fetch_assoc()): ?>
                <div class="menu-item">
                    <div>
                        <img class="menu-image" src="<?php echo ($row['category'] == 'veg') ? 'veg.png' : 'non-veg.png'; ?>" alt="<?php echo $row['category']; ?>">
                        <div class="menu-name"><?php echo $row['name']; ?></div>
                        <div class="menu-description"><?php echo $row['description']; ?></div>
                    </div>
                    <div>
                        <span class="menu-price">₹<?php echo $row['price']; ?></span>
                        <form action="delete_menu.php" method="POST" style="display:inline;">
                            <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                            <button class="delete-button" type="submit">Delete</button>
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
'''

# Save the updated content back to the respective files
with open(file_create_menu_path, 'w') as file1:
    file1.write(updated_create_menu_content)

with open(file_list_menu_path, 'w') as file2:
    file2.write(updated_list_menu_content)

"Files updated successfully."
