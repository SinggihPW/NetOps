<?php
class M_data extends CI_Model{

    /**function get_data(){
      $this->db->select("No,Date,Hostname,Current,Average,Max");
      $this->db->from('cpu');
      $query = $this->db->get();
      return $query->result();
    }*/


    public function get_data()
    {        
      $query =  $this->db->query('select * from master ');
        return $query->result_array();
    }
 
       /*public function get_dokter_dokter($where ="")
    {        
      $query =  $this->db->query('select * from dokter '.$where);
        return $query->result_array();
    }

    public function get_dokter($where ="")
    {        
      $query =  $this->db->query('SELECT dokter.dokter, dokter.no_str, poli.nama_poli FROM dokter INNER JOIN poli ON dokter.poli = poli.idpoli'.$where);
        return $query->result_array();
    }

    public function InsertData($tableName, $data,$file_path,$file_size)
    {
    $query = $this->db->insert($tableName, $data,$file_path,$file_size);
    return $query;
    }

    public function DeleteData($tablename,$where){
      $query = $this->db->delete($tablename, $where);
        return $query;
    }

    public function UpdateData($tablename, $data, $where){
      $query = $this->db->update($tablename, $data, $where);
      return $query;
    }*/

    // Fungsi untuk melakukan simpan data ke tabel siswa
  	/*public function save(){
    $data = array(
      "iddokter" => $this->input->post('input_id'),    	
      "nama_dkt" => $this->input->post('input_nama'),
      "poli_idpoli" => $this->input->post('input_poli'),
      "no_str_dkt" => $this->input->post('input_str'),
      "kabupaten_kota_dkt" => $this->input->post('input_kota'),
      "jenis_kelamin_dkt" => $this->input->post('input_jeniskelamin'),
      "usia_dkt" => $this->input->post('input_usia')
    );
    
    $this->db->insert('dokter', $data); // Untuk mengeksekusi perintah insert data
  	}
  
  // Fungsi untuk melakukan ubah data siswa berdasarkan NIS siswa
  	public function edit($iddokter){
    $data = array(
      "iddokter" => $this->input->post('input_id'),
      "nama_dkt" => $this->input->post('input_nama'),
      "poli_idpoli" => $this->input->post('input_poli'),
      "no_str_dkt" => $this->input->post('input_str'),
      "kabupaten_kota_dkt" => $this->input->post('input_kota'),
      "jenis_kelamin_dkt" => $this->input->post('input_jeniskelamin'),
      "usia_dkt" => $this->input->post('input_usia')
    );
    
    $this->db->where('iddokter', $iddokter);
    $this->db->update('dokter', $data); // Untuk mengeksekusi perintah update data
  	}
  
  // Fungsi untuk melakukan menghapus data siswa berdasarkan NIS siswa
  public function delete($iddokter){
    $this->db->where('iddokter', $iddokter);
    $this->db->delete('dokter'); // Untuk mengeksekusi perintah delete data
  }*/  
}