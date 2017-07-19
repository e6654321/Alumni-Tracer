<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pages extends CI_Controller{
	public function view($page='home'){
		if ( ! file_exists(APPPATH.'views/pages/'.$page.'.php'))
		{
			// Whoops, we don't have a page for that!
			show_404();
		}

		$data['page'] = $page;
		$data['about'] = 'about';
		$data['trace'] = 'trace';
		$data['contact'] = 'contact';
		if ($page=='home'){
			$data['title'] = 'Bitwise Alumni Tracer';
			$data['top'] = '#page-top';
			$data['page'] = 'about';
				$data['header'] = 'Alumni Tracer';
		}
		else{
			//$data['title'] = ucfirst($page); // Capitalize the first letter{
			$data['top'] = 'home';
			if ($page=='about'){
				$data['title'] = 'About Alumni Tracer';
				$data['about'] = '#about';
				$data['header'] = 'About Us';
			}
			elseif ($page=='trace'){
				$data['title'] = 'Trace An Alumni';
				$data['trace'] = '#trace';
				$data['header'] = 'Start Tracing';
			}
			elseif ($page=='contact'){
				$data['title'] = 'Contact BitWise';
				$data['contact'] = '#contact';
				$data['header'] = 'Contact Us';
			}
			else{
				$data['title'] = 'Admin Login';
				$data['header'] = 'Admin';
			}
		}


		$this->load->view('templates/header',$data);
		$this->load->view('pages/'.$page,$data);
		$this->load->view('templates/footer',$data);
	}
}

?>