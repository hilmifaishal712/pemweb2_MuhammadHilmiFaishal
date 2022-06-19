<?php
class Dosen_model extends CI_Model
{
    public $nidn;
    public $nama;
    public $gender;
    public $tmp_lahir;
    public $tgl_lahir;
    public $pendidikan_akhir;
    public $prodi_kode;

    public function get_all_data()
    {
        $query = $this->db->get('dosen');

        return $query->result();
    }

    public function get_by_id($id){
        $query = $this->db->get_where('dosen', ['id' => $id]);
        return $query->row();
    }

    public function save($data)
    {
        $sql = "INSERT INTO dosen (nidn,nama,gender,tmp_lahir,tgl_lahir,pendidikan_akhir,prodi_kode) VALUES (?,?,?,?,?,?,?)";
        $this->db->query($sql, $data);
        $insert_id = $this->db->insert_id();

        return $this->get_by_id($insert_id);
    }

    public function edit($nidn, $data){
        $this->db->where('nidn', $nidn);

        $this->db->update('dosen', $data);
    }

    public function deleteDatadosen($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('dosen');
    }
    
    public function getDetaildosen($id){
        $this->db->where('id', $id);
        $query = $this->db->get_where('dosen', ['id' => $id]);
        return $query->row();
    }
}
