<?php require 'includes/header_start.php'; ?>
<!--Morris Chart CSS -->
<link rel="stylesheet" href="../plugins/morris/morris.css">

<?php require 'includes/header_end.php'; ?>


<!-- Page-Title -->
<div class="row">
    <div class="col-sm-12">
        <div class="page-title-box">
            <ol class="breadcrumb pull-right">
                <li><a href="#">Minton</a></li>
                <li><a href="#">Charts</a></li>
                <li class="active">Morris Chart</li>
            </ol>
            <h4 class="page-title">Morris Chart</h4>
        </div>
    </div>
</div>

<!-- BAR Chart -->
<div class="row">
    <div class="col-sm-6">
        <div class="portlet">
            <!-- /primary heading -->
            <div class="portlet-heading">
                <h3 class="portlet-title text-dark"> Bar Chart </h3>
                <div class="portlet-widgets">
                    <a href="javascript:;" data-toggle="reload"><i class="ion-refresh"></i></a>
                    <span class="divider"></span>
                    <a data-toggle="collapse" data-parent="#accordion1" href="#bg-default"><i class="ion-minus-round"></i></a>
                    <span class="divider"></span>
                    <a href="#" data-toggle="remove"><i class="ion-close-round"></i></a>
                </div>
                <div class="clearfix"></div>
            </div>
            <div id="bg-default" class="panel-collapse collapse in">
                <div class="portlet-body">
                    <div class="text-center">
                        <ul class="list-inline chart-detail-list">
                            <li>
                                <h5><i class="fa fa-circle m-r-5" style="color: #3bafda;"></i>Series A</h5>
                            </li>
                            <li>
                                <h5><i class="fa fa-circle m-r-5" style="color: #dcdcdc;"></i>Series B</h5>
                            </li>
                            <li>
                                <h5><i class="fa fa-circle m-r-5" style="color: #80deea;"></i>Series C</h5>
                            </li>
                        </ul>
                    </div>
                    <div id="morris-bar-example" style="height: 300px;"></div>
                </div>
            </div>
        </div>
        <!-- /Portlet -->
    </div>
    <!-- col -->
    <div class="col-sm-6">
        <div class="portlet">
            <!-- /primary heading -->
            <div class="portlet-heading">
                <h3 class="portlet-title text-dark"> Stacked Bar Chart </h3>
                <div class="portlet-widgets">
                    <a href="javascript:;" data-toggle="reload"><i class="ion-refresh"></i></a>
                    <span class="divider"></span>
                    <a data-toggle="collapse" data-parent="#accordion1" href="#bg-default1"><i class="ion-minus-round"></i></a>
                    <span class="divider"></span>
                    <a href="#" data-toggle="remove"><i class="ion-close-round"></i></a>
                </div>
                <div class="clearfix"></div>
            </div>
            <div id="bg-default1" class="panel-collapse collapse in">
                <div class="portlet-body">
                    <div class="text-center">
                        <ul class="list-inline chart-detail-list">
                            <li>
                                <h5><i class="fa fa-circle m-r-5" style="color: #3bafda;"></i>Series A</h5>
                            </li>
                            <li>
                                <h5><i class="fa fa-circle m-r-5" style="color: #dcdcdc;"></i>Series B</h5>
                            </li>
                        </ul>
                    </div>
                    <div id="morris-bar-stacked" style="height: 300px;"></div>
                </div>
            </div>
        </div>
        <!-- /Portlet -->
    </div>
    <!-- col -->
</div>
<!-- End row-->




