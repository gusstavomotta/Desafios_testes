<?php

use PHPUnit\Framework\TestCase;
use function PHPUnit\Framework\assertEmpty;
use function PHPUnit\Framework\assertEquals;
use function PHPUnit\Framework\assertFalse;
use function PHPUnit\Framework\assertNotEquals;
use function PHPUnit\Framework\assertObjectHasProperty;
use function PHPUnit\Framework\assertObjectNotHasProperty;
use function PHPUnit\Framework\assertSame;
use function PHPUnit\Framework\assertTrue;
// use src\MyClass;

require_once "src/MyClass.php";

class MyClassTest extends TestCase
{

    public function testAddMethods()
    {

        $mock = $this->getMockBuilder(MyClass::class)
            ->disableOriginalConstructor()
            ->addMethods(['fazerAniversario'])
            ->getMock();

        assertTrue(method_exists($mock, 'fazerAniversario'));
        assertFalse(method_exists($mock, 'fazerNiver'));
    }
    public function testSetConstructorArgs()
    {

        $mock = $this->getMockBuilder(MyClass::class)
            ->setConstructorArgs([2, 'gilberto', 20])
            ->getMock();

        assertEquals(2, $mock->id);
        assertEquals('gilberto', $mock->nome);
        assertEquals('20', $mock->idade);

        assertObjectHasProperty('id', $mock);
        assertObjectHasProperty('nome', $mock);
        assertObjectHasProperty('idade', $mock);
        assertObjectNotHasProperty('Genero', $mock);

        // assertObjectHasAttribute('id', $mock);
    }
    public function testSetMockClassName()
    {

        $mock = $this->getMockBuilder(MyClass::class)
            ->disableOriginalConstructor()
            ->setMockClassName('mockMyClass')
            ->getMock();

        assertEquals('mockMyClass', get_class($mock));
        assertNotEquals('classe_mock', get_class($mock));
    }
    public function testDisableOriginalConstructor()
    {

        $mock = $this->getMockBuilder(MyClass::class)
            ->disableOriginalConstructor()
            ->getMock();


        assertEmpty(get_object_vars($mock));
        // assertNotEmpty(get_object_vars($mock));

    }
    public function testDisableOriginalClone()
    {
        $mock = $this->getMockBuilder(MyClass::class)
            ->setConstructorArgs([1, 'Matheus', 19])
            ->disableOriginalClone()
            ->getMock();

        $clone = clone $mock;

        assertEquals(1, $clone->id);
        assertEquals('Matheus', $clone->nome);
        assertEquals(19, $clone->idade);

    }
    // public function testDisableAutoload()
    // {
    //     // try{
    //     $mock = $this->getMockBuilder(MyClass::class)
    //         ->disableOriginalConstructor()
    //         ->disableAutoload()
    //         ->getMock();

    //         $this->expectException(Exception::class);
    //         // spl_autoload_register()
    //         // spl_autoload()
    //         // var_dump($mock);
    //         // spl_autoload_call('MyClass')
    //         $mock->expects($this->once())->method('spl_autoload');

    //     // }catch(Exception){s
    //     //     throw new Exception ('teste');
    //     // }
    // }
    public function testMethodWillReturn()
    {

        $mock = $this->createMock(MyClass::class);

        $id = 1;
        $idNaoValido = 2;

        $mock->method('getId')->willReturn($id);
        assertEquals($id, $mock->getId());
        assertNotEquals($idNaoValido, $mock->getId());
    }
    public function testMethodReturnSelf()
    {

        $mock = $this->createMock(MyClass::class);

        $mock->method('retornaUsuario')
            ->willReturnSelf();

        assertSame($mock, $mock->retornaUsuario());
        // assertNotSame($mock, $mock->retornaUsuario());
    }
}
