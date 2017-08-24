<!DOCTYPE html>
<html lang="en">
<!--suppress HtmlUnknownTarget -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">

    <base href="http://localhost" >
    <link rel="icon" href="/favicon.png">

    <title>Demo - Home</title>

    <!-- Bootstrap core CSS -->
    <link href="/design/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="/design/bootstrap/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="/design/css/starter-template.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="/design/bootstrap/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="/design/bootstrap/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->


</head>

<body>

<nav class="navbar navbar-default navbar-inverse navbar-fixed-top"  role="navigation">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Demo</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/">Demo</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

            <ul class="nav navbar-nav navbar-left">
                <li><a href="/users">Users</a></li>
                <li><a href="/advs">Advertisements</a></li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>

<div class="container">
    <pre>
        It's a really simple php application, based on an MVC pattern. I'd like to
have a system which is implemented in core PHP (no framework or CMS can be
used) and it is:

- URL mapped (.htaccess rewrite)
- Based on an MVC pattern
- Object oriented
- Uses database (MySQL)

Requirements:

The application should have 2 database tables: users (id, name) and
advertisements (id, userid, title).
* As a user I'd like a page that shows the list of the users existing in
the system.
* As a user I'd like a page that shows the list of the existing
advertisements in the system (and the related user's name of course)
* They should be different pages
* So the system should contain 3 pages:
-> index, with the links to the user list and the advertisement list
-> user list
-> advertisement list
-> The whole system should have a minimalist design (css)

In summary:

So it's a 3 paged application, with a minimal design, and database access,
which is URL mapped, and based on an MVC pattern. No framework or CMS
allowed to use.
I need the source of the application, wich I expect to be about 6-8 files.
Here can be a difference of course.

Requirements regarding the implementation:
- Must be object oriented!
- Must have at least 1 layer under the Controller layer
- Model and service methods should be separated. Model here should be
clear, used only for representation.
- Must have a nice, and well documented code
- A very simple css, in minimal style
    </pre>
</div><!-- /.container -->


<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="/design/bootstrap/js/bootstrap.min.js"></script>
<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script src="/design/bootstrap/js/ie10-viewport-bug-workaround.js"></script>

</body>
</html>
