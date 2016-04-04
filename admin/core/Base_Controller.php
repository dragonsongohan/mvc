<?php
    if ( ! defined('PATH_SYSTEM')) die ('Bad requested!');

    class Base_Controller extends Controller {
            public function __construct() {
                parent::__construct();
            }

            public function load_header() {

            }

            public function load_footer() {

            }

            public function __destruct() {
                $this->view->show();
            }
    }
?>