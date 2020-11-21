<?php


/**
 * class for Palindromic String
 * @author Edgar Pelonio<pelonio.edgar@gmail.com>
 */
class Palindrome 
{   
    /**
    *@return [object] [initialize self]
    */

    public static function isPalindrome($sPalString)
    {

        $bRes = false;

        if( $sPalString == strrev($sPalString) ){

            $bRes = true;

        }

        return $bRes;

    }

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
                    }

                }

            }

        }

        return $sLongPal;

    }


}