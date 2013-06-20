<?php
class mains_controller  extends controller{
		
			function index(){
						$this->set('value',$this->model->index());
						$this->set('pagetitle','Main page');
								}
				
}
?>