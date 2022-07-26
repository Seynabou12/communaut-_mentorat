<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Inscription en tant que mentor</title>

    <link href="/vendor/jquery-nice-select/css/nice-select.css" rel="stylesheet">
    <link rel="stylesheet" href="/vendor/nouislider/nouislider.min.css">
    <!-- Style css -->
    <link href="/css/style.css" rel="stylesheet">
</head>
<style>
    @media (min-width: 768px) {
        #fderesm .bloc-contenu-blanc .heading {
            margin-bottom: 15px;
            font-size: 12px;
        }
    }


    #fderesm .bloc-contenu-blanc .heading {
        font-size: 9px;
        font-family: "FFClanWebPro-WideBook";
        color: #647878;
        text-transform: uppercase;
        text-align: center;
        margin-bottom: 30px;
    }

    @media (min-width: 768px) {
        #fderesm .bloc-contenu-blanc p {
            margin: 0 6% 45px 6%;
        }
    }
</style>

<body>

    {{-- <header id="header" class="fixed-top">
        <div class="container d-flex align-items-center">
            <img src="/images/wim-sbg.png" alt="" srcset="" style="width: 100px; height: auto;">
            <nav id="navbar" class="navbar order-last order-lg-0" style="margin-left: 100px;">
                <ul>
                    <li><a class="" href="/">Acceuil</a></li>
                    <li><a href="/mentors/create">Devenir Mentor</a></li>
                    <li><a href="/mentores/create">Devenir Mentoré</a></li>
                    <li><a href="/mentores">Blog</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav>
            <a href="/choix" class="get-started-btn">S'inscrire</a>
            <a href="/login" class="get-started-btn">Connexion</a>
        </div>
    </header> --}}
    <div class="authincation h-100"
        style="background: url(../../images/home_art.jpg) no-repeat;
            background-position: center;
            background-size: cover;
            width: 100%;
            height: 100vh;
            -webkit-transform: translate3d(0,0,0);
            transform: translate3d(0,0,0);
            opacity: 5;">
        <div class="col-xl-6 col-lg-12 container" style=" margin-top: 100px;">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Formulaire de Validation</h4>
                </div>
                <div class="card-body">
                    <div class="basic-form">
                        <div class="text-center mb-3">
                            <a href="/"><img src="/images/wim-sbg.png" alt=""></a>
                            <h3 class="text-center mb-4" style="font-weight:bold;">Enregistrez votre compte</h3>
                        </div>
                        <form class="needs-validation" novalidate="" method="post" action="/mentores/create"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="row">

                                <div class="mb-3 col-md-6">
                                    <label class="form-label" for="validationCustom01">Prenom
                                        <span class="text-danger">*</span>
                                    </label>
                                    <input type="text" class="form-control" id="validationCustom01"
                                        placeholder="Entrer votre prenom.." required="" name="prenom">

                                </div>
                                <div class="mb-3 col-md-6">
                                    <label class="form-label" for="validationCustom01">Nom
                                        <span class="text-danger">*</span>
                                    </label>

                                    <input type="text" class="form-control" id="validationCustom01"
                                        placeholder="Entrer votre nom.." required="" name="nom">

                                </div>
                                <div class="mb-3 col-md-6">
                                    <label class="form-label" for="validationCustom01">Adresse
                                        <span class="text-danger">*</span>
                                    </label>

                                    <input type="text" class="form-control" id="validationCustom01"
                                        placeholder="Entrer votre adresse.." required="" name="adresse">

                                </div>
                                <div class="mb-3 col-md-6">
                                    <label class="form-label" for="validationCustom08">Telephone
                                        (SN)
                                        <span class="text-danger">*</span>
                                    </label>
                                    <input type="text" class="form-control" id="validationCustom08"
                                        placeholder="78-178-45-21" required="" name="telephone">

                                </div>
                                <div class="mb-3 col-md-6 " style="padding: 10px;">
                                    <label for="attente" class="form-label">Attentes</label>
                                    <textarea type="date" class="form-control" required="" name="attente" id="attente" rows="3"></textarea>

                                </div>

                                <div class="mb-3 col-md-6">
                                    <label class="form-label" for="validationCustom02">Email
                                        <span class="text-danger">*</span>
                                    </label>

                                    <input type="text" class="form-control" id="validationCustom02"
                                        placeholder="Enter votre Email.." required="" name="email">
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label class="form-label" for="validationCustom03">Mot de
                                        Passe
                                        <span class="text-danger">*</span>
                                    </label>

                                    <input type="password" class="form-control" id="validationCustom03"
                                        placeholder="Entrer votre mot de passe.." required="" name="password">

                                </div>

                                <div class=" mb-3 col-md-6">
                                    <label class="form-label" for="validationCustom03">Photo
                                        de profil
                                        <span class="text-danger">*</span>
                                    </label>
                                    <input type="file" class="form-file-input form-control"
                                        id="validationCustom03" placeholder="Entrer votre photo.." required=""
                                        name="photo">
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label class="form-label" for="validationCustom08">Date
                                        Naissance
                                        <span class="text-danger">*</span>
                                    </label>

                                    <input type="date" class="form-control" id="validationCustom08"
                                        required="" name="dateNaissance">

                                </div>
                                <div class="mb-3 col-md-6">
                                    <label class="form-label" for="validationCustom05">Votre
                                        niveau d'étude
                                        <span class="text-danger">*</span>
                                    </label>

                                    <select class="default-select wide form-control" id="validationCustom05"
                                        name="niveau_id">
                                        <option data-display="Select">Please select</option>
                                        @foreach ($niveaux as $niveau)
                                            <option value="{{ $niveau->id }}">
                                                {{ $niveau->libelle }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <button type="submit" class="btn"
                                style="background-color: #C15DFB; color: white;">S'incrire</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
    {{-- @include('../site/footer') --}}
</body>

</html>
