<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of HttpAction
 *
 * @author Pravin
 */
defined('BASEPATH') OR exit('No direct script access allowed');
class HttpAction extends CI_Controller {
    public $layout = null;
    public function registerUser(){
        
        $this->load->model('user');//load user model
        
        $this->user->u_firstname    =$this->input->post('u_firstname');
        $this->user->u_lastname     =$this->input->post('u_lastname');
        $this->user->u_account_type =$this->input->post('u_account_type');
        $this->user->u_country      =$this->input->post('u_country');
        $this->user->u_currency     =$this->input->post('u_currency');
        $this->user->u_description  =$this->input->post('u_description');
        $this->user->u_date_of_birth=$this->input->post('u_date_of_birth');
        $this->user->db->insert('user', $this->user);
        echo "Success";
    }
}
