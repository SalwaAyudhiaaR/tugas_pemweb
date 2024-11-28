<?php 
session_start();
if (!isset($_SESSION['name'])) {
    header('Location: login.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <style>
        :root {
            --color-primary: #CEE6F2;   
            --color-secondary: #E9B796; 
            --color-accent1: #E3867D;   
            --color-accent2: #962E2A;   
        }

        html, body {
            height: 100%;
            margin: 0;
            font-family: 'Poppins', sans-serif;
            background-color: var(--color-primary);
        }

        .dashboard-wrapper {
            display: flex;
            flex-direction: column;
            min-height: 100vh;
            padding: 2rem 0;
        }

        .container {
            background-color: #ffffff;
            border-radius: 12px;
            box-shadow: 0 8px 16px rgba(150, 46, 42, 0.2);
            padding: 2rem;
            width: 100%;
            max-width: 1000px;
            margin: auto;
            flex-grow: 1;
        }

        .welcome-header {
            text-align: center;
            margin-bottom: 2rem;
        }

        .welcome-header h1 {
            color: var(--color-accent2);
            font-weight: 600;
            margin-bottom: 0.5rem;
        }

        .welcome-header p {
            color: #6c757d;
            font-size: 0.9rem;
        }

        .product-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
            gap: 1.5rem;
            margin-bottom: 2rem;
        }

        .product-card {
            border-radius: 10px;
            overflow: hidden;
            transition: all 0.3s ease;
            box-shadow: 0 4px 6px rgba(0,0,0,0.1);
        }

        .product-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 10px 20px rgba(0,0,0,0.15);
        }

        .product-img {
            width: 100%;
            height: 250px;
            object-fit: cover;
        }

        .product-details {
            padding: 1rem;
            background-color: #f8f9fa;
        }

        .product-name {
            font-weight: bold;
            color: #333;
            margin-bottom: 0.5rem;
        }

        .product-price {
            color: var(--color-accent2);
            font-size: 1.2rem;
        }

        .btn-logout {
            display: block;
            width: 100%;
            padding: 0.75rem;
            background-color: var(--color-accent1);
            color: white;
            border: none;
            border-radius: 50px;
            text-decoration: none;
            text-align: center;
            transition: background-color 0.3s ease;
        }

        .btn-logout:hover {
            background-color: var(--color-accent2);
        }

        @media (max-width: 768px) {
            .product-grid {
                grid-template-columns: 1fr 1fr;
            }
        }

        @media (max-width: 480px) {
            .product-grid {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>
<body>
    <div class="dashboard-wrapper">
        <div class="container">
            <div class="welcome-header">
                <h1>Selamat datang, <?php echo htmlspecialchars($_SESSION['name']); ?></h1>
                <p>Berikut adalah produk-produk yang tersedia</p>
            </div>
            
            <div class="product-grid">
                <?php
                require './config/db.php';
                $products = mysqli_query($db_connect, "SELECT * FROM products");

                while($product = mysqli_fetch_assoc($products)) {
                ?>
                    <div class="product-card">
                        <img src="../pertemuan-6/<?php echo htmlspecialchars($product['image']); ?>" class="product-img" alt="Produk">
                        <div class="product-details">
                            <div class="product-name"><?php echo htmlspecialchars($product['name']); ?></div>
                            <div class="product-price">Rp <?php echo number_format($product['price'], 0, ',', '.'); ?></div>
                        </div>
                    </div>
                <?php } ?>
            </div>

            <a href="./backend/logout.php" class="btn-logout">Logout</a>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
</body>
</html>