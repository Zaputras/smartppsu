<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
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

        $data['title'] = 'Dashboard';
        $this->load->view('templates/admin/admin_header', $data);
        $this->load->view('templates/admin/admin_sidebar', $data);
        $this->load->view('templates/admin/admin_topbar', $data);
        $this->load->view('admin/index');
        $this->load->view('templates/admin/admin_footer');
    }

    public function profile()
    {
        $data['user'] = $this->db->get_where('users', ['nopeg' =>
        $this->session->userdata('nopeg')])->row_array();

        $data['title'] = 'Profile';
        $this->load->view('templates/admin/admin_header', $data);
        $this->load->view('templates/admin/admin_sidebar', $data);
        $this->load->view('templates/admin/admin_topbar', $data);
        $this->load->view('admin/profile');
        $this->load->view('templates/admin/admin_footer');
    }

    public function memberpptk()
    {
        $data['user'] = $this->db->get_where('users', ['nopeg' =>
        $this->session->userdata('nopeg')])->row_array();

        $userrole = 2;
        $data['userPegawai'] = $this->user->getUserMember($userrole);

        $data['title'] = 'User PPTK';
        $this->load->view('templates/admin/admin_header', $data);
        $this->load->view('templates/admin/admin_sidebar', $data);
        $this->load->view('templates/admin/admin_topbar', $data);
        $this->load->view('admin/memberpptk');
        $this->load->view('templates/admin/admin_footer');
    }

    public function memberpjlp()
    {
        $data['user'] = $this->db->get_where('users', ['nopeg' =>
        $this->session->userdata('nopeg')])->row_array();

        // menampilkan array hasil join
        $userrole = 4;
        $data['userPegawai'] = $this->user->getUserMember($userrole);

        $data['title'] = 'User PJLP';
        $this->load->view('templates/admin/admin_header', $data);
        $this->load->view('templates/admin/admin_sidebar', $data);
        $this->load->view('templates/admin/admin_topbar', $data);
        $this->load->view('admin/memberpjlp');
        $this->load->view('templates/admin/admin_footer');
    }

    public function daftarakun()
    {
        $this->form_validation->set_rules('nopeg', 'nopeg', 'required|trim|is_unique[users.nopeg]|exact_length[6]|numeric', [
            'required' => 'wajib diisi',
            'is_unique' => 'nomor pegawai sudah terdaftar',
            'numeric' => 'nomor pegawai harus berupa angka',
            'exact_length' => 'nomor pegawai harus berisi 6 digit'
        ]);

        $this->form_validation->set_rules('nama', 'nama', 'required|trim', [
            'required' => 'wajib diisi'
        ]);

        $this->form_validation->set_rules('jabatan', 'jabatan', 'required|trim', [
            'required' => 'wajib diisi'
        ]);

        $this->form_validation->set_rules('tempat_lahir', 'tempat_lahir', 'required|trim', [
            'required' => 'wajib diisi'
        ]);

        $this->form_validation->set_rules('tgl_lahir', 'tgl_lahir', 'required|trim', [
            'required' => 'wajib diisi'
        ]);

        $this->form_validation->set_rules('nik', 'nik', 'required|trim|exact_length[16]|numeric', [
            'required' => 'wajib diisi',
            'numeric' => 'nik harus berupa angka',
            'exact_length' => 'nik harus berisi 16 digit'
        ]);

        $this->form_validation->set_rules('jk', 'jk', 'required|trim', [
            'required' => 'wajib diisi'
        ]);

        $this->form_validation->set_rules('alamat', 'alamat', 'required|trim', [
            'required' => 'wajib diisi',
        ]);

        $this->form_validation->set_rules('telp', 'telp', 'required|trim', [
            'required' => 'wajib diisi',
        ]);

        $this->form_validation->set_rules('email', 'email', 'required|is_unique[users.email]|trim|valid_email', [
            'required' => 'wajib diisi',
            'is_unique' => 'email sudah terdaftar',
        ]);

        $this->form_validation->set_rules('password1', 'password', 'required|trim|min_length[5]|matches[password2]', [
            'required' => 'wajib diisi',
            'matches' => 'password tidak sama',
            'min_length' => 'password terlalu singkat'
        ]);

        $this->form_validation->set_rules('password2', 'password', 'required|trim|matches[password1]');

        if ($this->form_validation->run() == FALSE) {
            $data['title'] = 'Registrasi';
            $this->load->view('templates/auth_header', $data);
            $this->load->view('admin/daftarakun');
            $this->load->view('templates/auth_footer');
        } else {
            $data = [
                'nopeg' => $this->input->post('nopeg'),
                'nama' => $this->input->post('nama'),
                'tempat_lahir' => $this->input->post('tempat_lahir'),
                'tgl_lahir' => $this->input->post('tgl_lahir'),
                'nik' => $this->input->post('nik'),
                'jk' => $this->input->post('jk'),
                'alamat' => $this->input->post('alamat'),
                'telp' => $this->input->post('telp'),
                'image' => 'default.jpg',
                'email' => $this->input->post('email'),
                'password' => $this->input->post('password1'),
                'role_id' => $this->input->post('role_id'),
                'date_created' => time(),
                'is_active' => 1
            ];
            $this->db->insert('users', $data);
        }
    }

    public function laporan()
    {
        $data['user'] = $this->db->get_where('users', ['nopeg' =>
        $this->session->userdata('nopeg')])->row_array();

        $dari       = $this->input->post('dari');
        $sampai     = $this->input->post('sampai');
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $data['title'] = 'Laporan';
            $this->load->view('templates/admin/admin_header', $data);
            $this->load->view('templates/admin/admin_sidebar', $data);
            $this->load->view('templates/admin/admin_topbar', $data);
            $this->load->view('admin/filter_laporan');
            $this->load->view('templates/admin/admin_footer');
        } else {
            // $data['laporan'] = $this->db->query("SELECT * FROM laporan WHERE date(tgl) >= '$dari' AND date(tgl) <= '$sampai'")->result();

            $data['laporan'] = $this->laporan->getBytanggal($dari, $sampai);
            $data['title'] = 'Laporan';
            $this->load->view('templates/admin/admin_header', $data);
            $this->load->view('templates/admin/admin_sidebar', $data);
            $this->load->view('templates/admin/admin_topbar', $data);
            $this->load->view('admin/laporan', $data);
            $this->load->view('templates/admin/admin_footer');
        }
    }

    public function _rules()
    {
        $this->form_validation->set_rules('dari', 'Dari Tanggal', 'required');
        $this->form_validation->set_rules('sampai', 'Sampai Tanggal', 'required');
    }

    public function cetaklaporan()
    {
        $data['laporan'] = $this->laporan->getFulllaporan();
        $data['title'] = 'Cetak Laporan';
        $this->load->view('templates/admin/admin_header', $data);
        $this->load->view('admin/cetaklaporan', $data);
    }

    public function jadwal()
    {
        $data['user'] = $this->db->get_where('users', ['nopeg' =>
        $this->session->userdata('nopeg')])->row_array();

        $data['title'] = 'Jadwal';
        $this->load->view('templates/admin/admin_header', $data);
        $this->load->view('templates/admin/admin_sidebar', $data);
        $this->load->view('templates/admin/admin_topbar', $data);
        $this->load->view('admin/jadwal');
        $this->load->view('templates/admin/admin_footer');
    }

    public function cuti()
    {
        $data['user'] = $this->db->get_where('users', ['nopeg' =>
        $this->session->userdata('nopeg')])->row_array();

        $data['title'] = 'Rekapitulasi Cuti';
        $this->load->view('templates/admin/admin_header', $data);
        $this->load->view('templates/admin/admin_sidebar', $data);
        $this->load->view('templates/admin/admin_topbar', $data);
        $this->load->view('admin/rekapcuti');
        $this->load->view('templates/admin/admin_footer');
    }

    public function deletepptk($id)
    {
        $this->db->query("DELETE FROM users WHERE nopeg = $id");
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"> Akun telah di hapus </div>');
        redirect('admin/memberpptk');
    }

    public function deletepjlp($id)
    {
        $this->db->query("DELETE FROM users WHERE nopeg = $id");
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"> Akun telah di hapus </div>');
        redirect('admin/memberpjlp');
    }

    public function berita()
    {
        $data['user'] = $this->db->get_where('users', ['nopeg' =>
        $this->session->userdata('nopeg')])->row_array();

        $data['berita'] = $this->db->get('berita')->result_array();

        $data['title'] = 'Pengumuman Informasi';
        $this->load->view('templates/admin/admin_header', $data);
        $this->load->view('templates/admin/admin_sidebar', $data);
        $this->load->view('templates/admin/admin_topbar', $data);
        $this->load->view('admin/berita', $data);
        $this->load->view('templates/admin/admin_footer', $data);
    }

    public function tambahberita()
    {
        $this->form_validation->set_rules('tanggal', 'tanggal', 'required');
        $this->form_validation->set_rules('isi_berita', 'isi_berita', 'required');

        if ($this->form_validation->run() == false) {
            $data['title'] = 'Tambah Pengumuman';
            $this->load->view('templates/auth_header', $data);
            $this->load->view('admin/tambah_berita');
            $this->load->view('templates/auth_footer');
        } else {

            $data = array(
                'tanggal' => $this->input->post('tanggal'),
                'isi_berita' => $this->input->post('isi_berita')
            );

            $this->db->insert('berita', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            laporan berhasil ditambahkan! </div>');
            redirect('admin/berita');
        }
    }
}
