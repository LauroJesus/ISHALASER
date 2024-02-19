<?php
	session_start();
	//Validar sesión
	header('Content-Type: application/json; charset=utf8');
	$resultSet = array();
	$resultSet['error']=1;
	$resultSet['mensaje']="No se pudo ejecutar correctamente la rutina php.";
	try
	{		
        if( isset($_SESSION["carrito"][$_POST["id"]]) )
        {
            $_SESSION["carrito"][$_POST["id"]] ++;
        }
        else
        {
            $_SESSION["carrito"][$_POST["id"]] = 1;
        }
        $resultSet['error']=0;
	    $resultSet['mensaje']="Se ejecutó correctamente la rutina php.";
	}
	catch(exception $ex)
	{
        $resultSet['error']=1;
        $resultSet['mensaje']=$ex->getMessage();
        $resultSet['error']=true;
	}

	echo json_encode($resultSet); 
?>	