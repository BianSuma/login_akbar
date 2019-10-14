<?php

class model_surat_tugas extends CI_Model
{
    private $table_name = 'surat_pengajuan';

    public function tampil()
    {
        $this->db->TRANS_START();
        $this->db->TRANS_STRICT(false);
        $this->db->from($this->table_name);
        $result = $this->db->get()->result_array();
        $this->db->TRANS_COMPLETE();

        if ($this->db->TRANS_STATUS()) {
            return $result;
        } else {
            return false;
        }
    }

    public function getById($id)
    {
        $this->db->TRANS_START();
        $this->db->TRANS_STRICT(false);
        $this->db->from($this->table_name);
        $this->db->where('id_pengajuan', $id);
        $result = $this->db->get()->result_array();
        $this->db->TRANS_COMPLETE();

        if ($this->db->TRANS_STATUS()) {
            if (count($result) == 0) {
                return 0;
            } else {
                return $result[0];
            }

            return $result;
        } else {
            return false;
        }
    }

    public function edit($surat, $id)
    {
        $this->db->TRANS_START();
        $this->db->TRANS_STRICT(false);
        $this->db->where('id_pengajuan', $id);
        $this->db->update($this->table_name, $surat);
        $result = $this->db->affected_rows();
        $this->db->TRANS_COMPLETE();

        if ($this->db->TRANS_STATUS()) {
            $result;
        } else {
            return false;
        }
    }

    public function tambah_data()
    {
        $data = [
            'nik' => $this->input->post('nik', true),
            'nama' => $this->input->post('nama', true),
            'posisi' => $this->input->post('posisi', true),
            'tugas' => $this->input->post('tugas', true),
            'instansi' => $this->input->post('instansi', true),
            'tanggal' => $this->input->post('tanggal', true),
        ];

        $this->db->insert('surat_pengajuan', $data);
    }

    public function hapus_data($id)
    {
        $this->db->TRANS_START();
        $this->db->TRANS_STRICT(false);
        $this->db->where('id_pengajuan', $id);
        $this->db->delete($this->table_name);
        $result = $this->db->affected_rows();
        $this->db->TRANS_COMPLETE();

        if ($this->db->TRANS_STATUS()) {
            $result;
        } else {
            return false;
        }
    }
}
