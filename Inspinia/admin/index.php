<?php require_once('../../includes/initialize.php');
$session->confirmation_protected_page();
if(User::is_employee() || User::is_visitor() || !User::is_admin() ||  User::is_secretary()){ redirect_to('index.php');}
?>



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

<!--<div id="page-wrapper">-->
<?php echo admin_button(); ?>

    <?php include("admin_content.php")?>

    <?php if(User::is_kamy()){ ?>

<div class="row">
        <?php echo Table::ibox_table(MyExpense::by_person(),"Expense by Person",4,0) ?>
        <?php echo Table::ibox_table(MyExpense::by_type(),"Expense by Type",4,0) ?>
        <?php echo Table::ibox_table(MyExpense::by_ccy(),"Expense by Currency",4,0) ?>
</div>
    <div class="row">
        <?php echo Table::ibox_table(MyHouseExpense::by_person(),"House Expense by Person",4,0) ?>
        <?php echo Table::ibox_table(MyHouseExpense::by_type(),"House Expense by Type",4,0) ?>
        <?php echo Table::ibox_table(MyHouseExpense::by_ccy(),"House Expense by Currency",4,0) ?>
 </div>

<div class="row">
    <?php echo Table::ibox_table(MyExpense::by_person_ccy(),"Expense by Person Ccy",4,0) ?>
    <?php echo Table::ibox_table(MyHouseExpense::by_person_ccy(),"Expense by Person Ccy",4,0) ?>
</div>


<!--    </div>-->


<?php  } ?>



</div>



<?php include(FOOTER) ?>


