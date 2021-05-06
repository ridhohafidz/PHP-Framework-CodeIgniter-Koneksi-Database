<?php
class Bmi_pasien extends CI_Model {
    public $id;
    public $tanggal;
    public $berat;
    public $tinggi;
    public $bmi;
    public $status_bmi;
    public $catatan;
    public $pasien_id;
    
    public function getAll(){
        // select * from bmi_pasien
        $query = $this->db->get('bmi_pasien');
        return $query;
    }

    public function findById($id){
        // select * from bmi_pasien where id=$id
        $query = $this->db->get_where('bmi_pasien',['id'=>$id]);
        return $query->row();
    }    

}

?>