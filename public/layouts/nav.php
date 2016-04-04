
<?php //It seems that class Session is not working on a sub include file?>
<?php if(isset($_SESSION["user_id"])) {$user=User::find_by_id($_SESSION['user_id']);} else {$user="";} ?>

<?php
//$layout_context=basename(__DIR__);

if ($layout_context=="public"){
    $path_admin="admin/";
    $path_public=""  ;

} else {
    $path_admin="";
    $path_public="../";

} ?>

<?php if ($layout_context=="public"){ ?>
    <script>
        var $layout_context="public";
        var $path_admin="admin/";
        var $path_public=""  ;
        var $path="";
    </script>
<?php  } else {?>
    <script>
      var $layout_context="admin";
      var $path_admin="";
      var  $path_public="../";
      var $path="../";
    </script>

<?php  } ?>

<?php
//echo isset($session->user_id) ? "true" : "false";
?>


<div class="row">
    <nav class="navbar navbar-default navbar-fixed-top " role="navigation" >
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <a class="navbar-brand active" href="http://www.ikamy.ch/public/index.php"><?php echo LOGO ?><span style="color: blue"> <?php if (isset($layout_context) && $layout_context == "admin") { echo " Admin"; } ?></span></a>

        </div>
        <div class="collapse navbar-collapse" id="collapse">
            <ul class="nav navbar-nav">

                <li <?php if ( isset($active_menu) && $active_menu=="home") {echo "class=\"active\"";} ?>>
                    <?php if ($layout_context=="public"){  ?>
                    <a href="<?php echo $path_admin;?>index.php">Home</a>
                    <?php } ?>

                </li>


                <li
                    <?php if ( isset($active_menu) && $active_menu=="about"){echo " class=\"dropdown active\"";} else {echo " class=\" dropdown\"";}?>
                    ><a href="#" data-toggle="dropdown">About us<span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="<?php echo $path_public;?>about_us.php">About us1</a></li>
                            <li><a href="<?php echo $path_public;?>about_us_2.php">About us 2</a></li>
                            <li><a href="<?php echo $path_public;?>angular.php">About Us 3</a></li>
                            <li><a href="<?php echo $path_public;?>angular2.php">AngularJS Login</a></li>
                            <li><a href="<?php echo $path_public;?>some_data.php">Your info</a></li>


                        </ul>
                </li>


            <!--    <li
                    <?php /*if ( isset($active_menu) && $active_menu=="links") {echo "class=\"active\"";} */?>
                    ><a href="<?php /*echo $path_public;*/?>myLinks.php?category=Others">Links</a></li>
