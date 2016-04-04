<?php
    if (!defined('PATH_SYSTEM')) die ('Bad Requested!');

    class Libary_Loader {
        /*
         * Load libary
         * @param string
         * @param array
         * Hàm library, tham số truyền vào là tên libary và danh sách các biến trong hàm khởi tạo (nếu có)
         */
        public function load($library, $agrs = array()) {
            // Nếu thư viện chưa được load thì thực hiện load
            if ( empty($this->{$library}) ) {
                // Chuyển chữ hoa đầu và thêm hậu tố _Library
                $class = ucfirst($library) . '_Library';
                require_once(PATH_SYSTEM . '/library/' . $class . '.php');

                /*
                 * Dòng lệnh này sẽ gán cho class Library_Loader 1 thuộc tính $library truyền vào
                 * 1 thuộc tính chưa được khởi tạo hay định nghĩa, sẽ tự động được tạo
                 * 
                 */
                $this->{$library} = new $class($agrs);
            }
        }
    }
?>