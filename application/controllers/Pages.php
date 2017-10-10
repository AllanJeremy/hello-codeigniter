<?php

class Pages extends CI_Controller
{
    public function view($page='home')
    {
        if(!file_exists(APPPATH."views/pages/$page.php"))
        {
            show_404();
        }

        $data['page_title'] = $page;
        $data['my_header_title'] = "Some header title by AJ";

        $this->load->view("templates/header",$data);
        $this->load->view("pages/home",$data);
        $this->load->view("templates/footer",$data);
    }
}