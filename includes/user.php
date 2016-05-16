<?php
// If it's going to need the database, then it's 
// probably smart to require it before we start.
require_once(LIB_PATH.DS.'database.php');

class User extends DatabaseObject {

	protected static $table_name="users";

    protected static $db_fields = array('id', 'username', 'hashed_password', 'nom','email','user_type','user_type_id','block_user','unread_message','unread_notification','first_name', 'last_name','user_image','reset_token','address','cp','city','country','phone','mobile');

    protected static $db_fields_no_password=array('id', 'username','nom','email','user_type','user_type_id','block_user','unread_message','unread_notification','first_name', 'last_name','user_image','reset_token','address','cp','city','country','phone','mobile');

    public static $required_fields=array('username','password','nom','email','user_type_id');
    public static $required_fields_no_password=array('username','nom','email','user_type_id');

    protected static $db_fields_table_display_short = array('id', 'username', 'nom','email','user_type','user_type_id','block_user','photo','reset_token');

    protected static $db_fields_table_display_full = array('id', 'username', 'nom','email','user_type','user_type_id','block_user','unread_message','unread_notification','first_name', 'last_name','user_image','reset_token','address','cp','city','country','phone','mobile');

    protected static $db_field_exclude_table_display_sort=array('photo');

    public static $fields_numeric=array('id','user_type','block_user','unread_message','unread_notification',);

    public static $get_form_element=array('user_image','username','password','nom','email','user_type_id','first_name','last_name','block_user');

    public static $get_form_element_others=array('address','cp','city','country','phone','mobile','','');

    public static $form_default_value=array(
        "block_user"=>"0",
        "user_type_id"=>"5"
    );

    // todo message per class

    public function message_form($msg='done'){
//        return " ".$this->id. " with ID".$this->id.$msg;
        return "User: ".$this->username. " with ID (".$this->id.") ".$msg;
    }

    protected static $form_properties= array(
        "username"=> array("type"=>"text",
            "name"=>'username',
            "label_text"=>"Username",
            "placeholder"=>"username",
            "required" =>true,
        ),
        "user_image"=> array("type"=>"file",
            "name"=>'user_image',
            "label_text"=>"User photo",
            "required" =>false,
        ),
        "password"=> array("type"=>"password",
            "name"=>'password',
            "label_text"=>"Password",
            "placeholder"=>"Password",
            "required" =>true,
        ),
        "nom"=> array("type"=>"text",
            "name"=>'nom',
            "label_text"=>"Full Name",
            "placeholder"=>"Full Name",
            "required" =>true,
        ),

        "email"=> array("type"=>"email",
            "name"=>'email',
            "label_text"=>"Email",
            "placeholder"=>"eg example@domain.com",
            "required" =>true,
        ),

        "user_type_id"=> array("type"=>"select",
            "name"=>'user_type_id',
            "class"=>"UserType",
            "label_text"=>"User type",
            'field_option_0'=>"id",
            'field_option_1'=>"user_type",
            "required" =>true,
        ),
        "first_name"=> array("type"=>"text",
            "name"=>'first_name',
            "label_text"=>"First Name",
            "placeholder"=>"First Name",
            "required" =>false,
        ),

        "last_name"=> array("type"=>"text",
            "name"=>'last_name',
            "label_text"=>"Last Name",
            "placeholder"=>"Last Name",
            "required" =>false,
        ),

        "reset_token"=> array("type"=>"text",
            "name"=>'reset_token',
            "label_text"=>"Reset token",
            "placeholder"=>"token only view or delete",
            "required" =>false,
        ),

        "block_user" =>array("type"=>"radio",
            array(0,
                array(
                    "label_all"=>"Block User",
                    "name"=>"block_user",
                    "label_radio"=>"No",
                    "value"=>"0",
                    "id"=>"block_user_no",
                    "default"=>true)),
            array(1,
                array(
                    "label_all"=>"Block User",
                    "name"=>"block_user",
                    "label_radio"=>"Yes",
                    "value"=>"1",
                    "id"=>"block_user_yes",
                    "default"=>false)),
        ),

        "address"=> array("type"=>"text",
            "name"=>'address',
            "label_text"=>"Adress",
            "placeholder"=>"User address",
            "required" =>false,
        ),

        "cp"=> array("type"=>"text",
            "name"=>'cp',
            "label_text"=>"Postal Code",
            "placeholder"=>"Postal Code",
            "required" =>false,
        ),

        "city"=> array("type"=>"text",
            "name"=>'city',
            "label_text"=>"City",
            "placeholder"=>"City",
            "required" =>false,
        ),


        "country"=> array("type"=>"text",
            "name"=>'country',
            "label_text"=>"Country",
            "placeholder"=>"Country",
            "required" =>false,
        ),

        "phone"=> array("type"=>"tel",
            "name"=>'phone',
            "label_text"=>"Phone No",
            "placeholder"=>"Phone No",
            "required" =>false,
        ),

        "mobile"=> array("type"=>"tel",
            "name"=>'mobile',
            "label_text"=>"mobile No",
            "placeholder"=>"mobile No",
            "required" =>false,
        ),

        "img"=> array("type"=>"file",
            "name"=>'img',
         ),


    );

