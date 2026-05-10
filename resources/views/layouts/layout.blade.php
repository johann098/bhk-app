<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>DEATRA | @yield('title')</title>
    <!-- <link rel="icon" type="image/x-icon" href="/assets/images/imuxt.png"> -->

    <!-- BOOTSTRAP v5.3.3 -->
    <link href="/vendor/bootstrap-5.3.8/css/bootstrap.min.css" rel="stylesheet">

    <!-- DATEPICKER CSS -->
    <!-- <link href="/vendor/datepicker/dist/css/datepicker.css" rel="stylesheet"> -->

    <!-- CUSTOM FILES -->
    <link href="/assets/css/style.css" rel="stylesheet">
    <link href="/assets/css/sidebar.css" rel="stylesheet">
    <link href="/assets/css/calendar.css" rel="stylesheet">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@400;600;700&family=Outfit:wght@300;400;500;600&display=swap" rel="stylesheet" />
</head>

<body>
    @yield("sidebar")

    <!-- JAVASCRIPT FILES -->
    <script src="/assets/js/jquery.min.js"></script>
    <script src="/vendor/jquery-ui-1.14.1/jquery-ui.js"></script>
    @yield('js')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>

</html>