<?php
    session_start();
    require_once "../users.php";

    if($_SERVER['REQUEST_METHOD']==='POST'){
        if(isset($_POST['login'])){
            $email = trim(string: $_POST['email']);
            $password = $_POST['password'];

            if (empty($email) || empty($password)) {
                echo "Veuillez remplir tous les champs.";
            }else {
                
                $user = new User("","","","","","");
    
                $loggedInUser = $user->login( $email, $password);
    
                if ($loggedInUser) {
                    
                    
                    $_SESSION['user_id'] = $loggedInUser->get_id();
                    $_SESSION['user_prenom'] = $loggedInUser->get_prenom();
                    $_SESSION['user_nom'] = $loggedInUser->get_nom();
                    $_SESSION['user_email'] = $loggedInUser->get_email();
                    $_SESSION['user_nom'] = $loggedInUser->get_telephone();
                    $_SESSION['user_role'] = $loggedInUser->get_role();

                    if($_SESSION['user_role'] ==='admin'){
                        header("Location: ../../views/dashboard_admin.php");
                    }else{
                        header("Location: ../../views/dashboard_membre.php");
                    }
                    exit;
                } else {
                    echo "Identifiants incorrects.";
                }
            }
            
        }
    }
?>