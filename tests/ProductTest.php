<?php
namespace Labibrahman\ProductsProcessor;
use PHPUnit\Framework\TestCase;

final class ProductTest extends TestCase
{
    // Testing the constructor of Product class
    public function testClassConstructor()
    {
        $product = new Product("Apple", "iPhone 6 64GB", "Working", "Grade A - Very Good Condition", "Not Applicable", "Grey", "Not Applicable");
   
        $this->assertSame('Apple', $product->getMake());
        $this->assertSame("iPhone 6 64GB", $product->getModel());
        $this->assertSame("Working", $product->getCondition());
        $this->assertSame("Grade A - Very Good Condition", $product->getGrade());
        $this->assertSame("Not Applicable", $product->getCapacity());
        $this->assertSame("Grey", $product->getColour());
        $this->assertSame("Not Applicable", $product->getNetwork());



    }
}