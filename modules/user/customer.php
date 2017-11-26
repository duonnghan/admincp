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
                            <th><button type="button" class="btn btn-success" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample"><i class=" fa fa-plus-square"></i>  Thêm</button></th>
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
                                    <a href="#demo" class="btn btn-warning" data-toggle="collapse"><i class="fa fa-sliders"></i></a>
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
    <div class="row white-box collapse" id="collapseExample">

        <div class="col-md-4 col-md-offset-4 col-xs-12">
            <div>
                <form class="form-horizontal form-material">
                    <div class="form-group">
                        <label class="col-md-12">Họ tên khách hàng</label>
                        <div class="col-md-12">
                            <input type="text" name="name" class="form-control form-control-line"> </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-12">Email</label>
                        <div class="col-md-12">
                            <input type="text" name="name" class="form-control form-control-line"> </div>
                    </div>
                    <div class="form-group">
                        <label for="example-email" class="col-md-12">Địa chỉ</label>
                        <div class="col-md-12">
                            <input type="text" class="form-control form-control-line" name="price" id="example-email"> </div>
                    </div>
                    <div class="form-group">
                        <label for="example-email" class="col-md-12">Giới tính</label>
                        <div class="col-md-12">
                            <input type="text" class="form-control form-control-line" name="price" id="example-email"> </div>
                    </div>
                    <div class="form-group">
                        <label for="example-email" class="col-md-12">Số điện thoại</label>
                        <div class="col-md-12">
                            <input type="text" length="11" class="form-control form-control-line" name="price" id="example-email"> </div>
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
