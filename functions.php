<?php

require __DIR__ . '/vendor/autoload.php';

include dirname(__FILE__) . "/constants.php";

function sendQuestion()
{
    if (isset($_GET['formMessage']) || !empty($_GET['formMessage']))
    {
        $formMessage = $_GET['formMessage'];

        session_start();
        $text = $formMessage;
        $time = '1523925706028';
        $object = 'webnol';
        $context_identifier = $_SESSION['contextIdentifier'];
        $sender = $_SESSION['userName'];
        $responseData = post_curl($text, $time, $object, $context_identifier, $sender);
    }
    else
    {
        $responseData = json_encode([
            'id' => -1,
            'msg' => 'Debes enviar una consulta.'
        ]);
    }

    return $responseData;
}

function error()
{
    $responseData = [
        'id' => -1,
        'msg' => 'error'
    ];

    return $responseData;
}

function newClient($name, $surnames, $document, $razon_social,$ruc,$direccion,$tipo,$email, $telefono)
{
	
    $method = "/client";
    $url = CLIENT_BASE_URL . CLIENT_PATH . $method;
    $params = [
        "nombres" => $name,
        "apellidos" => $surnames,
        "dni" => $document,
        "razonsocial" => $razon_social,
        "ruc" => $ruc,
		"direccion" => $direccion,
		"tippersona" => $tipo,
		"email" => $email,
		"telefono" => $telefono,
		
		
    ];
    $data_string = json_encode($params);

    try {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, METHOD_POST);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		//curl_setopt($ch, CURLOPT_ENCODING, "UTF-8" );
        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
			//'Accept: application/json',
            'Content-Type: application/json;',
            'Content-Length: ' . strlen($data_string))
        );
        $result = curl_exec($ch);
        if ($result === false)
        {
            throw new Exception(curl_error($ch), curl_errno($ch));
        }
        curl_close($ch);
    } catch (Exception $e) {
        $result = json_encode([
            'id' => -1,
            'msg' => $e->getMessage()
        ]);
    }

    return $result;
}


function getAllClients()
{
	$method = "/client";
    $url = CLIENT_BASE_URL . CLIENT_PATH . $method;
    $params = [];
    $data_string = json_encode($params);

    try {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, METHOD_GET);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		//curl_setopt($ch, CURLOPT_ENCODING, "UTF-8" );
        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
			//'Accept: application/json',
            'Content-Type: application/json;',
            'Content-Length: ' . strlen($data_string))
        );
        $result = curl_exec($ch);
	
        if ($result === false)
        {
            throw new Exception(curl_error($ch), curl_errno($ch));
        }
        curl_close($ch);
    } catch (Exception $e) {
        $result = json_encode([
            'id' => -1,
            'msg' => $e->getMessage()
        ]);
    }

    return $result;
}

function getClientByCod($codClient)
{
	$method = "/client/".$codClient;
    $url = CLIENT_BASE_URL . CLIENT_PATH;
    $params = [];
    $data_string = json_encode($params);

    try {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, METHOD_GET);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		//curl_setopt($ch, CURLOPT_ENCODING, "UTF-8" );
        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
			//'Accept: application/json',
            'Content-Type: application/json;',
            'Content-Length: ' . strlen($data_string))
        );
        $result = curl_exec($ch);
	
        if ($result === false)
        {
            throw new Exception(curl_error($ch), curl_errno($ch));
        }
        curl_close($ch);
    } catch (Exception $e) {
        $result = json_encode([
            'id' => -1,
            'msg' => $e->getMessage()
        ]);
    }

    return $result;
}