<?php require_once('../../includes/initialize.php');
$session->confirmation_protected_page();
if(User::is_employee() || User::is_secretary()){ redirect_to('index.php');}
?>

<?php $stylesheets="";  ?>
<?php $fluid_view=true; ?>
<?php $javascript="table"; ?>
<?php $incl_message_error=true; ?>

<?php include(HEADER) ?>
<?php include(SIDEBAR) ?>
<?php include(NAV) ?>
<?php  echo isset($valid)? $valid->form_errors():"" ?>
<?php if (isset($message)){echo $message;} ?>

<div class="wrapper wrapper-content animated fadeInRight">

<?php

 echo User::add_soustract_message( 2,-1);

//$user=find

echo Chat::get_chat();

$chats=Chat::find_all();

foreach($chats as $chat){
    $chat->set_up_display();
    if($chat->to== $user->username){


    echo $chat->username.'<br>';
    echo $chat->to.'<br>';
    echo $chat->message;
    }




}
unset($chats);

?>

    <?php
    $chats=Chat::find_all();
    foreach($chats as $chat){
    $chat->set_up_display();
    $from_user=User::find_by_id($chat->user_id);

    if($chat->to== $user->username){
    ?>


    <li class="dropdown">
        <a class="dropdown-toggle count-info" data-toggle="dropdown" href="#">
            <i class="fa fa-envelope"></i>  <span class="label label-warning">16</span>
        </a>
        <ul class="dropdown-menu dropdown-messages">
            <li>
                <div class="dropdown-messages-box">
                    <a href="<?php echo $path_admin; ?>profile.php" class="pull-left">
                        <img alt="image" class="img-circle" src="<?php echo $from_user->user_path_and_placeholder(); ?>">
                    </a>
                    <div class="media-body">
                        <small class="pull-right">46h ago</small>
                        <strong><?php echo $chat->username; ?></strong> wrote:<br> <strong><?php echo $chat->message; ?></strong>. <br>
                        <small class="text-muted"><?php echo $chat->date; ?></small>
                    </div>
                </div>
            </li>
            <li class="divider"></li>
            <?php } }?>

            <li>
                <div class="text-center link-block">
                    <a href="<?php echo $path_admin; ?>chat.php">
                        <i class="fa fa-envelope"></i> <strong>Read All Messages</strong>
                    </a>
                </div>
            </li>
        </ul>
    </li>




</div>




<?php include(FOOTER) ?>
