<!DOCTYPE html>
<html>
<head>
    <title>Halaman C - Taman Publik</title>
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
    <div class="orb" style="top: 10%; left: 10%;"></div>
    <div class="orb" style="bottom: 10%; right: 10%;"></div>

    <div class="card">
        <div class="badge">Akses: Publik</div>
        <h2>Taman Publik</h2>
        <p>Selamat datang di area terbuka <strong>Lentera Kristal</strong>. <br>Halaman ini merupakan ruang publik yang bisa diakses siapa saja tanpa syarat login.</p>
        
        <hr style="border: 0; border-top: 1px solid rgba(0,0,0,0.05); margin-bottom: 30px;">
        
        <p style="font-size: 0.9rem;">Ingin masuk ke area eksklusif?</p>
        <a href="login.php" class="btn-login">Masuk ke Sistem</a>
    </div>
</body>
</html>