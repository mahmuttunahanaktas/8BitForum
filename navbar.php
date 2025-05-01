<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>

</head>

<body>
<?php session_start(); ?>

    <nav>
        <div class="logodivnav">
            <img class="logo_png" src="images/logo2.png" alt="">
            <h1 style="font-style: italic; color: white; font-weight: 800; text-shadow: 
            2px 2px 0px black, /* Siyah gölge sola alta */
            -2px -2px 0px black, /* Siyah gölge sağa üste */
            2px -2px 0px black, /* Siyah gölge sağa alta */
            -2px 2px 0px black;">8BitForum</h1>
        </div>
        <div class="div_buttons">
            <a href="index.php" class="flex items-center font-sans p-1 px-3 border-2 border-gray-300 bg-gray-300 text-black cursor-pointer shadow-[2px_2px_0px_#808080,_-2px_-2px_0px_#ffffff] rounded-sm gap-1 h-auto mr-2 w-auto text-sm hover:bg-gray-200 active:shadow-[inset_2px_2px_0px_#808080,_inset_-2px_-2px_0px_#ffffff] active:bg-gray-200">
                <img class="button-icon-2" src="images/anasayfa.png" alt="">
                <p>Anasayfa</p>
            </a>

            <a href="about.php" class="flex items-center font-sans p-1 px-3 border-2 border-gray-300 bg-gray-300 text-black cursor-pointer shadow-[2px_2px_0px_#808080,_-2px_-2px_0px_#ffffff] rounded-sm gap-1 h-auto mr-2 w-auto text-sm hover:bg-gray-200 active:shadow-[inset_2px_2px_0px_#808080,_inset_-2px_-2px_0px_#ffffff] active:bg-gray-200">
                <img class="button-icon" src="images/hakkimizda.png" alt="">
                <p>Hakkımızda</p>
            </a>

            <a href="tartismalar.php" class="flex items-center font-sans p-1 px-3 border-2 border-gray-300 bg-gray-300 text-black cursor-pointer shadow-[2px_2px_0px_#808080,_-2px_-2px_0px_#ffffff] rounded-sm gap-1 h-auto mr-2 w-auto text-sm hover:bg-gray-200 active:shadow-[inset_2px_2px_0px_#808080,_inset_-2px_-2px_0px_#ffffff] active:bg-gray-200 button-tartismalar">
                <img class="button-icon-1" src="images/message.png" alt="">
                <p>Tartışmalar</p>
            </a>

            
        </div>
        <div class="kullanici-islemleri">
            <?php if (isset($_SESSION['user_id'])): ?>
                <!-- Oturum açıksa "Çıkış Yap" -->
                <a href="logout.php" class="flex items-center font-sans p-1 px-3 border-2 border-gray-300 bg-gray-300 text-black cursor-pointer shadow-[2px_2px_0px_#808080,_-2px_-2px_0px_#ffffff] rounded-sm gap-1 h-auto mr-2 w-auto text-sm hover:bg-gray-200 active:shadow-[inset_2px_2px_0px_#808080,_inset_-2px_-2px_0px_#ffffff] active:bg-gray-200">
                    <img class="button-icon-2" src="images/account.png" alt="">
                    <p>Çıkış Yap</p>
                </a>
            <?php else: ?>
                <!-- Oturum yoksa "Giriş Yap" -->
                <a href="login.php" class="flex items-center font-sans p-1 px-3 border-2 border-gray-300 bg-gray-300 text-black cursor-pointer shadow-[2px_2px_0px_#808080,_-2px_-2px_0px_#ffffff] rounded-sm gap-1 h-auto mr-2 w-auto text-sm hover:bg-gray-200 active:shadow-[inset_2px_2px_0px_#808080,_inset_-2px_-2px_0px_#ffffff] active:bg-gray-200">
                    <img class="button-icon-2" src="images/account.png" alt="">
                    <p>Giriş Yap</p>
                </a>
            <?php endif; ?>
        </div>




    </nav>

</body>

</html>