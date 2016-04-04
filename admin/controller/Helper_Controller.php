<?php
    if ( ! defined('PATH_SYSTEM')) die ('Bad requested!');

    class Helper_Controller extends Controller {
        public function indexAction() {
            $this->helper->load('string');
            echo string_to_int("DUy truong");
        }
    }
?>