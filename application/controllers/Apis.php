<?php
defined('BASEPATH') OR exit('No direct script access allowed');
header('Access-Control-Allow-Origin: *');
class Apis extends CI_Controller {

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
	public function index()
	{
        $this->load->view('nothing_show');
    }
    public function allproducts()
	{
        header("Content-Type: application/json");
        $sql = 'SELECT * FROM products';
        $query = $this->db->query($sql);
        // Fetch the result array from the result object and return it
        $this->output->set_content_type('application/json')->set_output(json_encode($query->result()));
	}
}
