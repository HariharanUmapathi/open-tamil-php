<?PHP 

use PHPUnit\Framework\TestCase;
use Tamil\UTF8;

require_once 'src/bootstrap.php';

class UTF8Test extends TestCase
{
    public function testIsNormalised(){
        $input = ['த','மி','பொ','போ','கொ','கோ','கௌ','கெள','ாகெ'];
        $expected = [true,true,true,true,true,true,true,false,false] ;
        $actual = array_map(function($input){
            return UTF8::isNormalized($input);
        },$input);
        
        $this->assertEquals($expected,$actual);
    }
    
}