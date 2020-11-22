<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SettingFile extends CI_Controller {
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

    public function VoyageInfo(){
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

        $this->data['title'] = "THÔNG TIN CHUYẾN TÀU";
        $this->load->view('header', $this->data);   
        $this->load->view('setting_file/voyage_info', $this->data);
        $this->load->view('footer');
    }

    public function ImExportContainers(){
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

        $this->data['title'] = "NHẬP/ XUẤT CONTAINERS";
        $this->load->view('header', $this->data);   
        $this->load->view('setting_file/imexport_containers', $this->data);
        $this->load->view('footer');
    }

    public function Statistic(){
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

        $this->data['title'] = "THỐNG KÊ";
        $this->load->view('header', $this->data);   
        $this->load->view('setting_file/statistic', $this->data);
        $this->load->view('footer');
    }

    public function InitializeSalan(){
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

        $this->data['title'] = "KHAI BÁO SÀ LAN";
        $this->load->view('header', $this->data);   
        $this->load->view('setting_file/initialize_salan', $this->data);
        $this->load->view('footer');
    }

    public function FixedElements(){
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

        $this->data['title'] = "THÀNH PHẦN CỐ ĐỊNH";
        $this->load->view('header', $this->data);   
        $this->load->view('setting_file/fixed_elements', $this->data);
        $this->load->view('footer');
    }
}	