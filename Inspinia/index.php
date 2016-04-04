<?php require_once('../includes/initialize.php'); ?>

<?php include(HEADER_PUBLIC) ;?>
<?php include_once(NAV_PUBLIC) ?>
            
        <div class="wrapper wrapper-content">
            <div class="container">

                <div class="row">
                    <div class="col-lg-12">
                        <div class="ibox float-e-margins">

                            <div class="ibox-content">
                                <div class="text-center m-t-lg">
                                    <h1>Welcome to <?php echo $logo?> public page </h1>

                                        <p><small>Bring together beautiful design and data! Manage everything and securely on the web and access it on every device, anywhere!</small></p>
                                        <p> <small> My name Kamran Nafisspour and owner of this website!</small></p>


<!--                                        <span><img alt="image" class=""  style='width:2em;height:2em;' src="--><?php //echo $path;?><!--img/admin.jpg" /></span>-->

                                </div>
                            </div>
                        </div>
                    </div>


                </div>
                
                

                <div class="row">
                    <div class="col-lg-5 col-lg-offset-3">
                        <div class="ibox float-e-margins">
                            <div class="ibox-title">
                                <div class="row">
                                <div class="col-lg-offset-6">
                                <h5>Photos</h5>
                                </div>
                                </div>
                                <div class="ibox-tools">
                                    <a class="collapse-link">
                                        <i class="fa fa-chevron-up"></i>
                                    </a>
                                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                                        <i class="fa fa-wrench"></i>
                                    </a>
                                    <ul class="dropdown-menu dropdown-user">
                                        <li><a href="#">Config option 1</a>
                                        </li>
                                        <li><a href="#">Config option 2</a>
                                        </li>
                                    </ul>
                                    <a class="close-link">
                                        <i class="fa fa-times"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="ibox-content">
                                <div class="carousel slide" id="carousel1">
                                    <div class="carousel-inner">
                                        <div class="item active">
                                            <img alt="image" class="img-responsive" src="img/kamy.jpg">
                                        </div>
                                        <div class="item">
                                            <img alt="image"  class="img-responsive" src="img/admin.jpg">
                                        </div>
                                        <div class="item ">
                                            <img alt="image" class="img-responsive" src="img/Capture.PNG">
                                        </div>

                                    </div>
                                    <a data-slide="prev" href="#carousel1" class="left carousel-control">
                                        <span class="icon-prev"></span>
                                    </a>
                                    <a data-slide="next" href="#carousel1" class="right carousel-control">
                                        <span class="icon-next"></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>



            </div>

        </div>


<?php include(FOOTER_PUBLIC) ;?>