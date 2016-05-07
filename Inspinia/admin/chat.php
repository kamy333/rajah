<?php require_once('../../includes/initialize.php');
$session->confirmation_protected_page();
if(User::is_employee() || User::is_secretary()){ redirect_to('index.php');}
?>

<?php $stylesheets="";  ?>
<?php $fluid_view=true; ?>
<?php $javascript="table"; ?>
<?php $incl_message_error=true; ?>

<?php include(HEADER) ?>
<?php include(SIDEBAR) ?>
<?php include(NAV) ?>
<?php  echo isset($valid)? $valid->form_errors():"" ?>
<?php if (isset($message)){echo $message;} ?>

<div class="wrapper wrapper-content animated fadeInRight">


</div>




<?php include(FOOTER) ?>
