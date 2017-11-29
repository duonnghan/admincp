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
                            <th>Hành động</th>
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
<!-- Thêm tác giả -->
<!-- ============================================================== -->
<div class="container">
    <div class="row white-box collapse" id="collapseExample">

        <div class="col-md-4 col-md-offset-4 col-xs-12">
            <div>
                <form action="main.php?a=author" class="form-horizontal form-material">
                    <div class="form-group">
                        <label class="col-md-12">Họ tên tác giả</label>
                        <div class="col-md-12">
                            <input type="text" name="name" class="form-control form-control-line"> </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-12">Địa chỉ</label>
                        <div class="col-md-12">
                            <input type="text" class="form-control form-control-line" name="address"> </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-12">Tiểu sử</label>
                        <div class="col-md-12">
                            <textarea rows="5" name="bio" class="form-control form-control-line"></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-12">
                            <button name="addauthor" type="Submit" value="add" class="btn btn-success">Thêm</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

</div>

<?php
    if(isset($_POST['addauthor']) && $_POST['addauthor']=='add'){
        $name = $_POST['name'];
        $address = $_POST['address'];
        $bio = $_POST['bio'];
        $sql_add = "INSERT INTO author (authorname, address, bio)
                    VALUE ('$name', '$address', '$bio')";

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
<!-- Cập nhật thông tin tác giả -->
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
                        <label class="col-md-12">Địa chỉ</label>
                        <div class="col-md-12">
                            <input type="text" class="form-control form-control-line" name="price" > </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-12">Tiểu sử</label>
                        <div class="col-md-12">
                            <textarea rows="5" name="bio" class="form-control form-control-line"></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-12">
                            <button name="update-author" type="Submit" value="submit" class="btn btn-success">Cập nhật</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

</div>
