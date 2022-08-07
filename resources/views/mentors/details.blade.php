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
    .sigma_subheader {
        padding: 30px 0;
        position: relative;
        background-position: center;
        background-size: cover;
    }

    .dark-overlay::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: #f6f6f6;
        z-index: -1;
        border-bottom: 1px solid #e3e8eb;
    }

    @media (min-width: 992px) {

        .container,
        .container-lg,
        .container-md,
        .container-sm {
            max-width: 960px;
        }
    }

    .container,
    .container-fluid,
    .container-lg,
    .container-md,
    .container-sm,
    .container-xl {
        width: 100%;
        padding-right: 15px;
        padding-left: 15px;
        margin-right: auto;
        margin-left: auto;
    }

    h1 {
        margin-top: 0;
        margin-bottom: .5rem;
    }

    article,
    aside,
    figcaption,
    figure,
    footer,
    header,
    hgroup,
    main,
    nav,
    section {
        display: block;
    }

    .sigma_subheader.text-left .sigma_subheader-inner .breadcrumb {
        font-size: 12px;
        margin-bottom: 0;
    }

    .sigma_subheader .sigma_subheader-inner .breadcrumb-nav .breadcrumb {
        background: none;
        padding: 0;
    }

    .breadcrumb li {
        font-weight: 600;
    }

    .breadcrumb-item+.breadcrumb-item {
        padding-left: .5rem;
    }

    .breadcrumb {
        list-style: none;
    }

    *,
    ::after,
    ::before {
        box-sizing: border-box;
    }

    .clearfix::after {
        display: block;
        clear: both;
        content: "";
    }

    @media (min-width: 992px) {
        .col-lg-8 {
            -ms-flex: 0 0 66.666667%;
            flex: 0 0 66.666667%;
            max-width: 66.666667%;
        }
    }
</style>

