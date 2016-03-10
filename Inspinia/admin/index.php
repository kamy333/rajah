<?php require_once('../../includes/initialize.php'); ?>

<?php $layout_context = "admin"; ?>
<?php $active_menu="home"; ?>
<?php $stylesheets="";  ?>
<?php $fluid_view=true; ?>
<?php $javascript=""; ?>
<?php $incl_message_error=true; ?>

<?php include(HEADER) ?>
<?php include(SIDEBAR) ?>
<?php include(NAV) ?>


    <div class="wrapper wrapper-content animated fadeInRight">
        <div class="row">
            <div class="col-lg-12">
                <div class="text-center m-t-lg">
                    <h1>
                        Welcome in <?php echo $logo?>
                    </h1>
                    <small>
                        My World is now in web development and design!
                    </small>
                </div>
            </div>
        </div>
    </div>



<?php include(FOOTER) ?>


