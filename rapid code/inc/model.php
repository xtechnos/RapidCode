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

   A base class for all models 
   the model should be inherited from 
   this class
*/
class model{
	protected $DB;

	function __construct(){
		$this->DB = new db();
	}
}
?>