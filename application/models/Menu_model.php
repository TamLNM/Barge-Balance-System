<?php
defined('BASEPATH') OR exit('');

class menu_model extends CI_Model
{
    private $ceh;
    function __construct() {
        parent::__construct();

        $this->load->helper(array('form','url'));
        $this->load->library(array('session'));
        $this->ceh = $this->load->database('mssql', TRUE);
    }

    public function getMenu() {
        $stmt = $this->ceh->where('ParentID IS NULL')
                            ->order_by('OrderBy', 'ASC')
                            ->get('SYS_MENUS');

        $results = $stmt->result_array();
        $menu_r = array();

        foreach($results as $result) {
            $menu_r[$result['MenuID']]['MenuID'] = $result['MenuID'];
            $menu_r[$result['MenuID']]['MenuName'] = $result['MenuName'];
            $menu_r[$result['MenuID']]['MenuID'] = $result['MenuID'];
            $menu_r[$result['MenuID']]['MenuIcon'] = $result['MenuIcon'];
            $submenu = $this->getSubMenu($result['rowguid']);
            $menu_r[$result['MenuID']]['submenu'] = $submenu;
            foreach ($submenu as $val) {
                $subsubmenu = $this->getSubMenu($val['MenuID']);
                $menu_r[$result['MenuID']]['submenu'][$val['MenuID']]['MenuID'] = $val['MenuID'];
                $menu_r[$result['MenuID']]['submenu'][$val['MenuID']]['MenuName'] = $val['MenuName'];
                $menu_r[$result['MenuID']]['submenu'][$val['MenuID']]['MenuID'] = $val['MenuID'];
                $menu_r[$result['MenuID']]['submenu'][$val['MenuID']]['MenuIcon'] = $val['MenuIcon'];
                $menu_r[$result['MenuID']]['submenu'][$val['MenuID']]['subsubmenu'] = $subsubmenu;
            }
        }
        return $menu_r;
    }

    public function getParentMenu() {
        $stmt = $this->ceh->where('ParentID IS NULL')
                            ->order_by('OrderBy', 'ASC')
                            ->get('SYS_MENUS');
        return $stmt->result_array();
    }

    public function getMenuID($MenuID) {
        $stmt = $this->ceh->where('MenuID', $MenuID)
                            ->order_by('OrderBy', 'ASC')
                            ->get('SYS_MENUS');

        $results = $stmt->result_array();
        $menu_r = array();

        foreach($results as $result) {
            $menu_r[$result['MenuID']]['MenuID'] = $result['MenuID'];
            $menu_r[$result['MenuID']]['MenuID'] = $result['MenuID'];
            $menu_r[$result['MenuID']]['MenuName'] = $result['MenuName'];
            $menu_r[$result['MenuID']]['MenuIcon'] = $result['MenuIcon'];
            $menu_r[$result['MenuID']]['submenu'] = $this->getSubMenu($result['MenuID']);
        }
        return $menu_r;
    }

    public function getSubMenu($pMenu) {
        $submenu_r = array();
        if ($this->session->userdata('GroupID') == 'GroupAdmin' || $this->session->userdata('GroupID') == 'GroupVesselOwner')
        {
            $this->ceh->get('SYS_MENUS');

            $stmt = $this->ceh->where('ParentID', $pMenu)
                                ->order_by('OrderBy', 'ASC')
                                ->get('SYS_MENUS');

            $menus = $stmt->result_array();
        } else {
            $where = array(
                'p.GroupID' => $this->session->userdata('GroupID')
            );
            $this->ceh->select('count(*) AS c');
            $this->ceh->join('SYS_PERMISSION AS p', 'p.MenuID = m.MenuID', 'inner');
            $this->ceh->where($where);
            $stmt = $this->ceh->get('SYS_MENUS AS m');

            $mnu = $stmt->row_array();
            if ($mnu['c'] > 0) {
                $where = array(
                    'p.GroupID'  => $this->session->userdata('GroupID'),
                    'm.ParentID' => $pMenu
                );
                $this->ceh->select('m.*');
                $this->ceh->join('SYS_PERMISSION AS p', 'p.MenuID = m.MenuID', 'inner');
                $this->ceh->where($where);
                $this->ceh->order_by('m.OrderBy', 'ASC');
                $stmt = $this->ceh->get('SYS_MENUS AS m');

            } else {
                $where = array(
                    'm.ParentID' => $pMenu,
                    'p.GroupID'    => $this->session->userdata('GroupID')
                );
                $this->ceh->select('m.*');
                $this->ceh->join('SYS_PERMISSION AS p', 'p.MenuID = m.MenuID', 'inner');
                $this->ceh->where($where);
                $this->ceh->order_by('m.OrderBy', 'ASC');
                $stmt = $this->ceh->get('SYS_MENUS AS m');
            }
            $menus = $stmt->result_array();
        }

        foreach($menus as $menu) {
            $submenu_r[$menu['MenuID']]['MenuID'] = $menu['MenuID'];
            $submenu_r[$menu['MenuID']]['MenuName'] = $menu['MenuName'];
            $submenu_r[$menu['MenuID']]['MenuID'] = $menu['MenuID'];
            $submenu_r[$menu['MenuID']]['MenuIcon'] = $menu['MenuIcon'];
        }
        return $submenu_r;
    }

    public function getAllMenus() {
        $stmt = $this->ceh->where('ParentID IS NULL')
                            ->order_by('OrderBy', 'ASC')
                            ->get('SYS_MENUS');

        $results = $stmt->result_array();
        $menu_r = array();

        foreach($results as $result) {
            $menu_r[$result['MenuID']]['MenuID'] = $result['MenuID'];
            $menu_r[$result['MenuID']]['MenuName'] = $result['MenuName'];
            $menu_r[$result['MenuID']]['MenuID'] = $result['MenuID'];
            $menu_r[$result['MenuID']]['submenu'] = $this->getSubMenu($result['MenuID']);
        }
        return $menu_r;
    }

    public function getAllSubs($p_id) {

        $submenu_r = array();

        $this->ceh->get('SYS_MENUS');

        $stmt = $this->ceh->where('ParentID', $p_id)
                            ->order_by('OrderBy', 'ASC')
                            ->get('SYS_MENUS');

        $menus = $stmt->result_array();

        foreach($menus as $menu) {
            $submenu_r[$menu['MenuID']]['MenuID'] = $menu['MenuID'];
            $submenu_r[$menu['MenuID']]['MenuID'] = $menu['MenuID'];
            $submenu_r[$menu['MenuID']]['MenuName'] = $menu['MenuName'];
            $submenu_r[$menu['MenuID']]['MenuIcon'] = $menu['MenuIcon'];
        }
        return $submenu_r;
    }
}