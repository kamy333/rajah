<?php require 'includes/header_start.php'; ?>

<?php require 'includes/header_end.php'; ?>



<!-- Page-Title -->
<div class="row">
    <div class="col-sm-12">
        <div class="page-title-box">
            <ol class="breadcrumb pull-right">
                <li><a href="#">Minton</a></li>
                <li><a href="#">Forms</a></li>
                <li class="active">Form Wizard</li>
            </ol>
            <h4 class="page-title">Form Wizard</h4>
        </div>
    </div>
</div>

<div class="row">
    <!-- BASIC WIZARD -->
    <div class="col-lg-6">
        <div class="card-box p-b-0">
            <h4 class="text-dark  header-title m-t-0">Basic Wizard</h4>
            <p class="text-muted m-b-25 font-13">
                This basic wizard have no form validation and allows you to skip to another step by clicking on the tab.
            </p>

            <form>
                <div id="basicwizard" class=" pull-in">
                    <ul>
                        <li><a href="#tab1" data-toggle="tab">Account</a></li>
                        <li><a href="#tab2" data-toggle="tab">Profile</a></li>
                        <li><a href="#tab3" data-toggle="tab">Finish</a></li>
                    </ul>
                    <div class="tab-content bx-s-0 m-b-0">
                        <div class="tab-pane m-t-10 fade" id="tab1">
                            <div class="row">
                                <div class="form-group clearfix">
                                    <label class="col-md-3 control-label " for="userName">User name *</label>
                                    <div class="col-md-9">
                                        <input class="form-control required" id="userName" name="userName" type="text">
                                    </div>
                                </div>
                                <div class="form-group clearfix">
                                    <label class="col-md-3 control-label " for="password"> Password *</label>
                                    <div class="col-md-9">
                                        <input id="password" name="password" type="text" class="required form-control">

                                    </div>
                                </div>

                                <div class="form-group clearfix">
                                    <label class="col-md-3 control-label " for="confirm">Confirm Password *</label>
                                    <div class="col-md-9">
                                        <input id="confirm" name="confirm" type="text" class="required form-control">
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="tab-pane m-t-10 fade" id="tab2">
                            <div class="row">
                                <div class="form-group clearfix">
                                    <label class="col-lg-2 control-label" for="name"> First name *</label>
                                    <div class="col-lg-10">
                                        <input id="name" name="name" type="text" class="required form-control">
                                    </div>
                                </div>
                                <div class="form-group clearfix">
                                    <label class="col-lg-2 control-label " for="surname"> Last name *</label>
                                    <div class="col-lg-10">
                                        <input id="surname" name="surname" type="text" class="required form-control">
                                    </div>
                                </div>

                                <div class="form-group clearfix">
                                    <label class="col-lg-2 control-label " for="email">Email *</label>
                                    <div class="col-lg-10">
                                        <input id="email" name="email" type="text" class="required email form-control">
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="tab-pane m-t-10 fade" id="tab3">
                            <div class="row">
                                <div class="form-group clearfix">
                                    <div class="col-lg-12">
                                        <div class="checkbox checkbox-primary">
                                            <input id="checkbox-h" type="checkbox">
                                            <label for="checkbox-h">
                                                I agree with the Terms and Conditions.
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <ul class="pager wizard m-b-0">
                            <li class="previous"><a href="#" class="btn btn-primary waves-effect waves-light">Previous</a>
                            </li>
                            <li class="next"><a href="#" class="btn btn-primary waves-effect waves-light">Next</a></li>
                        </ul>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!-- end col -->

    <!-- PROGRESSBAR WIZARD -->
    <div class="col-lg-6">
        <div class="card-box p-b-0">
            <h4 class="text-dark  header-title m-t-0">Wizard With Progress Bar</h4>
            <p class="text-muted m-b-25 font-13">
                Same with basic wizard setup but with progress bar.
            </p>

            <div id="progressbarwizard" class="pull-in">
                <ul>
                    <li><a href="#account-2" data-toggle="tab">Account</a></li>
                    <li><a href="#profile-tab-2" data-toggle="tab">Profile</a></li>
                    <li><a href="#finish-2" data-toggle="tab">Finish</a></li>
                </ul>

                <div class="tab-content bx-s-0 m-b-0">

                    <div id="bar" class="progress progress-striped active">
                        <div class="bar progress-bar progress-bar-primary"></div>
                    </div>

                    <div class="tab-pane p-t-10 fade" id="account-2">
                        <div class="row">
                            <div class="form-group clearfix">
                                <label class="col-md-3 control-label " for="userName1">User name *</label>
                                <div class="col-md-9">
                                    <input class="form-control required" id="userName1" name="userName" type="text">
                                </div>
                            </div>
                            <div class="form-group clearfix">
                                <label class="col-md-3 control-label " for="password1"> Password *</label>
                                <div class="col-md-9">
                                    <input id="password1" name="password" type="text" class="required form-control">

                                </div>
                            </div>

                            <div class="form-group clearfix">
                                <label class="col-md-3 control-label " for="confirm1">Confirm Password *</label>
                                <div class="col-md-9">
                                    <input id="confirm1" name="confirm" type="text" class="required form-control">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane p-t-10 fade" id="profile-tab-2">
                        <div class="row">
                            <div class="form-group clearfix">
                                <label class="col-lg-2 control-label" for="name1"> First name *</label>
                                <div class="col-lg-10">
                                    <input id="name1" name="name" type="text" class="required form-control">
                                </div>
                            </div>
                            <div class="form-group clearfix">
                                <label class="col-lg-2 control-label " for="surname1"> Last name *</label>
                                <div class="col-lg-10">
                                    <input id="surname1" name="surname" type="text" class="required form-control">

                                </div>
                            </div>

                            <div class="form-group clearfix">
                                <label class="col-lg-2 control-label " for="email1">Email *</label>
                                <div class="col-lg-10">
                                    <input id="email1" name="email" type="text" class="required email form-control">
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="tab-pane p-t-10 fade" id="finish-2">
                        <div class="row">
                            <div class="form-group clearfix">
                                <div class="col-lg-12">
                                    <div class="checkbox checkbox-primary">
                                        <input id="checkbox-h1" type="checkbox">
                                        <label for="checkbox-h1">
                                            I agree with the Terms and Conditions.
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <ul class="pager m-b-0 wizard">
                        <li class="previous first" style="display:none;"><a href="#">First</a>
                        </li>
                        <li class="previous"><a href="#" class="btn btn-primary waves-effect waves-light">Previous</a></li>
                        <li class="next last" style="display:none;"><a href="#">Last</a></li>
                        <li class="next"><a href="#" class="btn btn-primary waves-effect waves-light">Next</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- end col -->


