
</div><!-- end of id="wrapper" -->


<div class="row nav navbar-fixed-bottom">
    <div class="pull-right">

    </div>
    <div class="text-center">
        <span> <small>&#xA9;&nbsp;2014 - <?php echo date("Y").', '.$logo; ?></small></span>
    </div>
</div>

</div>




<!-- Mainly scripts -->
<script src="<?php echo $path;?>js/jquery-2.1.1.js"></script>
<script src="<?php echo $path;?>js/bootstrap.min.js"></script>
<script src="<?php echo $path;?>js/plugins/metisMenu/jquery.metisMenu.js"></script>
<script src="<?php echo $path;?>js/plugins/slimscroll/jquery.slimscroll.min.js"></script>


<?php if($javascript=="table"){ ?>
<script src="<?php echo $path;?>js/plugins/jeditable/jquery.jeditable.js"></script>
<script src="<?php echo $path;?>js/plugins/dataTables/datatables.min.js"></script>
<?php } ?>


<!-- Flot -->
<script src="<?php echo $path;?>js/plugins/flot/jquery.flot.js"></script>
<script src="<?php echo $path;?>js/plugins/flot/jquery.flot.tooltip.min.js"></script>
<script src="<?php echo $path;?>js/plugins/flot/jquery.flot.spline.js"></script>
<script src="<?php echo $path;?>js/plugins/flot/jquery.flot.resize.js"></script>
<script src="<?php echo $path;?>js/plugins/flot/jquery.flot.pie.js"></script>

<!-- Peity -->
<script src="<?php echo $path;?>js/plugins/peity/jquery.peity.min.js"></script>
<script src="<?php echo $path;?>js/demo/peity-demo.js"></script>

<!-- Custom and plugin javascript -->
<script src="<?php echo $path;?>js/inspinia.js"></script>
<script src="<?php echo $path;?>js/plugins/pace/pace.min.js"></script>

<!-- jQuery UI -->
<script src="<?php echo $path;?>js/plugins/jquery-ui/jquery-ui.min.js"></script>

<!-- GITTER -->
<script src="<?php echo $path;?>js/plugins/gritter/jquery.gritter.min.js"></script>

<!-- Sparkline -->
<script src="<?php echo $path;?>js/plugins/sparkline/jquery.sparkline.min.js"></script>

<!-- Sparkline demo data  -->
<script src="<?php echo $path;?>js/demo/sparkline-demo.js"></script>

<!-- ChartJS-->
<script src="<?php echo $path;?>js/plugins/chartJs/Chart.min.js"></script>






<?php $pages=array('class_manage') ?>
<?php if(in_array($active_menu_clean,$pages) ) { ?>

    <?php include (SITE_ROOT.DS.$folder_project_name.DS.'layouts_addon'.DS."js_php".DS.'DataTable.php');?>



<?php } unset($pages) ?>



<?php $pages=array('index') ?>
<?php if(in_array($active_menu_clean,$pages) ) { ?>
    <!-- Toastr -->
    <script src="<?php echo $path;?>js/plugins/toastr/toastr.min.js"></script>
    <?php include (SITE_ROOT.DS.$folder_project_name.DS.'layouts_addon'.DS."js_php".DS.'toastr.php');?>
<?php } unset($pages) ?>

</body>

</html>