<?php require 'includes/header_start.php'; ?>

<link href="../plugins/custombox/dist/custombox.min.css" rel="stylesheet">
<?php require 'includes/header_end.php'; ?>


<!-- Page-Title -->
<div class="row">
    <div class="col-sm-12">
        <div class="page-title-box">
            <ol class="breadcrumb pull-right">
                <li><a href="#">Minton</a></li>
                <li><a href="#">UI Kit</a></li>
                <li class="active">Modals</li>
            </ol>
            <h4 class="page-title">Modals</h4>
        </div>
    </div>
</div>
<!-- end row -->


<div class="row">
    <div class="col-md-12">
        <div class="card-box">
            <h4 class="header-title m-t-0"><b>Bootstrap Modals (default)</b></h4>
            <p class="text-muted m-b-20 font-13">
                A rendered modal with header, body, and set of actions in the footer.
            </p>

            <!-- sample modal content -->
            <div id="myModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                            <h4 class="modal-title" id="myModalLabel">Modal Heading</h4>
                        </div>
                        <div class="modal-body">
                            <h4>Text in a modal</h4>
                            <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula.</p>
                            <hr>
                            <h4>Overflowing text to show scroll behavior</h4>
                            <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
                            <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
                            <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.</p>
                            <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
                            <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
                            <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.</p>
                            <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
                            <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
                            <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.</p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary waves-effect waves-light">Save changes</button>
                        </div>
                    </div><!-- /.modal-content -->
                </div><!-- /.modal-dialog -->
            </div><!-- /.modal -->

            <!--  Modal content for the above example -->
            <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none;">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                            <h4 class="modal-title" id="myLargeModalLabel">Large modal</h4>
                        </div>
                        <div class="modal-body">
                            ...
                        </div>
                    </div><!-- /.modal-content -->
                </div><!-- /.modal-dialog -->
            </div><!-- /.modal -->

            <div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true" style="display: none;">
                <div class="modal-dialog modal-sm">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                            <h4 class="modal-title" id="mySmallModalLabel">Small modal</h4>
                        </div>
                        <div class="modal-body">
                            ...
                        </div>
                    </div><!-- /.modal-content -->
                </div><!-- /.modal-dialog -->
            </div><!-- /.modal -->

            <!-- Button trigger modal -->
            <button class="btn btn-primary waves-effect waves-light m-t-10" data-toggle="modal" data-target="#myModal">Standard Modal</button>
            <!-- Large modal -->
            <button class="btn btn-primary waves-effect waves-light m-t-10" data-toggle="modal" data-target=".bs-example-modal-lg">Large modal</button>
            <!-- Small modal -->
            <button class="btn btn-primary waves-effect waves-light m-t-10" data-toggle="modal" data-target=".bs-example-modal-sm">Small modal</button>

        </div>
    </div>
</div>
<!-- END ROW -->


