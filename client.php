<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

try {
    $client = new SoapClient(null, array(
        'location' => 'http://localhost:8000/server.php',
        'uri' => 'http://localhost/soap',
        'connection_timeout' => 30
    ));

    // Llamadas al servicio SOAP
    $name = "Maria";
    $helloMessage = $client->sayHello($name);
    echo "Respuesta de sayHello: $helloMessage\n";

    $num1 = 5;
    $num2 = 10;
    $sumResult = $client->addNumbers($num1, $num2);
    echo "Respuesta de addNumbers: $sumResult\n";

} catch (SoapFault $e) {
    echo "Error: " . $e->getMessage() . "\n";
    echo "Detalles: " . $e->getTraceAsString() . "\n";
}
?>
