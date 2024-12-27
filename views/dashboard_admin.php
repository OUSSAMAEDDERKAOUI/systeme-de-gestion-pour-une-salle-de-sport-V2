<?php
session_start();
if ($_SESSION['user_role'] !== 'admin') {
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

</head>

<body class="flex">

    <aside
        class="flex flex-col w-64 h-screen px-4 py-8 overflow-y-auto bg-white border-r rtl:border-r-0 rtl:border-l dark:bg-black dark:border-gray-700">
        <a href="#" class="mx-auto">
            <img class="w-auto h-6 sm:h-7" src="../assets/img/logo.png" alt="">
        </a>

        <div class="flex flex-col items-center mt-6 -mx-2">
            <img class="object-cover w-24 h-24 mx-2 rounded-full"
                src="https://images.unsplash.com/photo-1624561172888-ac93c696e10c?q=80&w=1889&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                alt="avatar">
            <h4 class="mx-2 mt-2 font-medium text-gray-800 dark:text-gray-200">Admin</h4>
            <p class="mx-2 mt-1 text-sm font-medium text-gray-600 dark:text-gray-400">
                <?php echo $_SESSION['user_email']; ?></p>
        </div>

        <div class="flex flex-col justify-between flex-1 mt-6">
            <nav>
                <div id="admin-statistics-option" class="flex items-center px-4 py-2 text-gray-600 transition-colors duration-300 transform rounded-lg dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-800 dark:hover:text-gray-200 hover:text-gray-700 cursor-pointer">
                    <svg class="w-5 h-5" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M19 11H5M19 11C20.1046 11 21 11.8954 21 13V19C21 20.1046 20.1046 21 19 21H5C3.89543 21 3 20.1046 3 19V13C3 11.8954 3.89543 11 5 11M19 11V9C19 7.89543 18.1046 7 17 7M5 11V9C5 7.89543 5.89543 7 7 7M7 7V5C7 3.89543 7.89543 3 9 3H15C16.1046 3 17 3.89543 17 5V7M7 7H17"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>

                    <span class="mx-4 font-medium">Statistics</span>
                </div>

                <div id="admin-members-option" class="flex items-center px-4 py-2 mt-5 text-gray-600 transition-colors duration-300 transform rounded-lg dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-800 dark:hover:text-gray-200 hover:text-gray-700 cursor-pointer">
                    <svg class="w-5 h-5" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M16 7C16 9.20914 14.2091 11 12 11C9.79086 11 8 9.20914 8 7C8 4.79086 9.79086 3 12 3C14.2091 3 16 4.79086 16 7Z"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M12 14C8.13401 14 5 17.134 5 21H19C19 17.134 15.866 14 12 14Z" stroke="currentColor"
                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>

                    <span class="mx-4 font-medium">Members</span>
                </div>

                <div id="admin-activities-option" class="flex items-center px-4 py-2 mt-5 text-gray-600 transition-colors duration-300 transform rounded-lg dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-800 dark:hover:text-gray-200 hover:text-gray-700 cursor-pointer">
                    <svg class="w-5 h-5" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M15 5V7M15 11V13M15 17V19M5 5C3.89543 5 3 5.89543 3 7V10C4.10457 10 5 10.8954 5 12C5 13.1046 4.10457 14 3 14V17C3 18.1046 3.89543 19 5 19H19C20.1046 19 21 18.1046 21 17V14C19.8954 14 19 13.1046 19 12C19 10.8954 19.8954 10 21 10V7C21 5.89543 20.1046 5 19 5H5Z"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>

                    <span class="mx-4 font-medium">Activities</span>
                </div>

                <div id="admin-bookings-option" class="flex items-center px-4 py-2 mt-5 text-gray-600 transition-colors duration-300 transform rounded-lg dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-800 dark:hover:text-gray-200 hover:text-gray-700 cursor-pointer">
                    <svg class="w-5 h-5" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M10.3246 4.31731C10.751 2.5609 13.249 2.5609 13.6754 4.31731C13.9508 5.45193 15.2507 5.99038 16.2478 5.38285C17.7913 4.44239 19.5576 6.2087 18.6172 7.75218C18.0096 8.74925 18.5481 10.0492 19.6827 10.3246C21.4391 10.751 21.4391 13.249 19.6827 13.6754C18.5481 13.9508 18.0096 15.2507 18.6172 16.2478C19.5576 17.7913 17.7913 19.5576 16.2478 18.6172C15.2507 18.0096 13.9508 18.5481 13.6754 19.6827C13.249 21.4391 10.751 21.4391 10.3246 19.6827C10.0492 18.5481 8.74926 18.0096 7.75219 18.6172C6.2087 19.5576 4.44239 17.7913 5.38285 16.2478C5.99038 15.2507 5.45193 13.9508 4.31731 13.6754C2.5609 13.249 2.5609 10.751 4.31731 10.3246C5.45193 10.0492 5.99037 8.74926 5.38285 7.75218C4.44239 6.2087 6.2087 4.44239 7.75219 5.38285C8.74926 5.99037 10.0492 5.45193 10.3246 4.31731Z"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        <path
                            d="M15 12C15 13.6569 13.6569 15 12 15C10.3431 15 9 13.6569 9 12C9 10.3431 10.3431 9 12 9C13.6569 9 15 10.3431 15 12Z"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>

                    <span class="mx-4 font-medium">Bookings</span>
                </div>
            </nav>
        </div>

        <div class="flex items-center justify-end mt-5">
            <a href="../classes/functions/logout.php"
                class="text-gray-400 text-xs underline duration-500 hover:text-gray-200">Disconnect</a>
        </div>
    </aside>
    

    <main class="w-full bg-gray-200 h-screen text-black">
        <!-- STATISTICS SECTION -->
        <section id="admin-manage-statistics" class="grid grid-cols-3 gap-10 px-14 py-10 text-center">
            <div
                class="flex flex-col gap-8 items-center justify-center p-5 bg-white shadow-sm shadow-gray-500 border-t-8 border-green-500 rounded-md flex-1">
                <h1 class="text-2xl font-semibold">Confirmed Reservations</h1>
                <h2 class="text-xl font-semibold">
                    <?php
                        require_once "../classes/reservations.php";
    
                        $booking = new Reservation("", "", "", "", "");
                    
                        $reservations = $booking->confirmedReservation();

                        echo $reservations['nbr_reservations_confirme'];
                    ?>
                </h2>
            </div>
            <div
                class="flex flex-col gap-8 items-center justify-center p-5 bg-white shadow-sm shadow-gray-500 border-t-8 border-red-500 rounded-md flex-1">
                <h1 class="text-2xl font-semibold">Canceled Reservations</h1>
                <h2 class="text-xl font-semibold">
                    <?php
                        require_once "../classes/reservations.php";
    
                        $booking = new Reservation("", "", "", "", "");
                    
                        $reservations = $booking->rejectedReservation();

                        echo $reservations['nbr_reservations_annule'];
                    ?>
                </h2>
            </div>
            <div
                class="flex flex-col gap-8 items-center justify-center p-5 bg-white shadow-sm shadow-gray-500 border-t-8 border-blue-500 rounded-md flex-1">
                <h1 class="text-2xl font-semibold">Moyenne Capacité des Activités</h1>
                <h2 class="text-xl font-semibold">
                    <?php
                        require_once "../classes/activites.php";
    
                        $activite = new Activite("", "", "", "", "", "");
                    
                        $activities = $activite->moyenneCapacite();

                        echo (int)$activities['moy_capacite'];
                    ?>
                </h2>
            </div>
            <div
                class="flex flex-col gap-8 items-center justify-center p-5 bg-white shadow-sm shadow-gray-500 border-t-8 border-yellow-500 rounded-md flex-1">
                <h1 class="text-2xl font-semibold">Nombre des Membres qui ont Réservé</h1>
                <h2 class="text-xl font-semibold">
                    <?php
                        require_once "../classes/reservations.php";
    
                        $booking = new Reservation("", "", "", "", "");
                    
                        $members = $booking->nbrMembersReserved();

                        echo $members['nbr_membres'];
                    ?>
                </h2>
            </div>
            <div
                class="col-span-2 flex flex-col gap-8 text-left justify-center p-5 bg-white shadow-sm shadow-gray-500 border-t-8 border-purple-500 rounded-md flex-1">
                <h1 class="text-2xl font-semibold">Les Activités les Plus Réservés</h1>
                <h2 class="text-lg font-light">
                    <?php
                        require_once "../classes/reservations.php";
    
                        $booking = new Reservation("", "", "", "", "");
                    
                        $activites = $booking->mostReserved();

                        foreach ($activites as $activite){
                            echo "<p class=''> - ".$activite['nom_activite']. " (" . $activite['nbr_reservation'] . " Réservations)</p>";
                        }
                    ?>
                </h2>
            </div>
        </section>

        <!-- ACTIVITY SECTION -->
        <section id="admin-manage-activities" class="hidden overflow-auto w-[85vw] h-screen px-5">
            <div class="" id="manage-activity">
                <div class="flex items-center justify-around py-10">
                    <button id="btn-add-activity" type="button"
                        class="font-bold py-2 px-6 bg-orange-500 rounded-md transition-all duration-200 hover:px-7">ADD
                        NEW ACTIVITY</button>
                    <div class="relative">
                        <input
                            class="appearance-none border-2 pl-10 border-gray-300 hover:border-gray-400 transition-colors rounded-md w-full py-2 px-3 text-gray-800 leading-tight focus:outline-none focus:ring-purple-600 focus:border-purple-600 focus:shadow-outline"
                            id="username" type="text" placeholder="Search..." />
                        <div class="absolute right-0 inset-y-0 flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg"
                                class="-ml-1 mr-3 h-5 w-5 text-gray-400 hover:text-gray-500" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M6 18L18 6M6 6l12 12" />
                            </svg>
                        </div>

                        <div class="absolute left-0 inset-y-0 flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg"
                                class="h-6 w-6 ml-3 text-gray-400 hover:text-gray-500" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-[10px]">
                <table class=" divide-y divide-gray-200">
                    <tr>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-200 uppercase bg-black">Nom</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-200 uppercase bg-black">Description</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-200 uppercase bg-black">Capacité</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-200 uppercase bg-black">Date Debut</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-200 uppercase bg-black">Date Debut</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-200 uppercase bg-black">Disponibilité</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-200 uppercase bg-black">Action</th>
                    </tr>


                    <?php
                        require_once "../classes/users.php";
    
                        $user = new User("", "", "", "", "", "");
                    
                        $activities = $user->showActivities();

                        foreach ($activities as $activity) {
                            echo "<tr class='bg-white divide-y divide-gray-200'>";
                                echo "<td class='px-6 py-4 whitespace-nowrap'>".$activity['nom_activite']."</td>";
                                echo "<td class='px-6 py-4 whitespace-nowrap'>".$activity['description']."</td>";
                                echo "<td class='px-6 py-4 whitespace-nowrap'>".$activity['capacite']."</td>";
                                echo "<td class='px-6 py-4 whitespace-nowrap'>".$activity['date_debut']."</td>";
                                echo "<td class='px-6 py-4 whitespace-nowrap'>".$activity['date_fin']."</td>";
                                echo "<td class='px-6 py-4 whitespace-nowrap'>".$activity['disponibilite']."</td>";
                                echo "<td class='px-6 py-4 whitespace-nowrap'>
                                    <button class='px-4 py-2 font-medium text-white bg-blue-600 rounded-md hover:bg-blue-500 focus:outline-none focus:shadow-outline-blue active:bg-blue-600 transition duration-150 ease-in-out'>Edit</button>
                                    <a href='../classes/functions/deleteActivity.php?id=".$activity['id_activite']."'><button class='ml-2 px-4 py-2 font-medium text-white bg-red-600 rounded-md hover:bg-red-500 focus:outline-none focus:shadow-outline-red active:bg-red-600 transition duration-150 ease-in-out'>Delete</button></a>
                                    </td>";
                            echo "</tr>";
                        }
                    ?>


                </table>
            </div>
        </section>


        <!-- MEMBERS SECTION -->
        <section id="admin-manage-members" class="hidden flex items-center overflow-auto w-[85vw] h-screen px-5">
            <div class="text-[10px]">
                <table class="w-[80vw] divide-y divide-gray-200">
                    <tr>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-200 uppercase bg-black">Prenom</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-200 uppercase bg-black">Nom</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-200 uppercase bg-black">Email</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-200 uppercase bg-black">Téléphone</th>
                    </tr>


                    <?php
                        require_once "../classes/admin.php";
    
                        $admin = new Admin("", "", "", "", "", "");
                    
                        $members = $admin->allMembers();

                        foreach ($members as $member){
                            echo "<tr class='bg-white divide-y divide-gray-200'>";
                                echo "<td class='px-6 py-4 whitespace-nowrap'>".$member['prenom']."</td>";
                                echo "<td class='px-6 py-4 whitespace-nowrap'>".$member['nom']."</td>";
                                echo "<td class='px-6 py-4 whitespace-nowrap'>".$member['email']."</td>";
                                echo "<td class='px-6 py-4 whitespace-nowrap'>".$member['telephone']."</td>";
                            echo "</tr>";
                        }
                    ?>


                </table>
            </div>
        </section>


        <!-- BOOKINGS SECTION -->
        <section id="admin-manage-bookings" class="hidden flex items-center overflow-auto w-[85vw] h-screen px-5">
            <div class="text-[10px]">
                <table class="w-[80vw] divide-y divide-gray-200">
                    <tr>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-200 uppercase bg-black">Prenom</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-200 uppercase bg-black">Nom</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-200 uppercase bg-black">Activite</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-200 uppercase bg-black">Date</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-200 uppercase bg-black">Statut</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-200 uppercase bg-black">Action</th>
                    </tr>


                    <?php
                        require_once "../classes/reservations.php";
    
                        $booking = new Reservation("", "", "", "", "");
                    
                        $reservations = $booking->allReservations();

                        foreach ($reservations as $reservation){
                            echo "<tr class='bg-white divide-y divide-gray-200'>";
                                echo "<td class='px-6 py-4 whitespace-nowrap'>".$reservation['prenom']."</td>";
                                echo "<td class='px-6 py-4 whitespace-nowrap'>".$reservation['nom']."</td>";
                                echo "<td class='px-6 py-4 whitespace-nowrap'>".$reservation['nom_activite']."</td>";
                                echo "<td class='px-6 py-4 whitespace-nowrap'>".$reservation['date_reservation']."</td>";
                                echo "<td class='px-6 py-4 whitespace-nowrap'>".$reservation['statut']."</td>";
                                echo "<td class='px-6 py-4 whitespace-nowrap'>
                                    <a href='../classes/functions/confirmBooking.php?id=".$reservation['id_reservation']."'><button class='px-4 py-2 font-medium text-white bg-blue-600 rounded-md hover:bg-blue-500 focus:outline-none focus:shadow-outline-blue active:bg-blue-600 transition duration-150 ease-in-out'>Confirmer</button></a>
                                    <a href='../classes/functions/cancelBooking.php?id=".$reservation['id_reservation']."'><button class='ml-2 px-4 py-2 font-medium text-white bg-red-600 rounded-md hover:bg-red-500 focus:outline-none focus:shadow-outline-red active:bg-red-600 transition duration-150 ease-in-out'>Annuler</button>
                                    </td>";
                            echo "</tr>";
                        }
                    ?>


                </table>
            </div>
        </section>


        <!-- Add New Activity Form -->
        <section id="add-activity-form" class="hidden absolute top-0 left-0 z-50 w-full h-full bg-black bg-opacity-50">
            <form method="POST" action="../classes/functions/addActivity.php" class="flex flex-col bg-black text-white py-3 px-10 rounded-md w-[50%] gap-3">
                <div id="infos-member" class="flex flex-col gap-3">
                    <label class="font-medium" for="activity-name">Activity Name</label>
                    <input id="activity-name" class="outline-none text-black py-1 font-medium rounded-sm px-4 placeholder:text-gray-500" type="text" name="activity-name" placeholder="Enter the Activity Name" required>

                    <label class="font-medium" for="description">Activity Description</label>
                    <textarea id="description" class="outline-none text-black py-1 font-medium rounded-sm px-4 placeholder:text-gray-500" type="text" name="description" placeholder="Enter the Description Here ..." required></textarea>

                    <label class="font-medium" for="capacite">Activity Capacite</label>
                    <input id="capacite" min="0" class="outline-none text-black py-1 font-medium rounded-sm px-4 placeholder:text-gray-500" type="number" name="capacite" required>

                    <label class="font-medium" for="start-date">Start Date</label>
                    <input id="start-date" class="outline-none text-black py-1 font-medium rounded-sm px-4 placeholder:text-gray-500" type="date" name="start-date" required>

                    <label class="font-medium" for="end-date">End Date</label>
                    <input id="end-date" class="outline-none text-black py-1 font-medium rounded-sm px-4 placeholder:text-gray-500" type="date" name="end-date" required>
                </div>

                <div class="flex justify-end gap-5 mt-3">
                    <button id="confirm-add-activity" name="save" class="font-medium py-1 px-5 bg-orange-500 text-black transition-all duration-300 rounded-sm hover:scale-105" type="submit">Save</button>
                    <button id="cancel-add-activity" class="font-medium py-1 px-5 border border-white rounded-sm transition-all duration-300 hover:text-black hover:bg-gray-500 hover:border-none" type="button">Annuler</button>
                </div>
            </form>
        </section>

    </main>

    <script src="../assets/js/script.js"></script>

</body>
</html>