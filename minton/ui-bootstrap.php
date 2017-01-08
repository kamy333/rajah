<?php require 'includes/header_start.php'; ?>

<?php require 'includes/header_end.php'; ?>



<!-- Page-Title -->
<div class="row">
    <div class="col-sm-12">
        <div class="page-title-box">
            <ol class="breadcrumb pull-right">
                <li><a href="#">Minton</a></li>
                <li><a href="#">UI Kit</a></li>
                <li class="active">Bootstrap-UI</li>
            </ol>
            <h4 class="page-title">Bootstrap-Elements</h4>
        </div>
    </div>
</div>



<div class="row">
    <div class="col-sm-12">
        <div class="card-box">
            <div class="row">

                <!-- Popovers -->
                <div class="col-md-6">
                    <h4 class="m-t-0 header-title"><b>Popovers</b></h4>
                    <p class="text-muted m-b-30 font-13">
                        Add small overlays of content, like those on the iPad, to any element for housing secondary information.
                    </p>

                    <div class="button-list">
                        <button type="button" class="btn btn-default" data-container="body" title="" data-toggle="popover" data-placement="top" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus." data-original-title="">
                            Popover on top
                        </button>

                        <button type="button" class="btn btn-default" data-container="body" title="" data-toggle="popover" data-placement="bottom" data-content="Vivamus
												sagittis lacus vel augue laoreet rutrum faucibus." data-original-title="">
                            Popover on bottom
                        </button>

                        <button type="button" class="btn btn-default" data-container="body" title="" data-toggle="popover" data-placement="right" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus." data-original-title="">
                            Popover on right
                        </button>

                        <button type="button" class="btn btn-default" data-container="body" title="" data-toggle="popover" data-placement="left" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus." data-original-title="Popover title">
                            Popover on left
                        </button>

                        <button tabindex="0" class="btn btn-default" role="button" data-toggle="popover" data-trigger="focus" title="" data-content="And here's some amazing content. It's very engaging. Right?" data-original-title="Dismissible popover">
                            Dismissible popover
                        </button>
                    </div>
                </div>
                <!-- end col -->


                <!-- Tooltips -->
                <div class="col-md-6">
                    <h4 class="m-t-0 header-title"><b>Tooltips</b></h4>
                    <p class="text-muted m-b-30 font-13">
                        Four options are available: top, right, bottom, and left aligned.
                    </p>

                    <div class="button-list">
                        <button type="button" class="btn btn-default" data-toggle="tooltip" data-placement="left" title="Tooltip on left">Tooltip on left</button>

                        <button type="button" class="btn btn-default" data-toggle="tooltip" data-placement="top" title="" data-original-title="Tooltip on top">Tooltip on top</button>

                        <button type="button" class="btn btn-default" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Tooltip on bottom">Tooltip on bottom</button>

                        <button type="button" class="btn btn-default" data-toggle="tooltip" data-placement="right" title="" data-original-title="Tooltip on right">Tooltip on right</button>
                    </div>
                </div>
                <!-- end col -->

            </div> <!-- end row -->
        </div> <!-- end card-box -->
    </div> <!-- end col -->
</div>
<!-- end row -->



