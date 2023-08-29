<?php


class Templates
{
    protected $ci;

    public function __construct()
    {
        $this->ci = &get_instance();
    }

    public function admin($content, $data = Null)
    {
        $this->ci->load->view('templates_admin/v_admin_header');
        $this->ci->load->view('templates_admin/v_admin_sidebar', $data);
        $this->ci->load->view('admin/' . $content, $data);
        $this->ci->load->view('templates_admin/v_admin_footer');
        $this->ci->load->view('templates_admin/v_admin_script', $data);
    }

    public function pelamar($content, $data = Null)
    {
        $this->ci->load->view('templates_pelamar/v_header');
        $this->ci->load->view('templates_pelamar/v_sidebar', $data);
        $this->ci->load->view('pelamar/' . $content, $data);
        $this->ci->load->view('templates_pelamar/v_footer');
        $this->ci->load->view('templates_pelamar/v_script', $data);
    }


    public function login($data = Null)
    {
        $this->ci->load->view('auth/v_login', $data);
    }

    public function login_pelamar($data = Null)
    {
        $this->ci->load->view('auth/v_login_pelamar', $data);
    }

    public function registerasi_penjual($data = Null)
    {
        $this->ci->load->view('penjual/v_registerasi_penjual', $data);
    }
}
