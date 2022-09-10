{{-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="admin, dashboard">
    <meta name="author" content="DexignZone">
    <meta name="robots" content="index, follow">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Dompet : Payment Admin Template">
    <meta property="og:title" content="Dompet : Payment Admin Template">
    <meta property="og:description" content="Dompet : Payment Admin Template">
    <meta property="og:image" content="https://dompet.dexignlab.com/xhtml/social-image.png">
    <meta name="format-detection" content="telephone=no">

    <!-- PAGE TITLE HERE -->
    <title>Dompet : Payment Admin Template</title>

    <!-- FAVICONS ICON -->
    <link rel="shortcut icon" type="image/png" href="images/favicon.png">
    <link href="/vendor/jquery-nice-select/css/nice-select.css" rel="stylesheet">
    <link href="/css/style.css" rel="stylesheet">

</head>



<body style="background-color: #FFF;">
    @include('site.nav')
    <div class="container">
        <div class="container-fluid">
            <div class="row page-titles">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item active"><a href="javascript:void(0)">Advanced</a></li>
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Post Details</a></li>
                </ol>
            </div> --}}
<!-- row -->
{{-- <div class="row">
                <div class="col-lg-12">
                    <div class="profile card card-body px-3 pt-3 pb-0">
                        <div class="profile-head">
                            <div class="photo-content">
                                <div class="cover-photo rounded"></div>
                            </div>
                            <div class="profile-info">
                                <a href="#" class="brand-logo">
                                    <img src="{{ $mentor->user->photo }}" alt="" srcset="" width="70" height="60"
                                        class="">
                                </a>
                                <div class="profile-details">
                                    <div class="profile-name px-3 pt-2">
                                        <h4 class="text-primary mb-0">{{ $mentor->user->prenom }}
                                            {{ $mentor->user->nom }}</h4>
                                        <p>
                                            {{ $mentor->user->adresse }}</p>
                                    </div>
                                    <div class="profile-email px-2 pt-2">
                                        <h4 class="text-muted mb-0">{{ $mentor->user->email }}</h4>
                                        <p>
                                            {{ $mentor->user->telephone }}</p>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> --}}
{{-- <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="profile card  pb-0">
                            <div class="profile-head">
                                <div class="photo-content">
                                    <div class="cover-photo rounded" style="border-radius: 20px 20px 0 0"></div>
                                </div>
                                <div class="profile-info">
                                    <div class="profile-photo">
                                        <img src="{{ $mentor->user->photo }}" class="img-fluid rounded-circle"
                                            alt="" style="border: 7px white solid;">
                                    </div>
                                    <div class="profile-details">
                                        <div class="profile-name px-4 pt-2">
                                            <h4 class="text-primary mb-0" style="font-size: 30px; padding-top: ">
                                                {{ $mentor->user->prenom }}
                                            {{ $mentor->user->nom }}</h4>
                                        </div>
                                        <div style="height: 60px; width: 1.5px; background: #dcdfe3; margin-top: 5px;">
                                        </div>
                                        <div class="profile-email px-4 pt-2">
                                            <p>Adresse</p>
                                            <h4 class="text-muted mb-0">{{ $mentor->user->adresse }}</h4>
                                        </div>
                                        <div style="height: 60px; width: 1.5px; background: #dcdfe3; margin-top: 5px;">
                                        </div>
                                        <div class="profile-email px-4 pt-2">
                                            <p>Téléphone</p>
                                            <h4 class="text-muted mb-0">{{ $mentor->user->telephone }}</h4>

                                        </div>
                                        <div style="height: 60px; width: 1.5px; background: #dcdfe3; margin-top: 5px;">
                                        </div>
                                        <div class="profile-email px-4 pt-2">
                                            <p>Email</p>
                                            <h4 class="text-muted mb-0">{{ $mentor->user->email }}</h4>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> --}}
{{-- <div class="row">
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
                                                <a href="javascript:void();;"
                                                    class="btn btn-primary mb-1 me-1">Follow</a>
                                                <a href="javascript:void();;" class="btn btn-primary mb-1"
                                                    data-bs-toggle="modal" data-bs-target="#sendMessageModal">Send
                                                    Message</a>
                                            </div>
                                        </div>
                                        <!-- Modal -->
                                        <div class="modal fade" id="sendMessageModal">
                                            <div class="modal-dialog modal-dialog-centered" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title">Send Message</h5>
                                                        <button type="button" class="btn-close"
                                                            data-bs-dismiss="modal"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form class="comment-form">
                                                            <div class="row">
                                                                <div class="col-lg-6">
                                                                    <div class="mb-3">
                                                                        <label
                                                                            class="text-black font-w600 form-label">Name
                                                                            <span class="required">*</span></label>
                                                                        <input type="text" class="form-control"
                                                                            value="Author" name="Author"
                                                                            placeholder="Author">
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-6">
                                                                    <div class="mb-3">
                                                                        <label
                                                                            class="text-black font-w600 form-label">Email
                                                                            <span class="required">*</span></label>
                                                                        <input type="text" class="form-control"
                                                                            value="Email" placeholder="Email"
                                                                            name="Email">
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-12">
                                                                    <div class="mb-3">
                                                                        <label
                                                                            class="text-black font-w600 form-label">Comment</label>
                                                                        <textarea rows="8" class="form-control" name="comment" placeholder="Comment"></textarea>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-12">
                                                                    <div class="mb-3 mb-0">
                                                                        <input type="submit" value="Post Comment"
                                                                            class="submit btn btn-primary"
                                                                            name="submit">
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
                                        <img src="images/profile/1.jpg" alt=""
                                            class="img-fluid mt-4 mb-4 w-100">
                                        <h4><a href="post-details.html" class="text-black">Darwin Creative Agency
                                                Theme</a></h4>
                                        <p class="mb-0">A small river named Duden flows by their place and supplies
                                            it with the necessary regelialia. It is a paradisematic country, in which
                                            roasted parts of sentences fly into your mouth.</p>
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
                                            <img src="/images/profile/5.jpg" alt="image" class="me-3 rounded"
                                                width="75">
                                            <div class="media-body">
                                                <h5 class="m-b-5"><a href="post-details.html"
                                                        class="text-black">Collection of textile samples</a></h5>
                                                <p class="mb-0">I shared this on my fb wall a few months back, and I
                                                    thought.</p>
                                            </div>
                                        </div>
                                        <div class="media pt-3 pb-3">
                                            <img src="/images/profile/6.jpg" alt="image" class="me-3 rounded"
                                                width="75">
                                            <div class="media-body">
                                                <h5 class="m-b-5"><a href="post-details.html"
                                                        class="text-black">Collection of textile samples</a></h5>
                                                <p class="mb-0">I shared this on my fb wall a few months back, and I
                                                    thought.</p>
                                            </div>
                                        </div>
                                        <div class="media pt-3 pb-3">
                                            <img src="/images/profile/7.jpg" alt="image" class="me-3 rounded"
                                                width="75">
                                            <div class="media-body">
                                                <h5 class="m-b-5"><a href="post-details.html"
                                                        class="text-black">Collection of textile samples</a></h5>
                                                <p class="mb-0">I shared this on my fb wall a few months back, and I
                                                    thought.</p>
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
                                <img src="images/profile/8.jpg" alt="" class="img-fluid mb-3 w-100 rounded">
                                <p>A wonderful serenity has take possession of my entire soul like these sweet morning
                                    of spare which enjoy whole heart.A wonderful serenity has take possession of my
                                    entire soul like these sweet morning of spare which enjoy whole heart.</p>
                                <p>A collection of textile samples lay spread out on the table - Samsa was a travelling
                                    salesman - and above it there hung a picture that he had recently cut out of an
                                    illustrated magazine and housed in a nice, gilded frame.</p>
                                <blockquote>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                    Has been the industry's standard text ever since the 1500s, when an unknown printer
                                    took a galley of type and scrambled it to make a type specimencenturies.
                                </blockquote>
                                <p>A wonderful serenity has taken possession of my entire soul, like these sweet
                                    mornings of spring which I enjoy with my whole heart. I am alone, and feel the charm
                                    of existence was created for the bliss of souls like mine.I am so happy, my dear
                                    friend, so absorbed in the exquisite sense of mere tranquil existence, that I
                                    neglect my talents.</p>
                                <div class="profile-skills mt-5 mb-5">
                                    <h4 class="comment-reply-title text mb-3" id="reply-title" style="color: black">
                                        Domaines </h4>
                                    <a href="javascript:void();;"
                                        class="btn btn-primary light btn-xs mb-1">{{ $mentor->domaine->nomDomaine  }}</a>
                                    <a href="javascript:void();;"
                                        class="btn btn-primary light btn-xs mb-1">Photoshop</a>
                                    <a href="javascript:void();;"
                                        class="btn btn-primary light btn-xs mb-1">Bootstrap</a>
                                    <a href="javascript:void();;"
                                        class="btn btn-primary light btn-xs mb-1">Responsive</a>
                                    <a href="javascript:void();;" class="btn btn-primary light btn-xs mb-1">Crypto</a>
                                </div>
                                <div class="comment-respond" id="respond">
                                    <h4 class="comment-reply-title text mb-3" id="reply-title" style="color: black">
                                        Connecter avec le mentor </h4>
                                    <form class="comment-form" id="commentform" method="post">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="mb-3">
                                                    <a href="/mentores/{{ Auth::user()->mentore->id }}/connecte/{{ $mentor->id }}"
                                                        class="btn btn-primary mb-1" 
                                                        data-bs-target="#sendMessageModal">Se Connecter</a>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> --}}
{{-- </div>
    </div>
    @include('site.footer')
    <script src="/vendor/global/global.min.js"></script>
    <script src="/vendor/jquery-nice-select/js/jquery.nice-select.min.js"></script>
    <script src="/js/custom.min.js"></script>
    <script src="/js/dlabnav-init.js"></script>
    <script src="/js/demo.js"></script>
    <script src="/js/styleSwitcher.js"></script>

</body>

</html> --}}


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="admin, dashboard">
    <meta name="author" content="DexignZone">
    <meta name="robots" content="index, follow">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Dompet : Payment Admin Template">
    <meta property="og:title" content="Dompet : Payment Admin Template">
    <meta property="og:description" content="Dompet : Payment Admin Template">
    <meta property="og:image" content="https://dompet.dexignlab.com/xhtml/social-image.png">
    <meta name="format-detection" content="telephone=no">

    <!-- PAGE TITLE HERE -->
    <title>Details</title>

    <!-- FAVICONS ICON -->
    <link rel="shortcut icon" type="image/png" href="images/favicon.png">
    <link href="/vendor/jquery-nice-select/css/nice-select.css" rel="stylesheet">
    <link href="/vendor/lightgallery/css/lightgallery.min.css" rel="stylesheet">
    <link href="/css/style.css" rel="stylesheet">
