<?php 
    //------------- LAUNCH SESSION FOR USERS ---------//
    session_start();

    //------------- CSS SPECIFIC LINKS ---------//
    $cssSpecific = '
        <link rel="stylesheet" href="../public/assets/css/home.css">
    ';

    //------------- LOGIC ---------//
    require_once(__DIR__ . '/../utils/rss_news.php');

    //------------- VIEWS ---------//
    include(__DIR__.'/../view/header.php');
    include(__DIR__.'/../view/navbar.php');
    include(__DIR__.'/../view/home.php');
    include(__DIR__.'/../view/footer.php');
?>