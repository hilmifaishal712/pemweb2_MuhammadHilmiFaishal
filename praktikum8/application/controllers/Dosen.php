<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dosen extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
    }

    public function index()
    {
        $this->load->model('dosen_model');
        $dosen = $this->dosen_model->get_all_data();

        $data = array(
            "title" => "dosen",
            "isi_db" => $dosen,
        );

        $this->load->view('layout/head', $data);
        $this->load->view('layout/navbar');
        $this->load->view('dosen/index', $data);
        $this->load->view('layout/foot');
    }

    public function create()
    {
        $this->load->model('dosen_model', 'dosen');
        $_nidn = $this->input->post('nidn');
        $_nama = $this->input->post('nama');
        $_gender = $this->input->post('gender');
        $_tmp_lahir = $this->input->post('tmp_lahir');
        $_tgl_lahir = $this->input->post('tgl_lahir');
        $_pendidikan_akhir = $this->input->post('pendidikan_akhir');
        $_prodi_kode = $this->input->post('prodi_kode');

        $db_dosen['nidn'] = $_nidn;
        $db_dosen['nama'] = $_nama;
        $db_dosen['gender'] = $_gender;
        $db_dosen['tmp_lahir'] = $_tmp_lahir;
        $db_dosen['tgl_lahir'] = $_tgl_lahir;
        $db_dosen['pendidikan_akhir'] = $_pendidikan_akhir;
        $db_dosen['prodi_kode'] = $_prodi_kode;

        
            $this->dosen->save($db_dosen);

        redirect('dosen/index', 'refresh');
    }

    public function halaman_edit($id)
    {
        $this->load->model('dosen_model', 'dosen'); 
        $query_dosen_detail = $this->dosen->get_by_id($id);

        // echo "<pre>";
        // echo print_r($query_dosen_detail);
        // echo "</pre>";

        $data = array(
            'query_dosen_detail' => $query_dosen_detail
        );

        $this->load->view('layout/head', $data);
        $this->load->view('layout/navbar');
        $this->load->view('dosen/edit_form', $data);
        $this->load->view('layout/foot');
    }

    public function edit_dosen(){
        $this->load->model('dosen_model', 'dosen'); 
        
        $_nidn = $this->input->post('nidn');
        $_nama = $this->input->post('nama');
        $_gender = $this->input->post('gender');
        $_tmp_lahir = $this->input->post('tmp_lahir');
        $_tgl_lahir = $this->input->post('tgl_lahir');
        $_pendidikan_akhir = $this->input->post('pendidikan_akhir');
        $_prodi_kode = $this->input->post('prodi_kode');

        $array_update = array(
            'nidn' => $_nidn,
            'nama' => $_nama,
            'gender' => $_gender,
            'tmp_lahir' => $_tmp_lahir,
            'tgl_lahir' => $_tgl_lahir,
            'pendidikan_akhir' => $_pendidikan_akhir,
            'prodi_kode' => $_prodi_kode
        );

        $this->dosen->edit($_nidn, $array_update);

        redirect('dosen/index', 'refresh');
    }

    public function deleteDBdosen($id)
    {
        $this->load->model('dosen_model', 'dosen');
        $this->dosen->deleteDatadosen($id);
        redirect('dosen/index', 'refresh');
    }

    public function halaman_detail($id)
    {
        $this->load->model('dosen_model', 'dosen'); 
        $query_dosen_detail = $this->dosen->get_by_id($id);

        // echo "<pre>";
        // echo print_r($query_dosen_detail);
        // echo "</pre>";

        $data = array(
            'query_dosen_detail' => $query_dosen_detail
        );

        $this->load->view('layout/head', $data);
        $this->load->view('layout/navbar');
        $this->load->view('dosen/halaman_detail1', $data);
        $this->load->view('layout/foot');
    }
}
