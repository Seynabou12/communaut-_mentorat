<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link href="/vendor/jquery-nice-select/css/nice-select.css" rel="stylesheet">
    <link rel="stylesheet" href="/vendor/nouislider/nouislider.min.css">
    <!-- Style css -->
    <link href="/css/style.css" rel="stylesheet">
</head>

<body>
    <div class="authincation h-100"
        style="background: url(../../images/home_art.jpg) no-repeat;
                background-position: center;
                background-size: cover;
                width: 100%;
                height: 100vh;
                -webkit-transform: translate3d(0,0,0);
                transform: translate3d(0,0,0);
                opacity: 5;">
        <div class="container h-100">
            <div class="row justify-content-center h-100 align-items-center">
                <div class="col-md-6">
                    <div class="authincation-content" style="margin-top: 70px;">
                        <div class="row no-gutters">
                            <div class="col-xl-12">
                                <div class="auth-form">
                                    <div class="text-center mb-3">
                                        <a href="/"><img src="/images/wim-sbg.png" alt=""
                                                style="height: 50%; width:50%; margin-bottom: 20px;"></a>
                                    </div>
                                    @if (Session::has('message'))
                                        <p class="alert {{Session::get('class-alert')}}">{{Session::get('message')}}</p>
                                    @endif
                                    <h3 class="text-center mb-4" style="font-weight:bold;">CONNECTEZ-VOUS</h3>
                                    <form action="/login" method="POST">
                                        @csrf
                                        <div class="mb-3">
                                            <label class="mb-1"><strong>Email</strong></label>
                                            <input type="email" class="form-control" value="hello@example.com"
                                                name="email">
                                        </div>
                                        <div class="mb-3">
                                            <label class="mb-1"><strong>Mot de Passe</strong></label>
                                            <input type="password" class="form-control" value="Password"
                                                name="password">
                                        </div>
                                        <div class="row d-flex justify-content-between mt-4 mb-2">
                                            <div class="mb-3">
                                                <div class="form-check custom-checkbox ms-1">
                                                    <input type="checkbox" class="form-check-input"
                                                        id="basic_checkbox_1">
                                                    <label class="form-check-label" for="basic_checkbox_1">Se souvenir
                                                        de moi</label>
                                                </div>
                                            </div>
                                        
                                        </div>
                                        <div class="text-center">
                                            <button type="submit" class="btn btn-block"
                                                style="background-color: #C15DFB;color: white;">Se Connecter</button>
                                        </div>
                                    </form>
                                    <div class="new-account mt-3">
                                        <p>Vous n'avez pas de compte? <a class="text-primary"
                                                href="/choix">inscrivez-vous</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
