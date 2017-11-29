<!-- ============================================================== -->
<!-- Bang danh sach cac khach hang -->
<!-- ============================================================== -->
<div class="row">
    <div class="col-sm-12 col-md-12 col-lg-12 ">
        <div class="white-box">
            <h3 class="box-title">Danh sách khách hàng</h3>
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Họ tên</th>
                            <th>Email</th>
                            <th>Địa chỉ</th>
                            <th>Giới tính</th>
                            <th>Số điện thoại</th>
                            <th>Hành động</th>
                            <th><button type="button" class="btn btn-success" data-toggle="collapse" data-target="#collapseAdd" aria-expanded="false" aria-controls="collapseAdd"><i class=" fa fa-plus-square"></i>  Thêm</button></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            $userLst = getUserInfo();
                            $numUser = count($userLst);
                            foreach($userLst as $user){
                        ?>
                            <tr>
                                <td>
                                    <?php echo $user['id']; ?>
                                </td>
                                <td>
                                    <?php echo $user['name']; ?>
                                </td>
                                <td>
                                    <?php echo $user['email']; ?>
                                </td>
                                <td>
                                    <?php echo $user['address']; ?>
                                </td>
                                <td>
                                    <?php echo $user['gender']; ?>
                                </td>
                                <td>
                                    <?php echo $user['phone']; ?>
                                </td>
                                <td>
                                    <a href="#" class="btn btn-warning" data-toggle="collapse" data-target="#collapseUpdate" aria-expanded="false" aria-controls="collapseUpdate"><i class="fa fa-sliders"></i></a>
                                    <a href="#demo" class="btn btn-danger" data-toggle="collapse"><i class="fa fa-trash-o"></i></a>
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
<!-- Thêm khách hàng
<!-- ============================================================== -->
<div class="container">
    <div class="row white-box collapse" id="collapseAdd">

        <div class="col-md-4 col-md-offset-4 col-xs-12">
            <div>
                <form class="form-horizontal form-material">
                    <div class="form-group">
                        <label class="col-md-12">Họ tên khách hàng</label>
                        <div class="col-md-12">
                            <input type="text" name="name" class="form-control form-control-line"> </div>
                    </div>
                    <div class="form-group">
                        <label for="example-email" class="col-md-12">Email</label>
                        <div class="col-md-12">
                            <input type="text" name="email" class="form-control form-control-line" id="example-email"> </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-12">Địa chỉ</label>
                        <div class="col-md-12">
                            <input type="text" class="form-control form-control-line" name="address" id="example-email"> </div>
                    </div>
                    <div class="form-group">
                        <label for="example-email" class="col-md-12">Giới tính</label>
                        <div class="col-md-12">
                            <input type="text" class="form-control form-control-line" name="gender"> </div>
                    </div>
                    <div class="form-group">
                        <label for="example-email" class="col-md-12">Số điện thoại</label>
                        <div class="col-md-12">
                            <input type="text" length="11" class="form-control form-control-line" name="phone" id="example-email"> </div>
                    </div>


                    <div class="form-group">
                        <div class="col-sm-12">
                            <button name="add-product" type="Submit" value="submit" class="btn btn-success">Thêm</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


<!-- ============================================================== -->
<!-- Cập nhật thông tin khách hàng
<!-- ============================================================== -->
<div class="container">
    <div class="row white-box collapse" id="collapseUpdate">

        <div class="col-md-4 col-md-offset-4 col-xs-12">
            <div>
                <form class="form-horizontal form-material">
                    <div class="form-group">
                        <label class="col-md-12">Họ tên khách hàng</label>
                        <div class="col-md-12">
                            <input type="text" name="name" value="<?php echo $user['name']; ?>" class="form-control form-control-line"> </div>
                    </div>
                    <div class="form-group">
                        <label for="example-email" class="col-md-12">Email</label>
                        <div class="col-md-12">
                            <input type="text" name="email" value="<?php echo $user['email']; ?>" class="form-control form-control-line" id="example-email"> </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-12">Địa chỉ</label>
                        <div class="col-md-12">
                            <input type="text" value="<?php echo $user['address']; ?>" class="form-control form-control-line" name="address"> </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-12">Giới tính</label>
                        <div class="col-md-12">
                            <label><input type="radio" name="gender" value="Nam">Nam</label><br>
                            <label><input type="radio" name="gender" value="Nữ">Nữ</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-12">Số điện thoại</label>
                        <div class="col-md-12">
                            <input type="text" length="11" value="<?php echo $user['phone']; ?>" class="form-control form-control-line" name="phone"> </div>
                    </div>


                    <div class="form-group">
                        <div class="col-sm-12">
                            <button name="add-product" type="Submit" value="submit" class="btn btn-success">Cập nhật</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
