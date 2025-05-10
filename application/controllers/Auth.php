<?php
defined('BASEPATH') or exit('No direct script access allowed');
#[\AllowDynamicProperties]
class Auth extends CI_Controller
{

    public function index()
    {
        $data['title'] = 'Login Smart PJLP';
        $this->load->view('templates/auth_header', $data);
        $this->load->view('auth/login');
        $this->load->view('templates/auth_footer');
    }

    public function login_pjlp()
    {
        $this->form_validation->set_rules('nopeg', 'nopeg', 'trim|required', [
            'required' => 'wajib diisi'
        ]);
        $this->form_validation->set_rules('role_id', 'role_id', 'trim|required', [
            'required' => 'wajib diisi'
        ]);
        $this->form_validation->set_rules('password', 'password', 'trim|required', [
            'required' => 'wajib diisi'
        ]);

        if ($this->form_validation->run() == false) {
            $data['title'] = 'Login PJLP';
            $this->load->view('templates/auth_header', $data);
            $this->load->view('auth/pjlp', $data);
            $this->load->view('templates/auth_footer');
        } else {
            $this->_loginpjlp();
        }
    }

    private function _loginpjlp()
    {
        $nopeg = $this->input->post('nopeg');
        $password = $this->input->post('password');

        $user = $this->db->get_where('users', ['nopeg' => $nopeg])->row_array();

        // Jika user ada
        if ($user) {

            // dan cek password
            if ($password == $user['password']) {
                $data = [
                    'nopeg' => $user['nopeg'],
                    'role_id' => $user['role_id']
                ];
                $this->session->set_userdata($data);

                // arahkan ke masing-masing jabatan
                if ($user['role_id'] == 4) {
                    redirect('ppsu');
                } elseif ($user['role_id'] == 5) {
                    redirect('rptra');
                } else {
                    $this->session->set_flashdata('massage', '<div class="alert alert-danger" role="alert">
                        bukan user PJLP !!! </div>');
                    redirect('auth');
                }
            } else {
                $this->session->set_flashdata('massage', '<div class="alert alert-danger" role="alert">
                    password salah </div>');
                redirect('auth');
            }
        } else {
            $this->session->set_flashdata('massage', '<div class="alert alert-danger" role="alert">
            user tidak ditemukan !!! </div>');
            redirect('auth');
        }
    }

    public function login_pptk()
    {
        $this->form_validation->set_rules('nopeg', 'nopeg', 'trim|required', [
            'required' => 'wajib diisi'
        ]);
        $this->form_validation->set_rules('role_id', 'role_id', 'trim|required', [
            'required' => 'wajib diisi'
        ]);
        $this->form_validation->set_rules('password', 'password', 'trim|required', [
            'required' => 'wajib diisi'
        ]);

        if ($this->form_validation->run() == false) {
            $data['berita'] = $this->db->get('berita')->result_array();
            $data['title'] = 'Login PPTK';
            $this->load->view('templates/auth_header', $data);
            $this->load->view('auth/pptk');
            $this->load->view('templates/auth_footer');
        } else {
            $this->_loginpptk();
        }
    }

    private function _loginpptk()
    {
        $nopeg = $this->input->post('nopeg');
        $password = $this->input->post('password');

        $user = $this->db->get_where('users', ['nopeg' => $nopeg])->row_array();

        // Jika user ada
        if ($user) {
            // dan jika user sudah aktif
            // if ($user['is_active'] == 1) {
            // dan cek password
            if ($password == $user['password']) {
                $data = [
                    'nopeg' => $user['nopeg'],
                    'role_id' => $user['role_id']
                ];
                $this->session->set_userdata($data);

                // arahkan ke masing-masing jabatan
                if ($user['role_id'] == 2) {
                    redirect('pptk');
                } else {
                    $this->session->set_flashdata('massage', '<div class="alert alert-danger" role="alert">
                        bukan user PPTK !!! </div>');
                    redirect('auth');
                }
            } else {
                $this->session->set_flashdata('massage', '<div class="alert alert-danger" role="alert">
                    password salah </div>');
                redirect('auth');
            }
            // } else {
            //     $this->session->set_flashdata('massage', '<div class="alert alert-danger" role="alert">
            //     user anda belum diaktivasi !!! </div>');
            //     redirect('auth');
            // }
        } else {
            $this->session->set_flashdata('massage', '<div class="alert alert-danger" role="alert">
            user tidak ditemukan !!! </div>');
            redirect('auth');
        }
    }

    public function login_admin()
    {
        $this->form_validation->set_rules('nopeg', 'nopeg', 'trim|required', [
            'required' => 'wajib diisi'
        ]);
        $this->form_validation->set_rules('role_id', 'role_id', 'trim|required', [
            'required' => 'wajib diisi'
        ]);
        $this->form_validation->set_rules('password', 'password', 'trim|required', [
            'required' => 'wajib diisi'
        ]);

        if ($this->form_validation->run() == false) {
            $data['title'] = 'Login Admin';
            $this->load->view('templates/auth_header', $data);
            $this->load->view('auth/admin');
            $this->load->view('templates/auth_footer');
        } else {
            $this->_loginadmin();
        }
    }

    private function _loginadmin()
    {
        $nopeg = $this->input->post('nopeg');
        $password = $this->input->post('password');

        $user = $this->db->get_where('users', ['nopeg' => $nopeg])->row_array();

        // Jika user ada
        if ($user) {
            // dan jika user sudah aktif
            // if ($user['is_active'] == 1) {
            // dan cek password
            if ($password == $user['password']) {
                $data = [
                    'nopeg' => $user['nopeg'],
                    'role_id' => $user['role_id']
                ];
                $this->session->set_userdata($data);

                // arahkan ke masing-masing jabatan
                if ($user['role_id'] == 1) {
                    redirect('admin');
                } else {
                    $this->session->set_flashdata('massage', '<div class="alert alert-danger" role="alert">
                        bukan user Admin !!! </div>');
                    redirect('auth/admin');
                }
            } else {
                $this->session->set_flashdata('massage', '<div class="alert alert-danger" role="alert">
                    password salah </div>');
                redirect('auth/admin');
            }
            // } else {
            //     $this->session->set_flashdata('massage', '<div class="alert alert-danger" role="alert">
            //     user anda belum diaktivasi !!! </div>');
            //     redirect('auth/admin');
            // }
        } else {
            $this->session->set_flashdata('massage', '<div class="alert alert-danger" role="alert">
            user tidak ditemukan !!! </div>');
            redirect('auth');
        }
    }

    public function forgotpassword()
    {
        $data['title'] = 'Forgot Password';
        $this->load->view('templates/auth_header', $data);
        $this->load->view('auth/forgotpassword');
        $this->load->view('templates/auth_footer');
    }

    public function logout()
    {
        $this->session->unset_userdata('nopeg');
        $this->session->unset_userdata('role_id');
        redirect('auth');
    }

    public function about()
    {
        $data['title'] = 'About';
        $this->load->view('templates/auth_header', $data);
        $this->load->view('auth/about', $data);
    }
}
