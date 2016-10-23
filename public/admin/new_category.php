<?php require_once('../../includes/initialize.php'); ?>
<?php  $session->confirmation_protected_page(); ?>
<?php if(User::is_employee() || User::is_visitor()){ redirect_to('index.php');}?>

<?php $class_name="Category" ;
$class_name_1="Category1" ;
$class_name_2="Category2" ;


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

          //  var_dump($new_item->category );

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
<?php $active_menu="adminNew"; ?>
<?php $stylesheets="";  ?>
<?php $fluid_view=true; ?>
<?php $javascript=""; ?>
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
    <a href="index.php">Index</a><span>&nbsp;&nbsp; |&nbsp;&nbsp; </span>
    <a href="<?php echo $class_name::$page_manage ?>" >Manage <?php echo $class_name::$page_name?></a><span>&nbsp;&nbsp; |&nbsp;&nbsp; </span>
    <a href="<?php echo $class_name_1::$page_manage ?>" >Manage <?php echo $class_name_1::$page_name ?></a><span>&nbsp;&nbsp; |&nbsp;&nbsp; </span>
    <a href="<?php echo $class_name_2::$page_manage ?>" >Manage <?php echo $class_name_2::$page_name ?></a><span>&nbsp;&nbsp; |&nbsp;&nbsp; </span>

    <div class ="background_light_blue">


        <form name="form_client <?php echo "form_".$class_name; ?>"  class="form-horizontal" method="post" action="<?php echo $post_link;?>">

            <fieldset id="<?php echo $class_name; ?>" title="<?php echo $class_name::$page_name ?>">
                <legend class="text-center" style="color: #0000ff"><?php echo $page1 . $class_name::$page_name ?></legend>


            <?php


            $name='category_1_id';
            isset($get_item)? $value=$get_item->$name :$value="";
            echo  $class_name::get_form($name,$value);

            $name='category_2_id';
            isset($get_item)? $value=$get_item->$name :$value="";
            echo  $class_name::get_form($name,$value);

            $name='unit_price';
            isset($get_item)? $value=$get_item->$name :$value="";
            echo  $class_name::get_form($name,$value);

            $name='company_unit_price';
            isset($get_item)? $value=$get_item->$name :$value="";
            echo  $class_name::get_form($name,$value);

            $name='comment';
            isset($get_item)? $value=$get_item->$name :$value="";
            echo  $class_name::get_form($name,$value);




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
