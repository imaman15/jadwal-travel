<?php 
 defined('BASEPATH') OR exit('No direct script access allowed');
 
 class Mymod extends CI_Model {
     
    public function no_auto()   {
		  $this->db->select('RIGHT(trv_pusat.no_order_pst,10) as no', FALSE);
		  $this->db->order_by('no_order_pst','DESC');    
		  $this->db->limit(1);    
		  $query = $this->db->get('trv_pusat');      
		  //cek dulu apakah ada sudah ada no di tabel.    
		  if($query->num_rows() <> 0){      
		   //jika no ternyata sudah ada.      
		   $data = $query->row();      
		   $no_jadi = intval($data->no) + 1;    
		  }
		  else {      
		   //jika kode belum ada      
		   $no_jadi = 756;    
		  }
		  
		  return $no_jadi;  
	}
	
	public function no_auto2()   {
		  $this->db->select('RIGHT(trv_cabang.id_cbg,10) as no', FALSE);
		  $this->db->order_by('id_cbg','DESC');    
		  $this->db->limit(1);    
		  $query = $this->db->get('trv_cabang');      
		  //cek dulu apakah ada sudah ada no di tabel.    
		  if($query->num_rows() <> 0){      
		   //jika no ternyata sudah ada.      
		   $data = $query->row();      
		   $no_jadi2 = intval($data->no) + 1;    
		  }
		  else {      
		   //jika kode belum ada      
		   $no_jadi2 = 1;    
		  }
		  
		  return $no_jadi2;  
	}
 
 	public function detail_laporan($no_order_pst)
 	{
 		$this->db->select('*');
		$this->db->from('trv_cabang a');
		$this->db->join('trv_pusat b', 'b.no_order_pst=a.no_order_pst');
		$this->db->join('trv_order c', 'c.id_cbg=a.id_cbg'); 
		$this->db->order_by('a.no_order','desc');
		$this->db->where('b.no_order_pst', $no_order_pst);			
		$query = $this->db->get();

		return $query;
 	}

 	function cek_login($table,$where)
	{
		return $this->db->get_where($table,$where);
	}

 	public function laporan()
 	{
 	$this->db->select('*');
		$this->db->from('trv_cabang a');
		$this->db->join('trv_pusat b', 'b.no_order_pst=a.no_order_pst');
		$this->db->order_by('a.no_order','desc');
		$query = $this->db->get();

		return $query;
 	} 	

 	public function profil()
 	{
 		return $this->db->get('admin'); 		
 	} 	

 	public function data_harian($dt)
 	{
 		
 		$this->db->select('*');
		$this->db->from('trv_cabang a');
		$this->db->join('trv_pusat b', 'b.no_order_pst=a.no_order_pst');
		$this->db->join('trv_order c', 'c.id_cbg=a.id_cbg'); 
		$this->db->order_by('a.no_order','desc');	
		$this->db->where('c.tgl_order', $dt);	
		$query = $this->db->get();

		return $query;
 		
 	} 	

	public function insert()	
	{
		$no_order_pst = $this->input->post('no_order_pst');
		$tanggal = $this->input->post('tanggal');	
		$no_order = $this->input->post('no_order');
		$nm_hendel = $this->input->post('nm_hendel');
		$nm_travel = $this->input->post('nm_travel');
		$program = $this->input->post('program');
		$telepon = $this->input->post('telepon');	
		$id_cbg = $this->input->post('id_cbg');	
		$object = array (
			'no_order_pst' => $no_order_pst,
			'tanggal' => $tanggal			
		);
		$object1 = array (
			'id_cbg' => $id_cbg,
			'no_order' => $no_order,
			'nm_hendel' => $nm_hendel,
			'nm_travel' => $nm_travel,
			'program' => $program,
			'telepon' => $telepon,
			'no_order_pst' => $no_order_pst,
		);
		
		

		$cek = $this->db->get_where('trv_pusat',array('no_order_pst' => $no_order_pst));
			
		if(!$cek->num_rows() > 0 )
			{		
				$query = $this->db->insert('trv_pusat',$object);
				$query1 = $this->db->insert('trv_cabang',$object1);		

				foreach ($_POST['rows'] as $key => $count ){
                $tgl_order = $_POST['tgl_order_'.$count];                
                $jam = $_POST['jam_'.$count];     
                $driver = $_POST['driver_'.$count];  
                $bus = $_POST['bus_'.$count];                
                $dari = $_POST['dari_'.$count];                
                $tujuan = $_POST['tujuan_'.$count];                
                $keterangan = $_POST['keterangan_'.$count];                
                $biaya = $_POST['biaya_'.$count]; 
                $object2 = array (
			'id_cbg' => $id_cbg,
			'tgl_order' => $tgl_order,			
			'jam' => $jam,	
			'driver' => $driver,
			'bus' => $bus,
			'dari' => $dari,
			'tujuan' => $tujuan,
			'keterangan' => $keterangan,
			'biaya' => $biaya			
		);             
                 $query2 = $this->db->insert('trv_order',$object2);
			}
			//end foreach

				$return = $this->session->set_flashdata('info',
					'<script type="text/javascript">
					setTimeout(function () {
						swal({
							title: "Selamat",
							text:  "Data berhasil diinput!",
							type: "success",
							timer: 3000,
							showConfirmButton: true
						});
					},10);
					</script>');
				redirect(site_url());
				return $return;
			}
			else
			{
				$return = $this->session->set_flashdata('info',
					'<script type="text/javascript">
					setTimeout(function () {
						swal({
							title: "Mohon Maaf",
							text:  "Data gagal diinput! Silahkan coba lagi.",
							type: "warning",
							timer: 10000,
							showConfirmButton: true
						});
					},10);
					</script>');
				redirect('Mycon/index');
				return $return;
			}
		
	}

	public function update_profil($user)
	{
		$user = $this->input->post('user');
		$email = $this->input->post('email');
		$pass = $this->input->post('pass');
		$nama = $this->input->post('nama');
		//Enkripsi Password
		$key = $this->config->item('encryption_key');
		$cipher = new Cipher(MCRYPT_BLOWFISH, MCRYPT_MODE_ECB);
		$en = $cipher->encrypt($pass, $key);
		//Penutup

		$object = array (
			'user' => $user,
			'email' => $email,
			'pass' => $en,
			'nama' => $nama		
			);
			$this->db->where('user',$user);
			$this->db->update('admin',$object);

			if ($this->db->affected_rows()) {
				$return = $this->session->set_flashdata('info',
					'<script type="text/javascript">
					setTimeout(function () {
						swal({
							title: "Selamat",
							text:  "Profil berhasil diedit!",
							type: "success",
							timer: 5000,
							showConfirmButton: true
						});
					},10);
					</script>');
				redirect('Mycon/profil');
				return $return;
			}
			else
			{
				$return = $this->session->set_flashdata('info',
					'<script type="text/javascript">
					setTimeout(function () {
						swal({
							title: "Mohon Maaf",
							text:  "Profil gagal diedit, karena tidak ada perubahan!",
							type: "warning",
							timer: 5000,
							showConfirmButton: true
						});
					},10);
					</script>');
				redirect('Mycon/profil');
				return $return;
			}
			

	}
	
	public function edit_data($no_order_pst,$id)
 	{
 		$this->db->select('*');
		$this->db->from('trv_cabang a');
		$this->db->join('trv_pusat b', 'b.no_order_pst=a.no_order_pst');
		$this->db->join('trv_order c', 'c.id_cbg=a.id_cbg'); 
		$this->db->order_by('a.no_order','desc');
		$where = array('b.no_order_pst' => $no_order_pst, 'c.id' => $id);
		$this->db->where($where);			
		$query = $this->db->get();

		return $query;
 	}

 	public function update_data($no_order_pst,$id)
 	{ 		
		$no_order_pst = $this->input->post('no_order_pst');	
		$tanggal = $this->input->post('tanggal');	
		$no_order = $this->input->post('no_order');
		$nm_hendel = $this->input->post('nm_hendel');
		$nm_travel = $this->input->post('nm_travel');
		$program = $this->input->post('program');
		$telepon = $this->input->post('telepon');
		$id = $this->input->post('id');		
		$tgl_order = $this->input->post('tgl_order');
		$jam = $this->input->post('jam');
		$driver = $this->input->post('driver');
		$bus = $this->input->post('bus');
		$dari = $this->input->post('dari');
		$tujuan = $this->input->post('tujuan');
		$keterangan = $this->input->post('keterangan');
		$biaya = $this->input->post('biaya');		
		$id_cbg = $this->input->post('id_cbg');		
		$object = array (
			'no_order_pst' => $no_order_pst,
			'tanggal' => $tanggal			
		);
					
		$this->db->where('no_order_pst',$no_order_pst);
			$this->db->update('trv_pusat',$object);
			
			if ($this->db->affected_rows()) {
				$return = $this->session->set_flashdata('info',
					'<script type="text/javascript">
					setTimeout(function () {
						swal({
							title: "Selamat",
							text:  "Data berhasil diedit!",
							type: "success",
							timer: 5000,
							showConfirmButton: true
						});
					},10);
					</script>');
				redirect('Mycon/data_harian');
				return $return;
			}
			
					
		$object1 = array (
			'no_order' => $no_order,
			'nm_hendel' => $nm_hendel,
			'nm_travel' => $nm_travel,
			'program' => $program,
			'telepon' => $telepon,
			'no_order_pst' => $no_order_pst,
		);

		$this->db->where('id_cbg',$id_cbg);
			$this->db->update('trv_cabang',$object1);
			
			if ($this->db->affected_rows()) {
				$return = $this->session->set_flashdata('info',
					'<script type="text/javascript">
					setTimeout(function () {
						swal({
							title: "Selamat",
							text:  "Data berhasil diedit!",
							type: "success",
							timer: 5000,
							showConfirmButton: true
						});
					},10);
					</script>');
				redirect('Mycon/data_harian');
				return $return;
			}
			

		$object2 = array (
			'id' => $id,
			'tgl_order' => $tgl_order,
			'jam' => $jam,
			'driver' => $driver,
			'bus' => $bus,
			'dari' => $dari,
			'tujuan' => $tujuan,
			'keterangan' => $keterangan,
			'biaya' => $biaya
		);
		
		$this->db->where('id',$id);
			$this->db->update('trv_order',$object2);
			
		if ($this->db->affected_rows()) {
				$return = $this->session->set_flashdata('info',
					'<script type="text/javascript">
					setTimeout(function () {
						swal({
							title: "Selamat",
							text:  "Data berhasil diedit!",
							type: "success",
							timer: 5000,
							showConfirmButton: true
						});
					},10);
					</script>');
				redirect('Mycon/data_harian');
				return $return;
			}
			
 	}
 	
 	public function delete_data($no_order_pst)
 	{
 		return $query = $this->db->query("delete from trv_pusat where no_order_pst='$no_order_pst'");
 	}
 	
 	public function data_bulanan($tgl_awal,$tgl_akhir)
 	{ 		
		$query = $this->db->query("Select * from trv_cabang a join trv_pusat b on b.no_order_pst=a.no_order_pst join trv_order c on c.id_cbg=a.id_cbg WHERE c.tgl_order between '$tgl_awal' and '$tgl_akhir' order by a.no_order ASC");

		return $query;
 	}

    public function invoice($nm_hendel)
 	{ 		
		$query = $this->db->query("Select * from trv_cabang a join trv_pusat b on b.no_order_pst=a.no_order_pst join trv_order c on c.id_cbg=a.id_cbg WHERE a.nm_hendel='$nm_hendel'");

		return $query->result_array();
 	}

 	public function update($id,$value,$modul){
		$this->db->where(array("id"=>$id));
		$this->db->update("trv_order",array($modul=>$value));
	}
}
 
 /* End of file mymod.php */
 /* Location: ./application/models/mymod.php */ ?>