-->
                <li
                    <?php if ( isset($active_menu) && $active_menu=="links") {echo "class=\"active\"";} ?>
                ><a href="<?php echo $path_public;?>myLinks.php?category=Others">Links</a></li>


                <li
                    <?php if ( isset($active_menu) && $active_menu=="lesson"){echo " class=\"dropdown active\"";} else {echo " class=\" dropdown\"";}?>
                    ><a href="#" data-toggle="dropdown">Lesson<span class="caret"></span></a>

                    <ul class="dropdown-menu">
                        <li><a href="<?php echo $path_public;?>lesson_git.php">Git</a></li>
                        <li><a href="<?php echo $path_public;?>lesson_OOP_PHP.php">OOP PHP</a></li>


                    </ul>
                </li>



                <li
                    <?php if ( isset($active_menu) && $active_menu=="contact") {echo "class=\"active\"";} ?>
                    ><a href="<?php echo $path_public;?>contact.php">Contact</a></li>



                <?php  if (isset($_SESSION["user_id"]) &&($user->is_employee())) { ?>

                    <li
                        <?php if ( isset($active_menu) && $active_menu=="admin"){echo " class=\"dropdown active\"";} else {echo " class=\" dropdown\"";}?>
                        ><a href="#" data-toggle="dropdown">Mon Menu<span class="caret"></span></a>

                        <ul class="dropdown-menu">
                            <li><a href="#">Menu1</a></li>
                            <li><a href="#">Menu2</a></li>
                        </ul>
                    </li>


                <?php } ?>



                <?php

                if (isset($_SESSION["user_id"]) && ($user->is_manager() || $user->is_admin() || $user->is_secretary() ) ) { ?>


                    <li
                        <?php if ( isset($active_menu) && $active_menu=="admin"){echo " class=\"dropdown active\"";} else {echo " class=\" dropdown\"";}?>
                        ><a href="#" data-toggle="dropdown">Administration<span class="caret"></span></a>

                        <ul class="dropdown-menu">

                <li><a href="<?php echo $path_admin;?>manage_MyExpense.php">Manage MyExpense</a></li>
                <li><a href="<?php echo $path_admin;?>manage_MyExpensePerson.php">Manage MyExpensePerson</a></li>
                <li><a href="<?php echo $path_admin;?>manage_MyExpenseType.php">Manage MyExpenseType</a></li>

                <li><a href="<?php echo $path_admin;?>manage_MyCigarette.php">Manage Cigarette</a></li>
                <li><a href="<?php echo $path_admin;?>manage_currency.php">Manage Currency</a></li>
                <li><a href="<?php echo $path_admin;?>manage_clients.php">Manage Clients</a></li>
                <li><a href="<?php echo $path_admin;?>manage_projects.php">Manage Projects</a></li>
                <li><a href="<?php echo $path_admin;?>manage_category.php">Manage Category</a></li>
                <li><a href="<?php echo $path_admin;?>manage_category_1.php">Manage Category 1</a></li>
                <li><a href="<?php echo $path_admin;?>manage_category_2.php">Manage Category 2</a></li>
                <li><a href="<?php echo $path_admin;?>manage_invoice_actual.php">Manage Invoice Actual</a></li>
                <li><a href="<?php echo $path_admin;?>manage_invoice_estimate.php">Manage Invoice Estimate</a></li>
                <li><a href="<?php echo $path_admin;?>manage_invoice_send.php">Manage Invoice Send</a></li>
                <li><a href="<?php echo $path_admin;?>manage_user.php">Manage Users</a></li>
                <li><a href="<?php echo $path_admin;?>manage_links.php">Manage links</a></li>
                <li><a href="<?php echo $path_admin;?>manage_links_category.php">Manage links Category</a></li>


                            <?php if(isset($session->user_id) and $user->is_admin() ) { ?>
                                <li><a href="<?php echo $path_admin;?>logfile.php">Log File</a></li>
                            <?php } ?>


                        </ul>
                    </li>



                    <li
                        <?php if ( isset($active_menu) && $active_menu=="adminNew"){echo " class=\"dropdown active\"";} else {echo " class=\" dropdown\"";}?>
                        ><a href="#" data-toggle="dropdown">New<span class="caret"></span></a>

                        <ul class="dropdown-menu">
                <li><a href="<?php echo $path_admin;?>new_MyCigarette_Add_1.php">Add 1 cig</a></li>

                <li><a href="<?php echo $path_admin;?>new_MyExpense.php">New MyExpense</a></li>
                <li><a href="<?php echo $path_admin;?>new_MyExpensePerson.php">New MyExpensePerson</a></li>
                <li><a href="<?php echo $path_admin;?>new_MyExpenseType.php">New MyExpenseType</a></li>
                <li><a href="<?php echo $path_admin;?>new_MyCigarette.php">New Cigarette</a></li>
                <li><a href="<?php echo $path_admin;?>new_currency.php">New Currency</a></li>
                <li><a href="<?php echo $path_admin;?>new_client.php">New Client</a></li>
                <li><a href="<?php echo $path_admin;?>new_project.php">New Project</a></li>
                <li><a href="<?php echo $path_admin;?>new_user.php">New User</a></li>
                <li><a href="<?php echo $path_admin;?>new_category.php">New Category</a></li>
                <li><a href="<?php echo $path_admin;?>new_category_1.php">New Category 1</a></li>
                <li><a href="<?php echo $path_admin;?>new_category_2.php">New Category2</a></li>
                <li><a href="<?php echo $path_admin;?>new_invoice_actual.php">New Invoice Actual</a></li>
                <li><a href="<?php echo $path_admin;?>new_invoice_estimate.php">New Invoice Estimate</a></li>
                <li><a href="<?php echo $path_admin;?>new_link.php">New link</a></li>
                <li><a href="<?php echo $path_admin;?>new_link_category.php">New links Category</a></li>
                <li><a href="<?php echo $path_admin;?>new_invoice_actual_row.php">New Invoice Actual Row</a></li>
                <li><a href="<?php echo $path_admin;?>new_invoice_send.php">New Invoice Send</a></li>

                        </ul>
                    </li>

                <?php if(isset($_SESSION["user_id"]) and $user->is_admin() ) { ?>
                    <li
                        <?php if ( isset($active_menu) && $active_menu=="download"){echo " class=\"dropdown active\"";} else {echo " class=\" dropdown\"";}?>
                        ><a href="#" data-toggle="dropdown">Download<span class="caret"></span></a>

                        <ul class="dropdown-menu">
                            <li><a href="<?php echo $path_admin;?>download.php">download</a></li>


                        </ul>
                    </li>
                    <?php } ?>


                    <li
                        <?php if ( isset($active_menu) && $active_menu=="myproject"){echo " class=\"dropdown active\"";} else {echo " class=\" dropdown\"";}?>
                        ><a href="#" data-toggle="dropdown">MyProject<span class="caret"></span></a>

                        <ul class="dropdown-menu">
                            <li><a href="<?php echo $path_admin;?>rajah_project.php">Rajah Project</a></li>


                        </ul>
                    </li>




                    <?php // } ?>
                <?php } ?>



            </ul>



            <?php

            ?>




            <ul class="nav navbar-nav navbar-right">
                <?php
                list ($date_fr,$date_fr_short,$date_fr_long,$date_fr_hr,$date_fr_short_hr,$date_fr_long_hr,$date_fr_full_hr)=date_fr();?>

                <p class="navbar-text " style=""><?php echo now()//echo h($date_fr_long_hr); ?></p>

                <?php  if (isset($_SESSION["user_id"])){ ?>

                    <li class="active"><a href="<?php echo $path_admin;?>logout.php" data-toggle="dropdown"><?php  echo "&nbsp;&nbsp;" ?><small><strong><?php echo $user->username."&nbsp;&nbsp;"; ?></strong></small>


                            <?php
                            $username=$user->username;
                            if(file_exists($path_public."img/{$username}.JPG")){
                                echo "<span><img class='img-thumbnail img-responsive img-circle'  src='{$path_public}img/{$username}.JPG' alt='{$username}'style='width:2em;height:2em;'</span>";
                            }
                            ?>
                            <span class="caret"></span></a>
                        <ul class="dropdown-menu">

                            <?php if(isset($_SESSION["user_id"]) and $user->is_admin() ) { ?>

                                <li><a href="<?php echo $path_admin;?>upload.php">Upload file photo</a></li>
                                <li class="divider"></li>
                                <li><a href="<?php echo $path_admin;?>manage_blacklist_ip.php">Manage Blacklist_ip</a></li>
                                <li><a href="<?php echo $path_admin;?>manage_failed_logins.php">Manage Failed logins</a></li>
                                <li><a href="<?php echo $path_admin;?>manage_user_type.php">Manage User Type</a></li>
                                <li><a href="<?php echo $path_admin;?>logfile.php">Log File</a></li>
                                <li class="divider"></li>

                            <?php } ?>
                            <li><a href="<?php echo $path_admin;?>manage_admins_my_page.php">My Page</a></li>
                            <li><a href="<?php echo $path_admin;?>edit_admin_individual.php">Edit Info</a></li>
                            <li class="divider"></li>
                            <li><a href="<?php echo $path_admin;?>logout.php">Logout</a></li>

                        </ul>



                    </li>

                <?php } else {   ?>





                <li<?php if ( isset($active_menu) && $active_menu=="login") {echo " class=\"active \"";} ?>
                    ><a href="<?php echo $path_admin;?>login.php"><span class='glyphicon glyphicon-user' aria-hidden='true'></span><?php  echo "&nbsp;&nbsp;" ?>Login<?php echo "&nbsp;&nbsp;&nbsp;&nbsp;"; ?></a></li><?php } ?>






            </ul>




        </div>
    </nav>





