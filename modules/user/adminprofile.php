<?php if (!defined('IN_SITE')) die ('The request not found'); ?>

<!-- ============================================================== -->
<!-- Bang danh sach cac admin -->
<!-- ============================================================== -->
<div class="row">
    <div class="col-sm-12 col-md-12 col-lg-12 ">
        <div class="white-box">
            <h3 class="box-title">Danh sách admin</h3>
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Tài khoản</th>
                            <th>Mật khẩu</th>
                            <th>Lân cuối đăng nhập</th>
                            <th><button type="button" class="btn btn-success" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample"><i class=" fa fa-plus-square"></i>  Thêm</button></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $i=1;
                        $admin_list = getAdminInfo();
                        foreach($admin_list as $admin){
                    ?>
                            <tr>
                                <td>
                                    <?php echo $i++; ?>
                                </td>
                                <td>
                                    <?php echo $admin['username']; ?>
                                </td>
                                <td>
                                    <?php echo $admin['password']; ?>
                                </td>
                                <td>
                                    <?php echo $admin['lastlogin']; ?>
                                </td>
                            </tr>
                            <?php
                        }
                    ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>


<!-- ============================================================== -->
<!-- Them admin -->
<!-- ============================================================== -->
<div class="container">

    <form class="form-horizontal">
        <fieldset>
            <div class="collapse" id="collapseExample">
                <!-- Text input-->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="textinput">Tài khoản</label>
                    <div class="col-md-4">
                        <input id="textinput" name="textinput" type="text" placeholder="username" class="form-control input-md">
                    </div>
                </div>

                <!-- Password input-->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="passwordinput">Mật khẩu</label>
                    <div class="col-md-4">
                        <input id="passwordinput" name="passwordinput" type="password" placeholder="password" class="form-control input-md">
                    </div>

                </div>

                <!-- Button -->
                <div class="form-group">
                    <lable class="col-md-4"></lable>
                    <div class="col-md-4">
                        <button id="singlebutton" type="submit" name="createAdmin" class="btn btn-primary" value="create">Tạo</button>
                    </div>
                </div>
            </div>
        </fieldset>
    </form>

</div>

