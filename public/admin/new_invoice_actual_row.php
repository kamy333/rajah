<?php require_once('../../includes/initialize.php'); ?>
<?php  $session->confirmation_protected_page(); ?>
<?php if(User::is_employee()){ redirect_to('index.php');}?>

<?php $class_name="InvoiceActual" ;



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
<?php $active_menu="adminNew"; ?>
<?php $stylesheets="";  ?>
<?php $fluid_view=true; ?>
<?php $javascript=$class_name."_Row"; ?>
<?php $incl_message_error=true; ?>
<?php //include_layout_template('header_2.php'); ?>
<?php include(SITE_ROOT.DS.'public'.DS.'layouts'.DS."header.php") ?>
<?php include(SITE_ROOT.DS.'public'.DS.'layouts'.DS."nav.php") ?>

<?php  echo isset($valid)? $valid->form_errors():"" ?>
<?php  echo isset($valid)? $valid->form_warnings():"" ?>

<?php echo output_message($message); ?>

<?php checking(false);?>







<h4 class="text-center"><a href="<?php echo $_SERVER["PHP_SELF"] ?>"><?php echo $page ." " .$class_name::$page_name." Row forms" ?></a> </h4>

<?php echo "<h3 class='text-center'>$logo</h3>" ;?>

<?php
//input text
$date=strftime("%Y-%m-%d",time());

$text = new Form ();
$text->type="text";
$text->name="re-name";
$text->label_text="ReceptName";
$text->placeholder="ReceptName";

$text1 = new Form ();
$text1->type="text";
$text1->name="location";
$text1->label_text="location";
$text1->placeholder="location";

$text2 = new Form ();
$text2->type="date";
$text2->name="invoice_date";
$text2->label_text="Invoice Date";
$text2->placeholder="Invoice Date";
$text2->value=$date;


$select=new Form();
$select->name="project";
$select->label_text="Project Name";
//$select->selected=true; // todo check selected
$select->class="Project"; //which class to use for option query database
$select->field_option_0="id"; // 1st field for database
$select->field_option_1="project_code"; //2nd field for db query
//echo $select->select();




?>

<form name="form_invoice_actual" id="form_invoice_actual" class="form-horizontal" method="post" action="<?php echo $_SERVER["PHP_SELF"] ?>">



<div class="col-sm-3 col-lg-offset-4">

    <?php
    echo $text->text();
    echo $text1->text();
    echo $text2->text();
    echo $select->select();

    ?>
<div class="text-center">
    <input type="submit" name="submit" class="btn btn-primary" value="Save Record">
</div>
</div>



<div class="col-md-10 col-md-offset-1">
    <br><br><hr>
<table class='table table-striped table-bordered table-hover table-condensed '>
   <thead>
    <tr>
        <th  class="text-center">No</th>
        <th class="text-center">category</th>
        <th class="text-center">Quantity</th>
        <th class="text-center">Price</th>
        <th class="text-center">Total Amount</th>
        <th class="text-center" style="background: whitesmoke"><a  class="btn btn-info " role="button"  id="add">+</a></th>
    </tr>
    </thead>
    <tbody class="detail">
<tr>
    <td class="no">1</td>
    <td class="text-center"><input type="text" class="form-control category"  name="category[]"></td>
    <td class="text-center"><input type="text" class="form-control quantity" name="quantity[]"></td>
    <td class="text-center"><input type="text" class="form-control price" name="price[]"></td>
    <td class="text-center"><input type="text" class="form-control amount" name="amount[]"></td>
    <td class="text-center remove btn btn-primary ">Delete</td>

</tr>

    </tbody>
<tfoot>

<td class="grandtotal text-right" colspan="4">Total</td>
    <td class="text-center grandtotal" colspan="1"><u><b>0</b></u></td>

</tfoot>

</table>

</div>
<?php
echo Form::form_id();
echo csrf_token_tag();
?>

</form>






<?php include(SITE_ROOT.DS.'public'.DS.'layouts'.DS."footer.php") ?>

