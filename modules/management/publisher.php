<?php if (!defined('IN_SITE')) die ('The request not found'); ?>

<!-- ============================================================== -->
<!-- Bang danh sach cac admin -->
<!-- ============================================================== -->
<div class="row">
    <div class="col-sm-12 col-md-12 col-lg-12 ">
        <div class="white-box">
            <h3 class="box-title">Danh sách sản phẩm</h3>
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Tên NXB</th>
                            <th>Địa chỉ</th>
                            <th>Số điện thoại</th>
                            <th>Hành động</th>
                            <th><button type="button" class="btn btn-success" data-toggle="collapse" data-target="#collapseAdd" aria-expanded="false" aria-controls="collapseAdd"><i class=" fa fa-plus-square"></i>  Thêm</button></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $i=1;
                        $publisher_list = getPublisherInfo();
                        foreach($publisher_list as $publisher){
                    ?>
                            <tr>
                                <td>
                                    <?php echo $publisher['id']; ?>
                                </td>
                                <td>
                                    <?php echo $publisher['publishername']; ?>
                                </td>
                                <td>
                                    <?php echo $publisher['address']; ?>
                                </td>
                                <td>
                                    <?php echo $publisher['phone']; ?>
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
<!-- Them nhà xuất bản -->
<!-- ============================================================== -->
<div class="container">
    <div class="row white-box collapse" id="collapseAdd">

        <div class="col-md-4 col-md-offset-4 col-xs-12">
            <div>
                <form class="form-horizontal form-material">
                    <div class="form-group">
                        <label class="col-md-12">Tên nhà xuất bản</label>
                        <div class="col-md-12">
                            <input type="text" name="name" class="form-control form-control-line"> </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-12">Địa chỉ</label>
                        <div class="col-md-12">
                            <input type="text" class="form-control form-control-line" name="address"> </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-12">Số điện thoại</label>
                        <div class="col-md-12">
                            <input type="text" name="phone" class="form-control form-control-line"> </div>
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
<!-- Cập nhật nhà xuất bản -->
<!-- ============================================================== -->
<div class="container">
    <div class="row white-box collapse" id="collapseUpdate">

        <div class="col-md-4 col-md-offset-4 col-xs-12">
            <div>
                <form class="form-horizontal form-material">
                    <div class="form-group">
                        <label class="col-md-12">Tên nhà xuất bản</label>
                        <div class="col-md-12">
                            <input type="text" value="<?php echo $publisher['publishername']; ?>" name="name" class="form-control form-control-line"> </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-12">Địa chỉ</label>
                        <div class="col-md-12">
                            <input type="text" class="form-control form-control-line" name="address" value="<?php echo $publisher['address']; ?>" > </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-12">Số điện thoại</label>
                        <div class="col-md-12">
                            <input type="text" name="phone" class="form-control form-control-line" value="<?php echo $publisher['phone']; ?>" > </div>
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


