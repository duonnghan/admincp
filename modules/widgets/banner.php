<?php
    include_once("../../libs/functions.php");
    $num_order = getNumOrders();
    $num_user = getNumUsers();
    $total_prices = getTotalPrices();
?>

<div class="row">
    <div class="col-lg-4 col-sm-6 col-xs-12">
        <div class="white-box analytics-info">
            <h3 class="box-title">Tổng số khách hàng</h3>
            <ul class="list-inline two-part">
                <li>
                    <div id="sparklinedash"></div>
                </li>
                <li class="text-right"><i class="ti-arrow-up text-success"></i> <span class="counter text-success"><?php echo $num_user; ?></span></li>
            </ul>
        </div>
    </div>
    <div class="col-lg-4 col-sm-6 col-xs-12">
        <div class="white-box analytics-info">
            <h3 class="box-title">Tổng số đơn hàng</h3>
            <ul class="list-inline two-part">
                <li>
                    <div id="sparklinedash2"></div>
                </li>
                <li class="text-right"><i class="ti-arrow-up text-purple"></i> <span class="counter text-purple"><?php echo $num_order; ?></span></li>
            </ul>
        </div>
    </div>
    <div class="col-lg-4 col-sm-6 col-xs-12">
        <div class="white-box analytics-info">
            <h3 class="box-title">Tổng số tiền</h3>
            <ul class="list-inline two-part">
                <li>
                    <div id="sparklinedash3"></div>
                </li>
                <li class="text-right"><i class="ti-arrow-up text-info"></i> <span class="counter text-info"><?php echo $total_prices; ?></span></li>
            </ul>
        </div>
    </div>
</div>

