<?php require 'includes/header_start.php'; ?>
<link href="../plugins/nestable/jquery.nestable.css" rel="stylesheet" />

<?php require 'includes/header_end.php'; ?>



<!-- Page-Title -->
<div class="row">
    <div class="col-sm-12">
        <div class="page-title-box">
            <ol class="breadcrumb pull-right">
                <li><a href="#">Minton</a></li>
                <li><a href="#">Components</a></li>
                <li class="active">Nestable Lists</li>
            </ol>
            <h4 class="page-title">Nestable Lists</h4>
        </div>
    </div>
</div>


<div class="row">
    <div class="col-lg-12">
        <div class="text-left" id="nestable_list_menu">
            <button type="button" class="btn btn-pink waves-effect waves-light" data-action="expand-all">Expand All</button>
            <button type="button" class="btn btn-purple waves-effect waves-light" data-action="collapse-all">Collapse All</button>
        </div>
    </div>
</div>
<!-- End row -->



<br>

<div class="row">
    <div class="col-sm-12">
        <div class="card-box">
            <div class="row">
                <div class="col-md-6">
                    <h4 class="m-t-0 header-title"><b>Nestable Lists 1</b></h4>
                    <p class="text-muted m-b-30 font-13">
                        Drag & drop hierarchical list with mouse and touch compatibility (jQuery plugin).
                    </p>

                    <div class="custom-dd dd" id="nestable_list_1">
                        <ol class="dd-list">
                            <li class="dd-item" data-id="1">
                                <div class="dd-handle">
                                    Item 1
                                </div>
                            </li>
                            <li class="dd-item" data-id="2">
                                <div class="dd-handle">
                                    Item 2
                                </div>
                                <ol class="dd-list">
                                    <li class="dd-item" data-id="3">
                                        <div class="dd-handle">
                                            Item 3
                                        </div>
                                    </li>
                                    <li class="dd-item" data-id="4">
                                        <div class="dd-handle">
                                            Item 4
                                        </div>
                                    </li>
                                    <li class="dd-item" data-id="5">
                                        <div class="dd-handle">
                                            Item 5
                                        </div>
                                        <ol class="dd-list">
                                            <li class="dd-item" data-id="6">
                                                <div class="dd-handle">
                                                    Item 6
                                                </div>
                                            </li>
                                            <li class="dd-item" data-id="7">
                                                <div class="dd-handle">
                                                    Item 7
                                                </div>
                                            </li>
                                            <li class="dd-item" data-id="8">
                                                <div class="dd-handle">
                                                    Item 8
                                                </div>
                                            </li>
                                        </ol>
                                    </li>
                                    <li class="dd-item" data-id="9">
                                        <div class="dd-handle">
                                            Item 9
                                        </div>
                                    </li>
                                    <li class="dd-item" data-id="10">
                                        <div class="dd-handle">
                                            Item 10
                                        </div>
                                    </li>
                                </ol>
                            </li>

                        </ol>
                    </div>
                </div><!-- end col -->

                <div class="col-md-6">
                    <h4 class="m-t-0 header-title"><b>Nestable Lists 2</b></h4>
                    <p class="text-muted m-b-30 font-13">
                        Drag & drop hierarchical list with mouse and touch compatibility (jQuery plugin).
                    </p>

                    <div class="custom-dd dd" id="nestable_list_2">
                        <ol class="dd-list">
                            <li class="dd-item" data-id="11">
                                <div class="dd-handle">
                                    Item 11
                                </div>
                            </li>
                            <li class="dd-item" data-id="12">
                                <div class="dd-handle">
                                    Item 12
                                </div>
                            </li>
                            <li class="dd-item" data-id="13">
                                <div class="dd-handle">
                                    Item 13
                                </div>
                            </li>
                            <li class="dd-item" data-id="14">
                                <div class="dd-handle">
                                    Item 14
                                </div>
                            </li>
                            <li class="dd-item" data-id="15">
                                <div class="dd-handle">
                                    Item 15
                                </div>
                                <ol class="dd-list">
                                    <li class="dd-item" data-id="16">
                                        <div class="dd-handle">
                                            Item 16
                                        </div>
                                    </li>
                                    <li class="dd-item" data-id="17">
                                        <div class="dd-handle">
                                            Item 17
                                        </div>
                                    </li>
                                    <li class="dd-item" data-id="18">
                                        <div class="dd-handle">
                                            Item 18
                                        </div>
                                    </li>
                                </ol>
                            </li>
                        </ol>
                    </div>
                </div> <!-- end col -->
            </div> <!-- end row -->
        </div> <!-- end card-box -->
    </div> <!-- end col -->
</div>
<!-- end Row -->

<div class="row">
    <div class="col-sm-12">
        <div class="card-box">
            <div class="row">
                <div class="col-md-6">
                    <h4 class="m-t-0 header-title"><b>Nestable Lists 3</b></h4>
                    <p class="text-muted m-b-30 font-13">
                        Drag & drop hierarchical list with mouse and touch compatibility (jQuery plugin).
                    </p>

                    <div class="custom-dd-empty dd" id="nestable_list_3">
                        <ol class="dd-list">
                            <li class="dd-item dd3-item" data-id="13">
                                <div class="dd-handle dd3-handle"></div>
                                <div class="dd3-content">
                                    Item 13
                                </div>
                            </li>
                            <li class="dd-item dd3-item" data-id="14">
                                <div class="dd-handle dd3-handle"></div>
                                <div class="dd3-content">
                                    Item 14
                                </div>
                            </li>
                            <li class="dd-item dd3-item" data-id="15">
                                <div class="dd-handle dd3-handle"></div>
                                <div class="dd3-content">
                                    Item 15
                                </div>
                                <ol class="dd-list">
                                    <li class="dd-item dd3-item" data-id="16">
                                        <div class="dd-handle dd3-handle"></div>
                                        <div class="dd3-content">
                                            Item 16
                                        </div>
                                    </li>
                                    <li class="dd-item dd3-item" data-id="17">
                                        <div class="dd-handle dd3-handle"></div>
                                        <div class="dd3-content">
                                            Item 17
                                        </div>
                                    </li>
                                    <li class="dd-item dd3-item" data-id="18">
                                        <div class="dd-handle dd3-handle"></div>
                                        <div class="dd3-content">
                                            Item 18
                                        </div>
                                    </li>
                                </ol>
                            </li>
                        </ol>
                    </div>
                </div><!-- end col -->

            </div> <!-- end row -->
        </div> <!-- end card-box -->
    </div> <!-- end col -->
</div>
<!-- end Row -->




<?php require 'includes/footer_start.php' ?>
<!--Nestable list-->
<script src="../plugins/nestable/jquery.nestable.js"></script>
<script src="assets/pages/nestable.js"></script>

<?php require 'includes/footer_end.php' ?>
