<?php include("includes/header.php"); ?>
<?php if(!$session->is_signed_in()){redirect('login.php');} ?>
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
                    <h1 class="page-header">
                        Photos
                        <small></small>
                    </h1>


        <div class="col-md-12">
        <table class="table table-hover">
            <thead>
            <tr>
                <th>Photo</th>
                <th>ID</th>
                <th>Filename</th>
                <th>Title</th>
                <th>Size</th>
                <th>Comments</th>
            </tr>
            </thead>
            <tbody>
       <?php
       $photos=Photo::find_all();
       $output="";
        $blank="&nbsp;&nbsp;&nbsp;";
       foreach ($photos as $photo) {
        $output.="<tr>"   ;
           $output.="<td style='text-center'><img  class='admin-photo-thumbnail' src=\"{$photo->picture_path()}\" alt=''>";
           $output.="<div class='picture_link'>";
           $output.="<a href='delete_photo.php?id=".urlencode($photo->id)."'>Delete</a>$blank";
           $output.="<a href='edit_photo.php?id=".urlencode($photo->id)."'>Edit</a>$blank";
           $output.="<a href='../photo.php?id=".urlencode($photo->id)."'>View</a>$blank";
           $output.="</div>";
$output.="</td>" ;
//        $output.="<td><img src=\"{$photo->picture_path()}\" width='80' height='60' alt=''></td>" ;
        $output.="<td>$photo->id</td>";
        $output.="<td>$photo->filename</td>";
        $output.="<td>$photo->title</td>";
        $output.="<td>$photo->size</td>";

        $comments=Comment::find_the_comment($photo->id);

        $output.="<td><a href='comments_photo.php?id={$photo->id}'> ".count ($comments)." comments</a></td>";

        $output.="</tr>"   ;
       }
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