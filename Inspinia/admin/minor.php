<?php require_once('../../includes/initialize.php');
$session->confirmation_protected_page();
if(User::is_employee() || User::is_secretary()){ redirect_to('index.php');}
?>

<?php if(isset($_GET["class_name"])){$class_name= urldecode($_GET["class_name"]) ;} else {$class_name="User";}  ?>

<?php //$Classes=User::find_all(); ?>

<?php $stylesheets="";  ?>
<?php $fluid_view=true; ?>
<?php $javascript="table"; ?>
<?php $incl_message_error=true; ?>

<?php include(HEADER) ?>
<?php include(SIDEBAR) ?>
<?php include(NAV) ?>


<div class="wrapper wrapper-content animated fadeInRight">

<!--        <div class="row">-->
<!--            <div class="col-lg-12">-->
<!--                <div class="text-center m-t-lg">-->
<!--                    <h1></h1>-->
<!--                    <small>Written in minor.html file.</small>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->

    <?php include(TABLE_MANAGE) ?>
    </div>




<?php include(FOOTER) ?>
