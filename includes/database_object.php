<?php
// If it's going to need the database, then it's 
// probably smart to require it before we start.
require_once(LIB_PATH.DS.'database.php');

class DatabaseObject {

	// I'm waiting for Late Static Bindings in PHP 5.3
	// http://www.php.net/lsb

    // the below can be in his own class with php.5.3 move to DatabaseObject and change self to static or get_called_class() to get which object is calling aloo add the
    // protected static $table_name

    protected static $table_name;

    protected static $existing_password;
    protected static $db_fields;

    protected static $db_fields_update;

    protected static $db_fields_table_display_short ;
    protected static $db_fields_table_display_full ;
    protected static $db_field_exclude_table_display_sort=null;

    // todo not use but too attempt to have sort reference on table head an db field
    protected static $field_replace_display=null;


    public static $page_name;
    public static $page_manage;
    public static $page_new;
    public static $page_edit;
    public static $page_delete;

    public static $fields_numeric;

    protected static $form_properties;

    protected static $form_properties_search;

    public static $db_field_search;

    // list class case sensitive
public static $all_class=array('User','Client','Category','BlacklistIp','Links','LinksCategory','Project','Category1','Category2','InvoiceActual','InvoiceEstimate','FailedLogin','user_type') ;


public static function get_table_name() {
        $table=static::$table_name;
        return $table;
    }

    public static function get_table_field() {
        $table=static::$db_fields;
        return $table;
    }




    public static function find_all() {
        $table=static::$table_name;
        return static::find_by_sql("SELECT * FROM {$table} ");
    }

    public static function find_by_id($id=0) {
        global $database;

        $result_array = static::find_by_sql("SELECT * FROM"." ".static::$table_name." WHERE id=".$database->escape_value($id)." LIMIT 1");
        return !empty($result_array) ? array_shift($result_array) : false;
    }

    public static function find_by_sql($sql="") {
        global $database;
        $result_set = $database->query($sql);
        $object_array = array();
        while ($row = $database->fetch_array($result_set)) {
            $object_array[] = static::instantiate($row);
        }
        return $object_array;
    }

    public static function count_all(){
        global $database;
        $table=static::$table_name;
        $result_set=$database->query("SELECT count(*) FROM {$table} ");
        $row=$database->fetch_array($result_set);
        return $row ? array_shift($row): false;

    }


    public static function count_all_where($where=''){
        global $database;
        $table=static::$table_name;
        $result_set=$database->query("SELECT count(*) FROM {$table} {$where} ");
        $row=$database->fetch_array($result_set);
        return $row ? array_shift($row): false;

    }

    private static function instantiate($record) {
        // Could check that $record exists and is an array
        if(isset($record["hashed_password"])){
        static::$existing_password = $record["hashed_password"];
    }
        // if move to DatabaseObject class self change by
        // $object = new $class_name;
        // $class_name=get_called_class();
        $object = new static;
        // Simple, long-form approach:
        // $object->id 				= $record['id'];
        // $object->username 	= $record['username'];
        // $object->password 	= $record['password'];
        // $object->first_name = $record['first_name'];
        // $object->last_name 	= $record['last_name'];

        // More dynamic, short-form approach:
        foreach($record as $attribute=>$value){
            if($object->has_attribute($attribute)) {
                $object->$attribute = $value;
            }
        }
        return $object;
    }


    private function has_attribute($attribute) {
        // We don't care about the value, we just want to know if the key exists
        // Will return true or false
        return array_key_exists($attribute, $this->attributes());
    }

    private function attributes() {
        // return an array of attribute names and their values
        $attributes = array();
        foreach(static::$db_fields as $field) {
            if(property_exists($this, $field)) {
                $attributes[$field] = $this->$field;
            }
        }
        return $attributes;
    }

    protected function sanitized_attributes() {
        global $database;
        $clean_attributes = array();
        // sanitize the values before submitting
        // Note: does not alter the actual value of each attribute
        foreach($this->attributes() as $key => $value){
            $clean_attributes[$key] = $database->escape_value($value);
        }
        return $clean_attributes;
    }

    public function save(){
        // if the id is set then we update and prevent to create another same user
        // if(isset($this->id)){$this->update();} else {$this->create();}
        return isset($this->id)? $this->update(): $this->create() ;

    }


