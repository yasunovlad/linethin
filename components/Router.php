<?php 

class Router
{
	private $routes;
	public function __construct()
	{
		$routes_path = ROOT.'/config/routes.php';
		$this->routes = include($routes_path);
		
	}
	/** 
	 * GETTING STRING QUERY
	 * @return string
	*/
	private function getUri()
	{
		if (!empty($_SERVER['REQUEST_URI']))
		{
			return trim($_SERVER['REQUEST_URI'], '/');
		}
	}
	public function run($debug = False)
	{
		
		$uri = $this->getUri();
		// CHECK THAT QUERY IN ROUTES.PHP
		foreach ($this->routes as $routes_controller => $routes_action) 
		{
			
			if (preg_match("~$routes_controller~", $uri))
			{
				$segments = explode('/', $routes_action);
				$controller_name = array_shift($segments).'Controller';
				$action_name = $segments['0'].'Action';
				if ($debug == True)
				{
					echo '<pre>Имя контроллера: '.$controller_name;
					echo '<pre>Имя action: '.$action_name."</pre> <br>";	
				}
				
				// CONNECTION FILE CLASS-CONTROLLER
				
				$controller_file = ROOT. '/controllers/'.$controller_name.'.php';
				if(file_exists($controller_file))
				{
					include_once $controller_file;
				}
				// CREATE OBJECT, RETUEN METHOD(ACTION)
				$controllerOBJ = new $controller_name;
				$result = $controllerOBJ->$action_name();
				if ($result != null)
				{
					break;
				}
			} 	
		}
	}
}

?>