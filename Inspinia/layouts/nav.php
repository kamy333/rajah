<div id="page-wrapper" class="gray-bg">
    <div class="row border-bottom">
        <nav class="navbar navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="#"><i class="fa fa-bars"></i> </a>
                <form role="search" class="navbar-form-custom" action="<?php echo $path_admin; ?>search_results.php">
                    <div class="form-group">
                        <input type="text" placeholder="Search for something..." class="form-control" name="top-search" id="top-search">
                    </div>
                </form>
            </div>
            <ul class="nav navbar-top-links navbar-right">
                <li>
                    <span class="m-r-sm text-muted welcome-message">Welcome to <?php echo $logo; ?>.</span>
                </li>



      <?php if ($session->is_logged_in()) {?>
        <?php   echo Chat::get_chat();?>


                        <li class="dropdown">
                    <a class="dropdown-toggle count-info" data-toggle="dropdown" href="#">
                        <i class="fa fa-bell"></i>  <span class="label label-primary">8</span>
                    </a>
                    <ul class="dropdown-menu dropdown-alerts">
                        
                        <li>
                            <a href="<?php echo $path_admin; ?>mailbox.php">
                                <div>
                                    <i class="fa fa-envelope fa-fw"></i> You have 16 messages
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="<?php echo $path_admin; ?>profile.php">
                                <div>
                                    <i class="fa fa-twitter fa-fw"></i> 3 New Followers
                                    <span class="pull-right text-muted small">12 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="<?php echo $path_admin; ?>grid_options.php">
                                <div>
                                    <i class="fa fa-upload fa-fw"></i> Server Rebooted
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>


                        <li>
                            <div class="text-center link-block">
                                <a href="<?php echo $path_admin; ?>notifications.php">
                                    <strong>See All Alerts</strong>
                                    <i class="fa fa-angle-right"></i>
                                </a>
                            </div>
                        </li>
                    </ul>
                </li>

      <?php } // end of notification when $session->is_logged_in() ?>

                    <?php
                    if($session->is_logged_in()) {
                        echo "<li><a href='{$path_public}index.php'><i class=\"fa fa-home\"></i> Home</a></li>";

                        echo "<li><a href='{$path_admin}logout.php'><i class=\"fa fa-sign-out\"></i> Log out</a></li>";

                    } else {
                        echo "<li><a href='{$path_public}index.php'><i class=\"fa fa-home\"></i> Home </a></li>";

                     if ($active_menu_clean !=='login'){
                        echo "<li><a href='{$path_admin}login.php'><i class=\"fa fa-sign-in\"></i> Log in</a></li>";
                     }

                    }
                    ?>




                <li>
                    <a class="right-sidebar-toggle">
                        <i class="fa fa-tasks"></i>
                    </a>
                </li>
            </ul>

        </nav>
    </div>


