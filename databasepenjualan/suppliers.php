<?php
// Include the database connection
include "koneksi.php";

// Initialize the counter variable
$no = 1; // Start from 1
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Suppliers - Database Penjualan CRUD</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>
<body>
    <div class="container">
        <h1>Database Penjualan CRUD</h1>
        <div class="nav mb-4">
            <a href="products.php" class="btn btn-outline-primary">Products</a>
            <a href="customers.php" class="btn btn-outline-primary">Customers</a>
            <a href="employees.php" class="btn btn-outline-primary">Employees</a>
            <a href="orders.php" class="btn btn-outline-primary">Orders</a>
            <a href="suppliers.php" class="btn btn-outline-primary">Suppliers</a>
        </div>

        <div class="table-container">
            <h2>Suppliers</h2>
            <a href="add_supplier.php" class="btn btn-primary mb-4">Add Supplier</a>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Supplier ID</th>
                        <th>Supplier Name</th>
                        <th>Job</th>
                        <th>Company</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    // Fetch data from the database
                    $ambildata = mysqli_query($koneksi, "SELECT * FROM suppliers");
                    
                    // Check if the query was successful
                    if (!$ambildata) {
                        die("Query failed: " . mysqli_error($koneksi));
                    }

                    while ($tampil = mysqli_fetch_array($ambildata)) {
                        echo "
                        <tr>
                            <td>{$tampil['id']}</td>
                            <td>{$tampil['first_name']}</td>
                            <td>{$tampil['job_title']}</td>
                            <td>{$tampil['company']}</td>
                            <td>
                                <a href='edit_supplier.php?id={$tampil['id']}' class='btn btn-warning btn-sm'>Edit</a>
                                <a href='delete_supplier.php?id={$tampil['id']}' class='btn btn-danger btn-sm'>Delete</a>
                            </td>
                        </tr>";
                        $no++;
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>