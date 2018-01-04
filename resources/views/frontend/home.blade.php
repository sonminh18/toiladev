<!DOCTYPE html>
<html lang="zxx">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Crucial - Responsive Magazine Template</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="src/img/favicon.ico">

    <!-- ICON CSS -->
    <link rel="stylesheet" href="src/js/font-awesome/css/font-awesome.min.css">

    <!-- CSS -->
    <link rel="stylesheet" href="src/js/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="src/js/slick/slick.css">
    <link rel="stylesheet" href="src/css/animate.css">
    <link rel="stylesheet" href="src/css/style.css">

    <!-- MODERNIZR -->
    <script src="src/js/modernizr-2.8.3-respond-1.4.2.min.js"></script>

</head>
<body class="home5">

<div class="wrapper">
    @include('frontend/headerhome')

    @yield('contents_home')

    @include('frontend/footer')
</div>

<!-- jQuery -->
<script src="src/js/jquery.min.js"></script>
<script src="src/js/bootstrap/bootstrap.min.js"></script>
<script src="src/js/slick/slick.min.js"></script>
<script src="src/js/theme.js"></script>

</body>
</html>

