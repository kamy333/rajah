<?php require_once('../../includes/initialize.php'); ?>
<?php  $session->confirmation_protected_page(); ?>
<?php if(User::is_employee() || User::is_visitor()){ redirect_to('index.php');}?>

<?php $class_name="TransportProgramming" ;
$class_name2="MyExpensePerson" ;
$class_name1="MyHouseExpense" ;




if(isset($_GET['id'])){
    $post_link=$_SERVER["PHP_SELF"]."?id=".urldecode($_GET['id']);
    $page="Update";
    $page1="Update ";
    $text_post="Updated";
    $text_post1="update";

}else{
    $post_link=$_SERVER["PHP_SELF"];
    $page="New";
    $page1="Add New ";
    $text_post="created";
    $text_post1="creation";

}




if(request_is_post() && request_is_same_domain()) {

    if (!csrf_token_is_valid() || !csrf_token_is_recent()) {
        $message = "Sorry, request was not valid.";
    } else {

        $new_item=new $class_name() ;
        $expected_fields=$class_name::get_table_field();
        foreach($expected_fields as $field){
            if(isset($_POST[$field])){
                $new_item->$field=trim($_POST{$field}) ;
            }

        }

        //todo complete valid like pseudo

        $valid=  $new_item->form_validation();

        if(empty($valid->errors)) {
            if ($new_item->save()){
                $session->message($class_name.$new_item->pseudo." "."has been $text_post with ID (".$new_item->id .")");
                $session->ok(true);
                redirect_to($class_name::$page_manage);
            } else {
                $message($class_name.$new_item->pseudo." "."$text_post1 failed");

            }




        }


    }
} else {
    if(request_is_get()){
        if(isset($_GET['id'])){
            $id=$_GET['id'];
            $get_item=  $class_name::find_by_id($id);
        }



    }

}



?>

<?php $layout_context = "admin"; ?>
<?php $active_menu="transport"; ?>
<?php $stylesheets="";  ?>
<?php $fluid_view=true; ?>
<?php $javascript=$class_name; ?>
<?php $incl_message_error=true; ?>
<?php //include_layout_template('header_2.php'); ?>
<?php include(SITE_ROOT.DS.'public'.DS.'layouts'.DS."header.php") ?>
<?php include(SITE_ROOT.DS.'public'.DS.'layouts'.DS."nav.php") ?>

<?php  echo isset($valid)? $valid->form_errors():"" ?>
<?php  echo isset($valid)? $valid->form_warnings():"" ?>


<?php if (!empty($message)) {
    echo output_message($message);
} ?>

<?php checking(false);?>








<h4 class="text-center"><a href="<?php echo $_SERVER["PHP_SELF"] ?>"><?php echo $page ." " .$class_name::$page_name ?></a> </h4>


<div class="col-md-7 col-md-offset-2 col-lg-7 col-lg-offset-2">
    <a href="index.php">Index</a> &nbsp;&nbsp;
    <span>&nbsp;&nbsp; |&nbsp;&nbsp; </span>
    <a href="<?php echo $class_name::$page_manage ?>" >Manage <?php echo $class_name::$page_name ?></a>
    <span>&nbsp;&nbsp; |&nbsp;&nbsp; </span>
    <a href="<?php echo $class_name1::$page_manage ?>" >Manage <?php echo $class_name1::$page_name ?></a>
    <span>&nbsp;&nbsp; |&nbsp;&nbsp; </span>
    <a href="<?php echo $class_name2::$page_manage ?>" >Manage <?php echo $class_name2::$page_name ?></a>
    <span>&nbsp;&nbsp; |&nbsp;&nbsp; </span>
    <a href="<?php echo $class_name1::$page_new ?>">Add New <?php echo $class_name1::$page_name ?></a>
    <span>&nbsp;&nbsp; |&nbsp;&nbsp; </span>
    <a href="<?php echo $class_name2::$page_new ?>">Add New <?php echo $class_name2::$page_name ?></a>

    <div class ="background_light_blue">


        <form name="form_MyExpenseType" id="form_form_MyExpenseType" class="form-horizontal" method="post" action="<?php echo $post_link;?>">

            <fieldset id="login" title="Expense">
                <legend class="text-center" style="color: #0000ff"><?php echo $page1 . $class_name::$page_name ?></legend>


                <?php

                echo $class_name::construct_form($get_item,$_GET);

                //                $name='expense_type';
                //                if(isset($_GET[$name])){ $value=$_GET[$name]; } else { isset($get_item)? $value=$get_item->$name :$value="Pres";}
                //                echo  $class_name::get_form($name,$value);
                //
                //
                //                $name='rank';
                //                if(isset($_GET[$name])){ $value=$_GET[$name]; } else { isset($get_item)? $value=$get_item->$name :$value=1;}
                //                echo  $class_name::get_form($name,$value);
                //
                //                $name='comment';
                //                if(isset($_GET[$name])){ $value=$_GET[$name]; } else { isset($get_item)? $value=$get_item->$name :$value='';}
                //                echo  $class_name::get_form($name,$value);



                echo Form::form_id();
                echo csrf_token_tag();?>



            </fieldset>



            <div class="col-sm-offset-3 col-sm-7 col-xs-3">
                <button type="submit" name="submit" class="btn btn-primary"><?php echo $page ." ".$class_name; ?></button>
            </div>

            <div class="text-right " >
                <a href="<?php echo $class_name::$page_manage; ?>" class="btn btn-info " role="button">Cancel</a>
            </div>



        </form>
    </div>
</div>



<?php include(SITE_ROOT.DS.'public'.DS.'layouts'.DS."footer.php") ?>
