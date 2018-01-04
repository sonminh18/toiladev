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
    <link rel="stylesheet" href="src/css/animate.css">
    <link rel="stylesheet" href="src/css/style.css">

    <!-- MODERNIZR -->
    <script src="src/js/modernizr-2.8.3-respond-1.4.2.min.js"></script>

</head>
<body>

<div class="wrapper">
    @include('header')

    @yield('contents')

    @include('footer')


</div>

<!-- jQuery -->
<script src="src/js/jquery.min.js"></script>
<script src="src/js/bootstrap/bootstrap.min.js"></script>
<script src="src/js/theme.js"></script>

<!-- Instagram Feed -->
<script src="src/js/instagramLite.min.js"></script>
<script>
    $('.instagram-lite').instagramLite({

        //Replace ACCESSTOKEN with your twitter username
        accessToken: '1730464.199554e.e561d1b801d74e35a1453110a44a09e8',
        urls: true,
        limit: 6,
        captions: false,
        likes: false,
        comments_count: false,
        success: function() {
            console.log('The request was successful!');
        },
        error: function() {
            console.log('There was an error with your request.');
        }
    });
</script>

<!-- Twitterfeed -->
<script src="src/js/tweecool.min.js"></script>
<script>
    $(document).ready(function() {
        $('#tweecool').tweecool({
            //Replace TWEECOOL with your twitter username
            username : 'tweecool',
            profile_image: false,
            limit : 3
        });
    });
</script>


</body>
</html>

