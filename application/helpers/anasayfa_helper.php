<?php
/**
 * Created by PhpStorm.
 * User: isa
 * Date: 14.03.2017
 * Time: 16:22
 */

function name_edit($urunkelime){
   $str =26;

    if (strlen($urunkelime) < $str){
        return $urunkelime;
    }else{
        return substr($urunkelime,0,$str)."..";
    }

}