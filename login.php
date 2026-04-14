<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <style>
        body { font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; background-color: #f0f2f5; display: flex; justify-content: center; align-items: center; height: 100vh; margin: 0; }
        .login-card { background: white; padding: 2rem; border-radius: 12px; box-shadow: 0 4px 15px rgba(0,0,0,0.1); width: 300px; text-align: center; }
        h2 { color: #1a73e8; margin-bottom: 1.5rem; }
        input { width: 100%; padding: 10px; margin: 10px 0; border: 1px solid #ddd; border-radius: 6px; box-sizing: border-box; }
        input[type="submit"] { background-color: #1a73e8; color: white; border: none; cursor: pointer; font-weight: bold; transition: 0.3s; }
        input[type="submit"]:hover { background-color: #1557b0; }
        .footer { font-size: 0.8rem; color: #777; margin-top: 1rem; }
    </style>
</head>
<body>
    <div class="login-card">
        <h2>Login</h2>
        <form method="post" action="process_login.php">
            <input type="text" name="username" placeholder="Username" required>
            <input type="password" name="password" placeholder="Password" required>
            <input type="submit" value="Login">
        </form>
        <div class="footer">Praktikum Pengembangan Aplikasi Web</div>
    </div>
</body>
</html>