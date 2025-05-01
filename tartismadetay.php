<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>8BitForum</title>
    <link rel="stylesheet" href="index.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=IBM+Plex+Mono:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&display=swap"
        rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Jersey+10&display=swap" rel="stylesheet">
    <link rel="icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css"
        integrity="sha512-5Hs3dF2AEPkpNAR7UiOHba+lRSJNeM2ECkwxUIxC1Q/FLycGTbNapWXB4tP889k5T5Ju8fs4b1P5z/iB4nMfSQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <?php include 'db.php'; ?>
    <?php
    $host = 'localhost';
    $user = 'root';
    $pass = '';
    $db = 'forum';

    $conn = new mysqli($host, $user, $pass, $db);
    if ($conn->connect_error) {
        die("Bağlantı hatası: " . $conn->connect_error);
    }

    if (!isset($_GET['id'])) {
        echo "Tartışma ID'si yok.";
        exit;
    }

    $id = intval($_GET['id']); // Güvenlik için
    $query = $conn->prepare("SELECT * FROM tartışmalar WHERE id = ?");
    $query->bind_param("i", $id);
    $query->execute();
    $result = $query->get_result();
    $tartisma = $result->fetch_assoc();

    if (!$tartisma) {
        echo "Tartışma bulunamadı.";
        exit;
    }
    ?>


    <?php include 'navbar.php'; ?>

    <div class="w-full p-12 h-screen flex justify-center font-mono" style="background-image: url('images/background.jpg'); background-size: cover; background-position: center;">

        <div class="bg-[#f8c578] border-2 border-black shadow-xl flex flex-col w-1/2">


            <div class="w-full my-4">
                <div class="flex flex-col cursor-pointer shadow-xl md:flex-row border-2 border-black p-4 h-full">
                    <!-- Sol taraf - Ağaç görseli -->
                    <div class="flex items-center justify-center md:w-1/3 p-1">
                        <img src="<?= htmlspecialchars($tartisma['gorsel_yolu']) ?>" alt="">
                    </div>
                    <div class="md:w-2/3 flex flex-col justify-between">
                        <!-- Başlık -->
                        <h2 class="text-xl font-bold font-mono mb-2">- <?= htmlspecialchars($tartisma['baslik']) ?></h2>
                        <p class="text-sm mb-4"><?= htmlspecialchars($tartisma['icerik']) ?></p>

                        <div class="flex justify-end">

                        </div>
                    </div>
                </div>
            </div>

            <div class="w-full bg-sky-400 h-auto p-6">
                Burada da bu tartışmanın yorumlarını listeletelim tek tek alt alta
            </div>
        </div>
    </div>

    <?php include 'footer.php'; ?>

</body>

</html>