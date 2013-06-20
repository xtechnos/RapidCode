<?php

define ("ABSPATH","c:\\wamp\\www\\my-mvc");
require_once(ABSPATH."\inc\config.php");
require_once(ABSPATH."\inc\autoload.php");
require_once(ABSPATH."\inc\dispatcher.php");
$load = new dispatcher();
$load->LoadPage();
?>