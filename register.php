<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrasi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
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

        .register-container {
            width: 100%;
            max-width: 400px;
            padding: 30px;
            background-color: #ffffff;
            border-radius: 12px;
            box-shadow: 0 8px 16px rgba(150, 46, 42, 0.2);
            transition: transform 0.3s;
            border: 2px solid var(--color-accent1);
            position: relative;
            overflow: hidden;
        }

        .register-container::before {
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

        .register-container:hover {
            transform: translateY(-5px);
            box-shadow: 0 12px 20px rgba(150, 46, 42, 0.3);
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
        }

        .btn-primary:hover {
            background-color: var(--color-accent2);
            transform: scale(1.02);
        }

        .form-group {
            margin-bottom: 1.5rem;
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
            .register-container {
                margin: 20px;
                width: calc(100% - 40px);
            }
        }
    </style>
</head>
<body>
    <div class="register-container">
        <h1>Registrasi</h1>
        <form action="./backend/register.php" method="post">
            <div class="form-group">
                <input type="text" name="name" class="form-control" placeholder="Masukkan nama Anda" required>
            </div>
            <div class="form-group">
                <input type="email" name="email" class="form-control" placeholder="Masukkan email Anda" required>
            </div>
            <div class="form-group">
                <input type="password" name="password" class="form-control" placeholder="Masukkan password Anda" required>
            </div>
            <div class="form-group">
                <input type="password" name ="confirm" class="form-control" placeholder="Masukkan konfirmasi password Anda" required>
            </div>
            <div class="form-group">
                <input type="submit" value="Daftar" name="submit" class="btn btn-primary">
            </div>
        </form>
        <div class="text-center mt-3">
            <p>Sudah punya akun? <a href="index.php" class="text-muted">Login disini</a></p>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
</body>
</html>
