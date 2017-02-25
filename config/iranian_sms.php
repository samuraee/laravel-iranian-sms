<?php

return [
	'mehrafzar' => [
		'gateway' => env('IRANIANSMS_MEHRAFZAR_GATEWAY','http://mehrafraz.com/webservice/Service.asmx?WSDL'),
		'username' => env('IRANIANSMS_MEHRAFZAR_USERNAME','test'),
		'password' => env('IRANIANSMS_MEHRAFZAR_PASSWORD','test'),
	],
	'kavenegar' => [
		'gateway' => env('IRANIANSMS_KAVENEGAR_GATEWAY','http://api.kavenegar.com/v1/%s/%s/%s.json/'),
		'api_key' => env('IRANIANSMS_KAVENEGAR_APIKEY','test'),
	]
];