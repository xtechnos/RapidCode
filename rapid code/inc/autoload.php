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
	
      This autoload function is used to include required classes definations like 
	  controllers and models etc
*/

function __autoload($file) {
	$file=strtolower($file);
	if (file_exists(ABSPATH . DS . 'classes' . DS . $file. '.php')) {
		require_once(ABSPATH . DS . 'classes' . DS . $file. '.php');
	} else if (file_exists(ABSPATH . DS . 'controllers' . DS . $file. '.php')) {
		require_once(ABSPATH . DS  . 'controllers' . DS . $file. '.php');
	} else if (file_exists(ABSPATH . DS . 'inc' . DS . $file. '.php')) {
		require_once(ABSPATH . DS  . 'inc' . DS . $file. '.php');
	} else if (file_exists(ABSPATH. DS .  'models' . DS . $file. '.php')) {
		require_once(ABSPATH. DS  . 'models' . DS . $file. '.php');
	} else {
		die( newline.'<h1>Error 404 !</h1>'.newline.'The requested URL not found on this server  :(');
	}
}
?>