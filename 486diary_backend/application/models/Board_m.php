<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Board_m extends CI_Model {

    public function __construct()
    {
        parent::__construct();
    }

    public function get_list()
    {
        $sql = "
        SELECT
            b.board_idx,
            b.board_category,
            b.board_title,
            b.board_wdate,
            b.board_level,
            m.member_nickname
        FROM
            dh_board AS b
                LEFT JOIN
            dh_member AS m ON b.member_idx = m.member_idx";
        $result = $this->db->query($sql)->result_array();

        return $result;
    }


}
