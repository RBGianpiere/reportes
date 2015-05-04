<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
 * ------------------------------------------------------
 *  Load file GlobalFn.php
 * ------------------------------------------------------
*/
if (file_exists(APPPATH.'core/globalfn.php')): require(APPPATH.'core/globalfn.php'); else: show_error('UPS..'); endif;


class MY_Controller extends CI_Controller {
    public function __construct(){
        parent::__construct();
    }

    public function index(){ $this->load->view('welcome_message'); }

    /**
    * -----------------------------------------------------------------------------------------------
    * @todo : Constructor de Html con formato establecido.
    * -----------------------------------------------------------------------------------------------
    */
    public function Theme($view){
        $data['data']['css']    = isset($this->css) ? $this->css : false;
        $data['data']['csslib'] = isset($this->css_lib) ? $this->css_lib : false;
        $data['data']['js']     = isset($this->js) ? $this->js : false;
        $data['data']['jslib']  = isset($this->js_lib) ? $this->js_lib : false;
        $data['data']['urljs']  = isset($this->urlscript) ? $this->urlscript : false;
        $data['data']['urlcss'] = isset($this->urlstyle) ? $this->urlstyle : false;

        $data['header'] = 'template/header.php';
        $data['menu'] = 'template/menu.php';
        $data['view'] = $view;
        $data['plugins'] = 'template/plugins.php';
        $data['footer'] = 'template/footer.php';
        $this->load->view('template.php',$data);
    }
    
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */