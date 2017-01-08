<?php require 'includes/header_start.php'; ?>
<link href="../plugins/jquery-circliful/css/jquery.circliful.css" rel="stylesheet" type="text/css" />

<?php require 'includes/header_end.php'; ?>



<!-- Page-Title -->
<div class="row">
    <div class="col-sm-12">
        <div class="page-title-box">
            <ol class="breadcrumb pull-right">
                <li><a href="#">Minton</a></li>
                <li><a href="#">Charts</a></li>
                <li class="active">Other Charts</li>
            </ol>
            <h4 class="page-title">Other Charts</h4>
        </div>
    </div>
</div>


<div class="row">
    <div class="col-sm-12">
        <div class="card-box">
            <h4 class="m-t-0 header-title"><b>Jquery Knob</b></h4>
            <p class="text-muted m-b-30 font-13">
                Your awesome text goes here.
            </p>

            <div class="row">
                <div class="col-sm-6 col-lg-3 text-center">
                    <div class="m-b-25">
                        <input class="knob" data-width="150" data-height="150" data-fgColor="#3bafda" data-displayInput=false value="35"/>
                        <h5 class="font-600 text-muted">Disable display input</h5>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3 text-center">
                    <div class="m-b-25">
                        <input class="knob" data-width="150" data-height="150" data-cursor=true data-fgColor="#00b19d" value="29"/>
                        <h5 class="font-600 text-muted">Cursor mode</h5>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3 text-center">
                    <div class="m-b-25">
                        <input class="knob" data-width="150" data-height="150" data-min="-100" data-fgColor="#ffaa00" data-displayPrevious=true value="44"/>
                        <h5 class="font-600 text-muted">Display previous value</h5>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3 text-center">
                    <div class="m-b-25">
                        <input class="knob" data-width="150" data-height="150" data-min="-100" data-fgColor="#3ddcf7" data-displayPrevious=true data-angleOffset=-125 data-angleArc=250 value="44"/>
                        <h5 class="font-600 text-muted">Angle offset and arc</h5>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-6 col-lg-3 text-center">
                    <div class="p-20">
                        <input class="knob" data-width="150" data-height="150" data-angleOffset="90" data-linecap="round" data-fgColor="#f76397" value="35"/>
                        <h5 class="font-600 text-muted">Angle offset</h5>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3 text-center">
                    <div class="p-20">
                        <input class="knob" data-width="150" data-height="150" data-min="-15000" data-displayPrevious=true data-max="15000" data-step="1000" value="-11000" data-fgColor="#7266ba"/>
                        <h5 class="font-600 text-muted">5-digit values, step 1000</h5>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3 text-center">
                    <div class="p-20">
                        <input class="knob" data-width="150" data-height="150" data-linecap=round data-fgColor="#98a6ad" value="80" data-skin="tron" data-angleOffset="180" data-readOnly=true data-thickness=".1"/>
                        <h5 class="font-600 text-muted">Readonly</h5>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3 text-center">
                    <div class="p-20">
                        <input class="knob" data-width="150" data-height="150" data-displayPrevious=true data-fgColor="#ef5350" data-skin="tron" data-cursor=true value="75" data-thickness=".2"data-angleOffset=-125 data-angleArc=250 value="44"/>
                        <h5 class="font-600 text-muted">Angle offset and arc</h5>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<!-- End row -->


<div class="row">

    <div class="col-md-12">
        <div class="card-box">
            <h4 class="m-t-0 header-title"><b>Easy Pie Chart</b></h4>
            <p class="text-muted m-b-30 font-13">
                Your awesome text goes here.
            </p>

            <div class="row text-center">
                <div class="col-sm-6 col-lg-3">
                    <div class="chart easy-pie-chart-1" data-percent="86">
                        <span class="percent">Nice</span>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-3">
                    <div class="chart easy-pie-chart-2" data-percent="86">
                        <span class="percent"></span>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-3">
                    <div class="chart easy-pie-chart-3" data-percent="86">
                        <span class="percent"></span>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-3">
                    <div class="chart easy-pie-chart-4" data-percent="56">
                        <span class="percent"></span>
                    </div>
                </div>

            </div>
        </div>
    </div>

