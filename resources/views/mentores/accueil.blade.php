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

    <title>Blog des Mentors inscrits dans la plateforme</title>

    <link rel="/shortcut icon" type="image/png" href="images/favicon.png">
    <link href="/vendor/jquery-nice-select/css/nice-select.css" rel="stylesheet">
    <link href="/css/style.css" rel="stylesheet">

</head>

<style>
    *,
    ::after,
    ::before {
        box-sizing: border-box;
    }


    body {
        font-family: var(--thm-b-font);
        font-weight: normal;
        font-style: normal;
        color: #77838F;
        font-size: 14px;
        line-height: 1.6;
    }

    @media (max-width: 767.98px) {
        .mentor-widget {
            -ms-flex-direction: column;
            flex-direction: column;
            text-align: center;
        }
    }

    .mentor-widget {
        display: flex;
        padding: 1.5rem;
        margin-bottom: 1.875rem;
        border: 1px solid #e3e8eb;
        border-radius: 0.4rem;
    }

    @media (max-width: 767.98px) {
        .user-info-left {
            -ms-flex-direction: column;
            flex-direction: column;
            margin: 0 auto;
            display: block;
        }
    }

    @media (max-width: 767.98px) {
        .mentor-widget {
            text-align: center;
        }
    }

    @media (max-width: 767.98px) {
        .mentor-img {
            margin: 0 auto 20px auto;
        }
    }

    .mentor-img {
        -ms-flex: 0 0 150px;
        flex: 0 0 150px;
        height: 150px;
        width: 150px;
        margin-right: 20px;
    }


    @media (max-width: 767.98px) {
        .mentor-widget {
            text-align: center;
        }
    }

    a {
        color: #090761;
        text-decoration: none;
        outline: none;
        transition: .3s;

        background-color: transparent;
    }

    .mentor-img img {
        border-radius: .4rem;
    }


    .img-fluid {
        max-width: 100%;
        height: auto;
    }

    img {
        vertical-align: middle;
        border-style: none;
    }

    @media (max-width: 767.98px) {
        .user-info-cont {
            text-align: center;
        }
    }

    @media (max-width: 767.98px) {
        .mentor-widget .user-info-cont h3 {
            margin: 0 auto 5px;
            float: none;
            text-align: center;
        }
    }

    .mentor-widget .user-info-cont h3 {
        margin-bottom: 5px;
        font-size: 20px;
        font-weight: 500;
        line-height: 22px;
        display: inline-flex;
    }

    h3 {
        overflow-wrap: break-word;
    }

    @media (max-width: 767.98px) {
        .mentor-widget .user-info-cont h3 a {
            float: none;
        }
    }

    .mentor-widget .user-info-cont h3 a {
        float: left;
        max-width: 90%;
        white-space: nowrap;
        line-height: inherit;
        text-overflow: ellipsis;
        text-transform: capitalize;
        color: var(--terthemecolor);
    }

    @media (max-width: 767.98px) {
        .mentor-widget .user-info-cont h3 {
            text-align: center;
        }
    }

    .mentor-widget .user-info-cont h3 {
        font-size: 20px;
        font-weight: 500;
        line-height: 22px;
    }

    .mentor-widget .user-info-cont h3 i {
        background-color: #24E14D;
        color: #fff;
        margin-left: 5px;
        width: 20px;
        height: 20px;
        border-radius: 50%;
        text-align: center;
        line-height: 20px;
        font-size: 10px;
    }

    .fa,
    .fas {
        font-family: 'Font Awesome 5 Free';
        font-weight: 900;
    }

    .user-tag {
        font-size: 14px;
        color: #77838F;
        margin-bottom: 10px;
        display: inline-block;
        width: 100%;
    }

    .mentor-widget {
        display: flex;
        padding: 1.5rem;
        margin-bottom: 1.875rem;
        border: 1px solid #e3e8eb;
        border-radius: 0.4rem;
    }

    .user-info-left {
        display: flex;
    }

    .page-content {
        padding: 60px 0;
    }

    *,
    ::after,
    ::before {
        box-sizing: border-box;
    }

    .user-tag a {
        color: #77838F;
    }

    .user-info-right {
        margin-left: auto;
        -ms-flex: 0 0 150px;
        flex: 0 0 150px;
        max-width: 150px;
        padding: 0;
        min-width: 150px;
    }

    .user-infos {
        margin-bottom: 15px;
    }

    .user-booking a {
        background-color: #1e88e5;
        border: 1px solid #1e88e5;
        border-radius: 0.4rem;
        color: #fff;
        font-weight: 500;
        padding: 10px 30px;
        text-align: center;
        text-transform: capitalize;
        width: 100%;
        display: block;
    }

    @media print,
    screen and (min-width: 40em) {
        .container {
            padding-right: 1rem;
            padding-left: 1rem;
        }
    }

    @media print,
    screen and (min-width: 40em) {
        h1 {
            font-size: 2.619047619rem;
            line-height: 1.4;
            color: inherit;
            font-weight: 700;
        }
    }

    .grid:before {
        order: 9999;
        content: "";
        width: 25%;
        height: 0;
        background-color: #fff;
        flex-shrink: 1;
    }

    @media (max-width: 1024px) {

        .grid .grid-slider li,
        .grid li {
            width: calc(50% - 20px);
            padding: 30px 15px 60px;
        }

    }

    .grid li {
        margin: 0 10px 24px;
        box-shadow: 0 3px 6px rgb(0 0 0 / 10%);
        border-radius: 12px;
        overflow: hidden;
        text-align: center;
        font-size: 16px;
        color: #8b8b8b;
        background-color: #fff;
        position: relative;
    }

    .custom-btn.bg-red:before {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background-color: rgba(231, 76, 60, .8);
        border-radius: 24px;
        z-index: -1;
        transition: left .3s, right .3s, top .3s, bottom .3s;
        box-shadow: 0 3px 6px rgb(0 0 0 / 10%);
    }