    protected static $form_properties_search=array(
        "search_all"=> array("type"=>"text",
            "name"=>'search_all',
            "label_text"=>"",
            "placeholder"=>"Search all",
            "required" =>false,
        ),
        "download_csv" =>array("type"=>"radio",
            array(0,
                array(
                    "label_all"=>"Dnld csv",
                    "name"=>"download_csv",
                    "label_radio"=>"non",
                    "value"=>"No",
                    "id"=>"visible_no",
                    "default"=>true)),
            array(1,
                array(
                    "label_all"=>"Dnld csv",
                    "name"=>"download_csv",
                    "label_radio"=>"oui",
                    "value"=>"Yes",
                    "id"=>"visible_yes",
                    "default"=>true)),
        ),
        "id"=> array("type"=>"number",
            "name"=>'id',
            "id"=>"search_id",
            "label_text"=>"",
            'min'=>0,
            "placeholder"=>"ID",
            "required" =>false,
        ),

        "username"=> array("type"=>"select",
            "name"=>'username',
            "id"=>"search_username",
            "class"=>"User",
            "label_text"=>"",
            "select_option_text"=>'Username',
            'field_option_0'=>"username",
            'field_option_1'=>"username",
            "required" =>false,
        ),

        "nom"=> array("type"=>"select",
            "name"=>'nom',
            "id"=>"search_nom",
            "class"=>"User",
            "label_text"=>"",
            "select_option_text"=>'Full Name',
            'field_option_0'=>"nom",
            'field_option_1'=>"nom",
            "required" =>false,
        ),
        "email"=> array("type"=>"select",
            "name"=>'email',
            "id"=>"search_email",
            "class"=>"Client",
            "label_text"=>"",
            "select_option_text"=>'email',
            'field_option_0'=>"email",
            'field_option_1'=>"email",
            "required" =>false,
        ),
        "user_type"=> array("type"=>"select",
            "name"=>'user_type',
            "id"=>"search_user_type",
            "class"=>"UserType",
            "label_text"=>"",
            "select_option_text"=>'User Type',
            'field_option_0'=>"id",
            'field_option_1'=>"user_type",
            "required" =>false,
        ),
        "last_name"=> array("type"=>"select",
            "name"=>'last_name',
            "id"=>"search_last_name",
            "class"=>"User",
            "label_text"=>"",
            "select_option_text"=>'last_name',
            'field_option_0'=>"last_name",
            'field_option_1'=>"last_name",
            "required" =>false,
        ),
        "first_name"=> array("type"=>"select",
            "name"=>'first_name',
            "id"=>"search_first_name",
            "class"=>"User",
            "label_text"=>"",
            "select_option_text"=>'first_name',
            'field_option_0'=>"first_name",
            'field_option_1'=>"first_name",
            "required" =>false,
        ),
        "rest_token"=> array("type"=>"select",
            "name"=>'rest_token',
            "id"=>"search_rest_token",
            "class"=>"User",
            "label_text"=>"",
            "select_option_text"=>'rest_token',
            'field_option_0'=>"rest_token",
            'field_option_1'=>"rest_token",
            "required" =>false,
        ),
        "block_user"=> array("type"=>"select",
            "name"=>'block_user',
            "id"=>"search_block_user",
            "class"=>"User",
            "label_text"=>"",
            "select_option_text"=>'block_user',
            'field_option_0'=>"block_user",
            'field_option_1'=>"block_user",
            "required" =>false,
        ),
        "address"=> array("type"=>"select",
            "name"=>'address',
            "id"=>"search_address",
            "class"=>"Client",
            "label_text"=>"",
            "select_option_text"=>'Address',
            'field_option_0'=>"address",
            'field_option_1'=>"address",
            "required" =>false,
        ),
        "cp"=> array("type"=>"select",
            "name"=>'cp',
            "id"=>"search_cp",
            "class"=>"Client",
            "label_text"=>"",
            "select_option_text"=>'cp',
            'field_option_0'=>"cp",
            'field_option_1'=>"cp",
            "required" =>false,
        ),
        "city"=> array("type"=>"select",
            "name"=>'city',
            "id"=>"search_city",
            "class"=>"Client",
            "label_text"=>"",
            "select_option_text"=>'city',
            'field_option_0'=>"city",
            'field_option_1'=>"city",
            "required" =>false,
        ),
        "country"=> array("type"=>"select",
            "name"=>'country',
            "id"=>"search_country",
            "class"=>"Client",
            "label_text"=>"",
            "select_option_text"=>'country',
            'field_option_0'=>"country",
            'field_option_1'=>"country",
            "required" =>false,
        ),
        "phone"=> array("type"=>"select",
            "name"=>'phone',
            "id"=>"search_phone",
            "class"=>"Client",
            "label_text"=>"",
            "select_option_text"=>'Phone',
            'field_option_0'=>"phone",
            'field_option_1'=>"phone",
            "required" =>false,
        ),
        "mobile"=> array("type"=>"select",
            "name"=>'',
            "id"=>"search_mobile",
            "class"=>"Client",
            "label_text"=>"",
            "select_option_text"=>'Mobile',
            'field_option_0'=>"mobile",
            'field_option_1'=>"mobile",
            "required" =>false,
        ),





    );

