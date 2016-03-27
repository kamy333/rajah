

<div class="ibox float-e-margins">
    <div class="ibox-title">
        <h5 class="text-center">
            Manage <?php echo $class_name::$page_name; ?>
        </h5>

     &nbsp;&nbsp;&nbsp;  <span><a href="index.php">New <?php echo $class_name::$page_name; ?></a></span>
        

        <div class="ibox-tools">
            <a class="collapse-link">
                <i class="fa fa-chevron-up"></i>
            </a>
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                <i class="fa fa-wrench"></i>
            </a>
            <ul class="dropdown-menu dropdown-user">
                <li><a href="#">Config option 1</a>
                </li>
                <li><a href="#">Config option 2</a>
                </li>
            </ul>
            <a class="close-link">
                <i class="fa fa-times"></i>
            </a>
        </div>
    </div>
    <div class="ibox-content">

        <div class="table-responsive">
            <table class="table table-striped table-bordered table-hover dataTables-example" >
                <thead>
                <tr>
<!--                    <th>Rendering engine</th>-->
<!--                    <th>Browser</th>-->
<!--                    <th>Platform(s)</th>-->
<!--                    <th>Engine version</th>-->
<!--                    <th>CSS grade</th>-->
                    <?php echo $class_name::display_table_head_new(); ?>
                    
                    
                </tr>
                </thead>
                <tbody>

                <?php echo $class_name::display_all_new(); ?>

                </tbody>
                <tfoot>
                <tr>
<!--                    --><?php //echo $class_name::display_table_head_new(); ?>
                </tr>
                </tfoot>
            </table>
        </div>

    </div>
</div>