<?PHP 

echo "Setting up development environment for open-tamil-php".PHP_EOL;

echo "Setting up PHP CS Fixer".PHP_EOL;

system("mkdir -p tools/php-cs-fixer");
system("composer require --working-dir=tools/php-cs-fixer friendsofphp/php-cs-fixer");
