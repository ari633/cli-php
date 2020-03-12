<?php 
namespace App;

class ReadLine {

  static function line() 
  {
    $handle = fopen ("php://stdin","r");
    $line = fgets($handle);
    $string = trim($line);
    if(trim($string) === chr(10)){
        exit;
    }
    return $string;
  }

}

?>