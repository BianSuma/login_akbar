<?php

class Surat extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        $this->load->model('model_surat_tugas', 'surat_pengajuan');
    }

    public function index()
    {
        $data['title'] = 'Surat Tugas';
        $this->load->view('template/header');
        $this->load->view('admin/spj_admin', $data);
        $this->load->view('template/footer');
    }

    public function data_pengajuan()
    {
        $data['surat_perjalanan'] = $this->surat_pengajuan->tampil();

        $data['title'] = 'Data Pengajuan Surat Tugas';
        $this->load->view('template/header');
        $this->load->view('admin/spj_data_pengajuan', $data);
        $this->load->view('template/footer');
    }

    public function tambah_pengajuan()
    {
        $data['title'] = 'Pengajuan Surat Tugas';

        $this->form_validation->set_rules('nik', 'NIK', 'required|numeric');
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('posisi', 'Posisi', 'required');
        $this->form_validation->set_rules('instansi', 'Instansi', 'required');
        $this->form_validation->set_rules('tanggal', 'Tanggal', 'required');
        $this->form_validation->set_rules('tugas', 'Tugas', 'required');

        $this->form_validation->set_message('required', 'masih kosong, silahkan di isi');

        if ($this->form_validation->run() == false) {
            $this->load->view('template/header');
            $this->load->view('admin/spj_pengajuan_surat', $data);
            $this->load->view('template/footer');
        } else {
            $this->surat_pengajuan->tambah_data();
            $this->session->set_flashdata('flash', 'DiBuat');
            redirect('surat/data_pengajuan');
        }
    }

    public function tambah_pemberian()
    {
        $data['title'] = 'Pemberian Surat Tugas';

        $this->form_validation->set_rules('nik', 'NIK', 'required|numeric');
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('posisi', 'Posisi', 'required');
        $this->form_validation->set_rules('instansi', 'Instansi', 'required');
        $this->form_validation->set_rules('tanggal', 'Tanggal', 'required');
        $this->form_validation->set_rules('tugas', 'Tugas', 'required');

        $this->form_validation->set_message('required', 'masih kosong, silahkan di isi');

        if ($this->form_validation->run() == false) {
            $this->load->view('template/header');
            $this->load->view('admin/spj_pemberian_surat', $data);
            $this->load->view('template/footer');
        } else {
            $this->surat_pengajuan->tambah_data();
            $this->session->set_flashdata('flash', 'DiBuat');
            redirect('surat/data_pemberian');
        }
    }

    public function hapus($id)
    {
        $delete = $this->surat_pengajuan->hapus_data($id);

        if ($delete) {
            $this->session->set_flashdata('not_working', 'Data gagal di update');
        } else {
            $this->session->set_flashdata('working', 'Data berhasil di update');
        }
        redirect('surat/data_pengajuan');
    }

    public function edit($id)
    {
        $this->form_validation->set_rules('nik', 'NIK', 'required|numeric');
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('posisi', 'Posisi', 'required');
        $this->form_validation->set_rules('instansi', 'Instansi', 'required');
        $this->form_validation->set_rules('tanggal', 'Tanggal', 'required');
        $this->form_validation->set_rules('tugas', 'Tugas', 'required');

        if (!$this->form_validation->run()) {
            $data['title'] = 'Edit Surat';
            $data['surat'] = $this->surat_pengajuan->getById($id);

            $this->load->view('template/header');
            $this->load->view('admin/spj_update_surat', $data);
            $this->load->view('template/footer');
        } elseif ($this->form_validation->run()) {
            $surat = [
                'nik' => $this->input->post('nik'),
                'nama' => $this->input->post('nama'),
                'posisi' => $this->input->post('posisi'),
                'tugas' => $this->input->post('tugas'),
                'instansi' => $this->input->post('instansi'),
                'tanggal' => $this->input->post('tanggal'),
            ];

            $update = $this->surat_pengajuan->edit($surat, $id);

            if ($update) {
                $this->session->set_flashdata('not_working', 'Data gagal di update');
            } else {
                $this->session->set_flashdata('working', 'Data berhasil di update');
            }
            redirect('surat/data_pengajuan');
        } else {
        }
    }

    public function print($id)
    {
        $data['surat'] = $this->surat_pengajuan->getById($id);
        $this->load->view('print', $data);
    }    
}
