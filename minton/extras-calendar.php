<?php require 'includes/header_start.php'; ?>
<!--calendar css-->
<link href="../plugins/fullcalendar/dist/fullcalendar.css" rel="stylesheet" />

<?php require 'includes/header_end.php'; ?>



<!-- Page-Title -->
<div class="row">
    <div class="col-sm-12">
        <div class="page-title-box">
            <ol class="breadcrumb pull-right">
                <li><a href="#">Minton</a></li>
                <li><a href="#">Extras</a></li>
                <li class="active">Calendar</li>
            </ol>
            <h4 class="page-title">Calendar</h4>
        </div>
    </div>
</div>


<div class="row">
    <div class="col-lg-12">

        <div class="row">
            <div class="col-md-3">
                <div class="widget">
                    <div class="widget-body">
                        <div class="row">
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <a href="#" data-toggle="modal" data-target="#add-category" class="btn btn-lg btn-success btn-block waves-effect waves-light">
                                    <i class="fa fa-plus"></i> Create New
                                </a>
                                <div id="external-events" class="m-t-20">
                                    <br>
                                    <p>Drag and drop your event or click in the calendar</p>
                                    <div class="external-event bg-primary" data-class="bg-primary" style="position: relative;">
                                        <i class="fa fa-move"></i>My Event One
                                    </div>
                                    <div class="external-event bg-pink" data-class="bg-pink" style="position: relative;">
                                        <i class="fa fa-move"></i>My Event Two
                                    </div>
                                    <div class="external-event bg-info" data-class="bg-info" style="position: relative;">
                                        <i class="fa fa-move"></i>My Event Three
                                    </div>
                                    <div class="external-event bg-purple" data-class="bg-purple" style="position: relative;">
                                        <i class="fa fa-move"></i>My Event Four
                                    </div>
                                </div>

                                <!-- checkbox -->
                                <div class="checkbox m-t-40">
                                    <input id="drop-remove" type="checkbox">
                                    <label for="drop-remove">
                                        Remove after drop
                                    </label>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- end col-->
            <div class="col-md-9">
                <div class="card-box">
                    <div id="calendar"></div>
                </div>
            </div> <!-- end col -->
        </div>  <!-- end row -->

        <!-- BEGIN MODAL -->
        <div class="modal fade none-border" id="event-modal">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title"><strong>Add Event</strong></h4>
                    </div>
                    <div class="modal-body"></div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-success save-event waves-effect waves-light">Create event</button>
                        <button type="button" class="btn btn-danger delete-event waves-effect waves-light" data-dismiss="modal">Delete</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal Add Category -->
        <div class="modal fade none-border" id="add-category">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title"><strong>Add</strong> a category</h4>
                    </div>
                    <div class="modal-body">
                        <form role="form">
                            <div class="row">
                                <div class="col-md-6">
                                    <label class="control-label">Category Name</label>
                                    <input class="form-control form-white" placeholder="Enter name" type="text" name="category-name"/>
                                </div>
                                <div class="col-md-6">
                                    <label class="control-label">Choose Category Color</label>
                                    <select class="form-control form-white" data-placeholder="Choose a color..." name="category-color">
                                        <option value="success">Success</option>
                                        <option value="danger">Danger</option>
                                        <option value="info">Info</option>
                                        <option value="pink">Pink</option>
                                        <option value="primary">Primary</option>
                                        <option value="warning">Warning</option>
                                        <option value="inverse">Inverse</option>
                                    </select>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-danger waves-effect waves-light save-category" data-dismiss="modal">Save</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- END MODAL -->
    </div>
    <!-- end col-12 -->
</div> <!-- end row -->



<?php require 'includes/footer_start.php' ?>
<script src="../plugins/jquery-ui/jquery-ui.min.js"></script>
<script src="../plugins/select2/select2.min.js" type="text/javascript"></script>

<!-- BEGIN PAGE SCRIPTS -->
<script src="../plugins/moment/moment.js"></script>
<script src='../plugins/fullcalendar/dist/fullcalendar.min.js'></script>
<script src="assets/pages/jquery.fullcalendar.js"></script>

<?php require 'includes/footer_end.php' ?>
