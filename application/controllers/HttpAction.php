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
        $this->load->model('user_model');
        if(!$this->user_model->CheckUserEmail($_POST['u_email'])){
            $this->user_model->saveUser($_POST);
            echo "thank you have successfully registered with us";
        }else{
            echo "Email taken.try with other one.";
        }
    }
}
