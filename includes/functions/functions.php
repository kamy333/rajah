<?php

function strip_zeros_from_date( $marked_string="" ) {
    // first remove the marked zeros
    $no_zeros = str_replace('*0', '', $marked_string);
    // then remove any remaining marks
    $cleaned_string = str_replace('*', '', $no_zeros);
    return $cleaned_string;
}

function redirect_to( $location = NULL ) {
    if ($location != NULL) {
        header("Location: {$location}");
        exit;
    }
}

function output_message($message="",$type="error") {
    if ($type=="ok" || $type=="OK" || $type=="o" || $type=="O"){
        $alert="success";
        $gliphicon="ok";
        $txt="Warning";

    }elseif($type=="warning" || $type=="w" || $type=="W"){
        $alert="warning";
        $gliphicon="warning-sign";
        $txt="Warning";

    }elseif($type=="error" || $type=="e" || $type=="E"){
        $alert="danger";
        $gliphicon="exclamation-sign";
        $txt="Error";

    } else {
        $alert="danger";
        $gliphicon="exclamation-sign";
        $txt="Error";

    }

    if (!empty($message)) {
        $output = "<div class=\"alert alert-{$alert} fade in\"  role='alert' >";
        $output.="<a href='#' class='close' data-dismiss='alert'>&times;</a>";
        $output.="<span class=\"glyphicon glyphicon-{$gliphicon}\" aria-hidden='true'></span>";
        $output.="<span class=\"sr-only\">{$txt}:</span>";

        $output .= " &nbsp;".htmlentities($message, ENT_COMPAT, 'utf-8');
        $output .= "</div>";

        return $output;
    } else {
        return "";
    }
}

function has_presence($value) {
    $trimmed_value = trim($value);
    return isset($trimmed_value) && $trimmed_value !== "";
}

function __autoload($class_name) {
    $class_name = strtolower($class_name);
    $path = LIB_PATH.DS."{$class_name}.php";
    if(file_exists($path)) {
        require_once($path);
    } else {
        die("The file {$class_name}.php could not be found.");
    }
}

function include_layout_template($template="") {
    include(SITE_ROOT.DS.'public'.DS.'layouts'.DS.$template);
}

function log_action($action, $message="") {
    $logfile = SITE_ROOT.DS.'logs'.DS.'log.txt';
    $new = file_exists($logfile) ? false : true;
    if($handle = fopen($logfile, 'a')) { // append
        $timestamp = strftime("%Y-%m-%d %H:%M:%S", time());
        $content = "{$timestamp} | {$action}: {$message}\n";
        fwrite($handle, $content);
        fclose($handle);
        if($new) { chmod($logfile, 0755); }
    } else {
        echo "Could not open log file for writing.";
    }
}

function datetime_to_text($datetime="") {
    $unix_datetime = strtotime($datetime);
    return strftime("%B %d, %Y at %I:%M %p", $unix_datetime);
}

function now(){
    return strftime("%B %d, %Y at %I:%M %p", time());
}


function mth_fr_name($month_name){
    switch($month_name){
        case "January":       return "janvier" ;    break;
        case "February":      return "février" ;    break;
        case "March":         return "mars" ;       break;
        case "April":         return "avril" ;      break;
        case "May":           return "mai";         break;
        case "June":          return "juin";        break;
        case "July":          return "juillet";     break;
        case "August":        return "aôut";        break;
        case "September":     return "septembre";   break;
        case "October":       return "octobre";     break;
        case "November":      return "novembre";    break;
        case "December":      return "décembre";    break;

        default:
            return "ATTENTION ";
            break;
    }
}

function mth_fr_no($month_no){
    switch($month_no){
        case "01":       return "janvier" ;    break;
        case "02":       return "février" ;    break;
        case "03":       return "mars" ;       break;
        case "04":       return "avril" ;      break;
        case "05":       return "mai";         break;
        case "06":       return "juin";        break;
        case "07":       return "juillet";     break;
        case "08":       return "août";        break;
        case "09":       return "septembre";   break;
        case "10":       return "octobre";     break;
        case "11":       return "novembre";    break;
        case "12":       return "décembre";    break;

        default:
            return "ATTENTION ";
            break;
    }
}