<div class="row">
    <div class="col-sm-12">
        <div class="card-box">
            <div class="row">

                <!-- Labels -->
                <div class="col-md-6">
                    <h4 class="m-t-0 header-title"><b>Labels</b></h4>
                    <p class="text-muted m-b-30 font-13">
                        Add any of the default mentioned modifier classes to change the appearance of a label.
                    </p>

                    <div class="">
                        <span class="label label-default">Default</span>
                        <span class="label label-primary">Primary</span>
                        <span class="label label-success">Success</span>
                        <span class="label label-info">Info</span>
                        <span class="label label-warning">Warning</span>
                        <span class="label label-danger">Danger</span>
                        <span class="label label-purple">Purple</span>
                        <span class="label label-inverse">Inverse</span>
                        <span class="label label-pink">Pink</span>
                    </div>
                </div>
                <!-- end col -->


                <!-- Badge -->
                <div class="col-md-6">
                    <h4 class="m-t-0 header-title"><b>Badge</b></h4>
                    <p class="text-muted m-b-30 font-13">
                        Four options are available: top, right, bottom, and left aligned.
                    </p>

                    <div class="">
                        <span class="badge badge-primary">15</span>
                        <span class="badge badge-success">0</span>
                        <span class="badge badge-info">21</span>
                        <span class="badge badge-inverse">3</span>
                        <span class="badge badge-warning">35</span>
                        <span class="badge badge-danger">32</span>
                        <span class="badge badge-purple">51</span>
                        <span class="badge badge-pink">77</span>
                        <span class="badge">9</span>
                    </div>
                </div>
                <!-- end col -->

            </div> <!-- end row -->
        </div> <!-- end card-box -->
    </div> <!-- end col -->
</div>
<!-- end row -->



<div class="row">
    <div class="col-sm-12">
        <div class="card-box">
            <div class="row">

                <!-- Standard Alert -->
                <div class="col-md-6">
                    <h4 class="m-t-0 header-title"><b>Standard Alert</b></h4>
                    <p class="text-muted m-b-30 font-13 m-h-40">
                        Wrap any text and an optional dismiss button in <code>.alert</code> and one of the four contextual classes (e.g., <code>.alert-success</code>) for basic alert messages.
                    </p>

                    <div class="alert alert-success">
                        <strong>Well done!</strong> You successfully read this important alert message.
                    </div>
                    <div class="alert alert-info">
                        <strong>Heads up!</strong> This alert needs your attention, but it's not super important.
                    </div>
                    <div class="alert alert-warning">
                        <strong>Warning!</strong> Better check yourself, you're not looking too good.
                    </div>
                    <div class="alert alert-danger">
                        <strong>Oh snap!</strong> Change a few things up and try submitting again.
                    </div>

                    <div class="alert alert-success fade in m-b-0">
                        <h4>Big one!</h4>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum.
                        </p>
                        <p class="m-t-10">
                            <button type="button" class="btn btn-success waves-effect waves-light">
                                Wanna do this
                            </button>
                            <button type="button" class="btn btn-default waves-effect">
                                Or do this
                            </button>
                        </p>
                    </div>

                </div>
                <!-- end col -Standard Alert -->

                <div class="col-md-6">
                    <h4 class="m-t-0 header-title"><b>Dismissable Alert</b></h4>
                    <p class="text-muted m-b-30 font-13 m-h-40">
                        Build on any alert by adding an optional <code>.alert-dismissible</code> and close button.
                    </p>

                    <div class="alert alert-success alert-dismissable">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. <a href="#" class="alert-link">Alert Link</a>.
                    </div>
                    <div class="alert alert-info alert-dismissable">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. <a href="#" class="alert-link">Alert Link</a>.
                    </div>
                    <div class="alert alert-warning alert-dismissable">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. <a href="#" class="alert-link">Alert Link</a>.
                    </div>
                    <div class="alert alert-danger alert-dismissable">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. <a href="#" class="alert-link">Alert Link</a>.
                    </div>

                    <div class="alert alert-info fade in m-b-0">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                        <h4>Big one!</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum.</p>
                        <p class="m-t-10">
                            <button type="button" class="btn btn-info waves-effect waves-light">Wanna do this</button>
                            <button type="button" class="btn btn-default waves-effect">Or do this</button>
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
<!-- End row -->


