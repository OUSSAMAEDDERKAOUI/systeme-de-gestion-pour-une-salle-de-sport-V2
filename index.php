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
                    <a href="#about"><li class="text-lg font-medium transition-all duration-500 hover:text-orange-400">About</li></a>
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


        <section id="about" class="bg-black text-white">
            <div class="mx-auto max-w-screen-xl px-4 py-8 sm:px-6 lg:px-8">
                <div class="grid grid-cols-1 gap-4 md:grid-cols-2 md:items-center md:gap-8">
                    <div>
                        <div class="max-w-lg md:max-w-none">
                            <h2 class="text-2xl font-semibold sm:text-3xl">
                                About <span class="text-orange-500">OXY</span>FIT
                            </h2>

                            <p class="mt-4 font-light text-gray-300">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur doloremque saepe
                                architecto maiores repudiandae amet perferendis repellendus, reprehenderit voluptas
                                sequi.
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur doloremque saepe
                                architecto maiores repudiandae amet perferendis repellendus, reprehenderit voluptas
                                sequi.
                            </p>

                            <button type="button" class="py-1 px-5 w-1/4 font-medium bg-orange-500 duration-500 hover:bg-orange-600 text-black rounded-sm mt-8">SEE MORE</button>
                        </div>
                    </div>

                    <div>
                        <img
                        src="https://images.unsplash.com/photo-1623874514711-0f321325f318?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                        class="rounded"
                        alt=""
                        />
                    </div>
                </div>
            </div>
        </section>



        <!-- our services section -->
        <section class="py-20 bg-black" id="services">
            <div class="container mx-auto px-4">
                <h2 class="text-3xl font-bold mb-8 text-white text-center">Our <span class="text-orange-500">Services</span></h2>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                    <div class="bg-black text-white shadow-orange-500 rounded-sm shadow-sm overflow-hidden">
                        <img src="https://plus.unsplash.com/premium_photo-1661898576032-fd26e3409175?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Professional HEAD Coachs"
                            class="w-full h-64 object-cover">
                        <div class="p-6 text-center">
                            <h3 class="text-xl font-medium text-gray-300 mb-2">Professional HEAD Coachs</h3>
                            <p class="font-extralight text-base mb-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam non eaque placeat, sequi eum animi quibusdam ullam perferendis. Veritatis, consequatur!
                            <details>
                                <summary>Read More</summary>
                                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Illum, quo!</p>
                            </details>
                            </p>
                        </div>
                    </div>
                    <div class="bg-black text-white shadow-orange-500 rounded-sm shadow-sm overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1533560904424-a0c61dc306fc?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Body Builsing & Musculation"
                            class="w-full h-64 object-cover">
                        <div class="p-6 text-center">
                            <h3 class="text-xl font-medium text-gray-300 mb-2">Body Builsing & Musculation</h3>
                            <p class="font-extralight text-base mb-2">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Impedit aspernatur maiores voluptatem accusantium totam esse sapiente iure nisi provident.
                            <details>
                                <summary>Read More</summary>
                                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Illum, quo!</p>
                            </details>
                            </p>
                        </div>
                    </div>
                    <div class="bg-black text-white shadow-orange-500 rounded-sm shadow-sm overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1540206063137-4a88ca974d1a?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Yoga"
                            class="w-full h-64 object-cover">
                        <div class="p-6 text-center">
                            <h3 class="text-xl font-medium text-gray-300 mb-2">Yoga Sessions</h3>
                            <p class="font-extralight text-base mb-2">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Omnis cum a nam excepturi esse nobis aut amet cupiditate, laborum sit.
                            <details>
                                <summary>Read More</summary>
                                <p>Our jowar flour is also
                                    a good source of protein and fiber, making it a healthy choice for your family.</p>
                            </details>
                            </p>

                        </div>
                    </div>
                    <div class="bg-black text-white shadow-orange-500 rounded-sm shadow-sm overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1542766788-a2f588f447ee?q=80&w=1776&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Equipement"
                            class="w-full h-64 object-cover">
                        <div class="p-6 text-center">
                            <h3 class="text-xl font-medium text-gray-300 mb-2">High Quality Equipements</h3>
                            <p class="font-extralight text-base mb-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente dolorum ipsam deleniti hic? Quos nobis architecto quidem blanditiis, consequatur maiores.
                            <details>
                                <summary>Read More</summary>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas, esse?</p>
                            </details>
                            </p>
                        </div>
                    </div>
                    
                    <div class="bg-black text-white shadow-orange-500 rounded-sm shadow-sm overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1461567797193-e5b489ac026a?q=80&w=1932&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Pool"
                            class="w-full h-64 object-cover">
                        <div class="p-6 text-center">
                            <h3 class="text-xl font-medium text-gray-300 mb-2">Swiming Pool</h3>
                            <p class="font-extralight text-base mb-2">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Iste velit a sunt necessitatibus repellat sapiente perferendis et ad, maiores fugit!
                            <details>
                                <summary>Read More</summary>
                                <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam, deleniti?</p>
                            </details>
                            </p>
                        </div>
                    </div>

                    <div class="bg-black text-white shadow-orange-500 rounded-sm shadow-sm overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1524594152303-9fd13543fe6e?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Zumba"
                            class="w-full h-64 object-cover">
                        <div class="p-6 text-center">
                            <h3 class="text-xl font-medium text-gray-300 mb-2">Zumba Courses</h3>
                            <p class="font-extralight text-base mb-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint tempore consequuntur, ab voluptatibus eius illum esse dicta impedit incidunt quam!
                            <details>
                                <summary>Read More</summary>
                                <p> Lorem, ipsum dolor sit amet consectetur adipisicing elit. Illum, autem.</p>
                            </details>
                            </p>
                        </div>
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