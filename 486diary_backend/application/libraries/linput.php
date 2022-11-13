<?php
defined('BASEPATH') OR exit('No direct script access allowed');

header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Headers: X-API-KEY, Origin, X-Requested-With, Content-Type, AcceptAccess-Control-Request-Method");
header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");
header("Content-type:text/html;charset=utf-8");
/**
 * input Library
 * 입력에대한 것을 도와줌
 */
class Linput {

    private $key = 'antam';

    public function __construct()
    {

    }
    /**
     * 암호화
     *
     * @param string $v
     * @return void
     */
    public function encrypt(string $v)
    {
        return openssl_encrypt($v, 'aes-256-cbc', $this->key, false, str_repeat(chr(0), 16));
    }
    /**
     * 암호디코드
     *
     * @param string $v
     * @return void
     */
    public function decrypt(string $v)
    {
        return openssl_decrypt($v, 'aes-256-cbc', $this->key, false, str_repeat(chr(0), 16));
    }
}