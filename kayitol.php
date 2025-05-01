<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kayıt Ol</title>
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
                        <h2 class="text-xl font-bold font-serif">Hesap Kayıt</h2>
                        <div class="w-full h-px bg-gray-400 my-2"></div>
                    </div>

                    <form class="space-y-4" action="register.php" method="POST">
                        <div class="flex flex-col">
                            <label class="mb-1 text-sm font-bold" for="username">Kullanıcı Adı Oluşturun:</label>
                            <input
                            name="username"
                                type="text"
                                id="username"
                                class="border-2 border-gray-400 bg-white px-2 py-1 focus:outline-none focus:border-blue-500">
                        </div>

                        <div class="flex flex-col">
                            <label class="mb-1 text-sm font-bold" for="password">Şifre Oluşturun: </label>
                            <input
                            name="password"
                                type="password"
                                id="password"
                                class="border-2 border-gray-400 bg-white px-2 py-1 focus:outline-none focus:border-blue-500">
                        </div>

                      

                        <div class="flex justify-between items-center mt-4">
                            <!-- Belirttiğiniz stile göre tasarlanmış buton -->
                            <button
                                type="submit"
                                class="flex items-center font-sans p-1 px-3 border-2 border-gray-300 bg-gray-300 text-black cursor-pointer shadow-[2px_2px_0px_#808080,_-2px_-2px_0px_#ffffff] rounded-sm gap-1 h-auto mr-2 w-auto text-sm hover:bg-gray-200 active:shadow-[inset_2px_2px_0px_#808080,_inset_-2px_-2px_0px_#ffffff] active:bg-gray-200">
                                <img class="w-4 h-4" src="images/mouse.png" alt="Login Icon">
                                <p>Kayıt Ol</p>
                            </button>

                        </div>
                    </form>

                    <div class="mt-4 text-center">
                        <p class="text-xs text-gray-600">Zaten bir hesabınız var mı? <a href="#" class="text-blue-700 underline hover:text-blue-900">Giriş Yap</a></p>
                    </div>
                </div>
            </div>




        </div>

    </div>

    <?php include 'footer.php'; ?>

</body>

</html>