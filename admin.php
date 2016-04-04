<?php
    //Đường dẫn tới hệ thống, chính là thư mực admin với thư mục system
    define('PATH_SYSTEM', __DIR__.'/system');
    define('PATH_APPLICATION', __DIR__.'/admin');

    //Lấy ra thông số cấu hình
    require (PATH_SYSTEM . '/config/config.php');

    //Mở file Common.php, file này chứa hàm load chạy hệ thống
    include_once PATH_SYSTEM . '/core/Common.php';
    
    //Chạy hàm load ở Common
    load();
?>