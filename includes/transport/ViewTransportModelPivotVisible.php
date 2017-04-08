<?php

/**
 * Created by PhpStorm.
 * User: kamy3
 * Date: 4/8/2017
 * Time: 7:40 PM
 */
class ViewTransportModelPivotVisible
{


    protected static $db_fields = array(
        'heure', 'pseudo', 'web_view', 'client_id', 'Dimanche', 'Lundi', 'Mardi', 'Mercredi', 'Jeudi', 'Vendredi', 'Samedi',);

    protected static $required_fields = [];

    public $heure;
    public $pseudo;
    public $web_view;
    public $client_id;
    public $Lundi;
    public $Mardi;
    public $Mercredi;
    public $Jeudi;
    public $Vendredi;
    public $Samedi;
    public $Dimanche;

    public static function main_display()
    {
        return static::create_calendar_french();
    }

    public static function create_calendar_french()
    {

        /** @noinspection SqlResolve */
        $sql = "SELECT * FROM " . self::$table_name . " ORDER BY heure ASC";
        $items = self::find_by_sql($sql);

        $output = "";

        $output .= "<div class='col-lg-12  white-bg'>";
        $output .= "<div class='text-center m-t-lg'>";


        foreach ($items as $item) {

            foreach (static::$db_fields as $field) {
                $output .= $item->$field . "<br>";
            }

        }
        $output .= "</div>";
        $output .= "</div>";
        return $output;

    }


}