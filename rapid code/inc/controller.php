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

	A base class for all the controllers
	to perform the common tasks like setting
	the templates and displaying the view.
	All the controller should be extended to 
	this controller class
*/

class controller{
	
	protected $model;
	protected $controller;
	protected $action;
	protected $template;
	protected $modelobj;
	
	/*
	Constructor
	*/
	function controller($controller,$model, $action){
		session_start();
		$this->controller=$controller;
		$this->modelclass=$model;
		$this->action=$action;
		$this->model= new $this->modelclass();
		$this->template = new Template($controller,$action);
	}

	/*
		Function to set variables from controller to
		the view so can be used in views pages.
	*/
	function set($name,$value){
		$this->template->add_variables($name,$value);
	}

	/*
		when the object of controller dies then before dieng
		to display view to user it calls the template to display 
		the view
	*/

	function __destruct(){
		global $ok;
		if($ok)
		$this->template->display();
	}
}	// Class ends
?>