    public function create() {
        $this->set_up_display();

        global $database;
        // Don't forget your SQL syntax and good habits:
        // - INSERT INTO table (key, key) VALUES ('value', 'value')
        // - single-quotes around all values
        // - escape all values to prevent SQL injection
        $attributes = $this->sanitized_attributes();
        $sql = "INSERT INTO"." ".static::$table_name." (";
        $sql .= join(", ", array_keys($attributes));
        $sql .= ") VALUES ('";
        $sql .= join("', '", array_values($attributes));
        $sql .= "')";
        if($database->query($sql)) {
            $this->id = $database->insert_id();
            return true;
        } else {
            return false;
        }
    }


    public function update() {
        $this->set_up_display();
        global $database;
        // Don't forget your SQL syntax and good habits:
        // - UPDATE table SET key='value', key='value' WHERE condition
        // - single-quotes around all values
        // - escape all values to prevent SQL injection
        $attributes = $this->sanitized_attributes();
        $attribute_pairs = array();
        foreach($attributes as $key => $value) {
            $attribute_pairs[] = "{$key}='{$value}'";
        }
        $sql = "UPDATE ".static::$table_name." SET ";
        $sql .= join(", ", $attribute_pairs);
        $sql .= " WHERE id=". $database->escape_value($this->id);
        $database->query($sql);
        return ($database->affected_rows() == 1) ? true : false;
    }




    public function delete() {
        global $database;
        // Don't forget your SQL syntax and good habits:
        // - DELETE FROM table WHERE condition LIMIT 1
        // - escape all values to prevent SQL injection
        // - use LIMIT 1
        $sql = "DELETE FROM"." ".static::$table_name;
        $sql .= " WHERE id=". $database->escape_value($this->id);
        $sql .= " LIMIT 1";
        $database->query($sql);
        return ($database->affected_rows() == 1) ? true : false;

        // NB: After deleting, the instance of User still
        // exists, even though the database entry does not.
        // This can be useful, as in:
        //   echo $user->first_name . " was deleted";
        // but, for example, we can't call $user->update()
        // after calling $user->delete().
    }

    public static function option_distinct($field0,$field1){
     //   global $database;
        $sql="";

        if(empty($field0)  || empty($field1)){
            echo "Error:no defined fields, need at least 2";

        } else {
            $table=static::$table_name;
            $sql = "SELECT DISTINCT {$field0} , {$field1} FROM {$table}";
            return static::find_by_sql($sql);
        }

    }






    public static function get_distinct($name){
        $option="";
        if(empty($name)  || empty($field1)){
            echo "Error:no defined fields, need at field";

        } else {
            $table=static::$table_name;
            $sql = "SELECT DISTINCT {$name} FROM {$table}";
            $results= static::find_by_sql($sql);
            if($results){
                
                foreach($results as $result){
                    $safe_result=h($result) ;
                    $option.="<option value='{$safe_result}'>{$safe_result}</option>";
                }
            }



        }

    }



    public static function get_form_properties($name) {
        return static::$form_properties[$name];
        //   return $form_prop;
    }

    public static function get_form_properties_search($name) {
        return static::$form_properties_search[$name];
        //   return $form_prop;
    }


    public function get_form_search (){



        $output="";
        $div_class="<div class='col-xs-4'>";
        $value=null;

        $output.="<div class ='background_light_pink'>";
        $output.="<form name='form_client_search'  class='form-horizontal' method='get' action='". $_SERVER["PHP_SELF"]."?page=1"."'>";

        $output.=" <fieldset id='' title=''>";
        $output.=" <legend class='text-center' style='color: #0000ff'> Search " .static::$page_name ."</legend>";



        $output.= "<div class='row'>";
        foreach(static::$db_field_search as $name_search){
            $output.= $div_class;
           $output.=   static::get_form($name_search,$value,'search');
            $output.="</div>";


        }
        $output.= "</div>";

        $output.=" <div class='col-sm-offset-3 col-sm-7 col-xs-3'>";

        $output.="<button type='submit' name='submit' class='btn btn-info btn-block btn-group-lg'>".'Search  '."</button>";

        $output.="</div>";


        $output.="<div class='text-right ' >";

        $output.=" <button type='reset'  class='btn btn-default '> 'Reset  '</button>";


        $output.=" </div>";


        $output.= "</fieldset>";
        $output.= "</form>";
        $output.= "</div>";

        return $output;
    }


