<?php require 'includes/header_start.php'; ?>

<?php require 'includes/header_end.php'; ?>



<!-- Page-Title -->
<div class="row">
    <div class="col-sm-12">
        <div class="page-title-box">
            <ol class="breadcrumb pull-right">
                <li><a href="#">Minton</a></li>
                <li><a href="#">Components</a></li>
                <li class="active">Carousel</li>
            </ol>
            <h4 class="page-title">Carousel</h4>
        </div>
    </div>
</div>


<div class="row">
    <div class="col-sm-12">
        <div class="card-box">
            <div class="row">
                <div class="col-sm-12">
                    <h4 class=" m-t-0 header-title"><b>Bootstrap Carousel</b></h4>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">

                    <p class="text-muted m-b-30 font-13">Add captions to your slides easily with the <code>.carousel-caption</code> element within any <code>.item</code>. </p>

                    <!-- START carousel-->
                    <div id="carousel-example-captions" data-ride="carousel" class="carousel slide">
                        <ol class="carousel-indicators">
                            <li data-target="#carousel-example-captions" data-slide-to="0" class="active"></li>
                            <li data-target="#carousel-example-captions" data-slide-to="1"></li>
                            <li data-target="#carousel-example-captions" data-slide-to="2"></li>
                        </ol>
                        <div role="listbox" class="carousel-inner">
                            <div class="item active">
                                <img src="assets/images/small/img1.jpg" alt="First slide image">
                                <div class="carousel-caption">
                                    <h3 class="text-white font-600">First slide label</h3>
                                    <p>
                                        Nulla vitae elit libero, a pharetra augue mollis interdum.
                                    </p>
                                </div>
                            </div>
                            <div class="item">
                                <img src="assets/images/small/img2.jpg" alt="First slide image">
                                <div class="carousel-caption">
                                    <h3 class="text-white font-600">Second slide label</h3>
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                    </p>
                                </div>
                            </div>
                            <div class="item">
                                <img src="assets/images/small/img3.jpg" alt="First slide image">
                                <div class="carousel-caption">
                                    <h3 class="text-white font-600">Third slide label</h3>
                                    <p>
                                        Praesent commodo cursus magna, vel scelerisque nisl consectetur.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <a href="#carousel-example-captions" role="button" data-slide="prev" class="left carousel-control"> <span aria-hidden="true" class="fa fa-angle-left"></span> <span class="sr-only">Previous</span> </a>
                        <a href="#carousel-example-captions" role="button" data-slide="next" class="right carousel-control"> <span aria-hidden="true" class="fa fa-angle-right"></span> <span class="sr-only">Next</span> </a>
                    </div>
                    <!-- END carousel-->
                </div>

                <div class="col-md-6">

                    <p class="text-muted m-b-30 font-13">A slideshow component for cycling through elements, like a carousel.</p>

                    <!-- START carousel-->
                    <div id="carousel-example-captions-1" data-ride="carousel" class="carousel slide">
                        <ol class="carousel-indicators">
                            <li data-target="#carousel-example-captions-1" data-slide-to="0" class="active"></li>
                            <li data-target="#carousel-example-captions-1" data-slide-to="1"></li>
                            <li data-target="#carousel-example-captions-1" data-slide-to="2"></li>
                        </ol>
                        <div role="listbox" class="carousel-inner">
                            <div class="item active">
                                <img src="assets/images/small/img1.jpg" alt="First slide image">
                            </div>
                            <div class="item">
                                <img src="assets/images/small/img2.jpg" alt="Second slide image">
                            </div>
                            <div class="item">
                                <img src="assets/images/small/img3.jpg" alt="Third slide image">
                            </div>
                        </div>

                    </div>
                    <!-- END carousel-->
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end row -->




<?php require 'includes/footer_start.php' ?>

<?php require 'includes/footer_end.php' ?>
