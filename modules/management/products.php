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
                            <th>Tựa đề</th>
                            <th>Giá</th>
                            <th>Tác giả</th>
                            <th>Nhà xuất bản</th>
                            <th>Số lượng</th>
                            <th>Mô tả</th>
                            <th>Bìa</th>
                            <th>Lần cuối cập nhật</th>
                            <th><button type="button" class="btn btn-success" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample"><i class=" fa fa-plus-square"></i>  Thêm</button></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $i=1;
                        $book_list = getBookInfo();
                        foreach($book_list as $book){
                    ?>
                            <tr>
                                <td>
                                    <?php echo $book['id']; ?>
                                </td>
                                <td>
                                    <?php echo $admin['bookname']; ?>
                                </td>
                                <td>
                                    <?php echo $admin['price']; ?>
                                </td>
                                <td>
                                    <?php echo $admin['authorname']; ?>
                                </td>
                                <td>
                                    <?php echo $admin['publishername']; ?>
                                </td>
                                <td>
                                    <?php echo $admin['quantity']; ?>
                                </td>
                                <td>
                                    <?php echo $admin['description']; ?>
                                </td>
                                <td>
                                    <?php echo $admin['cover']; ?>
                                </td>
                                <td>
                                    <?php echo $admin['updated']; ?>
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