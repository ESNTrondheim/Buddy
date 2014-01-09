<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="../../docs-assets/ico/favicon.png">
    <link href="//fonts.googleapis.com/css?family=Happy+Monkey:400" rel="stylesheet" type="text/css">
    <title>NTNU Buddy Programme</title>

    <!-- Bootstrap core CSS -->
    <link href="/content/bootstrap/bootstrap.css" rel="stylesheet">
    <link href="/content/Site.css" rel="stylesheet" />

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->

</head>
<body>
    <div id="fb-root"></div>
    <script>
        (function (i, s, o, g, r, a, m) {
            i['GoogleAnalyticsObject'] = r; i[r] = i[r] || function () {
                (i[r].q = i[r].q || []).push(arguments)
            }, i[r].l = 1 * new Date(); a = s.createElement(o),
            m = s.getElementsByTagName(o)[0]; a.async = 1; a.src = g; m.parentNode.insertBefore(a, m)
        })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');

        ga('create', 'UA-47005343-1', 'esn.no');
        ga('send', 'pageview');

    </script>
    <script>
        window.fbAsyncInit = function () {
            // init the FB JS SDK
            FB.init({
                appId: '525921604188632',                        // App ID from the app dashboard
                status: true,                                 // Check Facebook Login status
                xfbml: true                                  // Look for social plugins on the page
            });

            // Additional initialization code such as adding Event Listeners goes here
        };

        // Load the SDK asynchronously
        (function (d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) { return; }
            js = d.createElement(s); js.id = id;
            js.src = "//connect.facebook.net/en_US/all.js";
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));
    </script>
    <div class="navbar navbar-default navbar-absolute-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">Buddy Programme</a>
            </div>
            <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav">
                    <li class="active">
                        <a href="#">Home</a>
                    </li>
                    <li>
                        <a href="#section-signup">Sign up</a>
                    </li>
                    <li>
                        <a href="#contact">Contact</a>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">More info <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="/about.php">What is the buddy programme?</a></li>
                            <li><a href="/how.php">How does it work?</a></li>
                            <li><a href="/tips.php">What can I do with my buddy?</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
            <!--/.navbar-collapse -->
        </div>
    </div>
    <div class="jumbotron cover">
        <div class="container">
            <div class="row">
                <div class="col-sm-offset-4 col-sm-8">
                    <h1>Buddy Programme</h1>
                    <p>Welcome!</p>
                    <p>The buddy system is beeing updated for the spring semester. It should be ready to accept signups sometime early January. Stay tuned on our facebook page</p>
                </div>
                <div class="col-sm-offset-4 col-sm-8 hidden-sm">
                    <a class="btn btn-primary btn-lg" style="background: coral" href="#section-signup">Sign up »</a>
                </div>
            </div>
            <div class="row facebook">
                <div class="col-md-offset-4 col-md-8">
                    <p class="like-info">Like this to get more information about events and happenings from ESN Trondheim</p>
                    <div class="fb-like" data-href="https://www.facebook.com/esntrondheim" data-width="200px" data-layout="standard" data-action="like" data-show-faces="true" data-share="true"></div>
                </div>
            </div>
        </div>

    </div>
    <div class="container">
        <div class="row">
        </div>
    </div>
    <div class="container text-center hidden-xs informal" style="position: relative; top: -125px;">
        <div class="row">
            <div class="col-xs-12" style="text-align: center;">
                Scroll down to learn more
            </div>
            <div class="col-xs-12" style="text-align: center;">
                <a href="#section-signup" class="circle header-scroll"></a>
            </div>
        </div>
    </div>
    <div id="section-signup" class="container">

        <!-- Three columns of text below the carousel -->
        <div class="row sign-up">
            <div class="col-md-6" style="text-align: center;">
                <a href="https://docs.google.com/forms/d/1THtdPc7rReRMV4Xyj9X_0AAWARNy4bAys3lLxFo6Mjc/" role="button">
                    <img alt="Norwegian students" src="/images/norway.png" class="img-responsive">
                    <h2>Norwegian students sign up here</h2>
                </a>
            </div>
            <!-- /.col-lg-4 -->
            <div class="col-md-6" style="text-align: center;">
                <a href="https://docs.google.com/forms/d/14UxpVo1x3AgKL6gbl19Whl6BNk1gpd6CIk0k4Ltk2O4/" role="button">
                    <img alt="Foreign students" src="/images/world.png" class="img-responsive">
                    <h2>Foreign students sign up here</h2>
                </a>
            </div>
            <!-- /.col-lg-4 -->
        </div>
        <!-- /.row -->

        <hr>

        <div class="row">
            <div class="col-md-7">
                <h2>What is the buddy programme? <span class="text-muted">It'll blow your mind.</span></h2>
                <p class="lead">
                    The purpose of the buddy program is to assist international students in Trondheim with integration in the Norwegian student life. 
                        The buddy on his side, get the opportunity to practice a foreign language, get acquainted with different cultures and get involved in the international community in Trondheim.
                </p>
                <p><a class="btn btn-primary" href="#">Learn more »</a></p>
            </div>
            <div class="col-md-5">
                <img class="img-responsive" alt="..." src="/images/olavsgruva_.jpg" />
            </div>
        </div>

        <hr>

        <div class="row">
            <div class="col-md-5">
                <img class="img-responsive" style="" src="/images/esn.jpg" />
            </div>
            <div class="col-md-7">
                <h2>How does it work? <span class="text-muted">See for yourself.</span></h2>
                <p class="lead">It's really simple. You just sign up, and when there are enough students signed you will be matched with a buddy.</p>
                <p><a class="btn btn-primary" href="#">Learn more »</a></p>
            </div>
        </div>

        <hr>

        <div class="row" style="padding-bottom: 30px;">
            <div class="col-md-7">
                <h2>What can I do with my buddy? <span class="text-muted">It's up to you.</span></h2>
                <p class="lead">
                    Don't be afraid: Our demands of you as a buddy are not too overwhelming. The threshold to become a buddy are, and should be, minimal; As long as you want to make some international friends and contribute that they get a good start and a great semester in Trondheim, you are qualified! 
                    There are no requirements about how often and how much time you should spend with your buddy, however, it would be nice if you could meet at least once a month, so you could get to know each other. 
                    What you do, is up to you and your buddy, and your desires. Some prefer to meet for lunch, socialize in a café and go to a party now and then, while others are quite adventurous and go for hiking in Bymarka or a weekend at a NTNUI 'koie'. 
                </p>
                <p><a class="btn btn-primary" href="#">Learn more »</a></p>
            </div>
            <div class="col-md-5">
                <img class="img-responsive" src="/images/samf.jpg" />
            </div>
        </div>
        <hr>
        <div id="contact" class="row" style="padding-bottom: 30px;">
            <div class="col-md-12">
                <h1>Contact</h1>
            </div>
        </div>
    </div>
    <footer style="height: 100px; background-color: #333; color: white; padding-top: 30px;">
        <div class="container">
            <div class="row">
                <div class="col-md-12" style="text-align: center;">
                    <p>© 2013 ESN Trondheim</p>
                    <a href="#">Back to top</a>
                </div>
            </div>
        </div>

    </footer>

    <!-- Scripts -->
    <script src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>


    <!-- End -->
</body>

</html>
