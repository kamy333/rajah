<?php require 'includes/header_start.php'; ?>
<!-- Treeview css -->
<link href="../plugins/jstree/style.css" rel="stylesheet" type="text/css" />

<?php require 'includes/header_end.php'; ?>



<!-- Page-Title -->
<div class="row">
    <div class="col-sm-12">
        <div class="page-title-box">
            <ol class="breadcrumb pull-right">
                <li><a href="#">Minton</a></li>
                <li><a href="#">Extras</a></li>
                <li class="active">Tree View</li>
            </ol>
            <h4 class="page-title">Tree View</h4>
        </div>
    </div>
</div>


<div class="row">
    <div class="col-md-6">
        <div class="card-box">
            <h4 class="text-dark header-title m-t-0 m-b-30">Basic Tree</h4>

            <div id="basicTree">
                <ul>
                    <li>Minton
                        <ul>
                            <li data-jstree='{"opened":true}'>Assets
                                <ul>
                                    <li data-jstree='{"type":"file"}'>Css</li>
                                    <li data-jstree='{"opened":true}'>Plugins
                                        <ul>
                                            <li data-jstree='{"selected":true,"type":"file"}'>Plugin one</li>
                                            <li data-jstree='{"type":"file"}'>Plugin two</li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li data-jstree='{"opened":true}'>Email Template
                                <ul>
                                    <li data-jstree='{"type":"file"}'>Email one</li>
                                    <li data-jstree='{"type":"file"}'>Email two</li>
                                </ul>
                            </li>
                            <li data-jstree='{"icon":"md md-dashboard"}'>Dashboard</li>
                            <li data-jstree='{"icon":"md md-format-underline"}'>Typography</li>
                            <li data-jstree='{"opened":true}'>User Interface
                                <ul>
                                    <li data-jstree='{"type":"file"}'>Buttons</li>
                                    <li data-jstree='{"type":"file"}'>Cards</li>
                                </ul>
                            </li>
                            <li data-jstree='{"icon":"md md-my-library-books"}'>Forms</li>
                            <li data-jstree='{"icon":"md md-format-list-bulleted"}'>Tables</li>
                        </ul>
                    </li>
                    <li data-jstree='{"type":"file"}'>Frontend</li>
                </ul>
            </div>
        </div>
    </div><!-- end col -->

    <div class="col-md-6">
        <div class="card-box">
            <h4 class="text-dark header-title m-t-0 m-b-30">Checkbox Tree</h4>

            <div id="checkTree">
                <ul>
                    <li>Minton
                        <ul>
                            <li data-jstree='{"opened":true}'>Assets
                                <ul>
                                    <li data-jstree='{"type":"file"}'>Css</li>
                                    <li data-jstree='{"opened":true}'>Plugins
                                        <ul>
                                            <li data-jstree='{"selected":true,"type":"file"}'>Plugin one</li>
                                            <li data-jstree='{"type":"file"}'>Plugin two</li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li data-jstree='{"opened":true}'>Email Template
                                <ul>
                                    <li data-jstree='{"type":"file"}'>Email one</li>
                                    <li data-jstree='{"type":"file"}'>Email two</li>
                                </ul>
                            </li>
                            <li data-jstree='{"icon":"md md-dashboard"}'>Dashboard</li>
                            <li data-jstree='{"icon":"md md-format-underline"}'>Typography</li>
                            <li data-jstree='{"opened":true}'>User Interface
                                <ul>
                                    <li data-jstree='{"type":"file"}'>Buttons</li>
                                    <li data-jstree='{"type":"file"}'>Cards</li>
                                </ul>
                            </li>
                            <li data-jstree='{"icon":"md md-my-library-books"}'>Forms</li>
                            <li data-jstree='{"icon":"md md-format-list-bulleted"}'>Tables</li>
                        </ul>
                    </li>
                    <li data-jstree='{"type":"file"}'>Frontend</li>
                </ul>
            </div>
        </div>
    </div><!-- end col -->
</div>
<!-- end row -->


<div class="row">
    <div class="col-md-6">
        <div class="card-box">
            <h4 class="text-dark header-title m-t-0 m-b-30">Drag &amp; Drop</h4>

            <div id="dragTree">
                <ul>
                    <li>Minton
                        <ul>
                            <li data-jstree='{"opened":true}'>Assets
                                <ul>
                                    <li data-jstree='{"type":"file"}'>Css</li>
                                    <li data-jstree='{"opened":true}'>Plugins
                                        <ul>
                                            <li data-jstree='{"selected":true,"type":"file"}'>Plugin one</li>
                                            <li data-jstree='{"type":"file"}'>Plugin two</li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li data-jstree='{"opened":true}'>Email Template
                                <ul>
                                    <li data-jstree='{"type":"file"}'>Email one</li>
                                    <li data-jstree='{"type":"file"}'>Email two</li>
                                </ul>
                            </li>
                            <li data-jstree='{"icon":"md md-dashboard"}'>Dashboard</li>
                            <li data-jstree='{"icon":"md md-format-underline"}'>Typography</li>
                            <li data-jstree='{"opened":true}'>User Interface
                                <ul>
                                    <li data-jstree='{"type":"file"}'>Buttons</li>
                                    <li data-jstree='{"type":"file"}'>Cards</li>
                                </ul>
                            </li>
                            <li data-jstree='{"icon":"md md-my-library-books"}'>Forms</li>
                            <li data-jstree='{"icon":"md md-format-list-bulleted"}'>Tables</li>
                        </ul>
                    </li>
                    <li data-jstree='{"type":"file"}'>Frontend</li>
                </ul>
            </div>
        </div>
    </div><!-- end col -->

    <div class="col-md-6">
        <div class="card-box">
            <h4 class="text-dark header-title m-t-0 m-b-30">Ajax</h4>
            <div id="ajaxTree"></div>
        </div>
    </div><!-- end col -->
</div>
<!-- end row -->





<?php require 'includes/footer_start.php' ?>
<!-- Tree view js -->
<script src="../plugins/jstree/jstree.min.js"></script>
<script src="assets/pages/jquery.tree.js"></script>

<?php require 'includes/footer_end.php' ?>
