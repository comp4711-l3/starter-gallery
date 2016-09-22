<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class About extends Application
{
    public function index()
    {
        //$this->data['pagebody'] = 'welcome_message';
        //$this->render();
        $this->load->view('about');
    }

}
