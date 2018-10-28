<?php

namespace GoetasWebservices\Client\GeisGrouCz;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Container;
use Symfony\Component\DependencyInjection\Exception\InvalidArgumentException;
use Symfony\Component\DependencyInjection\Exception\LogicException;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;
use Symfony\Component\DependencyInjection\ParameterBag\FrozenParameterBag;

/*
 * This class has been auto-generated
 * by the Symfony Dependency Injection Component.
 *
 * @final since Symfony 3.3
 */
class SoapContainer extends Container
{
    private $parameters;
    private $targetDirs = array();

    public function __construct()
    {
        $this->parameters = $this->getDefaultParameters();

        $this->services = array();
        $this->methodMap = array(
            'goetas_webservices.soap_client.metadata_reader' => 'getGoetasWebservices_SoapClient_MetadataReaderService',
        );
        $this->privates = array(
            'goetas_webservices.soap_client.metadata_reader' => true,
        );

        $this->aliases = array();
    }

    public function getRemovedIds()
    {
        return array(
            'Psr\\Container\\ContainerInterface' => true,
            'Symfony\\Component\\DependencyInjection\\ContainerInterface' => true,
            'goetas_webservices.soap_client.metadata.generator' => true,
            'goetas_webservices.soap_client.metadata_loader.array' => true,
            'goetas_webservices.soap_client.metadata_loader.dev' => true,
            'goetas_webservices.soap_client.metadata_reader' => true,
            'goetas_webservices.soap_client.stub.class_writer' => true,
            'goetas_webservices.soap_client.stub.client_generator' => true,
            'goetas_webservices.wsdl2php.converter.jms' => true,
            'goetas_webservices.wsdl2php.converter.php' => true,
            'goetas_webservices.wsdl2php.event_dispatcher' => true,
            'goetas_webservices.wsdl2php.soap_reader' => true,
            'goetas_webservices.wsdl2php.wsdl_reader' => true,
            'goetas_webservices.xsd2php.class_writer.php' => true,
            'goetas_webservices.xsd2php.converter.jms' => true,
            'goetas_webservices.xsd2php.converter.php' => true,
            'goetas_webservices.xsd2php.naming_convention' => true,
            'goetas_webservices.xsd2php.naming_convention.long' => true,
            'goetas_webservices.xsd2php.naming_convention.short' => true,
            'goetas_webservices.xsd2php.path_generator.jms' => true,
            'goetas_webservices.xsd2php.path_generator.jms.psr4' => true,
            'goetas_webservices.xsd2php.path_generator.php' => true,
            'goetas_webservices.xsd2php.path_generator.php.psr4' => true,
            'goetas_webservices.xsd2php.php.class_generator' => true,
            'goetas_webservices.xsd2php.schema_reader' => true,
            'goetas_webservices.xsd2php.writer.jms' => true,
            'goetas_webservices.xsd2php.writer.php' => true,
            'logger' => true,
        );
    }

    public function compile()
    {
        throw new LogicException('You cannot compile a dumped container that was already compiled.');
    }

    public function isCompiled()
    {
        return true;
    }

    public function isFrozen()
    {
        @trigger_error(sprintf('The %s() method is deprecated since Symfony 3.3 and will be removed in 4.0. Use the isCompiled() method instead.', __METHOD__), E_USER_DEPRECATED);

        return true;
    }

    /*
     * Gets the private 'goetas_webservices.soap_client.metadata_reader' shared service.
     *
     * @return \GoetasWebservices\SoapServices\SoapClient\Metadata\Loader\ArrayMetadataLoader
     */
    protected function getGoetasWebservices_SoapClient_MetadataReaderService()
    {
        return $this->services['goetas_webservices.soap_client.metadata_reader'] = new \GoetasWebservices\SoapServices\SoapClient\Metadata\Loader\ArrayMetadataLoader($this->parameters['goetas_webservices.soap_client.metadata']);
    }

    public function getParameter($name)
    {
        $name = (string) $name;
        if (!(isset($this->parameters[$name]) || isset($this->loadedDynamicParameters[$name]) || array_key_exists($name, $this->parameters))) {
            $name = $this->normalizeParameterName($name);

            if (!(isset($this->parameters[$name]) || isset($this->loadedDynamicParameters[$name]) || array_key_exists($name, $this->parameters))) {
                throw new InvalidArgumentException(sprintf('The parameter "%s" must be defined.', $name));
            }
        }
        if (isset($this->loadedDynamicParameters[$name])) {
            return $this->loadedDynamicParameters[$name] ? $this->dynamicParameters[$name] : $this->getDynamicParameter($name);
        }

        return $this->parameters[$name];
    }

