<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Produk</title>
    <!-- Link Bootstrap CSS -->
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
            padding: 0;
            font-family: 'Poppins', sans-serif;
        }

        body {
            background-color: var(--color-primary);
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }

        .container {
            width: 100%;
            max-width: 600px;
            padding: 30px;
            background-color: #ffffff;
            border-radius: 12px;
            box-shadow: 0 8px 16px rgba(150, 46, 42, 0.2);
            position: relative;
            overflow: hidden;
        }

        .container::before {
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

        h1 {
            text-align: center;
            color: var(--color-accent2);
            margin-bottom: 20px;
            font-weight: 600;
        }

        .form-control {
            border-radius: 20px;
            border: 1px solid var(--color-accent1);
            background-color: #fff;
            transition: all 0.3s ease;
        }

        .form-control:focus {
            border-color: var(--color-accent2);
            box-shadow: 0 0 0 0.2rem rgba(227, 134, 125, 0.25);
        }

        .btn-primary {
            border-radius: 20px;
            padding: 10px 20px;
            width: 100%;
            background-color: var(--color-accent1);
            border: none;
            transition: all 0.3s ease;
            color: white;
        }

        .btn-primary:hover {
            background-color: var(--color-accent2);
            transform: scale(1.02);
        }

        .text-muted {
            text-decoration: none;
            color: var(--color-accent2) !important;
        }

        .text-muted:hover {
            text-decoration: underline;
            opacity: 0.8;
        }

       
        @media (max-width: 480px) {
            .container {
                margin: 20px;
                width: calc(100% - 40px);
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Tambah Produk</h1>
        <div class="text-center mb-4">
            <a href="show.php" class="btn btn-primary">Lihat Data Produk</a>
        </div>
        <form action="./backend/create.php" method="post" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="name" class="form-label">Nama Produk</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Input nama produk" required>
            </div>
            <div class="mb-3">
                <label for="price" class="form-label">Harga Produk</label>
                <input type="number" class="form-control" id="price" name="price" placeholder="Input harga produk" required>
            </div>
            <div class="mb-3">
                <label for="image" class="form-label">Upload Gambar</label>
                <input class="form-control" type="file" id="image" name="image" required>
            </div>
            <div class="text-center">
                <input type="submit" class="btn btn-primary" value="Simpan" name="submit">
            </div>
        </form>
    </div>

    <!-- Link Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
</body>
</html>
