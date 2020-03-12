<?php 
namespace App\Utils;

use App\Interfaces\InterfaceWriteCsv;

class WriteCsv implements InterfaceWriteCsv {
  
  public $string;

  public function __construct(string $string)
  {
    $this->string = $string;
  }

  public function write()
  {
    try {
      $myfile = fopen("myfile.csv", "w");
      fwrite($myfile, $this->string);
      fclose($myfile);
      return "CSV created!";
    } catch (\Exception $e) {
      echo 'Unable to create CSV file';
      echo 'Caught exception: ',  $e->getMessage(), "\n";
    }    
  }

}