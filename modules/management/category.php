<?php if (!defined('IN_SITE')) die ('The request not found'); ?>

<!-- ============================================================== -->
<!-- Bang danh sach cac danh mục -->
<!-- ============================================================== -->
<div class="row">
    <div class="col-sm-12 col-md-12 col-lg-12 ">
        <div class="white-box">
            <h3 class="box-title">Các danh mục</h3>
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Tên danh mục</th>
                            <th>Hành động</th>
                            <th><button type="button" class="btn btn-success" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample"><i class=" fa fa-plus-square"></i>  Thêm</button></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $i=1;
                        $category_list = getCategoryInfo();
                        foreach($category_list as $category){
                    ?>
                            <tr>
                                <td>
                                    <?php echo $category['id']; ?>
                                </td>
                                <td>
                                    <?php echo $category['categoryname']; ?>
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
<!-- Thêm danh mục -->
<!-- ============================================================== -->
<div class="container">
    <div class="row white-box collapse" id="collapseAdd">

        <div class="col-md-4 col-md-offset-4 col-xs-12">
            <div>
                <form class="form-horizontal form-material">
                    <div class="form-group">
                        <label class="col-md-12">Tên danh mục</label>
                        <div class="col-md-12">
                            <input type="text" name="name" class="form-control form-control-line"> </div>
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
<!-- Cập nhật danh mục -->
<!-- ============================================================== -->
<div class="container">
    <div class="row white-box collapse" id="collapseUpdate">

        <div class="col-md-4 col-md-offset-4 col-xs-12">
            <div>
                <form class="form-horizontal form-material">
                    <div class="form-group">
                        <label class="col-md-12">Tên danh mục</label>
                        <div class="col-md-12">
                            <input type="text" name="name" value="<?php echo $category['categoryname']; ?>" class="form-control form-control-line"> </div>
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
