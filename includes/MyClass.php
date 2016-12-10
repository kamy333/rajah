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


    public static $disable_db_classes=array('Comment','InvoiceEstimate','Photos');


    public static $helpers=array('DatabaseObject','Database','SmartNav','Pagination','Session','Table','Form','FormValidation','Modal','MyPHPMailer');
    public static $menu_data_manage=[];


}