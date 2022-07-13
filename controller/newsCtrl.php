<?php 
    //------------- LAUNCH SESSION FOR USERS ---------//
    session_start();

    //------------- CSS SPECIFIC LINKS ---------//
    $cssSpecific = '
        <link rel="stylesheet" href="../public/assets/css/news.css">
    ';

    //------------- TIME PARAMETER IN URL ---------//
    if(!empty($_GET['time'])) {
        $time = $_GET['time'];
        switch($time) {
            case 'day' : 
                $title_news = 'Actualités du jour';
                break;
            case 'week' : 
                $title_news = 'Actualités de la semaine';
                break;
            case 'month' : 
                $title_news = 'Actualités du mois';
                break;
            case 'archive' : 
                $title_news = 'Actualités archivées';
                break;
        }
    }

    //------------- LOGIC ---------//
    require_once(__DIR__ . '/../utils/rss_articles.php');

    //------------- VIEWS ---------//
    include(__DIR__.'/../view/header.php');
    include(__DIR__.'/../view/navbar.php');
    include(__DIR__.'/../view/news.php');
    include(__DIR__.'/../view/footer.php');
?>