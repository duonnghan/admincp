
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
                            <td><?php echo $author['id']; ?></td>
                            <td><?php echo $author['name']; ?></td>
                            <td><?php echo $author['address']; ?></td>
                            <td><?php echo $author['life']; ?></td>
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

