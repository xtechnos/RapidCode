<?php
class admins_model {
		private $DB;
		function admins_model()
			{
				$this->DB=new db();
				}
			function index()
			{
				
				}
		function login($login_name,$login_pass)
			{
					    $login_pass=md5($login_pass);
						$login_name=$this->DB->mySQLSafe($login_name);
						$login_pass=$this->DB->mySQLSafe($login_pass);
						$query= "select * from admin where user=$login_name and pass=$login_pass";
						if($this->DB->numrows($query)>0)
							return true;
						else 
							return false;
				}
		function Signin()
			{
				
				}
	}

?>