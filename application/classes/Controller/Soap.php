<?php defined('SYSPATH') or die('No direct script access.');


ini_set('include_path', ini_get('include_path') . PATH_SEPARATOR . APPPATH . 'vendor/');
include Kohana::find_file('vendor', 'Zend/Soap/AutoDiscover');
include Kohana::find_file('vendor', 'Zend/Soap/Server');

include APPPATH . 'classes/Model/Service.php';

class Controller_Soap extends Controller
{

    /**
     * service to call
     *
     * @param void
     * @return void
     */
    public function action_service()
    {
        // disable wsdl cache
        ini_set('soap.wsdl_cache_enabled', '0');

        // set auth settings if needed
        $settings = array(
            'soap_version' => SOAP_1_2,
            'encoding' => 'UTF-8',
            'cache_wsdl' => WSDL_CACHE_NONE
        );

        // include user:password if needed
        $wsdl = 'http://' . $_SERVER['HTTP_HOST'] . '/soap/wsdl';
        $server = new SoapServer($wsdl, $settings);
        $server->setClass('Service_Model');
        $server->handle();
    }

    /**
     * wsdl to call
     *
     * @param void
     * @return void
     */
    public function action_wsdl()
    {
        // disable wsdl cache
        ini_set('soap.wsdl_cache_enabled', '0');

        $wsdl = new Zend_Soap_AutoDiscover();
        $wsdl->setUri('http://' . $_SERVER['HTTP_HOST'] . '/soap/service');
        $wsdl->setClass('Service_Model');
        $wsdl->handle();
    }


}