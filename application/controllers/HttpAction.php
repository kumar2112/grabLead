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
        $_RESPONSE=array();
        if(!$this->user_model->CheckUserEmail($_POST['u_email'])){
            $this->user_model->saveUser($_POST);
            $_RESPONSE['CODE']=1;
            $_RESPONSE['URL']=base_url('view/sign-up-success');
        }else{
            $_RESPONSE['CODE']=0;
            $_RESPONSE['MSG']="An account is attached with given url";
        }
        echo json_encode($_RESPONSE);
    }
    
    public function login(){
        $this->load->model('user_model');
        $_RESPONSE=array();
        if($user=$this->user_model->CheckUserEmail($_POST['u_email'])){
            if($user->u_password==md5($_POST['u_password'])){
                $this->session->set_userdata('user',$user);
                $_RESPONSE['CODE']=1;
                $_RESPONSE['URL']="";
            }else{
                $_RESPONSE['CODE']=0;
                $_RESPONSE['MSG']="InValid Password";
            }
        }else{
            $_RESPONSE['CODE']=0;
            $_RESPONSE['MSG']="No Such user Found";
        }
        echo json_encode($_RESPONSE);
    }
}
