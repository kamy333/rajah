
<?php echo str_repeat("<br>", 4); ?>

<!--   <div class="" >-->
<footer class="row nav navbar-fixed-bottom my_footer">
    <div class="row">
    <div class="socialmediaicons pull-right" style="margin-right: 5em;">

    </div>
    <div class="text-center">
    <p class="text-center"> <small>&#xA9;&nbsp;2014 - <?php echo date("Y"); ?>,<?php echo " ".$logo;?> </small></p>
    </div>
    </div>
</footer>

</div>   <!--Div class container-->

<script src="//code.jquery.com/jquery-latest.min.js"></script>
<script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
<script>tinymce.init({ selector:'textarea' });</script>

<?php if (isset($layout_context) && $layout_context=="public"){  ?>

    <?php $jspath=""; ?>
    <script src="js/bootstrap.min.js"></script>
    <script src="myjs/socialmedia.js"></script>


<?php    } else { ?>
<?php $jspath="../"; ?>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../myjs/socialmedia.js"></script>
<?php } ?>

<?php   if ( isset($javascript) && $javascript=="some_data"){?>
<script src="<?php echo $jspath."myjs/some_data"  ?>"</script>

<?php }?>


<?php   if ( isset($javascript) && $javascript=="InvoiceActual"){?>

    <script src="../myjs/InvoiceActual.js"></script>
    <?php }?>


<?php   if ( isset($javascript) && $javascript=="InvoiceActual_Row"){?>

    <script src="../myjs/InvoiceActual_Row.js"></script>
<?php }?>


    <?php /*    if ( isset($javascript) && $javascript=="manage_course"){*/?>
<!--        <script src="js/manage_course_view.js"></script>-->
    <?php /*}*/?>

<?php /*    if ( isset($javascript) && $javascript=="manage_client"){*/?>
<!--    <script src="js/manage_client_view .js"></script>-->
<?php /*}*/?>


<!--            testing            -->

    <script src="js/test_tooltips.js"></script>


</body>

<!--    <script src="javascripts/formvalidation.js"></script>-->
<!--   <script src="javascripts/js_admin.js"></script>-->



</html>
<?php if(isset($database)) { $database->close_connection(); } ?>
