<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Callback extends CI_Controller {
	function __construct() {
        parent::__construct();
        $this->load->library('lineSdk');
    }
		public function index()
		{
			$bot = new Linebot();
			$bot->pushText("U26c6787fa02bd2e1828223978e323cdb", "Salam Dari Codeigniter bro");
		}
}