</div> <!-- End row -->


<div class="row">

    <div class="col-md-12">
        <div class="card-box">
            <h4 class="m-t-0 header-title"><b>Circliful Charts</b></h4>
            <p class="text-muted m-b-30 font-13">
                Your awesome text goes here.
            </p>

            <div class="row text-center">
                <div class="col-sm-6 col-lg-3">
                    <div class="circliful-chart m-b-30" data-dimension="180" data-text="35%" data-info="New Clients" data-width="20" data-fontsize="24" data-percent="35" data-fgcolor="#5fbeaa" data-bgcolor="#ebeff2" data-fill="#f4f8fb"></div>
                </div>

                <div class="col-sm-6 col-lg-3">
                    <div class="circliful-chart m-b-30" data-dimension="180" data-text="35%" data-info="New Clients" data-width="30" data-fontsize="24" data-percent="35" data-fgcolor="#7266ba" data-bgcolor="#ebeff2"></div>
                </div>

                <div class="col-sm-6 col-lg-3">
                    <div class="circliful-chart m-b-30" data-startdegree="90" data-dimension="180" data-text="35%" data-info="New Clients" data-width="30" data-fontsize="24" data-percent="35" data-fgcolor="#61a9dc" data-bgcolor="#ebeff2"></div>
                </div>

                <div class="col-sm-6 col-lg-3">
                    <div class="circliful-chart m-b-30" data-startdegree="180" data-dimension="180" data-text="35%" data-info="New Clients" data-width="30" data-fontsize="24" data-percent="35" data-fgcolor="#4c5667" data-bgcolor="#ebeff2"></div>
                </div>

            </div>


            <div class="row text-center">
                <div class="col-sm-6 col-lg-3">
                    <div class="circliful-chart" data-dimension="200" data-text="35%" data-info="New Clients" data-width="30" data-fontsize="24" data-percent="35" data-fgcolor="#34d3eb" data-bgcolor="#ebeff2" data-type="half" data-fill="#f4f8fb"></div>
                </div>

                <div class="col-sm-6 col-lg-3">
                    <div class="circliful-chart" data-dimension="200" data-text="" data-info="New Clients" data-width="30" data-fontsize="24" data-percent="35" data-fgcolor="#ffbd4a" data-bgcolor="#ebeff2" data-type="half" data-icon="fa-bed"></div>
                </div>

                <div class="col-sm-6 col-lg-3">
                    <div class="circliful-chart" data-startdegree="45" data-dimension="200" data-text="50%" data-info="New Clients" data-width="30" data-fontsize="24" data-percent="50" data-fgcolor="#fb6d9d" data-bgcolor="#ebeff2" data-type="half" data-fill="#f4f8fb"></div>
                </div>

            </div>
        </div>
    </div>

</div> <!-- End row -->




<?php require 'includes/footer_start.php' ?>
<!-- EASY PIE CHART JS -->
<script src="../plugins/jquery.easy-pie-chart/dist/easypiechart.min.js"></script>
<script src="../plugins/jquery.easy-pie-chart/dist/jquery.easypiechart.min.js"></script>
<script src="assets/pages/easy-pie-chart.init.js"></script>

<!-- KNOB JS -->
<!--[if IE]>
<script type="text/javascript" src="../plugins/jquery-knob/excanvas.js"></script>
<![endif]-->
<script src="../plugins/jquery-knob/jquery.knob.js"></script>

<!-- Circliful -->
<script src="../plugins/jquery-circliful/js/jquery.circliful.min.js"></script>

<script>
    $(function() {
        $(".knob").knob();
        $('.circliful-chart').circliful();
    });
</script>

<?php require 'includes/footer_end.php' ?>