    public static function  get_modal_search(){
        $output="";
        $output.="      <button type='button' class='btn btn-primary btn-lg' data-toggle='modal' data-target='.bs-example-modal-lg'>";
        $output.="           <span class='glyphicon glyphicon-search' style='color: whitesmoke' aria-hidden='true'></span>";
        $output.="        </button>";



        $output.="       <div class='modal fade bs-example-modal-lg' tabindex='-1' role='dialog' aria-labelledby='myLargeModalLabel'>";
        $output.="          <div class='modal-dialog modal-lg'>";
        $output.="             <div class='modal-content'>";
        $output.="                  <div class='modal-header'>";
        $output.="                    <button type='button' class='close' data-dismiss='modal' aria-label='Close'><span aria-hidden='true'>&times;</span></button>";
        $output.="                      <h4 class='modal-title' id='myModalLabel'>";
        $output.=static::$page_name;
        $output.="                    </h4>";
        $output.="                 </div>";
        $output.="                 <div class='modal-body'>";



       $output.= static::get_form_search();

        $output.="                      </div>";
        $output.="                <div class='modal-footer'>";
        $output.="                    <button type='button' class='btn btn-default' data-dismiss='modal'>Close</button>";
        $output.="                   <button type='button' class='btn btn-primary'>Save changes</button>";
        $output.="              </div>";
        $output.="           </div>";
        $output.="        </div>";
        $output.="   </div>";

        return $output;

    }





    static function get_form($name,$value='',$type_form=''){
        //to move to Database Object
        if(isset(static::$form_properties)){


            $form=New Form();
         //   static:: get_form_properties();
        //    var_dump(static::$form_properties);

          //  $vars=static::$form_properties[$name];


            if($type_form){
                $vars=static::get_form_properties_search($name);
                $form->form_format_type=$form::FORM_HORIZONTAL;
            } else {
                $vars=static::get_form_properties($name);
                $form->form_format_type=$form::FORM_HORIZONTAL;

            }


            $type_exception=array('radio','checkbox','textarea') ;

//must be one of the following input to use ->text() todo checkbox
            $type_no_exception=array("text",'password','email','select','search','date','datetime','datetime-local','color','button','file','hidden','image','month','number','range','reset','search','submit','tel','file','url' );

            $type_text=array("text",'password','email','search','date','datetime','datetime-local','color','button','file','hidden','image','month','number','range','reset','search','submit','tel','url' );

            $type= $vars['type']  ;

        //    var_dump($vars);
            if (in_array($type,$type_no_exception)) {
                foreach($vars as $attr =>$val){

                    $form->$attr =$val;
                }
            } elseif($type=="radio") {
                foreach($vars as $attr =>$val){
                    foreach($val as $attr2 =>$val2) {
                        $form->radio[(int) $attr] = $val;
                    }
                }
            } elseif($type=="textarea") {
                foreach($vars as $attr =>$val){

                    $form->$attr =$val;
                }

            } elseif($type=="combox") {
                //todo need to add forms

            } else {}



//to do
            if(!empty($value) || (int) $value===0)
            { $form->value=$value;
            } else {
                if ($type=="number")
                {$form->value=0;}
            }




            $output="";
//var_dump($form);
//var_dump($type);
//var_dump($value) ;

            if (in_array($type,$type_text)) {
                $output= $form->text();
            } elseif($type=="radio"){
                $output= $form->radio();
            }elseif($type=="select"){
                $output=  $form->select();
            }elseif($type=="textarea"){
                $output=  $form->textarea();
            } else {

            }

        } else {
            $output=  "no form properties set";
        }

       // unset($form);

        return $output;
    }


    static public function display_pagination($pagination,$page){

       // $add_view="&view=".u(1);

        $query_string= remove_get(array('page'));


        $output="<div id=''>";
        $output.=" <nav>";
        $output.=" <ul class='pagination'>";

        if($pagination->total_pages() > 1) {

            //     <li><a href="#">Previous</a></li>
            if($pagination->has_previous_page()) {
                $output.= "<li><a href=\"".static::$page_manage.$query_string."page=";
                $output.= urlencode($pagination->previous_page());
                $output.= "\">&laquo; Previous</a></li> ";
            }

            for($i=1; $i <= $pagination->total_pages(); $i++) {
                if($i == $page) {
                    $output.= " <li class=\"active\"><a href='#'>{$i}</a></li> ";

                } else {
                    $output.= "<li class=\"\"><a href=\"".static::$page_manage.$query_string."page={$i}\">{$i}</a></li> ";
                }
            }

            if($pagination->has_next_page()) {
                $output.= "<li> <a href=\"".static::$page_manage.$query_string."page=";
                $output.= urlencode($pagination->next_page());;
                $output.= "\">Next &raquo;</a></li> ";
            }

        }


        $output.="       </ul>";
        $output.="    </nav>";
        $output.="</div>";

        return $output    ;

    }

