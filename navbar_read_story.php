<nav class="navbar navbar-default" style="border-radius: 0px;">
    <div class="container">

        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.php">
<!--                <img src="assets/images/logo.png" class="img-responsive" style="height: 100%;" alt="">-->
                Stories
            </a>
        </div>

        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
            </ul>

            <ul class="nav navbar-nav navbar-right">
                <form class="navbar-form navbar-left" action="#" method="post">

                    <div class="form-group">
                        <i class="fa fa-search fa-lg font-color-gray"></i>
                        <input type="text" class="form-control" placeholder="Tag, Stories, People" style="border-radius: 20px;">
                    </div>

                    <div class="form-group" style="//padding-left: 10px !important; //padding-right: 10px !important;">
                        <a href="write_story.php"><button type="button" class="btn btn-info btn-remove-shadow" style="border-radius: 20px; width: 100%; color: dodgerblue">Write a Story</button></a>
                    </div>

                    <div class="form-group link-gray" style="//padding-left: 10px !important; //padding-right: 10px !important;">
                        <a href="#"
                           data-toggle="popover"
                           data-trigger="focus"
                           data-html="true"
                           title=""
                           data-placement="bottom"
                           data-content="
                            <a href='write_story.php'>New story</a><br>
                            <a href='my_stories.php'>Drafts and stories</a>
                            <hr style='margin-top: 10px !important;; margin-bottom: 10px !important;'>
                            <a href='profile.php' style='font-size: 15px !important;'>Profile</a><br>
                            <a href='setting.php' style='font-size: 15px !important;'>Setting</a><br>
                            <a href='index.php' style='font-size: 15px !important;'>Sign out</a>
                           "
                        >
                            <img src="assets/images/icons/user.png"
                                 style="width: 40px !important; height: 40px !important;"
                                 class="img-circle"
                                 alt="">
                        </a>
                    </div>

                </form>

            </ul>
        </div>
    </div>
</nav>

<script>
    $(document).ready(function(){
        $('[data-toggle="popover"]').popover();
    });
</script>