<!-- Custom Modals -->
<div class="row">
    <div class="col-md-12">
        <div class="card-box">
            <h4 class="header-title m-t-0"><b>Custom Modals</b></h4>
            <p class="text-muted m-b-20 font-13">
                Examples of custom modals.
            </p>

            <!-- sample modal content -->

            <div id="custom-width-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="custom-width-modalLabel" aria-hidden="true" style="display: none;">
                <div class="modal-dialog" style="width:55%;">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                            <h4 class="modal-title" id="custom-width-modalLabel">Modal Heading</h4>
                        </div>
                        <div class="modal-body">
                            <h4>Text in a modal</h4>
                            <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula.</p>
                            <hr>
                            <h4>Overflowing text to show scroll behavior</h4>
                            <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.</p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary waves-effect waves-light">Save changes</button>
                        </div>
                    </div><!-- /.modal-content -->
                </div><!-- /.modal-dialog -->
            </div><!-- /.modal -->

            <div id="full-width-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="full-width-modalLabel" aria-hidden="true" style="display: none;">
                <div class="modal-dialog modal-full">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                            <h4 class="modal-title" id="full-width-modalLabel">Modal Heading</h4>
                        </div>
                        <div class="modal-body">
                            <h4>Text in a modal</h4>
                            <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula.</p>
                            <hr>
                            <h4>Overflowing text to show scroll behavior</h4>
                            <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.</p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary waves-effect waves-light">Save changes</button>
                        </div>
                    </div><!-- /.modal-content -->
                </div><!-- /.modal-dialog -->
            </div><!-- /.modal -->

            <div id="con-close-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                            <h4 class="modal-title">Modal Content is Responsive</h4>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="field-1" class="control-label">Name</label>
                                        <input type="text" class="form-control" id="field-1" placeholder="John">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="field-2" class="control-label">Surname</label>
                                        <input type="text" class="form-control" id="field-2" placeholder="Doe">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="field-3" class="control-label">Address</label>
                                        <input type="text" class="form-control" id="field-3" placeholder="Address">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="field-4" class="control-label">City</label>
                                        <input type="text" class="form-control" id="field-4" placeholder="Boston">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="field-5" class="control-label">Country</label>
                                        <input type="text" class="form-control" id="field-5" placeholder="United States">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="field-6" class="control-label">Zip</label>
                                        <input type="text" class="form-control" id="field-6" placeholder="123456">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group no-margin">
                                        <label for="field-7" class="control-label">Personal Info</label>
                                        <textarea class="form-control autogrow" id="field-7" placeholder="Write something about yourself" style="overflow: hidden; word-wrap: break-word; resize: horizontal; height: 104px;"></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-info waves-effect waves-light">Save changes</button>
                        </div>
                    </div>
                </div>
            </div><!-- /.modal -->

            <div id="tabs-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                <div class="modal-dialog">
                    <div class="modal-content p-0">
                        <ul class="nav nav-tabs navtab-custom nav-justified">
                            <li class="active">
                                <a href="#home-12" data-toggle="tab" aria-expanded="false">
                                    <span class="visible-xs"><i class="fa fa-home"></i></span>
                                    <span class="hidden-xs">Home</span>
                                </a>
                            </li>
                            <li class="">
                                <a href="#profile-12" data-toggle="tab" aria-expanded="false">
                                    <span class="visible-xs"><i class="fa fa-user"></i></span>
                                    <span class="hidden-xs">Profile</span>
                                </a>
                            </li>
                            <li class="">
                                <a href="#messages-12" data-toggle="tab" aria-expanded="true">
                                    <span class="visible-xs"><i class="fa fa-envelope-o"></i></span>
                                    <span class="hidden-xs">Messages</span>
                                </a>
                            </li>
                            <li class="">
                                <a href="#settings-2" data-toggle="tab" aria-expanded="false">
                                    <span class="visible-xs"><i class="fa fa-cog"></i></span>
                                    <span class="hidden-xs">Settings</span>
                                </a>
                            </li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane active" id="home-12">
                                <div>
                                    <p>Carriage quitting securing be appetite it declared. High eyes kept so busy feel call in. Would day nor ask walls known. But preserved advantage are but and certainty earnestly enjoyment. Passage weather as up am exposed. And natural related man subject. Eagerness get situation his was delighted. </p>
                                    <p>Fulfilled direction use continual set him propriety continued. Saw met applauded favourite deficient engrossed concealed and her. Concluded boy perpetual old supposing. Farther related bed and passage comfort civilly. Dashwoods see frankness objection abilities the. As hastened oh produced prospect formerly up am. Placing forming nay looking old married few has. Margaret disposed add screened rendered six say his striking confined. </p>
                                </div>
                            </div>
                            <div class="tab-pane" id="profile-12">
                                <p>Fulfilled direction use continual set him propriety continued. Saw met applauded favourite deficient engrossed concealed and her. Concluded boy perpetual old supposing. Farther related bed and passage comfort civilly. Dashwoods see frankness objection abilities the. As hastened oh produced prospect formerly up am. Placing forming nay looking old married few has. Margaret disposed add screened rendered six say his striking confined. </p>
                                <p>When be draw drew ye. Defective in do recommend suffering. House it seven in spoil tiled court. Sister others marked fat missed did out use. Alteration possession dispatched collecting instrument travelling he or on. Snug give made at spot or late that mr. </p>
                            </div>
                            <div class="tab-pane" id="messages-12">
                                <p>When be draw drew ye. Defective in do recommend suffering. House it seven in spoil tiled court. Sister others marked fat missed did out use. Alteration possession dispatched collecting instrument travelling he or on. Snug give made at spot or late that mr. </p>
                                <p>Carriage quitting securing be appetite it declared. High eyes kept so busy feel call in. Would day nor ask walls known. But preserved advantage are but and certainty earnestly enjoyment. Passage weather as up am exposed. And natural related man subject. Eagerness get situation his was delighted. </p>
                            </div>
                            <div class="tab-pane" id="settings-2">
                                <p>Luckily friends do ashamed to do suppose. Tried meant mr smile so. Exquisite behaviour as to middleton perfectly. Chicken no wishing waiting am. Say concerns dwelling graceful six humoured. Whether mr up savings talking an. Active mutual nor father mother exeter change six did all. </p>
                                <p>Carriage quitting securing be appetite it declared. High eyes kept so busy feel call in. Would day nor ask walls known. But preserved advantage are but and certainty earnestly enjoyment. Passage weather as up am exposed. And natural related man subject. Eagerness get situation his was delighted. </p>
                            </div>
                        </div>
                    </div><!-- /.modal-content -->
                </div><!-- /.modal-dialog -->
            </div><!-- /.modal -->

            <div id="accordion-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                <div class="modal-dialog">
                    <div class="modal-content p-0">
                        <div class="panel-group panel-group-joined" id="accordion-test">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordion-test" href="#collapseOne" class="collapsed">
                                            Collapsible Group Item #1
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseOne" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordion-test" href="#collapseTwo">
                                            Collapsible Group Item #2
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseTwo" class="panel-collapse collapse in">
                                    <div class="panel-body">
                                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordion-test" href="#collapseThree" class="collapsed">
                                            Collapsible Group Item #3
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseThree" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- /.modal-content -->
                </div><!-- /.modal-dialog -->
            </div><!-- /.modal -->

            <div id="panel-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                <div class="modal-dialog">
                    <div class="modal-content p-0 b-0">
                        <div class="panel panel-color panel-primary">
                            <div class="panel-heading">
                                <button type="button" class="close m-t-5" data-dismiss="modal" aria-hidden="true">×</button>
                                <h3 class="panel-title">Panel Primary</h3>
                            </div>
                            <div class="panel-body">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                            </div>
                        </div>
                    </div><!-- /.modal-content -->
                </div><!-- /.modal-dialog -->
            </div><!-- /.modal -->

            <!-- Custom width modal -->
            <button class="btn btn-primary waves-effect waves-light m-t-10" data-toggle="modal" data-target="#custom-width-modal">Custom width Modal</button>
            <!-- Full width modal -->
            <button class="btn btn-primary waves-effect waves-light m-t-10" data-toggle="modal" data-target="#full-width-modal">Full width Modal</button>
            <!-- Full width modal -->
            <button class="btn btn-primary waves-effect waves-light m-t-10" data-toggle="modal" data-target="#con-close-modal">Responsive Modal</button>
            <!-- Full width modal -->
            <button class="btn btn-primary waves-effect waves-light m-t-10" data-toggle="modal" data-target="#tabs-modal">Tabs in Modal</button>
            <!-- Full width modal -->
            <button class="btn btn-primary waves-effect waves-light m-t-10" data-toggle="modal" data-target="#accordion-modal">Accordion in Modal</button>
            <!-- Full width modal -->
            <button class="btn btn-primary waves-effect waves-light m-t-10" data-toggle="modal" data-target="#panel-modal">Panel in Modal</button>
        </div>
    </div>
