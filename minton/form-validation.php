<?php require 'includes/header_start.php'; ?>

<?php require 'includes/header_end.php'; ?>



<!-- Page-Title -->
<div class="row">
    <div class="col-sm-12">
        <div class="page-title-box">
            <ol class="breadcrumb pull-right">
                <li><a href="#">Minton</a></li>
                <li><a href="#">Forms</a></li>
                <li class="active">Form Validation</li>
            </ol>
            <h4 class="page-title">Form Validation</h4>
        </div>
    </div>
</div>



<div class="row">
    <div class="col-lg-6">
        <div class="card-box">
            <h4 class="m-t-0 header-title"><b>Basic Form</b></h4>
            <p class="text-muted font-13 m-b-30">
                Your awesome text goes here.
            </p>

            <form action="#" data-parsley-validate novalidate>
                <div class="form-group">
                    <label for="userName">User Name*</label>
                    <input type="text" name="nick" parsley-trigger="change" required placeholder="Enter user name" class="form-control" id="userName">
                </div>
                <div class="form-group">
                    <label for="emailAddress">Email address*</label>
                    <input type="email" name="email" parsley-trigger="change" required placeholder="Enter email" class="form-control" id="emailAddress">
                </div>
                <div class="form-group">
                    <label for="pass1">Password*</label>
                    <input id="pass1" type="password" placeholder="Password" required class="form-control">
                </div>
                <div class="form-group">
                    <label for="passWord2">Confirm Password *</label>
                    <input data-parsley-equalto="#pass1" type="password" required placeholder="Password" class="form-control" id="passWord2">
                </div>
                <div class="form-group">
                    <div class="checkbox">
                        <input id="remember-1" type="checkbox">
                        <label for="remember-1"> Remember me </label>
                    </div>
                </div>

                <div class="form-group text-right m-b-0">
                    <button class="btn btn-primary waves-effect waves-light" type="submit">
                        Submit
                    </button>
                    <button type="reset" class="btn btn-default waves-effect waves-light m-l-5">
                        Cancel
                    </button>
                </div>

            </form>
        </div>
    </div>

    <div class="col-lg-6">
        <div class="card-box">
            <h4 class="m-t-0 header-title"><b>Horizontal Form</b></h4>
            <p class="text-muted font-13 m-b-30">
                Your awesome text goes here.
            </p>

            <form class="form-horizontal" role="form"  data-parsley-validate novalidate>
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-4 control-label">Email*</label>
                    <div class="col-sm-7">
                        <input type="email" required parsley-type="email" class="form-control" id="inputEmail3" placeholder="Email">
                    </div>
                </div>
                <div class="form-group">
                    <label for="hori-pass1" class="col-sm-4 control-label">Password*</label>
                    <div class="col-sm-7">
                        <input id="hori-pass1" type="password" placeholder="Password" required class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <label for="hori-pass2"class="col-sm-4 control-label">Confirm Password *</label>
                    <div class="col-sm-7">
                        <input data-parsley-equalto="#hori-pass1" type="password" required placeholder="Password" class="form-control" id="hori-pass2">
                    </div>
                </div>

                <div class="form-group">
                    <label for="webSite" class="col-sm-4 control-label">Web Site*</label>
                    <div class="col-sm-7">
                        <input type="url" required parsley-type="url" class="form-control" id="webSite" placeholder="URL">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-offset-4 col-sm-8">
                        <div class="checkbox">
                            <input id="remember-2" type="checkbox">
                            <label for="remember-2"> Remember me </label>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-offset-4 col-sm-8">
                        <button type="submit" class="btn btn-primary waves-effect waves-light">
                            Registrer
                        </button>
                        <button type="reset" class="btn btn-default waves-effect waves-light m-l-5">
                            Cancel
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>




