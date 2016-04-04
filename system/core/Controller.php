<!-- File controller chính -->
<?php
    if (! defined('PATH_SYSTEM')) die ('Bad requested!');

    class Controller {

        //Đối tượng view
        protected  $view = NULL;

        //Đối tượng model
        protected $model = NULL;

        //Đối tượng libary
        protected $library = NULL;

        //Đối tượng helper
        protected $helper = NULL;

        //Đối tượng config
        protected $config = NULL;

        /**
         * Hàm khởi tạo
         * @desc Load các thư viện cần thiết
         */
        public function __construct($is_controller = true)
        {
            //Loader cho config
            require_once PATH_SYSTEM . '/core/loader/Config_Loader.php';
            $this->config = new Config_Loader();
            $this->config->load('config');

            //Loader library
            require_once PATH_SYSTEM . '/core/loader/Library_Loader.php';
            $this->library = new Libary_Loader();
            //Loader helpder
            require_once PATH_SYSTEM . '/core/loader/TTHelper_Loader.php';
            $this->helper = new TTHelper_Loader();
            //Loader view
            require_once PATH_SYSTEM . '/core/loader/View_Loader.php';
            $this->view = new View_Loader();
        }
    }

?>