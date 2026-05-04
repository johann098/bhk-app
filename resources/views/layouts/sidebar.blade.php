<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>StratEdge — Strategic Partnerships</title>

    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <!-- Font Awesome 6 -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" rel="stylesheet" />
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@400;600;700&family=Outfit:wght@300;400;500;600&display=swap" rel="stylesheet" />

    <link rel="stylesheet" href="css/style.css" />
</head>

<body>
    <div class="container sidebar-nav-container" id="sidebar">
        <div class="d-flex flex-column justify-content-center">
            <div class="image-box logo mx-auto">
                <img class="img-fluid main-image" src="{{asset('assets/images/Logo_IMUXT.png')}}" alt="LOGO IMUXT">
            </div>
            <ul class="list-unstyled main-menu">
                

            </ul>

            <hr class="hr-cs">
            <ul class="list-unstyled settings">
                
           </ul>
            


        </div>
    </div>
    @yield('body')
</body>

</html>