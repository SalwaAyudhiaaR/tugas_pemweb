<?php
require './config/db.php';

// Mendapatkan ID produk dari parameter URL
$id = $_GET['id'];

// Ambil data produk berdasarkan ID
$product = mysqli_query($db_connect, "SELECT * FROM products WHERE id = $id");
$row = mysqli_fetch_assoc($product);

if (isset($_POST['update'])) {
    $name = $_POST['name'];
    $price = $_POST['price'];
    $image = $_POST['image']; // Jika ingin mengubah gambar juga

    // Update data produk
    mysqli_query($db_connect, "UPDATE products SET name='$name', price='$price', image='$image' WHERE id=$id");

    // Redirect ke halaman data produk
    header("Location: show.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Produk</title>
    <!-- Link Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <style>
        :root {
            --color-primary: #CEE6F2;   
            --color-secondary: #E9B796; 
            --color-accent1: #E3867D;   
            --color-accent2: #962E2A;   
        }

        body {
            background-color: var(--color-primary);
            font-family: 'Poppins', sans-serif;
        }

        .form-container {
            margin-top: 50px;
            background: white;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 8px 16px rgba(150, 46, 42, 0.2);
        }

        .btn {
            margin-top: 10px;
        }

        .btn-success {
            background-color: var(--color-accent1);
            color: white;
        }

        .btn-success:hover {
            background-color: var(--color-accent2);
            transform: scale(1.02);
        }

        .btn-secondary {
            background-color: #6c757d;
            color: white;
        }

        .btn-secondary:hover {
            background-color: #5a6268;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6 col-md-8 col-sm-10 form-container">
                <h1 class="text-center" style="color: var(--color-accent2); margin-bottom: 20px;">Edit Produk</h1>
                <form method="post">
                    <div class="mb-3">
                        <label for="name" class="form-label">Nama Produk:</label>
                        <input type="text" class="form-control" id="name" name="name" value="<?= htmlspecialchars($row['name']); ?>" required>
                    </div>
                    <div class="mb-3">
                        <label for="price" class="form-label">Harga:</label>
                        <input type="number" class="form-control" id="price" name="price" value="<?= htmlspecialchars($row['price']); ?>" required>
                    </div>
                    <div class="mb-3">
                        <label for="image" class="form-label">Gambar URL:</label>
                        <input type="text" class="form-control" id="image" name="image" value="<?= htmlspecialchars($row['image']); ?>">
                    </div>
                    <button type="submit" name="update" class="btn btn-success w-100">Update</button>
                </form>
                <a href="show.php" class="btn btn-secondary w-100 mt-3">Kembali ke Data Produk</a>
            </div>
        </div>
    </div>
    <!-- Link Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>