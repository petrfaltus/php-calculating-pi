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

?>
