<?php

/**
 * Created by PhpStorm.
 * User: Kamran
 * Date: 22-Apr-16
 * Time: 12:39 AM
 */
class Chat extends DatabaseObject
{

    public $id;
    public $user_id;
    public $to_user_id;
    public $message;
    public $date;
    public $read;

    public $username;
    public $to;

//    function __construct()
//    {
//        $this->set_up_display();
//    }

    protected static $table_name="chat";
    protected static $db_fields = array('id', 'user_id', 'to_user_id', 'read', 'message','date');

    public static $required_fields=array('id', 'user_id', 'to_user_id', 'read', 'message');

    protected static $db_fields_table_display_short=array('id', 'user_id', 'read','username', 'to_user_id','to', 'message','date');

    protected static $db_fields_table_display_full=array('id', 'user_id','username', 'to_user_id','to', 'read', 'message','date');

    protected static $db_field_exclude_table_display_sort=array('username','to');


    public static $get_form_element=array('user_id', 'to_user_id', 'read', 'message','date');
    public static $get_form_element_others=array();

    public static $form_default_value=array(
        "user_id"=>"2",

    );

    protected static $form_properties= array(


        "user_id"=> array("type"=>"select",
            "name"=>'user_id',
            "class"=>"User",
            "label_text"=>"User",
            'field_option_0'=>"id",
            'field_option_1'=>"username",
            "required" =>true,
        ),
        "to_user_id"=> array("type"=>"select",
            "name"=>'to_user_id',
            "class"=>"User",
            "label_text"=>"User",
            'field_option_0'=>"id",
            'field_option_1'=>"username",
            "required" =>true,
        ),
        "message"=> array("type"=>"text",
            "name"=>'message',
            "label_text"=>"Message",
            "placeholder"=>"Message here",
            "required" =>true,
        ),
        "read" =>array("type"=>"radio",
            array(0,
                array(
                    "label_all"=>"Read",
                    "name"=>"read",
                    "label_radio"=>"No",
                    "value"=>"0",
                    "id"=>"read_no",
                    "default"=>true)),
            array(1,
                array(
                    "label_all"=>"Read",
                    "name"=>"read",
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
        "to_user_id"=> array("type"=>"select",
            "name"=>'to_user_id',
            "id"=>"search_to_user_id",
            "class"=>"User",
            "label_text"=>"",
            "select_option_text"=>'Username',
            'field_option_0'=>"username",
            'field_option_1'=>"username",
            "required" =>false,
        ),


    );

    public function set_up_display(){
        $this->find_username();

    }

 

    protected function find_username() {
        $user=User::find_by_id($this->user_id);
        $this->username=$user->username;

        $user=User::find_by_id($this->to_user_id);
        $this->to=$user->username;
        unset($user);

    }




    
    public static function  get_chat(){
        global $session;
        global $path_admin;
        $output="";
        if ($session->is_logged_in()) {
$chats=static::find_all();
$count_chat=static::count_all_where(' WHERE user_id ='.$session->user_id);

$output.="                <li class=\"dropdown\">
                    <a class=\"dropdown-toggle count-info\" data-toggle=\"dropdown\" href=\"#\">" ;
$output.="        <i class=\"fa fa-envelope\"></i>  <span class=\"label label-warning\">" ;
$output.=$count_chat ;
$output.="</span>
                    </a>
                    <ul class=\"dropdown-menu dropdown-messages\">
                        <li>" ;
$output.="" ;
$output.="" ;

            foreach($chats as $chat){
                $output.= $chat->get_message_nav($chat);

            }
            $output.=" <li>";
            $output.="                 <div class=\"text-center link-block\">";
            $output.="                     <a href=\"<?php echo $path_admin; ?>chat.php\">";
            $output.="                         <i class=\"fa fa-envelope\"></i> <strong>Read All Messages</strong>
                                </a>
                            </div>
                        </li>
                    </ul>
                </li>" ;
            $output.="" ;
            $output.="" ;
            $output.="" ;
            $output.="" ;
            $output.="" ;

            return $output;

}
        return $output;
    }

    public function get_message_nav($chat){
        global $path_admin;
        $chat->set_up_display();
        $from_user=User::find_by_id($chat->user_id);

        $when=DateDifferenceFormat($chat->date , unixToMySQL(time()) );



        $output="";
        $output.="<div class=\"dropdown-messages-box\">";
        $output.="<a href=\" $path_admin profile.php\" class=\"pull-left\">";
        $output.="   <img alt=\"image\" class=\"img-circle\" src=\"";
        $output.=$from_user->user_path_and_placeholder();
        $output.="\" >";
        $output.="</a>";
        $output.="<div class=\"media-body\">";
        $output.="             <small class=\"pull-right\">";
        $output.=$when;
        $output.="</small><strong><span style=\"color: blue\">";
        $output.=$from_user->full_name();
        $output.="</span></strong> wrote:<br> <strong>";
        $output.=$chat->message;
        $output.="</strong>. <br>
                                    <small class=\"text-muted\">";
        $output.= datetime_to_text($chat->date);
        $output.="</small>
                                </div>
                            </div>
                        </li>
                        <li class=\"divider\"></li>";

        $output.="";
        $output.="";
        $output.="";
        $output.="";

        return $output;
    }

}