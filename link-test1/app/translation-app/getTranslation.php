<?php include($_SERVER['DOCUMENT_ROOT'].'/i18n/locales/translation.php'); 

$variable  = $_GET['variable'];
$language = $_GET['language'];
$modeDisplay = $_GET['modeDisplay'];

getContent($variable);

function getContent($variable){
    global $language,$modeDisplay,$variable, $master_dictionary;
    if ($master_dictionary[$language][$variable][$modeDisplay] === null){
        if ($language !== "en" && $master_dictionary["en"][$variable][$modeDisplay] !== null){
            echo $master_dictionary["en"][$variable][$modeDisplay];
            return;
        }
        else{
            echo ("ERROR IN THE TRANSLATION !!!"); 
            return;
         }
    }
    echo $master_dictionary[$language][$variable][$modeDisplay];
}

?>