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
    <!-- ======= Header ======= -->

    <header id="header" class="fixed-top">
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
    </header>
    <a href="/login" class="get-started-btn">Connexion</a>

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
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6  col-lg-12 col-sm-6 "
                style="margin-top: 50px; margin-left: -5px; padding: 50px  700px 100px 100px;">
                <div class="card">
                    <div class="card-body">
                        <div class="form-validation">
                            <div class="text-center mb-3">
                                <a href="/"><img src="/images/wim-sbg.png" alt=""></a>
                            </div>
                            <h3 class="text-center mb-4" style="font-weight:bold;">Enregistrez votre compte</h3>
                            <form class="needs-validation" novalidate="" method="post" action="/mentores/create"
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
                                            <label class="col-lg-4 col-form-label" for="validationCustom08">Telephone
                                                (SN)
                                                <span class="text-danger">*</span>
                                            </label>
                                            
                                                <input type="text" class="form-control" id="validationCustom08"
                                                    placeholder="78-178-45-21" required="" name="telephone">
                                                <div class="invalid-feedback">
                                                    Enter votre numero de téléphone.
                                                </div>
                                         
                                        </div>

                                        <div class="mb-3 row " style="padding: 10px;">
                                            <label for="attente" class="col-lg-4 col-form-label">Attentes</label>
                                           
                                                <textarea type="date" class="form-control" required="" name="attente" id="attente" rows="3"></textarea>
                                                <div class="invalid-feedback">
                                                    Enter vos attentes
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
                                            <label class="col-lg-4 col-form-label" for="validationCustom03">Photo
                                                de profil
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
                                            <label class="col-lg-4 col-form-label" for="validationCustom08">Date
                                                Naissance
                                                <span class="text-danger">*</span>
                                            </label>
                                          
                                                <input type="date" class="form-control" id="validationCustom08"
                                                    required="" name="dateNaissance">
                                                <div class="invalid-feedback">
                                                    Enter votre date de naissance.
                                                </div>
                                            
                                        </div>

                                        <div class="form-group mb-3" style="padding: 10px;">
                                            <div class="mb-3 row">
                                                <label class="col-lg-4 col-form-label" for="validationCustom05">Votre
                                                    niveau d'étude
                                                    <span class="text-danger">*</span>
                                                </label>
                                               
                                                    <select class="default-select wide form-control"
                                                        id="validationCustom05" name="niveau_id">
                                                        <option data-display="Select">Please select</option>
                                                        @foreach ($niveaux as $niveau)
                                                            <option value="{{ $niveau->id }}">
                                                                {{ $niveau->libelle }}</option>
                                                        @endforeach
                                                    </select>
                                                    <div class="invalid-feedback">
                                                        Please select a one.
                                                    </div>
                                              
                                            </div>
                                        </div>
                                        <div class="new-account mt-3">
                                           
                                                <button type="submit" class="btn "
                                                    style="background-color: #C15DFB; color: white;">S'incrire</button>
                                           
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
    @include('../site/footer')
</body>

</html>
