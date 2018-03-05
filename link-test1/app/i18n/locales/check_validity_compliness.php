<pre>
<?php

include('translation.php');

$ENGLISH = "en";
$DEUTCH = "de";

$english_files = [];
$deutch_files = [];
$array_all_call[$ENGLISH]['variable'] = [];
$array_all_call[$DEUTCH]['variable'] = [];
$array_all_call[$ENGLISH]['file'] = [];
$array_all_call[$DEUTCH]['file'] = [];

$english_dir = "../../en/";
$deutch_dir = "../../de/";

listFolderFiles($english_dir, null,$ENGLISH);
listFolderFiles($deutch_dir, null,$DEUTCH);



foreach($english_files as $key => $english_file){
    get_variables_from_file($english_dir.''.$english_file, $ENGLISH);
}

foreach($deutch_files as $key => $deutch_file){
    get_variables_from_file($deutch_dir.''.$deutch_file , $DEUTCH);
}

echo ("\n\n****************************** CHECK VALIDITY OF VARIABLE ******************************\n\n");
check_validity_variables();

echo ("\n\n\n****************************** COMPARE THE DIFFERENT ARRAYS OF LANGUE ******************************\n\n");
checkArray($master_dictionary, $nbLanguages);


function checkArray($array, $nbLangue){
    global $master_dictionary, $DEUTCH, $ENGLISH;
    $nombre_translation = [];
    $index = 0;
    $success_english = true;
    $success_deutch = true;
    if (is_array($array ))
    {
        foreach($array as $key => $subArray){
            $nombre_translation[$index] = count($subArray);
            foreach($subArray as $subkey => $subsubArray){}
            $index++;
        }
        
        if ($nombre_translation[0] !== $nombre_translation[1] ){
            echo ("WARNING : translation is missing. ".$nombre_translation[0]." variables in English and ".$nombre_translation[1]." variables in Deutch.\n"); 
        }         
    }
    
    $result_missing_in_deutch = array_diff_key($master_dictionary[$ENGLISH],$master_dictionary[$DEUTCH]);
    $result_missing_in_english = array_diff_key($master_dictionary[$DEUTCH],$master_dictionary[$ENGLISH]);

    echo ("\n ****************** ENGLISH FOLDER ****************\n\n");
    foreach($result_missing_in_english as $key => $value){
        echo ("WARNING : The variable ".$key." is not in the English translation but present in the Deutch.\n"); 
        $success_english = false;
    }
    if ($success_english) echo (" ======> successful \n");

    
    echo ("\n ****************** DEUTCH FOLDER ****************\n\n");
    foreach($result_missing_in_deutch as $key => $value){
        echo ("WARNING : The variable ".$key." is not in the Deutch translation but present in the English.\n"); 
        $success_deutch = false;
    }
    if ($success_deutch) echo (" ======> successful \n");


}

function listFolderFiles($dir, $subdirectory, $langue){
    global $english_files, $deutch_files,$ENGLISH,$DEUTCH ;
    
    if ($langue === $ENGLISH){
        $ffs = scandir($dir);
        foreach($ffs as $ff){
            if($ff != '.' && $ff != '..'){
                if(is_dir($dir.'/'.$ff)){
                    if ($subdirectory !== null){
                        listFolderFiles($dir.'/'.$ff, $subdirectory."/".$ff,$ENGLISH);
                    }
                    else listFolderFiles($dir.'/'.$ff, $ff,$ENGLISH);
                }
                else{
                    if ($subdirectory !== null){
                        array_push($english_files ,$subdirectory."/".$ff);    
                    }
                    else {
                        array_push($english_files ,$ff);
                    }
                }
            }
        }
    }

    if ($langue === $DEUTCH){
        $ffs = scandir($dir);
        foreach($ffs as $ff){
            if($ff != '.' && $ff != '..'){
                if(is_dir($dir.'/'.$ff)){
                    if ($subdirectory !== null){
                        listFolderFiles($dir.'/'.$ff, $subdirectory."/".$ff,$DEUTCH);
                    }
                    else listFolderFiles($dir.'/'.$ff, $ff,$DEUTCH);
                }
                else{
                    if ($subdirectory !== null){
                        array_push($deutch_files ,$subdirectory."/".$ff);    
                    }
                    else {
                        array_push($deutch_files ,$ff);
                    }
                }
            }
        }
    }    
}

function get_variables_from_file($file, $langue){
    global $array_all_call,$ENGLISH,$DEUTCH;
    $pattern = "/\s*<\?php\s+say\([\"'](.*)[\"']\);\s*\?/";
    $txt_file  = file_get_contents($file);
    
    if (preg_match_all($pattern,$txt_file, $matches)){
            foreach($matches[1] as $match){
                if ($langue === $ENGLISH){
                    array_push($array_all_call[$ENGLISH]['variable'],$match);
                    array_push($array_all_call[$ENGLISH]['file'],$file);
                }   
                if ($langue === $DEUTCH){
                    array_push($array_all_call[$DEUTCH]['variable'],$match);
                    array_push($array_all_call[$DEUTCH]['file'],$file);
                }   
            }
        }
}

function check_validity_variables(){
    global $array_all_call, $master_dictionary,$ENGLISH,$DEUTCH;
    $success_english = true;
    $success_deutch = true;
    echo ("\n ****************** ENGLISH FOLDER ****************\n\n");
    foreach ($array_all_call[$ENGLISH]['variable'] as $key => $value) {
       if (!array_key_exists($value, $master_dictionary[$ENGLISH])){
           $success_english = false;
           echo "ERROR : the variable '".$value."' from '".$array_all_call[$ENGLISH]['file'][$key]."' doesn't exist in the tab of English translation.\n";
       }
    }
    if ($success_english) echo (" ======> successful \n\n\n");
    
    echo ("\n ****************** DEUTCH FOLDER ****************\n\n");
    foreach ($array_all_call[$DEUTCH]['variable'] as $key => $value) {
       if (!array_key_exists($value, $master_dictionary[$DEUTCH])){
           $success_deutch = false;
           echo "ERROR : the variable '".$value."' from '".$array_all_call[$DEUTCH]['file'][$key]."' doesn't exist in the tab of Deutch translation.\n";
       }       
    }
    if ($success_deutch) echo (" ======> successful \n\n");
}

?>
</pre>