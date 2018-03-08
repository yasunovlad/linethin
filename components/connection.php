<?php 
include ROOT.'/libs/redbean.php';
class connection
{
	private $database;
	function __construct()
	{
		$host = '127.0.0.1';
		$user = 'root';
		$password = '';
		$database = 'luck';
		$conn = R::setup( 'mysql:host='.$host.';dbname='.$database, $user, $password);
		if($conn == false)
		{
			die('Connection Error');
		}
		R::dispense($database);
	}
}


?>