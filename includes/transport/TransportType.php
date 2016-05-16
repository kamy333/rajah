<?php

/**
 * Created by PhpStorm.
 * User: Kamran
 * Date: 12-May-16
 * Time: 11:08 PM
 */
class TransportType extends DatabaseObject
{

    protected static $table_name="transport_type";

    protected static $db_fields = array('id','type_transport','input_date','modification_time','username');


    public $id;
    public $type_transport;
    public $input_date;
    public $modification_time;
    public $username;

}