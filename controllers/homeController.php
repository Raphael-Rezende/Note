<?php
class homeController extends controller {

	

	public function index() {
		$dados = array();

		$calendar = new Calendar();
		$calendar->full_calendar();
				  

		$this->loadTemplate('home', $dados);

	}

}