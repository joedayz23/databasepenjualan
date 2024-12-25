<?php
// This is the beginning of your PHP file
// You can include your connection or any other PHP code here if needed
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Database Penjualan CRUD</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }
        .container {
            width: 90%;
            margin: 0 auto;
            padding: 20px;
        }
        h1 {
            text-align: center;
            margin-bottom: 20px;
        }
        .nav {
            display: flex;
            justify-content: center;
            margin-bottom: 20px;
        }
        .nav a {
            margin: 0 10px;
            padding: 10px 20px;
            background-color: #4CAF50;
            color: white;
            text-decoration: none;
            border-radius: 4px;
        }
        .nav a:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Database Penjualan CRUD</h1>
        <div class="nav">
            <a href="products.php">Products</a>
            <a href="customers.php">Customers</a>
            <a href="employees.php">Employees</a>
            <a href="orders.php">Orders</a>
            <a href="suppliers.php">Suppliers</a>
        </div>
    </div>
</body>
</html>