    protected function set_up_display(){


    }


    public static function display_all($object_all,$long_short=0){
        $output="";
        $output.=static::display_table_head($long_short);

        foreach($object_all as $object){
            $output.=   $object->display_table($long_short);
        }

        $output.=static::display_table_footer();
        return $output;

    }

    public static function display_table_head($long_short=0){


       // $query_string= urldecode($_SERVER['QUERY_STRING']);

        $query_string= remove_get(array('order_name','order_type','page'));

        if($long_short==1){
            $table_field=static::$db_fields_table_display_full;

        } else {
            $table_field=static::$db_fields_table_display_short;

        }

        $output="";

        $output.="<div class='panel panel-primary text-center'>";
        // <!-- Default panel contents -->
        $output.="<div class='panel-heading'>".static::$page_name."</div>";


        $output.=" <div class='panel-body'>";
        $where=get_where_string(get_called_class());
        $found_count=static::count_all_where($where);
        $total_count=static::count_all();

        if($found_count!==$total_count){
            $output.="<b>Found records: <span style='color:blue;'> ".h($found_count)." of ".h($total_count)."</span></b> | ";
        }



        foreach($_GET as $key=>$val){
            $key_clean = str_replace("_", " ", $key);
            $key_clean = ucfirst($key_clean);


            if(!empty($_GET[$key]) && !in_array($key,array('page','view'))){
                $output.="<b>".h($key_clean)." <span style='color:blue;'> ".h(urldecode($_GET[$key]))."</span></b> | ";
            }
        }
       //  $output.="<p>hi</p>";
        $output.="</div>";

        $output.="<div class='table-responsive'>";

        $output.="<table class='table table-striped table-bordered table-hover table-condensed '>";
        $output.= "<tr>";

        foreach($table_field as $fieldname){
            if(property_exists(new static,$fieldname)){
                if(isset(static::$db_field_exclude_table_display_sort)&&in_array($fieldname,static::$db_field_exclude_table_display_sort)){
                    $fieldname = str_replace("_", " ", $fieldname);
                    $fieldname = ucfirst($fieldname);

                    $output.= "<th class='text-center' style='vertical-align:middle;'>".$fieldname."</th>";

                } else {
        $new_query_ASC="<a href='".$_SERVER["PHP_SELF"]."".$query_string."page=".u(1)."&order_name=".u($fieldname)."&order_type=".u('ASC')."'>'";
        $new_query_ASC.="<span class='glyphicon glyphicon-triangle-bottom' style='color: white' aria-hidden='true'></span></a>";
        $new_query_DESC="<a href='".$_SERVER["PHP_SELF"]."".$query_string."page=".u(1)."&order_name=".u($fieldname)."&order_type=".u('DESC')."'>'";
        $new_query_DESC.="<span class='glyphicon glyphicon-triangle-top' style='color: white'  aria-hidden='true'></span></a>";
        $fieldname = str_replace("_", " ", $fieldname);
        $fieldname = ucfirst($fieldname);

        $output.= "<th class='text-center'style='vertical-align:middle;background-color:=red;'>".$new_query_ASC."&nbsp;".$fieldname.$new_query_DESC."&nbsp;"."</th>";
                }


            }
        }

        $output.= "<th colspan=\"2\" class=\"text-center\" style='vertical-align:middle;'>Actions</th>";
        $output.= "</tr>";
        return $output;
    }

    public static function display_table_footer(){
        $output="</table>";
        $output.="</div>";
        $output.="</div>";
        $output.="<p class='text-right'><a href='". static::$page_new."'>Add New ". static::$page_name."</a></p>";
        return $output;

    }

    public function display_table($long_short=0){

        $this->set_up_display();

        $output="";
        $output.= "<tr>";

if($long_short==1){
    $table_field=static::$db_fields_table_display_full;

} else {
    $table_field=static::$db_fields_table_display_short;

}


        foreach($table_field as $fieldname){
            if(property_exists($this,$fieldname)){
                $output.= "<td class='text-center'>".$this->$fieldname."</td>";

            }
        }

        $output.= "<td class='text-center'><a href='".static::$page_edit."?id=".urlencode($this->id)."'>Edit</a></td>" ;

        $output.= "<td class='text-center'><a href='".static::$page_delete."?id=".urlencode($this->id)."'>Delete</a></td>" ;
        $output.= "</tr>";
        return $output;

    }

}