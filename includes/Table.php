
<?php

class Table  {

public $table="table";
public $table_bordered="table-bordered";
public $table_responsive="table-responsive";
public $table_hover="table-hover";
public $table_condensed="table-condensed";
public $table_striped="table-striped";



public function view($array_header=array()){
 $output="";

$output.="<table class='table table-bordered table-responsive table-hover table-condensed '>";

    $output.="<tr>";
    foreach ( $array_header as $header) {
        $output.="<th>";
        $output.=$header;
        $output.="</th>";
         }
    $output.="</tr>";

    $output.="<tr>";
    foreach ( $array_header as $header) {
        $output.="<td>";
        $output.=$header;
        $output.="</td>";
    }
    $output.="</tr>";

$output.="</table>";


return $output;

}


public static function ibox_table($content="",$header="",$col=4, $col_offset=0){

    $class_col="col-lg-$col ";

    if($col_offset==0){
        $class_col_offset="";
    } else {
        $class_col_offset="col-md-offset-$col_offset";
    }

    $output="<div class=\"$class_col $class_col_offset \">";
    $output.="<div class=\"ibox float-e-margins\" >";
    $output.="<div class=\"ibox-content\">";

    if($header){
        $output.="<h3 class=\"text-center\"><b>";
        $output.=$header;
        $output.="</b></h3>";
    }

    $output.=$content;

    $output.="</div>";
    $output.="</div>";
    $output.="</div>";

    $output.="";

return $output;
}

}

?>
