<nav class="navbar-default navbar-static-side" role="navigation">
    <div class="sidebar-collapse">
        <a class="close-canvas-menu"><i class="fa fa-times"></i></a>
        <ul class="nav metismenu" id="side-menu">
            <li class="nav-header">
                <div class="dropdown profile-element">
                    <?php
                        $img_path=SITE_ROOT.DS.$folder_project_name.DS.'img'.DS;

                    $user->user_path_and_placeholder();

//                        if(file_exists($img_path.$user->username.'.jpg') && isset($_SESSION["user_id"])){
//                            $username=$user->username;
//                            echo "<span> <img class='img-circle'  src='{$path}img/{$user->username}.jpg' alt='{$user->username}' style='width:3em; height:3em;' > </span>";
//                        }else {
//                            echo "<span><img class='img-circle' src='{$path}img/no_user.jpg' alt='image' style='width:2em;height:2em;'></span>";
//                        }


                        $username=$user->username;
                        echo "<span> <img class='img-circle'  src='{$user->user_path_and_placeholder()}' alt='{$user->username}' style='width:3em; height:3em;' > </span>";


                         ?>


                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="clear"> <span class="block m-t-xs"> 
                                    <strong class="font-bold">
                    <?php if (isset($_SESSION["user_id"])){echo $user->full_name();} else {
                        echo "No User"; } ?>

                                    </strong>
                             </span> <span class="text-muted text-xs block">
        <?php if (isset($_SESSION["user_id"])){echo $user->user_type;}else {echo "Log in"; } ?>

                                    <b class="caret"></b></span> </span> </a>
                    <ul class="dropdown-menu animated fadeInRight m-t-xs">

                        <?php

                        echo "<li><a href='{$path_admin}profile.php'>profile</a></li>";
                        echo "<li><a href='{$path_admin}mailbox.php'>Mailbox</a></li>";
                        echo "<li><a href='{$path_admin}contacts.php'>Contacts</a></li>";


                        echo "<li class='divider'></li>";

                        if(isset($_SESSION["user_id"])) {
                            echo "<li><a href='{$path_admin}logout.php'>Logout</a></li>";
                        } else {
                            echo "<li><a href='{$path_admin}login.php'>Login</a></li>";

                        }

                        ?>


                    </ul>
                </div>
                <div class="logo-element">
                    <?php echo 'KN+'; ?>
                </div>
            </li>

            <?php if($session->is_logged_in()) { ?>
            <li>
                <a href="<?php echo $path_admin;?>index.php"><i class="fa fa-home"></i> <span class="nav-label">Home Admin</span></a>

            </li>


                <li><a href="<?php echo $path_admin;?>chat.php"><i class="fa fa-th-large"></i> <span class="nav-label">Chat</span> </a></li>



                <?php $class_menu="chat"; $text_menu="Chat"; $active_page="chat.php" ?>
                <li class="<?php if($active_menu_clean==$class_menu ){echo 'active';};?>"><a href="<?php echo $path_admin;?>chat.php?=<?php echo $class_menu;?>"><?php echo $text_menu;?></a></li>


            <li class="<?php echo $class_admin_active; ?>">

                <a href="<?php echo $path_admin;?>index.php"><i class="fa fa-th-large"></i> <span class="nav-label">Admin</span> <span class="fa arrow"></span></a>



                <ul class="nav nav-second-level <?php echo $class_admin_collapse; ?>">

                    <?php $class_menu="User"; $text_menu="Users"; $active_page="class_manage.php" ?>
                    <li class="<?php if($class_name==$class_menu && $active_menu==$active_page && $active_admin){echo 'active';};?>"><a href="<?php echo $path_admin;?>class_manage.php?class_name=<?php echo $class_menu;?>"><?php echo $text_menu;?></a></li>

                     <?php $class_menu="Client"; $text_menu="Clients"; $active_page="class_manage.php" ?>
                    <li class="<?php if($class_name==$class_menu && $active_menu==$active_page && $active_admin){echo 'active';};?>"><a href="<?php echo $path_admin;?>class_manage.php?class_name=<?php echo $class_menu;?>"><?php echo $text_menu;?></a></li>

                    <?php $class_menu="Project"; $text_menu="Project"; $active_page="class_manage.php" ?>
                    <li class="<?php if($class_name==$class_menu && $active_menu==$active_page && $active_admin){echo 'active';};?>"><a href="<?php echo $path_admin;?>class_manage.php?class_name=<?php echo $class_menu;?>"><?php echo $text_menu;?></a></li>


                    <?php $class_menu="InvoiceActual"; $text_menu="Invoice Actual"; $active_page="class_manage.php" ?>
                    <li class="<?php if($class_name==$class_menu && $active_menu==$active_page && $active_admin){echo 'active';};?>"><a href="<?php echo $path_admin;?>class_manage.php?class_name=<?php echo $class_menu;?>"><?php echo $text_menu;?></a></li>

                    <?php $class_menu="InvoiceEstimate"; $text_menu="Invoice Estimate"; $active_page="class_manage.php" ?>
                    <li class="<?php if($class_name==$class_menu && $active_menu==$active_page && $active_admin){echo 'active';};?>"><a href="<?php echo $path_admin;?>class_manage.php?class_name=<?php echo $class_menu;?>"><?php echo $text_menu;?></a></li>


                    <?php $class_menu="InvoiceSend"; $text_menu="Invoice Send"; $active_page="class_manage.php" ?>
                    <li class="<?php if($class_name==$class_menu && $active_menu==$active_page && $active_admin){echo 'active';};?>"><a href="<?php echo $path_admin;?>class_manage.php?class_name=<?php echo $class_menu;?>"><?php echo $text_menu;?></a></li>

                    <?php $class_menu="Chat"; $text_menu="Chat"; $active_page="class_manage.php" ?>
                    <li class="<?php if($class_name==$class_menu && $active_menu==$active_page && $active_admin){echo 'active';};?>"><a href="<?php echo $path_admin;?>class_manage.php?class_name=<?php echo $class_menu;?>"><?php echo $text_menu;?></a></li>

                    <?php $class_menu="Notification"; $text_menu="Notifications"; $active_page="class_manage.php" ?>
                    <li class="<?php if($class_name==$class_menu && $active_menu==$active_page && $active_admin){echo 'active';};?>"><a href="<?php echo $path_admin;?>class_manage.php?class_name=<?php echo $class_menu;?>"><?php echo $text_menu;?></a></li>

                </ul>
            </li>


            <li class="<?php  echo $class_kamy_active; ?>">
                <a href="<?php echo $path_admin;?>index.php"><i class="fa fa-th-large"></i> <span class="nav-label">Kamy</span> <span class="fa arrow"></span></a>
                <ul class="nav nav-second-level <?php echo $class_kamy_collapse; ?>">

                    <?php $class_menu="Links"; $text_menu="Links"; $active_page="class_manage.php" ?>
                    <li class="<?php if($class_name==$class_menu && $active_menu==$active_page && $active_admin){echo 'active';};?>"><a href="<?php echo $path_admin;?>class_manage.php?class_name=<?php echo $class_menu;?>"><?php echo $text_menu;?></a></li>

                    <?php $class_menu="MyExpense"; $text_menu="MyExpense"; $active_page="class_manage.php" ?>
                    <li class="<?php if($class_name==$class_menu && $active_menu==$active_page && $active_admin){echo 'active';};?>"><a href="<?php echo $path_admin;?>class_manage.php?class_name=<?php echo $class_menu;?>"><?php echo $text_menu;?></a></li>


                    <?php $class_menu="MyCigarette"; $text_menu="Cigarette"; $active_page="class_manage.php" ?>
                    <li class="<?php if($class_name==$class_menu && $active_menu==$active_page && $active_admin){echo 'active';};?>"><a href="<?php echo $path_admin;?>class_manage.php?class_name=<?php echo $class_menu;?>"><?php echo $text_menu;?></a></li>


                    <?php $class_menu="MyCigaretteDay"; $text_menu="MyCigaretteDay"; $active_page="class_manage.php" ?>
                    <li class="<?php if($class_name==$class_menu && $active_menu==$active_page && $active_admin){echo 'active';};?>"><a href="<?php echo $path_admin;?>class_manage.php?class_name=<?php echo $class_menu;?>"><?php echo $text_menu;?></a></li>

                    <?php $class_menu="MyCigaretteMonth"; $text_menu="MyCigaretteMonth"; $active_page="class_manage.php" ?>
                    <li class="<?php if($class_name==$class_menu && $active_menu==$active_page && $active_admin){echo 'active';};?>"><a href="<?php echo $path_admin;?>class_manage.php?class_name=<?php echo $class_menu;?>"><?php echo $text_menu;?></a></li>

                    <?php $class_menu="MyCigaretteYear"; $text_menu="MyCigaretteYear"; $active_page="class_manage.php" ?>
                    <li class="<?php if($class_name==$class_menu && $active_menu==$active_page && $active_admin){echo 'active';};?>"><a href="<?php echo $path_admin;?>class_manage.php?class_name=<?php echo $class_menu;?>"><?php echo $text_menu;?></a></li>




                </ul>
            </li>


            <?php } // end of is logged in?>






            <li class="<?php  echo $active_public; ?>">
                <a href="<?php echo $path_public;?>index.php"><i class="fa fa-th-large"></i> <span class="nav-label">Public</span> <span class="fa arrow"></span></a>

                <ul class="nav nav-second-level">
                    <li class="<?php if($active_menu=='index.php' && $active_public){echo 'active';};?>"><a href="<?php echo $path_public;?>index.php">Home</a></li>
                    

                    <li class="<?php if($active_menu=='index_old.php' && $active_public){echo 'active';};?>"><a href="<?php echo $path_public;?>index_old.php">Old public Layout</a></li>
                    <li class="<?php if($active_menu=='minor.php'  && $active_public){echo 'active';};?>"><a href="<?php echo $path_public;?>minor.php?class=2">Minor</a></li>
                    <li>
                        <a href="http://www.ikamy.ch/Inspinia_Full_Version/" target="_blank"><i class="fa fa-th-large"></i> <span class="nav-label">Full version</span></a>
                    </li>
                    <li class=""><a href="<?php echo "/smartAdmin/"//.$path;?>index.php?class=2">SmartAdmin</a></li>
                    <li>
   <li class=""><a href="<?php echo "/SmartAdmin_Full_Version_html/"//.$path;?>index.php?class=2">SmartAdmin Full Version</a></li>
                    <li>



                </ul>
            </li>


            <?php if($session->is_logged_in()) { ?>


            <li>
                <a href="#"><i class="fa fa-sitemap"></i> <span class="nav-label">Admin</span><span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="#">Manage<span class="fa arrow"></span></a>
                        <ul class="nav nav-third-level">

                            <?php $class_menu="User"; $text_menu="Users"; $active_page="class_manage.php" ?>
                            <li class="<?php if($class_name==$class_menu && $active_menu==$active_page && $active_admin){echo 'active';};?>"><a href="<?php echo $path_admin;?>class_manage.php?class_name=<?php echo $class_menu;?>"><?php echo $text_menu;?></a></li>

                            <?php $class_menu="Client"; $text_menu="Clients"; $active_page="class_manage.php" ?>
                            <li class="<?php if($class_name==$class_menu && $active_menu==$active_page && $active_admin){echo 'active';};?>"><a href="<?php echo $path_admin;?>class_manage.php?class_name=<?php echo $class_menu;?>"><?php echo $text_menu;?></a></li>

                            <?php $class_menu="Project"; $text_menu="Project"; $active_page="class_manage.php" ?>
                            <li class="<?php if($class_name==$class_menu && $active_menu==$active_page && $active_admin){echo 'active';};?>"><a href="<?php echo $path_admin;?>class_manage.php?class_name=<?php echo $class_menu;?>"><?php echo $text_menu;?></a></li>


                            <?php $class_menu="InvoiceActual"; $text_menu="Invoice Actual"; $active_page="class_manage.php" ?>
                            <li class="<?php if($class_name==$class_menu && $active_menu==$active_page && $active_admin){echo 'active';};?>"><a href="<?php echo $path_admin;?>class_manage.php?class_name=<?php echo $class_menu;?>"><?php echo $text_menu;?></a></li>

                            <?php $class_menu="InvoiceEstimate"; $text_menu="Invoice Estimate"; $active_page="class_manage.php" ?>
                            <li class="<?php if($class_name==$class_menu && $active_menu==$active_page && $active_admin){echo 'active';};?>"><a href="<?php echo $path_admin;?>class_manage.php?class_name=<?php echo $class_menu;?>"><?php echo $text_menu;?></a></li>


                            <?php $class_menu="InvoiceSend"; $text_menu="Invoice Send"; $active_page="class_manage.php" ?>
                            <li class="<?php if($class_name==$class_menu && $active_menu==$active_page && $active_admin){echo 'active';};?>"><a href="<?php echo $path_admin;?>class_manage.php?class_name=<?php echo $class_menu;?>"><?php echo $text_menu;?></a></li>

                        </ul>
                    </li>




                    <li>
                        <a href="#">Set Up Admin<span class="fa arrow"></span></a>
                        <ul class="nav nav-third-level <?php echo $class_setup_admin_collapse; ?>">

                            <?php $class_menu="Currency"; $text_menu="Currency"; $active_page="class_manage.php" ?>
                            <li class="<?php if($class_name==$class_menu && $active_menu==$active_page && $active_admin){echo 'active';};?>"><a href="<?php echo $path_admin;?>class_manage.php?class_name=<?php echo $class_menu;?>"><?php echo $text_menu;?><span class="label label-primary pull-right">FULL</span></a></li>

                            <?php $class_menu="Category"; $text_menu="Category"; $active_page="class_manage.php" ?>
                            <li class="<?php if($class_name==$class_menu && $active_menu==$active_page && $active_admin){echo 'active';};?>"><a href="<?php echo $path_admin;?>class_manage.php?class_name=<?php echo $class_menu;?>"><?php echo $text_menu;?><span class="label label-primary pull-right">FULL</span></a></li>

                            <?php $class_menu="Category1"; $text_menu="Category1"; $active_page="class_manage.php" ?>
                            <li class="<?php if($class_name==$class_menu && $active_menu==$active_page && $active_admin){echo 'active';};?>"><a href="<?php echo $path_admin;?>class_manage.php?class_name=<?php echo $class_menu;?>"><?php echo $text_menu;?><span class="label label-primary pull-right">FULL</span></a></li>

                            <?php $class_menu="Category2"; $text_menu="Category2"; $active_page="class_manage.php" ?>
                            <li class="<?php if($class_name==$class_menu && $active_menu==$active_page && $active_admin){echo 'active';};?>"><a href="<?php echo $path_admin;?>class_manage.php?class_name=<?php echo $class_menu;?>"><?php echo $text_menu;?><span class="label label-primary pull-right">FULL</span></a></li>

                            <?php $class_menu="UserType"; $text_menu="UserType"; $active_page="class_manage.php" ?>
                            <li class="<?php if($class_name==$class_menu && $active_menu==$active_page && $active_admin){echo 'active';};?>"><a href="<?php echo $path_admin;?>class_manage.php?class_name=<?php echo $class_menu;?>"><?php echo $text_menu;?><span class="label label-primary pull-right">FULL</span></a></li>
                         </ul>

                    </li>
<!--                    <li>-->
<!--                        <a href="#">Second Level Item</a></li>-->

                </ul>
            </li>





            <li>
                <a href="#"><i class="fa fa-sitemap"></i> <span class="nav-label">Kamy</span><span class="fa arrow"></span></a>
                <ul class="nav nav-second-level collapse">
                    <li>
                        <a href="#">Manage Kamy<span class="fa arrow"></span></a>
                        <ul class="nav nav-third-level">

                            <?php $class_menu="Links"; $text_menu="Links"; $active_page="class_manage.php" ?>
                            <li class="<?php if($class_name==$class_menu && $active_menu==$active_page && $active_admin){echo 'active';};?>"><a href="<?php echo $path_admin;?>class_manage.php?class_name=<?php echo $class_menu;?>"><?php echo $text_menu;?></a></li>

                            <?php $class_menu="MyExpense"; $text_menu="MyExpense"; $active_page="class_manage.php" ?>
                            <li class="<?php if($class_name==$class_menu && $active_menu==$active_page && $active_admin){echo 'active';};?>"><a href="<?php echo $path_admin;?>class_manage.php?class_name=<?php echo $class_menu;?>"><?php echo $text_menu;?></a></li>


                            <?php $class_menu="MyCigarette"; $text_menu="Cigarette"; $active_page="class_manage.php" ?>
                            <li class="<?php if($class_name==$class_menu && $active_menu==$active_page && $active_admin){echo 'active';};?>"><a href="<?php echo $path_admin;?>class_manage.php?class_name=<?php echo $class_menu;?>"><?php echo $text_menu;?></a></li>


                            <?php $class_menu="MyCigaretteDay"; $text_menu="MyCigaretteDay"; $active_page="class_manage.php" ?>
                            <li class="<?php if($class_name==$class_menu && $active_menu==$active_page && $active_admin){echo 'active';};?>"><a href="<?php echo $path_admin;?>class_manage.php?class_name=<?php echo $class_menu;?>"><?php echo $text_menu;?></a></li>

                            <?php $class_menu="MyCigaretteMonth"; $text_menu="MyCigaretteMonth"; $active_page="class_manage.php" ?>
                            <li class="<?php if($class_name==$class_menu && $active_menu==$active_page && $active_admin){echo 'active';};?>"><a href="<?php echo $path_admin;?>class_manage.php?class_name=<?php echo $class_menu;?>"><?php echo $text_menu;?></a></li>

                            <?php $class_menu="MyCigaretteYear"; $text_menu="MyCigaretteYear"; $active_page="class_manage.php" ?>
                            <li class="<?php if($class_name==$class_menu && $active_menu==$active_page && $active_admin){echo 'active';};?>"><a href="<?php echo $path_admin;?>class_manage.php?class_name=<?php echo $class_menu;?>"><?php echo $text_menu;?></a></li>




                        </ul>
                    </li>




                    <li>
                        <a href="#">Set Up Kamy<span class="fa arrow"></span></a>
                        <ul class="nav nav-third-level">
                            <?php $class_menu="MyExpensePerson"; $text_menu="My Expense Person"; $active_page="class_manage.php" ?>
                            <li class="<?php if($class_name==$class_menu && $active_menu==$active_page && $active_admin){echo 'active';};?>"><a href="<?php echo $path_admin;?>class_manage.php?class_name=<?php echo $class_menu;?>"><?php echo $text_menu;?><span class="label label-primary pull-right">FULL</span></a></li>

                            <?php $class_menu="MyExpenseType"; $text_menu="My Expense Type"; $active_page="class_manage.php" ?>
                            <li class="<?php if($class_name==$class_menu && $active_menu==$active_page && $active_admin){echo 'active';};?>"><a href="<?php echo $path_admin;?>class_manage.php?class_name=<?php echo $class_menu;?>"><?php echo $text_menu;?><span class="label label-primary pull-right">FULL</span></a></li>




                        </ul>

                    </li>
<!--                    <li>-->
<!--                        <a href="#">Second Level Item</a></li>-->

                </ul>
            </li>

            <?php } ?>


            <li class="landing_link">
                <a target="_blank" href="<?php echo $path_public; ?>landing.php"><i class="fa fa-star"></i> <span class="nav-label">Landing Page</span> <span class="label label-warning pull-right">NEW</span></a>
            </li>






        </ul>

    </div>
</nav>