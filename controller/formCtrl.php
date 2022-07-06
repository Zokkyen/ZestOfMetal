<?php
    //------------- LAUNCH SESSION FOR USERS ---------//
    session_start();

    //------------- CSS SPECIFIC LINKS ---------//
    $cssSpecific = '
        <link rel="stylesheet" href="../public/assets/css/form.css">
    ';

    //------------- LOGIC ---------//
    require_once(__DIR__ . '/../utils/regex.php');

    // Initialize arrays for error and valid message
    $errorSignin = [];
    $errorSignup = [];
    $errorButton = [];

    // Enter condition if method of form is POST and Signin form
    if($_SERVER['REQUEST_METHOD'] == 'POST') {
        switch($_POST['sendForm']) {
            
            // Check if button signin was pushed          
            case 'SE CONNECTER' :

                // Filter the pseudo sign in
                if(!empty($logSignin)){
                    $errorSignin['logSignin'] = ERROR_EMPTY;
                } else {
                    $logSignin = trim(filter_input(INPUT_POST, 'logSignin', FILTER_SANITIZE_SPECIAL_CHARS));
                    $result = filter_var($logSignin, FILTER_VALIDATE_REGEXP, array("options" => array("regexp" => '/'. REGEX_PSEUDO .'/')));  
                    if($result == false){ 
                        $errorSignin['logSignin'] = ERROR_REGEX;
                    } else {
                        $logSignin = $result;
                    }
                }

                // Get the password sign in
                if(!empty($pswSignin)){
                    $errorSignin['pswSignin'] = ERROR_EMPTY;
                } else {
                    $pswSignin = $_POST['pswSignin'];
                }

            break;

            // Check if button signup was pushed
            case "S'ENREGISTRER" :

                // Filter the pseudo sign up
                if(!empty($logSignup)){
                    $errorSignup['logSignup'] = ERROR_EMPTY;
                } else {
                    $logSignup = trim(filter_input(INPUT_POST, 'logSignup', FILTER_SANITIZE_SPECIAL_CHARS));
                    $result = filter_var($logSignup, FILTER_VALIDATE_REGEXP, array("options" => array("regexp" => '/'. REGEX_PSEUDO .'/')));  
                    if($result == false){ 
                        $errorSignup['logSignup'] = ERROR_REGEX;
                    } else {
                        $logSignup = $result;
                    }
                }

                // Filter the email
                if(!empty($email)){
                    $errorSignup['mailSignup'] = ERROR_EMPTY;
                } else {
                    $mailSignup = trim(filter_input(INPUT_POST, 'mailSignup', FILTER_SANITIZE_EMAIL));
                    $result = filter_var($mailSignup, FILTER_VALIDATE_EMAIL);
                    if($result == false){
                        $errorSignup['mailSignup'] = ERROR_REGEX;
                    } else {
                        $mailSignup = $result;
                    }     
                }

                // Get the password sign up
                if(!empty($pswSignup1) && !empty($pswSignup2)){
                    $errorSignup['pswSignin'] = ERROR_EMPTY;
                } else if (!empty($pswSignup1)) {
                    $errorSignup['pswSignin'] = 'Le champ du premier mot de passe est vide.';
                } else if  (!empty($pswSignup2)) {
                    $errorSignup['pswSignin'] = 'Le champ du second mot de passe est vide.';
                } else {
                    $pswSignup1 = $_POST['pswSignup1'];
                    $pswSignup2 = $_POST['pswSignup2'];

                    if ($pswSignup1 != $pswSignup2) {
                        $errorSignup['pswSignin'] = 'Les mots de passe ne correspondent pas.';
                    } else {
                        $pswSignup = $pswSignup1;
                    }
                }

            break;

            default : 
                $errorButton['sendForm'] = 'Problème de reconnaissance du bouton';
        }
    }

    // After filtering or get login account, switch file in function
    if(($_SERVER['REQUEST_METHOD'] == 'POST')) {

        // Check if no error on buttons values
        if(empty($errorButton)){
            switch($_POST['sendForm']) {

                // If signin button was pushed
                case 'SE CONNECTER': 
                    if(empty($errorSignin)){
                        if($logSignin == 'Zokkyen' && $pswSignin == 'LaManu80!') {
                            $_SESSION['loggedin'] = true;
                            $_SESSION['username'] = $logSignin;
                            header('location: /admin.html');
                        } else {
                            $_SESSION['loggedin'] = true;
                            $_SESSION['username'] = $logSignin;
                            header('location: /account.html');
                        }                    
                    }
                break;

                // If signup button was pushed
                case "S'ENREGISTRER":
                    if(empty($errorSignup)){
                        $_SESSION['loggedin'] = true;
                        $_SESSION['username'] = $logSignup;
                        header('location: /account.html');
                    }
                break;

                // If value of button is different of signin and signup buttons
                default:
                    // Do nothing and return to form
            }
        }

    }

    //------------- VIEWS ---------//
    include(__DIR__.'/../view/header.php');
    include(__DIR__.'/../view/navbar.php');
    include(__DIR__.'/../view/form.php');
    include(__DIR__.'/../view/footer.php');
?>