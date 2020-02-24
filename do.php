#!/usr/bin/php
<?php

const BCMATH_EXTENSION = "bcmath";

# test the required extension
if (!extension_loaded(BCMATH_EXTENSION))
  {
   echo "ERROR, the ".BCMATH_EXTENSION." extension is not present.".PHP_EOL;
   echo "- uncomment or add the line 'extension=".BCMATH_EXTENSION."' under the '[PHP]' section in your php.ini file, please".PHP_EOL;

   exit;
  }

?>
