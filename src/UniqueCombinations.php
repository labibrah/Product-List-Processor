<?php
namespace Labibrahman\ProductsProcessor;
class UniqueCombinations
{
    private $combinations;

    public function __construct()
    {
        // Holds all the keys 
        $this->combinations = array();
    }

    // This function generates key from product and updates it accordingly in the array
    public function checkCombinationExists($product)
    {
        $combinationKey = $product->getMake() . '|' . $product->getModel() . '|' . $product->getColour() . '|' . $product->getCapacity() . '|' . $product->getNetwork() . '|' . $product->getGrade() . '|' . $product->getCondition();

        if (!isset($this->combinations[$combinationKey])) {
            $this->combinations[$combinationKey] = 1;
        } else {
            $this->combinations[$combinationKey]++;
        }
    }

    // This function saves each key to a file along with its count to show the unique combinations
    public function saveToFile($fileName)
    {
        $fileContent = "make,model,colour,capacity,network,grade,condition,count\n";
        foreach ($this->combinations as $combinationKey => $count) {
            $combinationParts = explode('|', $combinationKey);
            $fileContent .= '"' . implode('","', $combinationParts) . '",' . $count . "\n";
        }

        file_put_contents($fileName, $fileContent);
    }
}