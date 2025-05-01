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
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $baslik = $_POST['baslik'];
    $icerik = $_POST['icerik'];

    // Görsel yükleme
    $gorsel_yolu = '';
    if (isset($_FILES['gorsel']) && $_FILES['gorsel']['error'] === 0) {
        $gorsel_adi = uniqid() . '_' . basename($_FILES['gorsel']['name']);
        $gorsel_tmp = $_FILES['gorsely']['tmp_name'];
        $hedef_klasor = 'images/uploads/';
        $hedef_yol = $hedef_klasor . $gorsel_adi;

        // Klasör yoksa oluştur
        if (!is_dir($hedef_klasor)) {
            mkdir($hedef_klasor, 0755, true);
        }

        move_uploaded_file($gorsel_tmp, $hedef_yol);
        $gorsel_yolu = $hedef_yol;
    }

    $stmt = $conn->prepare("INSERT INTO tartışmalar (kullanici_adi, baslik, icerik, gorsel_yolu) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssss", $username, $baslik, $icerik, $gorsel_yolu);
    $stmt->execute();
    $stmt->close();

    // Başarıyla eklenince tartışmalar listesine yönlendir
    header("Location: tartismalar.php");
    exit;
}
?>
