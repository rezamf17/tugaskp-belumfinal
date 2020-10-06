<?php
class C_PrintFilter extends ci_controller
{
	public function index()
	{
		check_not_login();
		$this->template->load('template','print/v_printfilter');
	}
}