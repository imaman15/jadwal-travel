<?php

class Login extends CI_Controller{

	function index(){
		$this->load->view('login');
	}
    
    function about_us(){
		$this->load->view('about_us');
	}
    
	function aksi_login(){
		$user = $this->input->post('user');
		$pass = $this->input->post('pass');
		//Enkripsi Password
		$key = $this->config->item('encryption_key');
		$cipher = new Cipher(MCRYPT_BLOWFISH, MCRYPT_MODE_ECB);
		$en = $cipher->encrypt($pass, $key);
		//Penutup
		$where = array(
			'user' => $user,
			'pass' => $en
			);
		$cek = $this->Mymod->cek_login("admin",$where);
    $data = $cek->row();
		if($cek->num_rows() > 0){
			$data_session = array(
				'user' => $data->user,
				'pass' => $data->pass,
				'nama' => $data->nama,
				'email' => $data->email,				
				'status_login' => "login"
				);

			$this->session->set_userdata($data_session);
			$this->session->set_flashdata('info','<script type="text/javascript">
					setTimeout(function () {
				  swal({
            title: "Selamat",
            text:  "Anda berhasil login! ",
            type: "success",
            timer: 5000,
            showConfirmButton: true
        		});
						},10);
						</script>');			

			redirect(base_url());

		}else{
			$this->session->set_flashdata('info','<script type="text/javascript">
					setTimeout(function () {
				  swal({
            title: "Mohon Maaf",
            text:  "Anda gagal login, username atau password salah! ",
            type: "error",
            timer: 5000,
            showConfirmButton: true
        		});
						},10);
						</script>');

			redirect(base_url("Login"));
		}
	}

	function logout(){
		$this->session->sess_destroy();
		redirect(base_url('login'));
	}
}
