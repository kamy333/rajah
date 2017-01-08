<?php require 'includes/header_account.php'; ?>

<div class="wrapper-page">

    <div class="text-center">
        <a href="index.php" class="logo-lg"><i class="md md-equalizer"></i> <span>Minton</span> </a>
    </div>

    <form method="post" action="#" role="form" class="text-center m-t-20">
        <div class="alert alert-success alert-dismissable">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            Enter your <b>Email</b> and instructions will be sent to you!
        </div>
        <div class="form-group m-b-0">
            <div class="input-group">
                <input type="email" class="form-control" placeholder="Enter Email" required="">
                <i class="md md-email form-control-feedback l-h-34" style="left:6px;z-index: 99;"></i>
                <span class="input-group-btn"> <button type="submit" class="btn btn-email btn-primary waves-effect waves-light">Reset</button> </span>
            </div>
        </div>

    </form>
</div>




<?php require 'includes/footer_account.php'; ?>
