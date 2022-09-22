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

    <header id="header" class="fixed-top">
        <div class="container d-flex align-items-center">
            <img src="/images/wim-sbg.png" alt="" srcset="" style="width: 100px; height: auto;">
            <nav id="navbar" class="navbar order-last order-lg-0" style="margin-left: 100px;">
                <ul>
                    <li><a class="" href="/">Acceuil</a></li>
                    <li><a href="/mentor">Devenir Mentor</a></li>
                    <li><a href="/mentore">Devenir Mentoré</a></li>
                    <li><a href="/blog">Blog</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav>
            <a href="/choix" class="get-started-btn">S'inscrire</a>
            <a href="/login" class="get-started-btn">Connexion</a>
        </div>
    </header>

    </div>
    </header>
    <div class="authincation h-100"
        style="background: url(../../images/home_art.jpg) no-repeat;
            background-position: center;
            background-size: cover;
            width: 100%;
            height: 100vh;
            -webkit-transform: translate3d(0,0,0);
            transform: translate3d(0,0,0);
            opacity: 5;">
        <div class="container-fluid" style="margin-top: 10px;">
            <div class="row">
                <div class="col-md-6  col-lg-12 col-sm-6 "
                    style="margin-top: 50px; margin-left: -5px; padding: 50px  700px 100px 100px;">
                    <div class="card" style="justify-content: center;">
                        <div class="card-body">
                            <div class="form-validation">
                                <div class="text-center mb-3">
                                    <a href="/"><img src="/images/wim-sbg.png" alt=""></a>
                                </div>
                                <h3 class="text-center mb-4" style="font-weight:bold;">Enregistrez votre compte</h3>
                                <form class="needs-validation" novalidate="" method="POST" action="/mentors/create"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <div class="row">
                                        <div class="col-xl-6">
                                            <div class="mb-3 row" style="padding: 10px;">
                                                <label class="col-lg-4 col-form-label" for="validationCustom01">Prenom
                                                    <span class="text-danger">*</span>
                                                </label>

                                                <input type="text" class="form-control" id="validationCustom01"
                                                    placeholder="Entrer votre prenom.." required="" name="prenom">
                                                <div class="invalid-feedback">
                                                    Entrer votre prenom.
                                                </div>

                                            </div>
                                            <div class="mb-3 row" style="padding: 10px;">
                                                <label class="col-lg-4 col-form-label" for="validationCustom01">Nom
                                                    <span class="text-danger">*</span>
                                                </label>

                                                <input type="text" class="form-control" id="validationCustom01"
                                                    placeholder="Entrer votre nom.." required="" name="nom">
                                                <div class="invalid-feedback">
                                                    Entrer votre nom.
                                                </div>

                                            </div>
                                            <div class="mb-3 row" style="padding: 10px;">
                                                <label class="col-lg-4 col-form-label" for="validationCustom01">Adresse
                                                    <span class="text-danger">*</span>
                                                </label>

                                                <input type="text" class="form-control" id="validationCustom01"
                                                    placeholder="Entrer votre adresse.." required="" name="adresse">
                                                <div class="invalid-feedback">
                                                    Entrer votre adresse.
                                                </div>

                                            </div>
                                            <div class="mb-3 row" style="padding: 10px;">
                                                <label class="col-lg-4 col-form-label"
                                                    for="validationCustom08">Telephone

                                                    <span class="text-danger">*</span>
                                                </label>

                                                <input type="text" class="form-control" id="validationCustom08"
                                                    placeholder="ESaisir le numéro de telephone" required=""
                                                    name="telephone">
                                                <div class="invalid-feedback">
                                                    Enter votre numero de téléphone.
                                                </div>

                                            </div>
                                            <div class="mb-3 row" style="padding: 10px;">
                                                <label class="col-lg-4 col-form-label"
                                                    for="validationCustom09">Experience
                                                    <span class="text-danger">*</span>
                                                </label>

                                                <input type="text" class="form-control" id="validationCustom09"
                                                    placeholder="2" required="" name="experience">
                                                <div class="invalid-feedback">
                                                    nombre d'année d'experience.
                                                </div>

                                            </div>
                                            <div class="mb-3 row" style="padding: 10px;">
                                                <label class="col-lg-4 col-form-label" for="validationCustom04">Votre
                                                    parcours <span class="text-danger">*</span>
                                                </label>

                                                <textarea class="form-control" id="validationCustom04" rows="5"
                                                    placeholder="Decrire en quelques mots votre parcours" required="" name="parcours"></textarea>
                                                <div class="invalid-feedback">
                                                    Decrire en quelques mots votre parcours.
                                                </div>

                                            </div>

                                        </div>
                                        <div class="col-xl-6">

                                            <div class="mb-3 row" style="padding: 10px;">
                                                <label class="col-lg-4 col-form-label" for="validationCustom02">Email
                                                    <span class="text-danger">*</span>
                                                </label>

                                                <input type="text" class="form-control" id="validationCustom02"
                                                    placeholder="Enter votre Email.." required="" name="email">
                                                <div class="invalid-feedback">
                                                    Enter votre Email.
                                                </div>

                                            </div>
                                            <div class="mb-3 row" style="padding: 10px;">
                                                <label class="col-lg-4 col-form-label" for="validationCustom03">Mot de
                                                    Passe
                                                    <span class="text-danger">*</span>
                                                </label>

                                                <input type="password" class="form-control" id="validationCustom03"
                                                    placeholder="Entrer votre mot de passe.." required=""
                                                    name="password">
                                                <div class="invalid-feedback">
                                                    Entrer votre mot de passe.
                                                </div>

                                            </div>

                                            <div class=" mb-3 row" style="padding: 10px;">
                                                <label class="col-lg-4 col-form-label" for="validationCustom03">Date
                                                    Naissance
                                                    <span class="text-danger">*</span>
                                                </label>
                                                <div class="form-file">
                                                    <input type="date" class="form-file-input form-control"
                                                        id="validationCustom03" placeholder="Date de naissance.."
                                                        required="" name="dateNaissance">
                                                    <div class="invalid-feedback">
                                                        Entrer votre date de naissance.
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=" mb-3 row" style="padding: 10px;">
                                                <label class="col-lg-4 col-form-label" for="validationCustom03">Profil
                                                    <span class="text-danger">*</span>
                                                </label>
                                                <div class="form-file">
                                                    <input type="file" class="form-file-input form-control"
                                                        id="validationCustom03" placeholder="Entrer votre photo.."
                                                        required="" name="photo">
                                                    <div class="invalid-feedback">
                                                        Entrer votre Photo.
                                                    </div>
                                                </div>
                                            </div>

                                            
                                                <div class="mb-3 row" style="padding: 10px;">
                                                    <label class="col-lg-4 col-form-label"
                                                        for="validationCustom05">Domaine
                                                        <span class="text-danger">*</span>
                                                    </label>

                                                    <select class="default-select wide form-control"
                                                        id="validationCustom05" name="domaine_id">
                                                        <option data-display="Select">selectionner votre domaine
                                                        </option>
                                                        @foreach ($domaines as $domaine)
                                                            <option value="{{ $domaine->id }}">
                                                                {{ $domaine->nomDomaine }}</option>
                                                        @endforeach
                                                    </select>
                                                    <div class="invalid-feedback">
                                                        SVP selectionner une domaine.
                                                    </div>

                                                </div>
                                            
                                            <div class="row" >
                                                <div class="mb-3 " style="padding: 10px;">
                                                    <div class="col-lg-12 ">
                                                        <button type="submit" class="btn"
                                                            style="background-color: #C15DFB; color: white;">S'incrire</button>
                                                    </div>
                                                </div>
                                            </div>

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
    @include('site.footer');
</body>

</html>