</style>

<body style="background-color: #f9fbfd;">

    @include('site.nav')

    <header class="washed-row--tertiary"
        style="background-color: #C15DFB;color: #fefefe;padding-bottom: 1.5rem;padding-top: 100px;">
        <div class="container"style="max-width: 71.4285714286rem;margin-left: auto; margin-right: auto;">
            <h1 style="color: white; margin-bottom: 0.5rem; margin-top: 0;">Trouver des Mentors et Connectés Vous</h1>
            <p class="lead"
                style="font-size: 131.25%;line-height: 1.6; display: block;margin-block-start: 1em; margin-block-end: 1em;margin-inline-start: 0px; margin-inline-end: 0px;">
                Nous avons trié ces résultats de recherche en fonction de leur pertinence par rapport à votre profil.
                Lorsque vous voyez quelqu'un qui semble convenir, Connectez avec lui et envoyez un message !
            </p>
        </div>
    </header>

    <div style=" margin-top: 50px;">
        <h4 style="text-align: center; margin-bottom: 30px; font-weight: bold;">Rechercher par Mentor ou par Domaine
        </h4>
        <div class="input-group">
            <input type="search" class="form-control rounded" placeholder="Rechercher un mentor ou un domaine"
                aria-label="Search" aria-describedby="search-addon" />
            <button type="button" class="btn btn-outline" style="background: #C15DFB;color: white">Recherche</button>
        </div>
    </div>
    
    <section id="courses" class="courses">
        <div class="container" data-aos="fade-up">
            <div class="row" data-aos="zoom-in" data-aos-delay="100">
                @foreach ($mentors as $mentor)
                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                        <div class="course-item" style="margin: 2px ;
                                    box-shadow: 0 3px 6px rgb(0 0 0 / 10%);
                                    border-radius: 12px;
                                    overflow: hidden;
                                    margin-bottom: 30px;
                                    text-align: center;
                                    font-size: 16px;
                                    color: #8b8b8b;
                                    background-color: #fff;">

                            <img src="{{ $mentor->user->photo }}" class="img-fluid" alt="..."  style="background-size: cover;
                            width: 112px;
                            height: 112px;

                            border-radius: 50%;
                            overflow: hidden;
                            border: 4px solid #C15DFB;
                            margin: 40px auto 36px;">
                            <div class="course-content">
                                

                                <h3><a href="#">{{ $mentor->user->prenom }} {{ $mentor->user->nom }}</a></h3>
                                <h3> {{ $mentor->user->email }}</h3>
                                <h3> {{ $mentor->user->telephone }}</h3>
                                <h3> {{ $mentor->user->adresse }}</h3>
                                <p>Et architecto provident deleniti facere repellat nobis iste. Id facere quia quae dolores
                                    dolorem tempore.</p>
                                
                                    <div class="trainer d-flex justify-content-center align-items-center">
                                        <a href="/mentors/{{ $mentor->id }}/details"><button type="button" class="btn " data-toggle="button" aria-pressed="false" style=" background-color: #C15DFB;color: #fff"
                                            autocomplete="off">
                                            Voir Profil
                                        </button></a>
                                  
                                </div>
                               
                            </div>
                        </div>
                    </div>
            @endforeach
            </div>

        </div>
    </section><!-- End Courses Section -->

    @include('site.footer')

</body>

</html>
