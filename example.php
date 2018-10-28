<?php

use GoetasWebservices\SoapServices\SoapClient\ClientFactory;
use GoetasWebservices\SoapServices\SoapClient\Builder\SoapContainerBuilder;
use GoetasWebservices\Client\GeisGrouCz\SoapContainer;
use GoetasWebservices\Client\GeisGrouCz\SoapStubs\IGService;

require __DIR__ . '/vendor/autoload.php';

// project initialization
$container = new SoapContainer();
$serializer = SoapContainerBuilder::createSerializerBuilderFromContainer($container)->build();
$metadata = $container->get('goetas_webservices.soap_client.metadata_reader');
$factory = new ClientFactory($metadata, $serializer);

/**
 * @var $client IGService
 */
$client = $factory->getClient('https://gclient.geis.cz/GService/GService.svc?singlewsdl','BasicHttpBinding_IGService', 'GService');


$result = $client->shipmentDetail(/* put here your params */);

var_dump($result);
