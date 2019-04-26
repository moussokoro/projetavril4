<?php
//  LES FONCTIONS
 function checkInput($data){
    $data =  trim($data);
    $data =  stripslashes($data);
    $data =  htmlspecialchars($data);
    return $data;
  }

function name_random($length){
    $alphabet = '123456789azertyuiondsdbsnbdsnbqslkssqlksdjssjsc654314dqdq21pqsdfghjklmwxcvbnAZERTYUIOPQSDFGHJKLMWXCVBN';
    return substr(str_shuffle(str_repeat($alphabet, 100)), 0 , $length);
}

function str_random($length){
    $alphabet = '123456789azertyuiondsdbsnbdsnbqslkssqlksdjssjs654314dqdq21pqsdfghjklmwxcvbnAZERTYUIOPQSDFGHJKLMWXCVBN';
    return substr(str_shuffle(str_repeat($alphabet, 100)), 0 , $length);
  }