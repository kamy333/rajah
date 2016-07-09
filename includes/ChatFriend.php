<?php

/**
 * Created by PhpStorm.
 * User: Kamran
 * Date: 22-Apr-16
 * Time: 12:39 AM
 */
class ChatFriend extends DatabaseObject
{


    public static $chat_header="Chat Bralia Kamy";

    protected static $table_name="chat_friend";

    protected static $db_fields = array('id', 'user_id','username', 'message','date','read1');

    public static $required_fields=array('user_id' ,'message','date');

    protected static $db_fields_table_display_short=array('id', 'user_id','username', 'message','date','read1');

    protected static $db_fields_table_display_full=array('id', 'user_id','username', 'message','date','read1');

    protected static $db_field_exclude_table_display_sort=array();


    public static $get_form_element=array( 'user_id','username', 'message','date','read1','date');
    public static $get_form_element_others=array();

    public static $form_default_value=array(
        "date"=>"nowtime()",
        "read1"=>"0"
    );


    protected static function set_form_default_value(){
        global $session;
        static::$form_default_value["user_id"]=$session->user_id;
    }

    protected static $form_properties= array(

        "user_id"=> array("type"=>"text",
            "name"=>'user_id',
            "label_text"=>"From",
            "placeholder"=>"Message here",
            "required" =>true,
            "readonly"=>true,
            "add_class"=>"hidden",

        ),
        "username"=> array("type"=>"text",
            "name"=>'username',
            "label_text"=>"From",
            "placeholder"=>"Message here",
            "required" =>true,
            "readonly"=>true,
            "add_class"=>"hidden",

        ),

        "message"=> array("type"=>"textarea",
            "name"=>'message',
            "label_text"=>"Message",
            "placeholder"=>"Message here",
            "required" =>true,

        ),
        "read1" =>array("type"=>"radio",
            array(0,
                array(
                    "label_all"=>"read1",
                    "name"=>"read",
                    "label_radio"=>"No",
                    "value"=>"0",
                    "id"=>"read_no",
                    "default"=>true)),
            array(1,
                array(
                    "label_all"=>"Read",
                    "name"=>"read1",
                    "label_radio"=>"Yes",
                    "value"=>"1",
                    "id"=>"read_yes",
                    "default"=>true)),
        ),
        "date"=> array("type"=>"datetime",
            "name"=>'date',
            "label_text"=>"DateTime",
            "placeholder"=>"current",
            "required" =>true,
            "add_class"=>"hidden",
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
        "id"=> array("type"=>"number",
            "name"=>'id',
            "id"=>"search_id",
            "label_text"=>"",
            'min'=>0,
            "placeholder"=>"ID",
            "required" =>false,
        ),
        "user_id"=> array("type"=>"select",
            "name"=>'user_id',
            "id"=>"search_user_id",
            "class"=>"User",
            "label_text"=>"",
            "select_option_text"=>'Username',
            'field_option_0'=>"username",
            'field_option_1'=>"username",
            "required" =>false,
        ),


    );


    public static $page_name="Chat Friend";
    public static $page_manage="manage_ChatFriend.php";
    public static $page_new="new_ChatFriend.php";
    public static $page_edit="edit_ChatFriend.php";
    public static $page_delete="delete_ChatFriend.php";
    public static $page_public="chat.php";

    public static $per_page;


    public $id;
    public $user_id;
    public $message;
    public $date;
    public $read1;

    public $username;


    public function set_up_display(){
        $this->find_username();

    }

    public static function get_chat(){
        $sql="SELECT * FROM ".self::$table_name." ORDER BY id DESC";
        return static::find_by_sql($sql);

    }




    protected function find_username() {
        $user=User::find_by_id($this->user_id);
        $this->username=$user->username;

        unset($user);

    }

    public  function form_validation() {
        $valid=new FormValidation();

        $valid->validate_presences(self::$required_fields) ;
        $this->message=trim($this->message);


        return $valid;

    }


    public static function chat_users_wrappers(){
        $output="";
        $output.="<div class='col-md-3'>";
        $output.="<div class='chat-users'>";

        $output.="<div class='users-list'>";


        $users=User::find_all();

        foreach ( $users as $user) {
            if ($user->username == 'Captainbraliaji'||$user->username == 'kamy'||$user->username == 'admin'){
                $output.=static::chat_users($user);

            }
        }



        $output.="</div>";
        $output.="</div>";
        $output.="</div>";


        return $output;
    }


    public static function chat_users($user){




        $online=" <span class='pull-right label label-primary'>Online</span>";
        $output="";


        $output.="<div class='chat-user'>";
        $output.=$online;
        $output.="<img class='chat-avatar' src='";
//     $output.="img/a4.jpg'";
        $output.=$user->user_path_and_placeholder();

        $output.="' alt='' >";
        $output.="";
        $output.=" <div class='chat-user-name'>";
        $output.="<a href='#'>";
//     $output.="Karl Jordan";
        $output.=$user->full_name();
        $output.="</a>";
        $output.="";

        $output.="</div>";
        $output.="</div>";

        return $output;

    }



    public static function chat_message_wrapper(){
        $output="";
        $output.="<div class='col-md-9 '>";
        $output.="<div class='chat-discussion'>";

        $output .= "<div id='chat'>";


        $output.="</div>";

        $output.="</div>";
        $output.="</div>";
        return $output;

    }


    public static function get_all_chat_message(){
        $output="";

        $chats=static::get_chat();

        foreach ($chats as $chat) {

            $output.=static::chat_message($chat);
        }

        return $output;

    }

    public static function chat_message($chat,$direction="left"){


        global $session;
        $chat->set_up_display();
        $from_user=User::find_by_id($chat->user_id);
        $when=DateDifferenceFormat($chat->date , unixToMySQL(time()) );

        if($from_user->username=="kamy"){$direction="right";}else{$direction="left";}


        $output="";

        $output.=" <div class='chat-message $direction'>";
        $output.="<img class='message-avatar' ";
        $output.="src='";

        $output.=$from_user->user_path_and_placeholder();
//    $output.="img/a4.jpg";

        $output.="' alt='' >";

        $output.="<div class='message '>";
        $output.="<a class='message-author' href='#'>";
        $output.=$from_user->full_name();
        $output.="</a>";

        if($session->user_id===$chat->user_id){
            $output.="<span class='message-edit'> ";
            $output.="<a title='Edit message'  href='chat.php?id={$chat->id}'>";

            $output.=" <i class=\"fa fa-edit\"></i>";
            $output.="</a>";
            $output.="</span>";

            $output.="<span class='message-delete'> ";
            $output.="<a class='' title='Delete message' href='chat.php?delid={$chat->id}' onclick=\"return confirm('Are you sure you want to delete your message?');\" >";
            $output.="<i class=\"fa fa-minus-square \" style='color: red'></i>";
            $output.="</a>";
            $output.="</span>";
        }


        $output.="<span class='message-date'> ";

        $output.=$when;

        $output.="</span>";

        $output.="<span class='message-content'>";

        $output.=$chat->message;

        $output.="</span>";



        $output.="</div>";
        $output.=" </div>";



        return $output;


    }

    public static function chat_title(){

        $sql="SELECT MAX(id) as id FROM ".static::$table_name;
        $max=static::find_max_id();
        if($max){
            $chat=static::find_by_id($max);
            $header="Last message: ";
//            $when=DateDifferenceFormat($chat->date , unixToMySQL(time()) )." / ".datetime_to_text_day($chat->date);
            $when=datetime_to_text_day($chat->date);
        } else {
            $header="";
            $when="There is no messages";
        }



        $output="";
        $output.="<div class='ibox-title'>";
        $output.="<small class='pull-right text-muted'>$header";
        $output.=$when;
        $output.="</small>";

        $output.=static::$chat_header;
        $output.="</div>";

        $output.="";
        $output.="";

        return $output;

    }

    public static function chat_input_form($id=null){

        if($id){
            $chat=static::find_by_id($id);
            $message=$chat->message;
            $header_form="<h4>Edit your message here</h4>";
            $submit_value="Update it";
            $submit_name="submit_edit";
            $get="?id=".urlencode($id);
            $form_id=Form::form_id();
        } else {
            $message="";
            $header_form="";
            $submit_value="Send it";
            $submit_name="submit_new";
            $get="";
            $form_id="";

        }


        $output="";
        $output.="<div class='row'>";
        $output.= "<div class='col-lg-9'>";
        $output.=$header_form;
        $output .= "<div class='chat-message-form'>";
        $output .= "<form action='chat.php";
        $output .= $get;
        $output .= "' method='post'>";
        $output .= "<div class='form-group'>";
        $output .= " <textarea class='form-control message-input' name='message' placeholder='Enter message text'>";
        $output .= $message;
        $output .= "</textarea>";
        $output .= "<span > ";
        $output .= "<input class='btn btn-primary' type='submit' name='";
        $output .= $submit_name;
        $output .= "' value='";
        $output .= $submit_value;
        $output .= "'>";
        $output .= " </span>";

        if($id) {

            $output .= "<span > ";
            $output .= "<a class='btn btn-info' href='";
            $output .= static::$page_public;
            $output .= "' >";
            $output .= "Cancel";
            $output .= "</a>";
            $output .= " </span>";
        }

        $output .= $form_id;
        $output .= csrf_token_tag();
        $output .= "</div>";
        $output .= "</form>";
        $output .= "</div>";
        $output .= "</div>";
        $output .= "</div>";

        return $output;



    }


}