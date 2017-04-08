<?php require_once('../includes/initialize_transmed.php'); ?>

<?php include(HEADER_PUBLIC); ?>
<?php include_once(NAV_PUBLIC) ?>

<?php
function button_color($color, $txt = "xxx", $href = false, $href_env = "")
{
    global $Nav;
    $bootstrap = ['primary', 'success', 'info', 'danger', 'warning'];

    if (in_array($color, $bootstrap)) {
        $class = "btn btn-{$color} btn-lg index-page";
        $style = "";
    } else {
        $class = "btn btn-lg  index-page";
        $style = "background-color:{$color}; color:white;";
    }

    if ($href) {
        if ($href_env) {
            $new_href = $Nav->http . $Nav->folder . "/" . $href_env . "/" . $href;
        } else {
            $new_href = $Nav->http . $Nav->folder . "/" . $href;

        }
    } else {
        $new_href = "#";
    }

    return "<a href='{$new_href}'><button class='{$class}' style='{$style}' role='button' >{$txt}</button></a>";


}

?>


    <div class="wrapper wrapper-content">

        <div class="container">
            <div class="jumbotron" style="background: white">
                <h1>Bienvenue sur Transmed Service</h1>
                <p>Tel +41 79 321 0893</p>
                <!--                <p><a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a></p>-->
                <div class="row bg-white">
                    <p class="text-center">Model</p>
                    <?php echo button_color('primary', 'ViewModel N', 'transport.php?cl=ViewModel', ''); ?>
                    <?php echo button_color('primary', 'ViewVisibleNo', 'transport.php?cl=ViewVisibleNo', ''); ?>
                    <?php echo button_color('success', 'ViewVisibleYes', 'transport.php?cl=ViewVisibleYes', ''); ?>
                    <?php echo button_color('primary', 'ViewPivotNo', 'transport.php?cl=ViewPivotNo', ''); ?>
                    <?php echo button_color('danger', 'ViewPivotYes', 'transport.php?cl=ViewPivotYes', ''); ?>
                    <?php echo button_color('warning', 'ViewSummary', 'transport.php?cl=ViewSummary', ''); ?>
                    <hr style="background-color: blue;">
                </div>

                <div class="row bg-white">
                    <p class="text-center">Transport</p>
                    <?php echo button_color('primary', 'ViewModel N', 'transport.php?cl=ViewModel', ''); ?>
                    <?php echo button_color('primary', 'Courses N', 'transport.php?cl=Course', ''); ?>
                    <?php echo button_color('success', 'Model N', 'transport.php?cl=Model', ''); ?>
                    <?php echo button_color('primary', 'Clients N', 'transport.php?cl=tClient', ''); ?>
                    <?php echo button_color('danger', 'Chauffeur N', 'transport.php?cl=Chauffeur', ''); ?>
                    <?php echo button_color('warning', 'Transport Type N', 'transport.php?cl=TransportType', ''); ?>
                    <hr style="background-color: blue;">
                </div>


                <div class="row bg-white">
                    <p class="text-center">Transport</p>
                    <?php echo button_color('primary', 'Courses', 'manage_ajax.php?class_name=TransportProgramming', 'admin'); ?>
                    <?php echo button_color('success', h('Modéle'), 'manage_ajax.php?class_name=TransportProgrammingModel', 'admin'); ?>
                    <?php echo button_color('primary', 'Clients', 'manage_ajax.php?class_name=TransportClient', 'admin'); ?>
                    <?php echo button_color('danger', 'Chauffeur', 'manage_ajax.php?class_name=TransportChauffeur', 'admin'); ?>
                    <?php echo button_color('warning', 'Transport Type', 'manage_ajax.php?class_name=TransportType', 'admin'); ?>
                    <hr style="background-color: blue;">
                </div>


                <div class="row bg-white">
                    <p class="text-center"><?php echo h('Dépenses'); ?></p>
                    <?php echo button_color('primary', 'Frais', '', 'admin'); ?>
                    <?php echo button_color('info', 'Essence', '', 'admin'); ?>
                    <hr>
                </div>

                <div class="row bg-white">
                    <p class="text-center">Autres</p>
                    <?php echo button_color('primary', 'Profile', 'profile.php?', ''); ?>
                    <?php echo button_color('primary', 'Profile', 'profile.php?', ''); ?>

                    <?php echo button_color('success', 'Messages', 'manage_ajax.php?cl=Message ', 'admin'); ?>
                    <?php echo button_color('info', 'Notifications', 'manage_ajax.php?class_name=Notification', 'admin'); ?>
                    <?php echo button_color('danger', 'To Dos', 'manage_ajax.php?cl=ToDo', 'admin'); ?>
                    <?php echo button_color('warning', 'Heure presences', 'manage_ajax.php?class_name=HeurePresence', 'admin'); ?>


                    <hr>
                </div>


            </div>
        </div>


    </div>

    <!--    </div>-->


<?php include(FOOTER_PUBLIC); ?>