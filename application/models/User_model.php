<?php 

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of User
 *
 * @author Pravin
 */


class User_model extends CI_Model {
    
    public $u_firstname;
    public $u_lastname;
    public $u_email;
    public $u_date_of_birth;
    public $u_account_type;
    public $u_currency;
    public $u_country;
    public $u_password;
    public function __construct(){
            parent::__construct();
            // Your own constructor code
    }
    public function saveUser($data){
        $this->u_firstname=$data['u_firstname'];
        $this->u_lastname=$data['u_lastname'];
        $this->u_email=$data['u_email'];
        $this->u_date_of_birth=$data['u_date_of_birth'];
        $this->u_country=$data['u_country'];
        $this->u_account_type=$data['u_account_type'];
        $this->u_currency=$data['u_currency'];
        $this->u_password=md5($data['u_password']);
        
        $this->db->insert('user', $this);
    }
    
    public function CheckUserEmail($email){
        $this->db->select('*');
        $this->db->from('user');
        $this->db->where('u_email', $email); 
        $query = $this->db->get();
        if ( $query->num_rows() > 0 ){
            return $query->row();
        }
        return false;
    }
    
    
}
