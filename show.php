<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Produk</title>
    <!-- Link Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
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

        .container {
            margin-top: 50px;
        }

        .table img {
            max-width: 100px;
            height: auto;
        }

        .btn {
            margin: 0 2px;
        }

        .table th, .table td {
            vertical-align: middle;
        }

        /* Styling untuk Card */
        .card {
            border-radius: 12px;
            box-shadow: 0 8px 16px rgba(150, 46, 42, 0.2);
            background-color: #fff;
            border: 2px solid var(--color-accent1);
        }

        /* Tombol */
        .btn-primary, .btn-success, .btn-warning, .btn-danger {
            border-radius: 20px;
            padding: 10px 20px;
            transition: all 0.3s ease;
        }

        .btn-primary {
            background-color: var(--color-accent1);
            color: white;
        }

        .btn-primary:hover {
            background-color: var(--color-accent2);
            transform: scale(1.02);
        }

        .btn-success {
            background-color: #28a745;
            color: white;
        }

        .btn-success:hover {
            background-color: #218838;
        }

        .btn-warning {
            background-color: #ffc107;
            color: white;
        }

        .btn-warning:hover {
            background-color: #e0a800;
        }

        .btn-danger {
            background-color: #dc3545;
            color: white;
        }

        .btn-danger:hover {
            background-color: #c82333;
        }

        
        .table-dark th, .table-dark td {
            color: white;
            background-color: var(--color-accent2);
        }
    </style>
</head>
<body>
    <div class="container">
        <!-- Card untuk Daftar Produk -->
        <div class="card mb-4">
            <div class="card-body">
                <h1 class="text-center" style="color: var(--color-accent2); margin-bottom: 20px;">Data Produk</h1>
                <div class="text-end mb-3">
                    <a href="create.php" class="btn btn-primary">Tambah Produk</a>
                </div>
                <!-- Tabel Produk -->
                <table class="table table-bordered table-striped text-center align-middle">
                    <thead class="table-dark">
                        <tr>
                            <th>#</th>
                            <th>Nama Produk</th>
                            <th>Harga</th>
                            <th>Gambar Produk</th>
                            <th>Opsi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            require './config/db.php';

                            // Query produk
                            $products = mysqli_query($db_connect, "SELECT * FROM products");
                            $no = 1;

                            // Loop untuk menampilkan data produk
                            while ($row = mysqli_fetch_assoc($products)) {
                        ?>
                        <tr>
                            <td><?= $no++; ?></td>
                            <td><?= htmlspecialchars($row['name']); ?></td>
                            <td>Rp <?= number_format($row['price'], 0, ',', '.'); ?></td>
                            <td>
                                <a href="../pertemuan-6/<?= htmlspecialchars($row['image']); ?>" target="_blank" class="btn btn-primary btn-sm">Unduh</a>
                            </td>
                            <td>
                                <a href="edit.php?id=<?= $row['id']; ?>" class="btn btn-warning btn-sm">Edit</a>
                                <a href="delete.php?id=<?= $row['id']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus produk ini?')">Hapus</a>
                            </td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- Link Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
</body>
</html>