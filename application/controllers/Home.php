<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{

		$this->load->model("courses_model");
		$courses = $this->courses_model->show_courses();
		// controlando por aqui, no momento
		// pegando os 3 primeiros
		$courses = array_slice($courses, 0, 5);


		$this->load->model("team_model");
		$team = $this->team_model->show_team();

		$data = array(
			"scripts" => array(
				"owl.carousel.min.js",
				"theme-scripts.js" 
			),
			"courses" => $courses,
			"team" => $team
		);
		$this->template->show("home.php", $data);
	}

}
