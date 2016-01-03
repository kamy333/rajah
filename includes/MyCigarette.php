<?php

/**
 * Created by PhpStorm.
 * User: Kamran
 * Date: 24.11.2015
 * Time: 00:47
 */
//protected static $db_fields = array('','','','','','','','','','');

class MyCigarette extends DatabaseObject {
    protected static $table_name="mycigarette";

    protected static $db_fields = array('id','cig_date','number_cig','cig_date_time','comment');

    protected static $required_fields = array('cig_date','number_cig');

    protected static $db_fields_table_display_short =array('id','cig_date','number_cig','cig_date_time','comment');

    protected static $db_fields_table_display_full = array('id','cig_date','number_cig', 'cig_date_time','comment');

    protected static $db_field_exclude_table_display_sort=null;

    public static $fields_numeric=array('id','number_cig');

    protected static $form_properties= array(

        "number_cig"=> array("type"=>"number",
            "name"=>'number_cig',
            "label_text"=>"No Cig",
            'min'=>0,
            "placeholder"=>" number Cig",
            "required" =>true,
        ),
        "cig_date"=> array("type"=>"date",
            "name"=>'cig_date',
            "label_text"=>"Cig Date",
            "placeholder"=>"Input cig Date",
            "required" =>true,
        ),
        "comment"=> array("type"=>"textarea",
            "name"=>'comment',
            "label_text"=>"Comment",
            "placeholder"=>"input Comment",
            "required" =>false,
        ),
        "cig_date_time"=> array("type"=>"datetime",
            "name"=>'cig_date_time',
            "label_text"=>"Cig Date time",
            "placeholder"=>"Input cig Date",
            "required" =>true,
        ),
    );

    protected static $form_properties_search=array(
        "search_all"=> array("type"=>"text",
            "name"=>'search_all',
            "label_text"=>"",
            "placeholder"=>"Search all",
            "required" =>false,
        ),
        "download_csv" =>array("type"=>"radio",
            array(0,
                array(
                    "label_all"=>"Dnld csv",
                    "name"=>"download_csv",
                    "label_radio"=>"non",
                    "value"=>"No",
                    "id"=>"visible_no",
                    "default"=>true)),
            array(1,
                array(
                    "label_all"=>"Dnld csv",
                    "name"=>"download_csv",
                    "label_radio"=>"oui",
                    "value"=>"Yes",
                    "id"=>"visible_yes",
                    "default"=>true)),
        ),

    );


    public static $db_field_search =array('search_all','download_csv');


    public static $page_name="Cigarette";
    public static $page_manage="manage_MyCigarette.php";
    public static $page_new="new_MyCigarette.php";
    public static $page_edit="edit_MyCigarette.php";
    public static $page_delete="delete_MyCigarette.php";
    public static $page_add_cig="new_MyCigarette_Add_1.php";

    public static $per_page;


    public $id;
    public $number_cig;
    public $cig_date;
//    public $creation_time;
    public $cig_date_time;
    public $comment;

public static function get_cigarette_view($view='day'){
    $output="";
    $output.="</div>";

    $output.="<div class='table-responsive'>";

    $output.="<table class='table table-striped table-bordered table-hover table-condensed '>";
    $output.= "<tr>";
    if ($view==='day'){
        $query="SELECT * FROM mycigarette_view_by_day ";

    } elseif($view==='month'){
        $query="SELECT * FROM mycigarette_view_by_month ";
    }  elseif($view==='year'){
        $query="SELECT * FROM mycigarette_view_by_year ";
    }

    else {
        $query="SELECT * FROM mycigarette_view_by_day ";
    }

$results=self::find_by_sql($query);

    if($results){
//foreach ($results as $result ){
//    $output.="<th>$result</th>";
//}


    }

//    print_r($result);
return $results;

}

    public  function form_validation() {
        $valid=new FormValidation();

        $valid->validate_presences(self::$required_fields) ;
        return $valid;



    }

}