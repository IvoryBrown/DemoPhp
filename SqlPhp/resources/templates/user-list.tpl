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

    <title>Demo - All users</title>

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
    <table class="table table-bordered table-responsive">
        <thead>
            <tr>
                <th>#</th>
                <th>Name</th>
            </tr>
        </thead>

        <?php if($this->users): ?>

            <?php foreach ($this->users as $user): ?>
                <tr>
                    <td><a href="/users/<?=$user->getId()?>"><?=$user->getId()?></a></td>
                    <td><a href="/users/<?=$user->getId()?>"><?=$user->getName()?></a></td>
                <tr>
            <?php endforeach; ?>

        <?php else: ?>
            <tr>
                <td colspan="2">No results</td>
            </tr>
        <?php endif; ?>

        <thead>
            <tr>
                <th>#</th>
                <th>Name</th>
            </tr>
        </thead>
    </table>

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