    public static $db_field_search=array('search_all','id', 'username','nom','email','user_type','user_type_id','block_user','first_name', 'last_name','reset_token','address','cp','city','country','phone','mobile','download_csv');


    public static $page_name="User";
    public static $page_manage="manage_user.php";
    public static $page_new="new_user.php";
    public static $page_edit="edit_user.php";
    public static $page_delete="delete_user.php";


    const TYPE_ADMIN=1;
    const TYPE_MANAGER=2;
    const TYPE_SECRETARY=3;
    const TYPE_EMPLOYEE=4;
    const TYPE_VISITOR=5;
    const TYPE_CHAUFFEUR=6;

// not used but is method is_valid_user_type_id ()
    static public $valid_user_type_id=array(
      self::TYPE_ADMIN=>'admin',
      self::TYPE_MANAGER=>'manager',
      self::TYPE_SECRETARY=>'secretary',
      self::TYPE_EMPLOYEE=>'employee',
      self::TYPE_VISITOR=>'visitor',
      self::TYPE_CHAUFFEUR=>'chauffeur',
    );

    protected static $existing_password;
    public $id;
	public $username;
    public $password;
	protected $hashed_password;
    public $nom;
    public $email;
    public $user_type;
    public $user_type_id;
    public $first_name;
	public $last_name;
    public $reset_token;
    public $block_user;
    public $address;
    public $cp;
    public $city;
    public $country;
    public $phone;
    public $mobile;
//    public $img;
    public $user_image;

    public $photo;

    public $unread_message;
    public $unread_notification;


    public $upload_directory="uploads";
    public $full_path_directory=PATH_UPLOAD;
    public $image_placeholder="https://www.mountaineers.org/images/placeholder-images/placeholder-400-x-400/image_preview";

    public $tmp_path;
    public $errors=array();
    public $upload_errors_array=array(
        // http://www.php.net/manual/en/features.file-upload.errors.php
        UPLOAD_ERR_OK 			=> "No errors.",
        UPLOAD_ERR_INI_SIZE  	=> "Larger than upload_max_filesize.",
        UPLOAD_ERR_FORM_SIZE 	=> "Larger than form MAX_FILE_SIZE.",
        UPLOAD_ERR_PARTIAL 		=> "Partial upload.",
        UPLOAD_ERR_NO_FILE 		=> "No file  uploaded.",
        UPLOAD_ERR_NO_TMP_DIR   => "No temporary directory.",
        UPLOAD_ERR_CANT_WRITE   => "Can't write to disk.",
        UPLOAD_ERR_EXTENSION 	=> "File upload stopped by extension."
    );

