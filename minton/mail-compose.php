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
                <li class="active">Compose Mail</li>
            </ol>
            <h4 class="page-title">Compose Mail</h4>
        </div>
    </div>
</div>

<div class="row">

    <!-- Left sidebar -->
    <div class="col-lg-3 col-md-4">

        <div class="m-t-20">
            <a href="mail-inbox.php" class="btn btn-danger btn-custom btn-block waves-effect waves-light">Back to inbox</a>

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
            <div class="col-sm-12">
                <div class="card-box m-t-20">
                    <div class="p-20">
                        <form role="form">
                            <div class="form-group">
                                <input type="email" class="form-control" placeholder="To">
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-6">
                                        <input type="email" class="form-control" placeholder="Cc">
                                    </div>
                                    <div class="col-md-6">
                                        <input type="email" class="form-control" placeholder="Bcc">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Subject">
                            </div>
                            <div class="form-group">
                                <div class="summernote">
                                    <h6>Hello Summernote</h6>
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

                            <div class="btn-toolbar form-group m-b-0">
                                <div class="pull-right">
                                    <button type="button" class="btn btn-success waves-effect waves-light m-r-5"><i class="fa fa-floppy-o"></i></button>
                                    <button type="button" class="btn btn-success waves-effect waves-light m-r-5"><i class="fa fa-trash-o"></i></button>
                                    <button class="btn btn-purple waves-effect waves-light"> <span>Send</span> <i class="fa fa-send m-l-10"></i> </button>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>

            </div>
        </div>

        <!-- End row -->


    </div> <!-- end Col-9 -->

</div><!-- End row -->






<?php require 'includes/footer_start.php' ?>
<!-- Summer note -->
<script src="../plugins/summernote/dist/summernote.min.js"></script>

<script>
    jQuery(document).ready(function () {

        $('.summernote').summernote({
            height: 350,                 // set editor height
            minHeight: null,             // set minimum height of editor
            maxHeight: null,             // set maximum height of editor
            focus: false                 // set focus to editable area after initializing summernote
        });
    });
</script>

<?php require 'includes/footer_end.php' ?>
