<?php require 'includes/header_start.php'; ?>

<?php require 'includes/header_end.php'; ?>



<!-- Page-Title -->
<div class="row">
    <div class="col-sm-12">
        <div class="page-title-box">
            <ol class="breadcrumb pull-right">
                <li><a href="#">Minton</a></li>
                <li><a href="#">Maps</a></li>
                <li class="active">Google Maps</li>
            </ol>
            <h4 class="page-title">Google Maps</h4>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-lg-6">
        <div class="card-box">
            <h4 class="m-t-0 m-b-20 header-title"><b>Markers</b></h4>

            <div id="gmaps-markers" class="gmaps"></div>
        </div>
    </div>

    <div class="col-lg-6">
        <div class="card-box">
            <h4 class="m-t-0 m-b-20 header-title"><b>Overlays</b></h4>

            <div id="gmaps-overlay" class="gmaps"></div>
        </div>
    </div>
</div>


<div class="row">
    <div class="col-lg-6">
        <div class="card-box">
            <h4 class="m-t-0 m-b-20 header-title"><b>Street View Panoramas</b></h4>

            <div id="panorama" class="gmaps-panaroma"></div>
        </div>
    </div>

    <div class="col-lg-6">
        <div class="card-box">
            <h4 class="m-t-0 m-b-20 header-title"><b>Map Types</b></h4>

            <div id="gmaps-types" class="gmaps"></div>
        </div>
    </div>
</div>




<?php require 'includes/footer_start.php' ?>
<!-- google maps api -->
<script src="http://maps.google.com/maps/api/js?sensor=true"></script>
<!-- Gmaps file -->
<script src="../plugins/gmaps/gmaps.min.js"></script>
<!-- demo codes -->
<script src="assets/pages/jquery.gmaps.js"></script>


<?php require 'includes/footer_end.php' ?>
