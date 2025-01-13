<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

class MyService {
    public function sayHello($name) {
        return "Hello, $name!";
    }

    public function addNumbers($a, $b) {
        return $a + $b;
    }
}

$server = new SoapServer(null, array('uri' => 'http://localhost/soap'));
$server->setClass('MyService');
$server->handle();
?>