    public function hasParameter($name)
    {
        $name = (string) $name;
        $name = $this->normalizeParameterName($name);

        return isset($this->parameters[$name]) || isset($this->loadedDynamicParameters[$name]) || array_key_exists($name, $this->parameters);
    }

    public function setParameter($name, $value)
    {
        throw new LogicException('Impossible to call set() on a frozen ParameterBag.');
    }

    public function getParameterBag()
    {
        if (null === $this->parameterBag) {
            $parameters = $this->parameters;
            foreach ($this->loadedDynamicParameters as $name => $loaded) {
                $parameters[$name] = $loaded ? $this->dynamicParameters[$name] : $this->getDynamicParameter($name);
            }
            $this->parameterBag = new FrozenParameterBag($parameters);
        }

        return $this->parameterBag;
    }

    private $loadedDynamicParameters = array();
    private $dynamicParameters = array();

    /*
     * Computes a dynamic parameter.
     *
     * @param string The name of the dynamic parameter to load
     *
     * @return mixed The value of the dynamic parameter
     *
     * @throws InvalidArgumentException When the dynamic parameter does not exist
     */
    private function getDynamicParameter($name)
    {
        throw new InvalidArgumentException(sprintf('The dynamic parameter "%s" must be defined.', $name));
    }

    private $normalizedParameterNames = array();

    private function normalizeParameterName($name)
    {
        if (isset($this->normalizedParameterNames[$normalizedName = strtolower($name)]) || isset($this->parameters[$normalizedName]) || array_key_exists($normalizedName, $this->parameters)) {
            $normalizedName = isset($this->normalizedParameterNames[$normalizedName]) ? $this->normalizedParameterNames[$normalizedName] : $normalizedName;
            if ((string) $name !== $normalizedName) {
                @trigger_error(sprintf('Parameter names will be made case sensitive in Symfony 4.0. Using "%s" instead of "%s" is deprecated since Symfony 3.4.', $name, $normalizedName), E_USER_DEPRECATED);
            }
        } else {
            $normalizedName = $this->normalizedParameterNames[$normalizedName] = (string) $name;
        }

        return $normalizedName;
    }

