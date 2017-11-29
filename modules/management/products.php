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
                            <th>Hành động</th>
                            <th><button type="button" class="btn btn-success" data-toggle="collapse" data-target="#collapseAdd" aria-expanded="false" aria-controls="collapseAdd"><i class=" fa fa-plus-square"></i>  Thêm</button></th>
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
    <div class="row collapse white-box" id="collapseAdd">
            <div class="col-md-4 col-md-offset-4 col-xs-12">

                <form action="main.php?m=management&a=products_doinsert" method="post" class="form-horizontal form-material">
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
                            <select name="category" class="form-control form-control-line">
                               <?php
                                    $i=1;
                                    $category_list = getCategoryInfo();
                                    foreach($category_list as $category){
                                ?>
                                <option value="<?php echo $category['categoryname']; ?>"><?php echo $category['categoryname']; ?></option>
                                <?php } ?>
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
                            <input type="text" name="quantity" class="form-control form-control-line"> </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-12">Mô tả</label>
                        <div class="col-md-12">
                            <textarea rows="5" name="description" class="form-control form-control-line"></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-12">Ảnh bìa</label>
                        <div class="col-md-12">
                            <input class="form-control" type="file" name="cover">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-12">
                            <button name="addproduct" type="Submit" value="add" class="btn btn-success">Thêm</button>
                        </div>
                    </div>
                </form>
            </div>
    </div>
</div>

<?php
    if(isset($_POST['addproduct']) && $_POST['addproduct'] == "add"){
        $name = $_POST['name'];
        $price = $_POST['price'];
        $author = $_POST['author'];
        $category = $_POST['category'];
        $publisher = $_POST['publisher'];
        $quantity = $_POST['quantity'];
        $description = $_POST['description'];
        
        $sql_add="INSERT INTO book ";
        $result = dbQuery($sql_add);
        if($result){
            
        }else{
            
        }
    }

?>


<!-- ============================================================== -->
<!-- Cap nhat sach -->
<!-- ============================================================== -->
<div class="container">
    <div class="row collapse" id="collapseUpdate">

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
                               <?php
                                    $i=1;
                                    $category_list = getCategoryInfo();
                                    foreach($category_list as $category){
                                ?>
                                <option><?php echo $category['categoryname']; ?></option>
                                <?php } ?>
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
                            <input class="form-control" type="file" name="cover">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-12">
                            <button name="add-product" type="Submit" value="add" class="btn btn-success">Thêm</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

</div>
