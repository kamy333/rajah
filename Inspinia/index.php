<?php require_once('../includes/initialize.php'); ?>

<?php include(HEADER_PUBLIC) ;?>
<?php include_once(NAV_PUBLIC) ?>
    <div class="row">
        <div class="col-lg-2 col-md-2 col-md-offset-6">
            <div class="text-center m-t-lg">
                <ul class="list-group">
                    <li class="list-group-item"><a style="width: 19em;" class="btn btn-primary" href="index_gallery.php"><strong>Go to Desiree Wedding Gallery</strong></a></li>

                </ul>
            </div>
        </div>

        <div class="pull-right">
            <p>You can stop music here!</p>
            <audio controls>
<!--                <source src="horse.ogg" type="audio/ogg">-->
                <source src="img/audio/SomewhereOvertheRainbow.mp3" type="audio/mpeg">
                <source src="img/audio/ArmikLagrimasDeGuitarra.mp3" type="audio/mpeg">
                Your browser does not support the audio element.
            </audio>
        </div>
    </div>

        <div class="wrapper wrapper-content">
            <div class="container">



                <div class="row">


                    <div class="col-lg-4 ">
                        <div class="ibox float-e-margins">

                            <div class="ibox-content">
                                <div class="carousel slide" id="carousel1">
                                    <div class="carousel-inner">

                                        <div class="item active">
                                            <img alt="image"  class="img-responsive" src="img/DesireeWedding/Chupah1.jpg">
                                        </div>


                                        
      <?php echo get_picture_folder_bootstrap_gallery("DesireeWedding","Engagement",$folder_project_name) ?>

                                        
                                        <div class="item">
                                            <img alt="image" class="img-responsive" src="img/kamy.jpg">
                                        </div>
                                        
                                        <div class="item">
                                            <img alt="image"  class="img-responsive" src="img/admin.jpg">
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


                    <div class="col-lg-4 col-md-4">
                        <div class="ibox float-e-margins">

                            <div class="ibox-content">
                                <div class="text-center m-t-lg">
                                    <!-- The Gallery as inline carousel, can be positioned anywhere on the page -->                                 Videos - click inside to start video
                                    <div id="blueimp-video-carousel" class="blueimp-gallery blueimp-gallery-controls blueimp-gallery-carousel">
                                        <div class="slides"></div>
                                        <h3 class="title"></h3>
                                        <a class="prev">‹</a>
                                        <a class="next">›</a>
                                        <a class="play-pause"></a>
                                    </div>


                                </div>
                            </div>
                        </div>
                    </div>

                    






<!--                <div class="row">-->
                    <div class="col-lg-4 ">
                        <div class="ibox float-e-margins">

                            <div class="ibox-content">
                                <div class="carousel slide" id="carousel2">
                                    <div class="carousel-inner">

                                        <div class="item active">
                                            <img alt="image"  class="img-responsive" src="img/Famille/EngagementMamanPapa.jpg">
                                        </div>


                                        <?php echo get_picture_folder_bootstrap_gallery("Famille","Famille",$folder_project_name,true) ?>

                                    </div>
                                    <a data-slide="prev" href="#carousel2" class="left carousel-control">
                                        <span class="icon-prev"></span>
                                    </a>
                                    <a data-slide="next" href="#carousel2" class="right carousel-control">
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