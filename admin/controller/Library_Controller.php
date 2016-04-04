<?php
    if (!defined('PATH_SYSTEM')) die('Bad requested!');

    class Library_Controller extends Controller {
        public function indexAction() {
            //Tạo mới thư viện
            $this->library->load('upload');
            //Gọi tới phương thức upload
            $this->library->upload->upload();
        }
    }
?>