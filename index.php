<?php 

require __DIR__ . "/vendor/autoload.php";

use Src\Core\Controller;

$user = new Src\Core\Controller();
$user->index();