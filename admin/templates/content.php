<div class="col-md-9 bg-white ">
    <?php

    // Phân trang content
    // Lấy tham số tab
    if (isset($_GET['tab']))
    {
        $tab = trim(addslashes(htmlspecialchars($_GET['tab'])));
    }
    else
    {
        $tab = '';
    }

    // Nếu có tham số tab
    if ($tab != '')
    {
        // Hiển thị template chức năng theo tham số tab
        if ($tab == 'hoso')
        {
            // Hiển thị template hồ sơ cá nhân
            require_once 'templates/hoso.php';
        }
        else if ($tab == 'duyettin')
        {
            // Hiển thị template duyettin
            require_once 'templates/duyettin.php';
        }
        else if ($tab == 'lichsu')
        {
            // Hiển thị template nhanvien
            require_once 'templates/lichsu.php';
        }
        else if ($tab == 'nhanvien')
        {
            // Hiển thị template nhanvien
            require_once 'templates/nhanvien.php';
        }
        else if ($tab == 'caidat')
        {
            // Hiển thị template cài đặt chung
            require_once 'templates/caidat.php';
        }
    }
    // Ngược lại không có tham số tab
    else
    {
        // Hiển thị template thongke
        require_once 'templates/thongke.php';
    }

    ?>
</div><!-- div.content -->    
