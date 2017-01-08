<?php require 'includes/header_start.php'; ?>
<!-- ION Slider -->
<link href="../plugins/ion-rangeslider/ion.rangeSlider.css" rel="stylesheet" type="text/css">
<link href="../plugins/ion-rangeslider/ion.rangeSlider.skinFlat.css" rel="stylesheet" type="text/css">

<?php require 'includes/header_end.php'; ?>



<!-- Page-Title -->
<div class="row">
    <div class="col-sm-12">
        <div class="page-title-box">
            <ol class="breadcrumb pull-right">
                <li><a href="#">Minton</a></li>
                <li><a href="#">Components</a></li>
                <li class="active">Range Sliders</li>
            </ol>
            <h4 class="page-title">Range Sliders</h4>
        </div>
    </div>
</div>


<div class="row">
    <div class="col-md-12">

        <div class="card-box">
            <h4 class="m-t-0 header-title"><b>Ion Range Slider</b></h4>
            <p class="text-muted m-b-30 font-13">
                Cool, comfortable, responsive and easily customizable range slider
            </p>

            <form class="form-horizontal">
                <div class="form-group">
                    <label for="range_01" class="col-sm-2 control-label">Default<span class="font-normal text-muted clearfix">Start without params</span></label>
                    <div class="col-sm-10">
                        <input type="text" id="range_01">
                    </div>
                </div>
                <div class="form-group">
                    <label for="range_02" class="col-sm-2 control-label"><b>Min-Max</b><span class="font-normal text-muted f-s-12 clearfix">Set min value, max value and start point</span></label>
                    <div class="col-sm-10">
                        <input type="text" id="range_02">
                    </div>
                </div>
                <div class="form-group">
                    <label for="range_03" class="col-sm-2 control-label"><b>Prefix</b><span class="font-normal text-muted f-s-12 clearfix">showing grid and adding prefix "$"</span></label>
                    <div class="col-sm-10">
                        <input type="text" id="range_03">
                    </div>
                </div>
                <div class="form-group">
                    <label for="range_04" class="col-sm-2 control-label"><b>Range</b><span class="font-normal text-muted f-s-12 clearfix">Set up range with negative values</span></label>
                    <div class="col-sm-10">
                        <input type="text" id="range_04">
                    </div>
                </div>
                <div class="form-group">
                    <label for="range_05" class="col-sm-2 control-label"><b>Step</b><span class="font-normal text-muted f-s-12 clearfix">Using step 250</span></label>
                    <div class="col-sm-10">
                        <input type="text" id="range_05">
                    </div>
                </div>
                <div class="form-group">
                    <label for="range_06" class="col-sm-2 control-label"><b>Custom Values</b><span class="font-normal text-muted f-s-12 clearfix">Using any strings as values</span></label>
                    <div class="col-sm-10">
                        <input type="text" id="range_06">
                    </div>
                </div>
                <div class="form-group">
                    <label for="range_07" class="col-sm-2 control-label"><b>Prettify Numbers</b><span class="font-normal text-muted f-s-12 clearfix">Prettify enabled. Much better!</span></label>
                    <div class="col-sm-10">
                        <input type="text" id="range_07">
                    </div>
                </div>
                <div class="form-group">
                    <label for="range_08" class="col-sm-2 control-label"><b>Disabled</b><span class="font-normal text-muted f-s-12 clearfix">Lock slider by using disable option</span></label>
                    <div class="col-sm-10">
                        <input type="text" id="range_08">
                    </div>
                </div>
            </form>
        </div>
    </div>
</div><!-- Row -->





<?php require 'includes/footer_start.php' ?>
<!-- Ion slider -->
<script src="../plugins/ion-rangeslider/ion.rangeSlider.min.js"></script>
<script src="assets/pages/jquery.ui-sliders.js"></script>

<?php require 'includes/footer_end.php' ?>
