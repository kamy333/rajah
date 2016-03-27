<?php require_once('../includes/initialize.php'); ?>


<?php //$active_menu="minor"; ?>
<?php $stylesheets="";  ?>
<?php $fluid_view=true; ?>
<?php $javascript=""; ?>
<?php $incl_message_error=true; ?>

<?php include(HEADER) ?>
<?php include(SIDEBAR) ?>
<?php include(NAV) ?>



<div class="wrapper wrapper-content animated fadeInRight">
        <div class="row">
            <div class="col-lg-12  white-bg">
                <div class="text-center m-t-lg">


                    <h1>Welcome to <?php // echo $active_menu_clean;?> </h1>

                    <h6>

                            <?php echo "Basename ".$active_menu.'<br>';
                            echo "<b>__DIR__</b> ".__DIR__.'<br>';
                            echo "<b>Dirname</b>  ".basename(dirname($_SERVER['SCRIPT_FILENAME'])).'<br>';
                            echo "<b>SERVER_NAME</b>  ".$_SERVER['SERVER_NAME'].'<br>';
                            echo "<b>SITE_ROOT</b>  ".SITE_ROOT.'<br>';
                            echo  "<b>MY_URL_PUBLIC</b>  ".MY_URL_PUBLIC.'<br>';
                            echo  "<b>MY_URL_ADMIN</b>  ".MY_URL_ADMIN.'<br>';
                            echo $_SERVER["PHP_SELF"].'<br>';
                            ?>


                    </h6>
                    <small>Written in minor.html file.</small>
                        </div>

            </div>
        </div>
    </div>



<?php include(FOOTER) ?>
