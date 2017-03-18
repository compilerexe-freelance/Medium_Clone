<?php
include "header.php";
$_SESSION['active_menu'] = 'Latest picks';
include("navbar.php");
?>

<div class="container">

    <div class="row">

        <div class="col-xs-12 col-sm-12 col-md-7" style="padding-top: 20px; //background-color: #ffffff; //border: 1px solid #cccccc; margin-bottom: 20px;">

            <div class="panel panel-default">
                <div class="panel-body">

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
                        </div>
                    </div>

                </div>
            </div>

            <div class="panel panel-default">
                <div class="panel-body">

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
                        </div>
                    </div>

                </div>
            </div>

        </div>
        <div class="col-xs-12 col-sm-12 col-md-5" style="padding-top: 20px; margin-bottom: 20px; //border: 1px solid red; //background-color: #f2f2f2">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group" style="//margin-top: 20px;">
                    <small><b>FEATURED TAGS</b></small>
                </div>
                <div class="form-group">
                    <a href="tags.php"><button type="button" class="btn btn-default btn-remove-hover btn-tag">Life</button></a>
                    <a href="tags.php"><button type="button" class="btn btn-default btn-remove-hover btn-tag">Travel</button></a>
                    <a href="tags.php"><button type="button" class="btn btn-default btn-remove-hover btn-tag">Education</button></a>
                    <a href="tags.php"><button type="button" class="btn btn-default btn-remove-hover btn-tag">School</button></a>
                    <a href="tags.php"><button type="button" class="btn btn-default btn-remove-hover btn-tag">Computer</button></a>

                    <a href="tags.php"><button type="button" class="btn btn-default btn-remove-hover btn-tag">Windows XP</button></a>
                    <a href="tags.php"><button type="button" class="btn btn-default btn-remove-hover btn-tag">Windows 7</button></a>
                    <a href="tags.php"><button type="button" class="btn btn-default btn-remove-hover btn-tag">Windows 8.1</button></a>
                    <a href="tags.php"><button type="button" class="btn btn-default btn-remove-hover btn-tag">Windows 10</button></a>
                </div>
                <hr style="border-color: #ffffff">
            </div>

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

            <!-- Editor's pick -->
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <small><b>EDITOR'S PICK</b></small>
                </div>

                <div class="form-group">
                    <div class="col-xs-1 col-sm-12 col-md-1 text-center">
                        <div class="text-cycle">
                            <span>1</span>
                        </div>
                    </div>
                    <div class="col-xs-11 col-sm-12 col-md-11">
                        <span style="padding-left: 10px; line-height: 35px;">How to do your job to finish in 1 day</span><br>
                        <span style="padding-left: 10px;" class="font-color-gray">Peter</span>
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
                        <span style="padding-left: 10px; line-height: 35px;">How to make your feeling happy!</span><br>
                        <span style="padding-left: 10px;" class="font-color-gray">Compiler Exe</span>
                        <hr style="border-color: #f2f2f2">
                    </div>
                </div>
            </div>

        </div>



    </div>

</div>

<?php include "footer.php"; ?>
