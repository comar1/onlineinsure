<?php

namespace App\Models;

use CodeIgniter\Model;

class Users_model extends Model {
    function __construct(){
        parent::__construct();
        $this->load->database();
    }

    public function login($email, $password){
        $query = $this->db->get_where('users', array('email'=>$email, 'password'=>$password));
        return $query->row_array();
    }

}
?>