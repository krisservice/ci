<?php
//File products_model.php

class Penduduk_model extends CI_Model
{

 function __construct()
 {
 parent::__construct();
 }

 function getAllPenduduk()
 {
 //select semua data yang ada pada table msProduct
 $this->db->select("*");
 $this->db->from("penduduk");
 return $this->db->get();
 }
 function getById($nik)
 {
 $this->db->where('nik',$nik);
 $this->db->from("penduduk");
   return $this->db->get();   //mengambil dari database diatasnya

}


 function addPenduduk($data)
 {
 
 //untuk insert data ke database
 $this->db->insert('penduduk', $data);
 
}
 function updatePenduduk($data,$nik)
 {
  $this->db->where('nik', $nik);
  $this->db->update('penduduk', $data);

 }

 function deletePenduduk($nik)
 {
 //delete produk berdasarkan id
  $this->db->where('nik',$nik);
  $this->db->delete('penduduk');
 }
}