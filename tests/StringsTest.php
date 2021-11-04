<?php
declare(strict_types=1);


use PHPUnit\Framework\TestCase;

class StringsTest extends TestCase
{
    public function testMultipop()
    {
        $str = '1,2,3,4,5,6';
        $popped = str_multipop($str, ',', 2);
        $this->assertSame('1,2,3,4', $str);
        $this->assertSame(['5', '6'], $popped);
        
        $str = '1,2,3,4,5,6';
        $popped = str_multipop($str, ',', -1);
        $this->assertSame('1,2,3,4,5,6', $str);
        $this->assertSame([], $popped);
        
        $str = '1,2,3,4,5,6';
        $popped = str_multipop($str, ',', 0);
        $this->assertSame('1,2,3,4,5,6', $str);
        $this->assertSame([], $popped);
        
        $str = '1,2,3,4,5,6';
        $popped = str_multipop($str, '=', 2);
        $this->assertSame('1,2,3,4,5,6', $str);
        $this->assertSame([], $popped);
        
        $str = '1,2,3,4,5,6';
        $popped = str_multipop($str, ',', 6);
        $this->assertSame('', $str);
        $this->assertSame(['1', '2', '3', '4', '5', '6'], $popped);
        
        $str = '1,2,3,4,5,6';
        $popped = str_multipop($str, ',', 7);
        $this->assertSame('', $str);
        $this->assertSame(['1', '2', '3', '4', '5', '6'], $popped);
        
        $str = "dave&=jane&=jenny&=phil";
        $popped = str_multipop($str, '&=', 2);
        $this->assertSame('dave&=jane', $str);
        $this->assertSame(['jenny', 'phil'], $popped);
    }
    
    public function testMultishift()
    {
        $str = '1,2,3,4,5,6';
        $popped = str_multishift($str, ',', 2);
        $this->assertSame('3,4,5,6', $str);
        $this->assertSame(['1', '2'], $popped);
        
        $str = '1,2,3,4,5,6';
        $popped = str_multishift($str, ',', -1);
        $this->assertSame('1,2,3,4,5,6', $str);
        $this->assertSame([], $popped);
        
        $str = '1,2,3,4,5,6';
        $popped = str_multishift($str, ',', 0);
        $this->assertSame('1,2,3,4,5,6', $str);
        $this->assertSame([], $popped);
        
        $str = '1,2,3,4,5,6';
        $popped = str_multishift($str, '=', 2);
        $this->assertSame('1,2,3,4,5,6', $str);
        $this->assertSame([], $popped);
        
        $str = '1,2,3,4,5,6';
        $popped = str_multishift($str, ',', 6);
        $this->assertSame('', $str);
        $this->assertSame(['1', '2', '3', '4', '5', '6'], $popped);
        
        $str = '1,2,3,4,5,6';
        $popped = str_multishift($str, ',', 7);
        $this->assertSame('', $str);
        $this->assertSame(['1', '2', '3', '4', '5', '6'], $popped);
        
        $str = "dave&=jane&=jenny&=phil";
        $popped = str_multishift($str, '&=', 2);
        $this->assertSame('jenny&=phil', $str);
        $this->assertSame(['dave', 'jane'], $popped);
    }
    
    public function testPopex()
    {
        $str = '1,2,3,4,5,6';
        $popped = str_popex($str, ',');
        $this->assertSame('1,2,3,4,5', $str);
        $this->assertSame('6', $popped);
        
        $str = '1,2,3,4,5,6';
        $popped = str_popex($str, '=');
        $this->assertSame('1,2,3,4,5,6', $str);
        $this->assertSame('', $popped);
    }
    
    public function testShiftex()
    {
        $str = '1,2,3,4,5,6';
        $popped = str_shiftex($str, ',');
        $this->assertSame('2,3,4,5,6', $str);
        $this->assertSame('1', $popped);
        
        $str = '1,2,3,4,5,6';
        $popped = str_shiftex($str, '=');
        $this->assertSame('1,2,3,4,5,6', $str);
        $this->assertSame('', $popped);
    }
}