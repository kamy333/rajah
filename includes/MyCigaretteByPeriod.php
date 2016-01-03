<?php
class MyCigaretteDay extends MyCigarette{
    protected static $table_name="mycigarette_view_by_day";

    protected static $db_fields = array('year','month','date','total');

    protected static $db_fields_table_display_short = array('year','month','date','total');

    protected static $db_fields_table_display_full =  array('year','month','date','total');


public $date;
public $month;
public $year;
public $total;


    public static $page_name="Cigarette by Day";
    public static $page_manage="manage_MyCigaretteDay_view.php";


}


class MyCigaretteMonth extends MyCigarette{
    protected static $table_name="mycigarette_view_by_month";

    protected static $db_fields = array('year','month','total','monthno');

    protected static $db_fields_table_display_short = array('year','month','total');

    protected static $db_fields_table_display_full =  array('year','month','total');


public $year;
    public $month;
    public $total;


    public static $page_name="Cigarette by Month";
    public static $page_manage="manage_MyCigaretteMonth_view.php";


}

class MyCigaretteYear extends MyCigarette{
    protected static $table_name="mycigarette_view_by_year";

    protected static $db_fields = array('year','total');

    protected static $db_fields_table_display_short = array('year','month','date','total');

    protected static $db_fields_table_display_full =  array('year','month','date','total');



    public $year;
    public $total;


    public static $page_name="Cigarette by Year";
    public static $page_manage="manage_MyCigaretteYear_view.php";


}

?>