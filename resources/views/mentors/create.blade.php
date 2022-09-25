<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="/vendor/jquery-nice-select/css/nice-select.css" rel="stylesheet">
    <link rel="stylesheet" href="/vendor/nouislider/nouislider.min.css">
    <link href="/css/style.css" rel="stylesheet">
</head>

<body>

    {{-- <header id="header" class="fixed-top">
        <div class="container d-flex align-items-center">
            <img src="/images/wim-sbg.png" alt="" srcset="" style="width: 100px; height: auto;">
            <nav id="navbar" class="navbar order-last order-lg-0" style="margin-left: 100px;">
                <ul>
                    <li><a href="/">Acceuil</a></li>
                    <li><a href="/mentor">Devenir Mentor</a></li>
                    <li><a href="/mentore">Devenir Mentoré</a></li>
                    <li><a href="/blog">Blog</a></li>
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
                        <form class="needs-validation" novalidate="" method="POST" action="/mentors/create"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="mb-3 col-md-6">
                                    <label class="form-label">Prenom</label>
                                    <input type="text" class="form-control" id="validationCustom01"
                                        placeholder="Entrer votre prenom.." required="" name="prenom">
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label class="form-label">Nom</label>
                                    <input type="text" class="form-control" id="validationCustom01"
                                        placeholder="Entrer votre nom.." required="" name="nom">
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label class="form-label">Adresse</label>
                                    <input type="text" class="form-control" id="validationCustom01"
                                        placeholder="Entrer votre adresse.." required="" name="adresse">
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label class="form-label">Telephone</label>
                                    <input type="text" class="form-control" id="validationCustom08"
                                        placeholder="ESaisir le numéro de telephone" required="" name="telephone">
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label class="form-label">Experience</label>
                                    <input type="text" class="form-control" id="validationCustom09" placeholder="2"
                                        required="" name="experience">
                                </div>

                                <div class="mb-3 col-md-6">
                                    Profil
                                    <input type="file" class="form-file-input form-control" id="validationCustom03"
                                        placeholder="Entrer votre photo.." required="" name="photo">
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label class="form-label">Email</label>
                                    <input type="text" class="form-control" id="validationCustom02"
                                        placeholder="Enter votre Email.." required="" name="email">
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label class="form-label">Mot de Passe</label>
                                    <input type="password" class="form-control" id="validationCustom03"
                                        placeholder="Entrer votre mot de passe.." required="" name="password">
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label class="form-label">Date de Naissance</label>
                                    <input type="date" class="form-file-input form-control" id="validationCustom03"
                                        placeholder="Date de naissance.."required="" name="dateNaissance">
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label class="form-label">Votre Parcours</label>
                                    <textarea class="form-control" id="validationCustom04" rows="3"
                                        placeholder="Decrire en quelques mots votre parcours" required="" name="parcours"></textarea>
                                </div>
                            </div>
                            <div class="row">
                                <div class="mb-3 col-md-6">
                                    <label class="form-label">Domaine</label>
                                    <select id="inputState" class="default-select form-control wide"
                                        name="domaine_id">
                                        <option selected="">Choisir un domaine...</option>
                                        @foreach ($domaines as $domaine)
                                            <option value="{{ $domaine->id }}">{{ $domaine->nomDomaine }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <button type="submit" class="btn btn-primary"
                                style="background-color: #C15DFB; color: white;">S'inscrire</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- @include('site.footer'); --}}
</body>

</html>
