<?php

/**
 * Created by PhpStorm.
 * User: Kamran
 * Date: 12-May-16
 * Time: 9:21 AM
 */
class TransportCourse extends DatabaseObject
{
public $id;
public $validated;
public $programed;
public $invoiced;
public $invoice_id;
public $course_date;
public $client_id;
public $pseudo;
public $pseudo_autres;

public $aller_retour;
public $aller_retour1;
public $retour_booked;
public $heure_retour;
public $chauffeur;
public $depart;
public $arrivee;
public $type_transport;
public $autres_prestations;
public $prix_course;
public $nom_patients;
public $bon_no;
public $remarque;
public $input_id;
public $username;
public $date_validation;
public $annulation_course;
public $export_course;


}