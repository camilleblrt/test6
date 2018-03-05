<?php include($_SERVER["DOCUMENT_ROOT"].'/i18n/locales/translation.php'); 

$variable  = $_GET['variable'];
$language = $_GET['language'];


$date = date("YmdHis");

$files = glob( '../translation-app/backup/'.$language.'/*.*' );




// DELETE THE OLDEST BACKUP 


$exclude_files = array('.', '..');

if (!in_array($files, $exclude_files)) {
// Sort files by modified time, latest to earliest
// Use SORT_ASC in place of SORT_DESC for earliest to latest

array_multisort(
    array_map( 'filemtime', $files ), SORT_NUMERIC, SORT_DESC, $files);
}

$jsonArray = file_get_contents($files[0]);

$dictionary = json_decode($jsonArray,true);

foreach ($dictionary as $key => $previousContent){
    if ($key === $variable){
        echo $dictionary[$variable]["markdown"];
        return;
    }
}

echo "Error there is not previous translation for this content."




?>
