<?php
    session_start();
    if($_SESSION['user_role'] !== 'membre'){
        $path = $_SESSION['user_role'];
        header("Location: ./dashboard_$path.php");
        exit;
    }
?>

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
<body class="flex ">

    
    <aside class="flex flex-col w-64 h-screen px-4 py-8 overflow-y-auto bg-white border-r rtl:border-r-0 rtl:border-l dark:bg-black dark:border-gray-700">
        <a href="#" class="mx-auto">
            <img class="w-auto h-6 sm:h-7" src="../assets/img/logo.png" alt="">
        </a>

        <div class="flex flex-col items-center mt-6 -mx-2">
            <img class="object-cover w-24 h-24 mx-2 rounded-full" src="https://images.unsplash.com/photo-1633332755192-727a05c4013d?q=80&w=1780&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="avatar">
            <h4 class="mx-2 mt-2 font-medium text-gray-800 dark:text-gray-200">Member</h4>
            <p class="mx-2 mt-1 text-sm font-medium text-gray-600 dark:text-gray-400">john@example.com</p>
        </div>

        <div class="flex flex-col justify-between flex-1 mt-6">
            <nav>
                <!-- <a class="flex items-center px-4 py-2 text-gray-700 bg-gray-100 rounded-lg dark:bg-black dark:text-gray-200" href="#">
                    <svg class="w-5 h-5" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M19 11H5M19 11C20.1046 11 21 11.8954 21 13V19C21 20.1046 20.1046 21 19 21H5C3.89543 21 3 20.1046 3 19V13C3 11.8954 3.89543 11 5 11M19 11V9C19 7.89543 18.1046 7 17 7M5 11V9C5 7.89543 5.89543 7 7 7M7 7V5C7 3.89543 7.89543 3 9 3H15C16.1046 3 17 3.89543 17 5V7M7 7H17" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>

                    <span class="mx-4 font-medium">Statistics</span>
                </a> -->

                <div id="member-profile-option" class="cursor-pointer flex items-center px-4 py-2 mt-5 text-gray-600 transition-colors duration-300 transform rounded-lg dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-800 dark:hover:text-gray-200 hover:text-gray-700" href="#">
                    <svg class="w-5 h-5" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M16 7C16 9.20914 14.2091 11 12 11C9.79086 11 8 9.20914 8 7C8 4.79086 9.79086 3 12 3C14.2091 3 16 4.79086 16 7Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M12 14C8.13401 14 5 17.134 5 21H19C19 17.134 15.866 14 12 14Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>

                    <span class="mx-4 font-medium">Profile</span>
                </div>

                <div id="btn-add-booking" class="cursor-pointer flex items-center px-4 py-2 mt-5 text-gray-600 transition-colors duration-300 transform rounded-lg dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-800 dark:hover:text-gray-200 hover:text-gray-700" href="#">
                    <svg class="w-5 h-5" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M15 5V7M15 11V13M15 17V19M5 5C3.89543 5 3 5.89543 3 7V10C4.10457 10 5 10.8954 5 12C5 13.1046 4.10457 14 3 14V17C3 18.1046 3.89543 19 5 19H19C20.1046 19 21 18.1046 21 17V14C19.8954 14 19 13.1046 19 12C19 10.8954 19.8954 10 21 10V7C21 5.89543 20.1046 5 19 5H5Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>

                    <span class="mx-4 font-medium"> Add a reservation  </span>
                </div>

                <div id="member-bookings-option" class="cursor-pointer flex items-center px-4 py-2 mt-5 text-gray-600 transition-colors duration-300 transform rounded-lg dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-800 dark:hover:text-gray-200 hover:text-gray-700" href="#">
                    <svg class="w-5 h-5" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M10.3246 4.31731C10.751 2.5609 13.249 2.5609 13.6754 4.31731C13.9508 5.45193 15.2507 5.99038 16.2478 5.38285C17.7913 4.44239 19.5576 6.2087 18.6172 7.75218C18.0096 8.74925 18.5481 10.0492 19.6827 10.3246C21.4391 10.751 21.4391 13.249 19.6827 13.6754C18.5481 13.9508 18.0096 15.2507 18.6172 16.2478C19.5576 17.7913 17.7913 19.5576 16.2478 18.6172C15.2507 18.0096 13.9508 18.5481 13.6754 19.6827C13.249 21.4391 10.751 21.4391 10.3246 19.6827C10.0492 18.5481 8.74926 18.0096 7.75219 18.6172C6.2087 19.5576 4.44239 17.7913 5.38285 16.2478C5.99038 15.2507 5.45193 13.9508 4.31731 13.6754C2.5609 13.249 2.5609 10.751 4.31731 10.3246C5.45193 10.0492 5.99037 8.74926 5.38285 7.75218C4.44239 6.2087 6.2087 4.44239 7.75219 5.38285C8.74926 5.99037 10.0492 5.45193 10.3246 4.31731Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M15 12C15 13.6569 13.6569 15 12 15C10.3431 15 9 13.6569 9 12C9 10.3431 10.3431 9 12 9C13.6569 9 15 10.3431 15 12Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>

                    <span class="mx-4 font-medium">Bookings</span>
                </div>
            </nav>
        </div>

        <div class="flex items-center justify-end mt-5">
            <a href="../classes/functions/logout.php" class="text-gray-400 text-xs underline duration-500 hover:text-gray-200">Disconnect</a>
        </div>
    </aside>


    <main class="w-full bg-gray-200 h-screen text-black">


        <!-- Add New Booking Form -->
        <div id="add-booking-form" class="hidden flex justify-center items-center fixed inset-0 bg-black bg-opacity-80">
            <form method="POST" action="../classes/functions/addReservation.php" class="flex flex-col bg-black text-white py-3 px-10 rounded-md w-[50%] gap-3">
                <div id="infos-member" class="flex flex-col gap-3">

                    <label class="font-medium" for="last-name">Member Last Name</label>
                    <input id="last-name" class="outline-none text-black py-1 font-medium rounded-sm px-4 placeholder:text-gray-500" type="text" name="last-name" placeholder="Enter the Member's Last Name" required>

                    <label class="font-medium" for="first-name">Member First Name</label>
                    <input id="first-name" class="outline-none text-black py-1 font-medium rounded-sm px-4 placeholder:text-gray-500" type="text" name="first-name" placeholder="Enter the Member's First Name" required>
                    
                    <label class="font-medium" for="phone">Member Phone Number</label>
                    <input id="phone" class="outline-none text-black py-1 font-medium rounded-sm px-4 placeholder:text-gray-500" type="text" name="phone" placeholder="Enter the Member's Phone Number" required>

                </div>

                <div class="flex flex-col gap-3">
                    <label for="select-activity">Choose Activity</label> 
                    <select id="select-activity" class="text-black py-1 px-4 font-medium outline-none text-black" name="select-activity">
                    <?php 
                            require_once '../classes/users.php';
                            $user=new User("","","","","","");
                            $result = $user->showActivitiesMembre();
                            


                            if ($result->rowCount() > 0) {
                                while ($rows = $result->fetch(PDO::FETCH_ASSOC)) {
                                    $id=$rows['id_activite'];

                                echo '<option class="text-black" value="'.$rows['id_activite'].'">'.$rows['nom_activite'].'</option>';

                            }
                        }
                        ?> 
                    </select>
                    
                </div>
                <div>
                    <label for="date" class="block text-sm font-medium text-gray-700">Date</label>
                    <input type="date" id="date" name="date" required class=" text-black mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">
                </div>

                <div class="flex justify-end gap-5 mt-3">
                    <a href="../classes/functions/addReservation.php">

                    <button id="confirm-add-booking" class="font-medium py-1 px-5 bg-orange-500 text-black transition-all duration-300 rounded-sm hover:scale-105" type="submit">Save</button>
                    </a>  
                    <button id="cancel-add-booking" class="font-medium py-1 px-5 border border-white rounded-sm transition-all duration-300 hover:text-black hover:bg-gray-500 hover:border-none" type="button">Annuler</button>
                </div>
            </form>
        </div>

        <!-- PROFILE SECTION -->
        <section class="  flex hidden justify-center mt-16" id="member-manage-profile">
            <div class="bg-white overflow-hidden shadow rounded-lg border h-max py-5">
                <div class="px-4 py-2">
                    <h3 class="text-lg leading-6 font-medium text-gray-900">
                        Member Profile
                    </h3>
                    <p class="mt-1 max-w-2xl text-sm text-gray-500">
                        This is all your informations.
                    </p>
                </div>
                <div class="border-t border-gray-200 px-4 py-5 sm:p-0">
                    <dl class="sm:divide-y sm:divide-gray-200">
                        <div class="py-3 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                            <dt class="text-sm font-medium text-gray-500">
                                First Name
                            </dt>
                            <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                <?php
                                if (isset($_SESSION)) {
                                    echo $_SESSION['user_prenom'];
                                }
                                ?>
                            </dd>
                        </div>
                        <div class="py-3 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                            <dt class="text-sm font-medium text-gray-500">
                                Last Name
                            </dt>
                            <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                <?php
                                if (isset($_SESSION)) {
                                    echo $_SESSION['user_nom'];
                                }
                                ?>
                            </dd>
                        </div>
                        <div class="py-3 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                            <dt class="text-sm font-medium text-gray-500">
                                Email address
                            </dt>
                            <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                <?php
                                if (isset($_SESSION)) {
                                    echo $_SESSION['user_email'];
                                }
                                ?>
                            </dd>
                        </div>
                        <div class="py-3 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                            <dt class="text-sm font-medium text-gray-500">
                                Phone number
                            </dt>
                            <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                <?php
                                if (isset($_SESSION)) {
                                    echo $_SESSION['user_phone'];
                                }
                                ?>
                            </dd>
                        </div>
                        <div class="pt-10 ml-5">
                            <button type="button"
                                class="font-medium bg-orange-500 py-1 px-4 rounded-md">Modifier</button>
                        </div>
                    </dl>
                </div>
            </div>
        </section>

        <!-- BOOKING SECTION -->
        <section id="member-manage-bookings">
        <div class="bg-white overflow-hidden shadow rounded-lg">
                        <div class="p-6">
                            <h3 class="text-lg font-medium text-gray-900 mb-4">Prochain Rendez-vous</h3>
                            
                            <div class="bg-blue-50 p-4 rounded-lg">

                            <?php

             echo' <div id="appointments" class="tab-content mt-16">
                <div class="bg-white shadow overflow-hidden sm:rounded-lg">
                    <div class="px-4 py-5 sm:px-6 flex justify-between items-center">
                        <h2 class="text-lg font-medium text-gray-900">Mes Rendez-vous</h2>
                        <div class="flex space-x-3">
                            <select id="statusFilter"  class="rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">
                                <option value="all">Tous les statuts</option>
                                <option value="confirmed">Confirmés</option>
                                <option value="pending">En attente</option>
                                <option value="cancelled">Annulés</option>
                            </select>
                        </div>
                    </div>
                    <div class="border-t border-gray-200 ">
                        <ul id="appointmentsList" class="divide-y divide-gray-200">
                            <li class="p-4">
                                <div class="flex justify-between items-start">';

                                $id = $_SESSION["user_id"];
                                
                                require_once "../classes/membre.php";
                                
                                try {
                                    $new_membre = new Membre("", "", "", "", "", ""); 
                                    $result = $new_membre->allReservationsMembre($id); 
                                
                                    if ($result->rowCount() > 0) {
                                        while ($rows = $result->fetch(PDO::FETCH_ASSOC)) {
                                            $id_reservation = $rows["id_reservation"];
                                            echo '<li class="p-4">
                                                    <div class="flex justify-between items-start">';
                                            echo '<p class="font-medium w-[30%] text-black"><span class="font-bold text-blue-600 "> Activite </span>: ' . htmlspecialchars($rows['nom_activite']) . '</p>';
                                            echo '<p class="text-sm text-black w-[30%] mt-1"><span class="font-bold text-blue-600 "> date reservation </span>: ' . htmlspecialchars($rows['date_reservation']) . '</p>';
                                            echo '<p class="text-sm text-black  w-[30%] mt-1"><span class="font-bold text-blue-600"> statut </span>: ' . htmlspecialchars($rows['statut']) . '</p>'; // correction de la variable
                                            echo '<div class="flex space-x-2">
                                                    <a href="../classes/functions/confirmReservation.php?id=' . htmlspecialchars($id_reservation) . '">
                                                    <button class="modifier_reserv text-green-600 hover:text-blue-800 text-sm font-medium">
                                                        Confirmer
                                                    </button>
                                                    </a>
                                                    <a href="../classes/functions/cancelReservation.php?id=' . htmlspecialchars($id_reservation) . '">
                                                        <button class="text-red-600 hover:text-red-800 text-sm font-medium">
                                                            Annuler
                                                        </button>
                                                    </a>
                                                </div>
                                            </li>';
                                        }
                                    } else {
                                        echo '<p>Aucune réservation trouvée.</p>';
                                    }
                                } catch (PDOException $e) {
                                    echo 'Erreur : ' . htmlspecialchars($e->getMessage());
                                }
           
                                    ?>
                                   
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>'
        </section>
    </main>


    <script>
        // BOOKING FORM ========================================

        const addBookingForm = document.getElementById('add-booking-form');
        const openBookingPopup = document.getElementById('btn-add-booking');
        const btnConfirmBooking = document.getElementById('confirm-add-booking');
        const btnCancelBooking = document.getElementById('cancel-add-booking');


        btnCancelBooking.addEventListener('click', function(){
            addBookingForm.classList.add('hidden');
        });

        openBookingPopup.addEventListener('click', function(){
            addBookingForm.classList.remove('hidden');
        });


        // ADMIN DASHBOARD ========================================

        const ManageProfile = document.getElementById('member-manage-profile');
        const ManageBooking = document.getElementById('member-manage-bookings');

        const optionProfile = document.getElementById('member-profile-option');
        const optionBooking = document.getElementById('member-bookings-option');


        optionProfile.addEventListener('click', function(){
            ManageProfile.classList.remove('hidden');
            ManageBooking.classList.add('hidden');
        });

        optionBooking.addEventListener('click', function(){
            ManageBooking.classList.remove('hidden');
            ManageProfile.classList.add('hidden');
        });
    </script>
</body>
</html>