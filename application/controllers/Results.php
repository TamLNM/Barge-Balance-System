<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Results extends CI_Controller {
	public $data;
    private $ceh;

    function __construct() {
        parent::__construct();

        if(empty($this->session->userdata('UserID'))) {
            redirect(md5('user') . '/' . md5('login'));
        }

        $this->load->helper(array('form','url'));
        $this->load->model("user_model", "mdlUsers");
        $this->load->model("Setting_file_model", "mdlSetting");
        $this->data['menus'] = $this->menu->getMenu();
        $this->data['parentMenuList'] = $this->menu->getParentMenu();

        $this->ceh = $this->load->database('mssql', TRUE);
    }

    public function _remap($method) {
        $methods = get_class_methods($this);

        $skip = array("_remap", "__construct", "get_instance");
        $a_methods = array();

        if(($method == 'index')) {
            $method = md5('index');
        }

        foreach($methods as $smethod) {
            if (!in_array($smethod, $skip)) {
                $a_methods[] = md5($smethod);
                if($method == md5($smethod)) {
                    $this->$smethod();
                    break;
                }
            }
        }

        if(!in_array($method, $a_methods)) {
            show_404();
        }
    }

    public function OverallDiagram(){
        /*
    	$access = $this->user->access('VoyageInfo');
        if($access === false) {
            show_404();
        }

        if(strlen($access) > 5) {
            $this->data['deny'] = $access;
            echo json_encode($this->data);
            exit;
        }
        */

        $this->data['title'] = "SƠ ĐỒ TỔNG THỂ";
        $this->load->view('header', $this->data);   
        $this->load->view('results/overall_diagram', $this->data);
        $this->load->view('footer');
    }
}

