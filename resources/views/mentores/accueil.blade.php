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
            font-family: futura-pt, "Source Sans Pro", Helvetica, Roboto, Arial, sans-serif;
            font-weight: 700;
        }
    }
</style>

<body>

    @include('site.nav')

    <header class="washed-row--tertiary"
        style="background-color: #C15DFB;
            color: #fefefe;
            padding-bottom: 1.5rem;
            padding-top: 100px;">
        <div class="container"
            style="max-width: 71.4285714286rem;
                margin-left: auto;
                margin-right: auto;">
            <h1 style="color: white; margin-bottom: 0.5rem; margin-top: 0;">Trouver des Mentors et Connectés Vous</h1>
            <p class="lead"
                style="font-size: 131.25%;
                    line-height: 1.6; display: block;
                    margin-block-start: 1em;
                    margin-block-end: 1em;
                    margin-inline-start: 0px;
                    margin-inline-end: 0px;">
                Nous avons trié ces résultats de recherche en fonction de leur pertinence par rapport à votre profil.
                Lorsque vous voyez quelqu'un qui semble convenir, Connectez avec lui et envoyez un message !</p>
        </div>
    </header>


    <div style="margin-left: 300px; margin-right: 300px; margin-top: 50px;">
        <h4 style="text-align: center; margin-bottom: 30px; font-weight: bold;">Rechercher par Mentor ou par Domaine
        </h4>
        <div class="input-group">
            <input type="search" class="form-control rounded" placeholder="Rechercher un mentor ou un domaine"
                aria-label="Search" aria-describedby="search-addon" />
            <button type="button" class="btn btn-outline" style="background: #C15DFB;color: white">Recherche</button>
        </div>
    </div>


    <section class="profile-list" style="padding-bottom: 1.5rem;
    padding-top: 1.5rem;">
        <div class="container"
            style="
        max-width: 71.4285714286rem;
        margin-left: auto;
        margin-right: auto;display: flex;
    flex-flow: row wrap;">
            @foreach ($mentors as $mentor)
                <article class="profile-card"
                    style="position: relative;
                            word-break: break-word;
                            display: flex;
                            margin-left: 20px;
                            flex-direction: column;
                            margin-bottom: 2rem;
                            border: 1px solid #e3e6e8;
                            border-radius: 2px;
                            background: #fefefe;
                            box-shadow: 0 0 9px 0 rgb(92 158 214 / 10%);
                            color: #0a0a0a;
                            overflow: visible;">

                    <header class="profile-card__overview"
                        style="flex: 0 0 auto;
    word-break: break-word;
    padding: 1.5rem;
    display: flex;
    flex-direction: row;">

                        <div class="profile-card__organization"
                            style="position: absolute;
            top: -1rem;
            right: 1rem;">


                        </div>

                        <div class="profile-card__image" style="margin-right: 1rem;     margin: 0;
        padding: 0;">

                            <a href="#"
                                style="    line-height: inherit;
        color: #0266b7;
        text-decoration: none;
        cursor: pointer;background-color: transparent;">
                                <img src="{{ $mentor->user->photo }}" class="avatar--small" alt="[NN]"
                                    style="display: block;
                margin: auto; width: 60px; height: 60px;">
                            </a>

                        </div>

                        <div class="profile-card__about">
                            <h3>

                                <a href="#" class="text-tertiary">
                                    <font style="vertical-align: inherit;">
                                        <font style="vertical-align: inherit;">

                                            {{ $mentor->user->prenom }} {{ $mentor->user->nom }}

                                        </font>
                                    </font>
                                </a>
                            </h3>

                            <h5 class="">
                                <ul class="list--comma-separated">
                                    <li>
                                        <font style="vertical-align: inherit;">
                                            <font style="vertical-align: inherit;">{{ $mentor->user->telephone }}</font>
                                        </font>
                                    </li>
                                    <li>
                                        <font style="vertical-align: inherit;">
                                            <font style="vertical-align: inherit;">{{ $mentor->user->email }}</font>
                                        </font>
                                    </li>
                                    <li>
                                        <font style="vertical-align: inherit;">
                                            <font style="vertical-align: inherit;">{{ $mentor->user->adresse }}</font>
                                        </font>
                                    </li>
                                </ul>
                            </h5>
                            <h5 class="no-bold text-sottovoce">
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">Domaine</font>
                                </font>
                            </h5>
                        </div>
                    </header>
                    <section class="profile-card__expertise"
                        style="background-color: #e3e6e8;
            flex: 1 0 auto;
            word-break: break-word;
            padding: 1.5rem;">
                        <h4>
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">Comment je peux aider</font>
                            </font>
                        </h4>

                        <div class="profile-card__category-rating">
                            <div>
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">La gestion</font>
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
        background-color: #e3e6e8 !important;
        padding: 0 1rem 1.5rem 1rem;">

                        <a href="#" class="button hollow small tertiary" style="border: #C15DFB">
                            <strong>
                                <font style="vertical-align: inherit;">
                                    <button>
                                        <a style="vertical-align: inherit;"
                                            href="/mentors/{{ $mentor->id }}/details">Voir le profil</a>
                                    </button>

                                </font>
                            </strong>
                        </a>
                    </footer>
                </article>
            @endforeach



        </div>
    </section>
</body>

</html>
