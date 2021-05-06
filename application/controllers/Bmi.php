<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Bmi extends CI_Controller {

	public function index()
	{
		$this->load->model('pasien_model','pasien1');
        $this->pasien1->id=1;
        $this->pasien1->kode='010001';
        $this->pasien1->nama='Faiz Fikri';
        $this->pasien1->tmp_lahir='Banyumas';
        $this->pasien1->tgl_lahir='04 Jan 2000';
        $this->pasien1->gender='L';

        $this->load->model('pasien_model','pasien2');
        $this->pasien2->id=2;
        $this->pasien2->kode='020001';
        $this->pasien2->nama='Pandan Wangi';
        $this->pasien2->tmp_lahir='Banyumas';
        $this->pasien2->tgl_lahir='22 Feb 2002';
        $this->pasien2->gender='P';

        $this->load->model('pasien_model','pasien3');
        $this->pasien3->id=3;
        $this->pasien3->kode='010002';
        $this->pasien3->nama='Riyadi Salim';
        $this->pasien3->tmp_lahir='Banyumas';
        $this->pasien3->tgl_lahir='20 Des 1998';
        $this->pasien3->gender='L';
        
        $this->load->model('bmi_model','bmi1');
        $this->bmi1->tinggi=169;
        $this->bmi1->berat=64.2;

        $this->load->model('bmi_model','bmi2');
        $this->bmi2->tinggi=152;
        $this->bmi2->berat=40.2;

        $this->load->model('bmi_model','bmi3');
        $this->bmi3->tinggi=159;
        $this->bmi3->berat=90.8;

        $this->load->model('bmipasien_model','bmipasien1');
        $this->bmipasien1->id=1;
        $this->bmipasien1->tanggal='2021-04-11';
        $this->bmipasien1->pasien=$this->pasien1;
        $this->bmipasien1->bmi=$this->bmi1;

        $this->load->model('bmipasien_model','bmipasien2');
        $this->bmipasien2->id=2;
        $this->bmipasien2->tanggal='2021-04-12';
        $this->bmipasien2->pasien=$this->pasien2;
        $this->bmipasien2->bmi=$this->bmi2;

        $this->load->model('bmipasien_model','bmipasien3');
        $this->bmipasien3->id=3;
        $this->bmipasien3->tanggal='2021-04-13';
        $this->bmipasien3->pasien=$this->pasien3;
        $this->bmipasien3->bmi=$this->bmi3;

        $list_pasien = [$this->pasien1, $this->pasien2, $this->pasien3];
        $data_pasien['list_pasien']=$list_pasien;

        $list_bmi = [$this->bmi1, $this->bmi2, $this->bmi3];
        $data_bmi['list_bmi']=$list_bmi;

        $data_bmipasien = [
                           $this->bmipasien1,
                           $this->bmipasien2,
                           $this->bmipasien3,
                        ];
        $data['data_bmipasien']=$data_bmipasien;
        
        $this->load->view('header');
        $this->load->view('bmi/index', $data);
        $this->load->view('footer');
	}
}
