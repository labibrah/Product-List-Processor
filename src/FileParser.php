<?php

namespace Labibrahman\ProductsProcessor;
use InvalidArgumentException;
// Include neccesary classes
include 'Product.php';
include 'UniqueCombinations.php';

interface FileParser
{
    public function parseFile($inputFileName, $outputFileName);
}

class CSVFileParser implements FileParser
{
    public function parseFile($inputFileName, $outputFileName, $delimeter = ',')
    {
        $uniqueCombinations = new UniqueCombinations();

        $header = false;
        $file = fopen($inputFileName, 'r');
        while (!feof($file)) {
            $row = fgetcsv($file, 0, $delimeter);
            if ($row == [NULL] || $row === FALSE) {
                continue;
            }
            if (!$header) {
                $header = $row;
            } else {
                // Handling row by row helps with memory usage when dataset is large
                if (empty($row[0]) || empty($row[1])) {
                    // Throw exception if required fields are empty
                    throw new InvalidArgumentException('\'make\' and \'model\' are required fields and cannot be empty!');
                }
                // Create new Product object here based on field values from dataset
                $currentProduct = new Product($row[0], $row[1], $row[2], $row[3], $row[4], $row[5], $row[6]);
                // Displays row by row each product object representation of the row, uncomment if you want to see each product in terminal
                var_dump($currentProduct);
                // Send current row as a product object here. It checks whether this key exists, if it does it will increment it or else it will create new key.
                $uniqueCombinations->checkCombinationExists($currentProduct);
            }
        }
        // Save unique combinations to file
        $uniqueCombinations->saveToFile($outputFileName);
        fclose($file);
    }
}

// Implement similar classes for other file formats in the future (JSON, XML)