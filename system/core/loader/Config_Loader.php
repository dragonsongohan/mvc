<!-- Đây là file dùng để load các file config của module ở trong thư mục /admin/config/x.x.x.confix.php -->
<?php
    class Config_Loader {

        //Danh sách config
        protected $config = array();

        /*
         * Load helper
         * @param string
         * hàm load helper, thm số truyền vào là tên của helper
         * Hàm load 1 config nào đó
         */
        public function load($config) {
            if (file_exists(PATH_APPLICATION . '/config/' . $config . '.php')) {
                $config = include_once PATH_APPLICATION . '/config/' . $config . '.php';
                if (!empty($config)) {
                    foreach ($config as $key => $item) {
                        $this->config[$key] = $item;
                    }
                }
                return true;
            }
            return false;
        }

        /*
         * Hàm get config item, tham số truyền vào là tên của item và tham số mặc định
         */
        public function item($key, $default = ' ') {
            return isset($this->config[$key]) ? $this->config[$key] : $default;
        }

        /*
         * Hàm set config item, để thiết lập lại giá trị item
         */
        public function set_item($key, $val) {
            $this->config[$key] = $val;
        }
    }
?>