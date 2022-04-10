<?php
class Koleksimodel extends CI_Model
{

    function __construct()
    {
        $this->load->database();
    }

    function get_koleksi()
    {
        return $this->db->get('koleksi')->result_array();
    }

    function get_detail($a)
    {
        $this->db->where('id', $a);
        return $this->db->get('koleksi')->row_array();
    }

    function insert($a, $cover)
    {
        $data = [
            'judul' => $a['judul'],
            'penerbit' => $a['penerbit'],
            'penulis' => $a['penulis'],
            
            'cover' => $cover
        ];
        return $this->db->insert('koleksi', $data);
    }

    function update($a, $id, $cover = null)
    {
        if ($cover == 1) {
            $data = [
                'cover' => $a
            ];
        } else {
            $data = [
                'judul' => $a['judul'],
                'penerbit' => $a['penerbit'],
                'penulis' => $a['penulis'],
                
            ];
        }
        $this->db->where('id', $id);
        return $this->db->update('koleksi', $data);
    }


    function delete($id)
    {
        $this->db->where('id', $id);
        return $this->db->delete('koleksi');
    }
}