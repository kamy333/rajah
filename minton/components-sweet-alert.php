<?php require 'includes/header_start.php'; ?>
<!-- Sweet Alert css -->
<link href="../plugins/bootstrap-sweetalert/sweet-alert.css" rel="stylesheet" type="text/css" />

<?php require 'includes/header_end.php'; ?>



<!-- Page-Title -->
<div class="row">
    <div class="col-sm-12">
        <div class="page-title-box">
            <ol class="breadcrumb pull-right">
                <li><a href="#">Minton</a></li>
                <li><a href="#">Components</a></li>
                <li class="active">Sweet-Alert</li>
            </ol>
            <h4 class="page-title">Sweet-Alert</h4>
        </div>
    </div>
</div>


<div class="row">
    <div class="col-sm-12">
        <div class="card-box">
            <h4 class="m-t-0 header-title"><b>Sweet-Alert Examples</b></h4>
            <p class="text-muted m-b-30 font-13">
                A beautiful replacement for JavaScript's "Alert".
            </p>

            <table class="table">
                <thead>
                <tr>
                    <th style="width:50%;">Alert Type</th>
                    <th>Example</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td class="middle-align">Basic Example</td>
                    <td>
                        <button class="btn btn-default waves-effect waves-light btn-sm" id="sa-basic">Click me</button>
                    </td>
                </tr>

                <tr>
                    <td class="middle-align">A title with a text under</td>
                    <td>
                        <button class="btn btn-default waves-effect waves-light btn-sm" id="sa-title">Click me</button>
                    </td>
                </tr>
                <tr>
                    <td class="middle-align">A success message!</td>
                    <td>
                        <button class="btn btn-default waves-effect waves-light btn-sm" id="sa-success">Click me</button>
                    </td>
                </tr>
                <tr>
                    <td class="middle-align">A warning message, with a function attached to the "Confirm"-button...</td>
                    <td>
                        <button class="btn btn-default waves-effect waves-light btn-sm" id="sa-warning">Click me</button>
                    </td>
                </tr>
                <tr>
                    <td class="middle-align">By passing a parameter, you can execute something else for "Cancel".</td>
                    <td>
                        <button class="btn btn-default waves-effect waves-light btn-sm" id="sa-params">Click me</button>
                    </td>
                </tr>
                <tr>
                    <td class="middle-align">A message with custom Image Header</td>
                    <td>
                        <button class="btn btn-default waves-effect waves-light btn-sm" id="sa-image">Click me</button>
                    </td>
                </tr>
                <tr>
                    <td class="middle-align">A message with auto close timer</td>
                    <td>
                        <button class="btn btn-default waves-effect waves-light btn-sm" id="sa-close">Click me</button>
                    </td>
                </tr>
                <tr>
                    <td class="middle-align">A message with button primary</td>
                    <td>
                        <button class="btn btn-primary waves-effect waves-light btn-sm" id="primary-alert">Click me</button>
                    </td>
                </tr>
                <tr>
                    <td class="middle-align">A message with button info</td>
                    <td>
                        <button class="btn btn-info waves-effect waves-light btn-sm" id="info-alert">Click me</button>
                    </td>
                </tr>
                <tr>
                    <td class="middle-align">A message with button success</td>
                    <td>
                        <button class="btn btn-success waves-effect waves-light btn-sm" id="success-alert">Click me</button>
                    </td>
                </tr>
                <tr>
                    <td class="middle-align">A message with button warning</td>
                    <td>
                        <button class="btn btn-warning waves-effect waves-light btn-sm" id="warning-alert">Click me</button>
                    </td>
                </tr>
                <tr>
                    <td class="middle-align">A message with button danger</td>
                    <td>
                        <button class="btn btn-danger waves-effect waves-light btn-sm" id="danger-alert">Click me</button>
                    </td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
<!-- end row -->



<?php require 'includes/footer_start.php' ?>
<!-- Sweet Alert js -->
<script src="../plugins/bootstrap-sweetalert/sweet-alert.min.js"></script>
<script src="assets/pages/jquery.sweet-alert.init.js"></script>

<?php require 'includes/footer_end.php' ?>
