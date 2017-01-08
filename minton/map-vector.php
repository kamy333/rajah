<?php require 'includes/header_start.php'; ?>
<!-- jvectormap -->
<link href="../plugins/jvectormap/jquery-jvectormap-2.0.2.css" rel="stylesheet" />

<?php require 'includes/header_end.php'; ?>



<!-- Page-Title -->
<div class="row">
    <div class="col-sm-12">
        <div class="page-title-box">
            <ol class="breadcrumb pull-right">
                <li><a href="#">Minton</a></li>
                <li><a href="#">Maps</a></li>
                <li class="active">Vector Map</li>
            </ol>
            <h4 class="page-title">Vector Map</h4>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-lg-12">
        <div class="card-box">
            <h4 class="m-t-0 m-b-20 header-title"><b>World Map</b></h4>

            <div id="world-map-markers" style="height: 500px"></div>
        </div>
    </div>
</div>



<div class="row">
    <div class="col-lg-6">
        <div class="card-box">
            <h4 class="m-t-0 m-b-20 header-title"><b>USA Map</b></h4>

            <div id="usa" style="height: 400px"></div>
        </div>
    </div>

    <div class="col-lg-6">
        <div class="card-box">
            <h4 class="m-t-0 m-b-20 header-title"><b>India Map</b></h4>

            <div id="india" style="height: 400px"></div>
        </div>
    </div>
</div>


<div class="row">
    <div class="col-lg-6">
        <div class="card-box">
            <h4 class="m-t-0 m-b-20 header-title"><b>UK Map</b></h4>

            <div id="uk" style="height: 400px"></div>
        </div>
    </div>

    <div class="col-lg-6">
        <div class="card-box">
            <h4 class="m-t-0 m-b-20 header-title"><b>Chicago Map</b></h4>

            <div id="chicago" style="height: 400px"></div>
        </div>
    </div>
</div>



<div class="row">
    <div class="col-lg-6">
        <div class="card-box">
            <h4 class="m-t-0 m-b-20 header-title"><b>Australia Map</b></h4>

            <div id="australia" style="height: 400px"></div>
        </div>
    </div>

    <div class="col-lg-6">
        <div class="card-box">
            <h4 class="m-t-0 m-b-20 header-title"><b>Canada Map</b></h4>

            <div id="canada" style="height: 400px"></div>
        </div>
    </div>
</div>



<div class="row">
    <div class="col-lg-6">
        <div class="card-box">
            <h4 class="m-t-0 m-b-20 header-title"><b>Germany Map</b></h4>

            <div id="germany" style="height: 400px"></div>
        </div>
    </div>

    <div class="col-lg-6">
        <div class="card-box">
            <h4 class="m-t-0 m-b-20 header-title"><b>Asia Map</b></h4>

            <div id="asia" style="height: 400px"></div>
        </div>
    </div>
</div>




<?php require 'includes/footer_start.php' ?>
<!-- jvectormap -->
<script src="../plugins/jvectormap/jquery-jvectormap-2.0.2.min.js"></script>
<script src="../plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<script src="../plugins/jvectormap/gdp-data.js"></script>
<script src="../plugins/jvectormap/jquery-jvectormap-us-aea-en.js"></script>
<script src="../plugins/jvectormap/jquery-jvectormap-uk-mill-en.js"></script>
<script src="../plugins/jvectormap/jquery-jvectormap-au-mill.js"></script>
<script src="../plugins/jvectormap/jquery-jvectormap-us-il-chicago-mill-en.js"></script>
<script src="../plugins/jvectormap/jquery-jvectormap-ca-lcc.js"></script>
<script src="../plugins/jvectormap/jquery-jvectormap-de-mill.js"></script>
<script src="../plugins/jvectormap/jquery-jvectormap-in-mill.js"></script>
<script src="../plugins/jvectormap/jquery-jvectormap-asia-mill.js"></script>
<script src="assets/pages/jvectormap.init.js"></script>

<?php require 'includes/footer_end.php' ?>
