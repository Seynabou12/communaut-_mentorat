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

<body style="background-color: #f8fcff;">

    @include('site.nav')

    <section class="section section-search"
        style="background-image: url(../../images/banner.jpg);
                background-size: cover !important;
                background-repeat: no-repeat;
                background-position: center;
                position: relative;
                margin-top: 80px;
                padding: 70px 0 0;">
        <div class="container"
            style="width: 100%;
                padding-right: var(--bs-gutter-x,.75rem);
                padding-left: var(--bs-gutter-x,.75rem);
                margin-right: auto;
                margin-left: auto;">
            <div class="banner-wrapper m-auto text-center"
                style="text-align: center!important;     margin: auto!important;">
                <div class="banner-header" style="margin-bottom: 30px;     font-weight: 600;">
                    <h1
                        style="font-weight: 600;color: #544D85; max-width: 425px; margin: 0 auto 15px; line-height: 1.2;">
                        Recherche enseignant en rendez-vous de <span style=" color: #C15DFB;">Mentorat</span> </h1>
                    <p
                        style=" margin-bottom: 35px;
                            color: #544D85;       display: block;
                            margin-block-start: 1em;
                            margin-block-end: 1em;
                            margin-inline-start: 0px;
                            margin-inline-end: 0px;">
                        Découvrez les meilleurs mentors et &amp; institutions de la ville la plus proche de chez vous.
                    </p>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <select class="form-select" aria-label="Default select example"
                            style=" padding: 10px;
                                position: relative;
                                background-color: #fff;
                                border: 1px solid rgba(95, 75, 226, 0.1);
                                box-shadow: 0px 4px 14px rgb(192 192 192 / 25%);
                                border-radius: 10px;
                                display: block;
                                margin-bottom: 10px;
                                width: 100%;
                                font-weight: 400;
                                line-height: 1.5;">
                            <option selected>Domaine du mentors</option>
                            @foreach ($domaines as $domaine)
                                <option value="{{ $domaine->id }}">
                                    {{ $domaine->nomDomaine }}</option>
                            @endforeach
                        </select>

                    </div>
                    <div class="col-md-8">

                        <div class="input-group">
                            <input type="search" class="form-control rounded"
                                placeholder="Rechercher un mentor ou un domaine" aria-label="Search"
                                aria-describedby="search-addon" />
                            <button type="button" class="btn btn-outline"
                                style="background: #C15DFB;color: white">Recherche</button>
                        </div>


                    </div>
                    {{-- <div class="col-md-8">
                        <div class="search-box">
                            <form action="search.html"
                                style="display: block;
                                    margin-top: 0em;">
                                <div class="form-search"
                                    style="position: relative;
                                    max-width: 850px;
                                    width: 100%;
                                    margin: 0 auto;">
                                    <div class="form-inner"
                                        style=" padding: 10px;
                                            margin-bottom: -150px;
                                            position: relative;
                                            background-color: #fff;
                                            border: 1px solid rgba(95, 75, 226, 0.1);
                                            box-shadow: 0px 4px 14px rgb(192 192 192 / 25%);
                                            border-radius: 100px;
                                            width: 100%;     display: block;
                                            width: 100%;
                                            font-weight: 400;
                                            line-height: 1.5;">
                                        <div class="form-group search-info"
                                            style="margin-bottom: 0;
                                                position: relative; color: #26292c;
                                                min-height: 42px;
                                                padding: 6px 15px;">
                                            <input type="text" class="form-control"
                                                style="border: 0;
                                                    padding-left: 37px;
                                                    border-radius: 50px;
                                                    font-size: 14px;"
                                                placeholder="Search School, Online educational centers, etc">
                                        </div>
                                        <button type="submit" class="btn btn-secondary search-btn mt-0"
                                            style="height: 76px;
                                            padding: 0 20px;
                                            box-shadow: 0px 4px 14px rgb(192 192 192 / 25%);
                                            border-radius: 100px;
                                            line-height: 76px;
                                            font-weight: bold;
                                            font-size: 20px; float: right;
                                            width: 23%;     background-color: #C15DFB;
                                            border: 1px solid #C15DFB; color: #fff; text-align: center;
                                            text-decoration: none;
                                            vertical-align: middle;">Search
                                            <i class="fas fa-long-arrow-alt-right"></i></button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div> --}}

                </div>


            </div>
        </div>
    </section>

    <section id="courses" class="courses">
        <div class="container" data-aos="fade-up">
            <div class="row" data-aos="zoom-in" data-aos-delay="100">
                @foreach ($mentors as $mentor)
                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                        <div class="course-item"
                            style="margin: 2px ;
                                    box-shadow: 0 3px 6px rgb(0 0 0 / 10%);
                                    border-radius: 12px;
                                    overflow: hidden;
                                    margin-bottom: 30px;
                                    text-align: center;
                                    font-size: 16px;
                                    color: #8b8b8b;
                                    background-color: #fff;">

                            <img src="{{ $mentor->user->photo }}" class="img-fluid" alt="..."
                                style="background-size: cover;
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
                                <p>Et architecto provident deleniti facere repellat nobis iste. Id facere quia quae
                                    dolores
                                    dolorem tempore.</p>

                                <div class="trainer d-flex justify-content-center align-items-center">
                                    <a href="/mentors/{{ $mentor->id }}/details"><button type="button" class="btn "
                                            data-toggle="button" aria-pressed="false"
                                            style=" background-color: #C15DFB;color: #fff" autocomplete="off">
                                            Voir Profil
                                        </button></a>

                                </div>

                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

        </div>
    </section>



    @include('site.footer')

</body>

</html>
