<!-- ============================================================== -->
<!-- Bang danh sach cac tác giả-->
<!-- ============================================================== -->
<div class="row">
    <div class="col-sm-12 col-md-12 col-lg-12 ">
        <div class="white-box">
            <h3 class="box-title">Danh sách tác giả</h3>
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Họ tên</th>
                            <th>Địa chỉ</th>
                            <th>Tiểu sử</th>
                            <th><button type="button" class="btn btn-success" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample"><i class=" fa fa-plus-square"></i>  Thêm</button></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            $authorLst = getAuthorInfo();
                            foreach($authorLst as $author){
                        ?>
                            <tr>
                                <td>
                                    <?php echo $author['id']; ?>
                                </td>
                                <td>
                                    <?php echo $author['name']; ?>
                                </td>
                                <td>
                                    <?php echo $author['address']; ?>
                                </td>
                                <td>
                                    <?php echo $author['life']; ?>
                                </td>
                                <td></td>
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
<!-- Thêm tác giả -->
<!-- ============================================================== -->
<div class="container">
    <div class="row white-box collapse" id="collapseExample">

        <div class="col-md-4 col-md-offset-4 col-xs-12">
            <div>
                <form class="form-horizontal form-material">
                    <div class="form-group">
                        <label class="col-md-12">Họ tên tác giả</label>
                        <div class="col-md-12">
                            <input type="text" name="name" class="form-control form-control-line"> </div>
                    </div>
                    <div class="form-group">
                        <label for="example-email" class="col-md-12">Địa chỉ</label>
                        <div class="col-md-12">
                            <input type="text" class="form-control form-control-line" name="price" id="example-email"> </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-12">Tiểu sử</label>
                        <div class="col-md-12">
                            <textarea rows="5" class="form-control form-control-line"></textarea>
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
