<?php
class sectionas_controller extends controller{
	function index()
		{
			$this->set('pagetitle','Section A');
			$res=$this->model->index();
			$this->set('value',$res);
			}
	}
?>