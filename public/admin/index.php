<?php
require_once('../../includes/initialize.php');?>
<?php  $session->confirmation_protected_page(); ?>

<?php $layout_context = "admin"; ?>
<?php $active_menu="admin" ?>
<?php $stylesheets="" //custom_form  ?>
<?php $sub_menu=true; ?>
<?php $javascript="form_admin" ?>
<?php include(SITE_ROOT.DS.'public'.DS.'layouts'.DS."header.php") ?>
<?php include(SITE_ROOT.DS.'public'.DS.'layouts'.DS."nav.php") ?>

<span><a href="../index.php">&laquo; Public</a></span>
<h2>Menu</h2>

	<?php echo output_message($message); ?>

<!---->


<ul>
    <li><a href="../../SmartAdmin/">SmartAdmin</a></li>
    <li><a href="../../SmartAdmin_PHP_AJAX_Version_v1.8.1/">SmartAdmin Full Version</a></li>
    <li><a href="../../Inspinia/">Inspinia</a></li>
    <li><a href="../../Inspinia_Full_Version/">Inspinia Full Version</a></li>
</ul>

	<ul>
		<li><a href="logfile.php">View Log file</a></li>
		<li><a href="logout.php">Logout</a></li>
		<li><a href="logout.php">Logout</a></li>


    </ul>

<ul>
        <li><a href="manage_user.php">Manage User</a></li>
        <li><a href="new_user.php">New User</a></li>
        <li><a href="#">Edit User</a></li>
        <li><a href="#">Delete User</a></li>
</ul>

<ul>
        <li><a href="#">Manage Project</a></li>
        <li><a href="#">New Project</a></li>
        <li><a href="#">Edit Project</a></li>
        <li><a href="#">Delete Project</a></li>
</ul>
<ul>
        <li><a href="#">Manage Invoice Estimate</a></li>
        <li><a href="#">New Invoice Estimate</a></li>
        <li><a href="#">Edit Invoice Estimate</a></li>
        <li><a href="#">Delete Invoice Estimate</a></li>
</ul>

<ul>
        <li><a href="#">Manage Invoice Actual</a></li>
        <li><a href="#">New Invoice Actual</a></li>
        <li><a href="#">Edit Invoice Actual</a></li>
        <li><a href="#">Delete Invoice Actual</a></li>
</ul>

<ul>
        <li><a href="">Manage Invoice</a></li>
        <li><a href="">New Invoice</a</li>
        <li><a href="">Edit Invoice</a></li>
        <li><a href="">Delete Invoice</a></li>

    </ul>



<?php include(SITE_ROOT.DS.'public'.DS.'layouts'.DS."footer.php") ?>
		
