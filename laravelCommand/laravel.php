 #! /usr/bin/env php 

 <?php 

use Amce\NewCommand;
use GuzzleHttp\Client;
use Symfony\Component\Console\Application;

require 'vendor/autoload.php';

 $app = new Application('Laravel Demo', '1.0');

 $app->add(new NewCommand(new GuzzleHttp\Client));

 $app->run();