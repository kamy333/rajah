<?php require_once('../../includes/initialize.php'); ?>
<?php  $session->confirmation_protected_page(); ?>
<?php if(User::is_employee()){ redirect_to('index.php');}?>

<?php $class_name="Currency" ?>

<?php
if (!isset($_GET["id"])) {
    $id="";
    redirect_to($class_name::$page_manage);
} else {

    $id=$_GET["id"];
    $class_found=$class_name::find_by_id($id);


    if($class_found->delete()){
        $session->message($class_found->pseudo." succesfully deleted") ;
        $session->ok(true);
        redirect_to($class_name::$page_manage);
    } else {
        $session->message($class_found->pseudo." deletion failed ") ;
        redirect_to($class_name::$page_manage);
    }




}





?>

