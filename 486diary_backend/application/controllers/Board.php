<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Board extends CI_Controller {

    public function __construct()
    {
        parent::__construct();

        $this->load->model('Board_m','board_m');
    }

    public function list()
    {
        $res = [];
        $list = $this->board_m->get_list();
        $res['list'] = $list;
        $res['err'] = 0;
        echo json_encode($res);
    }

    public function ctgList() {
        $list = $this->config->item('board_category');
        $res['list'] = $list;
        $res['err'] = 0;
        echo json_encode($res);
    }

}
