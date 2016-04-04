<?php

    if (!defined('PATH_SYSTEM')) die('Bad Requested!');

    class Upload_Library {

        public function __construct()
        {
            echo '<h3>Class upload libary được khởi tạo</h3>';
        }

        public function upload() {
            echo '<h3>Method Upload được gọi tới</h3>';
        }
}

?>