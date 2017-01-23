 #! /usr/bin/env php 

 <?php 

use Amce\SayHelloCommand;
use Symfony\Component\Console\Application;

require 'vendor/autoload.php';

 $app = new Application('Najibu Demo', '1.0');

 $app->add(new SayHelloCommand);

$app->run();