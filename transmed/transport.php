<?php require_once('../includes/initialize_transmed.php'); ?>

<?php include(HEADER_PUBLIC); ?>
<?php include_once(NAV_PUBLIC) ?>



    <div class="wrapper wrapper-content">

        <div class="container-fluid">
            <?php
            $class_Name = MyClasses::redirect_disable_class();
            echo call_user_func_array([$class_Name, "main_display"], []);
            ?>
        </div>


    </div>

    <!--    </div>-->


<?php include(FOOTER_PUBLIC); ?>