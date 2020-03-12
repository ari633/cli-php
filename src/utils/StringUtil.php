<?php 

namespace App\Utils;

use App\Interfaces\InterfaceStringUtil;

/**
 * String util class, a userfull string utilities
 */
class StringUtil implements InterfaceStringUtil
{
    public $string;

    public function __construct(string $string)
    {
        $this->ValidateString($string);
        $this->string = $string;
    }

    public function ToUppercase()
    {
    	return strtoupper($this->string);
    }

    public function ToUpperLower()
    {
        $arrayString = str_split($this->string);
        $string = '';
        foreach ($arrayString as $key => $val) {
            if ($key % 2 == 0) {
                $string .= strtolower($val);
            } else {
                $string .= strtoupper($val);
            }
        }
        return $string;
    }
    
    public function ToCommaSeparated()
    {
        $arrayString = str_split($this->string);
        $output = implode(',', $arrayString);
        return $output;
    }

    private function ValidateString($string) 
    {
        if ($string == '') {
            throw new \InvalidArgumentException("String Empty, Error Processing Request");
        }
    }
}