<?php


class Flash_message
{
    protected $ci;

    public function __construct()
    {
        $this->ci = &get_instance();
    }

    public function success($method, $url)
    {
        $this->ci->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <strong>Berhasil !!</strong> Data Berhasil di ' . $method . ' !!
            </div>');
        redirect($url, 'refresh');
    }

    public function failed($message, $url)
    {
        $this->ci->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <strong>Gagal !!</strong> ' . $message . ' !!
            </div>');
        redirect($url, 'refresh');
    }
}
