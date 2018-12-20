<div class="container">
    <h2 class="text-center"></h2>
    <div class="row justify-content-center">
        <div class="col-12 col-md-6 col-lg-4 pb-3">
            <!--Form with header-->
            <form method="post" id="loginform" onsubmit="return false;" >
                <div class="card border-primary rounded-0">
                    <div class="card-header p-0">
                        <div class="bg-info text-white text-center py-2">
                            <h4><i class="fa fa-envelope"></i>Đăng nhập</h4>

                        </div>
                    </div>
                    <div class="card-body p-3">
                        <!--Body-->
                        <div class="form-group">
                           
                            <div class="input-group mb-3 input-group-sm">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                <input id="username" type="text" class="form-control" placeholder="Username">
                            </div>
                            <div class="input-group mb-3 input-group-sm">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                                <input id="password" type="password" class="form-control"placeholder="Password">
                            </div> 
                            <p id="alrt" class="text-danger"></p>
                            <button id="loginbutton" type="submit" class="btn btn-success btn-sm float-right">Login</button>
                        </div>
                    </div>

                </div>
            </form>
            <!--Form with header-->
        </div>
    </div>
</div>
<script src="<?php echo $_DOMAIN; ?>js/login.js"></script>
