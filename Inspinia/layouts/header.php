<?php require_once (CONFIG_HEADER);?>


<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>ikamy</title>

    <link href="<?php echo $path;?>css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo $path;?>font-awesome/css/font-awesome.css" rel="stylesheet">


    <?php $pages=array('index') ?>
    <?php if(in_array($active_menu_clean,$pages) ) { ?>

    <!-- Toastr style -->
    <link href="<?php echo $path;?>css/plugins/toastr/toastr.min.css" rel="stylesheet">
    <?php } unset($pages) ?>


    <!-- Gritter -->
    <link href="<?php echo $path;?>js/plugins/gritter/jquery.gritter.css" rel="stylesheet">
    
    <link href="<?php echo $path;?>css/animate.css" rel="stylesheet">
    <link href="<?php echo $path;?>css/style.css" rel="stylesheet">
    <link href="<?php echo $path;?>css/style_personal.css" rel="stylesheet">


    <?php $pages=array('class_manage') ?>
    <?php if(in_array($active_menu_clean,$pages) ) { ?>

        <link href="<?php echo $path;?>css/plugins/dataTables/datatables.min.css" rel="stylesheet">

    <?php } unset($pages) ?>






</head>

<?php if ($menu_canvas) {
    echo "<body class=\"canvas-menu\">";
} else {
    echo "<body>";

}?>


<div id="wrapper">