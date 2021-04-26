<?php


class Home extends CI_Controller{

	public function users($limit = 1){

		if (!$this->session->userdata('limit')){
			$this->session->set_userdata('limit',5);
		}

		$data['results'] = $this->view_all($limit);

		/**THIS IS THE HEAD PART OF THE HTML**/
		$this->load->view("layouts/head_inc");
		/**THIS IS THE NAVIGATION PART OF THE HTML**/
		$this->load->view("layouts/nav_inc");
		/**THIS IS THE MAIN CONTENT PART OF THE HTML**/
		$this->load->view('home/index',$data);
		/**THIS IS THE JAVASCRIPT PART OF THE HTML**/
		$this->load->view('js/main_inc.php');
		/**THIS IS THE FOOTER PART OF THE HTML**/
		$this->load->view("layouts/footer_inc");
	}

	public function increase(){

		$limit1 = $this->session->userdata('limit');
		$limit1 += 5;
		$this->session->set_userdata('limit',$limit1);
		$this->users($this->session->userdata('limit'));

	}
	public function view_all($limit){
//		$data = array(
//			'gender'=>$this->input->get('gender'),
//			'country'=>$this->input->get('country')
//		);
		return $this->home_model->view_all($limit);

	}
}
