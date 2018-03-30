<?php
/*******************
ToshaNet web service

documentation:
ws.toshanet.ir

https://Gost.ir
*******************/
define('wsuser','WS_USER');
define('wspass','WS_PASS');
function Tosha($function, $parameters){
	$wsdlUrl = 'http://ws.toshanet.ir/?WSDL';
	$context = stream_context_create(array('http' => array('user_agent' => 'PHPSoapClient')));
	$soapClientOptions = ['stream_context' => $context,'cache_wsdl' => WSDL_CACHE_NONE];
	$soapclient = new SoapClient($wsdlUrl, $soapClientOptions);
	$resultstring = $function.'Result';
	$res = json_decode($soapclient->$function($parameters)->$resultstring);
	return $res;
}
// Example of usage:
print_r(Tosha('GetUserCredit', ['Username'=>wsuser,'Password'=>wspass]));
?>
