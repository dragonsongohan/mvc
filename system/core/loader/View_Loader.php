<?php
    class View_Loader {
        //Biến này lưu trữ các view đã load
        private $__content = array();

        /*
         * Load view
         * @param string
         * @param array
         * Hàm load view, tham số truyền vào là tên của view và dữ liệu truyền qua view
         */
        public function load($view, $data = array()) {
            //Chuyển mảng dữ liệu thành từng biến
            extract($data);

            //Chuyển nội dung view thành biến thay vì in ra bằng cách dùng ab_start()
            //Bởi vì khi ra require file view vào, chứa toàn html nên ta phải chú ý, không để nó hiện ra luôn
            //Không để hiện ra luôn bằng cách ra lưu hết dữ liệu vào trong biến $__content
            ob_start();
            require_once PATH_APPLICATION . '/view/' . $view . '.php';
            $content = ob_get_contents();
            ob_end_clean();

            //Gán nội dung vào danh sách view đã load
            $this->__content = $content;
        }

        /*
         * Show view
         * Hàm sẽ hiển thị toàn bộ view đã load, được dùng ở controller
         */
        public function show() {
            echo $this->__content;
        }
    }
?>