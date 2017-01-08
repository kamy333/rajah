<?php require 'includes/header_start.php'; ?>
<!-- X-editable css -->
<link type="text/css" href="../plugins/x-editable/dist/bootstrap3-editable/css/bootstrap-editable.css" rel="stylesheet">

<?php require 'includes/header_end.php'; ?>



<!-- Page-Title -->
<div class="row">
    <div class="col-sm-12">
        <div class="page-title-box">
            <ol class="breadcrumb pull-right">
                <li><a href="#">Minton</a></li>
                <li><a href="#">Forms</a></li>
                <li class="active">X-Editable</li>
            </ol>
            <h4 class="page-title">X-Editable</h4>
        </div>
    </div>
</div>


<div class="row">
    <div class="col-sm-12">
        <div class="card-box">
            <div class="row">
                <div class="col-lg-6">
                    <h4 class="m-b-30 m-t-0 header-title"><b>Inline Editor</b></h4>
                    <form action="#" class="form-horizontal">
                        <div class="form-group">
                            <label class="col-sm-5 control-label">Simple Text Field</label>
                            <div class="col-sm-7">
                                <a href="#" id="inline-username" data-type="text" data-pk="1" data-title="Enter username">superuser</a>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-5 control-label">Empty text field, required</label>
                            <div class="col-sm-7">
                                <a href="#" id="inline-firstname" data-type="text" data-pk="1" data-placement="right" data-placeholder="Required" data-title="Enter your firstname"></a>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-5 control-label">Select, local array, custom display</label>
                            <div class="col-sm-7">
                                <a href="#" id="inline-sex" data-type="select" data-pk="1" data-value="" data-title="Select sex"></a>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-5 control-label">Select, error while loading</label>
                            <div class="col-sm-7">
                                <a href="#" id="inline-status" data-type="select" data-pk="1" data-value="0" data-source="/status" data-title="Select status">Active</a>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-5 control-label">Combodate</label>
                            <div class="col-sm-7">
                                <a href="#" id="inline-dob" data-type="combodate" data-value="2015-09-24" data-format="YYYY-MM-DD" data-viewformat="DD/MM/YYYY" data-template="D / MMM / YYYY" data-pk="1"  data-title="Select Date of birth"></a>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-5 control-label">Textarea, buttons below. Submit by <i>ctrl+enter</i></label>
                            <div class="col-sm-7">
                                <a href="#" id="inline-comments" data-type="textarea" data-pk="1" data-placeholder="Your comments here..." data-title="Enter comments">awesome user!</a>
                            </div>
                        </div>

                    </form>
                </div>

                <div class="col-lg-6">
                    <h4 class="m-b-30 m-t-0 header-title"><b>Popover Editor</b></h4>
                    <form action="#" class="form-horizontal editor-horizontal">
                        <div class="form-group">
                            <label class="col-sm-5 control-label">Simple Text Field</label>
                            <div class="col-sm-7">
                                <a href="#" id="username" data-type="text" data-pk="1" data-title="Enter username">superuser</a>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-5 control-label">Empty text field, required</label>
                            <div class="col-sm-7">
                                <a href="#" id="firstname" data-type="text" data-pk="1" data-placement="right" data-placeholder="Required" data-title="Enter your firstname"></a>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-5 control-label">Select, local array, custom display</label>
                            <div class="col-sm-7">
                                <a href="#" id="sex" data-type="select" data-pk="1" data-value="" data-title="Select sex"></a>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-5 control-label">Select, error while loading</label>
                            <div class="col-sm-7">
                                <a href="#" id="status" data-type="select" data-pk="1" data-value="0" data-source="/status" data-title="Select status">Active</a>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-5 control-label">Combodate</label>
                            <div class="col-sm-7">
                                <a href="#" id="dob" data-type="combodate" data-value="1984-05-15" data-format="YYYY-MM-DD" data-viewformat="DD/MM/YYYY" data-template="D / MMM / YYYY" data-pk="1"  data-title="Select Date of birth"></a>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-5 control-label">Textarea, buttons below. Submit by <i>ctrl+enter</i></label>
                            <div class="col-sm-7">
                                <a href="#" id="comments" data-type="textarea" data-pk="1" data-placeholder="Your comments here..." data-title="Enter comments">awesome user!</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end row -->





<?php require 'includes/footer_start.php' ?>
<!-- X-editable Plugin -->
<script src="../plugins/moment/moment.js"></script>
<script type="text/javascript" src="../plugins/x-editable/dist/bootstrap3-editable/js/bootstrap-editable.min.js"></script>
<script type="text/javascript" src="assets/pages/jquery.xeditable.js"></script>

<?php require 'includes/footer_end.php' ?>
