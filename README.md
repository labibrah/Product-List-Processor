
# Supplier Product List Processor

This command-line application reads in a text file of product descrpitions and creates an output file with count of each unique product combination. After passing in arguments for input and output file, it reads the input file and generates a unique combinations file. The file parser factory provides the appropriate file parser based on extension. Exception is thrown if required fields are missing. 



## Demo

Link to demo video:

https://drive.google.com/file/d/1u7K6jrjX3Bx4LUe5ARaxe57QmL8Pp3Vt/view?usp=sharing


## Installation

In the src directory, type in 'php' followed by 'parse.php' followed by arguments for input and output filenames. Example:

```bash
  parser.php --file example_1.csv --unique-combinations=combination_count.csv
```
Output file from parsing 'products_comma_separated.csv' is given as 'combination_count.csv'. To re-generate file, delete the 'combination_count.csv' and run command again from src directory.
    
## Examples

Upon running the command above, the detail of each product will be printed and a file will be generated containing unique combinations. Example:
```bash
object(Labibrahman\ProductsProcessor\Product)#4 (7) {
  ["make":"Labibrahman\ProductsProcessor\Product":private]=>
  string(7) "Samsung"
  ["model":"Labibrahman\ProductsProcessor\Product":private]=>
  string(10) "EP-TA20EWE"
  ["colour":"Labibrahman\ProductsProcessor\Product":private]=>
  string(5) "White"
  ["capacity":"Labibrahman\ProductsProcessor\Product":private]=>
  string(14) "Not Applicable"
  ["network":"Labibrahman\ProductsProcessor\Product":private]=>
  string(14) "Not Applicable"
  ["grade":"Labibrahman\ProductsProcessor\Product":private]=>
  string(9) "Brand New"
  ["condition":"Labibrahman\ProductsProcessor\Product":private]=>
  string(9) "Brand New"
}
```
If required fields ('make' or 'model') are missing, exception will be thrown. Example:

```bash
PHP Fatal error:  Uncaught Exception: 'make' and 'model' are required fields and cannot be empty! in /src/FileParser.php:30
Stack trace:
#0 /src/parser.php(29): CSVFileParser->parseFile('example_1.csv', 'combination_cou...')
#1 {main}
  thrown in /src/FileParser.php on line 30
Fatal error: Uncaught Exception: 'make' and 'model' are required fields and cannot be empty! in /src/FileParser.php:30
Stack trace:
#0 /src/parser.php(29): CSVFileParser->parseFile('example_1.csv', 'combination_cou...')
#1 {main}
  thrown in /src/FileParser.php on line 30
```


## Running Unit Tests

Unit testing has been done using PHPUnit. Only test file classes have been uploaded. To run tests, install composer.
Example for installing on macOS using brew:
```bash
  brew install composer
```
After installing, in your src directory, run in terminal:

```bash
  composer init
```

Follow the prompt, filling in the details as required (the default values are fine). You can set the project description, author name (or contributors' names), minimum stability for dependencies, project type, license, and define your dependencies.

You can skip the dependencies part, as we are not installing any dependencies. PHPUnit is supposed to be a dev-dependency because testing as a whole should only happen during development.

Now, when the prompt asks Would you like to define your dev dependencies (require-dev) interactively [yes]?, press enter to accept. Then type in phpunit/phpunit to install PHPUnit as a dev-dependency.

Accept the other defaults and proceed to generating the composer.json file. 

At the top of each file uncomment and change the namespace to your namespace. After which run:

```bash
  ./vendor/bin/phpunit tests/<{test-file-name}.php>
```

Example of test result:

```bash
  (base) MacBook-Pro:products-processor labibrahman$ ./vendor/bin/phpunit tests
PHPUnit 11.0.3 by Sebastian Bergmann and contributors.

Runtime:       PHP 8.3.3

.                                                                   1 / 1 (100%)

Time: 00:00.012, Memory: 6.00 MB

OK (1 test, 7 assertions)
```
