<?php 
    //------------- LOGIC ---------//
    require_once(__DIR__ . '/../utils/regex.php');

    // Initialize arrays for error and valid message
    $errorArray = [];

    // Enter condition if method of form is POST and Signin form
    if($_SERVER['REQUEST_METHOD'] == 'POST') {
        switch($_POST['submit']) {
            case 'login': 
                // Filter the pseudo sign in
                if(empty($logSignin)){
                    $errorArray['logSignin'] = ERROR_EMPTY;
                } else {
                    $logSignin = trim(filter_input(INPUT_POST, 'logSignin', FILTER_SANITIZE_SPECIAL_CHARS));
                    $result = filter_var($logSignin, FILTER_VALIDATE_REGEXP, array("options" => array("regexp" => '/'. REGEX_PSEUDO .'/')));  
                    if($result == false){ 
                        $errorArray['logSignin'] = ERROR_REGEX;
                    } else {
                        $password = $result;
                    }
                }

                // Get the password sign in
                if(empty($pswSignin)){
                    $errorArray['pswSignin'] = ERROR_EMPTY;
                } else {
                    $pswSignin = $_POST['pswSignin'];
                }

                break;

            case 'register':
                // Filter the pseudo sign up
                if(empty($logSignup)){
                    $errorArray['logSignup'] = ERROR_EMPTY;
                } else {
                    $logSignup = trim(filter_input(INPUT_POST, 'logSignup', FILTER_SANITIZE_SPECIAL_CHARS));
                    $result = filter_var($logSignup, FILTER_VALIDATE_REGEXP, array("options" => array("regexp" => '/'. REGEX_PSEUDO .'/')));  
                    if($result == false){ 
                        $errorArray['logSignup'] = ERROR_REGEX;
                    } else {
                        $logSignup = $result;
                    }
                }

                // Filter the email
                if(empty($email)){
                    $errorArray['mailSignup'] = ERROR_EMPTY;
                } else {
                    $mailSignup = trim(filter_input(INPUT_POST, 'mailSignup', FILTER_SANITIZE_EMAIL));
                    $result = filter_var($mailSignup, FILTER_VALIDATE_EMAIL);
                    if($result == false){
                        $errorArray['mailSignup'] = ERROR_REGEX;
                    } else {
                        $mailSignup = $result;
                    }     
                }

                // Get the password sign up
                if(empty($pswSignup1) && empty($pswSignup2)){
                    $errorArray['pswSignin'] = ERROR_EMPTY;
                } else if (empty($pswSignup1)) {
                    $errorArray['pswSignin'] = 'Le champ du premier mot de passe est vide.';
                } else if  (empty($pswSignup2)) {
                    $errorArray['pswSignin'] = 'Le champ du second mot de passe est vide.';
                } else {
                    $pswSignin1 = $_POST['pswSignup1'];
                    $pswSignin2 = $_POST['pswSignup2'];

                    if ($pswSignin1 != $pswSignin2) {
                        $errorArray['pswSignin'] = 'Les mots de passe ne correspondent pas.';
                    } else {
                        $password = $pswSignin1;
                    }
                }

            break;
        }
    }

    // After filtering or get login account, switch file in function
    if($_SERVER['REQUEST_METHOD'] == 'POST' && empty($errorArray)) {

        switch($_POST['submit']) {
            case 'login': 
                if($pseudo == 'Zokkyen' && $password == 'LaManu80!') {
                    header('location: /admin.html');
                } else {
                    header('location: /account.html');
                }
                break;
            case 'register':
                header('location: /account.html');
                break;
        }
    }

    //------------- VIEWS ---------//
    include(__DIR__.'/../view/header.php');
    include(__DIR__.'/../view/navbar.php');
    include(__DIR__.'/../view/form.php');
    include(__DIR__.'/../view/footer.php');
?>