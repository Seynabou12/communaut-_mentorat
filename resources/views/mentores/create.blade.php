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

<body>
    @include('site.nav')
    <div class="content-body">
        <div class="container-fluid">
            <!-- row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Formulaire de Validation</h4>
                        </div>
                        <div class="card-body">
                            <div class="form-validation">
                                <form class="needs-validation" novalidate="" method="post" action="/mentores/create"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <div class="row">
                                        <div class="col-xl-6">
                                            <div class="mb-3 row">
                                                <label class="col-lg-4 col-form-label" for="validationCustom01">Prenom
                                                    <span class="text-danger">*</span>
                                                </label>
                                                <div class="col-lg-6">
                                                    <input type="text" class="form-control" id="validationCustom01"
                                                        placeholder="Entrer votre prenom.." required=""
                                                        name="prenom">
                                                    <div class="invalid-feedback">
                                                        Entrer votre prenom.
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mb-3 row">
                                                <label class="col-lg-4 col-form-label" for="validationCustom01">Nom
                                                    <span class="text-danger">*</span>
                                                </label>
                                                <div class="col-lg-6">
                                                    <input type="text" class="form-control" id="validationCustom01"
                                                        placeholder="Entrer votre nom.." required="" name="nom">
                                                    <div class="invalid-feedback">
                                                        Entrer votre nom.
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mb-3 row">
                                                <label class="col-lg-4 col-form-label" for="validationCustom01">Adresse
                                                    <span class="text-danger">*</span>
                                                </label>
                                                <div class="col-lg-6">
                                                    <input type="text" class="form-control" id="validationCustom01"
                                                        placeholder="Entrer votre adresse.." required=""
                                                        name="adresse">
                                                    <div class="invalid-feedback">
                                                        Entrer votre adresse.
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="mb-3 row">
                                                <label class="col-lg-4 col-form-label"
                                                    for="validationCustom08">Telephone
                                                    (SN)
                                                    <span class="text-danger">*</span>
                                                </label>
                                                <div class="col-lg-6">
                                                    <input type="text" class="form-control" id="validationCustom08"
                                                        placeholder="78-178-45-21" required="" name="telephone">
                                                    <div class="invalid-feedback">
                                                        Enter votre numero de téléphone.
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="mb-3 row ">
                                                <label for="attente" class="col-lg-4 col-form-label">Attentes</label>
                                                <div class="col-lg-6">
                                                    <textarea type="date" class="form-control" required="" name="attente" id="attente" rows="3"></textarea>
                                                    <div class="invalid-feedback">
                                                        Enter vos attentes
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="col-xl-6">
                                            <div class="mb-3 row">
                                                <label class="col-lg-4 col-form-label" for="validationCustom02">Email
                                                    <span class="text-danger">*</span>
                                                </label>
                                                <div class="col-lg-6">
                                                    <input type="text" class="form-control" id="validationCustom02"
                                                        placeholder="Enter votre Email.." required="" name="email">
                                                    <div class="invalid-feedback">
                                                        Enter votre Email.
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mb-3 row">
                                                <label class="col-lg-4 col-form-label" for="validationCustom03">Mot de
                                                    Passe
                                                    <span class="text-danger">*</span>
                                                </label>
                                                <div class="col-lg-6">
                                                    <input type="password" class="form-control" id="validationCustom03"
                                                        placeholder="Entrer votre mot de passe.." required=""
                                                        name="password">
                                                    <div class="invalid-feedback">
                                                        Entrer votre mot de passe.
                                                    </div>
                                                </div>
                                            </div>

                                            <div class=" mb-3 row">
                                                <label class="col-lg-4 col-form-label" for="validationCustom03">Photo
                                                    de profil
                                                    <span class="text-danger">*</span>
                                                </label>
                                                <div class="col-lg-6 form-file">
                                                    <input type="file" class="form-file-input form-control"
                                                        id="validationCustom03" placeholder="Entrer votre photo.."
                                                        required="" name="photo">
                                                    <div class="invalid-feedback">
                                                        Entrer votre Photo.
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mb-3 row">
                                                <label class="col-lg-4 col-form-label" for="validationCustom08">Date
                                                    Naissance
                                                    <span class="text-danger">*</span>
                                                </label>
                                                <div class="col-lg-6">
                                                    <input type="date" class="form-control"
                                                        id="validationCustom08" required="" name="dateNaissance">
                                                    <div class="invalid-feedback">
                                                        Enter votre date de naissance.
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            <div class="form-group mb-3">
                                                <div class="mb-3 row">
                                                    <label class="col-lg-4 col-form-label"
                                                        for="validationCustom05">Votre niveau d'étude
                                                        <span class="text-danger">*</span>
                                                    </label>
                                                    <div class="col-lg-6">
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
                                            </div>
                                            <div class="mb-3 row">
                                                <div class="col-lg-8 ms-auto">
                                                    <button type="submit" class="btn "
                                                        style="background-color: #C15DFB; color: white;">S'incrire</button>
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
</body>

</html>
