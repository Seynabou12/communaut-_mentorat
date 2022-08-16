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
                margin-left: auto; ">
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
                            <img class="user-ava-detail" src="{{ $mentor->user->photo }}" alt="James Amen"
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
                                <a href="#" style="color: #FFF;"> {{ $mentor->user->prenom }}
                                    {{ $mentor->user->nom }}</a>
                            </h2>
                            <div class="pro-fav-loc">
                                <div class="user-location"
                                    style="display: flex;
                                align-items: center; margin-bottom: 10px; font-size:20px ">
                                    Adresse</div>
                                <div class="user-role">
                                    <a href="javascript:;" class="user-like user-add-wishlist" data-id="4126"
                                        style="margin-bottom: 10px; color: #FFF;font-size:20px;">
                                        <span class="addto_fav">{{ $mentor->user->email }}</span>
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
                                    {{ $mentor->user->telephone }}</li>
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
                                            A propos
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
                                <a href="/mentores/{{ Auth::user()->mentore->id }}/connecte/{{ $mentor->id }}"
                                    data-id="4126" class="user-add-feedback"
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

                            </div>

                        </div>
                    </div>
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
