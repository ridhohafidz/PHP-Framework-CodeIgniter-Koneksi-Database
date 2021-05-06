<?php
class Pasien_model extends CI_Model {
    public $id;
    public $nama;
    public $kode;
    public $gender;
    public $tmp_lahir;
    public $tgl_lahir;
    public $email;

    public function jenisKelamin() {
        return $this->gender == "L" ? "Laki-laki" : "Perempuan";
    }

    public function getAll(){
        // select * from pasien
        $query = $this->db->get('pasien');
        return $query;
    }

    public function findById($id){
        // select * from pasien where id=$id
        $query = $this->db->get_where('pasien',['id'=>$id]);
        return $query->row();
    }

}

?>