<div class="row">
    <div class="col-sm-12">
        <div class="card-box">
            <div class="row">

                <!-- Pagination -->
                <div class="col-md-6">
                    <h4 class="m-t-0 header-title"><b>Pagination</b></h4>
                    <p class="text-muted m-b-30 font-13">
                        Provide pagination links for your site or app with the multi-page pagination component.
                    </p>

                    <div>
                        <h5 class="m-b-5"><b>Default Pagination</b></h5>
                        <p class="text-muted font-13">
                            Simple pagination inspired by Rdio, great for apps and search results.
                        </p>
                        <ul class="pagination">
                            <li class="disabled">
                                <a href="#"><i class="fa fa-angle-left"></i></a>
                            </li>
                            <li>
                                <a href="#">1</a>
                            </li>
                            <li class="active">
                                <a href="#">2</a>
                            </li>
                            <li>
                                <a href="#">3</a>
                            </li>
                            <li>
                                <a href="#">4</a>
                            </li>
                            <li>
                                <a href="#">5</a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-angle-right"></i></a>
                            </li>
                        </ul>

                        <div class="m-b-5"></div>

                        <h5 class="m-b-5"><b>Split Pagination</b></h5>
                        <p class="text-muted font-13">
                            Links are split to each other by adding a class of <code>
                                .pagination-split</code>
                        </p>
                        <ul class="pagination pagination-split">
                            <li class="disabled">
                                <a href="#"><i class="fa fa-angle-left"></i></a>
                            </li>
                            <li>
                                <a href="#">1</a>
                            </li>
                            <li class="active">
                                <a href="#">2</a>
                            </li>
                            <li>
                                <a href="#">3</a>
                            </li>
                            <li>
                                <a href="#">4</a>
                            </li>
                            <li>
                                <a href="#">5</a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-angle-right"></i></a>
                            </li>
                        </ul>

                        <div class="m-b-5"></div>

                        <h5 class="m-b-5"><b>Sizing</b></h5>
                        <p class="text-muted font-13">
                            Add <code>
                                .pagination-lg</code>
                            or <code>
                                .pagination-sm</code>
                            for additional sizes.
                        </p>
                        <ul class="pagination pagination-lg m-b-0">
                            <li class="disabled">
                                <a href="#"><i class="fa fa-angle-left"></i></a>
                            </li>
                            <li>
                                <a href="#">1</a>
                            </li>
                            <li class="active">
                                <a href="#">2</a>
                            </li>
                            <li>
                                <a href="#">3</a>
                            </li>
                            <li>
                                <a href="#">4</a>
                            </li>
                            <li>
                                <a href="#">5</a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-angle-right"></i></a>
                            </li>
                        </ul>

                    </div>
                </div>
                <!-- end col -->

                <!-- Pagers -->
                <div class="col-md-6">
                    <h4 class="m-t-0 header-title"><b>Pagers</b></h4>
                    <p class="text-muted m-b-30 font-13">
                        Quick previous and next links for simple pagination implementations with light markup and styles.
                    </p>

                    <div>
                        <h5 class="m-b-5"><b>Default</b></h5>
                        <p class="text-muted font-13">
                            By default, the pager centers links.
                        </p>
                        <ul class="pager">
                            <li>
                                <a href="#"><i class="fa fa-angle-left"></i> Previous</a>
                            </li>
                            <li>
                                <a href="#">Next <i class="fa fa-angle-right"></i></a>
                            </li>
                        </ul>

                        <div class="clearfix m-b-20"></div>

                        <h5 class="m-b-5"><b>Aligned Links</b></h5>
                        <p class="text-muted font-13">
                            Alternatively, you can align each link to the sides:
                        </p>
                        <ul class="pager">
                            <li class="previous">
                                <a href="#">← Older</a>
                            </li>
                            <li class="next">
                                <a href="#">Newer →</a>
                            </li>
                        </ul>

                        <div class="clearfix m-b-20"></div>

                        <h5 class="m-b-5">Optional Disabled State</h5>
                        <p class="text-muted font-13">
                            Pager links also use the general <code>
                                .disabled</code>
                            utility class from the pagination.
                        </p>
                        <ul class="pager">
                            <li class="previous disabled">
                                <a href="#">← Older</a>
                            </li>
                            <li class="next">
                                <a href="#">Newer →</a>
                            </li>
                        </ul>

                    </div>
                </div>
                <!-- end col -->


            </div>
        </div>
    </div>
</div>
<!-- End row -->


