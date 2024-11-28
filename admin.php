<?php 
session_start();
// Memeriksa apakah peran session 'role' adalah 'admin', dan menghancurkan session jika benar
if(isset($_SESSION['role']) && $_SESSION['role'] == 'admin'){
    session_destroy();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Administrator</title>
    <!-- Link ke Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Link Google Font Poppins -->
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
            padding: 0;
        }

        body {
            background-color: var(--color-primary);
            font-family: 'Poppins', sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }

        .login-container {
            width: 100%;
            max-width: 600px;
            padding: 30px;
            background-color: #ffffff;
            border-radius: 12px;
            box-shadow: 0 8px 16px rgba(150, 46, 42, 0.2);
            transition: transform 0.3s;
            border: 2px solid var(--color-accent1);
            position: relative;
            overflow: hidden;
        }

        .login-container::before {
            content: '';
            position: absolute;
            top: -10px;
            left: -10px;
            right: -10px;
            bottom: -10px;
            background: linear-gradient(45deg, var(--color-primary), var(--color-secondary));
            z-index: -1;
            opacity: 0.2;
            border-radius: 15px;
        }

        .login-container:hover {
            transform: translateY(-5px);
            box-shadow: 0 12px 20px rgba(150, 46, 42, 0.3);
        }

        h1 {
            text-align: center;
            color: var(--color-accent2);
            margin-bottom: 20px;
            font-weight: 600;
        }

        .btn-tambah-produk {
            border-radius: 20px;
            padding: 10px 20px;
            width: 100%;
            background-color: var(--color-accent1);
            border: none;
            transition: all 0.3s ease;
            color: white;
            text-decoration: none;
            display: inline-block;
            text-align: center;
            margin-bottom: 15px; /* Menambahkan jarak antara tombol */
        }

        .btn-tambah-produk:hover {
            background-color: var(--color-accent2);
            transform: scale(1.02);
            color: white;
        }

        .btn-logout {
            border-radius: 20px;
            padding: 10px 20px;
            width: 100%;
            background-color: var(--color-accent1);
            border: none;
            transition: all 0.3s ease;
            color: white;
            text-decoration: none;
            display: inline-block;
            text-align: center;
        }

        .btn-logout:hover {
            background-color: var(--color-accent2);
            transform: scale(1.02);
            color: white;
        }

        /* Responsiveness */
        @media (max-width: 480px) {
            .login-container {
                margin: 20px;
                width: calc(100% - 40px);
            }
        }
    </style>
</head>
<body>

    <div class="login-container">
        <h1>Selamat datang Administrator, <?php echo htmlspecialchars($_SESSION['name']); ?></h1>
        <!-- Tombol Tambah Produk -->
        <a href="create.php" class="btn-tambah-produk">Tambah Produk</a>

        <!-- Tombol Logout -->
        <a href="./backend/logout.php" class ="btn-logout">Logout</a>
    </div>

    <!-- Link ke Bootstrap JS dan dependencies -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>

</body>
</html>