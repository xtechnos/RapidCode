<?php
if(isset($_POST['logout']))
	{
		unset($_POST['logout']);
		session_destroy();
		header('location:'.path.'admin/login');
		}

?>
        <section>
        <form action="" method="post">
        	<input type="hidden" name="logout" />
        	<input type="submit" value="Logout" />
        </form>
		</section>