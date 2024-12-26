<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OXYFIT</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="../assets/css/style.css">

    <style>
        .main{
            background-image: linear-gradient(to bottom, rgba(0, 0, 0, 0.8), rgba(0, 0, 0, 0.8)), url('../assets/img/bg.jpg');
            background-size: cover;
            background-repeat: no-repeat;
        }
    </style>


</head>
<body>

    <header class="text-white">
        <?php
            include_once "../includes/header.php";
        ?>
        <nav class="bg-black flex px-20 justify-between items-center py-5">
            <img class="w-[12%]" src="../assets/img/logo.png" alt="Logo de OXYFIT">
            <div class="flex gap-20 items-center">
                <ul class="flex gap-10  items-center">
                    <a href="../index.php">
                        <li class="text-lg font-medium transition-all duration-500 hover:text-orange-400">Home</li>
                    </a>
                    <a href="../index.php#about">
                        <li class="text-lg font-medium transition-all duration-500 hover:text-orange-400">About</li>
                    </a>
                    <a href="../index.php#services">
                        <li class="text-lg font-medium transition-all duration-500 hover:text-orange-400">Services</li>
                    </a>
                    <a href="../index.php#contact">
                        <li class="text-lg font-medium transition-all duration-500 hover:text-orange-400">Contact</li>
                    </a>
                    <a href="../index.php#location">
                        <li class="text-lg font-medium transition-all duration-500 hover:text-orange-400">Location</li>
                    </a>
                </ul>
                <a href="./signup.php"><button type="submit" class="border border-white rounded-md py-1 px-5 text-lg font-medium transition-all duration-500 hover:bg-orange-500 hover:text-black hover:scale-105 hover:border-none">Sign Up</button></a>
            </div>
        </nav>
    </header>

    <main class="main h-screen flex text-white items-center justify-center">
        <section class="flex flex-col gap-2 bg-black w-[35vw] p-8 rounded-md shadow-sm shadow-orange-500">
            <h1 class="font-semibold text-2xl text-center">WELCOME BACK TO <span class="text-orange-500">OXYFIT</span></h1>
            <h2 class="font-semibold text-xl text-center mb-5">LOGIN FORM</h2>
            <form method="" action="" class="flex flex-col gap-3">
                <label for="email">Email Adress</label>
                <input type="email" name="email" id="email" class="py-1 px-3 text-black placeholder:text-gray-600 outline-none" placeholder="Ex: peter@example.com">
                <label for="password">Password</label>
                <input type="password" name="password" id="password" class="py-1 px-3 text-black placeholder:text-gray-600 outline-none" placeholder="Enter Your Password ">
                <a href="#" class="text-end text-sm underline text-purple-200">Forget Password?</a>
                <button name="login" class="py-1 px-4 bg-orange-500 text-black font-medium mt-5">LOGIN</button>
            </form>
        </section>
    </main>

    <?php
        include_once "../includes/footer.php";
    ?>
</body>
</html>