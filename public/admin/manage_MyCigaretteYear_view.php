<?php

require_once('../../includes/initialize.php');
$session->confirmation_protected_page();
if(User::is_employee() || User::is_secretary() || User::is_visitor()){ redirect_to('index.php');}
require_once LIB_PATH.DS.'download'.DS.'download_csv.php';


$class_name="MyCigaretteYear";
$class_name1="MyCigarette";
$class_name2="MyCigaretteDay";
$class_name3="MyCigaretteMonth";




$table_name=$class_name::get_table_name();


$order_name= !empty($_GET["order_name"])?$_GET["order_name"] : 'year';
$order_type= !empty($_GET["order_type"])?$_GET["order_type"] :'DESC';



//echo get_where_string($class_name);

$page= !empty($_GET['page'])? (int) $_GET["page"]:1;
$per_page=20;
$where=get_where_string($class_name);
$total_count=$class_name::count_all_where($where);
$pagination= new Pagination($page,$per_page,$total_count);



$sql = "SELECT * FROM {$table_name} ";

$sql.= " ".get_where_string($class_name);

if(isset($order_name)){
    $sql.=" ORDER BY {$order_name} {$order_type} ";
}


$sql .= "LIMIT {$per_page} ";
$sql .= "OFFSET {$pagination->offset()}";

//echo "<p>$sql</p>";
//unset($_GET);

//var_dump($sql);

$result_class = $class_name::find_by_sql($sql);

//echo '<pre>';
//var_dump($result_class);
//echo '</pre>';

$query_string=remove_get(array('view','page'));

$view_full_table=!empty($_GET)? (int) $_GET["view"]:0;
if($view_full_table==1){
    $page_link_view=$class_name::$page_manage.$query_string."page=".u($page)."&view=".u(0);
    $page_link_text=$class_name::$page_name." short view";
    //$add_view="&view=".u(1);
    $offset="col-md-offset-2";
} else {
    $page_link_view=$class_name::$page_manage.$query_string."page=".u($page)."&view=".u(1);
    $page_link_text=$class_name::$page_name." full view";
    $offset='';

}


?>

<?php //var_dump($users) ?>

<?php $layout_context = "admin"; ?>
<?php $active_menu="admin" ?>
<?php $stylesheets="" //custom_form  ?>
<?php $view_full_table==1? $fluid_view=true :$fluid_view=false; ?>
<?php $javascript="form_admin" ?>
<?php $sub_menu=false ?>
<?php include(SITE_ROOT.DS.'public'.DS.'layouts'.DS."header.php") ?>
<?php include(SITE_ROOT.DS.'public'.DS.'layouts'.DS."nav.php") ?>
<?php  echo isset($valid)? $valid->form_errors():"" ?>
<?php echo $message; ?>

<?php echo $class_name::table_nav($page_link_view,$page_link_text,$offset);?>


<div class="row">

    <div class="col-md-7 <?php echo $offset; ?>">
        <?php echo $class_name::display_pagination($pagination,$page) ?>

    </div>



    <div class="row">
        <div class="col-md-12  ">


            <?php echo $class_name::display_all($result_class,$view_full_table,false) ?>

        </div>
    </div>

    <?php  ?>
    <?php include(SITE_ROOT.DS.'public'.DS.'layouts'.DS."footer.php") ?>