<div class="row">
    <div class="col-sm-12">
        <div class="card-box">
            <h4 class="m-t-0 m-b-30 header-title"><b>Fields validation</b></h4>
            <div class="row">
                <div class="col-lg-6">
                    <h5><b>Validation type</b></h5>
                    <p class="text-muted font-13 m-b-30">
                        Your awesome text goes here.
                    </p>

                    <form class="form-horizontal group-border-dashed" action="#">
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Required</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" required placeholder="Type something" />
                            </div>
                        </div>


                        <div class="form-group">
                            <label class="col-sm-3 control-label">Equal To</label>
                            <div class="col-sm-3">
                                <input type="password" id="pass2" class="form-control" required placeholder="Password" />
                            </div>
                            <div class="col-sm-3">
                                <input type="password" class="form-control" required data-parsley-equalto="#pass2" placeholder="Re-Type Password" />
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-3 control-label">E-Mail</label>
                            <div class="col-sm-6">
                                <input type="email" class="form-control" required parsley-type="email" placeholder="Enter a valid e-mail" />
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">URL</label>
                            <div class="col-sm-6">
                                <input parsley-type="url" type="url" class="form-control" required placeholder="URL" />
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Digits</label>
                            <div class="col-sm-6">
                                <input data-parsley-type="digits" type="text" class="form-control" required placeholder="Enter only digits" />
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Number</label>
                            <div class="col-sm-6">
                                <input data-parsley-type="number" type="text" class="form-control" required placeholder="Enter only numbers" />
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Alphanumeric</label>
                            <div class="col-sm-6">
                                <input data-parsley-type="alphanum" type="text" class="form-control" required placeholder="Enter alphanumeric value" />
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Textarea</label>
                            <div class="col-sm-6">
                                <textarea required class="form-control"></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-9 m-t-15">
                                <button type="submit" class="btn btn-primary waves-effect waves-light">
                                    Submit
                                </button>
                                <button type="reset" class="btn btn-default waves-effect m-l-5">
                                    Cancel
                                </button>
                            </div>
                        </div>
                    </form>
                </div>

                <div class="col-lg-6">
                    <h5><b>Range validation</b></h5>
                    <p class="text-muted font-13 m-b-30">
                        Your awesome text goes here.
                    </p>

                    <form class="form-horizontal group-border-dashed" action="#">

                        <div class="form-group">
                            <label class="col-sm-3 control-label">Min Length</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" required data-parsley-minlength="6" placeholder="Min 6 chars." />
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Max Length</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" required data-parsley-maxlength="6" placeholder="Max 6 chars." />
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Range Length</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" required data-parsley-length="[5,10]" placeholder="Text between 5 - 10 chars length" />
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Min Value</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" required data-parsley-min="6" placeholder="Min value is 6" />
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Max Value</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" required data-parsley-max="6" placeholder="Max value is 6" />
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Range Value</label>
                            <div class="col-sm-6">
                                <input class="form-control" required type="text range" min="6" max="100" placeholder="Number between 6 - 100" />
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Regular Exp</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" required data-parsley-pattern="#[A-Fa-f0-9]{6}" placeholder="Hex. Color" />
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-3 control-label">Min check</label>
                            <div class="col-sm-6">
                                <div class="checkbox checkbox-pink">
                                    <input id="checkbox1" type="checkbox" data-parsley-multiple="groups" data-parsley-mincheck="2">
                                    <label for="checkbox1"> And this </label>
                                </div>
                                <div class="checkbox checkbox-pink">
                                    <input id="checkbox2" type="checkbox" data-parsley-multiple="groups" data-parsley-mincheck="2">
                                    <label for="checkbox2"> Can't check this </label>
                                </div>
                                <div class="checkbox checkbox-pink">
                                    <input id="checkbox3" type="checkbox" data-parsley-multiple="groups" data-parsley-mincheck="2" required>
                                    <label for="checkbox3"> This too </label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Max check</label>
                            <div class="col-sm-6">
                                <div class="checkbox checkbox-pink">
                                    <input id="checkbox4" type="checkbox" data-parsley-multiple="group1">
                                    <label for="checkbox4"> And this </label>
                                </div>
                                <div class="checkbox checkbox-pink">
                                    <input id="checkbox5" type="checkbox" data-parsley-multiple="group1">
                                    <label for="checkbox5"> Can't check this </label>
                                </div>
                                <div class="checkbox checkbox-pink">
                                    <input id="checkbox6" type="checkbox" data-parsley-multiple="group1" data-parsley-maxcheck="1">
                                    <label for="checkbox6"> This too </label>
                                </div>

                            </div>
                        </div>

                        <div class="form-group m-b-0">
                            <div class="col-sm-offset-3 col-sm-9 m-t-15">
                                <button type="submit" class="btn btn-primary waves-effect waves-light">
                                    Submit
                                </button>
                                <button type="reset" class="btn btn-default waves-effect m-l-5">
                                    Cancel
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>





<?php require 'includes/footer_start.php' ?>
<!-- Parsleyjs -->
<script type="text/javascript" src="../plugins/parsleyjs/dist/parsley.min.js"></script>

<script type="text/javascript">
    $(document).ready(function() {
        $('form').parsley();
    });
</script>

<?php require 'includes/footer_end.php' ?>
