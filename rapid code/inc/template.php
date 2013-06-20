<?php
/**
	Rapid Code is PHP MVC Base Framework Developed By xTechnos Team
	Team Members are:
	
	* Syed Zagham Naseem (zagham@gmail.com)
	* Hassan Raza 		 (hassan.qamar07@gmail.com)
	* Usman Dar  		 (usman.ravian819@gmail.com)
	
	- RapidCode, MVC Base PHP Framework	
	- Copyright 2013 by the contributors
	- RapidCode is released under the GPL

*/

class template{
	private $controller;
	private $action;
	protected $variables = array();
	function template($controller,$action){
		$this->controller=$controller;
		$this->action=$action;
	}

	function add_variables($name,$value){
		$this->variables[$name]=$value;
	}

	function display(){
		// extract all variables to use them in the view
		extract($this->variables);
		if(!isset($pagetitle))
			$pagetitle= sitename;
			//  show the header if not found then show default
		if(file_exists(ABSPATH.DS.'views'.DS.rtrim($this->controller, 's').DS.'header.php')){
			require_once(ABSPATH.DS.'views'.DS.rtrim($this->controller, 's').DS.'header.php');
		}else{
			require_once(ABSPATH.DS.'views'.DS.'default_Header'.DS.'Header.php');
		}		
		// show the section of the view
		if (file_exists(ABSPATH.DS.'views'.DS.rtrim($this->controller, 's').DS.$this->action.'.php')){
			require_once(ABSPATH.DS.'views'.DS.rtrim($this->controller, 's').DS.$this->action.'.php');
		}		
		//  show the footer if not found then show default
		if(file_exists(ABSPATH.DS.'views'.DS.rtrim($this->controller, 's').DS.'footer.php')){
			require_once(ABSPATH.DS.'views'.DS.rtrim($this->controller, 's').DS.'footer.php');
		}else{
			require_once(ABSPATH.DS.'views'.DS.'default_Footer'.DS.'Footer.php');
		}
	}
}
?>