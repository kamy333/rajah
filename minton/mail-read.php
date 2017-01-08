<?php require 'includes/header_start.php'; ?>
<link rel="stylesheet" href="../plugins/summernote/dist/summernote.css">

<?php require 'includes/header_end.php'; ?>



<!-- Page-Title -->
<div class="row">
    <div class="col-sm-12">
        <div class="page-title-box">
            <ol class="breadcrumb pull-right">
                <li><a href="#">Minton</a></li>
                <li><a href="#">Mail</a></li>
                <li class="active">Email read</li>
            </ol>
            <h4 class="page-title">Email read</h4>
        </div>
    </div>
</div>



<div class="row">

    <!-- Left sidebar -->
    <div class="col-lg-3 col-md-4">

        <div class="m-t-20">
            <a href="mail-compose.php" class="btn btn-danger btn-custom btn-block waves-effect waves-light">Compose</a>

            <div class="list-group mail-list  m-t-20">
                <a href="mail-inbox.php" class="list-group-item b-0"><i class="fa fa-download m-r-10"></i>Inbox <b>(8)</b></a>
                <a href="#" class="list-group-item b-0"><i class="fa fa-star-o m-r-10"></i>Starred</a>
                <a href="#" class="list-group-item b-0"><i class="fa fa-file-text-o m-r-10"></i>Draft <b>(20)</b></a>
                <a href="#" class="list-group-item b-0"><i class="fa fa-paper-plane-o m-r-10"></i>Sent Mail</a>
                <a href="#" class="list-group-item b-0"><i class="fa fa-trash-o m-r-10"></i>Trash <b>(354)</b></a>
            </div>


            <h3 class="panel-title m-t-40">Labels</h3>

            <div class="list-group b-0 mail-list">
                <a href="#" class="list-group-item b-0"><span class="fa fa-circle text-info m-r-10"></span>Web App</a>
                <a href="#" class="list-group-item b-0"><span class="fa fa-circle text-warning m-r-10"></span>Project 1</a>
                <a href="#" class="list-group-item b-0"><span class="fa fa-circle text-purple m-r-10"></span>Project 2</a>
                <a href="#" class="list-group-item b-0"><span class="fa fa-circle text-pink m-r-10"></span>Friends</a>
                <a href="#" class="list-group-item b-0"><span class="fa fa-circle text-success m-r-10"></span>Family</a>
            </div>

        </div>

    </div>
    <!-- End Left sidebar -->

    <!-- Right Sidebar -->
    <div class="col-lg-9 col-md-8">
        <div class="row">
            <div class="col-lg-12">
                <div class="btn-toolbar m-t-20" role="toolbar">
                    <div class="btn-group">
                        <button type="button" class="btn btn-primary waves-effect waves-light "><i class="fa fa-inbox"></i></button>
                        <button type="button" class="btn btn-primary waves-effect waves-light "><i class="fa fa-exclamation-circle"></i></button>
                        <button type="button" class="btn btn-primary waves-effect waves-light "><i class="fa fa-trash-o"></i></button>
                    </div>
                    <div class="btn-group">
                        <button type="button" class="btn btn-primary dropdown-toggle waves-effect waves-light" data-toggle="dropdown" aria-expanded="false">
                            <i class="fa fa-folder"></i>
                            <b class="caret"></b>
                        </button>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="#">Action</a></li>
                            <li><a href="#">Another action</a></li>
                            <li><a href="#">Something else here</a></li>
                            <li class="divider"></li>
                            <li><a href="#">Separated link</a></li>
                        </ul>
                    </div>
                    <div class="btn-group">
                        <button type="button" class="btn btn-primary waves-effect waves-light  dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                            <i class="fa fa-tag"></i>
                            <b class="caret"></b>
                        </button>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="#">Action</a></li>
                            <li><a href="#">Another action</a></li>
                            <li><a href="#">Something else here</a></li>
                            <li class="divider"></li>
                            <li><a href="#">Separated link</a></li>
                        </ul>
                    </div>

                    <div class="btn-group">
                        <button type="button" class="btn btn-primary waves-effect waves-light  dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                            More
                            <span class="caret"></span>
                        </button>
                        <ul class="dropdown-menu">
                            <li><a href="#">Dropdown link</a></li>
                            <li><a href="#">Dropdown link</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div> <!-- End row -->


        <div class="row">
            <div class="col-sm-12">
                <div class="card-box m-t-20">
                    <h4 class="m-t-0"><b>Hi Bro, How are you?</b></h4>

                    <hr/>

                    <div class="media m-b-30 ">
                        <a href="#" class="pull-left">
                            <img alt="" src="assets/images/users/avatar-2.jpg" class="media-object thumb-sm img-circle">
                        </a>
                        <div class="media-body">
                            <span class="media-meta pull-right">07:23 AM</span>
                            <h4 class="text-primary m-0">Jonathan Smith</h4>
                            <small class="text-muted">From: jonathan@domain.com</small>
                        </div>
                    </div> <!-- media -->

                    <p><b>Hi Bro...</b></p>
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.</p>
                    <p>Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi.</p>
                    <p>Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel, luctus pulvinar,</p>

                    <hr/>

                    <h4> <i class="fa fa-paperclip m-r-10 m-b-10"></i> Attachments <span>(3)</span> </h4>

                    <div class="row">
                        <div class="col-sm-2 col-xs-4">
                            <a href="#"> <img src="assets/images/small/img1.jpg" alt="attachment" class="img-thumbnail img-responsive"> </a>
                        </div>
                        <div class="col-sm-2 col-xs-4">
                            <a href="#"> <img src="assets/images/small/img2.jpg" alt="attachment" class="img-thumbnail img-responsive"> </a>
                        </div>
                        <div class="col-sm-2 col-xs-4">
                            <a href="#"> <img src="assets/images/small/img3.jpg" alt="attachment" class="img-thumbnail img-responsive"> </a>
                        </div>
                    </div>
                </div>

            </div>
        </div>


        <div class="row">
            <div class="col-sm-12">
                <div class="media m-b-0">
                    <a href="#" class="pull-left">
                        <img alt="" src="assets/images/users/avatar-9.jpg" class="media-object thumb-sm img-circle">
                    </a>
                    <div class="media-body">
                        <div class="card-box p-0">
                            <div class="summernote">
                                <h6>This is an Air-mode editable area.</h6>
                                <ul>
                                    <li>
                                        Select a text to reveal the toolbar.
                                    </li>
                                    <li>
                                        Edit rich document on-the-fly, so elastic!
                                    </li>
                                </ul>
                                <p>
                                    End of air-mode area
                                </p>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="text-right">
                    <button type="button" class="btn btn-primary waves-effect waves-light w-md m-b-30">Send</button>
                </div>
            </div>
        </div>

        <!-- End row -->



    </div> <!-- end Col-9 -->

</div><!-- End row -->





<?php require 'includes/footer_start.php' ?>
<!-- summer note -->
<script src="../plugins/summernote/dist/summernote.min.js"></script>

<script>
    jQuery(document).ready(function(){

        $('.summernote').summernote({
            airMode: true
        });
    });
</script>

<?php require 'includes/footer_end.php' ?>
