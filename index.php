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

    <?php include 'navbar.php'; ?>

    <div class="w-full p-12 h-auto flex justify-center font-mono" style="background-image: url('images/background.jpg'); background-size: cover; background-position: center;">

        <div class="bg-[#f8c578] border-2 border-black shadow-xl flex flex-col w-1/2">

            <div class="logodiv p-12">
                <img src="images/logo.png" alt="" class="logopng">
                <div>
                    <h1 class="logo_baslik">88Bit Forum'a Hoş geldin!</h1>
                    <p class="logo_p">Merhaba dostum, bu sitede mazide kalmış oyunlar hakkında sohbetler ediyor,
                        tartışmalar yapıyoruz, sende bize katılamk ister misin?
                        yapman gereken tek şey kendine bir hesap oluşturman, <a style="color: blue;" href="">buraya
                            tıklayarak hesap oluşturabilirsin.</a>
                    </p>
                </div>

            </div>


            <div class="p-12 w-full flex items-center justify-center" style="text-decoration: underline;">
                <h1 class="text-2xl font-bold italic font-sans">Haftanın Populer Tartışmaları</h1>
            </div>



            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mx-auto px-4">

                <div class="w-full my-4">
                    <div class="flex flex-col cursor-pointer shadow-xl md:flex-row border-2 border-black p-4 h-full">
                        <div class="flex items-center justify-center md:w-1/3 p-1">
                            <img src="images/gta3.png">
                        </div>
                        <div class="md:w-2/3 flex flex-col justify-between">
                            <h2 class="text-xl font-bold font-mono mb-2">- Elden Ring gereğinden fazla mı abartılıyor?</h2>
                            <p class="text-sm mb-4">
                                Açık dünya güzel ama bazı boss dövüşleri tamamen sabır testi. Oynanış değil işkence diyenler de var.
                            </p>
                            <div class="flex justify-end">
                                <button class="flex bg-gray-300 w-auto items-center font-sans p-1">
                                    <img src="images/mouse.png">
                                    <p>Görüntüle</p>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="w-full my-4">
                    <div class="flex flex-col cursor-pointer shadow-xl md:flex-row border-2 border-black p-4 h-full">
                        <div class="flex items-center justify-center md:w-1/3 p-1">
                            <img src="images/valorant.png">
                        </div>
                        <div class="md:w-2/3 flex flex-col justify-between">
                            <h2 class="text-xl font-bold font-mono mb-2">- Valorant, yetenek değil şans oyunu mu?</h2>
                            <p class="text-sm mb-4">
                                Herkesin smurf, herkesin toxic olduğu bir yerde beceri ne kadar etkili? Tartışmaya değer.
                            </p>
                            <div class="flex justify-end">
                                <button class="flex bg-gray-300 w-auto items-center font-sans p-1">
                                    <img src="images/mouse.png">
                                    <p>Görüntüle</p>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="w-full my-4">
                    <div class="flex flex-col cursor-pointer shadow-xl md:flex-row border-2 border-black p-4 h-full">
                        <div class="flex items-center justify-center md:w-1/3 p-1">
                            <img src="images/mc.png">
                        </div>
                        <div class="md:w-2/3 flex flex-col justify-between">
                            <h2 class="text-xl font-bold font-mono mb-2">- Minecraft neden hâlâ popüler?</h2>
                            <p class="text-sm mb-4">
                                Grafik yok, hikaye yok ama hâlâ milyonlarca oyuncu. Nostalji mi, yaratıcılık mı?
                            </p>
                            <div class="flex justify-end">
                                <button class="flex bg-gray-300 w-auto items-center font-sans p-1">
                                    <img src="images/mouse.png">
                                    <p>Görüntüle</p>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="w-full my-4">
                    <div class="flex flex-col cursor-pointer shadow-xl md:flex-row border-2 border-black p-4 h-full">
                        <div class="flex items-center justify-center md:w-1/3 p-1">
                            <img src="images/gta6.png">
                        </div>
                        <div class="md:w-2/3 flex flex-col justify-between">
                            <h2 class="text-xl font-bold font-mono mb-2">- GTA 6, beklentileri karşılayacak mı?</h2>
                            <p class="text-sm mb-4">
                                Herkesin ağzı açık beklediği oyun ama beklenti yüksekse hayal kırıklığı da büyük olabilir.
                            </p>
                            <div class="flex justify-end">
                                <button class="flex bg-gray-300 w-auto items-center font-sans p-1">
                                    <img src="images/mouse.png">
                                    <p>Görüntüle</p>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="w-full my-4">
                    <div class="flex flex-col cursor-pointer shadow-xl md:flex-row border-2 border-black p-4 h-full">
                        <div class="flex items-center justify-center md:w-1/3 p-1">
                            <img src="images/image.png">
                        </div>
                        <div class="md:w-2/3 flex flex-col justify-between">
                            <h2 class="text-xl font-bold font-mono mb-2">- Mobil oyunlar artık konsollara rakip mi?</h2>
                            <p class="text-sm mb-4">
                                Genshin Impact, COD Mobile ve daha fazlası... Gerçekten büyük oyunları tehdit ediyorlar mı?
                            </p>
                            <div class="flex justify-end">
                                <button class="flex bg-gray-300 w-auto items-center font-sans p-1">
                                    <img src="images/mouse.png">
                                    <p>Görüntüle</p>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

            </div>


        </div>
    </div>

    <?php include 'footer.php'; ?>


</body>

</html>