    /*
     * Gets the default parameters.
     *
     * @return array An array of the default parameters
     */
    protected function getDefaultParameters()
    {
        return array(
            'goetas_webservices.soap_client.metadata' => array(
                'https://gclient.geis.cz/GService/GService.svc?singlewsdl' => array(
                    'GService' => array(
                        'BasicHttpBinding_IGService' => array(
                            'operations' => array(
                                'ServiceList' => array(
                                    'action' => 'http://tempuri.org/IGService/ServiceList',
                                    'style' => 'document',
                                    'version' => '1.1',
                                    'name' => 'ServiceList',
                                    'method' => 'serviceList',
                                    'input' => array(
                                        'message_fqcn' => 'GoetasWebservices\\Client\\GeisGrouCz\\SoapEnvelope\\Messages\\ServiceListInput',
                                        'headers_fqcn' => 'GoetasWebservices\\Client\\GeisGrouCz\\SoapEnvelope\\Headers\\ServiceListInput',
                                        'part_fqcn' => 'GoetasWebservices\\Client\\GeisGrouCz\\SoapParts\\ServiceListInput',
                                        'parts' => array(
                                            'parameters' => 'ServiceList',
                                        ),
                                    ),
                                    'output' => array(
                                        'message_fqcn' => 'GoetasWebservices\\Client\\GeisGrouCz\\SoapEnvelope\\Messages\\ServiceListOutput',
                                        'headers_fqcn' => 'GoetasWebservices\\Client\\GeisGrouCz\\SoapEnvelope\\Headers\\ServiceListOutput',
                                        'part_fqcn' => 'GoetasWebservices\\Client\\GeisGrouCz\\SoapParts\\ServiceListOutput',
                                        'parts' => array(
                                            'parameters' => 'ServiceListResponse',
                                        ),
                                    ),
                                    'fault' => array(

                                    ),
                                ),
                                'AddServiceList' => array(
                                    'action' => 'http://tempuri.org/IGService/AddServiceList',
                                    'style' => 'document',
                                    'version' => '1.1',
                                    'name' => 'AddServiceList',
                                    'method' => 'addServiceList',
                                    'input' => array(
                                        'message_fqcn' => 'GoetasWebservices\\Client\\GeisGrouCz\\SoapEnvelope\\Messages\\AddServiceListInput',
                                        'headers_fqcn' => 'GoetasWebservices\\Client\\GeisGrouCz\\SoapEnvelope\\Headers\\AddServiceListInput',
                                        'part_fqcn' => 'GoetasWebservices\\Client\\GeisGrouCz\\SoapParts\\AddServiceListInput',
                                        'parts' => array(
                                            'parameters' => 'AddServiceList',
                                        ),
                                    ),
                                    'output' => array(
                                        'message_fqcn' => 'GoetasWebservices\\Client\\GeisGrouCz\\SoapEnvelope\\Messages\\AddServiceListOutput',
                                        'headers_fqcn' => 'GoetasWebservices\\Client\\GeisGrouCz\\SoapEnvelope\\Headers\\AddServiceListOutput',
                                        'part_fqcn' => 'GoetasWebservices\\Client\\GeisGrouCz\\SoapParts\\AddServiceListOutput',
                                        'parts' => array(
                                            'parameters' => 'AddServiceListResponse',
                                        ),
                                    ),
                                    'fault' => array(

                                    ),
                                ),
                                'StatusList' => array(
                                    'action' => 'http://tempuri.org/IGService/StatusList',
                                    'style' => 'document',
                                    'version' => '1.1',
                                    'name' => 'StatusList',
                                    'method' => 'statusList',
                                    'input' => array(
                                        'message_fqcn' => 'GoetasWebservices\\Client\\GeisGrouCz\\SoapEnvelope\\Messages\\StatusListInput',
                                        'headers_fqcn' => 'GoetasWebservices\\Client\\GeisGrouCz\\SoapEnvelope\\Headers\\StatusListInput',
                                        'part_fqcn' => 'GoetasWebservices\\Client\\GeisGrouCz\\SoapParts\\StatusListInput',
                                        'parts' => array(
                                            'parameters' => 'StatusList',
                                        ),
                                    ),
                                    'output' => array(
                                        'message_fqcn' => 'GoetasWebservices\\Client\\GeisGrouCz\\SoapEnvelope\\Messages\\StatusListOutput',
                                        'headers_fqcn' => 'GoetasWebservices\\Client\\GeisGrouCz\\SoapEnvelope\\Headers\\StatusListOutput',
                                        'part_fqcn' => 'GoetasWebservices\\Client\\GeisGrouCz\\SoapParts\\StatusListOutput',
                                        'parts' => array(
                                            'parameters' => 'StatusListResponse',
                                        ),
                                    ),
                                    'fault' => array(

                                    ),
                                ),
                                'WrapList' => array(
                                    'action' => 'http://tempuri.org/IGService/WrapList',
                                    'style' => 'document',
                                    'version' => '1.1',
                                    'name' => 'WrapList',
                                    'method' => 'wrapList',
                                    'input' => array(
                                        'message_fqcn' => 'GoetasWebservices\\Client\\GeisGrouCz\\SoapEnvelope\\Messages\\WrapListInput',
                                        'headers_fqcn' => 'GoetasWebservices\\Client\\GeisGrouCz\\SoapEnvelope\\Headers\\WrapListInput',
                                        'part_fqcn' => 'GoetasWebservices\\Client\\GeisGrouCz\\SoapParts\\WrapListInput',
                                        'parts' => array(
                                            'parameters' => 'WrapList',
                                        ),
                                    ),
                                    'output' => array(
                                        'message_fqcn' => 'GoetasWebservices\\Client\\GeisGrouCz\\SoapEnvelope\\Messages\\WrapListOutput',
                                        'headers_fqcn' => 'GoetasWebservices\\Client\\GeisGrouCz\\SoapEnvelope\\Headers\\WrapListOutput',
                                        'part_fqcn' => 'GoetasWebservices\\Client\\GeisGrouCz\\SoapParts\\WrapListOutput',
                                        'parts' => array(
                                            'parameters' => 'WrapListResponse',
                                        ),
                                    ),
                                    'fault' => array(

                                    ),
                                ),
                                'DeliveryRouting' => array(
                                    'action' => 'http://tempuri.org/IGService/DeliveryRouting',
                                    'style' => 'document',
                                    'version' => '1.1',
                                    'name' => 'DeliveryRouting',
                                    'method' => 'deliveryRouting',
                                    'input' => array(
                                        'message_fqcn' => 'GoetasWebservices\\Client\\GeisGrouCz\\SoapEnvelope\\Messages\\DeliveryRoutingInput',
                                        'headers_fqcn' => 'GoetasWebservices\\Client\\GeisGrouCz\\SoapEnvelope\\Headers\\DeliveryRoutingInput',
                                        'part_fqcn' => 'GoetasWebservices\\Client\\GeisGrouCz\\SoapParts\\DeliveryRoutingInput',
                                        'parts' => array(
                                            'parameters' => 'DeliveryRouting',
                                        ),
                                    ),
                                    'output' => array(
                                        'message_fqcn' => 'GoetasWebservices\\Client\\GeisGrouCz\\SoapEnvelope\\Messages\\DeliveryRoutingOutput',
                                        'headers_fqcn' => 'GoetasWebservices\\Client\\GeisGrouCz\\SoapEnvelope\\Headers\\DeliveryRoutingOutput',
                                        'part_fqcn' => 'GoetasWebservices\\Client\\GeisGrouCz\\SoapParts\\DeliveryRoutingOutput',
                                        'parts' => array(
                                            'parameters' => 'DeliveryRoutingResponse',
                                        ),
                                    ),
                                    'fault' => array(

                                    ),
                                ),
                                'ShipmentDetail' => array(
                                    'action' => 'http://tempuri.org/IGService/ShipmentDetail',
                                    'style' => 'document',
                                    'version' => '1.1',
                                    'name' => 'ShipmentDetail',
                                    'method' => 'shipmentDetail',
                                    'input' => array(
                                        'message_fqcn' => 'GoetasWebservices\\Client\\GeisGrouCz\\SoapEnvelope\\Messages\\ShipmentDetailInput',
                                        'headers_fqcn' => 'GoetasWebservices\\Client\\GeisGrouCz\\SoapEnvelope\\Headers\\ShipmentDetailInput',
                                        'part_fqcn' => 'GoetasWebservices\\Client\\GeisGrouCz\\SoapParts\\ShipmentDetailInput',
                                        'parts' => array(
                                            'parameters' => 'ShipmentDetail',
                                        ),
                                    ),
                                    'output' => array(
                                        'message_fqcn' => 'GoetasWebservices\\Client\\GeisGrouCz\\SoapEnvelope\\Messages\\ShipmentDetailOutput',
                                        'headers_fqcn' => 'GoetasWebservices\\Client\\GeisGrouCz\\SoapEnvelope\\Headers\\ShipmentDetailOutput',
                                        'part_fqcn' => 'GoetasWebservices\\Client\\GeisGrouCz\\SoapParts\\ShipmentDetailOutput',
                                        'parts' => array(
                                            'parameters' => 'ShipmentDetailResponse',
                                        ),
                                    ),
                                    'fault' => array(

                                    ),
                                ),
                                'RouteTable' => array(
                                    'action' => 'http://tempuri.org/IGService/RouteTable',
                                    'style' => 'document',
                                    'version' => '1.1',
                                    'name' => 'RouteTable',
                                    'method' => 'routeTable',
                                    'input' => array(
                                        'message_fqcn' => 'GoetasWebservices\\Client\\GeisGrouCz\\SoapEnvelope\\Messages\\RouteTableInput',
                                        'headers_fqcn' => 'GoetasWebservices\\Client\\GeisGrouCz\\SoapEnvelope\\Headers\\RouteTableInput',
                                        'part_fqcn' => 'GoetasWebservices\\Client\\GeisGrouCz\\SoapParts\\RouteTableInput',
                                        'parts' => array(
                                            'parameters' => 'RouteTable',
                                        ),
                                    ),
                                    'output' => array(
                                        'message_fqcn' => 'GoetasWebservices\\Client\\GeisGrouCz\\SoapEnvelope\\Messages\\RouteTableOutput',
                                        'headers_fqcn' => 'GoetasWebservices\\Client\\GeisGrouCz\\SoapEnvelope\\Headers\\RouteTableOutput',
                                        'part_fqcn' => 'GoetasWebservices\\Client\\GeisGrouCz\\SoapParts\\RouteTableOutput',
                                        'parts' => array(
                                            'parameters' => 'RouteTableResponse',
                                        ),
                                    ),
                                    'fault' => array(

                                    ),
                                ),
                                'CreatePickUp' => array(
                                    'action' => 'http://tempuri.org/IGService/CreatePickUp',
                                    'style' => 'document',
                                    'version' => '1.1',
                                    'name' => 'CreatePickUp',
                                    'method' => 'createPickUp',
                                    'input' => array(
                                        'message_fqcn' => 'GoetasWebservices\\Client\\GeisGrouCz\\SoapEnvelope\\Messages\\CreatePickUpInput',
                                        'headers_fqcn' => 'GoetasWebservices\\Client\\GeisGrouCz\\SoapEnvelope\\Headers\\CreatePickUpInput',
                                        'part_fqcn' => 'GoetasWebservices\\Client\\GeisGrouCz\\SoapParts\\CreatePickUpInput',
                                        'parts' => array(
                                            'parameters' => 'CreatePickUp',
                                        ),
                                    ),
                                    'output' => array(
                                        'message_fqcn' => 'GoetasWebservices\\Client\\GeisGrouCz\\SoapEnvelope\\Messages\\CreatePickUpOutput',
                                        'headers_fqcn' => 'GoetasWebservices\\Client\\GeisGrouCz\\SoapEnvelope\\Headers\\CreatePickUpOutput',
                                        'part_fqcn' => 'GoetasWebservices\\Client\\GeisGrouCz\\SoapParts\\CreatePickUpOutput',
                                        'parts' => array(
                                            'parameters' => 'CreatePickUpResponse',
                                        ),
                                    ),
                                    'fault' => array(

                                    ),
                                ),
                                'InsertExport' => array(
                                    'action' => 'http://tempuri.org/IGService/InsertExport',
                                    'style' => 'document',
                                    'version' => '1.1',
                                    'name' => 'InsertExport',
                                    'method' => 'insertExport',
                                    'input' => array(
                                        'message_fqcn' => 'GoetasWebservices\\Client\\GeisGrouCz\\SoapEnvelope\\Messages\\InsertExportInput',
                                        'headers_fqcn' => 'GoetasWebservices\\Client\\GeisGrouCz\\SoapEnvelope\\Headers\\InsertExportInput',
                                        'part_fqcn' => 'GoetasWebservices\\Client\\GeisGrouCz\\SoapParts\\InsertExportInput',
                                        'parts' => array(
                                            'parameters' => 'InsertExport',
                                        ),
                                    ),
                                    'output' => array(
                                        'message_fqcn' => 'GoetasWebservices\\Client\\GeisGrouCz\\SoapEnvelope\\Messages\\InsertExportOutput',
                                        'headers_fqcn' => 'GoetasWebservices\\Client\\GeisGrouCz\\SoapEnvelope\\Headers\\InsertExportOutput',
                                        'part_fqcn' => 'GoetasWebservices\\Client\\GeisGrouCz\\SoapParts\\InsertExportOutput',
                                        'parts' => array(
                                            'parameters' => 'InsertExportResponse',
                                        ),
                                    ),
                                    'fault' => array(

                                    ),
                                ),
                                'InsertOrder' => array(
                                    'action' => 'http://tempuri.org/IGService/InsertOrder',
                                    'style' => 'document',
                                    'version' => '1.1',
                                    'name' => 'InsertOrder',
                                    'method' => 'insertOrder',
                                    'input' => array(
                                        'message_fqcn' => 'GoetasWebservices\\Client\\GeisGrouCz\\SoapEnvelope\\Messages\\InsertOrderInput',
                                        'headers_fqcn' => 'GoetasWebservices\\Client\\GeisGrouCz\\SoapEnvelope\\Headers\\InsertOrderInput',
                                        'part_fqcn' => 'GoetasWebservices\\Client\\GeisGrouCz\\SoapParts\\InsertOrderInput',
                                        'parts' => array(
                                            'parameters' => 'InsertOrder',
                                        ),
                                    ),
                                    'output' => array(
                                        'message_fqcn' => 'GoetasWebservices\\Client\\GeisGrouCz\\SoapEnvelope\\Messages\\InsertOrderOutput',
                                        'headers_fqcn' => 'GoetasWebservices\\Client\\GeisGrouCz\\SoapEnvelope\\Headers\\InsertOrderOutput',
                                        'part_fqcn' => 'GoetasWebservices\\Client\\GeisGrouCz\\SoapParts\\InsertOrderOutput',
                                        'parts' => array(
                                            'parameters' => 'InsertOrderResponse',
                                        ),
                                    ),
                                    'fault' => array(

                                    ),
                                ),
                                'AssignRange' => array(
                                    'action' => 'http://tempuri.org/IGService/AssignRange',
                                    'style' => 'document',
                                    'version' => '1.1',
                                    'name' => 'AssignRange',
                                    'method' => 'assignRange',
                                    'input' => array(
                                        'message_fqcn' => 'GoetasWebservices\\Client\\GeisGrouCz\\SoapEnvelope\\Messages\\AssignRangeInput',
                                        'headers_fqcn' => 'GoetasWebservices\\Client\\GeisGrouCz\\SoapEnvelope\\Headers\\AssignRangeInput',
                                        'part_fqcn' => 'GoetasWebservices\\Client\\GeisGrouCz\\SoapParts\\AssignRangeInput',
                                        'parts' => array(
                                            'parameters' => 'AssignRange',
                                        ),
                                    ),
                                    'output' => array(
                                        'message_fqcn' => 'GoetasWebservices\\Client\\GeisGrouCz\\SoapEnvelope\\Messages\\AssignRangeOutput',
                                        'headers_fqcn' => 'GoetasWebservices\\Client\\GeisGrouCz\\SoapEnvelope\\Headers\\AssignRangeOutput',
                                        'part_fqcn' => 'GoetasWebservices\\Client\\GeisGrouCz\\SoapParts\\AssignRangeOutput',
                                        'parts' => array(
                                            'parameters' => 'AssignRangeResponse',
                                        ),
                                    ),
                                    'fault' => array(

                                    ),
                                ),
                                'IsHealthy' => array(
                                    'action' => 'http://tempuri.org/IGService/IsHealthy',
                                    'style' => 'document',
                                    'version' => '1.1',
                                    'name' => 'IsHealthy',
                                    'method' => 'isHealthy',
                                    'input' => array(
                                        'message_fqcn' => 'GoetasWebservices\\Client\\GeisGrouCz\\SoapEnvelope\\Messages\\IsHealthyInput',
                                        'headers_fqcn' => 'GoetasWebservices\\Client\\GeisGrouCz\\SoapEnvelope\\Headers\\IsHealthyInput',
                                        'part_fqcn' => 'GoetasWebservices\\Client\\GeisGrouCz\\SoapParts\\IsHealthyInput',
                                        'parts' => array(
                                            'parameters' => 'IsHealthy',
                                        ),
                                    ),
                                    'output' => array(
                                        'message_fqcn' => 'GoetasWebservices\\Client\\GeisGrouCz\\SoapEnvelope\\Messages\\IsHealthyOutput',
                                        'headers_fqcn' => 'GoetasWebservices\\Client\\GeisGrouCz\\SoapEnvelope\\Headers\\IsHealthyOutput',
                                        'part_fqcn' => 'GoetasWebservices\\Client\\GeisGrouCz\\SoapParts\\IsHealthyOutput',
                                        'parts' => array(
                                            'parameters' => 'IsHealthyResponse',
                                        ),
                                    ),
                                    'fault' => array(

                                    ),
                                ),
                                'GetCurrencies' => array(
                                    'action' => 'http://tempuri.org/IGService/GetCurrencies',
                                    'style' => 'document',
                                    'version' => '1.1',
                                    'name' => 'GetCurrencies',
                                    'method' => 'getCurrencies',
                                    'input' => array(
                                        'message_fqcn' => 'GoetasWebservices\\Client\\GeisGrouCz\\SoapEnvelope\\Messages\\GetCurrenciesInput',
                                        'headers_fqcn' => 'GoetasWebservices\\Client\\GeisGrouCz\\SoapEnvelope\\Headers\\GetCurrenciesInput',
                                        'part_fqcn' => 'GoetasWebservices\\Client\\GeisGrouCz\\SoapParts\\GetCurrenciesInput',
                                        'parts' => array(
                                            'parameters' => 'GetCurrencies',
                                        ),
                                    ),
                                    'output' => array(
                                        'message_fqcn' => 'GoetasWebservices\\Client\\GeisGrouCz\\SoapEnvelope\\Messages\\GetCurrenciesOutput',
                                        'headers_fqcn' => 'GoetasWebservices\\Client\\GeisGrouCz\\SoapEnvelope\\Headers\\GetCurrenciesOutput',
                                        'part_fqcn' => 'GoetasWebservices\\Client\\GeisGrouCz\\SoapParts\\GetCurrenciesOutput',
                                        'parts' => array(
                                            'parameters' => 'GetCurrenciesResponse',
                                        ),
                                    ),
                                    'fault' => array(

                                    ),
                                ),
                                'GetLabel' => array(
                                    'action' => 'http://tempuri.org/IGService/GetLabel',
                                    'style' => 'document',
                                    'version' => '1.1',
                                    'name' => 'GetLabel',
                                    'method' => 'getLabel',
                                    'input' => array(
                                        'message_fqcn' => 'GoetasWebservices\\Client\\GeisGrouCz\\SoapEnvelope\\Messages\\GetLabelInput',
                                        'headers_fqcn' => 'GoetasWebservices\\Client\\GeisGrouCz\\SoapEnvelope\\Headers\\GetLabelInput',
                                        'part_fqcn' => 'GoetasWebservices\\Client\\GeisGrouCz\\SoapParts\\GetLabelInput',
                                        'parts' => array(
                                            'parameters' => 'GetLabel',
                                        ),
                                    ),
                                    'output' => array(
                                        'message_fqcn' => 'GoetasWebservices\\Client\\GeisGrouCz\\SoapEnvelope\\Messages\\GetLabelOutput',
                                        'headers_fqcn' => 'GoetasWebservices\\Client\\GeisGrouCz\\SoapEnvelope\\Headers\\GetLabelOutput',
                                        'part_fqcn' => 'GoetasWebservices\\Client\\GeisGrouCz\\SoapParts\\GetLabelOutput',
                                        'parts' => array(
                                            'parameters' => 'GetLabelResponse',
                                        ),
                                    ),
                                    'fault' => array(

                                    ),
                                ),
                                'ListOfShipments' => array(
                                    'action' => 'http://tempuri.org/IGService/ListOfShipments',
                                    'style' => 'document',
                                    'version' => '1.1',
                                    'name' => 'ListOfShipments',
                                    'method' => 'listOfShipments',
                                    'input' => array(
                                        'message_fqcn' => 'GoetasWebservices\\Client\\GeisGrouCz\\SoapEnvelope\\Messages\\ListOfShipmentsInput',
                                        'headers_fqcn' => 'GoetasWebservices\\Client\\GeisGrouCz\\SoapEnvelope\\Headers\\ListOfShipmentsInput',
                                        'part_fqcn' => 'GoetasWebservices\\Client\\GeisGrouCz\\SoapParts\\ListOfShipmentsInput',
                                        'parts' => array(
                                            'parameters' => 'ListOfShipments',
                                        ),
                                    ),
                                    'output' => array(
                                        'message_fqcn' => 'GoetasWebservices\\Client\\GeisGrouCz\\SoapEnvelope\\Messages\\ListOfShipmentsOutput',
                                        'headers_fqcn' => 'GoetasWebservices\\Client\\GeisGrouCz\\SoapEnvelope\\Headers\\ListOfShipmentsOutput',
                                        'part_fqcn' => 'GoetasWebservices\\Client\\GeisGrouCz\\SoapParts\\ListOfShipmentsOutput',
                                        'parts' => array(
                                            'parameters' => 'ListOfShipmentsResponse',
                                        ),
                                    ),
                                    'fault' => array(

                                    ),
                                ),
                                'ShipmentStatus' => array(
                                    'action' => 'http://tempuri.org/IGService/ShipmentStatus',
                                    'style' => 'document',
                                    'version' => '1.1',
                                    'name' => 'ShipmentStatus',
                                    'method' => 'shipmentStatus',
                                    'input' => array(
                                        'message_fqcn' => 'GoetasWebservices\\Client\\GeisGrouCz\\SoapEnvelope\\Messages\\ShipmentStatusInput',
                                        'headers_fqcn' => 'GoetasWebservices\\Client\\GeisGrouCz\\SoapEnvelope\\Headers\\ShipmentStatusInput',
                                        'part_fqcn' => 'GoetasWebservices\\Client\\GeisGrouCz\\SoapParts\\ShipmentStatusInput',
                                        'parts' => array(
                                            'parameters' => 'ShipmentStatus',
                                        ),
                                    ),
                                    'output' => array(
                                        'message_fqcn' => 'GoetasWebservices\\Client\\GeisGrouCz\\SoapEnvelope\\Messages\\ShipmentStatusOutput',
                                        'headers_fqcn' => 'GoetasWebservices\\Client\\GeisGrouCz\\SoapEnvelope\\Headers\\ShipmentStatusOutput',
                                        'part_fqcn' => 'GoetasWebservices\\Client\\GeisGrouCz\\SoapParts\\ShipmentStatusOutput',
                                        'parts' => array(
                                            'parameters' => 'ShipmentStatusResponse',
                                        ),
                                    ),
                                    'fault' => array(

                                    ),
                                ),
                                'GetPickupList' => array(
                                    'action' => 'http://tempuri.org/IGService/GetPickupList',
                                    'style' => 'document',
                                    'version' => '1.1',
                                    'name' => 'GetPickupList',
                                    'method' => 'getPickupList',
                                    'input' => array(
                                        'message_fqcn' => 'GoetasWebservices\\Client\\GeisGrouCz\\SoapEnvelope\\Messages\\GetPickupListInput',
                                        'headers_fqcn' => 'GoetasWebservices\\Client\\GeisGrouCz\\SoapEnvelope\\Headers\\GetPickupListInput',
                                        'part_fqcn' => 'GoetasWebservices\\Client\\GeisGrouCz\\SoapParts\\GetPickupListInput',
                                        'parts' => array(
                                            'parameters' => 'GetPickupList',
                                        ),
                                    ),
                                    'output' => array(
                                        'message_fqcn' => 'GoetasWebservices\\Client\\GeisGrouCz\\SoapEnvelope\\Messages\\GetPickupListOutput',
                                        'headers_fqcn' => 'GoetasWebservices\\Client\\GeisGrouCz\\SoapEnvelope\\Headers\\GetPickupListOutput',
                                        'part_fqcn' => 'GoetasWebservices\\Client\\GeisGrouCz\\SoapParts\\GetPickupListOutput',
                                        'parts' => array(
                                            'parameters' => 'GetPickupListResponse',
                                        ),
                                    ),
                                    'fault' => array(

                                    ),
                                ),
                                'DeleteShipment' => array(
                                    'action' => 'http://tempuri.org/IGService/DeleteShipment',
                                    'style' => 'document',
                                    'version' => '1.1',
                                    'name' => 'DeleteShipment',
                                    'method' => 'deleteShipment',
                                    'input' => array(
                                        'message_fqcn' => 'GoetasWebservices\\Client\\GeisGrouCz\\SoapEnvelope\\Messages\\DeleteShipmentInput',
                                        'headers_fqcn' => 'GoetasWebservices\\Client\\GeisGrouCz\\SoapEnvelope\\Headers\\DeleteShipmentInput',
                                        'part_fqcn' => 'GoetasWebservices\\Client\\GeisGrouCz\\SoapParts\\DeleteShipmentInput',
                                        'parts' => array(
                                            'parameters' => 'DeleteShipment',
                                        ),
                                    ),
                                    'output' => array(
                                        'message_fqcn' => 'GoetasWebservices\\Client\\GeisGrouCz\\SoapEnvelope\\Messages\\DeleteShipmentOutput',
                                        'headers_fqcn' => 'GoetasWebservices\\Client\\GeisGrouCz\\SoapEnvelope\\Headers\\DeleteShipmentOutput',
                                        'part_fqcn' => 'GoetasWebservices\\Client\\GeisGrouCz\\SoapParts\\DeleteShipmentOutput',
                                        'parts' => array(
                                            'parameters' => 'DeleteShipmentResponse',
                                        ),
                                    ),
                                    'fault' => array(

                                    ),
                                ),
                                'RangeDetail' => array(
                                    'action' => 'http://tempuri.org/IGService/RangeDetail',
                                    'style' => 'document',
                                    'version' => '1.1',
                                    'name' => 'RangeDetail',
                                    'method' => 'rangeDetail',
                                    'input' => array(
                                        'message_fqcn' => 'GoetasWebservices\\Client\\GeisGrouCz\\SoapEnvelope\\Messages\\RangeDetailInput',
                                        'headers_fqcn' => 'GoetasWebservices\\Client\\GeisGrouCz\\SoapEnvelope\\Headers\\RangeDetailInput',
                                        'part_fqcn' => 'GoetasWebservices\\Client\\GeisGrouCz\\SoapParts\\RangeDetailInput',
                                        'parts' => array(
                                            'parameters' => 'RangeDetail',
                                        ),
                                    ),
                                    'output' => array(
                                        'message_fqcn' => 'GoetasWebservices\\Client\\GeisGrouCz\\SoapEnvelope\\Messages\\RangeDetailOutput',
                                        'headers_fqcn' => 'GoetasWebservices\\Client\\GeisGrouCz\\SoapEnvelope\\Headers\\RangeDetailOutput',
                                        'part_fqcn' => 'GoetasWebservices\\Client\\GeisGrouCz\\SoapParts\\RangeDetailOutput',
                                        'parts' => array(
                                            'parameters' => 'RangeDetailResponse',
                                        ),
                                    ),
                                    'fault' => array(

                                    ),
                                ),
                            ),
                            'unwrap' => false,
                            'endpoint' => 'http://gclient.geis.cz/GService/GService.svc',
                        ),
                    ),
                ),
            ),
            'goetas_webservices.soap_client.config' => array(
                'namespaces' => array(
                    'http://tempuri.org/' => 'GoetasWebservices\\Client\\GeisGrouCz',
                    'http://schemas.datacontract.org/2004/07/GService.Manager' => 'GoetasWebservices\\Client\\GeisGrouCz\\DataContract\\Manager',
                    'http://schemas.microsoft.com/2003/10/Serialization/' => 'GoetasWebservices\\Client\\GeisGrouCz\\Serialization',
                    'http://schemas.microsoft.com/2003/10/Serialization/Arrays' => 'GoetasWebservices\\Client\\GeisGrouCz\\Serialization\\Arrays',
                ),
                'destinations_php' => array(
                    'GoetasWebservices\\Client\\GeisGrouCz' => 'src',
                ),
                'destinations_jms' => array(
                    'GoetasWebservices\\Client\\GeisGrouCz' => 'metadata',
                ),
                'metadata' => array(
                    'https://gclient.geis.cz/GService/GService.svc?singlewsdl' => NULL,
                ),
                'alternative_endpoints' => array(

                ),
                'unwrap_returns' => false,
                'naming_strategy' => 'short',
                'path_generator' => 'psr4',
                'known_locations' => array(

                ),
                'aliases' => array(

                ),
                'headers' => '\\SoapEnvelope\\Headers',
                'parts' => '\\SoapEnvelope\\Parts',
                'messages' => '\\SoapEnvelope\\Messages',
            ),
            'goetas_webservices.soap_client.unwrap_returns' => false,
        );
    }
}
