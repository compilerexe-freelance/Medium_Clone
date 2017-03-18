<nav class="navbar navbar-default" style="border-radius: 0px; margin-bottom: 0px;">
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

                <?php
                    if ($_SESSION['active_menu'] == 'Latest picks') {
                        echo "<li class='active'><a href='#'>Latest picks</a></li>";
                    } else {
                        echo "<li><a href='index.php'>Latest picks</a></li>";
                    }

                    if ($_SESSION['active_menu'] == 'Following') {
                        echo "<li class='active'><a href='#'>Following</a></li>";
                    } else {
                        echo "<li><a href='following.php'>Following</a></li>";
                    }

                    if ($_SESSION['active_menu'] == 'Top stories') {
                        echo "<li class='active'><a href='top_stories.php'>Top stories</a></li>";
                    } else {
                        echo "<li><a href='top_stories.php'>Top stories</a></li>";
                    }

                    if ($_SESSION['active_menu'] == 'Bookmarks') {
                        echo "<li class='active'><a href='#'>Bookmarks</a></li>";
                    } else {
                        echo "<li><a href='bookmarks.php'>Bookmarks</a></li>";
                    }

                ?>

                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">Contact us
                        <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Email</a></li>
                        <li><a href="#">Facebook</a></li>
                        <li><a href="#">Twitter</a></li>
                        <li><a href="#">Instagram</a></li>
                    </ul>
                </li>

<!--                <li><a href="#">Latest picks</a></li>-->
<!--                <li><a href="#">Following</a></li>-->
<!--                <li><a href="#">Top stories</a></li>-->
<!--                <li><a href="#">Bookmarks</a></li>-->
<!--                <li><a href="#">Knowledge</a></li>-->
            </ul>

            <ul class="nav navbar-nav navbar-right">
                <form class="navbar-form navbar-left" action="#" method="post">

                    <div class="form-group">
                        <i class="fa fa-search fa-lg font-color-gray" style="margin-left: 10px; margin-bottom: 10px;"></i>
                        <input type="text" class="form-control" placeholder="Tag, Stories, People" style="border-radius: 20px;">
                    </div>
<!--                    <div class="form-group" style="//padding-left: 10px !important; //padding-right: 10px !important;">-->
<!--                        <button type="button" class="btn btn-info btn-remove-hover" style="border-radius: 20px; width: 100%; color: dodgerblue">Write a Story</button>-->
<!--                    </div>-->
                    <div class="form-group" style="//padding-left: 10px !important; //padding-right: 10px !important;">
                        <button type="button" class="btn btn-success btn-remove-hover" id="btn-sign-in" style="border-radius: 20px; width: 100%; color: #03B876">Sign In / Sign Up</button>
                    </div>

                </form>

            </ul>
        </div>
    </div>
</nav>

<div id="Modal-Sign-In" class="modal fade" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">

            <div class="modal-body text-center">
                <div class="form-group">
                    <span style="font-size: 16px;" class="font-color-gray"><b>Sign in or create an account</b></span>
                </div>
                <div class="form-group">
                    <button type="button" class="btn btn-primary" style="background-color: #0d71bb !important; font-size: 18px;"><i class="fa fa-facebook-official"></i> Sign in with Facebook</button>
                </div>
                <div class="form-group">
                    <a href="#" id="link-sign-in-email" style="text-decoration: none;"><span style="font-size: 16px;" class="font-color-green">Sign in or Sign up with email</span></a>
                </div>
            </div>

        </div>
    </div>
</div>

<div id="Modal-Sign-In-Email" class="modal fade" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">

            <div class="modal-body text-center" style="padding-bottom: 60px;">

                <form action="#" method="post">
                    <div class="form-group">
                        <input type="text" class="form-control input-lg border-none" style="font-size: 20px;" placeholder="Email" required>
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control input-lg border-none" style="font-size: 20px;" placeholder="Password" required>
                    </div>
                    <div class="form-group text-right">
                        <div class="checkbox">
                            <label class="font-color-gray">
                                <input type="checkbox"> Remember
                            </label>
                        </div>
                    </div>
                    <div class="form-group" style="margin-top: 20px;">
                        <button type="button" id="btn-sign-up-email" class="btn btn-success btn-remove-shadow font-color-green pull-left" style="font-size: 18px; width: 150px;">Sign up</button>
                        <button type="submit" class="btn btn-success btn-remove-hover btn-bg-green pull-right" style="font-size: 18px; width: 150px;">Login</button>
                    </div>
                </form>

            </div>

        </div>
    </div>
</div>

<div id="Modal-Sign-Up-Email" class="modal fade" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">

            <div class="modal-body text-center" style="//padding-bottom: 60px;">

                <form action="#" method="post">
                    <div class="form-group text-left">
                        <span style="font-size: 28px;">Sign up</span>
                    </div>

                    <div class="form-group">
                        <input type="text" class="form-control input-lg border-none" style="font-size: 20px;" placeholder="Username (8 characters minimum)" minlength="8" required>
                    </div>

                    <div class="form-group">
                        <input type="email" class="form-control input-lg border-none" style="font-size: 20px;" placeholder="Email" required>
                    </div>

                    <div class="form-group">
                        <input type="password" class="form-control input-lg border-none" style="font-size: 20px;" placeholder="Password (8 characters minimum)" minlength="8" required>
                    </div>

                    <div class="form-group">
                        <input type="password" class="form-control input-lg border-none" style="font-size: 20px;" placeholder="Re-enter Password" minlength="4" required>
                    </div>

                    <div class="form-group text-right" style="margin-top: 30px;">
                        <button type="submit" class="btn btn-success btn-remove-hover btn-bg-green text-right" style="font-size: 18px; width: 150px;">Create Account</button>
                    </div>
                </form>

            </div>

        </div>
    </div>
</div>

<script>
    $(document).ready(function() {

       $('#btn-sign-in').on('click', function() {
           $('#Modal-Sign-In').modal();
       });

       $('#link-sign-in-email').on('click', function() {
           $('#Modal-Sign-In').modal('hide');
           $('#Modal-Sign-In-Email').modal();
       });

       $('#btn-sign-up-email').on('click', function() {
           $('#Modal-Sign-In-Email').modal('hide');
           $('#Modal-Sign-Up-Email').modal();
       });

    });
</script>