function day_eng( $numb=0){

    switch($numb){
        case 1:            return "Monday";            break;
        case 2:            return "Tuesday";           break;
        case 3:            return "Wednesday";         break;
        case 4:            return "Thursday";          break;
        case 5:            return "Friday";            break;
        case 6:            return "Saturday";          break;
        case 7:            return "Sunday";            break;
        default:
            return "ATTENTION Day english name CHIFFRE DOIT ETRE ENTRE 1-7";
            break;


    }

}

function day_fr( $numb=0){

    switch($numb){
        case 1:    return "Lundi";         break;
        case 2:    return "Mardi";         break;
        case 3:    return "Mercredi";      break;
        case 4:    return "Jeudi";         break;
        case 5:    return "Vendredi";      break;
        case 6:    return "Samedi";        break;
        case 7:    return "Dimanche";      break;
        default:
            return "ATTENTION CHIFFRE DOIT ETRE ENTRE 1-7";
            break;


    }

}

function day_eng_no($jour){
    switch($jour){
        case "Monday":       return 1 ;   break;
        case "Tuesday":      return 2 ;   break;
        case "Wednesday":    return 3 ;   break;
        case "Thursday":     return 4 ;   break;
        case "Friday":       return 5;    break;
        case "Saturday":     return 6;    break;
        case "Sunday":       return 7;    break;
        default:
            return "ATTENTION day french CHIFFRE DOIT ETRE ENTRE 1-7";
            break;
    }


}

function day_no($jour){
    switch($jour){
        case "Lundi":            return 1;       break;
        case "Mardi":            return 2 ;      break;
        case "Mercredi":         return 3;       break;
        case "Jeudi":            return 4;       break;
        case "Vendredi":         return 5;       break;
        case "Samedi":           return 6;       break;
        case "Dimanche":         return 7;       break;
        default:
            return "ATTENTION CHIFFRE DOIT ETRE ENTRE 1-7";
            break;
    }


}


function date_fr($str_time='now'){
    $unix_time = strtotime($str_time);
    $day_wk_no = day_eng_no(strftime("%A" ,$unix_time));
    $nom_jour=day_fr($day_wk_no);
    $nom_jour_short=substr($nom_jour, 0, 3);

    $jour_no=strftime("*%d",$unix_time);
    $jour_no= str_replace('*0','',$jour_no);
    $jour_no= str_replace('*','',$jour_no);

    $now_month=mth_fr_name(strftime("%B" ,$unix_time));
    $now_month_short=substr($now_month, 0, 4);
    $now_year= strftime("%Y" ,$unix_time);
    $now_year_short=substr($now_year, 2, 2);

    $hour_minute=strftime("*%H:%M" ,$unix_time);
    $hour_minute= str_replace('*0','',$hour_minute);
    $hour_minute= str_replace('*','',$hour_minute);

    $date_fr=h($jour_no.".".$now_month.".".$now_year);
    $date_fr_short = h($nom_jour_short." ".$jour_no." ".$now_month_short." ".$now_year_short);
    $date_fr_long=h($nom_jour." ".$jour_no." ".$now_month." ".$now_year);

    $date_fr_hr=h($jour_no.".".$now_month.".".$now_year." - ".$hour_minute);
    $date_fr_short_hr = $nom_jour_short." ".$jour_no." ".$now_month_short." ".$now_year_short." - ".$hour_minute;
    $date_fr_long_hr=h($nom_jour." ".$jour_no." ".$now_month." ".$now_year." - ".$hour_minute);
    $date_fr_full_hr=h($nom_jour." ".$jour_no." ".$now_month." ".$now_year." ".$hour_minute);


    return array($date_fr,$date_fr_short,$date_fr_long,$date_fr_hr,$date_fr_short_hr,$date_fr_long_hr,$date_fr_full_hr);

//    list ($date_fr,$date_fr_short,$date_fr_long,$date_fr_hr,$date_fr_short_hr,$date_fr_long_hr,$date_fr_full_hr)= date_fr($date_sql);


}

