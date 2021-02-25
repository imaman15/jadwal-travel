<?php 
 defined('BASEPATH') OR exit('No direct script access allowed');
 
 class Mycon extends CI_Controller {
 	function __construct()
	{
		parent::__construct();

		if($this->session->userdata('status_login') != "login"){
			redirect(base_url("Login"));
		}
	} 	

 	public function index()
 	{
 		$data['active1'] = 'active';
 		$data['active2'] = '';
 		$data['active3'] = ''; 		
 		$data['active4'] = ''; 		
 		$data['active5'] = ''; 		
 		$data['content'] = 'input_data';
 		$data['no_jadi'] = $this->Mymod->no_auto();
 		$data['no_jadi2'] = $this->Mymod->no_auto2();
		$this->load->view('blank',$data);
 	}

 	public function data_harian()
 	{
 		$dt = $this->input->post('tgl'); 		
 		$data['active1'] = '';
 		$data['active2'] = 'active';
 		$data['active3'] = ''; 		
 		$data['active4'] = ''; 		
 		$data['active5'] = ''; 		
 		$data ['value'] = $this->Mymod->data_harian($dt)->result();
 		$data['content'] = 'data_harian'; 		
		$this->load->view('blank',$data);
 	}

 	public function laporan()
 	{
 		$data['active1'] = '';
 		$data['active2'] = '';
 		$data['active3'] = ''; 		
 		$data['active4'] = 'active'; 		
 		$data['active5'] = ''; 		
 		$data ['value'] = $this->Mymod->laporan()->result();
 		$data['content'] = 'laporan'; 		
		$this->load->view('blank',$data);
 	}

 	public function detail_laporan($no_order_pst)
 	{	
 		$data['active1'] = '';
 		$data['active2'] = '';
 		$data['active3'] = ''; 		
 		$data['active4'] = 'active'; 		
 		$data['active5'] = ''; 		
 		$data ['value'] = $this->Mymod->detail_laporan($no_order_pst); 
 		$data['content'] = 'detail_laporan'; 		
		$this->load->view('blank',$data);
 	}

 	public function profil()
 	{	
 		$data['active1'] = 'active';
 		$data['active2'] = '';
 		$data['active3'] = ''; 		
 		$data['active4'] = ''; 		
 		$data['active5'] = ''; 		
 		$data ['value'] = $this->Mymod->profil()->row(); 
 		$data['content'] = 'profil'; 		
		$this->load->view('blank',$data);
 	}
 	
 	public function edit_profil()
 	{	
 		$data['active1'] = 'active';
 		$data['active2'] = '';
 		$data['active3'] = ''; 		
 		$data['active4'] = ''; 		
		$data['active5'] = ''; 		
 		$data ['value'] = $this->Mymod->profil()->row(); 
 		$data['content'] = 'edit_profil'; 		
		$this->load->view('blank',$data);
 	}

 	public function insert()
 	{
 		$this->Mymod->insert();
 		redirect('index');
 	} 	

	public function update_profil()
	{	 	
			$user = $this->input->post('user');
			$pass_lama = $this->input->post('pass_lama');
			$pass = $this->input->post('pass');
			$pass2 = $this->input->post('pass2');
			//Enkripsi Password
			$key = $this->config->item('encryption_key');
			$cipher = new Cipher(MCRYPT_BLOWFISH, MCRYPT_MODE_ECB);
			$en_lama = $cipher->encrypt($pass_lama, $key);
			//Penutup
			$cek = $this->db->get_where('admin',array('pass' => $en_lama));
			if ($cek->num_rows() > 0 ) {
				if ($pass2 == $pass) {					
			$this->Mymod->update_profil($user);
 					redirect('profil');
 					}else{
					$this->session->set_flashdata('info',
					'<script type="text/javascript">
					setTimeout(function () {
						swal({
							title: "Mohon Maaf",
							text:  "Konfirmasi password baru tidak sesuai dengan password baru!",
							type: "error",
							timer: 5000,
							showConfirmButton: true
						});
					},10);
					</script>');
				redirect('edit_profil');
				}
 			}else{
				$this->session->set_flashdata('info',
					'<script type="text/javascript">
					setTimeout(function () {
						swal({
							title: "Mohon Maaf",
							text:  "Password lama salah!",
							type: "error",
							timer: 5000,
							showConfirmButton: true
						});
					},10);
					</script>');
				redirect('edit_profil');
			}		
	}		

	public function about_us()
	{
		$this->load->view('about_us');
	}
	
	public function edit_data($no_order_pst,$id)
 	{	
 		$data['active1'] = '';
 		$data['active2'] = 'active';
 		$data['active3'] = ''; 		
 		$data['active4'] = ''; 		
 		$data['active5'] = ''; 		
 		$data ['value'] = $this->Mymod->edit_data($no_order_pst,$id); 
 		$data['content'] = 'edit_data'; 		
		$this->load->view('blank',$data);
 	}

 	public function update_data()
 	{
 		$no_order_pst = $this->input->post('no_order_pst');
 		$id = $this->input->post('id');
 		$this->Mymod->update_data($no_order_pst,$id);
 		redirect('data_harian');
 	}
 	
 	public function delete_data($no_order_pst)
 	{
 		$this->Mymod->delete_data($no_order_pst); 
 		redirect('laporan');
 	}
 	
 	public function data_bulanan()
 	{
 		$tgl_awal = $this->input->post('tgl_awal'); 		
 		$tgl_akhir = $this->input->post('tgl_akhir');	
 		$data['active1'] = '';
 		$data['active2'] = '';
 		$data['active3'] = 'active'; 		
 		$data['active4'] = ''; 		
 		$data['active5'] = ''; 		
 		$data ['value'] = $this->Mymod->data_bulanan($tgl_awal,$tgl_akhir)->result();
 		$data['content'] = 'data_bulanan'; 		
		$this->load->view('blank',$data);
 	}
 	
 	public function invoice()
 	{	
 		$nm_hendel = $this->input->post('nm_hendel'); 		
 		$data['active1'] = '';
 		$data['active2'] = '';
 		$data['active3'] = ''; 		
 		$data['active4'] = '';
 		$data['active5'] = 'active'; 	
 		$data ['value'] = $this->Mymod->invoice($nm_hendel);
 		$data['content'] = 'invoice'; 		
		$this->load->view('blank',$data);
 	}

 	function update(){
		$id= $this->input->post("id");
		$value= $this->input->post("value");
		$modul= $this->input->post("modul");
		$this->Mymod->update($id,$value,$modul);
		echo "{}";
	}
 }
 
 /* End of file mycon.php */
 /* Location: ./application/controllers/mycon.php */ ?>