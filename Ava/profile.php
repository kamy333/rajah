<?php require_once('../includes/initialize_ava.php'); ?>
<?php  $session->confirmation_protected_page(); ?>
<?php //if(!User::is_admin()){redirect_to("index.php");}



?>


<?php
//echo "<div style='background-color: white'>;";
//$id=3;
//echo "csrf_token_time.$id--".$_SESSION['csrf_token_time'.$id];
//echo "<br>";
//echo "csrf_token.$id--".$_SESSION['csrf_token'.$id];
//echo "</div>";

if(request_is_post() && request_is_same_domain()) {

    if (!csrf_token_is_valid(1) || !csrf_token_is_recent(1)) {
        $message = "Sorry, request was not valid 1.";
    } else {
        if (isset($_POST['submit'])&& $_POST['submit']==="Update Password") {
//            var_dump($_POST);
            $user=UpdateUserProfile::find_by_id($session->user_id);

            //validation
            $valid= new formValidation();
            $valid->validate_presences(array("password",'new_password','confirm_password'));
            $valid->is_equal('new_password','confirm_password');
            $valid->validate_min_lengths(array('new_password'=>4));

             $user->password=trim($_POST["password"]);
             $user->new_password=trim($_POST["new_password"]);
             $user->confirm_password=trim($_POST["confirm_password"]);

            if($user->match_password()){
//            echo "yes match";
//                $valid->warnings['existing_password']="OK existing password match to record";
//            echo $user->get_hashed_password();

                if($user->new_password===$user->confirm_password){
//                    $valid->warnings['xxxx']="OK same password new and confirm";

                    if(empty($valid->errors)){
                        $user->password=$user->new_password;
                        $user->crypt_password();


                        if (!$user->save()){
                            $session->message($user->username." "."Your password has been updated for (".$user->username .")");
                            $session->ok(true);
                            unset($_POST);
                            redirect_to("profile.php");
                        } else {
                            unset($_POST);

                            $session->message("User: ".$user->username." "." password update failed");

                        }
                    }





                } else {
                    $valid->errors['password_match']="No same password";

                }


            } else {
//            echo "Not match";
                $valid->errors['existing_password']="Your actual password does not match our record";

            }
        }
    }


}

if(request_is_post() && request_is_same_domain()) {

    if (!csrf_token_is_valid(2) || !csrf_token_is_recent(2)) {
        $message = "Sorry, request was not valid. 2";
    } else {
        if (isset($_POST['submit'])&& $_POST['submit']==="Update Info"){
            $user=UpdateUserProfile::find_by_id($session->user_id);

            $expected_fields=UpdateUserProfile::get_table_field();
            foreach($expected_fields as $field){
                if(isset($_POST[$field])){
                    $user->$field=trim($_POST{$field}) ;
                }
            }



            $valid=new FormValidation();
//            $user->unset_required_fields("username","password",'nom','email',);
            $user->unset_required_fields("password",'nom','user_type_id');

            $valid->validate_presences("first_name","last_name","email");
            $valid->validate_email(array('email'));

            $user->unset_table_fields(array("hashed_password","user_image","username","nom"));

            if(empty($valid->errors)){

                if (!$user->save()){
                    $session->message("Username".$user->username." "."other info for ID (".$user->id .")");
                    $session->ok(true);
                    unset($_POST);

                    redirect_to("profile.php");
                } else {
                    unset($_POST);
                    $session->message("User: ".$user->username." "."edit failed");

                }

            }






        }
    }

}

if(request_is_post() && request_is_same_domain()) {
//var_dump($_POST);
    if (!csrf_token_is_valid(3) || !csrf_token_is_recent(3)) {
        $message = "Sorry, request was not valid 3.";
    } else {
        if (isset($_POST['submit'])&& $_POST['submit']==="Update Photo"){
            $user=UpdateUserProfile::find_by_id($session->user_id);

            $valid= new formValidation();
            //    echo get_class_vars('User');



//            $user->unset_required_fields("username","password",'nom','email',);
//            $user->unset_required_fields("password",'nom','user_type_id');


//            $user->unset_table_fields(array('username', 'hashed_password', 'nom','email','user_type','user_type_id','block_user','unread_message','unread_notification','first_name', 'last_name','reset_token','address','cp','city','country','phone','mobile'));

            $user->unset_table_fields(array('hashed_password'));


            if(empty($valid->errors)){

                if (empty($_FILES['user_image'])) {

//                    $user->save();
                    redirect_to("profile.php");
                }


                if (!empty($_FILES['user_image'])){
                    $user->set_files($_FILES['user_image']) ;
                    $user->upload_photo();

                    $session->message("No photo was uploaded");
                }



                if (!$user->save()){
                    $session->message("Username".$user->username." "." picture (".$user->id .")");
                    $session->ok(true);
                    unset($_POST);

                    redirect_to("profile.php");
                } else {
                    unset($_POST);
                    $session->message("User: ".$user->username." "."edit failed");

                }

            }






        }
    }

}



?>


<?php //$active_menu="minor"; ?>
<?php $stylesheets="";  ?>
<?php $fluid_view=true; ?>
<?php $javascript=""; ?>
<?php $incl_message_error=true; ?>

<?php
if(User::is_visitor()){
 include(HEADER_PUBLIC);
 include(NAV_PUBLIC) ;

} else {
 include(HEADER);
 include(SIDEBAR) ;
 include(NAV) ;

}

?>

    <div class="row">
<div class="col-md-10 col-md-offset-1 bg-white">

        <?php

//        $testUser=UpdateUserProfile::find_by_id($session->user_id);
//         $expected_fields=$testUser::get_table_field();
//
//        foreach ($expected_fields as $a=> $f) {
//            echo $a . " ".$f. "<br>";
//        }
//        $testUser->unset_table_fields(array("hashed_password","user_image","username","nom"));
//
////       echo $s=array_search("hashed_password",$expected_fields);
//////        echo ."<hr>"
////        unset($expected_fields[$s]);
////        $expected_fields=array_values($expected_fields);
//        echo "<hr>";
//        $expected_fields=$testUser::get_table_field();
//        foreach ($expected_fields as $a=> $f) {
//            echo $a . " ".$f. "<br>";
//        }
//




        ?>


        <?php  echo isset($valid)? $valid->form_errors():"" ?>
        <?php  echo isset($valid)? $valid->form_warnings():"" ?>
        <?php if (isset($message)) { echo $message; }
        ?>
</div>

    </div>




<?php include_once ($Nav->path_public."inc".DS."profile.php")?>



                <div class="row"></div>



<!--            <div class="col-lg-12  white-bg">-->
<!--                <div class="text-center m-t-lg">-->
<!---->
<!---->
<!--            </div>-->

<!--    <div class="wrapper wrapper-content animated fadeInRight">-->
<!--        </div>-->




<?php  ?>
<?php
if(User::is_visitor()){
    include(FOOTER_PUBLIC);


} else {

    include(FOOTER);
}

?>