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
        href="https://fonts.googleapis.com/css2?family=IBM+Plex+Mono&family=Jersey+10&display=swap"
        rel="stylesheet">
    <link rel="icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css"
        integrity="sha512-5Hs3dF2AEPkpNAR7UiOHba+lRSJNeM2ECkwxUIxC1Q/FLycGTbNapWXB4tP889k5T5Ju8fs4b1P5z/iB4nMfSQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>

<?php include 'navbar.php'; ?>

<div class="w-full p-12 h-screen flex justify-center font-mono"
     style="background-image: url('images/background.jpg'); background-size: cover; background-position: center;">

    <div class="bg-[#f8c578] border-2 border-black shadow-xl flex flex-col w-1/2">
        <div class="p-12 w-full flex items-center justify-center" style="text-decoration: underline;">
            <h1 class="text-2xl font-bold italic font-sans">Tüm Tartışmalar</h1>
        </div>

        <?php
        $host = 'localhost';
        $user = 'root';
        $pass = '';
        $db = 'forum';
        
        // MySQLi bağlantısı
        $conn = new mysqli($host, $user, $pass, $db);
        if ($conn->connect_error) {
            die("Bağlantı hatası: " . $conn->connect_error);
        }
        // Veritabanından tartışmaları çek
        $query = $conn->query("SELECT * FROM tartışmalar ORDER BY olusturma_tarihi DESC");

        // Hata kontrolü
        if (!$query) {
            echo "<p class='text-red-500 text-center'>Sorgu hatası: " . $conn->error . "</p>";
            exit;
        }

        $tartismalar = $query->fetch_all(MYSQLI_ASSOC);
        ?>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mx-auto px-4">
            <?php if (count($tartismalar) > 0): ?>
                <?php foreach ($tartismalar as $tartisma): ?>
                    <div class="w-full my-4">
                        <div class="flex flex-col cursor-pointer shadow-xl md:flex-row border-2 border-black p-4 h-full">
                            <div class="flex items-center justify-center md:w-1/3 p-1">
                                <?php if (!empty($tartisma['gorsel_yolu']) && file_exists($tartisma['gorsel_yolu'])): ?>
                  
                                    <img src="<?= htmlspecialchars($tartisma['gorsel_yolu']) ?>" alt="Görsel" class="w-full h-auto">
                                <?php else: ?>
                                    <img src="images/message.png" alt="Varsayılan Görsel" class="w-full h-auto">
                                <?php endif; ?>
                            </div>
                            <div class="md:w-2/3 flex flex-col justify-between">
                                <h2 class="text-xl font-bold font-mono mb-2">- <?= htmlspecialchars($tartisma['baslik']) ?></h2>
                                <p class="text-sm mb-4"><?= htmlspecialchars($tartisma['icerik']) ?></p>
                                <div class="flex justify-end">
                                    <a href="tartismadetay.php?id=<?= $tartisma['id'] ?>"
                                       class="flex items-center font-sans p-1 px-3 border-2 border-gray-300 bg-gray-300 text-black cursor-pointer shadow-[2px_2px_0px_#808080,_-2px_-2px_0px_#ffffff] rounded-sm gap-1 h-auto mr-2 w-auto text-sm hover:bg-gray-200 active:shadow-[inset_2px_2px_0px_#808080,_inset_-2px_-2px_0px_#ffffff] active:bg-gray-200">
                                        <img src="images/mouse.png" alt="Görüntüle" class="w-4 h-4">
                                        <p>Görüntüle</p>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            <?php else: ?>
                <p class="text-center text-black font-bold mb-4">Henüz tartışma eklenmemiş.</p>
            <?php endif; ?>
        </div>

    </div>
</div>

<?php include 'footer.php'; ?>
</body>
</html>
