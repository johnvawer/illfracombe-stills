<?php

/**
* Class to handle database functions.
*
* A class to handle the connection and CRUD functions
*
* @author John Vawer
*/

class database_manager{
	
	/**
	* @var object holds the database connection
	*/
	public $connection = null;
	
	/**
	* @var string holds the SQL query
	*/
	private $sql;

	/**
	* handle the inital connection to the database
	*
	* @param string username
	* @param string password
	* @param string host
	* @param string database 
	*/
	public function connect($username, $password, $host, $database){
		
		try
		{
			$this->connection = new PDO('mysql:host='.$host.';dbname='.$database, $username, $password);
			$this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			return true;		
		}
		catch(PDOException $e)
		{
			return $e->getMessage();
		}
		 
	}
	
	/**
	* execute sql query.
	*
	* @param sql string to run
	* @param params
	* @return array of results 
	*/
	public function query($query, $query_params = null){
		
		$sth = $this->connection->prepare($query);
		$sth->execute($query_params);
		$result = $sth->fetchAll();
		
		return $result;		
	}
	
	/**
	* insert new data into database
	*/
	public function insert($table, $columns, $params, $numParams){
		
		$values = $this->valueKeys($numParams);	
		$this->sql = 'INSERT INTO '.$table.' ('.$columns.') VALUES ('.$values.')'; 
		$sth = $this->connection->prepare($this->sql);
		$result = $sth->execute($params);
		
		if($result)
		{
			return true;
		}
		else
		{
			return false;
		}		
	}
	
	/**
	* create paramater values
	*
	* @param number of values
	* @return string value keys
	*/
	private function valueKeys($numParams){
		
		$val = '';
		
		for ($i = 1; $i <= $numParams; $i++)
		{	
			if($i == $numParams)
			{
				$val = $val.'?';	
			}
			else
			{
				$val = $val.'?, ';				
			}			
		}
		
		return $val;		
	}
	
	
	
}


?>