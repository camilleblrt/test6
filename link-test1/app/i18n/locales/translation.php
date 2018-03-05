<?php

//require_once 'firebaseLib.php';

// --- set up your own database here
//$url = 'https://flavien.firebaseio.com/';

//$fb = new fireBase($url);
//$jsonArrayDe = $fb->get();
$jsonArrayEn = file_get_contents($_SERVER['DOCUMENT_ROOT'].'/i18n/locales/en.json');
$jsonArrayDe = file_get_contents($_SERVER['DOCUMENT_ROOT'].'/i18n/locales/de.json');

$master_dictionary['de'] = json_decode($jsonArrayDe,true);
$master_dictionary['en'] = json_decode($jsonArrayEn,true);

$languageWithDash = substr($_SERVER['PHP_SELF'], 1, 3);

if ($languageWithDash[2] == "/")
    $language = substr($languageWithDash, 0, 2);      
else
    $language = "en";  



function say($variable){
    global $language, $master_dictionary;
    if ($master_dictionary["en"][$variable]["html"] !== null || $master_dictionary[$language][$variable]["html"] !== null){
        if($master_dictionary[$language][$variable]["html"] != null){
            echo '<span id="'.$variable.'" metadot-translation >'.$master_dictionary[$language][$variable]["html"].'</span>';
            return;
        }
        else{
            echo '<span id="'.$variable.'" metadot-translation >'.$master_dictionary['en'][$variable]["html"].'</span>';
            return; 
        }
    }
    echo '<span id="'.$variable.'" metadot-translation >ERROR IN THE TRANSLATION !!!</span>';
}

?>
