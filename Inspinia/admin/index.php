<?php require_once('../../includes/initialize.php');
$session->confirmation_protected_page();
if(User::is_employee() || User::is_visitor() || !User::is_admin() ||  User::is_secretary()){ redirect_to('index.php');}
?>


 !User::isadmin(
<?php $stylesheets="";  ?>
<?php $fluid_view=true; ?>
<?php $javascript=""; ?>
<?php $incl_message_error=true; ?>

<?php include(HEADER) ?>
<?php include(SIDEBAR) ?>
<?php include(NAV) ?>


<!--    <div class="wrapper wrapper-content animated fadeInRight">-->
<!--        <div class="row">-->
<!--            <div class="col-lg-12">-->
<!--                <div class="text-center m-t-lg">-->
<!--                    <h1>-->
<!--                        Welcome in --><?php //echo $logo?>
<!--                    </h1>-->
<!--                    <small>-->
<!--                        My World is now in web development and design!-->
<!--                    </small>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->

<div id="page-wrapper">

    <?php include("admin_content.php")?>


    <?php if(User::is_kamy()){ ?>


    <div class="row">
<!--        <div class="col-md-3 text-center" style="background-color: white" >-->
            <div class="col-lg-3 ">
                <div class="ibox float-e-margins" >
                <div class="ibox-content">
                    <p class="text-center"><b>Expense by Person</b></p>

                    <?php echo MyExpense::by_person() ?>
    </div></div></div>

    <div class="col-lg-3 col-md-offset-1 ">
    <div class="ibox float-e-margins" >
    <div class="ibox-content">
        <p class="text-center"><b>Expense by CCY</b></p>

        <?php echo MyExpense::by_ccy() ?>
    </div></div></div>

    <div class="col-lg-4 col-md-offset-1 ">
        <div class="ibox float-e-margins" >
        <div class="ibox-content">
            <p class="text-center"><b>Expense by Person and CCY</b></p>
            <?php echo MyExpense::by_person_ccy() ?>
    </div></div></div>

        </div>
        <div class="row">

    <div class="col-lg-4 col-md-offset-1 ">
        <div class="ibox float-e-margins" >
        <div class="ibox-content">
            <p class="text-center"><b>Expense by Type</b></p>
            <?php echo MyExpense::by_type() ?>
        </div></div></div>




    <div class="col-lg-3 ">
        <div class="ibox float-e-margins" >
        <div class="ibox-content">
            <p class="text-center"><b>House Expense by Person</b></p>

            <?php echo MyHouseExpense::by_person() ?>
        </div></div></div>

        </div>
        <div class="row">
            
    <div class="col-lg-3 col-md-offset-1 ">
        <div class="ibox float-e-margins" >
        <div class="ibox-content">
            <p class="text-center"><b>Expense by CCY</b></p>

            <?php echo MyHouseExpense::by_ccy() ?>
        </div></div></div>

    <div class="col-lg-4 col-md-offset-1 ">
        <div class="ibox float-e-margins" >
        <div class="ibox-content">
            <p class="text-center"><b>House Expense by Person and CCY</b></p>
            <?php echo MyHouseExpense::by_person_ccy() ?>
        </div></div></div>


    <div class="col-lg-4 col-md-offset-1 ">
        <div class="ibox float-e-margins" >
        <div class="ibox-content">
            <p class="text-center"><b>House Expense by Type</b></p>
            <?php echo MyHouseExpense::by_type() ?>
        </div></div></div>

    </div>


<?php  } ?>



</div>



<?php include(FOOTER) ?>


