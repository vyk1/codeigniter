<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Restrict extends CI_Controller
{
	public function __construct()
    {
        parent::__construct();
        $this->load->library("session");
    }
	public function index()
	{
		// estilos exclusivos
		$data = array(
			"scripts" => array(
				"util.js",
				"login.js",
			)
		);
		$this->template->show("login.php", $data);
	}

	public function ajax_login()
	{

		$json = array();
		$json['status'] = 1;
		$json['error_list'] = array();

		$username = $this->input->post("username");
		$password = $this->input->post("password");

		if (empty($username)) {
			$json['error_list']['#username'] = "O Usuário não pode ser vazio";
		} else {
			$this->load->model("users_model");
			$res = $this->users_model->get_user_data($username);

			if ($res) {
				$user_id = $res->user_id;
				$password_hash = $res->password_hash;

				if (password_verify($password, $password_hash)) {
					$this->session->set_userdata("user_id", $user_id);
				} else {
					$json['status'] = 0;
				}
			} else {
				$json['status'] = 0;
			}
			if ($json['status'] == 0) {
				$json['error_list']['#btn-login'] = "O Usuário e/ou Senha Incorretos";
			}
		}
		echo json_encode($json);
	}
}
