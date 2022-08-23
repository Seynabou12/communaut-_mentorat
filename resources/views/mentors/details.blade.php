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



    <div class="container-fluid" style="display: flex; background-color: #f6f6f6; margin-top: 100px;">
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
                                        border-radius: 100%; width: 50%;
                                        height: 50%;vertical-align: middle;">
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
                                    {{ $mentor->domaine->nomDomaine }}</li>
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
                                            Mon Parcours
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
                                    <div class="widget-overview"
                                        style="border-radius: 0.4rem;
                                            padding: 1.5rem;
                                            border: 1px solid #e3e8eb;
                                            width: 300px;
                                            box-shadow: 0 0 10px 5px rgba(0, 0, 0, 0.03);
                                            margin-bottom: 30px;">
                                        <h4
                                            style="background-color: #F4F3F3;
                                        border-radius: 5px;
                                        padding: 15px;
                                        margin-bottom: 1.5rem;font-size: 1.25rem;margin-top: 0;">
                                            Mon Parcours
                                        </h4>
                                        <div class="overview-description">
                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting
                                                industry..</p>

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


    <div>
        <div class="relative" style="background: #C15DFB;">
            <div class="max-w-screen-xl mx-auto"
                style="max-width: 1280px!important;margin-left: auto!important;
                       margin-right: auto!important;">
                <nav class="flex pl-4 sm:pl-8 py-8" aria-label="Breadcrumb"
                    style="padding-top: 2rem!important;
                 padding-bottom: 2rem!important;">
                    <div class="flex items-center space-x-4"
                        style="align-items: center!important; display: flex!important;">
                        <div>
                            <div>
                                <a href="/" class="text-white hover:text-gray-100"
                                    style="--tw-text-opacity: 1!important;
                                color: rgb(255 255 255 / var(--tw-text-opacity))!important;text-decoration: none;    cursor: pointer;">

                                    <svg class="flex-shrink-0 h-5 w-5" xmlns="http://www.w3.org/2000/svg"
                                        style="flex-shrink: 0!important;    width: 1.25rem!important;     height: 1.25rem!important;"
                                        viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                        <path
                                            d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z">
                                        </path>
                                    </svg>
                                    <span class="sr-only"
                                        style="position: absolute!important;
                                    width: 1px!important;
                                    height: 1px!important;
                                    padding: 0!important;
                                    margin: -1px!important;
                                    overflow: hidden!important;
                                    clip: rect(0,0,0,0)!important;
                                    white-space: nowrap!important;
                                    border-width: 0!important;">Home</span>
                                </a>
                            </div>
                        </div>
                        <div>
                            <div class="flex items-center"
                                style="align-items: center!important;display: flex!important; ">

                                <svg class="flex-shrink-0 h-5 w-5 text-white" xmlns="http://www.w3.org/2000/svg"
                                    style="--tw-text-opacity: 1!important;
                                color: rgb(255 255 255 / var(--tw-text-opacity))!important;    flex-shrink: 0!important;width: 1.25rem!important;
                                height: 1.25rem!important;"
                                    viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                    <path fill-rule="evenodd"
                                        d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                        clip-rule="evenodd"></path>
                                </svg>
                                <a href="/mentor/browse/"
                                    style="font-weight: 500!important; font-size: .875rem!important;
                                line-height: 1.25rem!important;    margin-left: 1rem!important;text-decoration: none;"
                                    class="ml-4 text-sm font-medium text-white hover:text-gray-100">Find a Mentor</a>
                            </div>
                        </div>
                        <div>
                            <div class="flex items-center"
                                style="align-items: center!important;display: flex!important; ">

                                <svg class="flex-shrink-0 h-5 w-5 text-white" xmlns="http://www.w3.org/2000/svg"
                                    style="--tw-text-opacity: 1!important;
                                color: rgb(255 255 255 / var(--tw-text-opacity))!important;    flex-shrink: 0!important;width: 1.25rem!important;
                                height: 1.25rem!important;"
                                    viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                    <path fill-rule="evenodd"
                                        d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                        clip-rule="evenodd"></path>
                                </svg>
                                <a href="/mentor/jackridgway/" class="ml-4 text-sm font-medium text-white"
                                    style="font-weight: 500!important; font-size: .875rem!important;
                                line-height: 1.25rem!important;    margin-left: 1rem!important;text-decoration: none;"
                                    aria-current="page">Jack Ridgway</a>
                            </div>
                        </div>
                    </div>
                </nav>
                <div class="-mt-12 w-full lg:w-1/2 xl:w-2/3 px-4 pb-8 align-bottom flex items-end"
                    style="vertical-align: bottom!important;    padding-bottom: 2rem!important;    padding-left: 1rem!important;
                            padding-right: 1rem!important;
                            align-items: flex-end!important; display: flex!important; margin-top: -3rem!important; display: flex!important;">
                    <div class="inline-block w-48 h-48 relative top-20 rounded-full overflow-hidden bg-white p-1 flex-none"
                        style="    --tw-bg-opacity: 1!important;
                        background-color: rgb(255 255 255 / var(--tw-bg-opacity))!important; border-radius: 9999px!important; overflow: hidden!important;width: 12rem!important;height: 12rem!important;display: inline-block!important;top: 5rem!important;overflow: hidden!important;position: relative!important;">
                        <img class="w-full h-full rounded-full"
                            style="border-radius: 9999px!important; width: 100%!important;height: 100%!important;max-width: 100%;"
                            src="https://cdn.mentorcruise.com/cache/368e1284b891ae8111593589f3a7eef9/31047040017e1c04/b1ab502ede5bac065fd2c1797abf1fe1.jpg"
                            alt="Jack Ridgway">
                    </div>
                    <div class="hidden sm:inline-block ml-6 grow">
                        <div class="flex items-end gap-x-4">
                            <div>
                                <a href="/new/" target="_blank" class="tag-white">
                                    <svg class="w-5 h-5 text-teal-700 align-middle mr-1" fill="currentColor"
                                        viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M5 2a1 1 0 011 1v1h1a1 1 0 010 2H6v1a1 1 0 01-2 0V6H3a1 1 0 010-2h1V3a1 1 0 011-1zm0 10a1 1 0 011 1v1h1a1 1 0 110 2H6v1a1 1 0 11-2 0v-1H3a1 1 0 110-2h1v-1a1 1 0 011-1zM12 2a1 1 0 01.967.744L14.146 7.2 17.5 9.134a1 1 0 010 1.732l-3.354 1.935-1.18 4.455a1 1 0 01-1.933 0L9.854 12.8 6.5 10.866a1 1 0 010-1.732l3.354-1.935 1.18-4.455A1 1 0 0112 2z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                    New Mentor
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="inline-block flex-none flex items-end gap-x-6 pl-6 sm:pl-0">
                        <a href="https://twitter.com/royaltyisdead" target="_blank">
                            <svg class="h-6 w-6 text-white align-bottom" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M7.54752 21.7508C16.6042 21.7508 21.5578 14.2474 21.5578 7.74052C21.5578 7.5274 21.5578 7.31524 21.5434 7.10404C22.507 6.40699 23.3389 5.54392 24 4.55524C23.1014 4.95364 22.148 5.21479 21.1718 5.32996C22.1998 4.71465 22.9692 3.74674 23.3366 2.60644C22.3701 3.18005 21.3126 3.58427 20.2099 3.80164C19.4675 3.01222 18.4856 2.48948 17.4162 2.31432C16.3468 2.13917 15.2494 2.32135 14.294 2.83269C13.3385 3.34403 12.5782 4.15601 12.1307 5.14299C11.6833 6.12996 11.5735 7.2369 11.8186 8.29252C9.8609 8.19432 7.94576 7.68555 6.19745 6.79924C4.44915 5.91294 2.90676 4.6689 1.6704 3.14788C1.04073 4.23188 0.847872 5.51511 1.1311 6.7363C1.41433 7.9575 2.15234 9.02483 3.19488 9.721C2.41123 9.69804 1.64465 9.48663 0.96 9.10468V9.16708C0.960311 10.3039 1.35385 11.4057 2.07387 12.2854C2.79389 13.1652 3.79606 13.7688 4.9104 13.994C4.18548 14.1917 3.42487 14.2206 2.68704 14.0784C3.00181 15.0568 3.61443 15.9123 4.43924 16.5254C5.26405 17.1385 6.25983 17.4785 7.28736 17.498C6.26644 18.3004 5.09731 18.8937 3.84687 19.244C2.59643 19.5942 1.28921 19.6944 0 19.5389C2.25183 20.9839 4.87192 21.7504 7.54752 21.7469"
                                    fill="white"></path>
                            </svg>
                        </a>
                        <a target="_blank" href="https://www.linkedin.com/in/jack-ridgway-057a9a36/">
                            <svg class="h-6 w-6 text-white align-bottom" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M22.2283 0H1.77167C1.30179 0 0.851162 0.186658 0.51891 0.51891C0.186658 0.851162 0 1.30179 0 1.77167V22.2283C0 22.6982 0.186658 23.1488 0.51891 23.4811C0.851162 23.8133 1.30179 24 1.77167 24H22.2283C22.6982 24 23.1488 23.8133 23.4811 23.4811C23.8133 23.1488 24 22.6982 24 22.2283V1.77167C24 1.30179 23.8133 0.851162 23.4811 0.51891C23.1488 0.186658 22.6982 0 22.2283 0ZM7.15333 20.445H3.545V8.98333H7.15333V20.445ZM5.34667 7.395C4.93736 7.3927 4.53792 7.2692 4.19873 7.04009C3.85955 6.81098 3.59584 6.48653 3.44088 6.10769C3.28592 5.72885 3.24665 5.31259 3.32803 4.91146C3.40942 4.51032 3.6078 4.14228 3.89816 3.85378C4.18851 3.56529 4.55782 3.36927 4.95947 3.29046C5.36112 3.21165 5.77711 3.25359 6.15495 3.41099C6.53279 3.56838 6.85554 3.83417 7.08247 4.17481C7.30939 4.51546 7.43032 4.91569 7.43 5.325C7.43386 5.59903 7.38251 5.87104 7.27901 6.12481C7.17551 6.37857 7.02198 6.6089 6.82757 6.80207C6.63316 6.99523 6.40185 7.14728 6.14743 7.24915C5.893 7.35102 5.62067 7.40062 5.34667 7.395ZM20.4533 20.455H16.8467V14.1933C16.8467 12.3467 16.0617 11.7767 15.0483 11.7767C13.9783 11.7767 12.9283 12.5833 12.9283 14.24V20.455H9.32V8.99167H12.79V10.58H12.8367C13.185 9.875 14.405 8.67 16.2667 8.67C18.28 8.67 20.455 9.865 20.455 13.365L20.4533 20.455Z"
                                    fill="white"></path>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="max-w-screen-xl mx-auto">
            <div class="w-full lg:w-1/2 xl:w-2/3 relative pt-20">
                <div class="sm:grid sm:grid-cols-2 gap-x-8 px-4 sm:px-8">
                    <div>
                        <div class="inline-block sm:hidden mb-6">
                            <div class="flex items-end gap-x-4">
                                <div>
                                    <a href="/new/" target="_blank" class="tag-white">
                                        <svg class="w-5 h-5 text-teal-700 align-middle mr-1" fill="currentColor"
                                            viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd"
                                                d="M5 2a1 1 0 011 1v1h1a1 1 0 010 2H6v1a1 1 0 01-2 0V6H3a1 1 0 010-2h1V3a1 1 0 011-1zm0 10a1 1 0 011 1v1h1a1 1 0 110 2H6v1a1 1 0 11-2 0v-1H3a1 1 0 110-2h1v-1a1 1 0 011-1zM12 2a1 1 0 01.967.744L14.146 7.2 17.5 9.134a1 1 0 010 1.732l-3.354 1.935-1.18 4.455a1 1 0 01-1.933 0L9.854 12.8 6.5 10.866a1 1 0 010-1.732l3.354-1.935 1.18-4.455A1 1 0 0112 2z"
                                                clip-rule="evenodd"></path>
                                        </svg>
                                        New Mentor
                                    </a>
                                </div>
                            </div>
                        </div>
                        <h1 class="text-slate-900 font-bold text-2xl mb-1">
                            Jack Ridgway
                        </h1>
                        <span class="inline-block font-medium text-slate-900 text-md leading-normal">
                            <a class="text-slate-900" href="/become/senior-developer/">
                                Senior Developer
                            </a>
                            <span>@</span>
                            Hyve Managed Hosting
                        </span>
                        <span class="inline-block font-medium text-teal-700 text-md leading-normal mt-[2px]">
                            10 years of solid Development and Creative Design at fast-paced Agencies, Hosting Providers
                            and Academies.
                        </span>
                        <div class="mt-5 font-normal text-slate-600">
                            <span class="block mb-2">
                                <a href="/country/gb/" class=" text-slate-600">
                                    <svg class="w-5 h-5 text-teal-600 align-sub mr-1" fill="currentColor"
                                        viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                    <span>United Kingdom</span></a>
                            </span>
                            <span class="block mb-2">
                                <svg class="w-5 h-5 text-teal-600 align-sub mr-1" fill="currentColor"
                                    viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z"
                                        clip-rule="evenodd"></path>
                                </svg>
                                <span>Active this month</span>
                            </span>
                            <span class="block mb-2">
                                <svg class="w-5 h-5 text-teal-600 align-sub mr-1" fill="currentColor"
                                    viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M9 2a1 1 0 000 2h2a1 1 0 100-2H9z"></path>
                                    <path fill-rule="evenodd"
                                        d="M4 5a2 2 0 012-2 3 3 0 003 3h2a3 3 0 003-3 2 2 0 012 2v11a2 2 0 01-2 2H6a2 2 0 01-2-2V5zm9.707 5.707a1 1 0 00-1.414-1.414L9 12.586l-1.293-1.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                        clip-rule="evenodd"></path>
                                </svg>
                                Usually responds
                                <span class="underline tooltip is-tooltip-top is-tooltip-multiline"
                                    data-tooltip="This is how quickly Jack usually responds to applications.">
                                    in half a day
                                </span>
                            </span>
                        </div>
                        <div class="mt-5 flex gap-x-4">
                            <a href="/widgets/watch/jackridgway/delete/50b0c473b3/"
                                class="white-btn border small px-[15px] py-[7px] text-sm">
                                <svg class="w-5 h-5 text-rose-500 align-yop mr-1" fill="currentColor"
                                    viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z"
                                        clip-rule="evenodd"></path>
                                </svg>
                                Saved
                            </a>
                        </div>
                    </div>
                    <div class="hidden sm:block">
                        <div class="mb-5">
                            <h3 class="text-slate-900 font-semibold mb-2">
                                Skills
                            </h3>
                            <a href="
                                                /filter/leadership/"
                                class="inline-block text-base tag-lg  mb-2 whitespace-nowrap">
                                Leadership
                            </a>
                            <a href="
                                                /filter/wordpress/"
                                class="inline-block text-base tag-lg  mb-2 whitespace-nowrap">
                                WordPress
                            </a>
                            <a href="
                                                /filter/javascript/"
                                class="inline-block text-base tag-lg  mb-2 whitespace-nowrap">
                                JavaScript
                            </a>
                            <a onclick="document.querySelector('#tags').scrollIntoView({ behavior: 'smooth'});"
                                class="text-slate-700 underline font-medium ml-2 whitespace-nowrap">+ 11
                                more</a>
                        </div>
                        <h3 class="text-slate-900 font-semibold mb-2">
                            Topics
                        </h3>
                        <a href="/topic/accountability/" class="inline-block text-base tag-lg mb-2 whitespace-nowrap">
                            Get accountability
                        </a>
                        <a href="/topic/leader/" class="inline-block text-base tag-lg mb-2 whitespace-nowrap">
                            Become a leader
                        </a>
                        <a href="/topic/skill/" class="inline-block text-base tag-lg mb-2 whitespace-nowrap">
                            Learn a new skill
                        </a>
                        <a onclick="document.querySelector('#topics').scrollIntoView({ behavior: 'smooth'});"
                            class="text-slate-700 underline font-medium ml-2 whitespace-nowrap">+ 2
                            more</a>
                    </div>
                </div>
            </div>
        </div>
        <hr class="my-12">
        <div class="max-w-screen-xl mx-auto">
            <div class="w-full lg:w-1/2 xl:w-2/3 relative py-4 px-4 sm:px-8">
                <div>
                    <h2 class="text-slate-900 font-bold text-2xl mb-1" id="bio">
                        About
                    </h2>
                    <div class="ugc">
                        <div class="inline-block">
                            <div class="text-black overflow-hidden leading-normal" id="bio-truncated">
                                <p></p>
                                <p>Senior Frontend Developer @ Hyve</p>
                                <p>10 years of solid Creative Design and Development at fast-paced Marketing Agencies,
                                    Hosting Providers and Fitness Academies. Managing several internal and external
                                    sites alongside implementing and maintaining CI/CD, automation testing and project
                                    management in every project.</p>
                                <p></p>
                            </div>
                        </div>
                    </div>
                </div>
                <hr class="my-12">
                <div>
                    <h2 class="text-slate-900 font-bold text-2xl mb-1" id="tags">
                        Skills
                    </h2>
                    <div class="mt-6">
                        <a href="
                                        /filter/leadership/"
                            class="inline-block tag-lg whitespace-nowrap mb-2">
                            Leadership
                        </a>
                        <a href="
                                        /filter/wordpress/"
                            class="inline-block tag-lg whitespace-nowrap mb-2">
                            WordPress
                        </a>
                        <a href="
                                        /filter/javascript/"
                            class="inline-block tag-lg whitespace-nowrap mb-2">
                            JavaScript
                        </a>
                        <a href="
                                        /filter/html/"
                            class="inline-block tag-lg whitespace-nowrap mb-2">
                            HTML
                        </a>
                        <a href="
                                        /filter/css/"
                            class="inline-block tag-lg whitespace-nowrap mb-2">
                            CSS
                        </a>
                        <a href="
                                        /filter/php/"
                            class="inline-block tag-lg whitespace-nowrap mb-2">
                            PHP
                        </a>
                        <a href="
                                        /filter/management/"
                            class="inline-block tag-lg whitespace-nowrap mb-2">
                            Management
                        </a>
                        <a href="
                                        /filter/web-development/"
                            class="inline-block tag-lg whitespace-nowrap mb-2">
                            Web Development
                        </a>
                        <a href="
                                        /filter/uxui/"
                            class="inline-block tag-lg whitespace-nowrap mb-2">
                            UX/UI
                        </a>
                        <a href="
                                        /filter/ui/"
                            class="inline-block tag-lg whitespace-nowrap mb-2">
                            UI
                        </a>
                        <a href="
                                        /filter/product-management/"
                            class="inline-block tag-lg whitespace-nowrap mb-2">
                            Product Management
                        </a>
                        <a href="
                                        /filter/engineering/"
                            class="inline-block tag-lg whitespace-nowrap mb-2">
                            Engineering
                        </a>
                        <a href="
                                        /filter/ux-design/"
                            class="inline-block tag-lg whitespace-nowrap mb-2">
                            UX Design
                        </a>
                        <a href="
                                        /filter/startup/"
                            class="inline-block tag-lg whitespace-nowrap mb-2">
                            Startup
                        </a>
                    </div>
                </div>
                <hr class="my-12">
                <div>
                    <h2 class="text-slate-900 font-bold text-2xl mb-1" id="topics">
                        Topics
                    </h2>
                    <div class="mt-6">
                        <a href="/topic/accountability/" class="inline-block tag-lg whitespace-nowrap mb-2">
                            Get accountability
                        </a>
                        <a href="/topic/leader/" class="inline-block tag-lg whitespace-nowrap mb-2">
                            Become a leader
                        </a>
                        <a href="/topic/skill/" class="inline-block tag-lg whitespace-nowrap mb-2">
                            Learn a new skill
                        </a>
                        <a href="/topic/careergrowth/" class="inline-block tag-lg whitespace-nowrap mb-2">
                            Grow your career
                        </a>
                        <a href="/topic/interviewing/" class="inline-block tag-lg whitespace-nowrap mb-2">
                            Pass interviews
                        </a>
                    </div>
                </div>
                <hr class="my-12">
                <div>
                    <h2 class="text-slate-900 font-bold text-2xl mb-1">
                        Similar mentors
                    </h2>
                    <div class="my-8">
                        <a href="/mentor/michaelrussell/" class="text-slate-900">
                            <div class="flex gap-x-8">
                                <div class="flex-none">
                                    <img class="rounded-full h-28 w-28"
                                        src="https://cdn.mentorcruise.com/cache/1ee186f37d8cce66568f3245d46b307b/e34386a84c8a6ebd/afcf8eb473df09003db960df758a5de7.jpg"
                                        alt="Michael Russell">
                                </div>
                                <div class="flex-1">
                                    <div class="text font-bold inline">Michael Russell</div>
                                    <div class="text-sm inline text-slate-600">
                                    </div>
                                    <br>
                                    <div class="text-slate-900">
                                        Consultant @ Echoche, LLC
                                    </div>
                                    <div class="mt-2">
                                        <span class="tag-sm mb-1">leadership</span>
                                        <span class="tag-sm mb-1">management</span>
                                        <span class="tag-sm mb-1">Engineering</span>
                                    </div>
                                    <div class="mt-3">
                                        <span class="text-xs inline">From</span>
                                        <span class="text-lg font-bold inline">$199</span>
                                        <span class="text-xs inline"> / month</span>
                                    </div>
                                    <hr class="my-6">
                                </div>
                            </div>
                        </a>
                        <a href="/mentor/brianpiccione/" class="text-slate-900">
                            <div class="flex gap-x-8">
                                <div class="flex-none">
                                    <img class="rounded-full h-28 w-28"
                                        src="https://cdn.mentorcruise.com/cache/70d078beda4aa4f99ad11b3427bf3311/5213263a357b2af9/b9f1d9d270b9d3b544e1a2ceba4309d6.jpg"
                                        alt="Brian Piccione">
                                </div>
                                <div class="flex-1">
                                    <div class="text font-bold inline">Brian Piccione</div>
                                    <div class="text-sm inline text-slate-600">
                                    </div>
                                    <br>
                                    <div class="text-slate-900">
                                        Director, Frontend Engineering @ Dotdash Meredith
                                    </div>
                                    <div class="mt-2">
                                        <span class="tag-sm mb-1">Tech Leadership</span>
                                        <span class="tag-sm mb-1">Management</span>
                                        <span class="tag-sm mb-1">Frontend Engineering</span>
                                    </div>
                                    <div class="mt-3">
                                        <span class="text-xs inline">From</span>
                                        <span class="text-lg font-bold inline">$220</span>
                                        <span class="text-xs inline"> / month</span>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="p-8 sm:p-0 lg:fixed w-full h-fit sm:w-[420px] lg:left-[55%] xl:left-2/3" id="plan-float"
            style="bottom: -311px;">
            <div class="block rounded-2xl bg-white border-2 border-solid border-slate-300">
                <div class="px-8 pt-8 pb-6">
                    <p class="text-sm text-navy-600 uppercase font-semibold">Mentorship Plan</p>
                    <p class="text-4xl font-extrabold text-navy-700 mt-2">
                        <span class="price-element">$150</span> <span class="text-xl">/ month</span>
                    </p>
                    <div class="mt-2 text-slate-900">
                        For new starters in the development or looking to freshen up skills.
                    </div>
                    <div class="mt-4 text-slate-900">
                        <p class="mb-2">
                            <svg class="w-5 h-5 mr-1 align-sub text-navy-500" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            Up to 2 calls per month
                        </p>
                        <p class="mb-2">
                            <svg class="w-5 h-5 mr-1 align-sub text-navy-500" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            <span class="underline cursor-pointer tooltip is-tooltip-top is-tooltip-multiline"
                                data-tooltip="We will never limit the interactions you have with your mentor, however there's a practical limit to how much your mentor can reply to.">Unlimited</span>
                            Q&amp;A via chat
                        </p>
                        <p class="mb-2 cursor-pointer">
                            <svg class="w-5 h-5 mr-1 align-sub text-navy-500" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            Expect responses <span class="underline tooltip is-tooltip-top is-tooltip-multiline"
                                data-tooltip="This is how quickly Jack will respond to your chat messages during the mentorship.">in
                                2 days</span>
                        </p>
                        <p class="mb-2 cursor-pointer">
                            <svg class="w-5 h-5 mr-1 align-sub text-navy-500" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                    clip-rule="evenodd"></path>`
                            </svg>
                            Tasks &amp; exercises
                        </p>
                        <p class="mb-2 cursor-pointer">
                            <svg class="w-5 h-5 mr-1 align-sub text-navy-500" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            Flat fee, no hidden costs
                        </p>
                        <p class="mb-2 cursor-pointer">
                            <svg class="w-5 h-5 mr-1 align-sub text-navy-500" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            7 day free trial! Cancel anytime.
                        </p>
                    </div>
                    <div class="mt-8">
                        <a class="bg-navy-800 inline-block w-full text-lg font-semibold text-white text-center py-2 rounded hover:bg-navy-900 transition-all duration-150"
                            href="/mentor/jackridgway/apply/?plan=b33c16b39b"
                            style="background-color: rgb(33, 163, 145) !important;">Apply now</a>
                        <div class="mt-2 text-sm">
                            <span class="inline-block mt-2 text-slate-600">
                                <svg class="w-5 h-5 align-sub text-slate-500 mr-1" fill="currentColor"
                                    viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M12.395 2.553a1 1 0 00-1.45-.385c-.345.23-.614.558-.822.88-.214.33-.403.713-.57 1.116-.334.804-.614 1.768-.84 2.734a31.365 31.365 0 00-.613 3.58 2.64 2.64 0 01-.945-1.067c-.328-.68-.398-1.534-.398-2.654A1 1 0 005.05 6.05 6.981 6.981 0 003 11a7 7 0 1011.95-4.95c-.592-.591-.98-.985-1.348-1.467-.363-.476-.724-1.063-1.207-2.03zM12.12 15.12A3 3 0 017 13s.879.5 2.5.5c0-1 .5-4 1.25-4.5.5 1 .786 1.293 1.371 1.879A2.99 2.99 0 0113 13a2.99 2.99 0 01-.879 2.121z"
                                        clip-rule="evenodd"></path>
                                </svg>
                                Only 2 spots left!
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div onclick="$('#sessions').addClass('is-active');"
                class="bg-navy-100 cursor-pointer inline-block w-full text-lg font-semibold text-navy-700 text-center py-2 rounded hover:bg-navy-200 transition-all duration-150"
                style="background-color: rgb(215, 247, 241) !important; color: rgb(18, 138, 122) !important;">
                View one-off sessions
            </div>
        </div>
        <div class="modal content" id="sessions">
            <div class="modal-background" onclick="$('#sessions').removeClass('is-active');"></div>
            <div class="modal-card w-full max-w-screen-lg">
                <header class="modal-card-head">
                    <p class="modal-card-title">One-off sessions with Jack</p>
                    <a class="delete" aria-label="close" onclick="$('#sessions').removeClass('is-active')"></a>
                </header>
                <section class="modal-card-body" style="margin-bottom: 100px;">
                    <p class="mb-2">One-off sessions are a great option if you’re looking for specific advice on a
                        certain
                        topic.</p>
                    <div class="sm:grid grid-cols-2 gap-8">
                        <div class="box h-fit text-slate-900">
                            <h4 class="text-xl font-bold mb-4">CV Feedback</h4>
                            <p>Having a good resume on hand when going on the job hunt is crucial, and will make your
                                search a lot easier. Even if you're not looking for a new position right now, having an
                                up-to-date CV that sells your experience to future potential employers …</p>
                            <div class="grid grid-cols-2 mt-6">
                                <div class="pt-2">
                                    <span class="inline text-2xl text-navy-700 font-bold">$69</span>
                                    <span class="inline text-navy-700"> / 30 min</span>
                                </div>
                                <div class="text-right">
                                    <a href="/sessions/cv-feedback/book/3465/" class="blue-btn small">View details
                                        <svg class="w-5 h-5 align-sub" fill="currentColor" viewBox="0 0 20 20"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd"
                                                d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z"
                                                clip-rule="evenodd"></path>
                                        </svg></a>
                                </div>
                            </div>
                        </div>
                        <div class="box h-fit text-slate-900">
                            <h4 class="text-xl font-bold mb-4">Career Strategy</h4>
                            <p>Sometimes, a strategy is needed to accomplish a future career change, or simply to get
                                further in your current position. Should you go back to school? Look for a new job?
                                Learn a new set of skills by yourself? Become a freelancer? One of our …</p>
                            <div class="grid grid-cols-2 mt-6">
                                <div class="pt-2">
                                    <span class="inline text-2xl text-navy-700 font-bold">$89</span>
                                    <span class="inline text-navy-700"> / 45 min</span>
                                </div>
                                <div class="text-right">
                                    <a href="/sessions/career-strategy/book/3501/" class="blue-btn small">View details
                                        <svg class="w-5 h-5 align-sub" fill="currentColor" viewBox="0 0 20 20"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd"
                                                d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z"
                                                clip-rule="evenodd"></path>
                                        </svg></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
            <button class="modal-close is-large" onclick="$('#sessions').removeClass('is-active');"
                aria-label="close"></button>
        </div>

        <footer class="bg-white" id="footer" aria-labelledby="footerHeading">
            <h2 id="footerHeading" class="sr-only">Footer</h2>
            <div class="max-w-7xl mx-auto py-12 px-4 sm:px-6 lg:py-16 lg:px-8">
                <div class="xl:grid xl:grid-cols-3 xl:gap-8">
                    <div class="space-y-8 xl:col-span-1">
                        <a href="/" class="flex items-center space-x-4">
                            <img class="h-8 md:h-10" src="https://cdn.mentorcruise.com/img/mc-logo.svg"
                                alt="MentorCruise Logo">
                        </a>
                        <p class="text-gray-500 text-base font-normal">
                            Your trusted source to find highly-vetted mentors &amp; industry professionals to move your
                            career
                            ahead.
                        </p>
                        <div class="flex space-x-6">
                            <a href="https://facebook.com/mentorcruise/" title="MentorCruise Facebook"
                                target="_blank" rel="noreferrer" class="text-gray-400 hover:text-gray-500">
                                <span class="sr-only">Facebook</span>
                                <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                    <path fill-rule="evenodd"
                                        d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z"
                                        clip-rule="evenodd"></path>
                                </svg>
                            </a>
                            <a href="https://www.instagram.com/mentorcruise/" title="MentorCruise Instagram"
                                target="_blank" rel="noreferrer" class="text-gray-400 hover:text-gray-500">
                                <span class="sr-only">Instagram</span>
                                <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                    <path fill-rule="evenodd"
                                        d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z"
                                        clip-rule="evenodd"></path>
                                </svg>
                            </a>
                            <a href="https://twitter.com/mentorcruise/" title="MentorCruise Twitter" target="_blank"
                                rel="noreferrer" class="text-gray-400 hover:text-gray-500">
                                <span class="sr-only">Twitter</span>
                                <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                    <path
                                        d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84">
                                    </path>
                                </svg>
                            </a>
                            <a href="https://www.linkedin.com/company/mentorcruise/" title="MentorCruise Linkedin"
                                target="_blank" rel="noreferrer" class="text-gray-400 hover:text-gray-500">
                                <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24">
                                    <path
                                        d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z">
                                    </path>
                                </svg><span class="sr-only">LinkedIn</span>

                            </a>
                        </div>
                    </div>
                    <div class="mt-12 grid grid-cols-2 gap-8 xl:mt-0 xl:col-span-2">
                        <div class="md:grid md:grid-cols-2 md:gap-8">
                            <div>
                                <h3 class="text-sm font-semibold text-gray-400 tracking-wider uppercase">
                                    Platform
                                </h3>
                                <ul class="mt-4 space-y-4">
                                    <li>
                                        <a href="/mentor/browse/"
                                            class="text-base font-normal text-gray-500 hover:text-gray-900">
                                            Browse Mentors
                                        </a>
                                    </li>
                                    <li>
                                        <a href="/sessions/"
                                            class="text-base font-normal text-gray-500 hover:text-gray-900">
                                            Book a Session
                                        </a>
                                    </li>
                                    <li>
                                        <a href="/mentor/"
                                            class="text-base font-normal text-gray-500 hover:text-gray-900">
                                            Become a Mentor
                                        </a>
                                    </li>
                                    <li>
                                        <a href="/teams/"
                                            class="text-base font-normal text-gray-500 hover:text-gray-900">
                                            Mentorship for Teams
                                        </a>
                                    </li>
                                    <li>
                                        <a href="/testimonials/"
                                            class="text-base font-normal text-gray-500 hover:text-gray-900">
                                            Testimonials
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="mt-12 md:mt-0">
                                <h3 class="text-sm font-semibold text-gray-400 tracking-wider uppercase">
                                    Resources
                                </h3>
                                <ul class="mt-4 space-y-4">
                                    <li>
                                        <a href="/newsletter/"
                                            class="text-base font-normal text-gray-500 hover:text-gray-900">
                                            Newsletter
                                        </a>
                                    </li>
                                    <li>
                                        <a href="/podcast/"
                                            class="text-base font-normal text-gray-500 hover:text-gray-900">
                                            Podcast
                                        </a>
                                    </li>
                                    <li>
                                        <a href="/stories/"
                                            class="text-base font-normal text-gray-500 hover:text-gray-900">
                                            Case Studies
                                        </a>
                                    </li>
                                    <li>
                                        <a href="/perks/"
                                            class="text-base font-normal text-gray-500 hover:text-gray-900">
                                            Perks
                                        </a>
                                    </li>
                                    <li>
                                        <a href="/templates/"
                                            class="text-base font-normal text-gray-500 hover:text-gray-900">
                                            Templates
                                        </a>
                                    </li>
                                    <li>
                                        <a href="/blog/"
                                            class="text-base font-normal text-gray-500 hover:text-gray-900">
                                            Blog
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="md:grid md:grid-cols-2 md:gap-8">
                            <div>
                                <h3 class="text-sm font-semibold text-gray-400 tracking-wider uppercase">
                                    Company
                                </h3>
                                <ul class="mt-4 space-y-4">
                                    <li>
                                        <a href="/about/"
                                            class="text-base font-normal text-gray-500 hover:text-gray-900">
                                            About
                                        </a>
                                    </li>
                                    <li>
                                        <a href="/partners/"
                                            class="text-base font-normal text-gray-500 hover:text-gray-900">
                                            Partner Program
                                        </a>
                                    </li>
                                    <li>
                                        <a href="/write-for-us/"
                                            class="text-base font-normal text-gray-500 hover:text-gray-900">
                                            Write For Us
                                        </a>
                                    </li>
                                    <li>
                                        <a href="/coc/"
                                            class="text-base font-normal text-gray-500 hover:text-gray-900">
                                            Code of Conduct
                                        </a>
                                    </li>
                                    <li>
                                        <a href="/privacy/"
                                            class="text-base font-normal text-gray-500 hover:text-gray-900">
                                            Privacy Policy
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="mt-12 md:mt-0">
                                <h3 class="text-sm font-semibold text-gray-400 tracking-wider uppercase">
                                    Support
                                </h3>
                                <ul class="mt-4 space-y-4">
                                    <li>
                                        <a href="/faq/"
                                            class="text-base font-normal text-gray-500 hover:text-gray-900">
                                            FAQ
                                        </a>
                                    </li>
                                    <li>
                                        <a href="/contact/"
                                            class="text-base font-normal text-gray-500 hover:text-gray-900">
                                            Contact
                                        </a>
                                    </li>
                                </ul>
                                <h3 class="mt-12 text-sm font-semibold text-gray-400 tracking-wider uppercase">
                                    Collections
                                </h3>
                                <ul class="mt-4 space-y-4">
                                    <li>
                                        <a href="/topics/"
                                            class="text-base font-normal text-gray-500 hover:text-gray-900">
                                            Topics
                                        </a>
                                    </li>
                                    <li>
                                        <a href="/mentor/c/"
                                            class="text-base font-normal text-gray-500 hover:text-gray-900">
                                            Mentor Groups
                                        </a>
                                    </li>
                                    <li>
                                        <a href="/coaches/"
                                            class="text-base font-normal text-gray-500 hover:text-gray-900">
                                            Coaches
                                        </a>
                                    </li>
                                    <li>
                                        <a href="/companies/"
                                            class="text-base font-normal text-gray-500 hover:text-gray-900">
                                            Companies
                                        </a>
                                    </li>
                                    <li>
                                        <a href="/tutors/"
                                            class="text-base font-normal text-gray-500 hover:text-gray-900">
                                            Tutors
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mt-12 border-t border-gray-200 pt-8">
                    <p class="text-base font-normal text-gray-400 xl:text-center">© 2022
                        <a class="underline text-gray-400 normal-case" href="/about/">MentorCruise</a>. All Rights
                        Reserved.
                    </p>
                </div>
            </div>
        </footer>
        <div
            class="sticky bottom-0 lg:hidden w-full bg-white z-20 border-0 border-t border-solid border-slate-300 px-6 py-4">
            <div class="grid grid-cols-2">
                <div class="text-navy-700">
                    <span class="text-xs text-navy-700 font-medium inline-block">Starting from</span><br>
                    <span class="text-xl text-navy-700 font-bold inline price-element">$150</span>
                    <span class="text-xs text-navy-700 font-medium inline"> / month</span>
                </div>
                <div class="text-right">
                    <a onclick="document.querySelector('#plan-float').scrollIntoView({ behavior: 'smooth'});"
                        class="blue-btn">
                        View options
                    </a>
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
