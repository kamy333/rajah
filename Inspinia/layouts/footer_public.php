

<div class="row nav navbar-fixed-bottom">
    <div class="pull-right">

    </div>
    <div class="text-center">
        <strong></strong><?php echo $logo; ?> &copy; 2014-<?php echo date("Y");?>

    </div>
</div>

</div>
</div>



<!-- Mainly scripts -->
<script src="js/jquery-2.1.1.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/plugins/metisMenu/jquery.metisMenu.js"></script>
<script src="js/plugins/slimscroll/jquery.slimscroll.min.js"></script>

<!-- Custom and plugin javascript -->
<script src="js/inspinia.js"></script>
<script src="js/plugins/pace/pace.min.js"></script>


<!-- Flot -->
<!--<script src="js/plugins/flot/jquery.flot.js"></script>-->
<!--<script src="js/plugins/flot/jquery.flot.tooltip.min.js"></script>-->
<!--<script src="js/plugins/flot/jquery.flot.resize.js"></script>-->

<!-- ChartJS-->
<!--<script src="js/plugins/chartJs/Chart.min.js"></script>-->

<!-- Peity -->
<!--<script src="js/plugins/peity/jquery.peity.min.js"></script>-->
<!-- Peity demo -->
<!--<script src="js/demo/peity-demo.js"></script>-->

<?php //--------------------------------------------------------------------------------- ?>
<?php $pages=array('index_gallery','index_video','index_gallery2','index_gallery3') ?>
<?php if(in_array($active_menu_clean,$pages) ) { ?>
    <!-- blueimp gallery -->
    <?php include (SITE_ROOT.DS.$folder_project_name.DS.'layouts_addon'.DS."js_php".DS.'blueimpVideo.php');?>
    <script>
        $(".hover_img").mouseover(function() {
            $(this).css("width","5em");
            $(this).css("height","5em");

        }).mouseout(function() {
            $(this).css("width","3em");
            $(this).css("height","3em");
        });

    </script>
<?php } unset($pages) ?>


<?php //--------------------------------------------------------------------------------- ?>
<?php $pages=array('index') ?>
<?php if(in_array($active_menu_clean,$pages) ) { ?>
    <script>$('.carousel').carousel({interval: 3000})</script>

    <!-- Toastr -->
    <script src="<?php echo $path;?>js/plugins/toastr/toastr.min.js"></script>
<?php include (SITE_ROOT.DS.$folder_project_name.DS.'layouts_addon'.DS."js_php".DS.'toastr.php');?>
 <?php include (SITE_ROOT.DS.$folder_project_name.DS.'layouts_addon'.DS."js_php".DS.'blueimpVideo.php');?>


<?php } unset($pages) ?>
<?php //--------------------------------------------------------------------------------- ?>



<?php $pages=array('player') ?>
<?php if(in_array($active_menu_clean,$pages) ) { ?>

    <script src="js/plugins/video_players/player.js"></script>

<?php } unset($pages) ?>
<?php //--------------------------------------------------------------------------------- ?>









</body>

</html>
