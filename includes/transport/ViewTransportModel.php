<?php

/**
 * Created by PhpStorm.
 * User: kamy3
 * Date: 4/8/2017
 * Time: 4:28 PM
 */
class ViewTransportModel extends TransportProgrammingModel
{

    protected static $table_name = "transport_model";

    protected static $db_fields = array(
        'PrimaryKey', 'heure', 'jour', 'client_id', 'pseudo', 'client_sort', 'web_view', 'modele_id',
        'inverse_address', 'depart', 'arrivee', 'liste_restrictive', 'prix_course',
        'default_depart', 'default_arrivee', 'default_price', 'remarque', 'chauffeur_id', 'client_habituel', 'Dimanche', 'Lundi', 'Mardi', 'Mercredi', 'Jeudi', 'Vendredi', 'Samedi',);

    protected static $required_fields = [];


    public $PrimaryKey;
    public $heure;
    public $jour;
    public $client_id;
    public $pseudo;
    public $liste_restrictive;
    public $client_sort;
    public $web_view;
    public $modele_id;
    public $inverse_address;
    public $depart;
    public $arrivee;
    public $prix_course;
    public $default_depart;
    public $default_arrivee;
    public $default_price;
    public $remarque;
    public $chauffeur_id;
    public $client_habituel;
    public $Dimanche;
    public $Lundi;
    public $Mardi;
    public $Mercredi;
    public $Jeudi;
    public $Vendredi;
    public $Samedi;

    public static function main_display()
    {
        return static::create_calendar_french();
    }

    public static function create_calendar_french()
    {

        /** @noinspection SqlResolve */
        $sql = "SELECT * from " . self::$table_name . " ORDER BY heure ASC";
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