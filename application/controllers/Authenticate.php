<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Authenticate extends CI_Controller {

    public function index() 
    {
        $this->load->view('user_auth');
    }
}