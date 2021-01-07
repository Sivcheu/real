<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed&display=swap" rel="stylesheet">
    <title>Document</title>
</head>
<style>
    body {
        margin: 0;
        font-size: .9rem;
        font-family: 'Roboto Condensed', sans-serif;
        font-weight: 400;
        line-height: 1.6;
        color: #212529;
        text-align: left;
        background-color: #f5f8fa;

    }

    .navbar-laravel {
        box-shadow: 0 2px 4px rgba(0, 0, 0, .04);
    }

    .navbar-brand,
    .nav-link,
    .my-form,
    .login-form {
        font-family: Raleway, sans-serif;
    }

    .my-form {
        padding-top: 1.5rem;
        padding-bottom: 1.5rem;
    }

    .my-form .row {
        margin-left: 0;
        margin-right: 0;
    }

    .login-form {
        padding-top: 1.5rem;
        padding-bottom: 1.5rem;
    }

    .login-form .row {
        margin-left: 0;
        margin-right: 0;
    }

    .reg {
        margin-top: 40px;
        margin-left: 10px;
    }

    .cs-m {
        margin-top: 50px;
        margin-left: 70px;
    }

    .cs-image {
        margin-left: auto;
        margin-right: auto;
        width: 350px;
        border-radius: 20px;
    }

    .cs-header {
        text-transform: uppercase;
    }

    .cs-p {
        max-height: 80px;
        overflow: auto;
    }

    .cs-h {
        text-transform: uppercase;
        background-color: #2d3748;
        color: white;
    }

    .detail-img {
        width: 700px;
        height: auto;
    }

    .welcome {
        background-color: #e1e1e7;
    }

    .volunteer {
        background-color: #e1e1e7;
    }

    .cs-footer {
        background-color: #e1e1e7 !important;
        margin-top: 100px !important;
    }
    .vol{
        height: 590px;
    }

</style>

<body>
{{\Illuminate\Support\Facades\View::make('navbar')}}
@yield('intro')

<div class="container">
    @yield('ct')
</div>

@yield('vol')

<div class="container">
    @yield('event')
</div>

@yield('footer')
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW"
        crossorigin="anonymous"></script>

</body>

</html>
