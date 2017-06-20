<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Defaults extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
    
        public function __construct() {
            parent::__construct();
            
        }
	public function view($page = 'home')
        {
                if ( ! file_exists(APPPATH.'views/pages/'.$page.'.php'))
                {
                        // Whoops, we don't have a page for that!
                        //show_404();
                }

                $data['title'] = ucfirst($page); // Capitalize the first letter
                $this->load->view('common/head');
                $this->load->view('common/header');
                $this->load->view('pages/'.$page);
                $this->load->view('common/footer');
        }
}
