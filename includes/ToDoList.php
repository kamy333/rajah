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

    protected static $db_fields = array('id','user_id','todo','due_date','rank','web_address','comment','done','progress');

    protected static $required_fields =  array('user_id','todo','done');

    protected static $db_fields_table_display_short =  array('id','user_id','todos','done','prog','due_on','rank','comment');

    protected static $db_fields_table_display_full =  array('id','user_id','todos','done','prog','progress','due_date','rank','web_address','comment','done');

    protected static $db_field_exclude_table_display_sort=array();

    protected static $db_field_include_table_display_sort=array(
        'link'=>'web_address','prog'=>'progress','todos'=>'todo','due_on'=>'due_date');


    public static $fields_numeric=array('id','rank','user_id','done','progress');


    public static $get_form_element=array('todo','user_id','web_address','done','progress','due_date','rank','comment');
    public static $get_form_element_others=array();

    public static $form_default_value=array(
        "rank"=>"1",
        "user_id"=>"2",
        "due_date"=>"now()",
        "done"=>"0",
        "progress"=>"5"
    );


    protected static $form_properties= array(

        "todo"=> array("type"=>"text",
            "name"=>'todo',
            "label_text"=>"To Do",
            "placeholder"=>"To Do item",
            "required" =>true,
        ),
        "user_id"=> array("type"=>"selectchosen",
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
        "done" =>array("type"=>"radio",
            array(0,
                array(
                    "label_all"=>"Done/finished",
                    "name"=>"done",
                    "label_radio"=>"No",
                    "value"=>"0",
                    "id"=>"done_no",
                    "default"=>true)),
            array(1,
                array(
                    "label_all"=>"Done/finished",
                    "name"=>"done",
                    "label_radio"=>"Yes",
                    "value"=>"1",
                    "id"=>"done_yes",
                    "default"=>false)),
        ),
        "progress"=> array("type"=>"number",
            "name"=>'progress',
            "label_text"=>"Progress",
            'min'=>0,
            'max'=>100,
            'attr_class'=>'dial m-r',
            'datafgcolor'=>"data-fgColor=\"#1AB394\"",
            'datawidth'=>"data-width='85'",
            'dataheight'=>"data-height='85'",
            "required" =>true,
        ),
        "web_address"=> array("type"=>"url",
            "name"=>'web_address',
            "label_text"=>"Website address",
            "placeholder"=>"Website Address",
            "required" =>false,
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
            "name"=>'todo',
            "id"=>"search_todo",
            "class"=>"ToDoList",
            "label_text"=>"",
            "select_option_text"=>'To Do',
            'field_option_0'=>"todo",
            'field_option_1'=>"todo",
            "required" =>false,
        ),
        "done"=> array("type"=>"select",
            "name"=>'done',
            "id"=>"search_done",
            "class"=>"ToDoList",
            "label_text"=>"",
            "select_option_text"=>'Done',
            'field_option_0'=>"done",
            'field_option_1'=>"done",
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


    public static $db_field_search =array('search_all','todo','done','due_date','rank','web_address','download_csv');


    public static $page_name="ToDo List";
    public static $page_manage="manage_ToDoList.php";
    public static $page_new="new_ToDoList.php";
    public static $page_edit="edit_ToDoList.php";
    public static $page_delete="delete_ToDoList.php";

    public static $form_class_dependency=array('MyHouseExpense','MyExpensePerson') ;


    public static $per_page;


    public $id;
    public $user_id;
    public $todo;
    public $due_date;
    public $comment;
    public $rank;
    public $web_address ;
    public $link;
    public $done;

    public $progress;
    public $prog;
    public $todos;
    public $due_on;

    protected function set_up_display(){
        global $session;
        $this->user_id=$session->user_id;

        if(!empty($this->web_address) && isset($this->id)){
            $this->link="<a href='{$this->web_address}'><u>link</u></a>";
            $this->todos="<a href='{$this->web_address}'><u>".$this->todo."</u></a>";
        } else {
            $this->todos=$this->todo;
        }

        if(isset($this->done) && (int)  $this->done===1){
            $this->progress=100;
        }

        if(isset($this->due_date)){
            $this->due_on=date_to_text($this->due_date);
        }

        if ( isset($this->progress)) {
            $this->prog="<input type='number' value='".$this->progress."' class='dial m-r disabled' data-fgColor='#1AB394' data-width='60' data-height='60'/>";
        }

    }

    public  function form_validation() {
        $valid=new FormValidation();

        $valid->validate_presences(self::$required_fields) ;

        if (isset($this->web_address) && !empty($this->web_address)){
            $valid->validate_website('web_address');
        }
        isset($this->done) ? $valid->is_numeric(['done']) : "";
        isset($this->progress) ? $valid->is_numeric(['progress']) : "";

        return $valid;



    }

    public static function  table_nav_additional(){


        $order_name= !empty($_GET["order_name"])?$_GET["order_name"] : 'id';
        $order_type= !empty($_GET["order_type"])?$_GET["order_type"] :'ASC';
        $page= !empty($_GET['page'])? (int) $_GET["page"]:1;

        if(strtoupper($order_type)=='ASC' && !empty($_GET["order_type"])){
            $order_type='DESC';
        } else {
            $order_type='ASC';
        }

        $qstr="?search_all=&done=0&submit=&page=".$page."&order_name=progress&order_type=".$order_type;
//        $qstr="?search_all=&done=0&submit=&page=1&order_name=progress&order_type=DESC";

        if(isset($_GET['done']) && (int) $_GET['done'] ==0){
            $done=1;
            $done_txt='Show finished';
        } else {
            $done=0;
            $done_txt='Show Open';
        }

        $output="</a><span>&nbsp;</span>";


        $href=clean_query_string(static::$page_manage."?search_all=&done={$done}&submit=");

        $output.="<a  class=\"btn btn-info\"  href=\"". $href ."\">{$done_txt} ". " </a><span>&nbsp;</span>";


        $output.="<a  class=\"btn btn-info\"  href=\"". clean_query_string(static::$page_manage.$qstr )."\">progress". " </a><span>&nbsp;</span>";



        return $output;
    }








}