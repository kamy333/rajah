<?php require 'includes/header_account.php'; ?>

<div class="wrapper-page">

    <div class="text-center">
        <a href="index.php" class="logo-lg"><i class="md md-equalizer"></i> <span>Minton</span> </a>
    </div>

    <form class="form-horizontal m-t-20" action="index.php">

        <div class="form-group">
            <div class="col-xs-12">
                <input class="form-control" type="text" required="" placeholder="Username">
                <i class="md md-account-circle form-control-feedback l-h-34"></i>
            </div>
        </div>

        <div class="form-group">
            <div class="col-xs-12">
                <input class="form-control" type="password" required="" placeholder="Password">
                <i class="md md-vpn-key form-control-feedback l-h-34"></i>
            </div>
        </div>

        <div class="form-group">
            <div class="col-xs-12">
                <div class="checkbox checkbox-primary">
                    <input id="checkbox-signup" type="checkbox">
                    <label for="checkbox-signup">
                        Remember me
                    </label>
                </div>

            </div>
        </div>

        <div class="form-group text-right m-t-20">
            <div class="col-xs-12">
                <button class="btn btn-primary btn-custom w-md waves-effect waves-light" type="submit">Log In
                </button>
            </div>
        </div>

        <div class="form-group m-t-30">
            <div class="col-sm-7">
                <a href="pages-recoverpw.php" class="text-muted"><i class="fa fa-lock m-r-5"></i> Forgot your
                    password?</a>
            </div>
            <div class="col-sm-5 text-right">
                <a href="pages-register.php" class="text-muted">Create an account</a>
            </div>
        </div>
    </form>
</div>


<?php require 'includes/footer_account.php'; ?>
