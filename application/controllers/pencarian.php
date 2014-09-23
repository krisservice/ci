<?php 
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Pencarian extends CI_Controller{
	function __construct(){
	parent::__construct();
	$this->load->library(array('breadcrumb','user_agent'));
	$this->load->model("pencarian_model"); 
	}
	public function index(){
		$this->load->view('data/bg_atas');
		$this->load->view('data/cari');
		$this->load->view('data/bg_bawah');
	}
	public function list_penduduk(){
	$this->load->model("penduduk_model"); 
	$data['listPenduduk'] = $this->penduduk_model->getAllPenduduk();
		$this->load->view('data/bg_atas');
		$this->load->view('data/list',$data);
		$this->load->view('data/bg_bawah');
	}
	public function cari_rt(){
	    $this->load->view('data/bg_atas');
		$this->load->view('data/cari_per_rt');
		$this->load->view('data/bg_bawah');
	}
	public function cari_rw(){
	    $this->load->view('data/bg_atas');
		$this->load->view('data/cari_per_rw');
		$this->load->view('data/bg_bawah');
	}
	public function rincian($nik){
	  $this->load->model("penduduk_model"); 
       $data['penduduk']=$this->penduduk_model->getById($nik); //dapetin id transaksi
        //jalan-jalan keform edit
	    $this->load->view('data/bg_atas');
		$this->load->view('data/rinci',$data);
		$this->load->view('data/bg_bawah');
	}
	public function search_rw(){
	$data['tampil'] = $this->pencarian_model->search_rw();
	if($data['tampil'] == NULL)
	{
		$this->load->view('data/bg_atas');
		$this->load->view('data/kosong', $data);
		$this->load->view('data/bg_bawah');
	}else
	{
		$this->load->view('data/bg_atas');
		$this->load->view('data/tampil', $data);
		$this->load->view('data/bg_bawah');
		}
	}
	public function search_rt(){
	$data['tampil'] = $this->pencarian_model->search_rt();
	if($data['tampil'] == NULL)
	{
		$this->load->view('data/bg_atas');
		$this->load->view('data/kosong', $data);
		$this->load->view('data/bg_bawah');
	}else
	{
		$this->load->view('data/bg_atas');
		$this->load->view('data/tampil', $data);
		$this->load->view('data/bg_bawah');
		}
	}
	public function search_data(){
	$data['tampil'] = $this->pencarian_model->search();
	if($data['tampil'] == NULL)
	{
		$this->load->view('data/bg_atas');
		$this->load->view('data/kosong', $data);
		$this->load->view('data/bg_bawah');
	}else
	{
		$this->load->view('data/bg_atas');
		$this->load->view('data/tampil', $data);
		$this->load->view('data/bg_bawah');
		}
	}
}	
?>