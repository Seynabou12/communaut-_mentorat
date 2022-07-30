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
    @include('site.nav')
    {{-- <div class="">
        <div class="container-fluid">
            
            <!-- row -->
            <div class="row">
                <div class="col-lg-12" style="padding: 0;">
                    <div class="profile card   pt-0 " >
                        <div class="profile-head">
                            <div class="photo-content">
                                <div class="cover-photo "></div>
                            </div>
                          
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-4">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="profile-statistics">
                                        <div class="text-center">
                                            <div class="row">
                                                <div class="col">
                                                    <h3 class="m-b-0">150</h3><span>Follower</span>
                                                </div>
                                                <div class="col">
                                                    <h3 class="m-b-0">140</h3><span>Place Stay</span>
                                                </div>
                                                <div class="col">
                                                    <h3 class="m-b-0">45</h3><span>Reviews</span>
                                                </div>
                                            </div>
                                            <div class="mt-4">
                                                <a href="javascript:void();;" class="btn btn-primary mb-1 me-1">Follow</a> 
                                                <a href="javascript:void();;" class="btn btn-primary mb-1" data-bs-toggle="modal" data-bs-target="#sendMessageModal">Send Message</a>
                                            </div>
                                        </div>
                                        <!-- Modal -->
                                        <div class="modal fade" id="sendMessageModal">
                                            <div class="modal-dialog modal-dialog-centered" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title">Send Message</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form class="comment-form">
                                                            <div class="row"> 
                                                                <div class="col-lg-6">
                                                                    <div class="mb-3">
                                                                        <label class="text-black font-w600 form-label">Name <span class="required">*</span></label>
                                                                        <input type="text" class="form-control" value="Author" name="Author" placeholder="Author">
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-6">
                                                                    <div class="mb-3">
                                                                        <label class="text-black font-w600 form-label">Email <span class="required">*</span></label>
                                                                        <input type="text" class="form-control" value="Email" placeholder="Email" name="Email">
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-12">
                                                                    <div class="mb-3">
                                                                        <label class="text-black font-w600 form-label">Comment</label>
                                                                        <textarea rows="8" class="form-control" name="comment" placeholder="Comment"></textarea>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-12">
                                                                    <div class="mb-3 mb-0">
                                                                        <input type="submit" value="Post Comment" class="submit btn btn-primary" name="submit">
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
                        <div class="col-xl-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="profile-blog">
                                        <h5 class="text-primary d-inline">Today Highlights</h5>
                                        <img src="images/profile/1.jpg" alt="" class="img-fluid mt-4 mb-4 w-100">
                                        <h4><a href="post-details.html" class="text-black">Darwin Creative Agency Theme</a></h4>
                                        <p class="mb-0">A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="profile-interest">
                                        <h5 class="text-primary d-inline">Interest</h5>
                                        <div class="row mt-4 sp4" id="lightgallery">
                                            <a href="images/profile/2.jpg" data-exthumbimage="images/profile/2.jpg" data-src="images/profile/2.jpg" class="mb-1 col-lg-4 col-xl-4 col-sm-4 col-6">
                                                <img src="/images/profile/2.jpg" alt="" class="img-fluid">
                                            </a>
                                            <a href="images/profile/3.jpg" data-exthumbimage="images/profile/3.jpg" data-src="images/profile/3.jpg" class="mb-1 col-lg-4 col-xl-4 col-sm-4 col-6">
                                                <img src="/images/profile/3.jpg" alt="" class="img-fluid">
                                            </a>
                                            <a href="images/profile/4.jpg" data-exthumbimage="images/profile/4.jpg" data-src="images/profile/4.jpg" class="mb-1 col-lg-4 col-xl-4 col-sm-4 col-6">
                                                <img src="/images/profile/4.jpg" alt="" class="img-fluid">
                                            </a>
                                            <a href="images/profile/3.jpg" data-exthumbimage="images/profile/3.jpg" data-src="images/profile/3.jpg" class="mb-1 col-lg-4 col-xl-4 col-sm-4 col-6">
                                                <img src="/images/profile/3.jpg" alt="" class="img-fluid">
                                            </a>
                                            <a href="images/profile/4.jpg" data-exthumbimage="images/profile/4.jpg" data-src="images/profile/4.jpg" class="mb-1 col-lg-4 col-xl-4 col-sm-4 col-6">
                                                <img src="/images/profile/4.jpg" alt="" class="img-fluid">
                                            </a>
                                            <a href="images/profile/2.jpg" data-exthumbimage="images/profile/2.jpg" data-src="images/profile/2.jpg" class="mb-1 col-lg-4 col-xl-4 col-sm-4 col-6">
                                                <img src="/images/profile/2.jpg" alt="" class="img-fluid">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="profile-news">
                                        <h5 class="text-primary d-inline">Our Latest News</h5>
                                        <div class="media pt-3 pb-3">
                                            <img src="images/profile/5.jpg" alt="image" class="me-3 rounded" width="75">
                                            <div class="media-body">
                                                <h5 class="m-b-5"><a href="post-details.html" class="text-black">Collection of textile samples</a></h5>
                                                <p class="mb-0">I shared this on my fb wall a few months back, and I thought.</p>
                                            </div>
                                        </div>
                                        <div class="media pt-3 pb-3">
                                            <img src="/images/profile/6.jpg" alt="image" class="me-3 rounded" width="75">
                                            <div class="media-body">
                                                <h5 class="m-b-5"><a href="post-details.html" class="text-black">Collection of textile samples</a></h5>
                                                <p class="mb-0">I shared this on my fb wall a few months back, and I thought.</p>
                                            </div>
                                        </div>
                                        <div class="media pt-3 pb-3">
                                            <img src="images/profile/7.jpg" alt="image" class="me-3 rounded" width="75">
                                            <div class="media-body">
                                                <h5 class="m-b-5"><a href="post-details.html" class="text-black">Collection of textile samples</a></h5>
                                                <p class="mb-0">I shared this on my fb wall a few months back, and I thought.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-8">
                    <div class="card">
                        <div class="card-body">
                            <div class="post-details">
                                <h3 class="mb-2 text-black">Collection of textile samples lay spread</h3>
                                <ul class="mb-4 post-meta d-flex flex-wrap">
                                    <li class="post-author me-3">By Admin</li>
                                    <li class="post-date me-3"><i class="fa fa-calender"></i>18 Nov 2020</li>
                                    <li class="post-comment"><i class="fa fa-comments-o"></i> 28</li>
                                </ul>
                                <img src="/images/profile/8.jpg" alt="" class="img-fluid mb-3 w-100 rounded">
                                <p>A wonderful serenity has take possession of my entire soul like these sweet morning of spare which enjoy whole heart.A wonderful serenity has take possession of my entire soul like these sweet morning of spare which enjoy whole heart.</p>
                                <p>A collection of textile samples lay spread out on the table - Samsa was a travelling salesman - and above it there hung a picture that he had recently cut out of an illustrated magazine and housed in a nice, gilded frame.</p>
                                <blockquote>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Has been the industry's standard text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimencenturies.</blockquote>
                                <p>A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart. I am alone, and feel the charm of existence was created for the bliss of souls like mine.I am so happy, my dear friend, so absorbed in the exquisite sense of mere tranquil existence, that I neglect my talents.</p>
                               
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <div class="content-body">
        <div class="container-fluid">
            <div class="row page-titles">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item active"><a href="javascript:void(0)" style="color: #C15DFB;">Formulaire</a></li>
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Validation</a></li>
                </ol>
            </div>
            <!-- row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Formulaire de Validation</h4>
                        </div>
                        <div class="card-body">
                            <div class="form-validation">
                                <form class="needs-validation" novalidate="" method="POST" action="/mentors/create" enctype="multipart/form-data">
                                    @csrf
                                    <div class="row">
                                        <div class="col-xl-6">
                                            <div class="mb-3 row">
                                                <label class="col-lg-4 col-form-label" for="validationCustom01">Prenom
                                                    <span class="text-danger">*</span>
                                                </label>
                                                <div class="col-lg-6">
                                                    <input type="text" class="form-control" id="validationCustom01"
                                                        placeholder="Entrer votre prenom.." required="" name="prenom">
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
                                                        placeholder="Entrer votre adresse.." required="" name="adresse">
                                                    <div class="invalid-feedback">
                                                        Entrer votre adresse.
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mb-3 row">
                                                <label class="col-lg-4 col-form-label" for="validationCustom01">Région
                                                    <span class="text-danger">*</span>
                                                </label>
                                                <div class="col-lg-6">
                                                    <input type="text" class="form-control" id="validationCustom01"
                                                        placeholder="Entrer votre region.." required="" name="region">
                                                    <div class="invalid-feedback">
                                                        Entrer votre region.
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mb-3 row">
                                                <label class="col-lg-4 col-form-label" for="validationCustom08">Telephone
                                                    (SN)
                                                    <span class="text-danger">*</span>
                                                </label>
                                                <div class="col-lg-6">
                                                    <input type="text" class="form-control"
                                                        id="validationCustom08" placeholder="78-178-45-21"
                                                        required="" name="telephone">
                                                    <div class="invalid-feedback">
                                                        Enter votre numero de téléphone.
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mb-3 row">
                                                <label class="col-lg-4 col-form-label" for="validationCustom09">Nombre d'année d'experience
                                                    <span class="text-danger">*</span>
                                                </label>
                                                <div class="col-lg-6">
                                                    <input type="text" class="form-control"
                                                        id="validationCustom09" placeholder="2" required="" name="experience">
                                                    <div class="invalid-feedback">
                                                        nombre d'année d'experience.
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
                                                <label class="col-lg-4 col-form-label" for="validationCustom03">Mot de Passe
                                                    <span class="text-danger">*</span>
                                                </label>
                                                <div class="col-lg-6">
                                                    <input type="password" class="form-control" id="validationCustom03"
                                                        placeholder="Entrer votre mot de passe.." required="" name="password">
                                                    <div class="invalid-feedback">
                                                        Entrer votre mot de passe.
                                                    </div>
                                                </div>
                                            </div>
                                            {{-- <div class="mb-3 row">
                                                <label class="col-lg-4 col-form-label" for="validationCustom03">Confirmer le mot de Passe
                                                    <span class="text-danger">*</span>
                                                </label>
                                                <div class="col-lg-6">
                                                    <input type="password" class="form-control" id="validationCustom03"
                                                        placeholder="Confirmer votre mot de passe.." required="" name="confirmeMdp">
                                                    <div class="invalid-feedback">
                                                        Confirmer votre mot de passe.
                                                    </div>
                                                </div>
                                            </div> --}}
                                            <div class="mb-3 row">
                                                <label class="col-lg-4 col-form-label"
                                                    for="validationCustom04">Votre parcours <span
                                                        class="text-danger">*</span>
                                                </label>
                                                <div class="col-lg-6">
                                                    <textarea class="form-control" id="validationCustom04" rows="5" placeholder="Decrire en quelques mots votre parcours"
                                                        required="" name="parcours"></textarea>
                                                    <div class="invalid-feedback">
                                                        Decrire en quelques mots votre parcours.
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=" mb-3 row">
                                                <label class="col-lg-4 col-form-label" for="validationCustom03">Photo de profil
                                                    <span class="text-danger">*</span>
                                                </label>
                                                <div class="col-lg-6 form-file">
                                                    <input type="file" class="form-file-input form-control" id="validationCustom03"
                                                        placeholder="Entrer votre photo.." required="" name="photo" >
                                                    <div class="invalid-feedback">
                                                        Entrer votre Photo.
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=" mb-3 row">
                                                <label class="col-lg-4 col-form-label" for="validationCustom03">Date de Naissance
                                                    <span class="text-danger">*</span>
                                                </label>
                                                <div class="col-lg-6 form-file">
                                                    <input type="date" class="form-file-input form-control" id="validationCustom03"
                                                        placeholder="Date de naissance.." required="" name="dateNaissance" >
                                                    <div class="invalid-feedback">
                                                        Entrer votre date de naissance.
                                                    </div>
                                                </div>
                                            </div>
                                            {{-- <div class="mb-3 row">
                                                <label class="col-lg-4 col-form-label" for="validationCustom05">Best
                                                    Skill
                                                    <span class="text-danger">*</span>
                                                </label>
                                                <div class="col-lg-6">
                                                    <select class="default-select wide form-control"
                                                        id="validationCustom05">
                                                        <option data-display="Select">Please select</option>
                                                        <option value="html">HTML</option>
                                                        <option value="css">CSS</option>
                                                        <option value="javascript">JavaScript</option>
                                                        <option value="angular">Angular</option>
                                                        <option value="angular">React</option>
                                                        <option value="vuejs">Vue.js</option>
                                                        <option value="ruby">Ruby</option>
                                                        <option value="php">PHP</option>
                                                        <option value="asp">ASP.NET</option>
                                                        <option value="python">Python</option>
                                                        <option value="mysql">MySQL</option>
                                                    </select>
                                                    <div class="invalid-feedback">
                                                        Please select a one.
                                                    </div>
                                                </div>
                                            </div> --}}
                                            {{-- <div class="mb-3 row">
                                                <label class="col-lg-4 col-form-label"><a
                                                        href="javascript:void()">Terms &amp; Conditions</a> <span
                                                        class="text-danger">*</span>
                                                </label>
                                                <div class="col-lg-8">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox"
                                                            value="" id="validationCustom12" required="">
                                                        <label class="form-check-label" for="validationCustom12">
                                                            Agree to terms and conditions
                                                        </label>
                                                    </div>
                                                </div>
                                            </div> --}}
                                            <div class="mb-3 row">
                                                <div class="col-lg-8 ms-auto">
                                                    <button type="submit" class="btn " style="background-color: #C15DFB; color: white;">S'incrire</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Vertical Forms with icon</h4>
                        </div>
                        <div class="card-body">
                            <div class="basic-form">
                                <form class="form-valide-with-icon needs-validation" novalidate="">
                                    <div class="mb-3">
                                        <label class="text-label form-label"
                                            for="validationCustomUsername">Username</label>
                                        <div class="input-group">
                                            <span class="input-group-text"> <i class="fa fa-user"></i> </span>
                                            <input type="text" class="form-control" id="validationCustomUsername"
                                                placeholder="Enter a username.." required="">
                                            <div class="invalid-feedback">
                                                Please Enter a username.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label class="text-label form-label" for="dlab-password">Password *</label>
                                        <div class="input-group transparent-append">
                                            <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
                                            <input type="password" class="form-control" id="dlab-password"
                                                placeholder="Choose a safe one.." required="">
                                            <span class="input-group-text show-pass">
                                                <i class="fa fa-eye-slash"></i>
                                                <i class="fa fa-eye"></i>
                                            </span>
                                            <div class="invalid-feedback">
                                                Please Enter a username.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value=""
                                                id="invalidCheck2" required="">
                                            <label class="form-check-label" for="invalidCheck2">
                                                Check Me out
                                            </label>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn me-2 btn-primary">Submit</button>
                                    <button type="submit" class="btn btn-light">cencel</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div> --}}
            </div>
        </div>
    </div>
</body>

</html>
