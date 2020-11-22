<?php


/**
 * class for Palindromic String
 * @author Edgar Pelonio<pelonio.edgar@gmail.com>
 */
class Palindrome 
{   
    /**
    *This function checks if $sPalString is a Palindrome
    *@param user input string
    *@return [boolean] [initialize self]
    */
    public static function isPalindrome($sPalString)
    {

        $bRes = false;

        if( $sPalString == strrev($sPalString) ){

            $bRes = true;

        }//end if

        return $bRes;

    }
    /**
    * This function get the longest palendromic substring
    *@param user input string
    *@return [string] [longest Palindrome]
    */
    public static function getLongestPal($sPalString)
    {

        // $iStart = 0;

        // $iEnd = strlen($sPalString);

        $aStrPal = str_split($sPalString);

        $sLongPal = "";

        $iLongPalLen = 0;

        foreach ($aStrPal as $idx => $cFChar) {

            foreach ($aStrPal as $idx2 => $cLChar) {
           
                $sPal = substr($sPalString, $idx,$idx2+1 ) ;

                if(self::isPalindrome($sPal) == true ){

                    $sTempLen = strlen($sPal);

                    if($iLongPalLen < $sTempLen){

                        $sLongPal = $sPal;

                        $iLongPalLen = $sTempLen;
                    }//end if

                }//end if

            }//end foreach

        }//end foreach

        return $sLongPal;

    }
    /**
    * This function get the longest palendromic substring
    *@param user input string
    *@return [string] [longest Palindrome]
    */
    public static function getMinCutPal($sPalString)
    {

        $aStrPal = str_split($sPalString);

        $aPalindrome = array();

        $aTempPalStr = $aStrPal;

        $sTempStrPal  = $sPalString;

        $sOutput = "";


        while ( empty($aTempPalStr) == false) {
           
            $iStart = 0 ;

            $bFoundPal = false;

            for($i= 0 ; $i < count($aTempPalStr); $i++ ){

                $iLSub = $i+1 ;

                $sPal = substr($sTempStrPal, $iStart,$iLSub) ;

                //skip checking 1 char
                if( $iLSub == 1){ continue; }

                if(self::isPalindrome($sPal) == true ){

                    $bFoundPal = true;

                    array_push($aPalindrome, $sPal);

                    array_splice($aTempPalStr, $iStart,$iLSub);

                    $sTempStrPal = implode("", $aTempPalStr);

                    continue;

                }//end if

            }//end for

            if($bFoundPal == false){

                array_push($aPalindrome, $aTempPalStr[0] ) ;

                array_splice($aTempPalStr, $iStart,1);

                $sTempStrPal = implode("", $aTempPalStr);
            }//end if

        }//end while


        $sOutput = count($aPalindrome) - 1 . " // " . implode(" | ",$aPalindrome);

        return $sOutput ;


    }


}