<?php

/**
 * Created by PhpStorm.
 * User: Kamran
 * Date: 24.11.2015
 * Time: 00:47
 */
//protected static $db_fields = array('','','','','','','','','','');

class MyExpense extends DatabaseObject {
    protected static $table_name="myexpense";

    protected static $db_fields = array('id','amount','person_name','expense_type','expense_date','comment','modification_time');

    protected static $required_fields = array('amount','person_name'.'expense_type','expense_date');

    protected static $db_fields_table_display_short = array('id','amount','person_name','expense_type','expense_date');

    protected static $db_fields_table_display_full = array('id','amount','person_name','expense_type','expense_date','comment','modification_time');

    protected static $db_field_exclude_table_display_sort=null;

    public static $fields_numeric=array('id','amount');

    protected static $form_properties= array(

        "amount"=> array("type"=>"number",
            "name"=>'amount',
            "label_text"=>"Amount",
            'min'=>0,
            "placeholder"=>"Amount",
            "required" =>true,
        ),
        "person_name"=> array("type"=>"select",
            "name"=>'person_name',
            "class"=>"MyExpensePerson",
            "label_text"=>"Person",
            "select_option_text"=>'Person',
            'field_option_0'=>"person_name",
            'field_option_1'=>"person_name",
            "required" =>true,
        ),
        "expense_type"=> array("type"=>"select",
            "name"=>'expense_type',
            "class"=>"MyExpenseType",
            "label_text"=>"Expense Type",
            "select_option_text"=>'Expense Type',
            'field_option_0'=>"expense_type",
            'field_option_1'=>"expense_type",
            "required" =>true,
        ),
        "expense_date"=> array("type"=>"date",
            "name"=>'expense_date',
            "label_text"=>"Expense Date",
            "placeholder"=>"Input Date",
            "required" =>true,
        ),
        "comment"=> array("type"=>"textarea",
            "name"=>'comment',
            "label_text"=>"Comment",
            "placeholder"=>"input Comment",
            "required" =>false,
        ),
        "modification_time"=> array("type"=>"datetime",
            "name"=>'modification_time',
            "label_text"=>"modification_time",
            "placeholder"=>"modification_time",
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
        "person_name"=> array("type"=>"select",
            "name"=>'search_person_name',
            "id"=>"search_person_name",
            "class"=>"MyExpense",
            "label_text"=>"",
            "select_option_text"=>'Person Name',
            'field_option_0'=>"person_name",
            'field_option_1'=>"person_name",
            "required" =>false,
        ),

        "expense_type"=> array("type"=>"select",
            "name"=>'search_expense_type',
            "id"=>"search_expense_type",
            "class"=>"MyExpense",
            "label_text"=>"",
            "select_option_text"=>'Expense type',
            'field_option_0'=>"expense_type",
            'field_option_1'=>"expense_type",
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


    public static $page_name="MyExpense";
    public static $page_manage="manage_MyExpense.php";
    public static $page_new="new_MyExpense.php";
    public static $page_edit="edit_MyExpense.php";
    public static $page_delete="delete_MyExpense.php";

    public static $per_page;


    public $id;
    public $amount;
    public $person_name;
    public $expense_type;
    public $expense_date;
    public $comment;
    public $modification_time;



    public  function form_validation() {
        $valid=new FormValidation();

        $valid->validate_presences(self::$required_fields) ;
        return $valid;



    }

}