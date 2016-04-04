<!-- Chứa các hàm bổ trợ hệ thống-->
<!-- Chứa các hàm riêng xử lý của hệ thống -->
<?php
    if (!defined('PATH_SYSTEM')) die('Bad requested');

    /**
    * Hàm chạy ứng dụng
    */
    function load() {
        //Lấy phần config khởi tạo ban đầu
        $config = include_once PATH_APPLICATION . '/config/init.php';

        //Nếu không truyền vào controller thì lấy controller mặc định
        $controller = empty($_GET['c']) ? $config['default_controller'] : $_GET['c'];

        //Nếu không truyền vào action thì lấy action mặc định
        $action = empty($_GET['a']) ? $config['default_action'] : $_GET['a'];

        //Chuyển đổi tên controller vì nó là đinh dạng {Name}_Controller
        $controller = ucfirst(strtolower($controller)) . '_Controller';

        //Chuyển đổi tên action vì nó là định dạng {Action}Action
        $action = strtolower($action) . 'Action';
        //Kiểm tra xem file controller có tồn tại hay không
        if (!file_exists(PATH_APPLICATION . '/controller/' . $controller . '.php')) {
            die ('Controller không tồn tại');
        }

        /**
         * Include controller chính để các controller con nó kế thừa,
         * ví dụ như bởi vì lớp News_Controller kế thừa lớp Controller
         * nên ta sẽ phải include file Controller này vào thì mới chạy được
         * Ta có thể include trực tiếp từ lớp con kế thừa nó như include trong News_Controller,
         * nhưng như vậy lớp nào cũng phải kế thừa nên ta chỉ include 1 lần thôi.
         */
        include_once PATH_SYSTEM . '/core/Controller.php';

        if (file_exists(PATH_APPLICATION . '/core/Base_Controller.php')) {
            include_once PATH_APPLICATION . '/core/Base_Controller.php';
        }

        //Gọi file controller
        require_once (PATH_APPLICATION . '/controller/' . $controller . '.php');

        //Kiểm tra class trong controller có tồn tại hay không
        if (!class_exists($controller)) {
            die ('Class không tồn tại');
        }

        //Khởi tạo controller
        $controllerObject = new $controller;

        //Kiểm tra action có tồn tại hay không
        if (!method_exists($controllerObject, $action)) {
            die ("Action không tồn tại");
        }

        //Gọi tới action, chạy ứng dụng
        $controllerObject->{$action}();
    }
?>