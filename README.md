# Calculating Pi
This repository contains PHP source codes for the π (Pi) calculation that has been mentioned with the precision of 201 digits on my web page http://petrfaltus.net/petr-faltus-ludolfovo-cislo-vypocet-pi-na-201-desetinnych-mist.php (czech language only).

There are **three polynoms for the π (Pi) calculation implemented** here. Polynoms number 2 and 3 (classes *tPi2.php* and *tPi3.php*) calculate **quick** and are very usefull. The polynom number 1 (class *tPi1.php*) is approaching the π **very slow**, for example few minutes for the precision of 6 digits. This is the reason, why the calculation using the polynom 1 is commented in *do.php* file.

## The version of PHP
The original version in May 2012 was **5.2.10 (cli)**. The current version now in February 2020 (at the time of the transfer to this GitHub repository) is **7.3.10 (cli)**. I also successfully tested PHP versions **5.3.28 (cli)** and **5.4.45 (cli)**.

For these π (Pi) calculations there is the enabled PHP **BCMath extension** required. It means for example to uncomment the line `extension=bcmath` in the main `[PHP]` section of *php.ini* file.

### Cloning to your computer
- install GIT and PHP on your computer
- clone this repository to your computer by the GIT command `git clone https://github.com/petrfaltus/php-calculating-pi.git`

### Running under Linux
- the main *do.php* expect the path of the php executable **/usr/bin/php**. If you have installed the php executable to any other directory, please check it by commands `whereis php` or `which php` and modify the **first row** of *do.php* file
- make sure that the main *do.php* file is **executable**. If not, please correct it for example by the linux command `chmod +x do.php`
- run the main *do.php* file by the linux command `./do.php`

### Running under Windows
- copy the *do.php* file to any other file, for example to *main.php*
- remove the first row **#!/usr/bin/php** from the *main.php* file
- run the main *main.php* file by the command `php main.php`
