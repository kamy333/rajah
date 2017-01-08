<?php require 'includes/header_start.php'; ?>

<?php require 'includes/header_end.php'; ?>



<!-- Page-Title -->
<div class="row">
    <div class="col-sm-12">
        <div class="page-title-box">
            <ol class="breadcrumb pull-right">
                <li><a href="#">Minton</a></li>
                <li><a href="#">Charts</a></li>
                <li class="active">Flot Charts</li>
            </ol>
            <h4 class="page-title">Flot Charts</h4>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-lg-6">
        <div class="portlet"><!-- /primary heading -->
            <div class="portlet-heading">
                <h3 class="portlet-title text-dark">
                    Multiple Statistics
                </h3>
                <div class="portlet-widgets">
                    <a href="javascript:;" data-toggle="reload"><i class="ion-refresh"></i></a>
                    <span class="divider"></span>
                    <a data-toggle="collapse" data-parent="#accordion1" href="#portlet1"><i class="ion-minus-round"></i></a>
                    <span class="divider"></span>
                    <a href="#" data-toggle="remove"><i class="ion-close-round"></i></a>
                </div>
                <div class="clearfix"></div>
            </div>
            <div id="portlet1" class="panel-collapse collapse in">
                <div class="portlet-body">
                    <div id="website-stats" style="height: 320px;" class="flot-chart"></div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-lg-6">
        <div class="portlet"><!-- /primary heading -->
            <div class="portlet-heading">
                <h3 class="portlet-title text-dark">
                    Realtime Statistics
                </h3>
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
                    <div id="flotRealTime" style="height: 320px;" class="flot-chart"></div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-lg-6">
        <div class="portlet"><!-- /primary heading -->
            <div class="portlet-heading">
                <h3 class="portlet-title text-dark">
                    Donut Pie
                </h3>
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
                    <div id="donut-chart">
                        <div id="donut-chart-container" class="flot-chart" style="height: 320px;">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-lg-6">
        <div class="portlet"><!-- /primary heading -->
            <div class="portlet-heading">
                <h3 class="portlet-title text-dark">
                    Pie Chart
                </h3>
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
                    <div id="pie-chart">
                        <div id="pie-chart-container" class="flot-chart" style="height: 320px;">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>


<div class="row">


    <div class="col-lg-12">
        <div class="portlet"><!-- /primary heading -->
            <div class="portlet-heading">
                <h3 class="portlet-title text-dark">
                    Pie Chart
                </h3>
                <div class="portlet-widgets">
                    <a href="javascript:;" data-toggle="reload"><i class="ion-refresh"></i></a>
                    <span class="divider"></span>
                    <a data-toggle="collapse" data-parent="#accordion1" href="#portlet7"><i class="ion-minus-round"></i></a>
                    <span class="divider"></span>
                    <a href="#" data-toggle="remove"><i class="ion-close-round"></i></a>
                </div>
                <div class="clearfix"></div>
            </div>
            <div id="portlet7" class="panel-collapse collapse in">
                <div class="portlet-body">
                    <div id="ordered-bars-chart" style="height: 320px;">

                    </div>
                </div>
            </div>
        </div>
    </div>

</div>



<div class="row">
    <div class="col-lg-12">
        <div class="portlet"><!-- /primary heading -->
            <div class="portlet-heading">
                <h3 class="portlet-title text-dark">
                    Combine Statistics
                </h3>
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
                    <div id="combine-chart">
                        <div id="combine-chart-container" class="flot-chart" style="height: 320px;">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>




<?php require 'includes/footer_start.php' ?>
<script src="../plugins/flot-chart/jquery.flot.js"></script>
<script src="../plugins/flot-chart/jquery.flot.time.js"></script>
<script src="../plugins/flot-chart/jquery.flot.tooltip.min.js"></script>
<script src="../plugins/flot-chart/jquery.flot.resize.js"></script>
<script src="../plugins/flot-chart/jquery.flot.pie.js"></script>
<script src="../plugins/flot-chart/jquery.flot.selection.js"></script>
<script src="../plugins/flot-chart/jquery.flot.stack.js"></script>
<script src="../plugins/flot-chart/jquery.flot.crosshair.js"></script>
<script src="assets/pages/jquery.flot.init.js"></script>

<?php require 'includes/footer_end.php' ?>
