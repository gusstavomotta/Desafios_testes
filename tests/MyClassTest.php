<?php 
use PHPUnit\Framework\TestCase;

use function PHPUnit\Framework\assertEquals;
use function PHPUnit\Framework\assertFalse;
use function PHPUnit\Framework\assertNotEquals;
use function PHPUnit\Framework\assertNotSame;
use function PHPUnit\Framework\assertNull;
use function PHPUnit\Framework\assertObjectHasProperty;
use function PHPUnit\Framework\assertObjectNotHasProperty;
use function PHPUnit\Framework\assertSame;

require_once "/home/imply/Área de Trabalho/lista 3/Desafios_testes/src/MyClass.php";

class MyClassTest extends TestCase {

    public $usuario;
    public function setUp():void{
        $this->usuario = new MyClass (1 , 'Gustavo', 18);
    }   
    public function testAddMethods(){

        $mock = $this->getMockBuilder (MyClass::class)
        ->disableOriginalConstructor()
        ->addMethods(['fazerAniversario'])
        ->getMock();
        
        assertEquals(true, method_exists($mock, 'fazerAniversario'));
    }
    public function testSetConstructorArgs(){

        $mock = $this->getMockBuilder(MyClass::class)
        ->setConstructorArgs([2, 'gilberto',20])
        ->getMock();
        
        $this->assertEquals(2, $mock->id);
        $this->assertEquals('gilberto', $mock->nome);
        $this->assertEquals('20', $mock->idade);

    }
    public function testSetMockClassName(){

        $mock = $this->getMockBuilder(MyClass::class)
        ->disableOriginalConstructor()
        ->setMockClassName('mockMyClass')
        ->getMock();

        assertEquals('mockMyClass' , get_class($mock));
    }
    public function testDisableOriginalConstructor(){

        $mock = $this->getMockBuilder (MyClass::class)
        ->disableOriginalConstructor()
        ->getMock();

        // assertNull(get_object_vars($mock));
        // assertObjectNotHasProperty('idade', $mock);
        }
    public function testDisableOriginalClone(){

        $mock = $this->getMockBuilder (MyClass::class)
        ->disableOriginalConstructor()
        ->disableOriginalClone()
        ->getMock();

    }
    public function testDisableAutoload(){

        $mock = $this->getMockBuilder (MyClass::class)
        ->disableOriginalConstructor()
        ->disableAutoload()
        ->getMock();
        
    }
    public function testMethodWillReturn(){

        $mock = $this->createMock (MyClass::class);

        $id = 1;
        $mock->method('getId')->willReturn($id);
        assertEquals($id, $mock->getId());
        
    }   
    public function testMethodReturnSelf(){

        $mock = $this->createMock(MyClass::class);
        
        $mock->method('retornaUsuario')
        ->willReturnSelf();

        $this->assertSame($mock, $mock->retornaUsuario($this->usuario));
    }  
}