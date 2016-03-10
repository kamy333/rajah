<?php require_once('../includes/initialize.php'); ?>

<?php $layout_context = "public"; ?>
<?php $active_menu="minor"; ?>
<?php $stylesheets="";  ?>
<?php $fluid_view=true; ?>
<?php $javascript=""; ?>
<?php $incl_message_error=true; ?>


<?php include(SITE_ROOT.DS.'Inspinia'.DS.'layouts'.DS."header.php") ?>
<?php include(SITE_ROOT.DS.'Inspinia'.DS.'layouts'.DS."sidebar.php") ?>
<?php include(SITE_ROOT.DS.'Inspinia'.DS.'layouts'.DS."nav.php") ?>



<div class="wrapper wrapper-content animated fadeInRight">
        <div class="row">
            <div class="col-lg-12">
                <div class="text-center m-t-lg">
                    <h1>
                        Simple example of second view
                    </h1>
                    <small>Written in minor.html file.</small>
                </div>
            </div>
        </div>
    </div>



<?php include(SITE_ROOT.DS.'Inspinia'.DS.'layouts'.DS."footer.php") ?>

