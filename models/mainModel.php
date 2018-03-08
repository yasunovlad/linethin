<?php 
include ROOT.'/components/connection.php';

class mainModel extends connection
{
	public function helloWorld()
    {
        return 'Hi. I`m Working. Let`s Begin';
	}
}

?>