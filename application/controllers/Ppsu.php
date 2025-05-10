<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Ppsu extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('User_model', 'user');
        $this->load->model('Laporan_model', 'laporan');
    }

    public function index()
    {
        $data['user'] = $this->db->get_where('users', ['nopeg' =>
        $this->session->userdata('nopeg')])->row_array();
        $data['berita'] = $this->db->get('berita')->result_array();

        $data['userMember'] = $this->user->getUser();

        $data['title'] = 'Dashboard';
        $this->load->view('templates/pjlp/ppsu/pjlp_header', $data);
        $this->load->view('templates/pjlp/ppsu/pjlp_sidebar', $data);
        $this->load->view('templates/pjlp/ppsu/pjlp_topbar', $data);
        $this->load->view('pjlp/ppsu/index', $data);
        $this->load->view('templates/pjlp/ppsu/pjlp_footer');
    }

    public function profile()
    {
        $data['user'] = $this->db->get_where('users', ['nopeg' =>
        $this->session->userdata('nopeg')])->row_array();

        $data['userMember'] = $this->user->getUser();

        $data['title'] = 'Profile';
        $this->load->view('templates/pjlp/ppsu/pjlp_header', $data);
        $this->load->view('templates/pjlp/ppsu/pjlp_sidebar', $data);
        $this->load->view('templates/pjlp/ppsu/pjlp_topbar', $data);
        $this->load->view('pjlp/ppsu/profile', $data);
        $this->load->view('templates/pjlp/ppsu/pjlp_footer');
    }

    public function editprofile()
    {

        if ($this->form_validation->run() == FALSE) {
            $data['user'] = $this->db->get_where('users', ['nopeg' =>
            $this->session->userdata('nopeg')])->row_array();

            $data['title'] = 'Edit Profile';
            $this->load->view('templates/pjlp/ppsu/pjlp_header', $data);
            $this->load->view('templates/pjlp/ppsu/pjlp_sidebar', $data);
            $this->load->view('templates/pjlp/ppsu/pjlp_topbar', $data);
            $this->load->view('pjlp/ppsu/edit_profile', $data);
            $this->load->view('templates/pjlp/ppsu/pjlp_footer');
        } else {
            // Memeriksa apakah ada file gambar yang diunggah
            if (!empty($_FILES['image']['name'])) {
                // Proses upload gambar jika ada
                $config['upload_path'] = './assets/img/profile/'; // Sesuaikan dengan direktori penyimpanan gambar Anda
                $config['allowed_types'] = 'jpg|jpeg|png'; // Jenis file yang diizinkan
                $config['max_size'] = 2048; // Ukuran maksimum file (dalam kilobita)

                $this->load->library('upload', $config);

                if ($this->upload->do_upload('image')) {
                    // Jika upload berhasil, update nama file gambar di database
                    $data['image'] = $this->upload->data('file_name');
                } else {
                    // Jika upload gagal, set pesan error sebagai flashdata
                    $this->session->set_flashdata('massage', $this->upload->display_errors());
                }
            }

            $data = array(
                'nama' => $this->input->post('nama'),
                'tempat_lahir' => $this->input->post('tempat_lahir'),
                'tgl_lahir' => $this->input->post('tgl_lahir'),
                'nik' => $this->input->post('nik'),
                'jk' => $this->input->post('jk'),
                'alamat' => $this->input->post('alamat'),
                'telp' => $this->input->post('telp'),
                'email' => $this->input->post('email'),
            );

            // Panggil fungsi model untuk melakukan update data pengguna
            $this->user_model->updateProfile($data);

            $this->session->set_flashdata('error', '<div class="alert alert-danger" role="alert">
                Profile berhasil dirubah! </div>');
            redirect('ppsu/profile');
        }
    }

    public function laporan()
    {
        $data['user'] = $this->db->get_where('users', ['nopeg' =>
        $this->session->userdata('nopeg')])->row_array();

        $nopeg = $this->session->userdata('nopeg');
        $data['laporan'] = $this->laporan->getlaporan($nopeg);

        $data['title'] = 'Laporan';
        $this->load->view('templates/pjlp/ppsu/pjlp_header', $data);
        $this->load->view('templates/pjlp/ppsu/pjlp_sidebar', $data);
        $this->load->view('templates/pjlp/ppsu/pjlp_topbar', $data);
        $this->load->view('pjlp/ppsu/laporan');
        $this->load->view('templates/pjlp/ppsu/pjlp_footer');
    }

    public function tambahlaporan()
    {
        $this->form_validation->set_rules('uraian', 'uraian', 'required', [
            'required' => 'wajib diisi'
        ]);

        $this->form_validation->set_rules('lokasi', 'lokasi', 'required', [
            'required' => 'wajib diisi'
        ]);


        if ($this->form_validation->run() == false) {
            $data['user'] = $this->db->get_where('users', ['nopeg' =>
            $this->session->userdata('nopeg')])->row_array();

            $data['title'] = 'Tambah Laporan';
            $this->load->view('templates/pjlp/ppsu/pjlp_header', $data);
            $this->load->view('pjlp/ppsu/tambahlaporan', $data);
            $this->load->view('templates/pjlp/ppsu/pjlp_footer');
        } else {
            $config['upload_path']          = './assets/img/laporan/';
            $config['allowed_types']        = 'gif|jpg|png|jpeg';
            $config['max_size']             = 1024;

            $this->load->library('upload', $config);

            $image = $_FILES['image']['name'];
            if (!$this->upload->do_upload('image')) {
                $error = $this->upload->display_errors('foto gagal upload');
                $this->session->set_flashdata('massage', '<div class="alert alert-danger" role="alert">' . $error . '</div>');
                redirect('ppsu/tambahlaporan');
            } else {
                $nopeg = htmlspecialchars($this->input->post('nopeg', true));
                $tgl = htmlspecialchars($this->input->post('tgl', true));
                $sumber = htmlspecialchars($this->input->post('sumber', true));
                $uraian = htmlspecialchars($this->input->post('uraian', true));
                $kondisi = htmlspecialchars($this->input->post('kondisi', true));
                $lokasi = htmlspecialchars($this->input->post('lokasi', true));
                $progress = htmlspecialchars($this->input->post('progress', true));
                $image = $this->upload->data('file_name');

                $data = array(
                    'nopeg' => $nopeg,
                    'tgl' => $tgl,
                    'sumber' => $sumber,
                    'uraian' => $uraian,
                    'kondisi' => $kondisi,
                    'lokasi' => $lokasi,
                    'progress' => $progress,
                    'image' => $image,
                );

                $this->db->insert('laporan', $data);
                $this->session->set_flashdata('massage', '<div class="alert alert-success" role="alert"> Laporan berhasil ditambahkan </div>');
                redirect('ppsu/tambahlaporan');
            }
        }
    }


    public function deletelaporan($id)
    {
        $this->db->query("DELETE FROM laporan WHERE id_laporan = $id");
        $this->session->set_flashdata('pesan_hapuslaporan', '<div class="alert alert-danger" role="alert">Satu laporan telah dihapus</div>');
        redirect('ppsu/laporan');
    }

    // public function jadwal()
    // {
    //     $data['user'] = $this->db->get_where('users', ['nopeg' =>
    //     $this->session->userdata('nopeg')])->row_array();

    //     $data['title'] = 'Jadwal';
    //     $this->load->view('templates/pjlp/pjlp_header', $data);
    //     $this->load->view('templates/pjlp/pjlp_sidebar', $data);
    //     $this->load->view('templates/pjlp/pjlp_topbar', $data);
    //     $this->load->view('pjlp/jadwal');
    //     $this->load->view('templates/pjlp/pjlp_footer');
    // }

    // public function cuti()
    // {
    //     $data['user'] = $this->db->get_where('users', ['nopeg' =>
    //     $this->session->userdata('nopeg')])->row_array();

    //     $data['title'] = 'Cuti';
    //     $this->load->view('templates/pjlp/pjlp_header', $data);
    //     $this->load->view('templates/pjlp/pjlp_sidebar', $data);
    //     $this->load->view('templates/pjlp/pjlp_topbar', $data);
    //     $this->load->view('pjlp/cuti');
    //     $this->load->view('templates/pjlp/pjlp_footer');
    // }

    // public function pengajuancuti()
    // {
    //     $data['user'] = $this->db->get_where('users', ['nopeg' =>
    //     $this->session->userdata('nopeg')])->row_array();

    //     $data['title'] = 'Pengajuan Cuti';
    //     $this->load->view('templates/pjlp/pjlp_header', $data);
    //     $this->load->view('templates/pjlp/pjlp_sidebar', $data);
    //     $this->load->view('templates/pjlp/pjlp_topbar', $data);
    //     $this->load->view('pjlp/pengajuancuti');
    //     $this->load->view('templates/pjlp/pjlp_footer');
    // }
}