function hs($string) {
    return htmlspecialchars($string);
}

// Sanitize for JavaScript output
function j($string) {
    return json_encode($string);
}

// Sanitize for use in a URL
function u($string) {
    return urlencode($string);
}

function h($string){
    return htmlentities($string,ENT_COMPAT."utf-8");
}

function e($string){
    global $database;

    return $database->escape_value($string) ;

}

function remove_get($remove=array()){
//var_dump($remove);
//var_dump($_GET);


    $array=array();

if (isset($_GET)){
    foreach($_GET as $key=>$val){
        if(!in_array($key,$remove)){
            $url_decode=urldecode($val);
            $array[$key] =$url_decode  ;
        }
    }

//    var_dump($array);
//   var_dump($_GET);

    return "?".http_build_query($array)."&";
} else {

    return "?";
}

}

function get_where_string($class_name){
    //  global$class_name;



    $where="";
    $where_query=null;
    if(isset($_GET)){


        if(isset($_GET)){

            if(!empty ($_GET['search_all'])  ){
                $j=0;

            foreach($class_name::get_table_field() as $col){
            $j++;
            $value=e (urldecode($_GET['search_all'])) ;
            $j==1? $where=" WHERE ":$where=" OR ";
            $where_query.=$where . $col." like '%".$value ."%'";

            }


            } else {
                $unique_get=array_unique($_GET);
                $i=0;
                foreach($unique_get as $key=>$val) {
                    if(in_array($key,$class_name::get_table_field())){

                        if(in_array($key,$class_name::$fields_numeric)){
                            $_num_val=(int)$val;
                            if(!empty($val)){
                                $i++;
//                                var_dump($where);
                                $i==1? $where=" WHERE ":$where=" AND ";
                                $where_query.=$where . $key."=".e($_num_val)." ";}
                        } else {
                            if(!empty($val)){
                                $i++;
                                $i==1? $where=" WHERE ":$where=" AND ";
                                $where_query.=$where . $key."='".e($val)."' ";}

                        }

                    }
                }
            }



        }

        return $where_query;
    } else {
        return "";
    }


}

function validate_ip ($ip){
    if(filter_var($ip,FILTER_VALIDATE_IP|FILTER_FLAG_IPV4 | FILTER_FLAG_NO_PRIV_RANGE|FILTER_FLAG_NO_RES_RANGE)===false){
        return false;
    } else {
        return true;
    }

}

// return first found
function forwarded_ip(){
    $keys=array(
        'HTTP_X_FORWARDED_FOR',
        'HTTP_X_FORWARDED',
        'HTTP_FORWARDED_FOR',
        'HTTP_FORWARDED',
        'HTTP_CLIENT_IP',
        'HTTP_X_CLUSTER_CLIENT_IP'
    );
    foreach ($keys as $key) {
        if(isset($_SERVER[$key])){
            $ip_array=explode(",",$_SERVER[$key]);
            foreach ($ip_array as $ip) {
                $ip=trim($ip);
            if(validate_ip($ip)){
                return $ip;
            }

            }

        }
    }
    return 'None';

}

function check_request(){

    echo $_POST['project_id'][0]."<br>";
    echo $_POST['project_id'][1]."<br>";
    echo array_count_values($_POST['project_id']);


if(request_is_post()  && $_POST){
    echo "<p>POST Request Value</p>"."<br>";
    echo "<pre>";
     print_r($_POST);
    echo "</pre>";
}

    if(request_is_get() && $_GET){
        echo "<p>GET Request Value</p>"."<br>";
        echo "<pre>";
         print_r($_GET);
        echo "</pre>";
    }



}




?>