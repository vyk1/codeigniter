<?php

class Users_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function get_user_data($user_login)
    {
        $this->db
            ->select("user_id, password_hash, user_fullname, user_email")
            ->from("users")
            ->where("user_login", $user_login);

        $res = $this->db->get();

        if ($res->num_rows() > 0) {
            return $res->row();
        } else {
            return NULL;
        }
    }
}
