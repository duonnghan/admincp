<div class="row">
    <div class="col-sm-12 col-md-12 col-lg-12 ">
        <div class="white-box">
            <h3 class="box-title">Danh sách đơn hàng</h3>
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Mã đơn hàng</th>
                            <th>Mã khách hàng</th>
                            <th>Ngày đặt hàng</th>
                            <th>Ngày giao hàng</th>
                            <th>Tình trạng thanh toán</th>
                            <th>Tình trạng giao hàng</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            $order_list = getOrderList();
                            $num_order = count($order_list);               
                            foreach($order_list as $order){
                        ?>
                            <tr>
                                <td>
                                    <?php echo $order['id']; ?>
                                </td>
                                <td>
                                    <?php echo $order['userid']; ?>
                                </td>
                                <td>
                                    <?php echo $order['orderdate']; ?>
                                </td>
                                <td>
                                    <?php echo $order['shipdate']; ?>
                                </td>
                                <td>
                                    <?php if($order['paidstat']) echo "Đã thanh toán"; else echo "Chưa thanh toán";  ?>
                                </td>
                                <td>
                                    <?php if($order['shipstat']) echo "Đã giao hàng"; else echo "Chưa giao hàng"; ?>
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