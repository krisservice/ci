<?php
class Pencarian_model extends CI_Model
{
	function search()
	{
		$cari=$this->input->post('search');
		$kategori=$this->input->post('jenis');
		if($kategori=='nik')
		{
			$this->db->like('nik',$cari);
			$query=$this->db->get('penduduk');
			return $query->result();
		}elseif ($kategori=='nkk')
		{
			$this->db->like('nkk',$cari);
			$query=$this->db->get('penduduk');
			return $query->result();
		}else
		{
			$this->db->like('nama_lengkap',$cari);
			$query=$this->db->get('penduduk');
			return $query->result();
		}
	}
	function search_rt()
	{
		$cari=$this->input->post('rt');
		$cari2=$this->input->post('rw');
		if($cari2=='01')
		{
			$this->db->like('rt',$cari);
			$this->db->like('rw',$cari2);
			$query=$this->db->get('penduduk');
			return $query->result();
		}elseif ($cari2=='02')
		{
			$this->db->like('rt',$cari);
			$this->db->like('rw',$cari2);
			$query=$this->db->get('penduduk');
			return $query->result();
		}elseif ($cari2=='03')
		{
			$this->db->like('rt',$cari);
			$this->db->like('rw',$cari2);
			$query=$this->db->get('penduduk');
			return $query->result();
		}elseif ($cari2=='04')
		{
			$this->db->like('rt',$cari);
			$this->db->like('rw',$cari2);
			$query=$this->db->get('penduduk');
			return $query->result();
		}else
		{
			$this->db->like('rt',$cari);
			$this->db->like('rw',$cari2);
			$query=$this->db->get('penduduk');
			return $query->result();
		}
	}
	function search_rw()
	{
		$kategori=$this->input->post('rw');
		if($kategori=='01')
		{
			$this->db->like('rw',$kategori);
			$query=$this->db->get('penduduk');
			return $query->result();
		}elseif ($kategori=='02')
		{
			$this->db->like('rw',$kategori);
			$query=$this->db->get('penduduk');
			return $query->result();
		}elseif ($kategori=='03')
		{
			$this->db->like('rw',$kategori);
			$query=$this->db->get('penduduk');
			return $query->result();
		}elseif ($kategori=='04')
		{
			$this->db->like('rw',$kategori);
			$query=$this->db->get('penduduk');
			return $query->result();
		}else
		{
			$this->db->like('rw',$kategoti);
			$query=$this->db->get('penduduk');
			return $query->result();
		}
	}


}