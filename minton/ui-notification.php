<?php require 'includes/header_start.php'; ?>

<?php require 'includes/header_end.php'; ?>


<!-- Page-Title -->
<div class="row">
    <div class="col-sm-12">
        <div class="page-title-box">
            <ol class="breadcrumb pull-right">
                <li><a href="#">Minton</a></li>
                <li><a href="#">UI Kit</a></li>
                <li class="active">Notifications</li>
            </ol>
            <h4 class="page-title">Notifications</h4>
        </div>
    </div>
</div>


<div class="row">
    <div class="col-sm-12">
        <div class="card-box">
            <div class="row">
                <div class="col-sm-6">
                    <h4 class="header-title m-t-0"><b>Notification (Top)</b></h4>
                    <p class="text-muted m-b-30 font-13">
                        Add <code>onclick</code> handler and call <code>$.Notification.notify</code> method with parameter containing the alert type (e.g. <code>info, success, warning, error, black, white</code>), your message text and position of alert.
                    </p>

                    <div class="button-list">


                        <a class="btn btn-default waves-effect waves-light" href="javascript:;" onclick="$.Notification.notify('custom','top left', 'Sample Notification', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas vitae orci ut dolor scelerisque aliquam.')">Left</a>
                        <a class="btn btn-default waves-effect waves-light" href="javascript:;" onclick="$.Notification.notify('custom','top right','Sample Notification', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas vitae orci ut dolor scelerisque aliquam.')">Right</a>
                        <a class="btn btn-default waves-effect waves-light" href="javascript:;" onclick="$.Notification.notify('custom','top center','Sample Notification', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas vitae orci ut dolor scelerisque aliquam.')">Center</a>

                        <br/>

                        <a class="btn btn-info waves-effect waves-light" href="javascript:;" onclick="$.Notification.notify('info','top left', 'Sample Notification', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas vitae orci ut dolor scelerisque aliquam.')">Info</a>
                        <a class="btn btn-success waves-effect waves-light" href="javascript:;" onclick="$.Notification.notify('success','top left','Sample Notification', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas vitae orci ut dolor scelerisque aliquam.')">Success</a>
                        <a class="btn btn-warning waves-effect waves-light" href="javascript:;" onclick="$.Notification.notify('warning','top left','Sample Notification', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas vitae orci ut dolor scelerisque aliquam.')">Warning</a>
                        <a class="btn btn-danger waves-effect waves-light" href="javascript:;" onclick="$.Notification.notify('error','top left', 'Sample Notification', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas vitae orci ut dolor scelerisque aliquam.')">Error</a>
                        <a class="btn btn-inverse waves-effect waves-light" href="javascript:;" onclick="$.Notification.notify('black','top left', 'Sample Notification', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas vitae orci ut dolor scelerisque aliquam.')">Black</a>
                        <a class="btn btn-default waves-effect" href="javascript:;" onclick="$.Notification.notify('white','top left', 'Sample Notification', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas vitae orci ut dolor scelerisque aliquam.')">White</a>
                    </div>
                </div>

                <div class="col-sm-6">
                    <h4 class="header-title m-t-0"><b>Notification (Bottom)</b></h4>
                    <p class="text-muted m-b-30 font-13">
                        Add <code>onclick</code> handler and call <code>$.Notification.notify</code> method with parameter containing the alert type (e.g. <code>info, success, warning, error, black, white</code>), your message text and position of alert.
                    </p>

                    <div class="button-list">


                        <a class="btn btn-default waves-effect waves-light" href="javascript:;" onclick="$.Notification.notify('custom','bottom left', 'Sample Notification', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas vitae orci ut dolor scelerisque aliquam.')">Left</a>
                        <a class="btn btn-default waves-effect waves-light" href="javascript:;" onclick="$.Notification.notify('custom','bottom right','Sample Notification', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas vitae orci ut dolor scelerisque aliquam.')">Right</a>
                        <a class="btn btn-default waves-effect waves-light" href="javascript:;" onclick="$.Notification.notify('custom','bottom center','Sample Notification', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas vitae orci ut dolor scelerisque aliquam.')">Center</a>

                        <br/>

                        <a class="btn btn-info waves-effect waves-light" href="javascript:;" onclick="$.Notification.notify('info','bottom left', 'Sample Notification', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas vitae orci ut dolor scelerisque aliquam.')">Info</a>
                        <a class="btn btn-success waves-effect waves-light" href="javascript:;" onclick="$.Notification.notify('success','bottom left','Sample Notification', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas vitae orci ut dolor scelerisque aliquam.')">Success</a>
                        <a class="btn btn-warning waves-effect waves-light" href="javascript:;" onclick="$.Notification.notify('warning','bottom left','Sample Notification', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas vitae orci ut dolor scelerisque aliquam.')">Warning</a>
                        <a class="btn btn-danger waves-effect waves-light" href="javascript:;" onclick="$.Notification.notify('error','bottom left', 'Sample Notification', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas vitae orci ut dolor scelerisque aliquam.')">Error</a>
                        <a class="btn btn-inverse waves-effect waves-light" href="javascript:;" onclick="$.Notification.notify('black','bottom left', 'Sample Notification', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas vitae orci ut dolor scelerisque aliquam.')">Black</a>
                        <a class="btn btn-default waves-effect" href="javascript:;" onclick="$.Notification.notify('white','bottom left', 'Sample Notification', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas vitae orci ut dolor scelerisque aliquam.')">White</a>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-sm-12">
        <div class="card-box">
            <div class="row">
                <div class="col-sm-6">
                    <h4 class="header-title m-t-0"><b>Notification (Left-middle)</b></h4>
                    <p class="text-muted m-b-30 font-13">
                        Add <code>onclick</code> handler and call <code>$.Notification.notify</code> method with parameter containing the alert type (e.g. <code>info, success, warning, error, black, white</code>), your message text and position of alert.
                    </p>

                    <div class="button-list">
                        <a class="btn btn-default waves-effect waves-light" href="javascript:;" onclick="$.Notification.notify('custom','left middle', 'Sample Notification', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas vitae orci ut dolor scelerisque aliquam.')">Custom</a>
                        <a class="btn btn-info waves-effect waves-light" href="javascript:;" onclick="$.Notification.notify('info','left middle', 'Sample Notification', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas vitae orci ut dolor scelerisque aliquam.')">Info</a>
                        <a class="btn btn-success waves-effect waves-light" href="javascript:;" onclick="$.Notification.notify('success','left middle','Sample Notification', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas vitae orci ut dolor scelerisque aliquam.')">Success</a>
                        <a class="btn btn-warning waves-effect waves-light" href="javascript:;" onclick="$.Notification.notify('warning','left middle','Sample Notification', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas vitae orci ut dolor scelerisque aliquam.')">Warning</a>
                        <a class="btn btn-danger waves-effect waves-light" href="javascript:;" onclick="$.Notification.notify('error','left middle', 'Sample Notification', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas vitae orci ut dolor scelerisque aliquam.')">Error</a>
                        <a class="btn btn-inverse waves-effect waves-light" href="javascript:;" onclick="$.Notification.notify('black','left middle', 'Sample Notification', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas vitae orci ut dolor scelerisque aliquam.')">Black</a>
                        <a class="btn btn-default waves-effect" href="javascript:;" onclick="$.Notification.notify('white','left middle', 'Sample Notification', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas vitae orci ut dolor scelerisque aliquam.')">White</a>
                    </div>
                </div>

                <div class="col-sm-6">
                    <h4 class="header-title m-t-0"><b>Notification (Right-middle)</b></h4>
                    <p class="text-muted m-b-30 font-13">
                        Add <code>onclick</code> handler and call <code>$.Notification.notify</code> method with parameter containing the alert type (e.g. <code>info, success, warning, error, black, white</code>), your message text and position of alert.
                    </p>

                    <div class="button-list">
                        <a class="btn btn-default waves-effect waves-light" href="javascript:;" onclick="$.Notification.notify('custom','right middle', 'Sample Notification', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas vitae orci ut dolor scelerisque aliquam.')">Custom</a>
                        <a class="btn btn-info waves-effect waves-light" href="javascript:;" onclick="$.Notification.notify('info','right middle', 'Sample Notification', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas vitae orci ut dolor scelerisque aliquam.')">Info</a>
                        <a class="btn btn-success waves-effect waves-light" href="javascript:;" onclick="$.Notification.notify('success','right middle','Sample Notification', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas vitae orci ut dolor scelerisque aliquam.')">Success</a>
                        <a class="btn btn-warning waves-effect waves-light" href="javascript:;" onclick="$.Notification.notify('warning','right middle','Sample Notification', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas vitae orci ut dolor scelerisque aliquam.')">Warning</a>
                        <a class="btn btn-danger waves-effect waves-light" href="javascript:;" onclick="$.Notification.notify('error','right middle', 'Sample Notification', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas vitae orci ut dolor scelerisque aliquam.')">Error</a>
                        <a class="btn btn-inverse waves-effect waves-light" href="javascript:;" onclick="$.Notification.notify('black','right middle', 'Sample Notification', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas vitae orci ut dolor scelerisque aliquam.')">Black</a>
                        <a class="btn btn-default waves-effect" href="javascript:;" onclick="$.Notification.notify('white','right middle', 'Sample Notification', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas vitae orci ut dolor scelerisque aliquam.')">White</a>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>


