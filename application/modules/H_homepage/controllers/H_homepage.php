<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class H_homepage extends MY_Controller{

    public function __construct(){
        parent::__construct();
    }

    public function index(){
        $this->load->view('V_homepage');
    }

}
?>