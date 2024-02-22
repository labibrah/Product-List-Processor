<?php
namespace Labibrahman\ProductsProcessor;

include 'FileParserFactory.php'; // Include the file to get parsing method

//Check whether CLI arguments have been provided correctly
if ($argc < 3) {
    echo "Incorrect command line arguments. Please follow usage below:\n";
    echo "Syntax: php parser.php --file <input_file_name> --unique-combinations=<unique_combinations_output_file>\n";
    echo "Example: php parser.php --file example_1.csv --unique-combinations=combination_count.csv\n";
    exit(1);
}

// Parse CLI arguments
$longopts = array(
    "file:",     // Required value
    "unique-combinations::",    // Optional value
);

// Array to hold CLI arguments passed
$options = getopt("", $longopts);

$inputFileName = $options["file"]; // "example_1.csv"
$uniqueCombinations = $options["unique-combinations"]; // "combination_count.csv"


// Create new file parser factory object and call method to get appropriate parser based on extension
$fileParserFactory = new FileParserFactory();
$fileParser = $fileParserFactory->getFileParser($inputFileName);
$fileParser->parseFile($inputFileName, $uniqueCombinations);

