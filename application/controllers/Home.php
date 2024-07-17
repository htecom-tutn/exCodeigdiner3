<?php

/**
 * Class News
 * @property News_model $news_model The News model
 * @property CI_Form_validation $form_validation The form validation lib
 * @property CI_Input $input The input lib
 */
class Home extends CI_Controller {

    public function __construct()
    {
        parent::__construct();      
    }

    public function index()
    {        
        $this->load->view('home/index');
    }  
    

}