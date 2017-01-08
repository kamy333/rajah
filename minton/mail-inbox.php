<?php require 'includes/header_start.php'; ?>

<?php require 'includes/header_end.php'; ?>



<!-- Page-Title -->
<div class="row">
    <div class="col-sm-12">
        <div class="page-title-box">
            <ol class="breadcrumb pull-right">
                <li><a href="#">Minton</a></li>
                <li><a href="#">Mail</a></li>
                <li class="active">Inbox</li>
            </ol>
            <h4 class="page-title">Inbox</h4>
        </div>
    </div>
</div>


<div class="row">

    <!-- Left sidebar -->
    <div class="col-lg-3 col-md-4">

        <div class="m-t-20">
            <a href="mail-compose.php" class="btn btn-danger btn-custom btn-block waves-effect waves-light">Compose</a>

            <div class="list-group mail-list  m-t-20">
                <a href="#" class="list-group-item b-0 active"><i class="fa fa-download m-r-10"></i>Inbox <b>(8)</b></a>
                <a href="#" class="list-group-item b-0"><i class="fa fa-star-o m-r-10"></i>Starred</a>
                <a href="#" class="list-group-item b-0"><i class="fa fa-file-text-o m-r-10"></i>Draft <b>(20)</b></a>
                <a href="#" class="list-group-item b-0"><i class="fa fa-paper-plane-o m-r-10"></i>Sent Mail</a>
                <a href="#" class="list-group-item b-0"><i class="fa fa-trash-o m-r-10"></i>Trash <b>(354)</b></a>
            </div>


            <h3 class="panel-title m-t-40">Labels</h3>

            <div class="list-group b-0 mail-list">
                <a href="#" class="list-group-item b-0"><span class="fa fa-circle text-info m-r-10"></span>Web App</a>
                <a href="#" class="list-group-item b-0"><span class="fa fa-circle text-warning m-r-10"></span>Project 1</a>
                <a href="#" class="list-group-item b-0"><span class="fa fa-circle text-purple m-r-10"></span>Project 2</a>
                <a href="#" class="list-group-item b-0"><span class="fa fa-circle text-pink m-r-10"></span>Friends</a>
                <a href="#" class="list-group-item b-0"><span class="fa fa-circle text-success m-r-10"></span>Family</a>
            </div>

        </div>

    </div>
    <!-- End Left sidebar -->

    <!-- Right Sidebar -->
    <div class="col-lg-9 col-md-8">
        <div class="row">
            <div class="col-lg-12">
                <div class="btn-toolbar m-t-20" role="toolbar">
                    <div class="btn-group">
                        <button type="button" class="btn btn-primary waves-effect waves-light "><i class="fa fa-inbox"></i></button>
                        <button type="button" class="btn btn-primary waves-effect waves-light "><i class="fa fa-exclamation-circle"></i></button>
                        <button type="button" class="btn btn-primary waves-effect waves-light "><i class="fa fa-trash-o"></i></button>
                    </div>
                    <div class="btn-group">
                        <button type="button" class="btn btn-primary dropdown-toggle waves-effect waves-light" data-toggle="dropdown" aria-expanded="false">
                            <i class="fa fa-folder"></i>
                            <b class="caret"></b>
                        </button>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="#">Action</a></li>
                            <li><a href="#">Another action</a></li>
                            <li><a href="#">Something else here</a></li>
                            <li class="divider"></li>
                            <li><a href="#">Separated link</a></li>
                        </ul>
                    </div>
                    <div class="btn-group">
                        <button type="button" class="btn btn-primary waves-effect waves-light dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                            <i class="fa fa-tag"></i>
                            <b class="caret"></b>
                        </button>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="#">Action</a></li>
                            <li><a href="#">Another action</a></li>
                            <li><a href="#">Something else here</a></li>
                            <li class="divider"></li>
                            <li><a href="#">Separated link</a></li>
                        </ul>
                    </div>

                    <div class="btn-group">
                        <button type="button" class="btn btn-primary waves-effect waves-light dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                            More
                            <span class="caret"></span>
                        </button>
                        <ul class="dropdown-menu">
                            <li><a href="#">Dropdown link</a></li>
                            <li><a href="#">Dropdown link</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div> <!-- End row -->

        <div class="panel panel-default m-t-20">
            <div class="panel-body p-0">
                <div class="table-responsive">
                    <table class="table table-hover mails m-0">
                        <tbody>
                        <tr class="unread">
                            <td class="mail-select">
                                <div class="checkbox checkbox-primary m-r-15">
                                    <input id="checkbox1" type="checkbox">
                                    <label for="checkbox1"></label>
                                </div>

                                <i class="fa fa-star m-r-15 text-muted"></i>

                                <i class="fa fa-circle m-l-5 text-warning"></i>
                            </td>

                            <td>
                                <a href="mail-read.php" class="email-name">Google Inc</a>
                            </td>

                            <td>
                                <a href="mail-read.php" class="email-msg">Lorem ipsum dolor sit amet, consectetuer adipiscing elit</a>
                            </td>
                            <td style="width: 20px;">
                                <i class="fa fa-paperclip"></i>
                            </td>
                            <td class="text-right">
                                07:23 AM
                            </td>
                        </tr>

                        <tr class="unread">
                            <td class="mail-select">
                                <div class="checkbox checkbox-primary m-r-15">
                                    <input id="checkbox2" type="checkbox">
                                    <label for="checkbox2"></label>
                                </div>

                                <i class="fa fa-star m-r-15 text-muted"></i>

                                <i class="fa fa-circle m-l-5 text-pink"></i>
                            </td>

                            <td>
                                <a href="mail-read.php" class="email-name">John Deo</a>
                            </td>

                            <td>
                                <a href="mail-read.php" class="email-msg">Hi Bro, How are you?</a>
                            </td>
                            <td style="width: 20px;">
                                <i class="fa fa-paperclip"></i>
                            </td>
                            <td class="text-right">
                                07:23 AM
                            </td>
                        </tr>

                        <tr class="unread">
                            <td class="mail-select">
                                <div class="checkbox checkbox-primary m-r-15">
                                    <input id="checkbox3" type="checkbox">
                                    <label for="checkbox3"></label>
                                </div>

                                <i class="fa fa-star text-warning m-r-15"></i>

                                <i class="fa fa-circle m-l-5 text-success"></i>
                            </td>

                            <td>
                                <a href="mail-read.php" class="email-name">Manager</a>
                            </td>

                            <td>
                                <a href="mail-read.php" class="email-msg">Dolor sit amet, consectetuer adipiscing</a>
                            </td>
                            <td style="width: 20px;">
                                <i class="fa fa-paperclip"></i>
                            </td>
                            <td class="text-right">
                                03:00 AM
                            </td>
                        </tr>

                        <tr class="unread">
                            <td class="mail-select">
                                <div class="checkbox checkbox-primary m-r-15">
                                    <input id="checkbox4" type="checkbox">
                                    <label for="checkbox4"></label>
                                </div>

                                <i class="fa fa-star m-r-15 text-muted"></i>

                                <i class="fa fa-circle m-l-5 text-purple"></i>
                            </td>

                            <td>
                                <a href="mail-read.php" class="email-name">Google Inc</a>
                            </td>

                            <td>
                                <a href="mail-read.php" class="email-msg">Lorem ipsum dolor sit amet, consectetuer adipiscing elit</a>
                            </td>
                            <td style="width: 20px;">
                                <i class="fa fa-paperclip"></i>
                            </td>
                            <td class="text-right">
                                01:23 AM
                            </td>
                        </tr>

                        <tr class="unread">
                            <td class="mail-select">
                                <div class="checkbox checkbox-primary m-r-15">
                                    <input id="checkbox5" type="checkbox">
                                    <label for="checkbox5"></label>
                                </div>

                                <i class="fa fa-star m-r-15 text-muted"></i>

                                <i class="fa fa-circle m-l-5 text-info"></i>
                            </td>

                            <td>
                                <a href="mail-read.php" class="email-name">John Deo</a>
                            </td>

                            <td>
                                <a href="mail-read.php" class="email-msg">Hi Bro, How are you?</a>
                            </td>
                            <td style="width: 20px;">
                                <i class="fa fa-paperclip"></i>
                            </td>
                            <td class="text-right">
                                11 Oct
                            </td>
                        </tr>

                        <tr>
                            <td class="mail-select">
                                <div class="checkbox checkbox-primary m-r-15">
                                    <input id="checkbox6" type="checkbox">
                                    <label for="checkbox6"></label>
                                </div>

                                <i class="fa fa-star text-warning m-r-15"></i>

                                <i class="fa fa-circle m-l-5 text-white"></i>
                            </td>

                            <td>
                                <a href="mail-read.php" class="email-name">Manager</a>
                            </td>

                            <td>
                                <a href="mail-read.php" class="email-msg">Dolor sit amet, consectetuer adipiscing</a>
                            </td>
                            <td style="width: 20px;">
                                <i class="fa fa-paperclip"></i>
                            </td>
                            <td class="text-right">
                                11 Oct
                            </td>
                        </tr>

                        <tr>
                            <td class="mail-select">
                                <div class="checkbox checkbox-primary m-r-15">
                                    <input id="checkbox7" type="checkbox">
                                    <label for="checkbox7"></label>
                                </div>

                                <i class="fa fa-star m-r-15 text-muted"></i>

                                <i class="fa fa-circle m-l-5 text-white"></i>
                            </td>

                            <td>
                                <a href="mail-read.php" class="email-name">Google Inc</a>
                            </td>

                            <td>
                                <a href="mail-read.php" class="email-msg">Lorem ipsum dolor sit amet, consectetuer adipiscing elit</a>
                            </td>
                            <td style="width: 20px;">
                                <i class="fa fa-paperclip"></i>
                            </td>
                            <td class="text-right">
                                11 Oct
                            </td>
                        </tr>

                        <tr>
                            <td class="mail-select">
                                <div class="checkbox checkbox-primary m-r-15">
                                    <input id="checkbox8" type="checkbox">
                                    <label for="checkbox8"></label>
                                </div>

                                <i class="fa fa-star m-r-15 text-muted"></i>

                                <i class="fa fa-circle m-l-5 text-white"></i>
                            </td>

                            <td>
                                <a href="mail-read.php" class="email-name">John Deo</a>
                            </td>

                            <td>
                                <a href="mail-read.php" class="email-msg">Hi Bro, How are you?</a>
                            </td>
                            <td style="width: 20px;">
                                <i class="fa fa-paperclip"></i>
                            </td>
                            <td class="text-right">
                                10 Oct
                            </td>
                        </tr>

                        <tr>
                            <td class="mail-select">
                                <div class="checkbox checkbox-primary m-r-15">
                                    <input id="checkbox9" type="checkbox">
                                    <label for="checkbox9"></label>
                                </div>

                                <i class="fa fa-star text-warning m-r-15"></i>

                                <i class="fa fa-circle m-l-5 text-info"></i>
                            </td>

                            <td>
                                <a href="mail-read.php" class="email-name">Manager</a>
                            </td>

                            <td>
                                <a href="mail-read.php" class="email-msg">Dolor sit amet, consectetuer adipiscing</a>
                            </td>
                            <td style="width: 20px;">
                                <i class="fa fa-paperclip"></i>
                            </td>
                            <td class="text-right">
                                10 Oct
                            </td>
                        </tr>

                        <tr>
                            <td class="mail-select">
                                <div class="checkbox checkbox-primary m-r-15">
                                    <input id="checkbox10" type="checkbox">
                                    <label for="checkbox10"></label>
                                </div>

                                <i class="fa fa-star m-r-15 text-muted"></i>

                                <i class="fa fa-circle m-l-5 text-warning"></i>
                            </td>

                            <td>
                                <a href="mail-read.php" class="email-name">Google Inc</a>
                            </td>

                            <td>
                                <a href="mail-read.php" class="email-msg">Lorem ipsum dolor sit amet, consectetuer adipiscing elit</a>
                            </td>
                            <td style="width: 20px;">
                                <i class="fa fa-paperclip"></i>
                            </td>
                            <td class="text-right">
                                10 Oct
                            </td>
                        </tr>

                        <tr>
                            <td class="mail-select">
                                <div class="checkbox checkbox-primary m-r-15">
                                    <input id="checkbox11" type="checkbox">
                                    <label for="checkbox11"></label>
                                </div>

                                <i class="fa fa-star m-r-15 text-muted"></i>

                                <i class="fa fa-circle m-l-5 text-white"></i>
                            </td>

                            <td>
                                <a href="mail-read.php" class="email-name">John Deo</a>
                            </td>

                            <td>
                                <a href="mail-read.php" class="email-msg">Hi Bro, How are you?</a>
                            </td>
                            <td style="width: 20px;">
                                <i class="fa fa-paperclip"></i>
                            </td>
                            <td class="text-right">
                                9 Oct
                            </td>
                        </tr>

                        <tr>
                            <td class="mail-select">
                                <div class="checkbox checkbox-primary m-r-15">
                                    <input id="checkbox12" type="checkbox">
                                    <label for="checkbox12"></label>
                                </div>

                                <i class="fa fa-star text-warning m-r-15"></i>

                                <i class="fa fa-circle m-l-5 text-purple"></i>
                            </td>

                            <td>
                                <a href="mail-read.php" class="email-name">Manager</a>
                            </td>

                            <td>
                                <a href="mail-read.php" class="email-msg">Dolor sit amet, consectetuer adipiscing</a>
                            </td>
                            <td style="width: 20px;">
                                <i class="fa fa-paperclip"></i>
                            </td>
                            <td class="text-right">
                                9 Oct
                            </td>
                        </tr>

                        <tr>
                            <td class="mail-select">
                                <div class="checkbox checkbox-primary m-r-15">
                                    <input id="checkbox13" type="checkbox">
                                    <label for="checkbox13"></label>
                                </div>

                                <i class="fa fa-star m-r-15 text-muted"></i>

                                <i class="fa fa-circle m-l-5 text-pink"></i>
                            </td>

                            <td>
                                <a href="mail-read.php" class="email-name">Google Inc</a>
                            </td>

                            <td>
                                <a href="mail-read.php" class="email-msg">Lorem ipsum dolor sit amet, consectetuer adipiscing elit</a>
                            </td>
                            <td style="width: 20px;">
                                <i class="fa fa-paperclip"></i>
                            </td>
                            <td class="text-right">
                                9 Oct
                            </td>
                        </tr>

                        <tr>
                            <td class="mail-select">
                                <div class="checkbox checkbox-primary m-r-15">
                                    <input id="checkbox14" type="checkbox">
                                    <label for="checkbox14"></label>
                                </div>

                                <i class="fa fa-star m-r-15 text-muted"></i>

                                <i class="fa fa-circle m-l-5 text-info"></i>
                            </td>

                            <td>
                                <a href="mail-read.php" class="email-name">John Deo</a>
                            </td>

                            <td>
                                <a href="mail-read.php" class="email-msg">Hi Bro, How are you?</a>
                            </td>
                            <td style="width: 20px;">
                                <i class="fa fa-paperclip"></i>
                            </td>
                            <td class="text-right">
                                9 Oct
                            </td>
                        </tr>

                        <tr>
                            <td class="mail-select">
                                <div class="checkbox checkbox-primary m-r-15">
                                    <input id="checkbox15" type="checkbox">
                                    <label for="checkbox15"></label>
                                </div>

                                <i class="fa fa-star text-warning m-r-15"></i>

                                <i class="fa fa-circle m-l-5 text-white"></i>
                            </td>

                            <td>
                                <a href="mail-read.php" class="email-name">Manager</a>
                            </td>

                            <td>
                                <a href="mail-read.php" class="email-msg">Dolor sit amet, consectetuer adipiscing</a>
                            </td>
                            <td style="width: 20px;">
                                <i class="fa fa-paperclip"></i>
                            </td>
                            <td class="text-right">
                                7 Oct
                            </td>
                        </tr>

                        <tr>
                            <td class="mail-select">
                                <div class="checkbox checkbox-primary m-r-15">
                                    <input id="checkbox16" type="checkbox">
                                    <label for="checkbox16"></label>
                                </div>

                                <i class="fa fa-star m-r-15 text-muted"></i>

                                <i class="fa fa-circle m-l-5 text-white"></i>
                            </td>

                            <td>
                                <a href="mail-read.php" class="email-name">Google Inc</a>
                            </td>

                            <td>
                                <a href="mail-read.php" class="email-msg">Lorem ipsum dolor sit amet, consectetuer adipiscing elit</a>
                            </td>
                            <td style="width: 20px;">
                                <i class="fa fa-paperclip"></i>
                            </td>
                            <td class="text-right">
                                7 Oct
                            </td>
                        </tr>

                        <tr>
                            <td class="mail-select">
                                <div class="checkbox checkbox-primary m-r-15">
                                    <input id="checkbox17" type="checkbox">
                                    <label for="checkbox17"></label>
                                </div>

                                <i class="fa fa-star m-r-15 text-muted"></i>

                                <i class="fa fa-circle m-l-5 text-white"></i>
                            </td>

                            <td>
                                <a href="mail-read.php" class="email-name">John Deo</a>
                            </td>

                            <td>
                                <a href="mail-read.php" class="email-msg">Hi Bro, How are you?</a>
                            </td>
                            <td style="width: 20px;">
                                <i class="fa fa-paperclip"></i>
                            </td>
                            <td class="text-right">
                                7 Oct
                            </td>
                        </tr>

                        <tr>
                            <td class="mail-select">
                                <div class="checkbox checkbox-primary m-r-15">
                                    <input id="checkbox18" type="checkbox">
                                    <label for="checkbox18"></label>
                                </div>

                                <i class="fa fa-star text-warning m-r-15"></i>

                                <i class="fa fa-circle m-l-5 text-info"></i>
                            </td>

                            <td>
                                <a href="mail-read.php" class="email-name">Manager</a>
                            </td>

                            <td>
                                <a href="mail-read.php" class="email-msg">Dolor sit amet, consectetuer adipiscing</a>
                            </td>
                            <td style="width: 20px;">
                                <i class="fa fa-paperclip"></i>
                            </td>
                            <td class="text-right">
                                7 Oct
                            </td>
                        </tr>

                        <tr>
                            <td class="mail-select">
                                <div class="checkbox checkbox-primary m-r-15">
                                    <input id="checkbox19" type="checkbox">
                                    <label for="checkbox19"></label>
                                </div>

                                <i class="fa fa-star m-r-15 text-muted"></i>

                                <i class="fa fa-circle m-l-5 text-pink"></i>
                            </td>

                            <td>
                                <a href="mail-read.php" class="email-name">Google Inc</a>
                            </td>

                            <td>
                                <a href="mail-read.php" class="email-msg">Lorem ipsum dolor sit amet, consectetuer adipiscing elit</a>
                            </td>
                            <td style="width: 20px;">
                                <i class="fa fa-paperclip"></i>
                            </td>
                            <td class="text-right">
                                7 Oct
                            </td>
                        </tr>

                        <tr>
                            <td class="mail-select">
                                <div class="checkbox checkbox-primary m-r-15">
                                    <input id="checkbox20" type="checkbox">
                                    <label for="checkbox20"></label>
                                </div>

                                <i class="fa fa-star m-r-15 text-muted"></i>

                                <i class="fa fa-circle m-l-5 text-success"></i>
                            </td>

                            <td>
                                <a href="mail-read.php" class="email-name">John Deo</a>
                            </td>

                            <td>
                                <a href="mail-read.php" class="email-msg">Hi Bro, How are you?</a>
                            </td>
                            <td style="width: 20px;">
                                <i class="fa fa-paperclip"></i>
                            </td>
                            <td class="text-right">
                                7 Oct
                            </td>
                        </tr>



                        </tbody>
                    </table>
                </div>

            </div> <!-- panel body -->
        </div> <!-- panel -->

        <div class="row">
            <div class="col-xs-7">
                Showing 1 - 20 of 289
            </div>
            <div class="col-xs-5">
                <div class="btn-group pull-right">
                    <button type="button" class="btn btn-default waves-effect"><i class="fa fa-chevron-left"></i></button>
                    <button type="button" class="btn btn-default waves-effect"><i class="fa fa-chevron-right"></i></button>
                </div>
            </div>
        </div>



    </div> <!-- end Col-9 -->

</div><!-- End row -->





<?php require 'includes/footer_start.php' ?>

<?php require 'includes/footer_end.php' ?>
