<?php require 'includes/header_start.php'; ?>
<link href="../plugins/nvd3/build/nv.d3.min.css" rel="stylesheet" type="text/css" />

<?php require 'includes/header_end.php'; ?>



<!-- Page-Title -->
<div class="row">
    <div class="col-sm-12">
        <div class="page-title-box">
            <ol class="breadcrumb pull-right">
                <li><a href="#">Minton</a></li>
                <li><a href="#">Charts</a></li>
                <li class="active">Nvd3 Charts</li>
            </ol>
            <h4 class="page-title">Nvd3 Charts</h4>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-sm-12">
        <div class="card-box">
            <h4 class="m-t-0 m-b-20 header-title"><b>Line Chart</b></h4>

            <div class="line-chart">
                <svg style="height:400px;width:100%"></svg>
            </div>
        </div>
    </div>
</div>


<div class="row">
    <div class="col-sm-12">
        <div class="card-box">
            <h4 class="m-t-0 m-b-20 header-title"><b>Discrete Bar Chart</b></h4>

            <div class="bar-chart">
                <svg style="height:400px;width:100%"></svg>
            </div>
        </div>
    </div>
</div>


<div class="row">
    <div class="col-sm-12">
        <div class="card-box">
            <h4 class="m-t-0 m-b-20 header-title"><b>Horizontal Grouped / Stacked Bar Chart</b></h4>

            <div class="multi-chart">
                <svg style="height:500px;width:100%"></svg>
            </div>
        </div>
    </div>
</div>


<div class="row">
    <div class="col-sm-12">
        <div class="card-box">
            <h4 class="m-t-0 m-b-20 header-title"><b>Scatter chart</b></h4>

            <div class="scatter-chart">
                <svg style="height:500px;width:100%"></svg>
            </div>
        </div>
    </div>
</div>



<div class="row">
    <div class="col-sm-12">
        <div class="card-box">
            <h4 class="m-t-0 m-b-20 header-title"><b>Pie Chart &amp; Donut Chart</b></h4>
            <div class="row">
                <div class="col-md-6">
                    <div id="chart1">
                        <svg style="height:500px;width:100%"></svg>
                    </div>
                </div>

                <div class="col-md-6">
                    <div id="chart2">
                        <svg style="height:500px;width:100%"></svg>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>




<?php require 'includes/footer_start.php' ?>
<!-- Nvd3 js -->
<script src="../plugins/d3/d3.min.js"></script>
<script src="../plugins/nvd3/build/nv.d3.min.js"></script>
<script src="assets/pages/jquery.nvd3.init.js"></script>

<?php require 'includes/footer_end.php' ?>
