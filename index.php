

<?php 
include './actions/admin.php' ;
$admin1 = new Admin('ahmed','ahmed','ahmed','ahmed','ahmed','ahmed');
  $mbrs = $admin1->allMembers();
// if ($admin1->allMembers()ou $mbrs){}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OXYFIT</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="./assets/css/style.css">

    <style>
        .banner{
            background-image: linear-gradient(to bottom, rgba(0, 0, 0, 0.8), rgba(0, 0, 0, 0.8)), url('./assets/img/gym.jpg');
            background-size: cover;
            background-repeat: no-repeat;
        }
    </style>


</head>
<body>

    <header class="text-white">
        <?php
            include_once "./includes/header.php";
        ?>
        <nav class="bg-black flex px-20 justify-between items-center py-5">
            <img class="w-[12%]" src="./assets/img/logo.png" alt="Logo de OXYFIT">
            <div class="flex gap-20 items-center">
                <ul class="flex gap-10  items-center">
                    <a href="#"><li class="text-lg font-medium transition-all duration-500 hover:text-orange-400">Home</li></a>
                    <a href="#"><li class="text-lg font-medium transition-all duration-500 hover:text-orange-400">About</li></a>
                    <a href="#"><li class="text-lg font-medium transition-all duration-500 hover:text-orange-400">Blog</li></a>
                    <a href="#"><li class="text-lg font-medium transition-all duration-500 hover:text-orange-400">Services</li></a>
                    <a href="#"><li class="text-lg font-medium transition-all duration-500 hover:text-orange-400">Contact</li></a>
                </ul>
                <a href="./views/login.php"><button type="submit" class="border border-white rounded-md py-1 px-5 text-lg font-medium transition-all duration-500 hover:bg-orange-500 hover:text-black hover:scale-105 hover:border-none">LOGIN</button></a>
            </div>
        </nav>
    </header>

    <main class="">


        <section class="banner relative">
            <div class="absolute inset-0 bg-gray-900/75 sm:bg-transparent sm:from-gray-900/95 sm:to-gray-900/25 ltr:sm:bg-gradient-to-r rtl:sm:bg-gradient-to-l"></div>

            <div class="relative mx-auto max-w-screen-xl px-4 py-32 sm:px-6 lg:flex lg:h-screen lg:items-center lg:px-20">
                <div class="max-w-xl ltr:sm:text-left rtl:sm:text-right">
                    <h1 class="text-3xl font-extrabold text-white sm:text-5xl">
                        Let us find your

                        <strong class="block font-extrabold text-orange-500">  Hidden Power. </strong>
                    </h1>

                    <p class="mt-4 max-w-lg text-white sm:text-xl/relaxed">
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nesciunt illo tenetur fuga ducimus
                        numquam ea!
                    </p>

                    <div class="mt-8 flex flex-wrap gap-4 text-center">
                        <a href="#" class="block w-full rounded bg-orange-600 px-12 py-3 text-sm font-medium text-white shadow hover:bg-orange-700 focus:outline-none focus:ring active:bg-orange-500 sm:w-auto">
                        Get Started</a>

                        <a href="#" class="block w-full rounded bg-white px-12 py-3 text-sm font-medium text-orange-600 shadow hover:text-orange-700 focus:outline-none focus:ring active:text-orange-500 sm:w-auto">
                        Learn More</a>
                    </div>
                </div>
            </div>
        </section>


        <section>
            <div class="mx-auto max-w-screen-xl px-4 py-8 sm:px-6 lg:px-8">
                <div class="grid grid-cols-1 gap-4 md:grid-cols-2 md:items-center md:gap-8">
                    <div>
                        <div class="max-w-lg md:max-w-none">
                            <h2 class="text-2xl font-semibold text-gray-900 sm:text-3xl">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            </h2>

                            <p class="mt-4 text-gray-700">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur doloremque saepe
                                architecto maiores repudiandae amet perferendis repellendus, reprehenderit voluptas
                                sequi.
                            </p>
                        </div>
                    </div>

                    <div>
                        <img
                        src="https://images.unsplash.com/photo-1731690415686-e68f78e2b5bd?q=80&w=2670&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                        class="rounded"
                        alt=""
                        />
                    </div>
                </div>
            </div>
        </section>


    </main>

    <footer class="bg-black px-20 text-white">
        <div class="flex flex-col gap-10 pb-5 pt-12">
            <div class="flex flex-col gap-5 items-center">
                <img class="w-[15%]" src="./assets/img/logo.png" alt="Logo de OXYFIT">
                <h1 class="mt-5 uppercase font-semibold text-3xl">Respirez l'énergie, dépassez vos limites !</h1>
                <button type="button" class="bg-orange-500 text-black text-xl font-medium rounded-full py-2 px-10 transition-all duration-500 hover:scale-105">Get Started</button>
            </div>
            <ul class="flex justify-center items-center text-lg gap-10">
                <a href="#"><li>Help ?</li></a>
                <a href="#"><li>Privacy</li></a>
                <a href="#"><li>Terms</li></a>
                <a href="#"><li>Location</li></a>
            </ul>
            <div class="flex flex-col items-center border-t pt-5">
                <p class="font-extralight">All Right Reserved &copy; 2024 OXYFIT</p>
            </div>
        </div>
    </footer>
</body>
</html>