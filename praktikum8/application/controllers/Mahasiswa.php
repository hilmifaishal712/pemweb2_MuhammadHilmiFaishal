<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Mahasiswa extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
    }

    public function index()
    {
        $this->load->model('mahasiswa_model');
        $mahasiswa = $this->mahasiswa_model->get_all_data();

        $data = array(
            "title" => "Mahasiswa",
            "isi_db" => $mahasiswa,
        );

        $this->load->view('layout/head', $data);
        $this->load->view('layout/navbar');
        $this->load->view('mahasiswa/index', $data);
        $this->load->view('layout/foot');
    }

    public function create()
    {
        $this->load->model('mahasiswa_model', 'mahasiswa');
        $_nim = $this->input->post('nim');
        $_nama = $this->input->post('nama');
        $_gender = $this->input->post('gender');
        $_tmp_lahir = $this->input->post('tmp_lahir');
        $_tgl_lahir = $this->input->post('tgl_lahir');
        $_ipk = $this->input->post('ipk');
        $_prodi_kode = $this->input->post('prodi_kode');

        $db_mahasiswa['nim'] = $_nim;
        $db_mahasiswa['nama'] = $_nama;
        $db_mahasiswa['gender'] = $_gender;
        $db_mahasiswa['tmp_lahir'] = $_tmp_lahir;
        $db_mahasiswa['tgl_lahir'] = $_tgl_lahir;
        $db_mahasiswa['ipk'] = $_ipk;
        $db_mahasiswa['prodi_kode'] = $_prodi_kode;

        
            $this->mahasiswa->save($db_mahasiswa);

        redirect('mahasiswa/index', 'refresh');
    }

    public function halaman_edit($id)
    {
        $this->load->model('mahasiswa_model', 'mahasiswa'); 
        $query_mahasiswa_detail = $this->mahasiswa->get_by_id($id);

        // echo "<pre>";
        // echo print_r($query_mahasiswa_detail);
        // echo "</pre>";

        $data = array(
            'query_mahasiswa_detail' => $query_mahasiswa_detail
        );

        $this->load->view('layout/head', $data);
        $this->load->view('layout/navbar');
        $this->load->view('mahasiswa/edit_form', $data);
        $this->load->view('layout/foot');
    }

    public function edit_mahasiswa(){
        $this->load->model('mahasiswa_model', 'mahasiswa'); 
        
        $_nim = $this->input->post('nim');
        $_nama = $this->input->post('nama');
        $_gender = $this->input->post('gender');
        $_tmp_lahir = $this->input->post('tmp_lahir');
        $_tgl_lahir = $this->input->post('tgl_lahir');
        $_ipk = $this->input->post('ipk');
        $_prodi_kode = $this->input->post('prodi_kode');

        $array_update = array(
            'nim' => $_nim,
            'nama' => $_nama,
            'gender' => $_gender,
            'tmp_lahir' => $_tmp_lahir,
            'tgl_lahir' => $_tgl_lahir,
            'ipk' => $_ipk,
            'prodi_kode' => $_prodi_kode
        );

        $this->mahasiswa->edit($_nim, $array_update);

        redirect('mahasiswa/index', 'refresh');
    }

    public function deleteDBMahasiswa($id)
    {
        $this->load->model('mahasiswa_model', 'mahasiswa');
        $this->mahasiswa->deleteDataMahasiswa($id);
        redirect('mahasiswa/index', 'refresh');
    }

    public function halaman_detail($id)
    {
        $this->load->model('mahasiswa_model', 'mahasiswa'); 
        $query_mahasiswa_detail = $this->mahasiswa->get_by_id($id);

        // echo "<pre>";
        // echo print_r($query_mahasiswa_detail);
        // echo "</pre>";

        $data = array(
            'query_mahasiswa_detail' => $query_mahasiswa_detail
        );

        $this->load->view('layout/head', $data);
        $this->load->view('layout/navbar');
        $this->load->view('mahasiswa/halaman_detail1', $data);
        $this->load->view('layout/foot');
    }
}
