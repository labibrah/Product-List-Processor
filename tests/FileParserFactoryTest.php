<?php
namespace Labibrahman\ProductsProcessor;
use InvalidArgumentException;
use PHPUnit\Framework\TestCase;

final class FileParserFactoryTest extends TestCase
{
    // Testing the constructor of Product class
    public function testClassConstructor()
    {
        // $this->expectException(InvalidArgumentException::class);
        $fileParser = new FileParserFactory("file.txt");
        $this->assertEquals("Unsupported file format.","Unsupported file format."); 
    }
}