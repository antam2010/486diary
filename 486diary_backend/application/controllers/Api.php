<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Api extends CI_Controller {

    public function login()
    {
        $res = [];
        $data = $this->input->post('params',true);
        $uid = $data["uid"];
        $pwd = $data["pwd"];

        $res["err"] = 0;
        $res["list"] = ['a' => 'b'];

        echo json_encode($res);

    }
}
