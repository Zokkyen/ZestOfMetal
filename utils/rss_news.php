<?php

//------------- GET RSS FEED ---------//
$flux_news = trim(file_get_contents("http://feeds.feedburner.com/fr/radiometal/news"));

//------------- CONVERT FLUX TO ARRAY ---------//
$flux_news = new SimpleXMLElement($flux_news);

//------------- GET DATA OF ARTICLES TO DISPLAY---------//
function GetArticlesFromFlux (SimpleXMLElement $flux, int $nbArticle) : array {

    $counter = 0;
    $dataToSend[] = array();

    foreach ($flux->channel->item as $entry) {
        if($counter < $nbArticle)  {

            // Get the title of article
            $getTitle = (string) $entry->title[0];
            $dataToSend[$counter][0] = $getTitle;

            // Get the date of article and convert in french like "10 Février 2022"
            $getDateOfArticle = (string) $entry->pubDate[0]; 
            $objDateTime = new DateTime($getDateOfArticle);
            $cal = IntlCalendar::fromDateTime($objDateTime, 'date.timezone');
            $dateFr = IntlDateFormatter::formatObject($cal, 'd MMMM yyyy', 'fr_FR'); 
            $dataToSend[$counter][1] = $dateFr;

            // Get the image of article
            // Get image src of content
            preg_match('/img src="([^"]+)"/', (string)$entry->children("content", true), $getImgArticle) ;
            if((count($getImgArticle)-1) > 0){

                // Remove a " at the end
                $getImgClean = substr($getImgArticle[0], 0, -1); // Enlever un quote en trop à la fin
                // Remove the beginning string img src="
                $getImgClean = substr($getImgClean, 9);
                $dataToSend[$counter][2] = "<div class='d-flex mb-2 pb-2 border-bottom border-dark position-relative'>
                                                <img class='bandPicture' src='" . $getImgClean . "' alt='Photo du groupe'>
                                            </div>";
            } else {
                $dataToSend[$counter][2] = '';
            }

            // Get the description of article
            // Get all part of the content
            $partOfDescrpt = explode('<p>', (string)$entry->children("content", true));

            // Return a resume of article
            preg_match('/Tracklist/', $partOfDescrpt[2], $haveTracklistResume);
            preg_match('/Visuel/', $partOfDescrpt[2], $haveVisualResume);

            // Remove tag a in first part of description if existing
            $descpWithoutATag = explode('<a', $partOfDescrpt[1]);

            if ((count($haveTracklistResume) > 0) ||  (count($haveVisualResume) > 0)) {
                $dataToSend[$counter][3] = '<p>' . $descpWithoutATag[0] . '</p>';
            } else {
                $dataToSend[$counter][3] = '<p>' . $descpWithoutATag[0] . '</p><p>' . $partOfDescrpt[2] . '</p';
            }

            // counter increment to test with number of article needed
            $counter++;
        } else {
            return $dataToSend;
        }
    }
}