    public function ajax_save_user_image($user_image,$user_id){
        global $database;

        $this->user_image=$user_image;
        $this->id=$user_id;


//     $this->save();

        $sql="UPDATE ".self::$table_name." SET user_image = '{$this->user_image}'";
        $sql.=" WHERE id={$this->id}";
        $update_image=$database->query($sql);

        echo $this->user_path_and_placeholder();

    }


    public static function add_soustract_message( $user_id,$operator=1){
//
        global $database;
        $user=static::find_by_id($user_id);
        var_dump($user->unread_message);

        $new_count=(int)($user->unread_message + $operator);
        if($new_count <=0){$new_count=0;}

        $sql = "UPDATE ".static::$table_name." SET ";
        $sql .="unread_message = ".$new_count;
        $sql .= " WHERE id=". $database->escape_value($user_id);
        $database->query($sql);
        return ($database->affected_rows() == 1) ? true : false;

    }


    public function user_path_and_placeholder(){
        $dir=   "../../". $this->upload_directory.DS.$this->user_image;
//     $dir=   $this->full_path_directory.DS.$this->user_image;

        return empty($this->user_image)?$this->image_placeholder :$dir;


    }


    public function set_files($files){
        if(empty($files) || !$files || !is_array($files)){
            $this->errors="There was no file uploaded";
            return false;

        } elseif ($files['error'] !=0){
            $this->errors[]=$this->upload_errors_array[$files['error']];
            return false;
        }else{
            $this->user_image=basename($files['name']);
            $this->tmp_path=$files['tmp_name'];
            $this->type=$files['type'];
            $this->size=$files['size'];
            return true;
        }
    }

    public function upload_photo() {

        if(!empty($this->errors)){
            return false;
        }

        if(empty($this->user_image)|| empty($this->tmp_path)){
            $this->errors[] ="the file was not available";
            return false;
        }

        $target_path=$this->full_path_directory.DS.$this->user_image;
//     var_dump($target_path) ;

        if (file_exists($target_path)) {
            $this->errors[] ="the file {$this->user_image} already exists";
            return false;
        }

        if(move_uploaded_file($this->tmp_path,$target_path)){

            unset($this->tmp_path)  ;
            return true;

        } else {
            $this->errors[] ="the folder probably does not have permission ";
            return false;
        }


    }




    // not used but can be validated to see that is valid and then use magic set and get (property $user_type id must be protected
    public static function is_valid_user_type_id($user_type_id){
    return array_key_exists($user_type_id,self::$valid_user_type_id);
    }

    // not used but could be set ny magic set and get
   public function set_user_type_id($user_type_id){
     if(self::is_valid_user_type_id($user_type_id))  {
         $this->user_type_id=$user_type_id;
     }
   }


    public static function is_employee()
    {
        if (isset($_SESSION) && isset($_SESSION['user_id'])) {
            $found_user = self::find_by_id($_SESSION["user_id"]);
            if ($found_user->user_type_id == self::TYPE_EMPLOYEE) {
                return true;
            } else {
                return false;
            }
        }
    }

    public static function is_chauffeur()
    {
        if (isset($_SESSION) && isset($_SESSION['user_id'])) {
            $found_user = self::find_by_id($_SESSION["user_id"]);
            if ($found_user->user_type_id == self::TYPE_CHAUFFEUR) {
                return true;
            } else {
                return false;
            }
        }
    }

    public static function is_visitor()
    {
        if (isset($_SESSION) && isset($_SESSION['user_id'])) {
            $found_user = self::find_by_id($_SESSION["user_id"]);
            if ($found_user->user_type_id == self::TYPE_VISITOR) {
                return true;
            } else {
                return false;
            }
        }
    }

    public static function is_stricter_access()
    {
        if (isset($_SESSION) && isset($_SESSION['user_id'])) {
            $found_user = self::find_by_id($_SESSION["user_id"]);
            if ($found_user->user_type_id == self::TYPE_VISITOR ||
                $found_user->user_type_id == self::TYPE_CHAUFFEUR ||
                $found_user->user_type_id == self::TYPE_EMPLOYEE ||
                $found_user->user_type_id == self::TYPE_SECRETARY) {
                return true;
            } else {
                return false;
            }
        }
    }

