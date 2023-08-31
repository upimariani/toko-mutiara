<?php

defined('BASEPATH') or exit('No direct script access allowed');

class cLogin extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('mLogin');
	}
	public function index()
	{
		$this->form_validation->set_rules('username', 'Username', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');

		if ($this->form_validation->run() == FALSE) {
			$this->load->view('Pelanggan/Layout/head');
			$this->load->view('Pelanggan/vLogin');
			$this->load->view('Pelanggan/Layout/footer');
		} else {
			$username = $this->input->post('username');
			$password = $this->input->post('password');
			$data = $this->mLogin->login($username, $password);

			if ($data) {
				$id = $data->id_pelanggan;
				$nm_pel = $data->nama;
				$alamat = $data->alamat;
				$array = array(
					'id' => $id,
					'nama' => $nm_pel,
					'alamat' => $alamat
				);
				$this->session->set_userdata($array);
				redirect('Pelanggan/cHome');
			} else {
				$this->session->set_flashdata('error', 'Username dan Password Anda Salah!');
				redirect('Pelanggan/cLogin');
			}
		}
	}
	public function logout()
	{
		$this->cart->destroy();
		$this->session->unset_userdata('id');
		$this->session->unset_userdata('nama');
		$this->session->set_flashdata('success', 'Anda Berhasil Logout!');
		redirect('Pelanggan/cLogin');
	}
	public function register()
	{
		$this->form_validation->set_rules('nama', 'Nama Pelanggan', 'required');
		$this->form_validation->set_rules('no_hp', 'No Telepon', 'required|min_length[11]|max_length[13]|is_unique[pelanggan.no_hp]');
		$this->form_validation->set_rules('alamat', 'Alamat', 'required');
		$this->form_validation->set_rules('username', 'Username', 'required|is_unique[pelanggan.username]');
		$this->form_validation->set_rules('password', 'Password', 'required|is_unique[pelanggan.password]');

		if ($this->form_validation->run() == FALSE) {
			$this->load->view('Pelanggan/Layout/head');
			$this->load->view('Pelanggan/vRegister');
			$this->load->view('Pelanggan/Layout/footer');
		} else {
			$data = array(
				'nama' => $this->input->post('nama'),
				'alamat' => $this->input->post('alamat'),
				'no_hp' => $this->input->post('no_hp'),
				'username' => $this->input->post('username'),
				'password' => $this->input->post('password')
			);
			$this->mLogin->register($data);
			$this->session->set_flashdata('success', 'Anda Berhasil Register! Silahkan Melakukan Login!');
			redirect('Pelanggan/clogin');
		}
	}
}

/* End of file cLogin.php */
