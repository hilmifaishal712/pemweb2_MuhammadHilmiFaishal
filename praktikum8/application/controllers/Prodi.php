<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Prodi extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
    }

    public function index()
    {
        $this->load->model('prodi_model');
        $prodi = $this->prodi_model->get_all_data();
        
        $data = array(
            "title" => "Prodi",
            "isi_db" => $prodi,
        );
        
        $this->load->view('layout/head', $data);
        $this->load->view('layout/navbar');
        $this->load->view('prodi/index', $data);
        $this->load->view('layout/foot');

    }

    public function create()
    {
        $this->load->model('prodi_model', 'prodi');
        $_kode = $this->input->post('kode');
        $_nama = $this->input->post('nama');
        $_kaprodi = $this->input->post('kaprodi');
        

        $db_prodi['kode'] = $_kode;
        $db_prodi['nama'] = $_nama;
        $db_prodi['kaprodi'] = $_kaprodi;
            
            $this->prodi->save($db_prodi);

        redirect('prodi/index', 'refresh');
    }

    public function halaman_edit($id)
    {
        $this->load->model('prodi_model', 'prodi'); 
        $query_prodi_detail = $this->prodi->get_by_id($id);

        // echo "<pre>";
        // echo print_r($query_prodi_detail);
        // echo "</pre>";

        $data = array(
            'query_prodi_detail' => $query_prodi_detail
        );

        $this->load->view('layout/head', $data);
        $this->load->view('layout/navbar');
        $this->load->view('prodi/edit_form', $data);
        $this->load->view('layout/foot');
    }

    public function edit_prodi(){
        $this->load->model('prodi_model', 'prodi'); 
        
        $_kode = $this->input->post('kode');
        $_nama = $this->input->post('nama');
        $_kaprodi = $this->input->post('kaprodi');
        

        $array_update = array(
            'kode' => $_kode,
            'nama' => $_nama,
            'kaprodi' => $_kaprodi,
            
        );

        // print_r($array_update);

        $this->prodi->edit($_kode, $array_update);

        redirect('prodi/index', 'refresh');
    }

    public function deleteDBprodi($id)
    {
        $this->load->model('prodi_model', 'prodi');
        $this->prodi->deleteDataprodi($id);
        redirect('prodi/index', 'refresh');
    }

    public function halaman_detail($id)
    {
        $this->load->model('prodi_model', 'prodi'); 
        $query_prodi_detail = $this->prodi->get_by_id($id);

        // echo "<pre>";
        // echo print_r($query_prodi_detail);
        // echo "</pre>";

        $data = array(
            'query_prodi_detail' => $query_prodi_detail
        );

        $this->load->view('layout/head', $data);
        $this->load->view('layout/navbar');
        $this->load->view('prodi/halaman_detail', $data);
        $this->load->view('layout/foot');
    }

}