<body style="background-color: #FFF;">
    @include('site.nav')

    {{-- <div id="main-wrapper">
        <div class="content-body">
            <div class="container-fluid">
                <!-- row -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                @foreach ($mentors as $mentor)
                                    <div class="email-right-box ms-0 ms-sm-4 ms-sm-0" style="padding-left: 0;">
                                        <div class="">
                                            <div class="col-12">
                                                <div class="right-box-padding">

                                                    <div class="read-content">
                                                        <div
                                                            class="media pt-3 d-sm-flex d-block justify-content-between">
                                                            <div class="clearfix mb-3 d-flex">
                                                                <img class="me-3 rounded" width="70" height="70"
                                                                    alt="image" src="{{ $mentor->user->photo }}">
                                                                <div class="media-body me-2">
                                                                    <h5 class="text-primary mb-0 mt-1">
                                                                        {{ $mentor->user->prenom }}
                                                                        {{ $mentor->user->nom }}
                                                                    </h5>
                                                                    <p class="mb-0">{{ $mentor->user->dateNaissance }}
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <hr>
                                                        <div class="media mb-2 mt-3">
                                                            <div class="media-body"><span class="pull-end">07:23
                                                                    AM</span>
                                                                <h5 class="my-1 text-primary">A collection of textile
                                                                    samples lay spread</h5>
                                                                <p class="read-content-email">
                                                                    {{ $mentor->user->email }}</p>
                                                            </div>
                                                        </div>
                                                        <div class="read-content-body">
                                                            <h5 class="mb-4">Hi,Ingredia,</h5>

                                                            <p class="mb-2">{{ $mentor->parcours }}
                                                            </p>

                                                        </div>
                                                        <hr>
                                                    </div>
                                                    <div class="text-end">
                                                        <a
                                                            href="/mentores/{{ Auth::user()->mentore->id }}/connecte/{{ $mentor->id }}">
                                                            <button class="btn btn-primary " type="button">Se
                                                                Connecter</button></a>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div> --}}




    {{-- <div class="container">
        <div class="sigma_subheader-inner">
            <h1 class="page-title"> Mentor Detail </h1>
            <div class="breadcrumb-nav">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb" itemscope="" itemtype="http://schema.org/BreadcrumbList">
                        <li itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem"
                            class="breadcrumb-item"><a itemprop="item"
                                href="https://mentoring-wp.dreamguystech.com/"><span itemprop="name">Home</span></a>
                        </li>
                        <li itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem"
                            class="breadcrumb-item"><span itemprop="name"><a href="" itemprop="item"><span
                                        itemprop="name">Mentor</span></a></span></li>
                        <li itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem"
                            class="breadcrumb-item active" aria-current="page"><span itemprop="name">James Amen</span>
                        </li>
                    </ol>
                </nav>
            </div>
        </div>
    </div> --}}



    <div class="container-fluid" style="display: flex; background-color: #f6f6f6;">
        <div class="sigma_subheader-inner"
            style="padding: 30px 0;
        position: relative;
        background-position: center;
        background-size: cover;">
            <h1 class="page-title"> Mentor Detail </h1>
            <div class="breadcrumb-nav">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb" itemscope="" itemtype="http://schema.org/BreadcrumbList">
                        <li itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem"
                            class="breadcrumb-item"><a itemprop="item"
                                href="https://mentoring-wp.dreamguystech.com/"><span itemprop="name">Home</span></a>
                        </li>
                        <li itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem"
                            class="breadcrumb-item"><span itemprop="name"><a href="" itemprop="item"><span
                                        itemprop="name">Mentor</span></a></span></li>
                        <li itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem"
                            class="breadcrumb-item active" aria-current="page"><span itemprop="name">James Amen</span>
                        </li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>


    <div class="page-content" style="padding: 60px 0 30px;">
        <div class="container"
            style="max-width: 1200px;  width: 100%;
    padding-right: 15px;
    padding-left: 15px;
    margin-right: auto;
    margin-left: auto;
  ">
            <div class="user-view-content"
                style="background: #C15DFB url(../images/profile-bg2.png) no-repeat;
                    background-position: center;
                    background-size: cover;
                    padding: 30px;
                    margin-bottom: 30px;
                    border-radius: 0.4rem;">
                <div class="user-pro-view"
                    style="display: flex;
                        overflow: hidden; color: #fff;
                        align-items: center;">
                    <div class="user-info-left" style="display: flex; ">
                        <div class="mentor-img"
                            style="flex: 0 0 150px;
                                height: 150px;
                                width: 150px;margin-right: 20px;">
                            <img class="user-ava-detail" src="/images/fille.jpg" alt="James Amen"
                                style="border: 5px solid #fff;
                                        border-radius: 50%; max-width: 100%;
                                        height: auto;vertical-align: middle;">

                        </div>
                        <div class="user-info-cont" style="color: #fff;">
                            <h2
                                style="color: #fff;
                            display: flex;
                            flex-wrap: wrap;
                            align-items: center;
                            font-size: 30px;
                            margin-bottom: 15px;
                            font-weight: 500;
                            line-height: 1.2;margin-top: 0;">
                                <a href="https://mentoring-wp.dreamguystech.com/mentors/james-amen/"
                                    style="color: #FFF;"> Prenom Nom</a>
                            </h2>
                            <div class="pro-fav-loc">
                                <div class="user-location"
                                    style="display: flex;
                                align-items: center; margin-bottom: 10px; font-size:20px ">
                                    Adresse</div>
                                <div class="user-role">
                                    <a href="javascript:;" class="user-like user-add-wishlist" data-id="4126"
                                        style="margin-bottom: 10px; color: #FFF;font-size:20px;">
                                        <span class="addto_fav">Email</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="user-info-right"
                        style="margin-left: auto;
                    flex: 0 0 auto;
                    max-width: 245px;">
                        <div class="user-infos" style="margin-top: 0;">
                            <ul
                                style="font-size: 14px;
                            list-style: none;
                            margin: 0;
                            padding: 0;">
                                <li class="votes"
                                    style="margin-bottom: 15px;
                                line-height: inherit; font-size: 20px;">
                                    Telephone</li>
                                <li class="days"
                                    style="margin-bottom: 15px;
                                line-height: inherit; font-size: 20px;">
                                    Domaine</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div id="dc-twocolumns" class="dc-twocolumns dc-haslayout clearfix">
                <div class="dc-docsingle-holder" style="float: left;
                width: 100%;">

                    <div class="row"
                        style=" display: flex;
                        box-sizing: border-box;
                                display: flex;
                                flex-wrap: wrap;
                                margin-right: -15px;
                                margin-left: -15px;">
                        <div class="col-md-8 "
                            style="position: relative;
                        width: 100%;
                        padding-right: 15px;
                        padding-left: 15px;">
                            <div class="tab-content dc-contentdoctab dc-haslayout" style="padding: 0;">
                                <div class="widget-overview"
                                    style="float: left;
                                        width: 100%;
                                        border: none;
                                        border-radius: 0 0 4px 4px;">
                                    <div class="widget-overview"
                                        style="border-radius: 0.4rem;
                                                padding: 1.5rem;
                                                border: 1px solid #e3e8eb;
                                                box-shadow: 0 0 10px 5px rgba(0, 0, 0, 0.03);
                                                margin-bottom: 30px;">
                                        <h4
                                            style="background-color: #F4F3F3;
                                            border-radius: 5px;
                                            padding: 15px;
                                            margin-bottom: 1.5rem;font-size: 1.25rem;margin-top: 0;">
                                            About Me
                                        </h4>
                                        <div class="overview-description">
                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting
                                                industry.
                                                Lorem
                                                Ipsum has been the industry’s standard dummy text ever since the 1500s,
                                                when
                                                an
                                                unknown printer took a galley of type and scrambled it to make a type
                                                specimen
                                                book. It has survived not only five centuries, but also the leap into
                                                electronic
                                                typesetting, remaining essentially unchanged.</p>
                                            <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has
                                                roots
                                                in a piece of classical Latin literature from 45 BC, making it over 2000
                                                years
                                                old.</p>
                                        </div>
                                    </div>

                                </div>
                                <div class="widget-overview" s>
                                    <h4>Education</h4>
                                    <hr>
                                </div>
                                <div class="widget-overview"
                                    style="  border-radius: 0.4rem;
                                padding: 1.5rem;
                                border: 1px solid #e3e8eb;
                                box-shadow: 0 0 10px 5px rgba(0, 0, 0, 0.03);
                                margin-bottom: 30px;
                              ">
                                    <h4
                                        style="background-color: #F4F3F3;
                                    border-radius: 5px;
                                    padding: 15px;
                                    margin-bottom: 1.5rem;font-size: 1.25rem;margin-top: 0;">
                                        Expérience</h4>
                                    <div class="experience-details">
                                        <div class="info-list"
                                            style="display: flex;
                                        align-items: center;">
                                            <div class="info-content">
                                                <h6>Coimbatore University</h6> Mathematics
                                            </div>
                                            <div class="info-years">
                                                <strong>2022 - 2022</strong>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="widget-overview available-widget">
                                    <h4>Available Timings</h4>
                                    <div class="accordion" id="accordionExample">
                                        <div class="card">
                                            <div class="card-header collapsed" data-toggle="collapse"
                                                data-target="#Monday" aria-expanded="false">
                                                <span class="title">Monday</span> <span class="accicon"><i
                                                        class="fas fa-angle-down rotate-icon"></i></span>
                                            </div>
                                            <div id="Monday" class="collapse" data-parent="#accordionExample"
                                                style="">
                                                <div class="card-body">
                                                    <div class="slot-details">
                                                        <div class="slot-list">
                                                            <div class="slot-info">
                                                                <span>11:00 am
                                                                </span>
                                                            </div>
                                                        </div>
                                                        <div class="slot-list">
                                                            <div class="slot-info">
                                                                <span>12:00 pm
                                                                </span>
                                                            </div>
                                                        </div>
                                                        <div class="slot-list">
                                                            <div class="slot-info">
                                                                <span>1:00 pm
                                                                </span>
                                                            </div>
                                                        </div>
                                                        <div class="slot-list">
                                                            <div class="slot-info">
                                                                <span>2:00 pm
                                                                </span>
                                                            </div>
                                                        </div>
                                                        <div class="slot-list">
                                                            <div class="slot-info">
                                                                <span>3:00 pm
                                                                </span>
                                                            </div>
                                                        </div>
                                                        <div class="slot-list">
                                                            <div class="slot-info">
                                                                <span>4:00 pm
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-header collapsed" data-toggle="collapse"
                                                data-target="#Tuesday" aria-expanded="false">
                                                <span class="title">Tuesday</span> <span class="accicon"><i
                                                        class="fas fa-angle-down rotate-icon"></i></span>
                                            </div>
                                            <div id="Tuesday" class="collapse" data-parent="#accordionExample"
                                                style="">
                                                <div class="card-body">
                                                    <div class="slot-details">
                                                        <div class="slot-list">
                                                            <div class="slot-info">
                                                                <span>11:00 am
                                                                </span>
                                                            </div>
                                                        </div>
                                                        <div class="slot-list">
                                                            <div class="slot-info">
                                                                <span>12:00 pm
                                                                </span>
                                                            </div>
                                                        </div>
                                                        <div class="slot-list">
                                                            <div class="slot-info">
                                                                <span>1:00 pm
                                                                </span>
                                                            </div>
                                                        </div>
                                                        <div class="slot-list">
                                                            <div class="slot-info">
                                                                <span>2:00 pm
                                                                </span>
                                                            </div>
                                                        </div>
                                                        <div class="slot-list">
                                                            <div class="slot-info">
                                                                <span>3:00 pm
                                                                </span>
                                                            </div>
                                                        </div>
                                                        <div class="slot-list">
                                                            <div class="slot-info">
                                                                <span>4:00 pm
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-header collapsed" data-toggle="collapse"
                                                data-target="#Wednesday" aria-expanded="false">
                                                <span class="title">Wednesday</span> <span class="accicon"><i
                                                        class="fas fa-angle-down rotate-icon"></i></span>
                                            </div>
                                            <div id="Wednesday" class="collapse" data-parent="#accordionExample"
                                                style="">
                                                <div class="card-body">
                                                    <div class="slot-details">
                                                        <div class="slot-list">
                                                            <div class="slot-info">
                                                                <span>11:00 am
                                                                </span>
                                                            </div>
                                                        </div>
                                                        <div class="slot-list">
                                                            <div class="slot-info">
                                                                <span>12:00 pm
                                                                </span>
                                                            </div>
                                                        </div>
                                                        <div class="slot-list">
                                                            <div class="slot-info">
                                                                <span>1:00 pm
                                                                </span>
                                                            </div>
                                                        </div>
                                                        <div class="slot-list">
                                                            <div class="slot-info">
                                                                <span>2:00 pm
                                                                </span>
                                                            </div>
                                                        </div>
                                                        <div class="slot-list">
                                                            <div class="slot-info">
                                                                <span>3:00 pm
                                                                </span>
                                                            </div>
                                                        </div>
                                                        <div class="slot-list">
                                                            <div class="slot-info">
                                                                <span>4:00 pm
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-header" data-toggle="collapse" data-target="#Thursday"
                                                aria-expanded="true">
                                                <span class="title">Thursday</span> <span class="accicon"><i
                                                        class="fas fa-angle-down rotate-icon"></i></span>
                                            </div>
                                            <div id="Thursday" class="collapse show" data-parent="#accordionExample"
                                                style="">
                                                <div class="card-body">
                                                    <div class="slot-details">
                                                        <div class="slot-list">
                                                            <div class="slot-info">
                                                                <span>11:00 am
                                                                </span>
                                                            </div>
                                                        </div>
                                                        <div class="slot-list">
                                                            <div class="slot-info">
                                                                <span>12:00 pm
                                                                </span>
                                                            </div>
                                                        </div>
                                                        <div class="slot-list">
                                                            <div class="slot-info">
                                                                <span>1:00 pm
                                                                </span>
                                                            </div>
                                                        </div>
                                                        <div class="slot-list">
                                                            <div class="slot-info">
                                                                <span>2:00 pm
                                                                </span>
                                                            </div>
                                                        </div>
                                                        <div class="slot-list">
                                                            <div class="slot-info">
                                                                <span>3:00 pm
                                                                </span>
                                                            </div>
                                                        </div>
                                                        <div class="slot-list">
                                                            <div class="slot-info">
                                                                <span>4:00 pm
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-header collapsed" data-toggle="collapse"
                                                data-target="#Friday" aria-expanded="false">
                                                <span class="title">Friday</span> <span class="accicon"><i
                                                        class="fas fa-angle-down rotate-icon"></i></span>
                                            </div>
                                            <div id="Friday" class="collapse" data-parent="#accordionExample">
                                                <div class="card-body">
                                                    <div class="slot-details">
                                                        <div class="slot-list">
                                                            <div class="slot-info">
                                                                <span>11:00 am
                                                                </span>
                                                            </div>
                                                        </div>
                                                        <div class="slot-list">
                                                            <div class="slot-info">
                                                                <span>12:00 pm
                                                                </span>
                                                            </div>
                                                        </div>
                                                        <div class="slot-list">
                                                            <div class="slot-info">
                                                                <span>1:00 pm
                                                                </span>
                                                            </div>
                                                        </div>
                                                        <div class="slot-list">
                                                            <div class="slot-info">
                                                                <span>2:00 pm
                                                                </span>
                                                            </div>
                                                        </div>
                                                        <div class="slot-list">
                                                            <div class="slot-info">
                                                                <span>3:00 pm
                                                                </span>
                                                            </div>
                                                        </div>
                                                        <div class="slot-list">
                                                            <div class="slot-info">
                                                                <span>4:00 pm
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-header collapsed" data-toggle="collapse"
                                                data-target="#Saturday" aria-expanded="false">
                                                <span class="title">Saturday</span> <span class="accicon"><i
                                                        class="fas fa-angle-down rotate-icon"></i></span>
                                            </div>
                                            <div id="Saturday" class="collapse" data-parent="#accordionExample">
                                                <div class="card-body">
                                                    <div class="slot-details">
                                                        <div class="slot-list">
                                                            <div class="slot-info">
                                                                <span>11:00 am
                                                                </span>
                                                            </div>
                                                        </div>
                                                        <div class="slot-list">
                                                            <div class="slot-info">
                                                                <span>12:00 pm
                                                                </span>
                                                            </div>
                                                        </div>
                                                        <div class="slot-list">
                                                            <div class="slot-info">
                                                                <span>1:00 pm
                                                                </span>
                                                            </div>
                                                        </div>
                                                        <div class="slot-list">
                                                            <div class="slot-info">
                                                                <span>2:00 pm
                                                                </span>
                                                            </div>
                                                        </div>
                                                        <div class="slot-list">
                                                            <div class="slot-info">
                                                                <span>3:00 pm
                                                                </span>
                                                            </div>
                                                        </div>
                                                        <div class="slot-list">
                                                            <div class="slot-info">
                                                                <span>4:00 pm
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-header collapsed" data-toggle="collapse"
                                                data-target="#Sunday" aria-expanded="false">
                                                <span class="title">Sunday</span> <span class="accicon"><i
                                                        class="fas fa-angle-down rotate-icon"></i></span>
                                            </div>
                                            <div id="Sunday" class="collapse" data-parent="#accordionExample">
                                                <div class="card-body">
                                                    <div class="slot-details">
                                                        <p class="mb-0 not-available">Not available</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <script type="application/javascript">
            jQuery(document).ready(function () {
                jQuery("a[data-rel]").each(function () {
                    jQuery(this).attr("rel", jQuery(this).data("rel"));
                });
                jQuery("a[data-rel^='prettyPhoto']").prettyPhoto({
                    animation_speed: 'normal',
                    theme: 'dark_square',
                    slideshow: 3000,
                    default_width: 800,
                    default_height: 500,
                    allowfullscreen: true,
                    autoplay_slideshow: false,	
                    social_tools: false,
                    iframe_markup: "<iframe src='{path}' width='{width}' height='{height}' frameborder='no' allowfullscreen='true'></iframe>", 
                    deeplinking: false
                });
            });
        </script>

                            </div>
                        </div>
                        <div class="col-md-4" style="position: relative; padding-right: 15px; padding-left: 15px; ">
                            <div class="user-booking booking-widget"
                                style="margin-bottom: 30px; padding: 14px 30px;font-size: 16px;">
                                <a href="javascript:;" data-id="4126" class="user-add-feedback"
                                    style="background-color: #C15DFB;
                                border: 1px solid #C15DFB;
                                border-radius: 0.4rem;
                                color: #fff;
                                font-weight: 500;
                                padding: 10px 30px;
                                text-align: center;
                                text-transform: capitalize;
                                width: 100%;
                                display: block;">Se
                                    Connecter</a>
                                <a href="javascript:;" data-mentor_id="4126" class="user-booking-model">Book
                                    Appointment</a>
                            </div>
                            <div class="widget-overview languages-widget"
                                style="border-radius: 0.4rem;
                            padding: 1.5rem;
                            border: 1px solid #e3e8eb;
                            box-shadow: 0 0 10px 5px rgba(0, 0, 0, 0.03);
                            margin-bottom: 30px;">
                                <h4
                                    style="background-color: #F4F3F3;
                                border-radius: 5px;
                                padding: 15px;
                                margin-bottom: 1.5rem;
                                font-size: 1.25rem;">
                                    Languages</h4>
                                <div class="user-languages"
                                    style="display: flex;
                               
                                flex-wrap: wrap;">
                                    <a href="https://mentoring-wp.dreamguystech.com/languages/english/"
                                        rel="tag">English</a><a
                                        href="https://mentoring-wp.dreamguystech.com/languages/french/"
                                        rel="tag">French</a>
                                </div>
                            </div>
                            <div class="widget-overview service-widget">
                                <h4>Offered Services</h4>
                                <div id="dc-accordion" class="" role="tablist" aria-multiselectable="true">
                                    <div class="">
                                        <div class="">
                                            <div class="">
                                                <span>
                                                    <div class="user-tag">
                                                        <a
                                                            href="https://mentoring-wp.dreamguystech.com/courses/digital-marketer/">Digital
                                                            Marketer</a>
                                                    </div>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade dc-appointmentpopup" tabindex="-1" role="dialog" id="appointment"
            data-backdrop="static">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="dc-modalcontent modal-content">
                    <section id="sec1" class="sec1">
                        <div class="modal-header">
                            <h3 class="mb-0">Book Appointment</h3>
                            <a href="javascript:;" class="dc-closebtn close dc-close" data-dismiss="modal"
                                aria-label="Close"><i class="far fa-times"></i></a>
                        </div>
                        <div id="dcModalBody" class="modal-body dc-modal-content-one dc-haslayout clearfix">
                            <ul class="dc-joinsteps">
                                <li class="dc-active"><a href="javascrip:;">01</a></li>
                                <li><a href="javascrip:;">02</a></li>
                                <li><a href="javascrip:;">03</a></li>
                                <li><a href="javascrip:;">04</a></li>
                            </ul>
                            <div id="dcModalBody1" class="dc-visitingmentor">
                                <form class="dc-booking-step1">
                                    <div class="dc-formtheme dc-docinfoform form-group clearfix">
                                        <h5>Who is Visiting To mentor?</h5>
                                        <div class="dc-tabbtns">
                                            <span class="dc-radio next-step">
                                                <input type="radio" name="myself" class="myself" value="myself"
                                                    id="myself" checked="">
                                                <label for="myself">Myself</label>
                                            </span>
                                            <span class="dc-radio next-step">
                                                <input type="radio" name="myself" class="myself" value="someelse"
                                                    id="someelse">
                                                <label for="someelse">Someone Else</label>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="dc-formtheme dc-docinfoform">
                                        <fieldset>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <input type="text" name="bk_email" class="form-control"
                                                            value="" placeholder="Email address">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <input type="text" name="bk_phone" class="form-control"
                                                            value="" placeholder="Your mobile number">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <input type="text" name="other_name" value=""
                                                            class="form-control" placeholder="mentee Name">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group form-group-relation">
                                                        <span class="dc-select">
                                                            <select data-placeholder="Relation with you? *"
                                                                name="relation">
                                                                <option>Relation with you?</option>
                                                                <option value="brother">Brother</option>
                                                                <option value="sister">Sister</option>
                                                                <option value="wife">Wife</option>
                                                                <option value="mother">Mother</option>
                                                                <option value="daughter">Daughter</option>
                                                                <option value="son">Son</option>
                                                                <option value="others">Others</option>
                                                            </select>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </fieldset>
                                    </div>
                                    <div class="dc-formtheme dc-vistingdocinfo">
                                        <fieldset>
                                            <div class="form-group">
                                                <span class="dc-select">
                                                    <select name="booking_institute" data-mentor_id="4126"
                                                        class="dc-booking-institute">
                                                        <option>Where to visit?*</option>
                                                        <option value="4130">Dreamguys Institute</option>
                                                    </select>
                                                </span>
                                            </div>
                                            <div class="form-group" id="booking_service_select"></div>
                                            <div class="form-group" id="booking_fee"></div>
                                            <div class="clearfix"></div>
                                            <div class="form-group">
                                                <textarea class="form-control" placeholder="Comments:" name="booking_content"></textarea>
                                            </div>
                                        </fieldset>
                                    </div>
                                    <div class="dc-appointment-holder">
                                        <div class="dc-appointment-content">
                                            <div class="dc-appointment-calendar">
                                                <div id="dc-calendar" class="dc-calendar"></div>
                                            </div>
                                            <div class="dc-timeslots dc-update-timeslots">
                                                <div class="emptydetails dc-empty-articls dc-emptyholder-sm">
                                                    <span></span>
                                                    Please select the location then only timeslots will be show
                                                </div>
                                            </div>
                                            <input type="hidden" value="2022-08-03" name="appointment_date"
                                                id="appointment_date">
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div id="dcModalBody2" class="modal-body dc-modal-content-two dc-haslayout">
                            <div class="dc-visitingmentor dc-popup-doc">
                                <ul class="dc-joinsteps">
                                    <li class="dc-done-next"><a href="javascrip:;"><i class="fa fa-check"></i></a>
                                    </li>
                                    <li class="dc-active"><a href="javascrip:;">02</a></li>
                                    <li><a href="javascrip:;">03</a></li>
                                    <li><a href="javascrip:;">04</a></li>
                                </ul>
                                <form class="dc-booking-step2">
                                    <div class="dc-visit">
                                        <span>Verify is that you?</span>
                                    </div>
                                    <div class="form-row dc-popup-row">
                                        <div class="form-group col-6">
                                            <input type="text" class="form-control" name="full_name"
                                                placeholder="Name*">
                                        </div>
                                        <div class="form-group col-6">
                                            <input type="text" class="form-control" name="phone_number"
                                                placeholder="Phone Number*">
                                        </div>
                                        <div class="form-group col-12">
                                            <input type="email" class="form-control" placeholder="Email*"
                                                name="email">
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div id="dcModalBody3" class="modal-body dc-modal-content-three dc-haslayout">
                            <ul class="dc-joinsteps">
                                <li class="dc-done-next"><a href="javascrip:;"><i class="fa fa-check"></i></a></li>
                                <li class="dc-done-next"><a href="javascrip:;"><i class="fa fa-check"></i></a></li>
                                <li class="dc-active"><a href="javascrip:;">03</a></li>
                                <li><a href="javascrip:;">04</a></li>
                            </ul>
                            <h5>Enter Authentication Code</h5>
                            <p>We’ve sent verification code on your email at&nbsp;<a class="email_address"
                                    href="javascript:;"></a></p>
                            <form class="dc-booking-step3">
                                <input type="text" placeholder="Add authentication code"
                                    name="authentication_code">
                                <label><a href="javascript:;" class="dc-resend-booking-code">Resend Verification
                                        Code</a></label>
                            </form>
                        </div>
                        <div id="dcModalBody4" class="modal-body dc-modal-content-four dc-haslayout">
                            <ul class="dc-joinsteps">
                                <li class="dc-done-next"><a href="javascrip:;"><i class="fa fa-check"></i></a></li>
                                <li class="dc-done-next"><a href="javascrip:;"><i class="fa fa-check"></i></a></li>
                                <li class="dc-done-next"><a href="javascrip:;"><i class="fa fa-check"></i></a></li>
                                <li class="dc-done-next"><a href="javascrip:;"><i class="fa fa-check"></i></a></li>
                            </ul>
                            <div class="dc-modal-body4-title">
                                <h4></h4>
                                <p></p>
                                <div class="dc-offline-checkout"></div>
                                <a href="javascript:;" class="dc-btn finish-appointment">Finish</a>
                            </div>
                        </div>
                        <div class="modal-footer dc-modal-footer">
                            <a href="javascript:;" id="dcbtn" class="btn dc-btn btn-primary dc-booking-step1-btn"
                                data-id="6" data-toggle="modal" data-target="#appointment2">Book Now</a>
                            <a href="javascript:;" id="dcbtn2" data-id="6"
                                class="btn dc-btn btn-primary dc-booking-step2-btn" data-toggle="modal"
                                data-target="#appointment2">Book Now</a>
                            <a href="javascript:;" id="dcbtn3" class="btn dc-btn btn-primary dc-booking-step3-btn"
                                data-toggle="modal" data-target="#appointment2">Verify Now</a>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </div>

    @include('site.footer')
    <script src="/vendor/global/global.min.js"></script>
    <script src="/vendor/jquery-nice-select/js/jquery.nice-select.min.js"></script>
    <script src="/js/custom.min.js"></script>
    <script src="/js/dlabnav-init.js"></script>
    <script src="/js/demo.js"></script>
    <script src="/js/styleSwitcher.js"></script>

</body>

</html>