<div class="row">

    <!-- Area Chart -->
    <div class="col-lg-6">
        <div class="portlet">
            <!-- /primary heading -->
            <div class="portlet-heading">
                <h3 class="portlet-title text-dark"> Area Chart with Point </h3>
                <div class="portlet-widgets">
                    <a href="javascript:;" data-toggle="reload"><i class="ion-refresh"></i></a>
                    <span class="divider"></span>
                    <a data-toggle="collapse" data-parent="#accordion1" href="#portlet2"><i class="ion-minus-round"></i></a>
                    <span class="divider"></span>
                    <a href="#" data-toggle="remove"><i class="ion-close-round"></i></a>
                </div>
                <div class="clearfix"></div>
            </div>
            <div id="portlet2" class="panel-collapse collapse in">
                <div class="portlet-body">
                    <div class="text-center">
                        <ul class="list-inline chart-detail-list">
                            <li>
                                <h5><i class="fa fa-circle m-r-5" style="color: #3bafda;"></i>Series A</h5>
                            </li>
                            <li>
                                <h5><i class="fa fa-circle m-r-5" style="color: #80deea;"></i>Series B</h5>
                            </li>
                        </ul>
                    </div>
                    <div id="morris-area-with-dotted" style="height: 300px;"></div>
                </div>
            </div>
        </div>
        <!-- /Portlet -->
    </div>

    <!-- Area Chart -->
    <div class="col-lg-6">
        <div class="portlet">
            <!-- /primary heading -->
            <div class="portlet-heading">
                <h3 class="portlet-title text-dark"> Area Chart </h3>
                <div class="portlet-widgets">
                    <a href="javascript:;" data-toggle="reload"><i class="ion-refresh"></i></a>
                    <span class="divider"></span>
                    <a data-toggle="collapse" data-parent="#accordion1" href="#portlet3"><i class="ion-minus-round"></i></a>
                    <span class="divider"></span>
                    <a href="#" data-toggle="remove"><i class="ion-close-round"></i></a>
                </div>
                <div class="clearfix"></div>
            </div>
            <div id="portlet3" class="panel-collapse collapse in">
                <div class="portlet-body">
                    <div class="text-center">
                        <ul class="list-inline chart-detail-list">
                            <li>
                                <h5><i class="fa fa-circle m-r-5" style="color: #26c6da;"></i>Series A</h5>
                            </li>
                            <li>
                                <h5><i class="fa fa-circle m-r-5" style="color: #80deea;"></i>Series B</h5>
                            </li>
                            <li>
                                <h5><i class="fa fa-circle m-r-5" style="color: #dcdcdc;"></i>Series C</h5>
                            </li>
                        </ul>
                    </div>
                    <div id="morris-area-example" style="height: 300px;"></div>
                </div>
            </div>
        </div>
        <!-- /Portlet -->
    </div>

</div>
<!-- End row-->



<div class="row">
    <!--  Line Chart -->
    <div class="col-lg-6">
        <div class="portlet">
            <!-- /primary heading -->
            <div class="portlet-heading">
                <h3 class="portlet-title text-dark"> Line Chart </h3>
                <div class="portlet-widgets">
                    <a href="javascript:;" data-toggle="reload"><i class="ion-refresh"></i></a>
                    <span class="divider"></span>
                    <a data-toggle="collapse" data-parent="#accordion1" href="#portlet4"><i class="ion-minus-round"></i></a>
                    <span class="divider"></span>
                    <a href="#" data-toggle="remove"><i class="ion-close-round"></i></a>
                </div>
                <div class="clearfix"></div>
            </div>
            <div id="portlet4" class="panel-collapse collapse in">
                <div class="portlet-body">
                    <div class="text-center">
                        <ul class="list-inline chart-detail-list">
                            <li>
                                <h5><i class="fa fa-circle m-r-5" style="color: #3bafda;"></i>Series A</h5>
                            </li>
                            <li>
                                <h5><i class="fa fa-circle m-r-5" style="color: #dcdcdc;"></i>Series B</h5>
                            </li>
                            <li>
                                <h5><i class="fa fa-circle m-r-5" style="color: #80deea;"></i>Series C</h5>
                            </li>
                        </ul>
                    </div>
                    <div id="morris-line-example" style="height: 300px;"></div>
                </div>
            </div>
        </div>
        <!-- /Portlet -->
    </div>

    <!-- Donut Chart -->
    <div class="col-lg-6">
        <div class="portlet">
            <!-- /primary heading -->
            <div class="portlet-heading">
                <h3 class="portlet-title text-dark"> Donut Chart </h3>
                <div class="portlet-widgets">
                    <a href="javascript:;" data-toggle="reload"><i class="ion-refresh"></i></a>
                    <span class="divider"></span>
                    <a data-toggle="collapse" data-parent="#accordion1" href="#portlet5"><i class="ion-minus-round"></i></a>
                    <span class="divider"></span>
                    <a href="#" data-toggle="remove"><i class="ion-close-round"></i></a>
                </div>
                <div class="clearfix"></div>
            </div>
            <div id="portlet5" class="panel-collapse collapse in">
                <div class="portlet-body">
                    <div id="morris-donut-example" style="height: 300px;"></div>

                    <div class="text-center">
                        <ul class="list-inline chart-detail-list">
                            <li>
                                <h5><i class="fa fa-circle m-r-5" style="color: #ededed;"></i>In-Store Sales</h5>
                            </li>
                            <li>
                                <h5><i class="fa fa-circle m-r-5" style="color: #80deea;"></i>Mail-Order Sales</h5>
                            </li>
                            <li>
                                <h5><i class="fa fa-circle m-r-5" style="color: #3bafda;"></i>Download Sales</h5>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Portlet -->
    </div>
</div>
<!-- End row-->





<?php require 'includes/footer_start.php' ?>
<!--Morris Chart-->
<script src="../plugins/morris/morris.min.js"></script>
<script src="../plugins/raphael/raphael-min.js"></script>
<script src="assets/pages/morris.init.js"></script>

<?php require 'includes/footer_end.php' ?>
