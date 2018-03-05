<?php include($_SERVER["DOCUMENT_ROOT"].'/i18n/locales/translation.php'); 

$data = file_get_contents("php://input"); 
$objData = json_decode($data);

$variable  = $objData->variable;
$language = $objData->language;
$contentHtml = $objData->contentHtml;
$contentMarkdown = $objData->contentMarkdown;


$NB_BACKUP = 100;

foreach($master_dictionary[$language] as $key => $value){
    if ($key === $variable){
        unset($master_dictionary[$language][$variable]);
    }
}
$master_dictionary[$language][$variable]["html"] = $contentHtml;
$master_dictionary[$language][$variable]["markdown"] = $contentMarkdown;


$file = "../i18n/locales/".$language.".json";
$date = date("YmdHis");

$new = 'backup/'.$language.'/backup_'.$date.'.json';  
$files = glob( '../translation-app/backup/'.$language.'/*.*' );


copy($file, $new);

$fp = fopen($file, "w");

if ($fp == null){
    echo 'error_fopen';
}

fwrite($fp, json_encode($master_dictionary[$language],JSON_PRETTY_PRINT));

fclose($fp);


// DELETE THE OLDEST BACKUP 


$exclude_files = array('.', '..');

if (count($files) >= $NB_BACKUP ){
    if (!in_array($files, $exclude_files)) {
    // Sort files by modified time, latest to earliest
    // Use SORT_ASC in place of SORT_DESC for earliest to latest

    array_multisort(
        array_map( 'filemtime', $files ), SORT_NUMERIC, SORT_ASC, $files);
    }

    unlink ($files[0]);
}

?>
