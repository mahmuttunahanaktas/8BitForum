<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="index.css">
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
    <?php include 'navbar.php'; ?>

    <div class="w-full p-12 h-screen flex justify-center font-mono" style="background-image: url('images/background.jpg'); background-size: cover; background-position: center;">

        <div class="bg-[#f8c578] border-2 border-black shadow-xl flex flex-col w-1/2">
            <div class="logodiv p-12">
                <img src="images/logo.png" alt="" class="logopng">
                <div>
                    <h1 class="logo_baslik">Kuralara dikkat edelim.</h1>
                    <p class="logo_p">
                        Herkesin özgürce fikir paylaşabilmesi ve keyifli sohbetler edebilmesi için temel kurallarımıza
                        uymanızı rica ederiz: Küfür, hakaret, nefret söylemi veya kişisel saldırılar kesinlikle
                        yasaktır. Spam, reklam ve konu dışı içerik paylaşımı yapılmamalıdır. Saygılı, yapıcı ve samimi
                        bir ortam oluşturmak hepimizin sorumluluğudur. Kurallara uymayan kullanıcıların mesajları
                        kaldırılabilir ve tekrar eden ihlallerde hesapları askıya alınabilir. Keyifli sohbetler
                        dileriz!
                    </p>
                </div>

            </div>


            <div class="w-full flex justify-center my-8">
                <div class="w-96 border-2 border-gray-300 bg-gray-100 p-6 shadow-md">
                    <div class="text-center mb-4">
                        <h2 class="text-xl font-bold font-serif">Tartışma Oluştur</h2>
                        <div class="w-full h-px bg-gray-400 my-2"></div>
                    </div>

                    <form class="space-y-4" method="POST" action="tartismaekle.php" enctype="multipart/form-data">
    <div class="flex flex-col">
        <label class="mb-1 text-sm font-bold" for="username">Kullanıcı Adı:</label>
        <input name="username" type="text" id="username" class="..." required>
    </div>

    <div class="flex flex-col">
        <label class="mb-1 text-sm font-bold" for="baslik">Tartışma Başlığı:</label>
        <input name="baslik" type="text" id="baslik" class="..." required>
    </div>

    <div class="flex flex-col">
        <label class="mb-1 text-sm font-bold" for="icerik">Tartışma İçeriği:</label>
        <textarea name="icerik" id="icerik" class="..." rows="4" required></textarea>
    </div>

    <div class="flex flex-col">
        <label class="mb-1 text-sm font-bold" for="gorsel">Görsel:</label>
        <input name="gorsel" type="file" id="gorsel" class="..." accept="image/*">
    </div>

    <button type="submit" class="...">Tartışmayı Oluştur</button>
</form>


                    <div class="mt-4 text-center">
                    </div>
                </div>
            </div>




        </div>

    </div>

    <?php include 'footer.php'; ?>



</body>

</html>