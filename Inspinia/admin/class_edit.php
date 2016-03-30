<?php require_once('../../includes/initialize.php');
$session->confirmation_protected_page();
if(User::is_employee() || User::is_secretary()){ redirect_to('index.php');}
?>

<?php if(isset($_GET["class_name"])){$class_name= urldecode($_GET["class_name"]) ;} else {$class_name="User";}  ?>

<?php $stylesheets="";  ?>
<?php $fluid_view=true; ?>
<?php $javascript="table"; ?>
<?php $incl_message_error=true; ?>

<?php include(HEADER) ?>
<?php include(SIDEBAR) ?>
<?php include(NAV) ?>


<div class="wrapper wrapper-content animated fadeInRight">

            <div class="row">
                <div class="col-lg-12">
                    <div class="text-center m-t-lg">
                        <h1>Form Edit for <?php echo $class_name; ?></h1>
                                                <small></small>
                        <div class="row">
                            <div class="col-lg-2"></div>
                            <ul>
                                <li><?php echo $class_name; ?></li>
                                <li><?php echo ""; ?></li>
                                <li></li>
                                <li></li>
                                <li></li>
                            </ul>
                        </div>

                    </div>
                </div>
            </div>



</div>





<?php include(FOOTER) ?>

