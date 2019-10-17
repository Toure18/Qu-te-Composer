<?php
require_once '../vendor/autoload.php';


$hello = new HelloWorld\SayHello();
echo $hello->world();
echo '<br>';

$hello2 = new \App\Wcs\Hello();
echo $hello2->talk();