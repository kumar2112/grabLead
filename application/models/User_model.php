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
class User extends CI_Model {
    
    /*
     * @var int ID 
    */
    public $u_id;
    
    /*
     * @var string u_uniquename
    */
    public $u_uniquename;
    /*
     * @var string u_password
    */
    public $u_password;
    /*
     * @var string u_email 
    */
    public $u_email;
    /*
     * @var string u_firstname 
    */
    public $u_firstname;
    /*
     * @var string u_lastname 
    */
    public $u_lastname;
    /*
     * @var string u_date_of_birth 
    */
    public $u_date_of_birth;
    
    /*
     * @var string u_account_type 
    */
    public $u_account_type;
    /*
     * @var string u_country 
    */
    public $u_country;
    /*
     * @var string u_currency 
    */
    public $u_currency;
    
    /*
     * @var string u_description 
    */
    public $u_description;
    
    /*
     * public function save user
    */
    public function save_user(){
        
    }
}