</div>


<div class="row">
    <div class="col-lg-6">
        <div class="card-box p-b-0">
            <h4 class="text-dark  header-title m-t-0">Button Wizard</h4>
            <p class="text-muted m-b-25 font-13">
                Wizard With Custom Next/Previous Buttons & First and Last buttons.
            </p>

            <div id="btnwizard" class="pull-in">
                <ul>
                    <li><a href="#tab12" data-toggle="tab">First</a></li>
                    <li><a href="#tab22" data-toggle="tab">Second</a></li>
                    <li><a href="#tab32" data-toggle="tab">Third</a></li>
                </ul>
                <div class="tab-content m-b-0 bx-s-0">
                    <div class="tab-pane m-t-10 fade" id="tab12">
                        <div class="row">
                            <div class="form-group clearfix">
                                <label class="col-md-3 control-label " for="userName2">User name *</label>
                                <div class="col-md-9">
                                    <input class="form-control required" id="userName2" name="userName" type="text">
                                </div>
                            </div>
                            <div class="form-group clearfix">
                                <label class="col-md-3 control-label " for="password2"> Password *</label>
                                <div class="col-md-9">
                                    <input id="password2" name="password" type="text" class="required form-control">

                                </div>
                            </div>

                            <div class="form-group clearfix">
                                <label class="col-md-3 control-label " for="confirm2">Confirm Password *</label>
                                <div class="col-md-9">
                                    <input id="confirm2" name="confirm" type="text" class="required form-control">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane m-t-10 fade" id="tab22">
                        <div class="row">
                            <div class="form-group clearfix">
                                <label class="col-lg-2 control-label" for="name2"> First name *</label>
                                <div class="col-lg-10">
                                    <input id="name2" name="name" type="text" class="required form-control">
                                </div>
                            </div>
                            <div class="form-group clearfix">
                                <label class="col-lg-2 control-label " for="surname2"> Last name *</label>
                                <div class="col-lg-10">
                                    <input id="surname2" name="surname" type="text" class="required form-control">

                                </div>
                            </div>

                            <div class="form-group clearfix">
                                <label class="col-lg-2 control-label " for="email2">Email *</label>
                                <div class="col-lg-10">
                                    <input id="email2" name="email" type="text" class="required email form-control">
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="tab-pane m-t-10 fade" id="tab32">
                        <div class="row">
                            <div class="form-group clearfix">
                                <div class="col-lg-12">
                                    <div class="checkbox checkbox-primary">
                                        <input id="checkbox-h2" type="checkbox">
                                        <label for="checkbox-h2">
                                            I agree with the Terms and Conditions.
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="m-t-20"></div>

                    <div class="pull-right">
                        <input type='button' class='btn btn-primary button-next' name='next' value='Next'/>
                        <input type='button' class='btn btn-primary button-last' name='last' value='Last'/>
                    </div>
                    <div class="pull-left">
                        <input type='button' class='btn btn-primary button-first' name='first'
                               value='First'/>
                        <input type='button' class='btn btn-primary button-previous' name='previous'
                               value='Previous'/>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- end col -->

    <div class="col-lg-6">
        <div class="card-box p-b-0">
            <h4 class="text-dark  header-title m-t-0">Wizard With Form Validation</h4>
            <p class="text-muted m-b-25 font-13">
                Same with basic wizard setup but with progress bar.
            </p>

            <form id="commentForm" method="get" action="" class="form-horizontal">
                <div id="rootwizard" class="pull-in">
                    <ul>
                        <li><a href="#first" data-toggle="tab">First</a></li>
                        <li><a href="#second" data-toggle="tab">Second</a></li>
                        <li><a href="#third" data-toggle="tab">Third</a></li>
                    </ul>
                    <div class="tab-content m-b-0 bx-s-0">
                        <div class="tab-pane fade" id="first">
                            <div class="control-group">
                                <label class="control-label" for="emailfield">Email</label>
                                <div class="controls">
                                    <input type="text" id="emailfield" name="emailfield"
                                           class="required email form-control">
                                </div>
                            </div>

                            <div class="control-group">
                                <label class="control-label" for="namefield">Name</label>
                                <div class="controls">
                                    <input type="text" id="namefield" name="namefield"
                                           class="required form-control">
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="second">
                            <div class="control-group">
                                <label class="control-label" for="urlfield">URL</label>
                                <div class="controls">
                                    <input type="text" id="urlfield" name="urlfield"
                                           class="required url form-control">
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="third">
                            <div class="form-group clearfix">
                                <div class="col-lg-12">
                                    <div class="checkbox checkbox-primary">
                                        <input id="checkbox-h3" type="checkbox">
                                        <label for="checkbox-h3">
                                            I agree with the Terms and Conditions.
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <ul class="pager m-b-0 wizard">
                            <li class="previous"><a href="#" class="btn btn-primary waves-effect waves-light">Previous</a></li>
                            <li class="next"><a href="#" class="btn btn-primary waves-effect waves-light">Next</a></li>
                        </ul>
                    </div>
                </div>
            </form>

        </div>
    </div>
    <!-- end col -->


