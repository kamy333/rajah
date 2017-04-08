<?php require_once('../../includes/initialize.php'); ?>
<?php $session->confirmation_protected_page(); ?>

<?php if (User::is_employee() || User::is_visitor()) {
    redirect_to('index.php');
} ?>


<?php
// The maximum file size (in bytes) must be declared before the file input field
// and can't be larger than the setting for upload_max_filesize in php.ini.
//
// This form value can be manipulated. You should still use it, but you rely 
// on upload_max_filesize as the absolute limit.
//
// Think of it as a polite declaration: "Hey PHP, here comes a file less than X..."
// PHP will stop and complain once X is exceeded.
// 
// 1 megabyte is actually 1,048,576 bytes.
// You can round it unless the precision matters.
?>
<?php $layout_context = "admin"; ?>
<?php $active_menu = "profile"; ?>
<?php $stylesheets = ""; ?>
<?php $fluid_view = false; ?>
<?php $javascript = ""; ?>
<?php $incl_message_error = true; ?>
<?php include(SITE_ROOT . DS . 'public' . DS . 'layouts' . DS . "header.php") ?>
<?php include(SITE_ROOT . DS . 'public' . DS . 'layouts' . DS . "nav.php") ?>


<?php echo isset($valid) ? $valid->form_errors() : "" ?>
<?php echo isset($valid) ? $valid->form_warnings() : "" ?>

<?php if (isset($message)) {
    echo $message;
}
//echo "<div class='row'>";

//
//echo "<div class='row'>";
//echo "</div>";
//HeurePresence::update_all();

echo HeurePresence::short_form();


echo "<div class='row'>";
//echo HeurePresence::aside_right();
echo HeurePresence::report_period();
//echo HeurePresence::aside_right();
echo "</div>";


?>


<?php include(SITE_ROOT . DS . 'public' . DS . 'layouts' . DS . "footer.php") ?>
