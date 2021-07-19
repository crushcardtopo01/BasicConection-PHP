<?php
class Database 
{
	private static $dbName = 'My_database'; 
	private static $dbHost = 'localhost';
	private static $dbUsername = 'root';
	private static $dbUserPassword = '';
	private static $cont  = null;
	
	
	public static function connect()
	{
        if ( null == self::$cont ){      
            try{
                self::$cont =  new PDO( "mysql:host=".self::$dbHost.";".
										"dbname=".self::$dbName, self::$dbUsername, self::$dbUserPassword);  
            }
            catch(PDOException $e){
                die($e->getMessage());  
            }
        }//fin del if 
    return self::$cont;
	}
	
	public static function disconnect(){
		self::$cont = null;
	}
}
?>