<?php require_once('../../includes/initialize.php');
$session->confirmation_protected_page();
?>
<?php if(User::is_employee()){ redirect_to('index.php');}?>

<?php if(isset($_GET["class_name"])){$class_name= urldecode($_GET["class_name"]) ;} else {$class_name="User";}  ?>


