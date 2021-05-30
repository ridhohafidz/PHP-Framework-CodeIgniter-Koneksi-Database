<?php
class Bmipasien_model extends CI_Model {

    public $berat; /** kg */
    public $tinggi;  /** cm */

    public function nilaiBMI() {
        $tinggi_meter = $this->tinggi / 100;
        $bmi = $this->berat / pow($tinggi_meter, 2);
        return $bmi;
    }

    public function statusBMI() {
        if ($this->nilaiBMI() < 18.5) {
            return "Kekurangan berat badan";
        } else if ($this->nilaiBMI() < 25.0) {
            return "Normal (ideal)";
        } else if ($this->nilaiBMI() < 30.0) {
            return "Kelebihan Berat Badan";
        } else {
            return "Kegemukan (Obesitas)";
        }
    }


    public function save($data) {
        $this->berat=$data['berat'];
        $this->tinggi=$data['tinggi'];        


    $data['bmi']=$this->nilaiBMI();//5
    $data['bmi_pasien']=$this->statusBMI();//6

    $sql = "INSERT INTO bmi_pasien
          (tanggal,pasien_id,berat,tinggi,bmi,status_bmi) 
                    VALUES (?,?,?,?,?,?)";

    $this->db->query($sql,$data);
    $insert_id = $this->db->insert_id();
    return $this->findById($insert_id);

    }

    public function findById($id){
        $query = $this->db->get_where('bmi_pasien',['id'=>$id]);
        return $query->row();

    }

    // public $id;
    // public $tanggal;
    // public $pasien;
    // public $bmi;
}

?>