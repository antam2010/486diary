<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    public function login(string $uid, string $pwd)
    {
        var_dump($uid, $pwd);
    }
}
