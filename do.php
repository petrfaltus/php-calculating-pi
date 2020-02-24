#!/usr/bin/php
<?php

const BCMATH_EXTENSION = "bcmath";
const PATH_TO_CLASSES = "class";

# test the required extension
if (!extension_loaded(BCMATH_EXTENSION))
  {
   echo "ERROR, the ".BCMATH_EXTENSION." extension is not present.".PHP_EOL;
   echo "- uncomment or add the line 'extension=".BCMATH_EXTENSION."' under the '[PHP]' section in your php.ini file, please".PHP_EOL;

   exit;
  }

# register my classes auto loading
spl_autoload_register(function ($class_name)
{
 $class_source_file_path = PATH_TO_CLASSES."/".$class_name.".php";
 if (is_file($class_source_file_path))
   {
    require_once $class_source_file_path;
   }
});

/*
$precision_digits = 6;

# the algorithm 1
$pi1 = new tPi1($precision_digits);
$pi1->calculate();
$pi1->print_report();
*/

$precision_digits = 201;

# the algorithm 2
$pi2 = new tPi2($precision_digits);
$pi2->calculate();
$pi2->print_report();

# the algorithm 3
$pi3 = new tPi3($precision_digits);
$pi3->calculate();
$pi3->print_report();

?>
