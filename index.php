<?php
$options = [
    'location' => 'http://localhost/test/serverSoap.php',
    'uri' => 'http://localhost'
];
//create an instante of the SOAPClient (the API will be available)
$api = new SoapClient( NULL, $options );
//call an API method
echo $api->hello();
echo $api->dzialanie( [ 3, 2 ] );