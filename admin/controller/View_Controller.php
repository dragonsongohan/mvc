<?php
    if ( ! defined('PATH_SYSTEM')) die ('Bad requested!');

    class View_Controller extends Controller {
        public function indexAction() {
            $this->view->load('view');
            $this->view->show();
        }
    }
?>