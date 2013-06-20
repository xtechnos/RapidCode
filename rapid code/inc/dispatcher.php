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

	The dipatcher class finds the controller and action from url
	and triger the action.
*/

$ok=true;
class dispatcher{

	private $page;
	private $procedure;
	private $obj;
	private $url;
	private $controller;
	private $model;
	private $view;
		
	function __construct(){
		$this->url=array();
		$this->url= explode('/',$_SERVER['REQUEST_URI']);
		$this->page = 'home';
		$this->procedure='index';
		array_shift($this->url);
		array_shift($this->url);
		$this->GetPage();
		array_shift($this->url);
		$this->GetProcedure();
		array_shift($this->url);
	}

	/*
		Function for getting the controller 
		if the contorller not provided then
		set the default controller to homes.
	*/			
	function  GetPage(){
	
		if(isset($this->url[0])&& $this->url[0]!=''){
			$this->page=$this->url[0].'s';
		}else{
			$this->page="home";
		}
	}

	/*
		Function for getting the action 
		if the action not provided then
		seting  the default action to index.
	*/						
	function GetProcedure(){
		if(isset($this->url[0]) && $this->url[0]!=''){
			$this->procedure=str_replace('.php','',$this->url[0]);
		}else{							
			$this->procedure='index';
		}
	}
				
	/*
		This function triggers the controller and action
		if fails shows 404 page not found error
	*/
	function LoadPage(){
	
		$queryString= array();
		$controller_name=$this->page;
		$this->controller=$this->page.'_controller';
		$this->model=$this->page.'_model';
		$this->view=$this->procedure;
		$dispatch = new $this->controller ($controller_name,$this->model,$this->view);
		$dispatch_action=$this->view;
		if(method_exists($dispatch,$dispatch_action)){						
			$dispatch->$dispatch_action($this->url);
		}else{
			global $ok;
			$ok=false;
			die( '<h1>Error 404 !</h1>' . NL . 'The requested Address not Found on this server.  : (');
		}
	}
}		
?>