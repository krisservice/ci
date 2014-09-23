<?php
 if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Penduduk extends CI_Controller{
	function __construct(){
	parent::__construct();
	$this->is_logged_in();
	$this->load->model("penduduk_model");
	$this->load->model("pencarian_model"); 
	$this->load->library(array('breadcrumb','user_agent'));
	}

	
	public function admin(){
		$data['listPenduduk'] = $this->penduduk_model->getAllPenduduk();
		$this->load->view('admin/bg_atas');
		$this->load->view('admin/lihat_data', $data);
		$this->load->view('admin/bg_bawah');
		
	}
	public function indv(){
		$this->load->view('admin/bg_atas');
		$this->load->view('admin/cari');
		$this->load->view('admin/bg_bawah');
	}
	public function list_penduduk(){
	$this->load->model("penduduk_model"); 
	$data['listPenduduk'] = $this->penduduk_model->getAllPenduduk();
		$this->load->view('admin/bg_atas');
		$this->load->view('admin/list',$data);
		$this->load->view('admin/bg_bawah');
	}
	public function cari_rt(){
	    $this->load->view('admin/bg_atas');
		$this->load->view('admin/cari_per_rt');
		$this->load->view('admin/bg_bawah');
	}
	public function cari_rw(){
	    $this->load->view('admin/bg_atas');
		$this->load->view('admin/cari_per_rw');
		$this->load->view('admin/bg_bawah');
	}
	public function rincian($nik){
	  $this->load->model("penduduk_model"); 
       $data['penduduk']=$this->penduduk_model->getById($nik); //dapetin id transaksi
        //jalan-jalan keform edit
	    $this->load->view('admin/bg_atas');
		$this->load->view('admin/rinci',$data);
		$this->load->view('admin/bg_bawah');
	}
	public function search_rw(){
	$data['tampil'] = $this->pencarian_model->search_rw();
	if($data['tampil'] == NULL)
	{
		$this->load->view('admin/bg_atas');
		$this->load->view('admin/kosong', $data);
		$this->load->view('admin/bg_bawah');
	}else
	{
		$this->load->view('admin/bg_atas');
		$this->load->view('admin/tampil', $data);
		$this->load->view('admin/bg_bawah');
		}
	}
	public function search_rt(){
	$data['tampil'] = $this->pencarian_model->search_rt();
	if($data['tampil'] == NULL)
	{
		$this->load->view('admin/bg_atas');
		$this->load->view('admin/kosong', $data);
		$this->load->view('admin/bg_bawah');
	}else
	{
		$this->load->view('admin/bg_atas');
		$this->load->view('admin/tampil', $data);
		$this->load->view('admin/bg_bawah');
		}
	}
	public function search_data(){
	$data['tampil'] = $this->pencarian_model->search();
	if($data['tampil'] == NULL)
	{
		$this->load->view('admin/bg_atas');
		$this->load->view('admin/kosong', $data);
		$this->load->view('admin/bg_bawah');
	}else
	{
		$this->load->view('admin/bg_atas');
		$this->load->view('admin/tampil', $data);
		$this->load->view('admin/bg_bawah');
		}
	}
	
	
	
	
public function addPenduduk()
{
//Function yang dipanggil ketika ingin melakukan add produk kemudian menampilkan add_product_view
//$this->input->set('test','Manajemen User | MyWebApplication.com'); //kalau dir pada views
$data['login_info'] = "input";
$this->load->view('admin/bg_atas');
$this->load->view('admin/input',$data);
$this->load->view('admin/bg_bawah');
}
public function addPendudukDb(){

//Function yang dipanggil ketika ingin memasukan produk ke dalam database
$data = array(
'nik' => $this->input->post('nik'),
'nkk' => $this->input->post('nkk'),
'nama_lengkap' => $this->input->post('nama_lengkap'),
'alamat' => $this->input->post('alamat'),
'rt' => $this->input->post('rt'),
'rw' => $this->input->post('rw'),
'kelamin' => $this->input->post('kelamin'),
'tempat_lahir' => $this->input->post('tempat_lahir'),
'tgl_lahir' => $this->input->post('tgl_lahir'),
'agama' => $this->input->post('agama'),
'pendidikan' => $this->input->post('pendidikan'),
'pekerjaan' => $this->input->post('pekerjaan'),
'status' => $this->input->post('status'),
'hub_dlm_keluarga' => $this->input->post('hub_dlm_keluarga'),
'warganegara' => $this->input->post('warganegara'),
'no_paspor' => $this->input->post('no_paspor'),
'no_kitas_kitap' => $this->input->post('no_kitas_kitap'),
'ayah' => $this->input->post('ayah'),
'ibu' => $this->input->post('ibu'),
'status_kependudukan' => $this->input->post('status_kependudukan')
);

$this->penduduk_model->addPenduduk($data); //passing variable $data ke products_model
redirect('penduduk/admin'); //redirect page ke halaman utama controller products

}

   function updatependuduk($nik){
   
   // $this->load->model("penduduk_model"); //load model 
    $data['penduduk']=$this->penduduk_model->getById($nik); //dapetin id transaksi
    $this->load->view('admin/bg_atas');
	$this->load->view('admin/edit_data',$data); //jalan-jalan keform edit
    $this->load->view('admin/bg_bawah');
//Function yang dipanggil ketika ingin melakukan update produk kemudian menampilkan update_product_view
}
public function updatePendudukDb()
{
$this->load->helper(array('form', 'url'));
$data = array(	
'nik' => $this->input->post('nik'),
'nkk' => $this->input->post('nkk'),
'nama_lengkap' => $this->input->post('nama_lengkap'),
'alamat' => $this->input->post('alamat'),
'rt' => $this->input->post('rt'),
'rw' => $this->input->post('rw'),
'kelamin' => $this->input->post('kelamin'),
'tempat_lahir' => $this->input->post('tempat_lahir'),
'tgl_lahir' => $this->input->post('tgl_lahir'),
'agama' => $this->input->post('agama'),
'pendidikan' => $this->input->post('pendidikan'),
'pekerjaan' => $this->input->post('pekerjaan'),
'status' => $this->input->post('status'),
'hub_dlm_keluarga' => $this->input->post('hub_dlm_keluarga'),
'warganegara' => $this->input->post('warganegara'),
'no_paspor' => $this->input->post('no_paspor'),
'no_kitas_kitap' => $this->input->post('no_kitas_kitap'),
'ayah' => $this->input->post('ayah'),
'ibu' => $this->input->post('ibu'),
'status_kependudukan' => $this->input->post('status_kependudukan')
);
		
		     
         	//echo $judul;
$nik = $this->uri->segment(3);	
$this->penduduk_model->updatePenduduk($data,$nik);
redirect('penduduk');
		
//Function yang dipanggil ketika ingin melakukan update terhadap produk yang ada di dalam database
}
public function deletePendudukDb()
{
//Function yang dipanggil ketika ingin melakukan delete produk dari database
$nik = $this->uri->segment(3);
$this->penduduk_model->deletePenduduk($nik);
   // kembalikan ke halaman manajemen user
   redirect('penduduk'); 
}
function is_logged_in()
	{
		$is_logged_in = $this->session->userdata('is_logged_in');
		if(!isset($is_logged_in) || $is_logged_in != true)
		{
			echo 'You don\'t have permission to access this page. <a href="../login">Login</a>';	
			die();		
			//$this->load->view('login_form');
		}		
	}	
}

/* Location: ./application/controllers/penduduk.php */
