<?php

require_once('../../includes/initialize.php');
$session->confirmation_protected_page();
if(User::is_employee() || User::is_secretary()){ redirect_to('index.php');}


$class_name="UserType";
$table_name=$class_name::get_table_name();

$order_name= !empty($_GET["order_name"])?$_GET["order_name"] : 'id';
$order_type= !empty($_GET["order_type"])?$_GET["order_type"] :'ASC';



//echo get_where_string($class_name);

$page= !empty($_GET['page'])? (int) $_GET["page"]:1;
$per_page=20;
$where=get_where_string($class_name);
$total_count=$class_name::count_all_where($where);
$pagination= new Pagination($page,$per_page,$total_count);

require_once LIB_PATH.DS.'download'.DS.'download_csv.php';


$sql = "SELECT * FROM {$table_name} ";

$sql.= " ".get_where_string($class_name);

if(isset($order_name)){
    $sql.=" ORDER BY {$order_name} {$order_type} ";
}


$sql .= "LIMIT {$per_page} ";
$sql .= "OFFSET {$pagination->offset()}";

//echo "<p>$sql</p>";
//unset($_GET);

$result_class = $class_name::find_by_sql($sql);

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


<div class="row">

    <div class="col-md-12">
        <h3 class="text-center"><u><a href="<?php echo $_SERVER["PHP_SELF"] ?>"><?php echo "Manage ".$class_name::$page_name ?></a> </u></h3>
    </div>

    <div class="col-md-5 <?php echo $offset; ?>">
        <a href="index.php">Index</a> &nbsp;&nbsp;
        <a href="<?php echo $page_link_view?>"><?php echo $page_link_text?></a>&nbsp;&nbsp;
        <a href="<?php echo $class_name::$page_new ?>">Add New <?php echo $class_name::$page_name ?></a>
    </div>


</div>

<div class="row">

    <div class="col-md-7 <?php echo $offset; ?>">
        <?php echo $class_name::display_pagination($pagination,$page) ?>

    </div>




    <div class="col-md-2 col-md-offset-1">


        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target=".bs-example-modal-lg">
            <span class="glyphicon glyphicon-search" style="color: whitesmoke" aria-hidden="true"></span>
        </button>



        <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel">Modal title</h4>
                    </div>
                    <div class="modal-body">

                        <?php echo $class_name::get_form_search (); ?>




                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                    </div>
                </div>
            </div>
        </div>



    </div>
</div>




<div class="row">
    <div class="col-md-12  ">


        <?php echo $class_name::display_all($result_class,$view_full_table) ?>

    </div>
</div>

<?php  ?>
<?php include(SITE_ROOT.DS.'public'.DS.'layouts'.DS."footer.php") ?>

