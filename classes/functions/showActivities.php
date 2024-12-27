<?php
    require_once "../users.php";
    
    $user = new User("", "", "", "", "", "");

    $activities = $user->showActivities();

    if ($activities) {
        while($activities){
            echo "<tr class='bg-white divide-y divide-gray-200'>";
                echo "<td class='px-6 py-4 whitespace-nowrap'>".$activities['nom_activite']."</td>";
                echo "<td class='px-6 py-4 whitespace-nowrap'>".$activities['description']."</td>";
                echo "<td class='px-6 py-4 whitespace-nowrap'>".$activities['capacite']."</td>";
                echo "<td class='px-6 py-4 whitespace-nowrap'>".$activities['date_debut']."</td>";
                echo "<td class='px-6 py-4 whitespace-nowrap'>".$activities['date_fin']."</td>";
                echo "<td class='px-6 py-4 whitespace-nowrap'>".$activities['disponibilite']."</td>";
                echo "<td class='px-6 py-4 whitespace-nowrap'>
                    <button class='px-4 py-2 font-medium text-white bg-blue-600 rounded-md hover:bg-blue-500 focus:outline-none focus:shadow-outline-blue active:bg-blue-600 transition duration-150 ease-in-out'>Edit</button>
                    <a href='delete_activity.php?id=".$activities['id_activite']."'><button class='ml-2 px-4 py-2 font-medium text-white bg-red-600 rounded-md hover:bg-red-500 focus:outline-none focus:shadow-outline-red active:bg-red-600 transition duration-150 ease-in-out'>Delete</button></a>
                    </td>";
            echo "</tr>";
        }
    } else {
        echo "Erreur lors de la récupération des activités.";
    }
?>