<?php

if ($layout_context=="public"){
    $path_admin="admin/";
    $path_public=""  ;
    $path="";

} else {
    $path_admin="";
    $path_public="../";
    $path="../";
} ?>



<?php if ($layout_context=="public"){ ?>
    <script>
        var $layout_context="public";
        var $path_admin="admin/";
        var $path_public=""  ;
        var $path="";
    </script>
<?php  } else {?>
    <script>
        var $layout_context="admin";
        var $path_admin="";
        var  $path_public="../";
        var $path="../";
    </script>

<?php  } ?>




<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Main view</title>

    <link href="<?php echo $path;?>css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo $path;?>font-awesome/css/font-awesome.css" rel="stylesheet">

    <link href="<?php echo $path;?>css/animate.css" rel="stylesheet">
    <link href="<?php echo $path;?>css/style.css" rel="stylesheet">

</head>

<body>

<div id="wrapper">