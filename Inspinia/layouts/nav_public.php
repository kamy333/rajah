<div class="row border-bottom white-bg">
    <nav class="navbar navbar-static-top" role="navigation">
        <div class="navbar-header">
            <button aria-controls="navbar" aria-expanded="false" data-target="#navbar" data-toggle="collapse" class="navbar-toggle collapsed" type="button">
                <i class="fa fa-reorder"></i>
            </button>
            <a href="<?php echo $path_public;?>index.php" class="navbar-brand"><?php echo $logo; ?></a>
        </div>
        <div class="navbar-collapse collapse" id="navbar">
            <ul class="nav navbar-nav">
                <li class="active">
                    <a aria-expanded="false" role="button" href="<?php echo $path_admin;?>index.php">Admin </a>
                </li>
                <li class="active">
                    <a  aria-expanded="false" role="button" href="<?php echo "/smartAdmin/"//.$path;?>index.php?class=2">SmartAdmin</a></li>
                <li>
                <li >
                    <a aria-expanded="false" role="button" href="<?php echo $path_public;?>myLinks.php">Links</a>
                </li>

                <li class="dropdown">
                    <a aria-expanded="false" role="button" href="#" class="dropdown-toggle" data-toggle="dropdown"> Public <span class="caret"></span></a>
                    <ul role="menu" class="dropdown-menu">
                        <li><a href="<?php echo $path;?>index.php">New public Layout</a></li>
                        <li><a href="<?php echo $path;?>index_gallery.php">Photo Gallery</a></li>
                        <li><a href="<?php echo $path;?>index_gallery2.php">Photo Gallery2</a></li>
                        <li><a href="<?php echo $path;?>index_gallery3.php">Photo Gallery3</a></li>
                        <li><a href="<?php echo $path;?>index_old">Old public Layout</a></li>
                        <li><a href="<?php echo $path_public;?>minor.php">Minor</a></li>
                        <li><a href="<?php echo $path_public;?>landing.php">Landing Page</a></li>
                        <li><a href="<?php echo $path_public;?>off_canvas_menu.php">Canvas view</a></li>
                        <li><a href="<?php echo $path_public;?>player.php">players</a></li>

                    </ul>
                </li>
                <li class="dropdown">
                    <a aria-expanded="false" role="button" href="#" class="dropdown-toggle" data-toggle="dropdown"> Desiree's Book <span class="caret"></span></a>
                    <ul role="menu" class="dropdown-menu">
                        <li><a href="<?php echo $path;?>index_gallery.php">Gallery</a></li>
                    </ul>
                </li>
                <!--<li class="dropdown">
                    <a aria-expanded="false" role="button" href="#" class="dropdown-toggle" data-toggle="dropdown"> Menu item <span class="caret"></span></a>
                    <ul role="menu" class="dropdown-menu">
                        <li><a href="<?php /*echo $path;*/?>">Menu item</a></li>
                        <li><a href="<?php /*echo $path;*/?>">Menu item</a></li>
                        <li><a href="<?php /*echo $path;*/?>">Menu item</a></li>
                        <li><a href="<?php /*echo $path;*/?>">Menu item</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a aria-expanded="false" role="button" href="#" class="dropdown-toggle" data-toggle="dropdown"> Menu item <span class="caret"></span></a>
                    <ul role="menu" class="dropdown-menu">
                        <li><a href="<?php /*echo $path;*/?>">Menu item</a></li>
                        <li><a href="<?php /*echo $path;*/?>">Menu item</a></li>
                        <li><a href="<?php /*echo $path;*/?>">Menu item</a></li>
                        <li><a href="<?php /*echo $path;*/?>">Menu item</a></li>
                    </ul>
                </li>-->

            </ul>
            <ul class="nav navbar-top-links navbar-right">
                <?php
                echo "<li>Welcome to $logo</li>";
                if(isset($_SESSION["user_id"])) {
                echo "<li><a href='{$path_admin}logout.php'><i class=\"fa fa-sign-out\"></i> $user->username</a></li>";
                } else {
                echo "<li><a href='{$path_admin}register.php'><i class=\"fa fa-r\"></i>Register</a></li>";
                echo "<li><a href='{$path_admin}login.php'><i class=\"fa fa-sign-in\"></i> Log in</a></li>";
                }


                $img_path=SITE_ROOT.DS.$folder_project_name.DS.'img'.DS;
                if(file_exists($img_path.$user->username.'.jpg') && isset($_SESSION["user_id"])){
                $username=$user->username;
                echo "<span> <img class='img-circle'  src='{$path}img/{$user->username}.jpg' alt='{$user->username}' style='width:3em; height:3em;' > </span>";
                }else {
                echo "<span><img class='img-circle' src='{$path}img/no_user.jpg' alt='image' style='width:2em;height:2em;'></span>";
                }
                ?>

            </ul>
        </div>
    </nav>
</div>