<?php
namespace Labibrahman\ProductsProcessor;
include 'FileParser.php'; // Include the file

class FileParserFactory
{
    public function getFileParser($fileName)
    {
        $fileExtension = pathinfo($fileName, PATHINFO_EXTENSION);
        switch ($fileExtension) {
            case 'csv':
                $fileParser = new CSVFileParser();
                return $fileParser;
            // Add cases for other file formats (JSON, XML) if needed in future
            default:
                echo "Unsupported file format.\n";
                exit(1);
        }

    }
}


// Implement similar classes for other file formats in the future (JSON, XML etc.)