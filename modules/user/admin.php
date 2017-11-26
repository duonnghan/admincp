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
                            <th>Hành động</th>
                            <th><button type="button" class="btn btn-success" data-toggle="collapse" data-target="#collapseInsert" aria-expanded="false" aria-controls="collapseInsert"><i class=" fa fa-plus-square"></i>  Thêm</button></th>
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
                                <td>
                                    <a href="#" class="btn btn-warning" data-toggle="collapse" data-target="#collapseUpdate" aria-expanded="false" aria-controls="collapseUpdate"><i class="fa fa-sliders"></i></a>
                                    <button href="#" class="btn btn-danger" data-toggle="collapse" data-target="#collapseDelete" aria-expanded="false" aria-controls="collapseDelete" type="button" name="deleteadmin" value="delete"><i class="fa fa-trash-o"></i></button>
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
    <div class="row white-box collapse" id="collapseInsert">

        <div class="col-md-4 col-md-offset-4 col-xs-12">
            <div>
                <form class="form-horizontal form-material" action="main.php?a=admin" method="post">
                    <div class="form-group">
                        <label class="col-md-12">Tài khoản</label>
                        <div class="col-md-12">
                            <input type="text" name="username" class="form-control form-control-line"> </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-12">Mật khẩu</label>
                        <div class="col-md-12">
                            <input type="password" name="password" class="form-control form-control-line"> </div>
                    </div>

                    <div class="form-group">
                        <div class="col-sm-12">
                            <button name="addadmin" type="Submit" value="add" class="btn btn-success">Thêm</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


<?php
    if(isset($_POST['addadmin']) && $_POST['addadmin']=='add'){
        $username = $_POST['username'];
        $password = md5($_POST['password']);
        $sql_add = "INSERT INTO admin (username, password)
                    VALUE ('$username', '$password')";

        $result = dbQuery($sql_add);

        if($result){
            header("Refresh:0");
            echo "Successfully";
        }else{
            echo "Failed";
        }
    }
?>

    <!-- ============================================================== -->
    <!-- Sua admin -->
    <!-- ============================================================== -->
    <div class="container">
        <div class="row white-box collapse" id="collapseUpdate">

            <div class="col-md-4 col-md-offset-4 col-xs-12">
                <div>
                    <form class="form-horizontal form-material" action="main.php?a=admin" method="post">
                        <div class="form-group">
                            <label class="col-md-12">Tài khoản</label>
                            <div class="col-md-12">
                                <input type="text" disabled value="<?php echo $admin['username']; ?>" name="username" class="form-control form-control-line"> </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-12">Mật khẩu cũ</label>
                            <div class="col-md-12">
                                <input type="password" name="oldpassword" class="form-control form-control-line"> </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-12">Mật khẩu mới</label>
                            <div class="col-md-12">
                                <input type="password" name="newpassword" class="form-control form-control-line"> </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-12">
                                <button name="updateadmin" type="Submit" value="update" class="btn btn-success">Cập nhật</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <?php
    if(isset($_POST['updateadmin']) && $_POST['updateadmin']=='update'){
            $oldpassword = md5($_POST['oldpassword']);
            $newpassword = md5($_POST['newpassword']);

            var_dump($admin['password']);
            var_dump($oldpassword);
            if($oldpassword == $admin['password']){
            $sql_update = "UPDATE admin SET password='$newpassword' WHERE username='".$admin['username']."'";

            $result = dbQuery($sql_update);
            var_dump($result);
            if($result){
                header("Refresh:0");
                echo "Update Successfully";
            }else{
                echo "Failed";
            }
            }else
                echo "<script>alert('Tài khoản hoặc mật khẩu cũ không đúng.');</script>";
    }
?>




<div class="container">
    <div class="row white-box collapse" id="collapseDelete">
        <?php
            if(isset($_POST['delete']=='delete')){
                $sql_delete="DELETE FROM admin WHERE username='".$admin['username']."'";
                $result = dbQuery($sql_delete);
                var_dump($result);
                if($result){
                    header("Refresh:0");
                    echo "Delete Successfully";
                }else{
                    echo "Failed";
                }
            }

        ?>
    </div>
</div>
