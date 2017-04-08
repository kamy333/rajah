<?php require_once('../includes/initialize_transmed.php'); ?>

<?php include(HEADER_PUBLIC); ?>
<?php include_once(NAV_PUBLIC) ?>

<?php
$title = h("Modèle");
?>


    <div class="wrapper wrapper-content">

        <div class="container">

            <h1 class="text-center"><?php echo $title; ?></h1>
            <?php $class_Name = MyClasses::redirect_disable_class();

            echo $class_Name;

            echo call_user_func_array([$class_Name, "main_display"], []);
            ?>


        </div>


    </div>

    <!--    </div>-->


<?php include(FOOTER_PUBLIC); ?>