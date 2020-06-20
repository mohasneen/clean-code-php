<?php 
use PHPUnit\Framework\TestCase; 
  
class PhpunitTestCase extends TestCase 
{ 
    public function testcaseForAssertEmpty() 
    { 
        $area = ''; 
  
        // Assert function to test whether given 
        // area is empty or not 
        $this->assertEmpty( 
            $area, 
            "area is not empty"
        ); 
    } 
} 
  
?> 