</div>

<?php  //  echo "<p class='text-left'><small>".$complete_date."</small></p>";?>




<?php  if (isset($_SESSION["user_id"]) && ($user->is_manager() || $user->is_admin()|| $user->is_employee() ) ) { ?>

    <?php if (isset($layout_context) && $layout_context == "admin") { ?>

  <?php if($sub_menu){ ?>


        <ol class="breadcrumb">

            <?php if($user->is_admin()&& $user->is_kamy()) { ?>
                &nbsp;&nbsp;

                <div class="btn-group">
                    <button type="button" class="btn btn-default">Test</button>
                    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                        <span class="caret"></span>
                        <span class="sr-only">Toggle Dropdown</span>
                    </button>
                    <ul class="dropdown-menu" role="menu">

                    <li><a href="<?php echo $path_admin;?>0_test_validation.php">0_test_validation</a></li>
                    <li><a href="<?php echo $path_admin;?>0_modele.php">0_modele</a></li>
                    <li><a href="<?php echo $path_admin;?>0_forms.php">0_forms</a></li>
                    <li><a href="<?php echo $path_admin;?>0_forms_from_class.php">0_forms_from_class</a></li>
                        <li><a href="<?php echo $path_admin;?>0_modele4.php">0_modele4</a></li>
                    <li><a href="<?php echo $path_admin;?>login.php">login</a></li>

                    <li class="divider"></li>

                    </ul>
                </div>
                <span>&nbsp;&nbsp; |&nbsp;&nbsp; </span>
                <li><a href="<?php echo $path_admin;?>new_MyCigarette_Add_1.php">Add 1 cig</a></li>
                <span>&nbsp;&nbsp; |&nbsp;&nbsp; </span>

            <?php } ?>
        </ol>

    <?php } ?>

    <?php } // end $sub_menu ?>
<?php } ?>



<?php if(isset($incl_message_error) &&($incl_message_error)) {?>

    <!--    <div class="row">-->
    <!--        --><?php //echo message(); ?>
    <!--        --><?php //if(isset($errors)) echo form_errors($errors); ?>
    <!--        --><?php //if(isset($warnings)) echo form_warnings($warnings); ?>
    <!---->
    <!--    </div>-->


<?php } ?>



