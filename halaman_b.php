<?php
// 1. Panggil session_start() di baris pertama 
session_start(); 

// 2. Proteksi Halaman: Usir jika belum login 
if (!isset($_SESSION["loggedin"])) {
    header("location: login.php");
    exit;
}

// 3. Menampilkan Pesan Error (jika ada kiriman dari Halaman A)
?>
<?php if (isset($_GET['error']) && $_GET['error'] == 'restricted'): ?>
    <div style="position: absolute; top: 20px; background: #ffeaa7; color: #d63031; padding: 10px 20px; border-radius: 10px; z-index: 100; border: 1px solid #fab1a0; font-weight: bold;">
        ⚠️ Akses Ditolak: Halaman A hanya boleh diakses oleh Admin!
    </div>
<?php endif; ?>

<!DOCTYPE html>
<html>
<head>
    <title>Halaman B - Lentera Bersama</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap');

        body {
            margin: 0; font-family: 'Poppins', sans-serif;
            background: linear-gradient(135deg, #a29bfe 0%, #6c5ce7 100%);
            height: 100vh; display: flex; justify-content: center; align-items: center;
        }

        .card {
            background: rgba(255, 255, 255, 0.9);
            backdrop-filter: blur(15px);
            padding: 40px; border-radius: 25px; text-align: center;
            box-shadow: 0 10px 30px rgba(0,0,0,0.15);
            width: 380px; border: 1px solid rgba(255, 255, 255, 0.3);
        }

        .badge {
            display: inline-block; padding: 5px 15px; border-radius: 50px;
            background: #dfe6e9; font-size: 0.75rem; font-weight: 600;
            color: #636e72; margin-bottom: 20px; text-transform: uppercase;
        }

        h2 { color: #2d3436; margin-bottom: 10px; font-weight: 600; }
        p { color: #636e72; font-size: 0.9rem; line-height: 1.6; }

        .btn {
            display: block; padding: 12px; margin: 10px 0; border-radius: 12px;
            text-decoration: none; font-weight: 600; transition: 0.3s; border: none;
        }

        .btn-primary { background: #6c5ce7; color: white; }
        .btn-secondary { background: #55efc4; color: #2d3436; }
        .btn-danger { background: #ff7675; color: white; }

        .btn:hover { transform: translateY(-3px); box-shadow: 0 5px 15px rgba(0,0,0,0.1); opacity: 0.9; }

        input {
            width: 100%; padding: 12px; margin: 10px 0; border-radius: 10px;
            border: 1px solid #ddd; outline: none; box-sizing: border-box;
        }
    </style>
</head>
<body>
    <div class="card">
    <div class="badge">Role: <?php echo ucfirst($_SESSION['role']); ?></div>
    <h2>Lentera Bersama</h2>
    <p>Halo, <strong><?php echo $_SESSION['username']; ?></strong>!</p>
    <a href="halaman_a.php" class="btn btn-primary">Ke Halaman A</a>
    <a href="halaman_c.php" class="btn btn-secondary">Ke Halaman C</a>
    <a href="logout.php" class="btn btn-danger">Logout</a>
    </div>
</body>
</html>