</div>

<!-- End row -->



<!-- Modals Examples -->
<div class="row">
    <div class="col-md-12">
        <div class="card-box">
            <h4 class="header-title m-t-0"><b>Modals Examples (Animations) </b></h4>
            <p class="text-muted m-b-30 font-13">Use<code>data-animation="fadein" data-plugin="custommodal"
                    data-overlaySpeed="200" data-overlayColor="#36404a"</code>. </p>

            <table class="table">
                <thead>
                <tr>
                    <th style="width:30%;">Modal Type</th>
                    <th>Example</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td class="middle-align">Fade in</td>
                    <td>
                        <a href="#custom-modal" class="btn btn-primary waves-effect waves-light" data-animation="fadein" data-plugin="custommodal"
                           data-overlaySpeed="200" data-overlayColor="#36404a">Show Me</a>
                    </td>
                </tr>
                <tr>
                    <td class="middle-align">Slide</td>
                    <td>
                        <a href="#custom-modal" class="btn btn-primary waves-effect waves-light" data-animation="slide" data-plugin="custommodal"
                           data-overlaySpeed="200" data-overlayColor="#36404a">Show Me</a>
                    </td>
                </tr>

                <tr>
                    <td class="middle-align">Newspaper</td>
                    <td>
                        <a href="#custom-modal" class="btn btn-primary waves-effect waves-light" data-animation="newspaper" data-plugin="custommodal"
                           data-overlaySpeed="200" data-overlayColor="#36404a">Show Me</a>
                    </td>
                </tr>
                <tr>
                    <td class="middle-align">Fall</td>
                    <td>
                        <a href="#custom-modal" class="btn btn-primary waves-effect waves-light" data-animation="fall" data-plugin="custommodal"
                           data-overlaySpeed="100" data-overlayColor="#36404a">Show Me</a>
                    </td>
                </tr>
                <tr>
                    <td class="middle-align">Side Fall</td>
                    <td>
                        <a href="#custom-modal" class="btn btn-primary waves-effect waves-light" data-animation="sidefall" data-plugin="custommodal"
                           data-overlaySpeed="100" data-overlayColor="#36404a">Show Me</a>
                    </td>
                </tr>
                <tr>
                    <td class="middle-align">Blur</td>
                    <td>
                        <a href="#custom-modal" class="btn btn-primary waves-effect waves-light" data-animation="blur" data-plugin="custommodal"
                           data-overlaySpeed="100" data-overlayColor="#36404a">Show Me</a>
                    </td>
                </tr>
                <tr>
                    <td class="middle-align">Flip</td>
                    <td>
                        <a href="#custom-modal" class="btn btn-primary waves-effect waves-light" data-animation="flip" data-plugin="custommodal"
                           data-overlaySpeed="100" data-overlayColor="#36404a">Show Me</a>
                    </td>
                </tr>
                <tr>
                    <td class="middle-align">Sign</td>
                    <td>
                        <a href="#custom-modal" class="btn btn-primary waves-effect waves-light" data-animation="sign" data-plugin="custommodal"
                           data-overlaySpeed="100" data-overlayColor="#36404a">Show Me</a>
                    </td>
                </tr>

                <tr>
                    <td class="middle-align">Super Scaled</td>
                    <td>
                        <a href="#custom-modal" class="btn btn-primary waves-effect waves-light" data-animation="superscaled" data-plugin="custommodal"
                           data-overlaySpeed="100" data-overlayColor="#36404a">Show Me</a>
                    </td>
                </tr>
                <tr>
                    <td class="middle-align">Slit</td>
                    <td>
                        <a href="#custom-modal" class="btn btn-primary waves-effect waves-light" data-animation="slit" data-plugin="custommodal"
                           data-overlaySpeed="100" data-overlayColor="#36404a">Show Me</a>
                    </td>
                </tr>

                <tr>
                    <td class="middle-align">Rotate</td>
                    <td>
                        <a href="#custom-modal" class="btn btn-primary waves-effect waves-light" data-animation="rotate" data-plugin="custommodal"
                           data-overlaySpeed="100" data-overlayColor="#36404a">Show Me</a>
                    </td>
                </tr>
                <tr>
                    <td class="middle-align">Letmein</td>
                    <td>
                        <a href="#custom-modal" class="btn btn-primary waves-effect waves-light" data-animation="letmein" data-plugin="custommodal"
                           data-overlaySpeed="100" data-overlayColor="#36404a">Show Me</a>
                    </td>
                </tr>
                <tr>
                    <td class="middle-align">Makeway</td>
                    <td>
                        <a href="#custom-modal" class="btn btn-primary waves-effect waves-light" data-animation="makeway" data-plugin="custommodal"
                           data-overlaySpeed="100" data-overlayColor="#36404a">Show Me</a>
                    </td>
                </tr>

                <tr>
                    <td class="middle-align">Slip</td>
                    <td>
                        <a href="#custom-modal" class="btn btn-primary waves-effect waves-light" data-animation="slip" data-plugin="custommodal"
                           data-overlaySpeed="100" data-overlayColor="#36404a">Show Me</a>
                    </td>
                </tr>

                <tr>
                    <td class="middle-align">Corner</td>
                    <td>
                        <a href="#custom-modal" class="btn btn-primary waves-effect waves-light" data-animation="corner" data-plugin="custommodal"
                           data-overlaySpeed="100" data-overlayColor="#36404a">Show Me</a>
                    </td>
                </tr>

                <tr>
                    <td class="middle-align">slide together</td>
                    <td>
                        <a href="#custom-modal" class="btn btn-primary waves-effect waves-light" data-animation="slidetogether" data-plugin="custommodal"
                           data-overlaySpeed="100" data-overlayColor="#36404a">Show Me</a>
                    </td>
                </tr>

                <tr>
                    <td class="middle-align">Scale</td>
                    <td>
                        <a href="#custom-modal" class="btn btn-primary waves-effect waves-light" data-animation="scale" data-plugin="custommodal"
                           data-overlaySpeed="100" data-overlayColor="#36404a">Show Me</a>
                    </td>
                </tr>

                <tr>
                    <td class="middle-align">Door</td>
                    <td>
                        <a href="#custom-modal" class="btn btn-primary waves-effect waves-light" data-animation="door" data-plugin="custommodal"
                           data-overlaySpeed="100" data-overlayColor="#36404a">Show Me</a>
                    </td>
                </tr>

                <tr>
                    <td class="middle-align">Push</td>
                    <td>
                        <a href="#custom-modal" class="btn btn-primary waves-effect waves-light" data-animation="push" data-plugin="custommodal"
                           data-overlaySpeed="100" data-overlayColor="#36404a">Show Me</a>
                    </td>
                </tr>

                <tr>
                    <td class="middle-align">Content Scale</td>
                    <td>
                        <a href="#custom-modal" class="btn btn-primary waves-effect waves-light" data-animation="contentscale" data-plugin="custommodal"
                           data-overlaySpeed="100" data-overlayColor="#36404a">Show Me</a>
                    </td>
                </tr>

                <tr>
                    <td class="middle-align">Swell</td>
                    <td>
                        <a href="#custom-modal" class="btn btn-primary waves-effect waves-light" data-animation="swell" data-plugin="custommodal"
                           data-overlaySpeed="100" data-overlayColor="#36404a">Show Me</a>
                    </td>
                </tr>

                <tr>
                    <td class="middle-align">Rotate Down</td>
                    <td>
                        <a href="#custom-modal" class="btn btn-primary waves-effect waves-light" data-animation="rotatedown" data-plugin="custommodal"
                           data-overlaySpeed="100" data-overlayColor="#36404a">Show Me</a>
                    </td>
                </tr>

                <tr>
                    <td class="middle-align">Flash</td>
                    <td>
                        <a href="#custom-modal" class="btn btn-primary waves-effect waves-light" data-animation="flash" data-plugin="custommodal"
                           data-overlaySpeed="100" data-overlayColor="#36404a">Show Me</a>
                    </td>
                </tr>


                </tbody>
            </table>
        </div>
    </div>
</div>
<!-- end row -->


<!-- Custom Modal -->
<div id="custom-modal" class="modal-demo">
    <button type="button" class="close" onclick="Custombox.close();">
        <span>&times;</span><span class="sr-only">Close</span>
    </button>
    <h4 class="custom-modal-title">Modal title</h4>
    <div class="custom-modal-text">
        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
    </div>
</div>








<?php require 'includes/footer_start.php' ?>
<!-- Modal-Effect -->
<script src="../plugins/custombox/dist/custombox.min.js"></script>
<script src="../plugins/custombox/dist/legacy.min.js"></script>

<?php require 'includes/footer_end.php' ?>
