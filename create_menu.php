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

        <button class="btn" type="submit">Save</button>

       

    </form>
</body>
</html>


