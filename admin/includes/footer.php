<!-- Liên kết thư viện jQuery Form -->
    <script src="<?php echo $_DOMAIN; ?>js/jquery.form.min.js"></script>  
    <?php 
        // Active sidebar
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
            // Tháo active của Bảng điều khiển
            echo '<script>$(".sidebar ul a:eq(1)").removeClass("active");</script>';
            // Active theo giá trị của tham số tab
            if ($tab == 'hoso')
            {
                echo '<script>$(".sidebar ul a:eq(2)").addClass("active");</script>';
            }
            else if ($tab == 'duyettin')
            {
                echo '<script>$(".sidebar ul a:eq(3)").addClass("active");</script>';
            }
            else if ($tab == 'lichsu')
            {
                echo '<script>$(".sidebar ul a:eq(4)").addClass("active");</script>';
            }
            else if ($tab == 'nhanvien')
            {
                echo '<script>$(".sidebar ul a:eq(5)").addClass("active");</script>';
            }
            else if ($tab == 'caidat')
            {
                echo '<script>$(".sidebar ul a:eq(6)").addClass("active");</script>';
            }
        }

    ?>
</div>
</body>
</html>