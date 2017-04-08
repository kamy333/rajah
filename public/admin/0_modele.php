<?php require_once('../../includes/initialize.php');?>
<?php //unset($database); ?>
<?php  $session->confirmation_protected_page(); ?>
<?php if(User::is_employee() || User::is_secretary()){ redirect_to('index.php');}?>



<?php $layout_context = "admin"; ?>
<?php $active_menu="download" ?>
<?php $stylesheets="" //custom_form  ?>
<?php $view_full_table==1? $fluid_view=true :$fluid_view=false; ?>
<?php $javascript="form_admin" ?>
<?php $sub_menu=false ?>
<?php include(SITE_ROOT.DS.'public'.DS.'layouts'.DS."header.php") ?>
<?php //include(SITE_ROOT.DS.'public'.DS.'layouts'.DS."nav.php") ?>
<?php  echo isset($valid)? $valid->form_errors():"" ?>
<?php echo $message; ?>

<?php


echo "<h1>Reporting Heure Presence</h1>";

echo "<div id='HeurePresenceYear'>";
echo "<h2>Year</h2>";
echo HeurePresence::report("ByYear");
echo "</div>";

echo "<div id='HeurePresenceDay'>";
echo "<h2>Day</h2>";
echo HeurePresence::report("ByDay");
echo "</div>";

echo "<div id='HeurePresenceWeek'>";
echo "<h2>Week</h2>";
echo HeurePresence::report("ByWeek");
echo "</div>";

echo "<div id='HeurePresenceMonth'>";
echo "<h2>Month</h2>";
echo HeurePresence::report("ByMonth");
echo "</div>";

?>
<?php include(SITE_ROOT.DS.'public'.DS.'layouts'.DS."footer.php") ?>