</div>





<?php require 'includes/footer_start.php' ?>
<!-- Form wizard -->
<script src="../plugins/bootstrap-wizard/jquery.bootstrap.wizard.js"></script>
<script src="../plugins/jquery-validation/dist/jquery.validate.min.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
        $('#basicwizard').bootstrapWizard({'tabClass': 'nav nav-tabs navtab-custom nav-justified bg-muted'});

        $('#progressbarwizard').bootstrapWizard({onTabShow: function(tab, navigation, index) {
            var $total = navigation.find('li').length;
            var $current = index+1;
            var $percent = ($current/$total) * 100;
            $('#progressbarwizard').find('.bar').css({width:$percent+'%'});
        },
            'tabClass': 'nav nav-tabs navtab-custom nav-justified bg-muted'});

        $('#btnwizard').bootstrapWizard({'tabClass': 'nav nav-tabs navtab-custom nav-justified bg-muted','nextSelector': '.button-next', 'previousSelector': '.button-previous', 'firstSelector': '.button-first', 'lastSelector': '.button-last'});

        var $validator = $("#commentForm").validate({
            rules: {
                emailfield: {
                    required: true,
                    email: true,
                    minlength: 3
                },
                namefield: {
                    required: true,
                    minlength: 3
                },
                urlfield: {
                    required: true,
                    minlength: 3,
                    url: true
                }
            }
        });

        $('#rootwizard').bootstrapWizard({
            'tabClass': 'nav nav-tabs navtab-custom nav-justified bg-muted',
            'onNext': function (tab, navigation, index) {
                var $valid = $("#commentForm").valid();
                if (!$valid) {
                    $validator.focusInvalid();
                    return false;
                }
            }
        });
    });

</script>

<?php require 'includes/footer_end.php' ?>
