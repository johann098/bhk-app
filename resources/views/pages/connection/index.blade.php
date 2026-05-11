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

</head>

<body style="overflow-y:hidden;">
    <div class="container-fluid m-0 p-0">
        <div class="row g-0 m-0 p-0" style="height:100vh;">
            <div class="col-12 col-md-8" id="auth-left">
                <div class="left-inner container">
                    <div class="mb-5 d-flex align-items-center justify-content-start brand-row">
                        <div class="bg-icon me-3">
                            <x-lucide-zap class="brand-icon" />
                        </div>
                        <div>
                            <p class="mb-0 brand-name">DEATRA</p>
                            <p class="mb-0 brand-subtitle">DEAL TRACKER</p>
                        </div>
                    </div>
                    <div class="row description">
                        <div class="col-12">
                            <p class="description-title"><span>Manage your deals with</span> <span class="gold">precision</span><span>.</span></p>
                            <p class="subdescription">The platform for managing transactions and strategic partnerships for BAKULU HOLDINGS.</p>
                        </div>
                    </div>
                    <div class="row caracteristic-row">
                        <div class="col-12">
                            <div class="d-flex mb-4 align-items-center justify-content-start">
                                <div class="bg-icon me-2">
                                    <x-lucide-zap class="icon" />
                                </div>
                                <div class="text">
                                    <p class="title mb-0">Real-time pipeline</p>
                                    <span>Track every step of your transactions</span>
                                </div>
                            </div>
                            <div class="d-flex mb-4 align-items-center justify-content-start">
                                <div class="bg-icon me-2">
                                    <x-lucide-shield class="icon" />
                                </div>
                                <div class="text">
                                    <p class="title mb-0">Security & Confidentiality</p>
                                    <span>Role-based access, data encryption</span>
                                </div>
                            </div>
                            <div class="d-flex mb-4 align-items-center justify-content-start">
                                <div class="bg-icon me-2">
                                    <x-lucide-message-square class="icon" />
                                </div>
                                <div class="text">
                                    <p class="title mb-0">Centralized communication</p>
                                    <span>Private exchanges integrated by deal</span>
                                </div>
                            </div>
                            <div class="d-flex mb-4 align-items-center justify-content-start">
                                <div class="bg-icon me-2">
                                    <x-lucide-folder class="icon" />
                                </div>
                                <div class="text">
                                    <p class="title mb-0">Document management</p>
                                    <span>Centralized NDA, contract, and due diligence</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-4" id="auth-right">
                <div class="container-fluid g-0 m-0 p-0 right-inner">
                    <div class="row">
                        <div class="col-12">
                            <ul class="nav nav-pills mx-auto" id="pills-tab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active" id="pills-signin-tab" data-bs-toggle="pill" data-bs-target="#pills-signin" type="button" role="tab" aria-controls="pills-signin" aria-selected="true"><span>Sign in</span></button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="pills-signup-tab" data-bs-toggle="pill" data-bs-target="#pills-signup" type="button" role="tab" aria-controls="pills-signup" aria-selected="false"><span>Sign up</span></button>
                                </li>
                            </ul>
                            <div class="tab-content" id="pills-tabContent">
                                <div class="tab-pane fade show active" id="pills-signin" role="tabpanel" aria-labelledby="pills-signin-tab" tabindex="0">
                                    <div class="container right-inner">
                                        <div class="row">
                                            <div class="col-12">
                                                <p class="title mb-1">Welcome back</p>
                                                <span class="subtitle">Log in to your DEATRA account</span>
                                                <form action="" class="form-auth-right">
                                                    <div class="row mb-3">
                                                        <div class="col-12">
                                                            <label for="email" class="form-label">E-mail address *</label>
                                                            <div class="input-group">
                                                                <div class="input-group-text" id="email-input-icon">
                                                                    <x-lucide-mail class="input-icon" />
                                                                </div>
                                                                <input type="text" class="form-control" placeholder="vous@bakulu.com" name="email" aria-label="name" aria-describedby="email-input-icon">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row mb-2">
                                                        <div class="col-12">
                                                            <label for="pwd" class="form-label">Password *</label>
                                                            <div class="input-group">
                                                                <div class="input-group-text" id="pwd-input-icon">
                                                                    <x-lucide-lock class="input-icon" />
                                                                </div>
                                                                <input type="text" class="form-control" placeholder="••••••••" name="password" aria-label="name" aria-describedby="pwd-input-icon">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="d-flex justify-content-between mb-4">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" value="remember-me" name="" id="remember-me">
                                                            <label class="form-check-label" for="remember-me">
                                                                Remember me ?
                                                            </label>
                                                        </div>
                                                        <p class="mb-0"><span class="gold">Forgot your password ?</span></p>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <a class="btn btn-submit mb-3"><span>Log in</span></a>
                                                            <div class="d-flex align-items-center justify-content-between mb-3">
                                                                <hr class="hr-cs-1">
                                                                <span class="hr-span">OR</span>
                                                                <hr class="hr-cs-1">
                                                            </div>
                                                            <a class="btn btn-google-conx">
                                                                <svg viewBox="0 0 24 24">
                                                                    <path fill="#4285F4" d="M22.56 12.25c0-.78-.07-1.53-.2-2.25H12v4.26h5.92c-.26 1.37-1.04 2.53-2.21 3.31v2.77h3.57c2.08-1.92 3.28-4.74 3.28-8.09z"></path>
                                                                    <path fill="#34A853" d="M12 23c2.97 0 5.46-.98 7.28-2.66l-3.57-2.77c-.98.66-2.23 1.06-3.71 1.06-2.86 0-5.29-1.93-6.16-4.53H2.18v2.84C3.99 20.53 7.7 23 12 23z"></path>
                                                                    <path fill="#FBBC05" d="M5.84 14.09c-.22-.66-.35-1.36-.35-2.09s.13-1.43.35-2.09V7.07H2.18C1.43 8.55 1 10.22 1 12s.43 3.45 1.18 4.93l2.85-2.22.81-.62z"></path>
                                                                    <path fill="#EA4335" d="M12 5.38c1.62 0 3.06.56 4.21 1.64l3.15-3.15C17.45 2.09 14.97 1 12 1 7.7 1 3.99 3.47 2.18 7.07l3.66 2.84c.87-2.6 3.3-4.53 6.16-4.53z"></path>
                                                                </svg>
                                                                <span>Continue with google</span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="pills-signup" role="tabpanel" aria-labelledby="pills-signup-tab" tabindex="0">
                                    <div class="container right-inner">
                                        <div class="row">
                                            <div class="col-12">
                                                <p class="title mb-1">Create an account</p>
                                                <span class="subtitle">Join DEATRA in seconds</span>
                                                <form action="" class="form-auth-right">
                                                    <div class="row mb-3">
                                                        <div class="col-6">
                                                            <label for="first-name" class="form-label">First name *</label>
                                                            <div class="input-group">
                                                                <div class="input-group-text" id="first-name-input-icon">
                                                                    <x-lucide-user class="input-icon" />
                                                                </div>
                                                                <input type="text" class="form-control" placeholder="John" name="first-name" aria-label="first-name" aria-describedby="first-name-input-icon">
                                                            </div>
                                                        </div>
                                                        <div class="col-6">
                                                            <label for="last-name" class="form-label">Last name *</label>
                                                            <div class="input-group">
                                                                <div class="input-group-text" id="last-name-input-icon">
                                                                    <x-lucide-user class="input-icon" />
                                                                </div>
                                                                <input type="text" class="form-control" placeholder="Doe" name="last-name" aria-label="last-name" aria-describedby="last-name-input-icon">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row mb-3">
                                                        <div class="col-12">
                                                            <label for="organization" class="form-label">Organization *</label>
                                                            <div class="input-group">
                                                                <div class="input-group-text" id="organization-input-icon">
                                                                    <x-lucide-building class="input-icon" />
                                                                </div>
                                                                <input type="text" class="form-control" placeholder="Bakulu Holdings" name="organization" aria-label="organization" aria-describedby="organization-input-icon">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row mb-3">
                                                        <div class="col-12">
                                                            <label for="email" class="form-label">E-mail address *</label>
                                                            <div class="input-group">
                                                                <div class="input-group-text" id="email-input-icon">
                                                                    <x-lucide-mail class="input-icon" />
                                                                </div>
                                                                <input type="text" class="form-control" placeholder="vous@bakulu.com" name="email" aria-label="email" aria-describedby="email-input-icon">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row mb-2">
                                                        <div class="col-12">
                                                            <label for="pwd" class="form-label">Password *</label>
                                                            <div class="input-group">
                                                                <div class="input-group-text" id="pwd-input-icon">
                                                                    <x-lucide-lock class="input-icon" />
                                                                </div>
                                                                <input type="text" class="form-control" placeholder="••••••••" name="password" aria-label="name" aria-describedby="pwd-input-icon">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="d-flex justify-content-between mb-4">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" value="remember-me" name="" id="remember-me">
                                                            <label class="form-check-label" for="remember-me">
                                                                I accept the terms of use
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <a class="btn btn-submit mb-3"><span>Sign up</span></a>
                                                            
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- JAVASCRIPT FILES -->
    <script src="/assets/js/jquery.min.js"></script>
    <script src="/vendor/jquery-ui-1.14.1/jquery-ui.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>

</html>