<?php
$host = "localhost";
$db = "forum";
$user = "root";
$pass = "";

// Bağlantı
$conn = new mysqli($host, $user, $pass, $db);
if ($conn->connect_error) {
    die("Bağlantı hatası: " . $conn->connect_error);
}

$username = $_POST['username'] ?? '';
$password = $_POST['password'] ?? '';

if ($username && $password) {
    // Şifreyi güvenli şekilde hashle
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    $stmt = $conn->prepare("INSERT INTO users (username, password) VALUES (?, ?)");
    $stmt->bind_param("ss", $username, $hashedPassword);

    if ($stmt->execute()) {
        echo "Kayıt başarılı! <a href='login.html'>Giriş yap</a>";
    } else {
        echo "Hata: " . $stmt->error;
    }

    $stmt->close();
} else {
    echo "Lütfen tüm alanları doldurun.";
}

$conn->close();
?>
