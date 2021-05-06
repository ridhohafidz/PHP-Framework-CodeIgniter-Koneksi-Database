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
}

?>