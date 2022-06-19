<?php
class Mahasiswa_model extends CI_Model
{
    public $nim;
    public $nama;
    public $gender;
    public $tmp_lahir;
    public $tgl_lahir;
    public $ipk;
    public $prodi_kode;

    public function get_all_data()
    {
        $query = $this->db->get('mahasiswa');

        return $query->result();
    }

    public function get_by_id($id){
        $query = $this->db->get_where('mahasiswa', ['id' => $id]);
        return $query->row();
    }

    public function save($data)
    {
        $sql = "INSERT INTO mahasiswa (nim,nama,gender,tmp_lahir,tgl_lahir,ipk,prodi_kode) VALUES (?,?,?,?,?,?,?)";
        $this->db->query($sql, $data);
        $insert_id = $this->db->insert_id();

        return $this->get_by_id($insert_id);
    }

    public function edit($nim, $data){
        $this->db->where('nim', $nim);

        $this->db->update('mahasiswa', $data);
    }

    public function deleteDataMahasiswa($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('mahasiswa');
    }
    
    public function getDetailMahasiswa($id){
        $this->db->where('id', $id);
        $query = $this->db->get_where('mahasiswa', ['id' => $id]);
        return $query->row();
    }
}
