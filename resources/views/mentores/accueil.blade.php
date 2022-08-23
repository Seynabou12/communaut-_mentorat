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
    <title>Dompet : Payment Admin Template</title>

    <!-- FAVICONS ICON -->
    <link rel="shortcut icon" type="image/png" href="images/favicon.png">
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
</style>

<body>

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

    <section class="profile-list" style="padding-bottom: 1.5rem;padding-top: 1.5rem;">
        <div class="container-fluid row"
            style="max-width: 100rem;margin-left: auto; margin-right: auto;display: flex; flex-flow: row wrap; justify-content: center;">
            @foreach ($mentors as $mentor)
                <article class="profile-card col-md-4 col-sm-6 col-lg-3"
                    style="position: relative;word-break: break-word;display: flex; margin-left: 20px;
                            flex-direction: column; margin-bottom: 2rem;border: 1px solid #e3e6e8;
                            border-radius: 2px; background: #fefefe;
                            box-shadow: #e3e6e8;
                            box-shadow: 0 0 9px 0 rgb(92 158 214 / 10%);color: #0a0a0a;overflow: visible;">
                    <header class="profile-card__overview"
                        style="flex: 0 0 auto; word-break: break-word; padding: 1.5rem; display: flex; flex-direction: row;">
                        <div class="profile-card__organization" style="position: absolute; top: -1rem;right: 1rem;">
                        </div>
                        <div class="profile-card__image" style="margin-right: 1rem; margin: 0;padding: 0;";>
                            <a href="#"
                                style="line-height: inherit; color: #0266b7;text-decoration: none; cursor: pointer;background-color: transparent;">
                                <img src="{{ $mentor->user->photo }}" class="avatar--small" alt="[NN]"
                                    style="display: block;margin: auto; width: 70px; height: 70px; border-radius: 50%; border: 2px solid #C15DFB;">
                            </a>
                        </div>
                        <div class="profile-card__about" style=" margin-right: 50px;">
                            <font >
                                <a href="#" class="text-tertiary">
                                    <h3 style="vertical-align: inherit;">
                                        <h4 style="vertical-align: inherit;" >
                                            {{ $mentor->user->prenom }} {{ $mentor->user->nom }}
                                        </h4>
                                    </h3>
                                </a>
                            </font>
                            <font class="">
                                <ul class="list--comma-separated" >
                                    <li>
                                        <h5 style="vertical-align: inherit;">
                                            <h5 style="vertical-align: inherit;">{{ $mentor->user->telephone }}</h5>
                                        </h5>
                                    </li>
                                    <li>
                                        <h5 style="vertical-align: inherit;">
                                            <h5 style="vertical-align: inherit;">{{ $mentor->user->email }}</h5>
                                        </h5>
                                    </li>
                                    <li>
                                        <h5 style="vertical-align: inherit;">
                                            <h5 style="vertical-align: inherit;">{{ $mentor->user->adresse }}</h5>
                                        </h5>
                                    </li>
                                </ul>
                            </font>

                        </div>
                    </header>
                    <section class="profile-card__expertise"
                        style="background-color: #f1f3f5; flex: 1 0 auto; word-break: break-word; padding: 1.5rem;">
                        <h4>
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">Comment je peux aider</font>
                            </font>
                        </h4>
                        <div class="profile-card__category-rating">
                            <div>
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">{{ $mentor->domaine->nomDomaine }}</font>
                                </font>
                            </div>
                            <div class="profile-card__progress-container">
                                <div class="tertiary progress profile-card__progress--mentor" role="progressbar"
                                    tabindex="0" aria-valuenow="70.0" aria-valuemin="0"
                                    aria-valuetext="70,0 pour cent" aria-valuemax="100">
                                    <div class="progress-meter" style="width: 70.0%">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="profile-card__category-rating">
                            <div>
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">Commercialisation</font>
                                </font>
                            </div>
                            <div class="profile-card__progress-container">
                                <div class="tertiary progress profile-card__progress--mentor" role="progressbar"
                                    tabindex="0" aria-valuenow="21.428571428571427" aria-valuemin="0"
                                    aria-valuetext="21,428571428571427 pour cent" aria-valuemax="100">
                                    <div class="progress-meter" style="width: 21.428571428571427%">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="profile-card__category-rating">
                            <div>
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">Démarrage</font>
                                </font>
                            </div>
                            <div class="profile-card__progress-container">
                                <div class="tertiary progress profile-card__progress--mentor" role="progressbar"
                                    tabindex="0" aria-valuenow="33.33333333333333" aria-valuemin="0"
                                    aria-valuetext="33,33333333333333 pour cent" aria-valuemax="100">
                                    <div class="progress-meter" style="width: 33.33333333333333%">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="profile-card__category-rating">
                            <div>
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">Durabilité</font>
                                </font>
                            </div>
                            <div class="profile-card__progress-container">
                                <div class="tertiary progress profile-card__progress--mentor" role="progressbar"
                                    tabindex="0" aria-valuenow="25.0" aria-valuemin="0"
                                    aria-valuetext="25,0 pour cent" aria-valuemax="100">
                                    <div class="progress-meter" style="width: 25.0%">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <footer class="profile-card__actions background-whisper"
                        style="justify-content: flex-end;
                                align-items: flex-end;
                                display: flex;
                                flex-flow: row nowrap;
                                flex: 1 0 auto;
                                word-break: break-word;
                                background-color: #f1f3f5 !important;
                                padding: 0 1rem 1.5rem 1rem;">
                        <div class="d-flex">
                            <a href="/mentors/{{ $mentor->id }}/details">
                                <button type="button" class="btn btn-outline "
                                    style="background: transparent; border: 1px solid #C15DFB; color: black;">Voir
                                    Profil</button>
                            </a>
                        </div>
                    </footer>
                </article>
            @endforeach
        </div>
    </section>

    @include('site.footer')

    {{-- <div class="d-md-grid grid-cols-3 mx-n3" style="margin-left: -1rem !important;margin-right: -1rem !important;">


        <div class="slide p-3 " data-test="collaborate-profile-card-component"
            style="cursor: pointer;padding: 1rem !important;">
            <div class="card carousel-card rounded border border-secondary"
                id="collaborate-profile-card-e02f148a-f0f3-4c27-a8e5-849c01217fc5" data-controller="card-navigation"
                data-card-navigation-navigation-url-value="/scraly" data-action="click->card-navigation#cardClick"
                style="border-radius: 0.5rem !important;position: relative;
                display: flex;
                flex-direction: column;
                min-width: 0px;
                overflow-wrap: break-word;
                background-color: rgb(255, 255, 255);
                background-clip: border-box;
                border-width: 1px !important;
                height: 140px;
                width: 100%;
                border-style: solid !important;">
                <header class="carousel-card-header rounded-top bg-secondary"
                    style="border-top-left-radius: 0.5rem !important;
                border-top-right-radius: 0.5rem !important;">
                </header>
                <div class="carousel-card-avatar -rounded-circle -centered">
                    <a data-turbo-frame="_top" href="/scraly">
                        <div class="avatar-background avatar-background-size-xl-3 rounded-circle">
                            <div class="avatar rounded-circle avatar-size-xl-3">
                                <span class="avatar-image">
                                    <img data-test="available-profile-avatar" data-controller="lazy-image-loader"
                                        data-lazy-image-loader-src-value="https://polywork-images-proxy.imgix.net/https%3A%2F%2Fwww.polywork.com%2Fscraly%2Favatar%3Fversion%3Df4d528cf8c5426e57898399d6b50f566?ixlib=rails-4.2.0&amp;w=128&amp;h=128&amp;fit=crop&amp;auto=format&amp;s=6588572dfbceca12ddbdcaa69a8c4344"
                                        src="https://polywork-images-proxy.imgix.net/https%3A%2F%2Fwww.polywork.com%2Fscraly%2Favatar%3Fversion%3Df4d528cf8c5426e57898399d6b50f566?ixlib=rails-4.2.0&amp;w=128&amp;h=128&amp;fit=crop&amp;auto=format&amp;s=6588572dfbceca12ddbdcaa69a8c4344">
                                </span>
                            </div>
                        </div>

                    </a>
                </div>

                <div class="py-6 px-4 text-center">
                    <a data-turbo-frame="_top" class="d-inline-flex mw-100" href="/scraly">
                        <h4 class="pt-3 ellipsable text-default">
                            Aurélie Vache
                            <svg xmlns="http://www.w3.org/2000/svg" width="14px" height="14px"
                                viewBox="0 0 22 22" fill="none">
                                <path
                                    d="M22 11L19.56 8.21L19.9 4.52L16.29 3.7L14.4 0.5L11 1.96L7.6 0.5L5.71 3.69L2.1 4.5L2.44 8.2L0 11L2.44 13.79L2.1 17.49L5.71 18.31L7.6 21.5L11 20.03L14.4 21.49L16.29 18.3L19.9 17.48L19.56 13.79L22 11ZM8.38 15.01L6 12.61C5.61 12.22 5.61 11.59 6 11.2L6.07 11.13C6.46 10.74 7.1 10.74 7.49 11.13L9.1 12.75L14.25 7.59C14.64 7.2 15.28 7.2 15.67 7.59L15.74 7.66C16.13 8.05 16.13 8.68 15.74 9.07L9.82 15.01C9.41 15.4 8.78 15.4 8.38 15.01Z"
                                    fill="#582be8"></path>
                            </svg>

                        </h4>
                    </a>
                    <div class="caption-2 text-muted ellipsable line-height-body">
                        DevRel, OVHcloud
                    </div>

                    <div class="caption-1 text-muted my-3 d-flex align-items-center justify-content-center">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512" fill="currentColor"
                            class="fixed-icon-size--12px text-yellow mr-1 pw-icon pw-icon-coffee">
                            <!-- Font Awesome Pro 5.15.4 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) -->
                            <path
                                d="M192 384h192c53 0 96-43 96-96h32c70.6 0 128-57.4 128-128S582.6 32 512 32H120c-13.3 0-24 10.7-24 24v232c0 53 43 96 96 96zM512 96c35.3 0 64 28.7 64 64s-28.7 64-64 64h-32V96h32zm47.7 384H48.3c-47.6 0-61-64-36-64h583.3c25 0 11.8 64-35.9 64z">
                            </path>
                        </svg>

                        <span>
                            Open to mentoring
                        </span>
                    </div>

                    <a class="btn btn-outline-secondary align-items-center rounded" data-turbo-frame="modal_container"
                        data-test="collaborate-profile-card-component-cta"
                        href="/registration/flows/collaboration/7459?entrypoint=%2Fcollaborators%2Fmentoring">
                        <span class="d-block px-1">
                            Connect
                        </span>
                    </a>
                </div>
            </div>
        </div>


    </div> --}}
</body>

</html>
