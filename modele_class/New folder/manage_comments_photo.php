<?php include("includes/header.php"); ?>
<?php if(!$session->is_signed_in()){redirect('login.php');} ?>


<?php if(empty($_GET['id']) || !isset($_GET['id']) ){
    redirect("photo.php");
}

$comments=Comment::find_the_comment($_GET['id']);
$photo=Photo::find_by_id($_GET['id']);
$picture="<img  class='admin-photo-comment' src=\"{$photo->picture_path()}\" alt=''>";
?>


    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">


        <?php include("includes/top_nav.php")?>
        <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->

        <?php include("includes/side_nav.php")?>


    </nav>

    <div id="page-wrapper">

    <div class="container-fluid">

    <!-- Page Heading -->
    <div class="row">
        <div class="col-lg-12">
            <?php echo $session->message(); ?>
            <h1 class="page-header">
                <?php echo $picture; ?>
                <small></small>
            </h1>
<!--            <a class="btn btn-primary" href="add_user.php">Add user</a>-->

            <div class="col-md-12">
                <table class="table table-hover">
                    <thead>
                    <tr>
                        <th>ID</th>
<!--                        <th>Photo</th>-->
                        <th>Author</th>
                        <th>Comment</th>
                        <th>Date tine</th>
                        <th colspan="2" class="text-center">Action</th>

                    </tr>
                    </thead>
                    <tbody>
                    <?php
//                    $comments=Comment::find_all();
                    $output="";
                    $blank="&nbsp;&nbsp;&nbsp;";
                    foreach ($comments as $comment) {
                        $photo=Photo::find_by_id($comment->photo_id);

                        $output.="<tr>"   ;

                        $output.="<td>$comment->id</td>";
//                        $output.="<td style='text-center'><img  class='user-image' src=\"{$photo->picture_path()}\" alt=''></td>";
                        $output.="<td>$comment->author</td>";
                        $output.="<td>$comment->body</td>";
                        $output.="<td>".strftime("%d %M %Y @ %Hh%M",strtotime($comment->input_date)) ."</td>";
                        $output.="<td class='text-center'><a class='btn btn-danger btn-xs page-table-action' href='delete_comment_photo.php?id=".urlencode($comment->id)."'>Delete</a></td>$blank";
                        $output.="<td class='text-center'><a class='btn btn-primary btn-xs  btn-xs page-table-action' href='edit_comment.php?id=".urlencode($comment->id)."'>Edit</a></td>$blank";
                        $output.="</tr>"   ;
                    }
                    unset($photo);
                    echo $output;
                    ?>


                    </tbody>
                </table>

            </div>

            &nbsp;&nbsp;&nbsp;

        </div>
        <!-- /.container-fluid -->



    </div>
    <!-- /#page-wrapper -->

<?php include("includes/footer.php"); ?>