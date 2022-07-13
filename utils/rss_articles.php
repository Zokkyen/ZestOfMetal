<?php

//------------- GET RSS FEED ---------//
$flux_articles = trim(file_get_contents("http://feeds.feedburner.com/fr/radiometal"));

//------------- CONVERT FLUX TO ARRAY ---------//
$flux_articles = new SimpleXMLElement($flux_articles);

//------------- GET DATA OF ARTICLES TO DISPLAY---------//
function GetArticlesFromTime (SimpleXMLElement $flux, string $time) : array {

    $counter = 0;
    $okReading = true;
    $dataToSend[] = array();

    foreach ($flux->channel->item as $entry) {

            // Get the title of article
            $getTitle = (string) $entry->title[0];

            // Get the date of article and convert in french like "10 Février 2022"
            $getDateOfArticle = (string) $entry->pubDate[0]; 
            $objDateTime = new DateTime($getDateOfArticle);          
            $weekArticle = $objDateTime->format("W");          
            $calendArticle = IntlCalendar::fromDateTime($objDateTime, 'date.timezone');
            $dateFr = IntlDateFormatter::formatObject($calendArticle, 'd MMMM yyyy', 'fr_FR'); 
            $dateArticleArray = explode(' ', $dateFr);

            // Get current day and convert in french like "10 Février 2022"
            $currentDate = new DateTime();
            $weekCurrent = $objDateTime->format("W");
            $calendCurrent = IntlCalendar::fromDateTime($currentDate, 'date.timezone');
            $nowDate = IntlDateFormatter::formatObject($calendCurrent, 'd MMMM yyyy', 'fr_FR'); 
            $dateCurrentArray = explode(' ', $nowDate);

            // Get the image of article
            // Get image src of content
            preg_match('/img src="([^"]+)"/', (string)$entry->children("content", true), $getImgArticle) ;
            if((count($getImgArticle)-1) > 0){

                // Remove a " at the end
                $getImgClean = substr($getImgArticle[0], 0, -1); // Enlever un quote en trop à la fin
                // Remove the beginning string img src="
                $getImgClean = substr($getImgClean, 9);
                $imgDisplay = "<div class='d-flex mb-2 pb-2 border-bottom border-dark position-relative'>
                                    <img class='bandPicture' src='" . $getImgClean . "' alt='Photo du groupe'>
                                </div>";
            } else {
                $imgDisplay = '';
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
                $fullDescrpt = '<p>' . $descpWithoutATag[0] . '</p>';
            } else {
                $fullDescrpt = '<p>' . $descpWithoutATag[0] . '</p><p>' . $partOfDescrpt[2] . '</p';
            }
            
            // Return articles array in function of time value
            switch($time) {
                case 'day' : 
                    if ($dateArticleArray[0] != $dateCurrentArray[0]){
                        $okReading = false;
                    }
                    break;
                case 'week' : 
                    if ($weekArticle != $weekCurrent){
                        $okReading = false;
                    }                   
                    break;
                case 'month' : 
                    if ($dateArticleArray[1] != $dateCurrentArray[1]){
                        $okReading = false;
                    }                  
                    break;
                // Archives in defaut case
                default : 
                // Get all articles availables
            }

            if($okReading) {
                $dataToSend[$counter][0] = $getTitle;
                $dataToSend[$counter][1] = $dateFr;
                $dataToSend[$counter][2] = $imgDisplay;
                $dataToSend[$counter][3] = $fullDescrpt;                
            }
            else {
                return $dataToSend;
            }

            // counter increment to test with number of article needed
            $counter++;
    }
}