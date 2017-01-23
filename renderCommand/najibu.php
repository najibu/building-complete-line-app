 #! /usr/bin/env php 

 <?php 

use Amce\RenderCommand;
use Symfony\Component\Console\Application;

require 'vendor/autoload.php';

 $app = new Application('Najibu Demo', '1.0');

 $app->add(new RenderCommand);

$app->run();