<div class="row">
    <div class="col-sm-12">
        <div class="card-box">
            <div class="row">
                <div class="col-sm-6">
                    <h4 class="header-title m-t-0"><b>Autohide in 5 seconds</b></h4>
                    <p class="text-muted m-b-30 font-13">
                        Add <code>onclick</code> handler and call <code>$.Notification.notify</code> method with parameter containing the alert type (e.g. <code>info, success, warning, error, black, white</code>), your message text and position of alert.
                    </p>

                    <div class="button-list">
                        <a class="btn btn-default waves-effect waves-light autohidebut" href="javascript:;" onclick="$.Notification.autoHideNotify('custom', 'top right', 'I will be closed in 5 seconds...','Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas vitae orci ut dolor scelerisque aliquam.')">Custom</a>
                        <a class="btn btn-info waves-effect waves-light autohidebut" href="javascript:;" onclick="$.Notification.autoHideNotify('info', 'top right', 'I will be closed in 5 seconds...','Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas vitae orci ut dolor scelerisque aliquam.')">Info</a>
                        <a class="btn btn-success waves-effect waves-light autohidebut" href="javascript:;" onclick="$.Notification.autoHideNotify('success', 'top right', 'I will be closed in 5 seconds...','Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas vitae orci ut dolor scelerisque aliquam.')">Success</a>
                        <a class="btn btn-warning waves-effect waves-light autohidebut" href="javascript:;" onclick="$.Notification.autoHideNotify('warning', 'top right', 'I will be closed in 5 seconds...','Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas vitae orci ut dolor scelerisque aliquam.')">Warning</a>
                        <a class="btn btn-danger waves-effect waves-light autohidebut" href="javascript:;" onclick="$.Notification.autoHideNotify('error', 'top right', 'I will be closed in 5 seconds...','Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas vitae orci ut dolor scelerisque aliquam.')">Error</a>
                        <a class="btn btn-inverse waves-effect waves-light autohidebut" href="javascript:;" onclick="$.Notification.autoHideNotify('black', 'top right', 'I will be closed in 5 seconds...','Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas vitae orci ut dolor scelerisque aliquam.')">Black</a>
                        <a class="btn btn-default waves-effect autohidebut" href="javascript:;" onclick="$.Notification.autoHideNotify('white', 'top right', 'I will be closed in 5 seconds...','Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas vitae orci ut dolor scelerisque aliquam.')">White</a>
                    </div>
                </div>

                <div class="col-sm-6">
                    <h4 class="header-title m-t-0"><b>Confirm Notification</b></h4>
                    <p class="text-muted m-b-30 font-13">
                        Add <code>onclick</code> handler and call <code>$.Notification.notify</code> method with parameter containing the alert type (e.g. <code>info, success, warning, error, black, white</code>), your message text and position of alert.
                    </p>

                    <div class="button-list">
                        <a class="btn btn-default waves-effect waves-light" href="javascript:;" onclick="$.Notification.confirm('custom','top left', 'Are you nuts?!')">Custom</a>
                        <a class="btn btn-info waves-effect waves-light" href="javascript:;" onclick="$.Notification.confirm('info','top left', 'Are you nuts?!')">Info</a>
                        <a class="btn btn-success waves-effect waves-light" href="javascript:;" onclick="$.Notification.confirm('success','top right', 'Are you nuts?!')">Success</a>
                        <a class="btn btn-warning waves-effect waves-light" href="javascript:;" onclick="$.Notification.confirm('warning','top center', 'Are you nuts?!')">Warning</a>
                        <a class="btn btn-danger waves-effect waves-light" href="javascript:;" onclick="$.Notification.confirm('error','bottom left', 'Are you nuts?!')">Error</a>
                        <a class="btn btn-inverse waves-effect waves-light" href="javascript:;" onclick="$.Notification.confirm('black','bottom center', 'Are you nuts?!')">Black</a>
                        <a class="btn btn-default waves-effect" href="javascript:;" onclick="$.Notification.confirm('white','bottom right', 'Are you nuts?!')">White</a>

                    </div>
                </div>

            </div>
        </div>
    </div>
</div><!-- End of Row -->




<?php require 'includes/footer_start.php' ?>
<!-- Notification js -->
<script src="../plugins/notifyjs/dist/notify.min.js"></script>
<script src="../plugins/notifications/notify-metro.js"></script>

<?php require 'includes/footer_end.php' ?>
