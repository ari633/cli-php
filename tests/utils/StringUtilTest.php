<?php 
use PHPUnit\Framework\TestCase;
use App\Utils\StringUtil;


class StringUtilTest extends TestCase {

    public function testToUppercase()
    {
    	$string = new StringUtil('hello world');
        $this->assertEquals('HELLO WORLD', $string->ToUppercase());
    }

    public function testToUpperLower()
    {
    	$string = new StringUtil('hello world');
        $this->assertEquals('hElLo wOrLd', $string->ToUpperLower());
    }

    public function testToCommaSeparated()
    {
    	$string = new StringUtil('hello world');
        $this->assertEquals('h,e,l,l,o, ,w,o,r,l,d', $string->ToCommaSeparated());    	
    }

    public function testInvalidCreateString()
    {
        $this->expectException(\InvalidArgumentException::class);
        $string = new StringUtil('');        
    }

}