<!-- List Groups -->
<div class="row">
    <div class="col-md-12">
        <div class="card-box">
            <div class="row">
                <div class="col-md-6">
                    <h4 class="m-t-0 header-title"><b>List Groups(Simple List Group)</b></h4>
                    <p class="text-muted m-b-30 font-13">
                        The most basic list group is simply an unordered list with list items,
                        and the proper classes. Build upon it with the options that follow, or your own CSS as needed.
                    </p>

                    <ul class="list-group">
                        <li class="list-group-item">
                            <span class="badge badge-primary">14</span>
                            Cras justo odio
                        </li>
                        <li class="list-group-item">
                            <span class="badge badge-purple">2</span>
                            Dapibus ac facilisis in
                        </li>
                        <li class="list-group-item">
                            <span class="badge badge-pink">9</span>
                            Morbi leo risus
                        </li>
                        <li class="list-group-item">
                            <span class="badge badge-inverse">7</span>
                            Morbi leo risus
                        </li>
                        <li class="list-group-item">
                            <span class="badge badge-success">1</span>
                            Morbi leo risus
                        </li>
                    </ul>
                </div>
                <!-- end col -->

                <div class="col-md-6">
                    <h4 class="m-t-0 header-title"><b>List Group with Links</b></h4>
                    <p class="text-muted m-b-30 font-13">
                        Linkify list group items by using anchor tags instead of list items (that also means a parent <code>&lt;div&gt;</code>
                        instead of an <code>&lt;ul&gt;</code>). No need for individual parents around each element.
                    </p>

                    <div class="list-group">
                        <a href="#" class="list-group-item active">
                            Cras justo odio
                        </a>
                        <a href="#" class="list-group-item">Dapibus ac facilisis in</a>
                        <a href="#" class="list-group-item">Morbi leo risus</a>
                        <a href="#" class="list-group-item disabled">Porta ac consectetur ac</a>
                        <a href="#" class="list-group-item">Vestibulum at eros</a>
                    </div> <!-- list-group -->
                </div>
                <!-- end col -->

            </div>
            <!-- end row -->
        </div> <!-- end card-box -->
    </div> <!-- end col -->
</div>
<!-- end Row -->



<!-- List Group with Description -->
<div class="row">
    <div class="col-sm-12">
        <div class="card-box">
            <h4 class="m-t-0 header-title"><b>List Group with Description</b></h4>
            <p class="text-muted m-b-30 font-13">
                Add nearly any HTML within, even for linked list groups like the one below.
            </p>

            <div class="list-group m-b-0">
                <a href="#" class="list-group-item active">
                    <h4 class="list-group-item-heading">Domestic confined any but son</h4>
                    <p class="list-group-item-text">Consider speaking me prospect whatever if. Ten nearer rather hunted six parish indeed number. Allowance repulsive sex may contained can set suspected abilities cordially. Do part am he high rest that. So fruit to ready it being views match. </p>
                </a>
                <a href="#" class="list-group-item disabled">
                    <h4 class="list-group-item-heading">Why painful the sixteen how minuter</h4>
                    <p class="list-group-item-text">Started his hearted any civilly. So me by marianne admitted speaking. Men bred fine call ask. Cease one miles truth day above seven. Suspicion sportsmen provision suffering mrs saw engrossed something. Snug soon he on plan in be dine some. </p>
                </a>
                <a href="#" class="list-group-item">
                    <h4 class="list-group-item-heading">Barton waited twenty always repair</h4>
                    <p class="list-group-item-text">Talking chamber as shewing an it minutes. Trees fully of blind do. Exquisite favourite at do extensive listening. Improve up musical welcome he. Gay attended vicinity prepared now diverted. Esteems it ye sending reached as. Longer lively her design settle tastes advice mrs off who. </p>
                </a>
            </div> <!-- list-group -->
        </div>
    </div>
</div>
<!-- End row -->



<?php require 'includes/footer_start.php' ?>

<?php require 'includes/footer_end.php' ?>