</head>

<body style="background-color: #f5f5f5;">
    <div id="main-wrapper">
        @include('site.nav')
        <div class="content" style="justify-content: center; padding: 100px 200px 0 200px;">
            <div class="row">
                <div class="col-lg-12">
                    <div class="profile card card-body px-3 pt-3 pb-0">
                        <div class="profile-head">
                            <div class="photo-content">
                                <div class="cover-photo rounded"></div>
                            </div>
                            <div class="profile-info">
                                <div class="profile-photo">
                                    <img src="{{ $mentor->user->photo }}" class="img-fluid rounded-circle"
                                        alt="" style="border: 7px white solid;">
                                </div>
                                <div class="profile-details">
                                    <div class="profile-name px-3 pt-2">
                                        <h4 class="text-primary mb-0">{{ $mentor->user->prenom }}
                                            {{ $mentor->user->nom }}</h4>

                                    </div>
                                    <div style="height: 80px; width: 4px; background: #dcdfe3;">
                                    </div>

                                    <div class="profile-email px-4 pt-2">
                                        <p>Email</p>
                                        <h4 class="text-muted mb-0"
                                            style="font-family: 'Times New Roman', Times, serif;">
                                            {{ $mentor->user->email }}</h4>

                                    </div>
                                    <div style="height: 80%; width: 4px; background: #dcdfe3;">
                                    </div>
                                    <div class="profile-email px-4 pt-2">
                                        <p>Téléphone</p>
                                        <h4 class="text-muted mb-0"
                                            style="font-family: 'Times New Roman', Times, serif;">
                                            {{ $mentor->user->telephone }}</h4>
                                    </div>
                                </div>
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
                                                    <h3 class="m-b-0">150</h3><span>Mentores</span>
                                                </div>
                                                <div class="col">
                                                    <h3 class="m-b-0">140</h3><span>Sessions Annuler</span>
                                                </div>
                                                <div class="col">
                                                    <h3 class="m-b-0">45</h3><span>Session Corriger</span>
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
                                    <div class="profile-news">
                                        <h5 class="text-primary d-inline">Mes Mentorés</h5>
                                        @foreach ($connexions as $connexion)
                                            <div class="media pt-3 pb-3">
                                                <img src="{{ asset($connexion->mentore->user->photo) }}" alt="image"
                                                    class="me-3 rounded" width="75">
                                                <div class="media-body">
                                                    <h5 class="m-b-5"><a href="post-details.html"
                                                            class="text-black">{{ $connexion->mentore->user->prenom }}
                                                            {{ $connexion->mentore->user->nom }}</a></h5>
                                                    <p class="mb-0">Email : {{ $connexion->mentore->user->email }}</p>
                                                    <p class="mb-0">Telephone :
                                                        {{ $connexion->mentore->user->telephone }}</p>
                                                    <p class="mb-0">Niveau :
                                                        {{ $connexion->mentore->niveau->libelle }}</p>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                            <div class="comment-respond" id="respond">
                                <h4 class="comment-reply-title text mb-3" id="reply-title" style="color: black">
                                    Connecter avec le mentor </h4>
                                <form class="comment-form" id="commentform" method="post">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="mb-3">
                                                <a href="/mentores/{{ Auth::user()->mentore->id }}/connecte/{{ $mentor->id }}"
                                                    class="btn btn-primary mb-1" data-bs-target="#sendMessageModal">Se
                                                    Connecter</a>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-xl-8">
                    <div class="card">
                        <div class="card-body">

                            <div class="profile-about-me">
                                <div class="pt-4 border-bottom-1 pb-3">
                                    <h4 class="text-primary" style="color: #C15DFB !important;">A Propos de Moi</h4>
                                    <p class="mb-2">A wonderful serenity has taken possession of my
                                        entire soul, like these sweet mornings of spring which I enjoy
                                        with my whole heart. I am alone, and feel the charm of existence
                                        was created for the bliss of souls like mine.I am so happy, my
                                        dear friend, so absorbed in the exquisite sense of mere tranquil
                                        existence, that I neglect my talents.</p>
                                    <p>{{ $mentor->parcours }}</p>
                                </div>
                            </div>
                            <div class="profile-skills mb-5">
                                <h4 class="text-primary mb-2" style="color:#C15DFB !important;">Domaines</h4>
                                <a href="javascript:void(0);"
                                    class="btn btn-primary light btn-xs mb-1">Mathematique</a>
                                <a href="javascript:void(0);" class="btn btn-primary light btn-xs mb-1">Physique
                                    Chimie</a>
                                <a href="javascript:void(0);" class="btn btn-primary light btn-xs mb-1">SVT</a>
                            </div>
                            <div class="profile-personal-info">
                                <h4 class="text-primary mb-4" style="color:#C15DFB !important;">Informations
                                    Personnelles</h4>
                                <div class="row mb-2">
                                    <div class="col-sm-3 col-5">
                                        <h5 class="f-w-500">Nom et Prenom <span class="pull-end">:</span>
                                        </h5>
                                    </div>
                                    <div class="col-sm-9 col-7"><span>{{ $mentor->user->prenom }}
                                            {{ $mentor->user->nom }}</span>
                                    </div>
                                </div>
                                <div class="row mb-2">
                                    <div class="col-sm-3 col-5">
                                        <h5 class="f-w-500">Email <span class="pull-end">:</span>
                                        </h5>
                                    </div>
                                    <div class="col-sm-9 col-7"><span>{{ $mentor->user->email }}</span>
                                    </div>
                                </div>
                                <div class="row mb-2">
                                    <div class="col-sm-3 col-5">
                                        <h5 class="f-w-500">Availability <span class="pull-end">:</span></h5>
                                    </div>
                                    <div class="col-sm-9 col-7"><span>Full Time (Free Lancer)</span>
                                    </div>
                                </div>
                                <div class="row mb-2">
                                    <div class="col-sm-3 col-5">
                                        <h5 class="f-w-500">Date de Naissance <span class="pull-end">:</span>
                                        </h5>
                                    </div>
                                    <div class="col-sm-9 col-7">
                                        <span>{{ $mentor->user->dateNaissance }}</span>
                                    </div>
                                </div>
                                <div class="row mb-2">
                                    <div class="col-sm-3 col-5">
                                        <h5 class="f-w-500">Adresse <span class="pull-end">:</span>
                                        </h5>
                                    </div>
                                    <div class="col-sm-9 col-7">
                                        <span>{{ $mentor->user->adresse }}</span>
                                    </div>
                                </div>
                                <div class="row mb-2">
                                    <div class="col-sm-3 col-5">
                                        <h5 class="f-w-500">Nombre d'années d'expérience <span
                                                class="pull-end">:</span></h5>
                                    </div>
                                    <div class="col-sm-9 col-7"><span>{{ $mentor->experience }} années
                                            Experiences</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>


                </div>

            </div>
        </div>
    </div>
    @include('site.footer')
    </div>
    <!-- Required vendors -->
    <script src="/vendor/global/global.min.js"></script>
    <script src="/vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
    <script src="/vendor/jquery-nice-select/js/jquery.nice-select.min.js"></script>
    <script src="/vendor/chart.js/Chart.bundle.min.js"></script>
    <script src="/vendor/lightgallery/js/lightgallery-all.min.js"></script>
    <script src="/js/custom.min.js"></script>
    <script src="/js/dlabnav-init.js"></script>
    <script src="/js/demo.js"></script>
    <script src="/js/styleSwitcher.js"></script>


</body>

</html>
