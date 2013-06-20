<?php
class admins_controller extends controller
	{
		
		function index(){
				if (!isset($_SESSION['isadmin'])||$_SESSION['isadmin']!=1){
						header('location:'.path.'admin/login.php');
					}
				$this->set('pagetitle','Welcome');
				}
				//end of index
		function login(){
				$this->set('pagetitle','Login');
				if (isset($_SESSION['isadmin'])&&$_SESSION['isadmin']==1){
					header('location:index');
				}
				}
				// end of login function
		}

?>