<?php

/**
 * Created by PhpStorm.
 * User: Kamran
 * Date: 24.11.2015
 * Time: 00:47
 */
//protected static $db_fields = array('','','','','','','','','','');

class MyExpenseType extends DatabaseObject {
    protected static $table_name="myexpense_type";

    protected static $db_fields = array('id','expense_type','rank','comment');

    protected static $required_fields =  array('expense_type','rank');

    protected static $db_fields_table_display_short =  array('id','expense_type','rank','comment');

    protected static $db_fields_table_display_full =  array('id','expense_type','rank','comment');
    protected static $db_field_exclude_table_display_sort=null;

    public static $fields_numeric=array('id','rank');

    protected static $form_properties= array(

        "expense_type"=> array("type"=>"text",
            "name"=>'expense_type',
            "label_text"=>"expense_type",
            "placeholder"=>"expense_type",
            "required" =>true,
        ),
        "comment"=> array("type"=>"textarea",
            "name"=>'comment',
            "label_text"=>"Comment",
            "placeholder"=>"input Comment",
            "required" =>false,
        ),
        "rank"=> array("type"=>"number",
            "name"=>'rank',
            "label_text"=>"Rank",
            'min'=>0,
            "placeholder"=>"a number to sort",
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

        "expense_type"=> array("type"=>"select",
            "name"=>'search_expense_type',
            "id"=>"search_expense_type",
            "class"=>"MyExpenseType",
            "label_text"=>"",
            "select_option_text"=>'Expense type',
            'field_option_0'=>"expense_type",
            'field_option_1'=>"expense_type",
            "required" =>false,
        ),
        "rank"=> array("type"=>"select",
            "name"=>'rank',
            "id"=>"search_rank",
            "class"=>"MyExpenseType",
            "label_text"=>"",
            "select_option_text"=>'rank',
            'field_option_0'=>"rank",
            'field_option_1'=>"rank",
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


    public static $db_field_search =array('search_all','expense_type','download_csv');


    public static $page_name="MyExpenseType";
    public static $page_manage="manage_MyExpenseType.php";
    public static $page_new="new_MyExpenseType.php";
    public static $page_edit="edit_MyExpenseType.php";
    public static $page_delete="delete_MyExpenseType.php";

    public static $per_page;


    public $id;
    public $expense_type;
    public $comment;
    public $rank;



    public  function form_validation() {
        $valid=new FormValidation();

        $valid->validate_presences(self::$required_fields) ;
        return $valid;



    }

}