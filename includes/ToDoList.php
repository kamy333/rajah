<?php

/**
 * Created by PhpStorm.
 * User: Kamran
 * Date: 24.11.2015
 * Time: 00:47
 */
//protected static $db_fields = array('','','','','','','','','','');

class ToDoList extends DatabaseObject {

    protected static $table_name="to_do_list";

    protected static $db_fields = array('id','user_id','todo','due_date','rank','comment');

    protected static $required_fields =  array('user_id','todo');

    protected static $db_fields_table_display_short =  array('id','user_id','todo','due_date','rank','comment');

    protected static $db_fields_table_display_full =  array('id','user_id','todo','due_date','rank','comment');
    protected static $db_field_exclude_table_display_sort=null;

    public static $fields_numeric=array('id','rank','user_id');


    public static $get_form_element=array('todo','user_id','due_date','rank','comment');
    public static $get_form_element_others=array();

    public static $form_default_value=array(
        "rank"=>"1",
        "user_id"=>"2",
        "due_date"=>"now()"
    );


    protected static $form_properties= array(

        "todo"=> array("type"=>"text",
            "name"=>'todo',
            "label_text"=>"To Do",
            "placeholder"=>"To Do item",
            "required" =>true,
        ),
        "user_id"=> array("type"=>"select",
            "name"=>'user_id',
            "class"=>"User",
            "label_text"=>"User",
            "select_option_text"=>'Username',
            'field_option_0'=>"id",
            'field_option_1'=>"username",
            "required" =>true,
        ),
        "due_date"=> array("type"=>"date",
            "name"=>'due_date',
            "label_text"=>"Due Date",
            "placeholder"=>"Input Due Date",
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
        "todo"=> array("type"=>"select",
            "name"=>'search_todo',
            "id"=>"search_todo",
            "class"=>"ToDoList",
            "label_text"=>"",
            "select_option_text"=>'To Do',
            'field_option_0'=>"todo",
            'field_option_1'=>"todo",
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


    public static $db_field_search =array('search_all','todo','download_csv');


    public static $page_name="To Do List";
    public static $page_manage="manage_ToDoList.php";
    public static $page_new="new_ToDoList.php";
    public static $page_edit="edit_ToDoList.php";
    public static $page_delete="delete_ToDoList.php";

    public static $per_page;


    public $id;
    public $user_id;
    public $todo;
    public $due_date;
    public $comment;
    public $rank;


    public function set_up_display(){
        global $session;
        $this->user_id=$session->user_id;
    }

    public  function form_validation() {
        $valid=new FormValidation();

        $valid->validate_presences(self::$required_fields) ;
        return $valid;



    }

    public static function  table_nav_additional(){
        $output="</a><span>&nbsp;</span>";
        $output.="<a  class=\"btn btn-primary\"  href=\"". static::$page_new ."\">Add To Do ". " </a><span>&nbsp;</span>";
        $output.="<a  class=\"btn btn-primary\"  href=\"". MyExpensePerson::$page_new ."\">Add New Person ". " </a></a><span>&nbsp;</span>";
        $output.="<a  class=\"btn btn-primary\"  href=\"". MyExpense::$page_manage ."\">View Expense ". " </a><span>&nbsp;</span>";
        $output.="<a  class=\"btn btn-primary\"  href=\"". MyExpensePerson::$page_manage ."\">View Person ". " </a>";
        return $output;
    }


}