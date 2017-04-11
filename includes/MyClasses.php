<?php
/**
 * Created by PhpStorm.
 * User: Kamran
 * Date: 12/9/2016
 * Time: 3:02 PM

*/
//todo complete
class MyClasses
{

    public static $all_class=array(
        'HeurePresence', 'Note', 'ToDoList', 'Chat', 'ChatFriend', 'Notification',
        'User', 'UserType',
        'Links','LinksCategory','Category1','Category2',
        'Project','Client','InvoiceActual', 'Category','InvoiceEstimate','Currency',
        'MyCigarette',
        'MyExpense','MyExpensePerson','MyExpenseType','MyHouseExpense',
        'MyHouseExpenseType',
        'FailedLogin','BlacklistIp',
        'TransportChauffeur',
        'TransportClient',
        'TransportProgramming',
        'TransportProgrammingModel',
        'TransportType',
        'ViewTransportModel',
        "ViewTransportModelVisibleNo",
        "ViewTransportModelVisibleYes",
        'ViewTransportModelPivot', //parent
        "ViewTransportModelPivotNo",
        "ViewTransportModelPivotYes",
        "ViewTransportSummaryCourseDateProgram",

        'Comment','Photos') ;


    public static $short_class = [
//        'HeurePresence'=>"'HeurePresence'",
        "ToDo" => "ToDoList", "Message" => "Chat", "Chat" => "ChatFriend",
//        "User"=>"User","UserType"=>"UserType",
//        ""=>"",""=>"",""=>"",""=>"",""=>"",""=>"",
        "Course" => "TransportProgramming",
        "Model" => "TransportProgrammingModel",
        "Chauffeur" => "TransportChauffeur",
        "TransportType" => "TransportType",
        "tClient" => "TransportType",
        "ViewModel" => "ViewTransportModel",
        "ViewVisibleNo" => "ViewTransportModelVisibleNo",
        "ViewVisibleYes" => "ViewTransportModelVisibleYes",
        "ViewPivot" => "ViewTransportModelPivot",
        "ViewPivotNo" => "ViewTransportModelPivotNo",
        "ViewPivotYes" => "ViewTransportModelPivotYes",
        "ViewSummary" => "ViewTransportSummaryCourseDateProgram"


//        "Note"=>"Note",


    ];

    public static function find_short_class($short_cl)
    {

        if (array_key_exists($short_cl, static::$short_class)) {
            return static::$short_class[$short_cl];
        } else {
            return "";
        }

    }

    public static $disable_db_classes=array(
//        'User',
        'Comment','InvoiceEstimate','Photos',
//        'FailedLogin','BlacklistIp',
//        'TransportChauffeur',
//        'TransportClient',
//        'TransportProgramming',
//        'TransportProgrammingModel',
//        'TransportType',
        '');


    public static $helpers_class=array('DatabaseObject','Database','SmartNav','Pagination','Session','Table','Form','FormValidation','Modal','MyPHPMailer');

    public static $menu_data_manage=[];


    public static function redirect_disable_class(){
            global $session;

        static::short_class_check();
        if (!isset($_GET['class_name'])){
            $session->message('Sorry that was an invalid request');
            redirect_to('index.php');

        }

        if (isset($_GET['class_name'])&& !in_array($_GET['class_name'],static::$all_class)) {
            $session->message('Sorry that was an invalid request '.$_GET['class_name']);
            redirect_to('index.php');

        }

            if (isset($_GET['class_name'])&& in_array($_GET['class_name'],static::$disable_db_classes)){
                $session->message('Sorry request for '.$_GET['class_name'].' not accessible from here');
                redirect_to('index.php');

        }

        if (class_exists($_GET['class_name'])) {
            return $_GET['class_name'];
        } else {
            $session->message('Sorry request for ' . $_GET['class_name'] . ' not a class . Review code');
            redirect_to('index.php');
        }


    }


    public static function short_class_check()
    {
        if (isset($_GET["cl"])) {
            $class = $_GET["cl"];
            if (array_key_exists($_GET["cl"], static::$short_class)) {
                $_GET['class_name'] = static::$short_class[$_GET["cl"]];
//                echo "The class Name " .$_GET['class_name'];
//             if( class_exists ( $_GET['class_name'] )) {
//                 echo "class exist ".$_GET['class_name'];
//             } else {
//                 echo "class NOT exist ".$_GET['class_name'];
//             }

            }

        }


    }

}