<?php

session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    // 1. Data Hardcoded untuk simulasi (Tanpa Database) 
    $admin_user = "admin";
    $admin_pass = "admin123";
    
    $member_user = "member";
    $member_pass = "member123";

    // 2. Logika Pengecekan Role
    if ($username == $admin_user && $password == $admin_pass) {
        // Jika Admin 
        $_SESSION["loggedin"] = true; 
        $_SESSION["username"] = $username; 
        $_SESSION["role"] = "admin"; 
        header("location: halaman_b.php"); // Admin langsung ke B (atau A) 
        exit; 

    } elseif ($username == $member_user && $password == $member_pass) {
        // Jika Member
        $_SESSION["loggedin"] = true;
        $_SESSION["username"] = $username;
        $_SESSION["role"] = "member";
        header("location: halaman_b.php"); // Member hanya bisa ke B & C
        exit;

    } else {
        // Jika Salah 
        echo "Username atau password salah! <a href='login.php'>Kembali</a>"; 
    }
}
?>