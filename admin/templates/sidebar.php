
<div class="col-md-3 sidebar ">
    <ul class="list-group">
        <li class="list-group-item">
            <div class="media">
                <a class="pull-left">
                    <img class="media-object" src="
                    <?php
                        // URL ảnh đại diện tài khoản
                        if ($data_user['url_avatar'] == '')
                        {
                            echo $_DOMAIN.'images/profile.png';
                        }
                        else
                        {
                            echo $data_user['url_avatar'];
                        }
                    ?>
                    " alt="Ảnh đại diện của <?php echo $data_user['FULLNAME']; ?>" width="64" height="64">
                </a>
                <div class="media-body">
                    <h4 class="media-heading"><?php echo $data_user['FULLNAME']; ?></h4>
                    <?php

                    // Hiển thị cấp bậc tài khoản
                    // Nếu tài khoản là admin
                    if ($data_user['POSITION'] == '1')
                    {
                        echo '<span class="label label-primary ">Quản trị viên</span>';
                    }
                    // Ngược lại tài khoản là tác giả
                    else
                    {
                        echo '<span class="label label-success ">Nhân viên</span>';
                    }

                    ?>
                </div>
            </div>
        </li>
        <a class="list-group-item active" href="<?php echo $_DOMAIN; ?>">
            <span class="glyphicon glyphicon-dashboard"></span> Thống kê 
        </a>
        <a class="list-group-item" href="<?php echo $_DOMAIN; ?>hoso">
            <span class="glyphicon glyphicon-user"></span> Hồ sơ cá nhân
        </a>
        <a class="list-group-item" href="<?php echo $_DOMAIN; ?>duyettin">
            <span class="glyphicon glyphicon-edit"></span> Duyệt tin 
        </a>  
        <a class="list-group-item" href="<?php echo $_DOMAIN; ?>lichsu">
            <span class="glyphicon glyphicon-book"></span> Lịch sử 
        </a>
        <?php

        // Phân quyền sidebar
        // Nếu tài khoản là admin
        if ($data_user['POSITION'] == '1')
        {
            echo
            '
                <a class="list-group-item" href="' . $_DOMAIN . 'nhanvien">
                    <span class="glyphicon glyphicon-briefcase"></span> Nhân viên 
                </a>
                <a class="list-group-item" href="' . $_DOMAIN . 'caidat">
                    <span class="glyphicon glyphicon-cog"></span> Cài đặt
                </a>  
            ';
        }

        ?>
        <a class="list-group-item" href="<?php echo $_DOMAIN; ?>signout.php">
            <span class="glyphicon glyphicon-off"></span> Thoát
        </a>
    </ul><!-- ul.list-group -->
</div><!-- div.sidebar -->
