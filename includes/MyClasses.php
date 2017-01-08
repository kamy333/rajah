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
        'ToDoList','Chat','ChatFriend','Notification','User','UserType',
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
        'Comment','Photos') ;


    public static $disable_db_classes=array(
        'User',
        'Comment','InvoiceEstimate','Photos',
        'FailedLogin','BlacklistIp',
        'TransportChauffeur',
        'TransportClient',
        'TransportProgramming',
        'TransportProgrammingModel',
        'TransportType','' );


    public static $helpers_class=array('DatabaseObject','Database','SmartNav','Pagination','Session','Table','Form','FormValidation','Modal','MyPHPMailer');
    public static $menu_data_manage=[];


    public static function redirect_disable_class(){
            global $session;

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

        return '';

    }

}