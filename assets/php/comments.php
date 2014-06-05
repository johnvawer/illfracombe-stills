<?php

	require_once('config.php');
	require_once('database_manager.php');
	
	$db = new database_manager();
	$db->connect(USERNAME, PASSWORD, HOST, DATABASE);

	$tableName = 'contact';
	$columns = 'name, email, comment';
	$numParams = 3;	

	$params = array();
	array_push($params, $_POST['name']);
	array_push($params, $_POST['email']);
	array_push($params, $_POST['comment']);

	$result = $db->insert($tableName, $columns, $params, $numParams);

	if($result)
	{
		$arr['success'] = "true";			
	}	
	else
	{
		$arr['success'] = "false";
	}


	echo(json_encode($arr));
?>