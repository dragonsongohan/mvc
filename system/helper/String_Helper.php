<!-- Helper là nơi lưu trữ các hàm và mỗi file helper thông thường sẽ chứa các hàm cùng chủ đề
    Ví dụ khi tạo các hàm chuyên để xử lý chuỗi thì ta sẽ lưu trong String_Helper còn chuyên xử lý
    file thì ta sẽ lưu trong FileHelper.
    Trong file helper chúng ta để là class hay function đều được, nhưng chúng ta nên đặt class ở trong
    library, còn hàm thì đặt trong helper, hệ thống sẽ không tạo mới như library mà muốn ta dùng hàm nào
    thì sẽ gọi tới hàm đó.
 -->
<?php
    if (!defined('PATH_SYSTEM')) die ('Bad requested!');

    //Chuyển đổi từ chữ sang số
    function string_to_int($str) {
        return sprintf("%u", crc32($str));
    }
?>