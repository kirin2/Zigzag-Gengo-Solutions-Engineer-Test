<?php

// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
// error_reporting(E_ALL);

require_once "../class/Palindrome.php";


$sPalString = isset($_REQUEST["str"]) ? $_REQUEST["str"] : "" ;


$bLvl1 = Palindrome::isPalindrome($sPalString);

$slvl1Res = $bLvl1 == true ? "TRUE // its's written the same forward and backward" : 
                             "FALSE // not written the same forward and backward" ;

$bLvl2Res = Palindrome::getLongestPal($sPalString);


$bLvl3Res = Palindrome::getMinCutPal($sPalString);


$aRet  = array(
    "lvl1" => $slvl1Res,
    "lvl2" => $bLvl2Res ,
    "lvl3" => $bLvl3Res
);


echo json_encode($aRet);

?>