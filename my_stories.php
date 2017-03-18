<?php
include "header.php";
$_SESSION['active_menu'] = null;
include("navbar.php");
?>

<div class="container">

    <div class="row">

        <div class="col-xs-12 col-sm-12 col-md-12" style="padding-top: 20px; //background-color: #ffffff; //border: 1px solid #cccccc; margin-bottom: 20px;">

            <div class="panel panel-default">
                <div class="panel-body">

                    <div class="col-xs-12 col-sm-12 col-md-8 col-md-offset-2">
                        <div class="form-group">
                            <div class="col-xs-12 col-sm-12 col-md-4">
                                <div class="form-inline">
                                    <div class="form-group" style="margin-top: 20px;">
                                        <a href="profile.php"><img src="assets/images/icons/me.jpg" style="width: 50px; heigth: 50px;" class="img-circle" alt=""></a>
                                    </div>
                                    <div class="form-group">
                            <span for="" style="margin-left: 10px;" class="font-color-green">Compiler Exe<br>
                                <span style="margin-left: 10px; font-size: 12px !important;" class="font-color-gray">2017/01/02 21:30</span>
                            </span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12" style="margin-top: 20px; padding-bottom: 10px;">
                                <div class="form-group">
                                    <a href="read_story_1.php"><img src="assets/images/article_1.jpg" alt="" class="img-responsive"></a>
                                </div>
                                <div class="form-group">
                                    <a href="read_story_1.php"><h3 style="font-weight: bold;">How to make your feeling happy!</h3></a>
                                </div>
                                <div class="form-group">
                                    <span style="font-size: 18px;">Every people find some ways to become a happier person. Some people choose to travel, Some people choose to eating! And here is the way I found :)</span>
                                    <a href="read_story_1.php" style="margin-left: 10px;"><span class="font-color-gray"> Read more</span></a>
                                </div>
                                <div class="form-group">
                                    <button type="button" class="btn btn-info btn-remove-hover" style="border-radius: 20px; color: dodgerblue"><i class="fa fa-thumbs-o-up"></i> <span style="color: dodgerblue">20,000</span></button>

                                    <i class="fa fa-eye" style="margin-left: 10px;"></i>
                                    <span style="color: #a6a6a6; //margin-left: 10px;">23,000</span>

                                    <i class="fa fa-comment-o" style="margin-left: 10px;"></i>
                                    <span style="color: #a6a6a6; //margin-left: 10px;">15,000</span>

                                    <a href="#"><span class="font-color-gray pull-right"><i class="fa fa-bookmark font-color-green"></i></span></a>
                                </div>
                                <div class="form-group text-right">
                                    <button type="button" class="btn btn-bg-blue" style="width: 130px;"><i class="fa fa-pencil"></i> Edit</button>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <div class="panel panel-default">
                <div class="panel-body">

                    <div class="col-xs-12 col-sm-12 col-md-8 col-md-offset-2">
                        <div class="form-group">
                            <div class="col-xs-12 col-sm-12 col-md-4">
                                <div class="form-inline">
                                    <div class="form-group" style="margin-top: 20px;">
                                        <a href="profile.php"><img src="assets/images/icons/me.jpg" style="width: 50px; heigth: 50px;" class="img-circle" alt=""></a>
                                    </div>
                                    <div class="form-group">
                            <span for="" style="margin-left: 10px;" class="font-color-green">Compiler Exe<br>
                                <span style="margin-left: 10px; font-size: 12px !important;" class="font-color-gray">2017/02/02 21:30</span>
                            </span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12" style="margin-top: 20px; padding-bottom: 10px;">
                                <div class="form-group">
                                    <a href="read_story_2.php"><img src="assets/images/article_2.JPG" alt="" class="img-responsive"></a>
                                </div>
                                <div class="form-group">
                                    <a href="read_story_2.php"><h3 style="font-weight: bold;">3 Tips you need to know before travel!</h3></a>
                                </div>
                                <div class="form-group">
                                    <span style="font-size: 18px;">If this is first trip to travelling I think this is the tips you should do or maybe bring it before your trip</span>
                                    <a href="read_story_2.php" style="margin-left: 10px;"><span class="font-color-gray"> Read more</span></a>
                                </div>
                                <div class="form-group">
                                    <button type="button" class="btn btn-info btn-remove-hover" style="border-radius: 20px; color: dodgerblue"><i class="fa fa-thumbs-o-up"></i> <span style="color: dodgerblue">15,000</span></button>

                                    <i class="fa fa-eye" style="margin-left: 10px;"></i>
                                    <span style="color: #a6a6a6; //margin-left: 10px;">12,000</span>

                                    <i class="fa fa-comment-o" style="margin-left: 10px;"></i>
                                    <span style="color: #a6a6a6; //margin-left: 10px;">5,000</span>

                                    <a href="#"><span class="font-color-gray pull-right"><i class="fa fa-bookmark font-color-green"></i></span></a>
                                </div>
                                <div class="form-group text-right">
                                    <button type="button" class="btn btn-bg-blue" style="width: 130px;"><i class="fa fa-pencil"></i> Edit</button>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>

    </div>

</div>

<?php include "footer.php"; ?>
