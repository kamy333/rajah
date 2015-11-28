<?php

/**
 * Created by PhpStorm.
 * User: Kamran
 * Date: 24.11.2015
 * Time: 00:47
 */
//protected static $db_fields = array('','','','','','','','','','');

class MyCigarette extends DatabaseObject {
    protected static $table_name="mycigarette";

    protected static $db_fields = array('id','cig_date','number_cig','creation_time','modification_time','comment');

    protected static $db_fields_table_display_short =array('id','cig_date','number_cig','creation_time','modification_time','comment');

    protected static $db_fields_table_display_full = array('id','cig_date','number_cig','creation_time','modification_time','comment');



}