<?php

session_start();

/*For each client, we store is language as a default language for the page in $_SESSION["Origin_lang"].
We use a session to be sure that the redirect doesnt create an infinite loop, and that set up the default only once per user/session. */

$requestedLang = substr($_SERVER['PHP_SELF'], 0, 3);

if (!isset($_SESSION["Origin_lang"])) {

    if(isset($_SERVER['HTTP_ACCEPT_LANGUAGE'])){
        $_SESSION["Origin_lang"]= substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
    }
    else{
        $_SESSION["Origin_lang"]="en";
    }

  switch ($_SESSION["Origin_lang"]) {

                case "de" :
                    if($requestedLang !== "/de") /* if we are not already on the german page, we redirect there*/
                        header("Location: /de".$_SERVER['PHP_SELF']);
                    break;

                default :
                    $_SESSION["Origin_lang"]="";
                    break;
        }
  }

?>
