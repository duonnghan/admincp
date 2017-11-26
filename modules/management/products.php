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
                            <th>Thể loại</th>
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
                                    <?php echo $admin['categoryname']; ?>
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
<!-- Them sach -->
<!-- ============================================================== -->
<div class="container">
    <div class="row" id="collapseExample">

        <div class="col-md-4 col-xs-12">
            <div class="white-box">

                <!-- Load Image -->
                <div class="user-bg"> <img width="100%" alt="user" src="../plugins/images/large/img1.jpg">
                    <div class="overlay-box">
                        <div class="user-content">
                            <a href="javascript:void(0)"><img src="../plugins/images/users/genu.jpg" class="thumb-lg img-circle" alt="img"></a>
                            <h4 class="text-white">Image here</h4>
                            <h5 class="text-white">info@myadmin.com</h5>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <div class="col-md-8 col-xs-12">
            <div class="white-box">
                <form class="form-horizontal form-material">
                    <div class="form-group">
                        <label class="col-md-12">Tựa sách</label>
                        <div class="col-md-12">
                            <input type="text" name="name" class="form-control form-control-line"> </div>
                    </div>
                    <div class="form-group">
                        <label for="example-email" class="col-md-12">Giá bán</label>
                        <div class="col-md-12">
                            <input type="text" class="form-control form-control-line" name="price" id="example-email"> </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-12">Tác giả</label>
                        <div class="col-md-12">
                            <input type="text" name="author" class="form-control form-control-line"> </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-12">Thể loại</label>
                        <div class="col-sm-12">
                            <select class="form-control form-control-line">
                                <option>Văn học</option>
                                <option>Truyện tranh</option>
                                <option>Chính trị</option>
                                <option>Văn hóa</option>
                                <option>Xã hội</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-12">Nhà xuất bản</label>
                        <div class="col-md-12">
                            <input type="text" name="publisher" class="form-control form-control-line"> </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-12">Số lượng</label>
                        <div class="col-md-12">
                            <input type="text" name="publisher" class="form-control form-control-line"> </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-12">Mô tả</label>
                        <div class="col-md-12">
                            <textarea rows="5" class="form-control form-control-line"></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-12">Ảnh bìa</label>
                        <div class="col-md-12">
                            <input class="form-control" type="file" name="upload">
                        </div>
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
