<?php require_once('../../includes/initialize.php'); ?>
<?php  $session->confirmation_protected_page(); ?>

<?php if(User::is_employee()){ redirect_to('index.php');}?>


<?php $layout_context = "admin"; ?>
<?php $active_menu="admin"; ?>
<?php $stylesheets="";  ?>
<?php $fluid_view=true; ?>
<?php $javascript=""; ?>
<?php $incl_message_error=true; ?>
<?php //include_layout_template('header_2.php'); ?>
<?php include(SITE_ROOT.DS.'public'.DS.'layouts'.DS."header.php") ?>
<?php include(SITE_ROOT.DS.'public'.DS.'layouts'.DS."nav.php") ?>


<?php
//input text
$text = new Form ();
$text->type="text";
$text->name="username";
$text->label_text="Username";
$text->placeholder="Username";
$text->required=true;
//echo $text->text();

$text1 = new Form ();
$text1->type="text";
$text1->name="nom";
$text1->label_text="Nom";
$text1->placeholder="Nom";
//$text1->required=true;
//echo $text1->text()


$password = new Form ();
$password->type="password";
$password->name="password";
$password->label_text="Password";
$password->placeholder="enter password";
$password->required=true;
//echo $password->text();

$select=new Form();
$select->name="kamy";
$select->label_text="User Type";
//$select->selected=true; // todo check selected
$select->class="UserType"; //which class to use for option query database
$select->select_option_field[]="id"; // 1st field for database
$select->select_option_field[]="user_type"; //2nd field for db query
//echo $select->select();


$radio=new Form();
$radio->radio[]=array(0,
    array(
     "label_all"=>"Visible",
     "name"=>"visible",
     "label_radio"=>"non",
     "value"=>"0",
     "id"=>"visible_no",
      "default"=>true)
);


$radio->radio[]=array(1,
    array("label_all"=>"Visible",
        "name"=>"visible",
        "label_radio"=>"oui",
        "value"=>"1",
        "id"=>"visible_yes",
        "default"=>true));
//echo $radio->radio();
//
//
////unsetting
//unset($text);
//unset($select);
//unset ($radio);

?>


<h4 class="text-center"><mark><a href="<?php echo $_SERVER["PHP_SELF"] ?>">Form modele using class</a> </mark></h4>


<div class="col-md-7 col-md-offset-2 col-lg-7 col-lg-offset-2">


    <div class ="background_light_blue">


        <form name="form_client"  class="form-horizontal" method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">

            <fieldset id="login" title="Client">
                <legend class="text-center" style="color: #0000ff">Client</legend>



                <?php
                echo $text->text();
                echo $radio->radio();
                echo $select->select();
                echo $password->text();
                echo $text1->text();

//                $class_name="User;";
//
//Client::get_form('user_type_id');

                ?>



            </fieldset>





            <div class="col-sm-offset-3 col-sm-7 col-xs-3">
                <button type="submit" name="submit" class="btn btn-primary">Ajouter</button>
            </div>

            <div class="text-right " >
                <a href="manage_client.php" class="btn btn-info " role="button">Cancel</a>
            </div>



        </form>
    </div>
</div>


<?php include(SITE_ROOT.DS.'public'.DS.'layouts'.DS."footer.php") ?>