    public static function is_allow_access()
    {
        if (isset($_SESSION) && isset($_SESSION['user_id'])) {
            $found_user = self::find_by_id($_SESSION["user_id"]);
            if ($found_user->user_type_id == self::TYPE_ADMIN ||
                $found_user->user_type_id == self::TYPE_MANAGER ) {
                return true;
            } else {
                return false;
            }
        }
    }



    public static  function is_kamy()
    {
        if (isset($_SESSION) && isset($_SESSION['user_id'])) {
            $found_user = self::find_by_id($_SESSION["user_id"]);
            if ($found_user->username == 'kamy'||$found_user->username == 'admin') {
                return true;
            } else {
                return false;
            }
        }
    }

    public static function is_secretary(){
        if (isset($_SESSION) && isset($_SESSION['user_id'])) {
            $found_user = self::find_by_id($_SESSION["user_id"]);
            if ($found_user->user_type_id == self::TYPE_SECRETARY) {
                return true;
            } else {
                return false;
            }
        }

    }

    public static function is_manager (){
        if (isset($_SESSION) && isset($_SESSION['user_id'])) {
            $found_user = self::find_by_id($_SESSION["user_id"]);
            if ($found_user->user_type_id == self::TYPE_MANAGER) {
                return true;
            } else {
                return false;
            }
        }
    }

    public static function is_admin (){
        if (isset($_SESSION) && isset($_SESSION['user_id'])) {
            $found_user = self::find_by_id($_SESSION["user_id"]);
            if ($found_user->user_type_id == self::TYPE_ADMIN) {
                return true;
            } else {
                return false;
            }
        }

    }

    public  function kamy_debug(){
        var_dump(get_object_vars($this));
        var_dump(  get_defined_vars());
       // var_dump( get_defined_functions());
        var_dump(get_class_methods($this));

    }

    public function full_name() {
    if($this->first_name.$this->last_name ==""){
        return $this->username;
    }

    if(isset($this->first_name) && isset($this->last_name)) {
      return $this->first_name . " " . $this->last_name;
    } else {
      return $this->username;
    }
  }

    public function password_set($value){
        $this->password=trim($value);
        $this->password_encrypt();
    }

     private  function password_encrypt() {
         // new function to encrypt $this->hashed_password=password_hash($this->password,PASSWORD_BCRYPT)

        $hash_format = "$2y$10$";   // Tells PHP to use Blowfish with a "cost" of 10
        $salt_length = 22; 					// Blowfish salts should be 22-characters or more
        $salt = $this->generate_salt($salt_length);
        $format_and_salt = $hash_format . $salt;
        $hash = crypt($this->password, $format_and_salt);
        $this->hashed_password=$hash;
    }

    private  function generate_salt($length) {
        // Not 100% unique, not 100% random, but good enough for a salt
        // MD5 returns 32 characters
        $unique_random_string = md5(uniqid(mt_rand(), true));

        // Valid characters for a salt are [a-zA-Z0-9./]
        $base64_string = base64_encode($unique_random_string);

        // But not '+' which is valid in base64 encoding
        $modified_base64_string = str_replace('+', '.', $base64_string);

        // Truncate string to the correct length
        $salt = substr($modified_base64_string, 0, $length);

        return $salt;
    }

  private static function  password_check($password) {
      // new function password_verify($password,$existing_password)
        // existing hash contains format and salt at start
       $existing_hash=self::$existing_password;
        $hash = crypt($password, $existing_hash);
        if ($hash === $existing_hash) {
            return true;
        } else {
            return false;
        }
    }

  public static function authenticate($username="", $password="") {
        $record_user=self::find_by_username($username);
        $check= self::password_check($password);
        if ($check){
            return $record_user;
        }else {
            return false;
        }

      //  return $exiting_password;

    }

  public static function find_by_username($username="") {
      global $database;
      $username = $database->escape_value($username);
      $result_array = self::find_by_sql("SELECT * FROM ".self::$table_name." WHERE username='{$username}' LIMIT 1");
        return !empty($result_array) ? array_shift($result_array) : false;
    }

