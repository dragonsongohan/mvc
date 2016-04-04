<!-- Đây là lớp lưu giữ những thông số mặc định khi chạy chương trình, các module khác có thể thay đổi được -->
<?php
    return array(
        'default_controller' => 'index', //controller mặc định
        'default_action'     => 'index', //action mặc định
        '404_controller'     => 'error', //controller lỗi 404
        '404_action'         => 'index'  //action lỗi 404
    );
?>