<?php
class DatabaseConnector {
	private $dbConnection = null;
	
	public function __construct($host, $port, $db, $user, $pass, $charset)
	{
		if(!isset($host, $port, $db, $user, $pass, $charset)){
			$globals['error'] = "Warning: Db connection is missing variables.";
			
			return false;
		}
		
		
		
	}
	
    public function getConnection()
    {
        return $this->dbConnection;
    }

}

?>