  public static function find_by_email($email="") {
      global $database;
      $email = $database->escape_value($email);
      $result_array = self::find_by_sql("SELECT * FROM ".self::$table_name." WHERE email='{$email}' LIMIT 1");
        return !empty($result_array) ? array_shift($result_array) : false;
    }

    public static function find_by_reset_token($token="") {
        global $database;
        $token = $database->escape_value($token);
        $result_array = self::find_by_sql("SELECT * FROM ".self::$table_name." WHERE reset_token='{$token}' LIMIT 1");
        return !empty($result_array) ? array_shift($result_array) : false;
    }

// Common Database Methods

//    protected static function instantiate($record)    {
//        self::$existing_password = $record["hashed_password"];
//        parent::instantiate($record);
//
//    }

    public function create() {
        $this->password_encrypt();
        parent::create();

    }

    public function update() {
        $this->password_encrypt();
        parent::update();

    }






public function create_reset_token() {
//    self::find_by_username($username);
    $token = reset_token();
    if(isset($this->id)){
     $this->reset_token=$token;
        $this->update_no_password();
        return true;
    } else {
        return false;
    }
}

public function delete_reset_token() {
  //  self::find_by_username($username);
    $token = null;

    if(isset($this->id)){
        $this->reset_token=$token;
        $this->update_no_password();
        return true;
    } else {
        return false;
    }
}

    public function update_no_password(){
        $value=self::$db_fields;
        self::$db_fields=self::$db_fields_no_password;
        parent::update();
        self::$db_fields=$value;

    }

    public function send_email(){

    $mail=new MyPHPMailer() ;

        //CC and BCC
        //    $mail->addCC("nafisspour@bluewin.ch");
        //   $mail->addBCC("bcc@example.com");


        $mail->addAddress($this->email, $this->nom);
        $url=MY_URL_ADMIN ."login_reset_password.php?token=". u($this->reset_token);

        $message="<b>Dear $this->nom,</b>,<br><br>";
        $message.="<p>We received a request that you have forgotten your password.<br>";
        $message.="<p>Username: <span style='color: #005fbf'><b>$this->username</b></span> </p>";
        $message.="Please click the below link to reset password </p>";
        $message.="<p><a href='$url'>".$url."</a></p>";
        $message.="<p>If you did not make this request,you do not need to take any action. Your password cannot be changed without clicking the above link to verify the request.</p>";

        $message.="<p>Many thanks</p><br>";
        $message.="<p><b>Yours ikamy.ch<b></b></p>";


       //Send HTML or Plain Text email
        $mail->isHTML(true);
        $mail->Subject = "ikamy.ch Reset Password Request";
        $mail->Body = $message;
     //   $mail->AltBody = "This is the plain text version of the email content";

        if(!$mail->send())
        {
            echo "Mailer Error: " . $mail->ErrorInfo;
        }
        else
        {
       //     echo "Message has been sent successfully";
        }




    }


    protected function set_up_display(){
        $this->set_user_type();
        $this->set_img();

    }



protected function set_img(){
if(isset($this->username)){
    if(file_exists("../img/{$this->username}.JPG")){
        $this->photo= "<a href='photo.php?username=".urlencode($this->username)."'> <span><img class='img-thumbnail img-responsive img-circle'  src='../img/{$this->username}.JPG' alt='{$this->username}'style='width:2em;height:2em;'</span></a>";
    }
}

}








    public function set_user_type() {
if(isset($this->user_type_id))  {
    switch ($this->user_type_id) {
        case self::TYPE_ADMIN :
            $this->user_type="admin";
            break;
        case self::TYPE_MANAGER :
            $this->user_type="manager";
            break;
        case self::TYPE_SECRETARY :
            $this->user_type="secretary";
            break;
        case self::TYPE_EMPLOYEE :
            $this->user_type="employee";
            break;
        case self::TYPE_VISITOR :
            $this->user_type="visitor";
            break;

    }


}
}

    }


class UserUpdate extends User {




    function __construct(){
           static::$form_properties['password']['required']=false;
        //  var_dump(self::$form_properties);

    }

    public static function get_form_properties($name) {

        static::$form_properties['password']['required']=false;

     //   var_dump(static::$form_properties[$name]);
        return static::$form_properties[$name];
        //   return $form_prop;
    }



}

class RegisterUser extends User{

    public static $required_fields=array('username','password','first_name','last_name','email','user_type_id');
}


?>