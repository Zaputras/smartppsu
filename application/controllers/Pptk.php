<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pptk extends CI_Controller
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
        $this->load->view('templates/pptk/pptk_header', $data);
        $this->load->view('templates/pptk/pptk_sidebar', $data);
        $this->load->view('templates/pptk/pptk_topbar', $data);
        $this->load->view('pptk/index');
        $this->load->view('templates/pptk/pptk_footer', $data);
    }

    public function profile()
    {
        $data['user'] = $this->db->get_where('users', ['nopeg' =>
        $this->session->userdata('nopeg')])->row_array();

        $data['title'] = 'Dashboard';
        $this->load->view('templates/pptk/pptk_header', $data);
        $this->load->view('templates/pptk/pptk_sidebar', $data);
        $this->load->view('templates/pptk/pptk_topbar', $data);
        $this->load->view('pptk/profile');
        $this->load->view('templates/pptk/pptk_footer', $data);
    }

    public function rekaplaporan()
    {
        $data['user'] = $this->db->get_where('users', ['nopeg' =>
        $this->session->userdata('nopeg')])->row_array();
        $dari       = $this->input->post('dari');
        $sampai     = $this->input->post('sampai');
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $data['title'] = 'Dashboard';
            $this->load->view('templates/pptk/pptk_header', $data);
            $this->load->view('templates/pptk/pptk_sidebar', $data);
            $this->load->view('templates/pptk/pptk_topbar', $data);
            $this->load->view('pptk/filter_laporan');
            $this->load->view('templates/pptk/pptk_footer', $data);
        } else {
            $data['laporan'] = $this->laporan->getBytanggalnama($dari, $sampai);
            $data['title'] = 'Dashboard';
            $this->load->view('templates/pptk/pptk_header', $data);
            $this->load->view('templates/pptk/pptk_sidebar', $data);
            $this->load->view('templates/pptk/pptk_topbar', $data);
            $this->load->view('pptk/rekaplaporan', $data);
            $this->load->view('templates/pptk/pptk_footer', $data);
        }
    }

    public function _rules()
    {
        $this->form_validation->set_rules('dari', 'Dari Tanggal', 'required');
        $this->form_validation->set_rules('sampai', 'Sampai Tanggal', 'required');
    }

    public function verifikasicuti()
    {
        $data['user'] = $this->db->get_where('users', ['nopeg' =>
        $this->session->userdata('nopeg')])->row_array();

        $data['title'] = 'Dashboard';
        $this->load->view('templates/pptk/pptk_header', $data);
        $this->load->view('templates/pptk/pptk_sidebar', $data);
        $this->load->view('templates/pptk/pptk_topbar', $data);
        $this->load->view('pptk/verifikasicuti');
        $this->load->view('templates/pptk/pptk_footer', $data);
    }
}
