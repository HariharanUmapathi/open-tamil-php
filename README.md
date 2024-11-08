# open-tamil-php
Open Tamil is PHP Port for https://github.com/Ezhil-Language-Foundation/open-tamil/

# PORT STATUS 
https://docs.google.com/spreadsheets/d/1GYxN1gf1Fw82oAUlK4Lzq0AYDvo5ayWrMjPfPPA0Qwg/edit?usp=sharing

# Setting Up 
I hope PHP is installed already 😁
Install Composer (Version 1 iam using)
Add Composer to Environment path if you are using Windows 

-- `composer setup` to run the dependency tools installation php-cs-fixer 
-- `composer install` to install the dev dependencies phpunit 
-- `composer run-script` to run the script you have pointed in your composer.json
-- `composer lint` to run the php-cs-fixer to fix the code alignment in src/ folder
-- `composer lint-test` to run the php-cs-fixer to fix the code alignment tests/ folder
-- `composer test` to run the unittests 
