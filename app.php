<?php

include dirname(__FILE__) . "/functions.php";

$method = $_SERVER['REQUEST_METHOD'];
if ($method == 'GET')
{
    if (isset($_GET['action']))
    {
        $action = $_GET['action'];

        if($action === 'getClientById'){
			$responseData = getClientByCod();
		}else if($action === 'getClients'){
			$responseData = getAllClients();
		}else
        {
            $responseData = [
                'id' => -1,
                'msg' => 'Not action.'
            ];
        }
    }
    else
    {
        $responseData = [
            'id' => -1,
            'msg' => 'error'
        ];
    }
}else if($method == 'POST'){
	if (isset($_POST['action'])) {
		$action = $_POST['action'];

			if ($action === 'newClient')
			{
				$name = $_POST['ipt_nombres'];
				$surnames = $_POST['ipt_apellidos']; 
				$document = $_POST['ipt_dni'];
				$razon_social = $_POST['ipt_razon_social'];
				$ruc = $_POST['ipt_ruc'];
				$direccion = $_POST['ipt_direccion'];
				$tipo = $_POST['ipt_tipo_persona'];
				$email = $_POST['ipt_email'];
				$telefono = $_POST['ipt_telefono'];
				$responseData = newClient($name, $surnames, $document, $razon_social,$ruc,$direccion,$tipo,$email, $telefono);
			}else
			{
				$responseData = [
					'id' => -1,
					'msg' => 'Not action.'
				];
			}	
		}
}
else
{
    $responseData = [
        'id' => -1,
        'msg' => 'Method ' . $method . ' is not supported.'
    ];
}

header('Content-type:application/json;');
echo $responseData;
die();
