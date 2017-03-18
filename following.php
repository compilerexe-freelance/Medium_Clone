<?php
include "header.php";
$_SESSION['active_menu'] = 'Following';
include "navbar.php";
?>

<style>
    body {
        background-color: #FAFAFA !important;
    }
</style>

<div class="container">
    <div class="row">

        <!--        <div class="col-xs-12 col-sm-12 col-md-6 col-md-offset-1" style="padding-top: 20px;">-->
        <div class="col-xs-12 col-sm-12 col-md-7" style="padding-top: 20px;">

            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="form-group" style="//border: 1px solid red;">

                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group text-right">
                                <button type="button" class="btn" style="color: #03B876">Unfollow</button>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-4 col-fulid">
                                <div class="form-inline">
                                    <div class="form-group" style="margin-top: 20px;">
                                        <a href="profile.php"><img src="assets/images/icons/user.png" style="width: 50px; heigth: 50px;" class="img-circle" alt=""></a>
                                    </div>
                                    <div class="form-group">
                                    <span for="" style="margin-left: 10px;" class="font-color-green">Peter<br>
                                        <span style="margin-left: 10px; font-size: 12px !important;" class="font-color-gray">2017/01/15 08:30</span>
                                    </span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12 col-fulid" style="margin-top: 20px; padding-bottom: 10px;">
                                <div class="form-group">
                                    <a href="read_story_1.php"><h3 style="font-weight: bold;">How to do your job to finish in 1 day</h3></a>
                                </div>
                                <div class="form-group">
                                    <span style="font-size: 18px;">It's very simple just do not lazy.</span>
                                </div>
                                <div class="form-group">
                                    <button type="button" class="btn btn-info btn-remove-hover" style="border-radius: 20px; color: dodgerblue"><i class="fa fa-thumbs-o-up"></i> <span style="color: dodgerblue">8,800</span></button>

                                    <i class="fa fa-eye" style="margin-left: 10px;"></i>
                                    <span style="color: #a6a6a6; //margin-left: 10px;">10,000</span>

                                    <i class="fa fa-comment-o" style="margin-left: 10px;"></i>
                                    <span style="color: #a6a6a6; //margin-left: 10px;">9,000</span>

                                    <a href="#"><span class="font-color-gray pull-right"><i class="fa fa-bookmark font-color-green"></i></span></a>

                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </div>

        <!--        <div class="col-xs-12 col-sm-12 col-md-4" style="background-color: #FAFAFA; padding-top: 20px;">-->
        <div class="col-xs-12 col-sm-12 col-md-5" style="background-color: #FAFAFA; padding-top: 20px;">

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <small><b>TOP STORIES</b></small>
                </div>

                <div class="form-group">
                    <div class="col-xs-1 col-sm-12 col-md-1 text-center">
                        <div class="text-cycle">
                            <span>1</span>
                        </div>
                    </div>
                    <div class="col-xs-11 col-sm-12 col-md-11">
                        <span style="padding-left: 10px; line-height: 35px;">How to make your feeling happy!</span><br>
                        <span style="padding-left: 10px;" class="font-color-gray">Compiler Exe</span>
                        <hr style="border-color: #f2f2f2">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-xs-1 col-sm-12 col-md-1 text-center">
                        <div class="text-cycle">
                            <span>2</span>
                        </div>
                    </div>
                    <div class="col-xs-11 col-sm-12 col-md-11">
                        <span style="padding-left: 10px; line-height: 35px;">3 Tips you need to know before travel!</span><br>
                        <span style="padding-left: 10px;" class="font-color-gray">Compiler Exe</span>
                        <hr style="border-color: #f2f2f2">
                    </div>
                </div>
            </div>

        </div>

    </div>
</div>

<?php
include "footer.php";
?>
