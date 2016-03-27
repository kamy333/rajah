


<nav class="navbar-default navbar-static-side" role="navigation">
    <div class="sidebar-collapse">
        <ul class="nav metismenu" id="side-menu">
            <li class="nav-header">
                <div class="dropdown profile-element">

                        <?php
//                        if(file_exists("{$path}img/{$user->username}.JPG")){
//                            echo "<span><img class='img-thumbnail img-responsive img-circle'
//  src='{$path}img/{$user->username}.JPG' alt='{$user->username}' style='width:2em;height:2em;'</span>";
//                        }
//                        ?>

<?php      if (isset($_SESSION["user_id"])){?>
                    <span>
                            <img alt="image" class="img-circle" style='width:3em;height:3em;' src="<?php echo $path;?>img/<?php echo $user->username;?>.jpg" />
                             </span>

<?php } ?>


                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="clear"> <span class="block m-t-xs"> 
                                    <strong class="font-bold">
                    <?php if (isset($_SESSION["user_id"])){echo $user->full_name();} ?>

                                    </strong>
                             </span> <span class="text-muted text-xs block">
                     <?php if (isset($_SESSION["user_id"])){echo $user->user_type();} ?>
                                    
                                    <b class="caret"></b></span> </span> </a>
                    <ul class="dropdown-menu animated fadeInRight m-t-xs">
                        <li><a href="#">Logout</a></li>
                    </ul>
                </div>
                <div class="logo-element">
                    <?php echo 'KN+'; ?>
                </div>
            </li>


            <li>
                <a href="<?php echo $path_admin;?>index.php"><i class="fa fa-home"></i> <span class="nav-label">Home</span></a>

            </li>

            <li class="<?php echo $class_admin_active; ?>">

                <a href="<?php echo $path_admin;?>index.php"><i class="fa fa-th-large"></i> <span class="nav-label">Admin</span> <span class="fa arrow"></span></a>

                <ul class="nav nav-second-level <?php echo $class_admin_collapse; ?>">

                    <?php $class_menu="User"; $text_menu="Users"; $active_page="manage_class.php" ?>
                    <li class="<?php if($class_name==$class_menu && $active_menu==$active_page && $active_admin){echo 'active';};?>"><a href="<?php echo $path_admin;?>manage_class.php?class_name=<?php echo $class_menu;?>"><?php echo $text_menu;?></a></li>

                     <?php $class_menu="Client"; $text_menu="Clients"; $active_page="manage_class.php" ?>
                    <li class="<?php if($class_name==$class_menu && $active_menu==$active_page && $active_admin){echo 'active';};?>"><a href="<?php echo $path_admin;?>manage_class.php?class_name=<?php echo $class_menu;?>"><?php echo $text_menu;?></a></li>

                    <?php $class_menu="Project"; $text_menu="Project"; $active_page="manage_class.php" ?>
                    <li class="<?php if($class_name==$class_menu && $active_menu==$active_page && $active_admin){echo 'active';};?>"><a href="<?php echo $path_admin;?>manage_class.php?class_name=<?php echo $class_menu;?>"><?php echo $text_menu;?></a></li>


                    <?php $class_menu="InvoiceActual"; $text_menu="Invoice Actual"; $active_page="manage_class.php" ?>
                    <li class="<?php if($class_name==$class_menu && $active_menu==$active_page && $active_admin){echo 'active';};?>"><a href="<?php echo $path_admin;?>manage_class.php?class_name=<?php echo $class_menu;?>"><?php echo $text_menu;?></a></li>

                    <?php $class_menu="InvoiceEstimate"; $text_menu="Invoice Estimate"; $active_page="manage_class.php" ?>
                    <li class="<?php if($class_name==$class_menu && $active_menu==$active_page && $active_admin){echo 'active';};?>"><a href="<?php echo $path_admin;?>manage_class.php?class_name=<?php echo $class_menu;?>"><?php echo $text_menu;?></a></li>


                    <?php $class_menu="InvoiceSend"; $text_menu="Invoice Send"; $active_page="manage_class.php" ?>
                    <li class="<?php if($class_name==$class_menu && $active_menu==$active_page && $active_admin){echo 'active';};?>"><a href="<?php echo $path_admin;?>manage_class.php?class_name=<?php echo $class_menu;?>"><?php echo $text_menu;?></a></li>


                </ul>
            </li>


            <li class="<?php  echo $class_kamy_active; ?>">
                <a href="<?php echo $path_admin;?>index.php"><i class="fa fa-th-large"></i> <span class="nav-label">Kamy</span> <span class="fa arrow"></span></a>
                <ul class="nav nav-second-level <?php echo $class_kamy_collapse; ?>">

                    <?php $class_menu="Links"; $text_menu="Links"; $active_page="manage_class.php" ?>
                    <li class="<?php if($class_name==$class_menu && $active_menu==$active_page && $active_admin){echo 'active';};?>"><a href="<?php echo $path_admin;?>manage_class.php?class_name=<?php echo $class_menu;?>"><?php echo $text_menu;?></a></li>

                    <?php $class_menu="MyExpense"; $text_menu="MyExpense"; $active_page="manage_class.php" ?>
                    <li class="<?php if($class_name==$class_menu && $active_menu==$active_page && $active_admin){echo 'active';};?>"><a href="<?php echo $path_admin;?>manage_class.php?class_name=<?php echo $class_menu;?>"><?php echo $text_menu;?></a></li>


                    <?php $class_menu="MyCigarette"; $text_menu="Cigarette"; $active_page="manage_class.php" ?>
                    <li class="<?php if($class_name==$class_menu && $active_menu==$active_page && $active_admin){echo 'active';};?>"><a href="<?php echo $path_admin;?>manage_class.php?class_name=<?php echo $class_menu;?>"><?php echo $text_menu;?></a></li>


                    <?php $class_menu="MyCigaretteDay"; $text_menu="MyCigaretteDay"; $active_page="manage_class.php" ?>
                    <li class="<?php if($class_name==$class_menu && $active_menu==$active_page && $active_admin){echo 'active';};?>"><a href="<?php echo $path_admin;?>manage_class.php?class_name=<?php echo $class_menu;?>"><?php echo $text_menu;?></a></li>

                    <?php $class_menu="MyCigaretteMonth"; $text_menu="MyCigaretteMonth"; $active_page="manage_class.php" ?>
                    <li class="<?php if($class_name==$class_menu && $active_menu==$active_page && $active_admin){echo 'active';};?>"><a href="<?php echo $path_admin;?>manage_class.php?class_name=<?php echo $class_menu;?>"><?php echo $text_menu;?></a></li>

                    <?php $class_menu="MyCigaretteYear"; $text_menu="MyCigaretteYear"; $active_page="manage_class.php" ?>
                    <li class="<?php if($class_name==$class_menu && $active_menu==$active_page && $active_admin){echo 'active';};?>"><a href="<?php echo $path_admin;?>manage_class.php?class_name=<?php echo $class_menu;?>"><?php echo $text_menu;?></a></li>




                </ul>
            </li>








            <li class="<?php  echo $active_public; ?>">
                <a href="<?php echo $path_public;?>index.php"><i class="fa fa-th-large"></i> <span class="nav-label">Public</span> <span class="fa arrow"></span></a>

                <ul class="nav nav-second-level">
                    <li class="<?php if($active_menu=='index.php' && $active_public){echo 'active';};?>"><a href="<?php echo $path_public;?>index.php">Home</a></li>
                    <li class="<?php if($active_menu=='minor.php'  && $active_public){echo 'active';};?>"><a href="<?php echo $path_public;?>minor.php?class=2">Minor</a></li>
                    <li>
                        <a href="http://www.ikamy.ch/Inspinia_Full_Version/" target="_blank"><i class="fa fa-th-large"></i> <span class="nav-label">full version</span></a>
                    </li>

                </ul>
            </li>


            <li >
                <a href="#"><i class="fa fa-sitemap"></i> <span class="nav-label">Admin</span><span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="#">Manage<span class="fa arrow"></span></a>
                        <ul class="nav nav-third-level">

                            <?php $class_menu="User"; $text_menu="Users"; $active_page="manage_class.php" ?>
                            <li class="<?php if($class_name==$class_menu && $active_menu==$active_page && $active_admin){echo 'active';};?>"><a href="<?php echo $path_admin;?>manage_class.php?class_name=<?php echo $class_menu;?>"><?php echo $text_menu;?></a></li>

                            <?php $class_menu="Client"; $text_menu="Clients"; $active_page="manage_class.php" ?>
                            <li class="<?php if($class_name==$class_menu && $active_menu==$active_page && $active_admin){echo 'active';};?>"><a href="<?php echo $path_admin;?>manage_class.php?class_name=<?php echo $class_menu;?>"><?php echo $text_menu;?></a></li>

                            <?php $class_menu="Project"; $text_menu="Project"; $active_page="manage_class.php" ?>
                            <li class="<?php if($class_name==$class_menu && $active_menu==$active_page && $active_admin){echo 'active';};?>"><a href="<?php echo $path_admin;?>manage_class.php?class_name=<?php echo $class_menu;?>"><?php echo $text_menu;?></a></li>


                            <?php $class_menu="InvoiceActual"; $text_menu="Invoice Actual"; $active_page="manage_class.php" ?>
                            <li class="<?php if($class_name==$class_menu && $active_menu==$active_page && $active_admin){echo 'active';};?>"><a href="<?php echo $path_admin;?>manage_class.php?class_name=<?php echo $class_menu;?>"><?php echo $text_menu;?></a></li>

                            <?php $class_menu="InvoiceEstimate"; $text_menu="Invoice Estimate"; $active_page="manage_class.php" ?>
                            <li class="<?php if($class_name==$class_menu && $active_menu==$active_page && $active_admin){echo 'active';};?>"><a href="<?php echo $path_admin;?>manage_class.php?class_name=<?php echo $class_menu;?>"><?php echo $text_menu;?></a></li>


                            <?php $class_menu="InvoiceSend"; $text_menu="Invoice Send"; $active_page="manage_class.php" ?>
                            <li class="<?php if($class_name==$class_menu && $active_menu==$active_page && $active_admin){echo 'active';};?>"><a href="<?php echo $path_admin;?>manage_class.php?class_name=<?php echo $class_menu;?>"><?php echo $text_menu;?></a></li>

                        </ul>
                    </li>




                    <li>
                        <a href="#">Set Up Admin<span class="fa arrow"></span></a>
                        <ul class="nav nav-third-level <?php echo $class_setup_admin_collapse; ?>">

                            <?php $class_menu="Currency"; $text_menu="Currency"; $active_page="manage_class.php" ?>
                            <li class="<?php if($class_name==$class_menu && $active_menu==$active_page && $active_admin){echo 'active';};?>"><a href="<?php echo $path_admin;?>manage_class.php?class_name=<?php echo $class_menu;?>"><?php echo $text_menu;?><span class="label label-primary pull-right">FULL</span></a></li>

                            <?php $class_menu="Category"; $text_menu="Category"; $active_page="manage_class.php" ?>
                            <li class="<?php if($class_name==$class_menu && $active_menu==$active_page && $active_admin){echo 'active';};?>"><a href="<?php echo $path_admin;?>manage_class.php?class_name=<?php echo $class_menu;?>"><?php echo $text_menu;?><span class="label label-primary pull-right">FULL</span></a></li>

                            <?php $class_menu="Category1"; $text_menu="Category1"; $active_page="manage_class.php" ?>
                            <li class="<?php if($class_name==$class_menu && $active_menu==$active_page && $active_admin){echo 'active';};?>"><a href="<?php echo $path_admin;?>manage_class.php?class_name=<?php echo $class_menu;?>"><?php echo $text_menu;?><span class="label label-primary pull-right">FULL</span></a></li>

                            <?php $class_menu="Category2"; $text_menu="Category2"; $active_page="manage_class.php" ?>
                            <li class="<?php if($class_name==$class_menu && $active_menu==$active_page && $active_admin){echo 'active';};?>"><a href="<?php echo $path_admin;?>manage_class.php?class_name=<?php echo $class_menu;?>"><?php echo $text_menu;?><span class="label label-primary pull-right">FULL</span></a></li>

                            <?php $class_menu="UserType"; $text_menu="UserType"; $active_page="manage_class.php" ?>
                            <li class="<?php if($class_name==$class_menu && $active_menu==$active_page && $active_admin){echo 'active';};?>"><a href="<?php echo $path_admin;?>manage_class.php?class_name=<?php echo $class_menu;?>"><?php echo $text_menu;?><span class="label label-primary pull-right">FULL</span></a></li>
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

                            <?php $class_menu="Links"; $text_menu="Links"; $active_page="manage_class.php" ?>
                            <li class="<?php if($class_name==$class_menu && $active_menu==$active_page && $active_admin){echo 'active';};?>"><a href="<?php echo $path_admin;?>manage_class.php?class_name=<?php echo $class_menu;?>"><?php echo $text_menu;?></a></li>

                            <?php $class_menu="MyExpense"; $text_menu="MyExpense"; $active_page="manage_class.php" ?>
                            <li class="<?php if($class_name==$class_menu && $active_menu==$active_page && $active_admin){echo 'active';};?>"><a href="<?php echo $path_admin;?>manage_class.php?class_name=<?php echo $class_menu;?>"><?php echo $text_menu;?></a></li>


                            <?php $class_menu="MyCigarette"; $text_menu="Cigarette"; $active_page="manage_class.php" ?>
                            <li class="<?php if($class_name==$class_menu && $active_menu==$active_page && $active_admin){echo 'active';};?>"><a href="<?php echo $path_admin;?>manage_class.php?class_name=<?php echo $class_menu;?>"><?php echo $text_menu;?></a></li>


                            <?php $class_menu="MyCigaretteDay"; $text_menu="MyCigaretteDay"; $active_page="manage_class.php" ?>
                            <li class="<?php if($class_name==$class_menu && $active_menu==$active_page && $active_admin){echo 'active';};?>"><a href="<?php echo $path_admin;?>manage_class.php?class_name=<?php echo $class_menu;?>"><?php echo $text_menu;?></a></li>

                            <?php $class_menu="MyCigaretteMonth"; $text_menu="MyCigaretteMonth"; $active_page="manage_class.php" ?>
                            <li class="<?php if($class_name==$class_menu && $active_menu==$active_page && $active_admin){echo 'active';};?>"><a href="<?php echo $path_admin;?>manage_class.php?class_name=<?php echo $class_menu;?>"><?php echo $text_menu;?></a></li>

                            <?php $class_menu="MyCigaretteYear"; $text_menu="MyCigaretteYear"; $active_page="manage_class.php" ?>
                            <li class="<?php if($class_name==$class_menu && $active_menu==$active_page && $active_admin){echo 'active';};?>"><a href="<?php echo $path_admin;?>manage_class.php?class_name=<?php echo $class_menu;?>"><?php echo $text_menu;?></a></li>




                        </ul>
                    </li>




                    <li>
                        <a href="#">Set Up Kamy<span class="fa arrow"></span></a>
                        <ul class="nav nav-third-level">
                            <?php $class_menu="MyExpensePerson"; $text_menu="My Expense Person"; $active_page="manage_class.php" ?>
                            <li class="<?php if($class_name==$class_menu && $active_menu==$active_page && $active_admin){echo 'active';};?>"><a href="<?php echo $path_admin;?>manage_class.php?class_name=<?php echo $class_menu;?>"><?php echo $text_menu;?><span class="label label-primary pull-right">FULL</span></a></li>

                            <?php $class_menu="MyExpenseType"; $text_menu="My Expense Type"; $active_page="manage_class.php" ?>
                            <li class="<?php if($class_name==$class_menu && $active_menu==$active_page && $active_admin){echo 'active';};?>"><a href="<?php echo $path_admin;?>manage_class.php?class_name=<?php echo $class_menu;?>"><?php echo $text_menu;?><span class="label label-primary pull-right">FULL</span></a></li>




                        </ul>

                    </li>
<!--                    <li>-->
<!--                        <a href="#">Second Level Item</a></li>-->

                </ul>
            </li>




            <li class="landing_link">
                <a target="_blank" href="<?php echo $path_public; ?>landing.php"><i class="fa fa-star"></i> <span class="nav-label">Landing Page</span> <span class="label label-warning pull-right">NEW</span></a>
            </li>






        </ul>

    </div>
</nav>