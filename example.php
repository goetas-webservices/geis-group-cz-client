<?php

use GoetasWebservices\SoapServices\SoapClient\ClientFactory;
use GoetasWebservices\SoapServices\SoapClient\Builder\SoapContainerBuilder;
use GoetasWebservices\Client\GeisGroupCz\SoapContainer;
use GoetasWebservices\Client\GeisGroupCz\SoapStubs\IGService;

require __DIR__ . '/vendor/autoload.php';

// project initialization
$container = new SoapContainer();

// use this when cloning this repository and keeping the directory, comment it when including goetas-webservices/geis-group-cz-client via composer
$serializer = SoapContainerBuilder::createSerializerBuilderFromContainer($container)->build();

// uncomment this when including goetas-webservices/geis-group-cz-client via composer
// $serializer = SoapContainerBuilder::createSerializerBuilderFromContainer($container, null, __DIR__ . '/vendor/goetas-webservices/geis-group-cz-client')->build();

$metadata = $container->get('goetas_webservices.soap_client.metadata_reader');
$factory = new ClientFactory($metadata, $serializer);

/**
 * @var $client IGService
 */
$client = $factory->getClient('https://gclient.geis.cz/GService/GService.svc?singlewsdl','BasicHttpBinding_IGService', 'GService');


$result = $client->shipmentDetail(/* put here your params */);

var_dump($result);
