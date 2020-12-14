<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <title>Page Not Found</title>

    <!-- Google font -->
    <link href="https://fonts.googleapis.com/css?family=Quicksand:700" rel="stylesheet">

    <!-- Font Awesome Icon -->
    <link type="text/css" rel="stylesheet" href="{{ asset('') }}errors/css/font-awesome.min.css" />

    <!-- Custom stlylesheet -->
    <link type="text/css" rel="stylesheet" href="{{ asset('') }}errors/css/style.css" />

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

</head>

<body>

<div id="notfound">
    <div class="notfound">
        <div class="notfound-bg">
            <div></div>
            <div></div>
            <div></div>
        </div>
        <h1>oops!</h1>
        <h2>Error 404 : Page Not Found</h2>
        <a href="{{ route('/') }}">go homepage</a>
        <!--<div class="notfound-social">-->
        <!--    <a href="https://www.facebook.com/MDMasudSikdar71"><i class="fa fa-facebook"></i></a>-->
        <!--    <a href="https://www.twitter.com/MDMasudSikdar71"><i class="fa fa-twitter"></i></a>-->
        <!--    <a href="https://www.pinterest.com/MDMasudSikdar71"><i class="fa fa-pinterest"></i></a>-->
        <!--    <a href="https://www.github.com/MDMasudSikdar71"><i class="fa fa-github"></i></a>-->
        <!--    <a href="https://www.linkedin.com/MDMasudSikdar71"><i class="fa fa-linkedin"></i></a>-->
        <!--</div>-->
    </div>
</div>

</body>

</html>
