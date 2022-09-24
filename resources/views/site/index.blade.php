<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<style>
    img {
        background-color: (0deg, rgba(193, 93, 251, 0.3), rgba(193, 93, 251, 0.3));
        position: relative;
    }

    .style-card-header {
        height: 150px;

        width: 150px;
        background: #FFFFFF;
        border-radius: 50%;
        margin: auto;
        box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
        flex-direction: column;
    }

    .style-card {
        height: 350px;
        margin: 30px 2%;
        background: rgba(255, 255, 255, 0.21);
        box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);

    }

    .card-text {
        /* width: auto; */
        height: 144px;
        font-family: 'Inter';
        font-style: normal;
        margin-top: 60px;
        font-size: 18px;
        line-height: 36px;
        text-align: center;
        color: #000000;
        margin: auto;
    }

    .cart {
        align-items: flex-start;

    }

    .section-search {

        background: #f8f8f8;
        min-height: 450px;
        background-image: url(/images/filles.jpg);
        background-size: cover !important;
        background-repeat: no-repeat;
        background-position: center;
        position: relative;
        background-blend-mode: Darken;
        padding: 110px 0;
    }

    .content {
        width: 100%;
        padding-right: var(--bs-gutter-x, .75rem);
        padding-left: var(--bs-gutter-x, .75rem);
        margin-right: auto;
        margin-left: auto;
    }

    .aos-animate {
        opacity: 1;
        transform: translateZ(0);
    }

    @media (max-width: 991.98px) {
        .banner-wrapper {
            max-width: 720px;
        }
    }

    .banner-wrapper .banner-header {
        margin-bottom: 30px;
    }

    *,
    ::after,
    ::before {
        box-sizing: border-box;
    }

    @media (max-width: 991.98px) {
        .banner-wrapper .banner-header h1 {
            font-size: 2.125rem;
        }
    }

    .banner-wrapper .banner-header h1 {
        margin-bottom: 15px;
        font-size: 50px;
        font-weight: bold;
        color: #ffffff;
    }

    .banner-wrapper .banner-header h1 span {
        color: #C15DFB;
    }

    @media (max-width: 991.98px) {
        .banner-wrapper .banner-header p {
            font-size: 20px;
        }
    }

    .banner-wrapper .banner-header p {
        font-size: 24px;
        margin-bottom: 0;
        color: #fff;
    }

    p {
        display: block;
        margin-block-start: 1em;
        margin-block-end: 1em;
        margin-inline-start: 0px;
        margin-inline-end: 0px;
    }

    .search-box form {
        display: flex;
    }

    .search-box .search-location {
        -ms-flex: 0 0 240px;
        flex: 0 0 240px;
        margin-right: 12px;
        position: relative;
        width: 269px;
    }

    .allcourse-section {
        padding: 40px 0;
    }

    .bg-grey {
        background-color: #FAFAFA;
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

    @media only screen and (max-width: 991.98px) {
        .container {
            max-width: 100%;
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

    .row {
        display: -ms-flexbox;
        display: flex;
        -ms-flex-wrap: wrap;
        flex-wrap: wrap;
        margin-right: -15px;
        margin-left: -15px;
    }

    .col-lg-4,
    .col-md-4 {
        position: relative;
        width: 100%;
        padding-right: 15px;
        padding-left: 15px;
    }

    .allcourse-card {
        position: relative;
        text-align: center;
        margin-bottom: 30px;
        width: 100%;
    }

    .allcourse-card {
        position: relative;
        text-align: center;
        margin-bottom: 30px;
        width: 100%;
    }

    .allcourse-img img {
        border-radius: 10px;
        width: 100%;
    }

    .img-fluid {
        max-width: 100%;
        height: auto;
    }

    img {
        vertical-align: middle;
        border-style: none;
    }

    .mb-3,
    . {
        margin-bottom: 1rem !important;
    }

    h4 {
        display: block;
        margin-block-start: 1.33em;
        margin-block-end: 1.33em;
        margin-inline-start: 0px;
        margin-inline-end: 0px;
        font-weight: 500;
        line-height: 1.2;
        margin-top: 0;

    }

    .text-warning,
    .dropdown-menu>li>a.text-warning {
        color: #C15DFB;
    }

    *,
    ::after,
    ::before {
        box-sizing: border-box;
    }

    @media only screen and (max-width: 575.98px) {
        .btn {
            font-size: 0.875rem;
        }
    }

    .btn {
        letter-spacing: 0.02em;
    }

    .btn-course {
        background: #009DA6;
        border-radius: 30px;
        padding: 10px 20px;
        color: #fff;
        font-size: 14px;
        font-weight: 500;
    }

    .btn:not(:disabled):not(.disabled) {
        cursor: pointer;
    }

    .bg-grey {
        background-color: #FAFAFA;
    }

    @media only screen and (max-width: 767.98px) {
        .instructor-section {
            padding: 30px 0;
        }
    }

    @media only screen and (max-width: 991.98px) {
        .container {
            max-width: 100%;
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

    .section-heading {
        margin-bottom: 30px;
    }

    .align-items-center {
        align-items: center !important;
    }

    .d-flex {
        display: flex !important;
    }

    *,
    ::after,
    ::before {
        box-sizing: border-box;
    }

    .heading-content {
        position: relative;
    }

    .heading-content h2 {
        font-size: 26px;
    }

    h2 {
        margin-top: 0;
        line-height: 1.2;
        margin-bottom: 0.5rem
    }
    }

    .heading-content p {
        color: #969696;
    }

    p:last-child {
        margin-bottom: 0;
    }

    p {
        margin-top: 0;
        margin-bottom: 1rem;
    }

    *,
    ::after,
    ::before {
        box-sizing: border-box;
    }

    p {
        display: block;
        margin-block-start: 1em;
        margin-block-end: 1em;
        margin-inline-start: 0px;
        margin-inline-end: 0px;
    }

    .row {
        display: flex;
        -ms-flex-wrap: wrap;
        flex-wrap: wrap;
        margin-right: -15px;
        margin-left: -15px;
    }

    .col-md-12,
    .col-lg-6 {
        position: relative;
        width: 100%;
        padding-right: 15px;
        padding-left: 15px;
    }

    @media only screen and (max-width: 767.98px) {
        .instructor-card {
            margin-bottom: 20px;
        }
    }

    .instructor-card {
        background: #FFFFFF;
        box-shadow: 0px 2px 8px rgb(183 183 183 / 25%);
    }

    @media only screen and (max-width: 767.98px) {
        .instructor-profile {
            display: block;
            text-align: center;
            padding: 20px 15px;
        }

    }

    @media only screen and (max-width: 991.98px) {
        .instructor-profile {
            text-align: center;
            padding: 33px 21px;
        }

    }

    .align-items-center {
        -ms-flex-align: center !important;
        align-items: center !important;
    }

    .instructor-img img {
        width: 160px;
        border-radius: 50%;
    }

    img {
        vertical-align: middle;
        border-style: none;
    }

    @media only screen and (max-width: 991.98px) {
        .instructor-desc {
            margin-top: 15px;
        }
    }

    .text-warning,
    .dropdown-menu>li>a.text-warning {
        color: #FF9C27 !important;
    }

    .mb-0,
    .my-0 {
        margin-bottom: 0 !important;
    }

    h3 {
        line-height: 1.2;
        margin-top: 0;
    }

    .text-primary,
    .dropdown-menu>li>a.text-primary {
        color: #009DA6 !important;
    }

    .instructor-desc p {
        line-height: 24px;
        margin-top: 12px;
    }

    <style>p:last-child {
        margin-bottom: 0;
    }

    @media only screen and (max-width: 767.98px) {
        .instructor-content {
            padding: 0 15px 20px;
        }
    }

    .ml-auto,
    .mx-auto {
        margin-left: auto !important;
    }

    .ic-right a {
        font-weight: 500;
        color: #009DA6;
    }

    a {
        text-decoration: none;
        background-color: transparent;
    }

    @media only screen and (max-width: 991.98px) {
        .instructor-profile {
            text-align: center;
            padding: 33px 21px;
        }
    }
</style>

<body style="font-family: 'Inter'; background: white;">
   
    {{-- <section class="section section-search">
        <div class="container content">
            <div class="banner-wrapper m-auto text-center aos aos-init aos-animate" data-aos="fade-up">
                <div class="banner-header">
                    <h1>Search Teacher in <span>Mentoring Appointment</span></h1>
                    <p>Discover the best Mentors &amp; institutions the city nearest to you.</p>
                </div>

                <div class="search-box">
                    <form action="search.html">
                        <div class="form-group search-location">
                            <button type="button" class="btn  btn-lg"
                                style="background-color: #C15DFB; color: white; border-radius: 20px; border: solid 0 gray;">Devenir
                                Mentoré</button>

                        </div>
                        <div class="form-group search-info">
                            <button type="button" class="btn  btn-lg"
                                style="background: white; color: #C15DFB;">Devenir Mentor</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </section> --}}

    <div class="container-fluid" style="background: #FFFF; margin-top: -15%; color: black;">
        <div class="texte" style="margin-top: 20%;">
            <div class="row" style="text-align: center;">
                <h4>FLUX DU MENTORAT</h4>
            </div>
            <br>
            <div class="row" style=" text-align: center;">
                <h3 style="font-weight: bold;">Comment ça Fonctionne?</h3>
            </div>
            <br>
            <div class="row" style="text-align: center;">
                <h5>Vous cherchez à rejoindre des institutions en ligne ? Maintenant c'est très simple, Inscrivez-vous
                    avec le mentorat</h5>
            </div>
        </div>
        
    </div>

    <section class="allcourse-section bg-grey">
        <div class="container">
            <div style="text-align: center !important; position: relative;">
                <div class="section-title  "
                    style=" margin-bottom: 16px !important;position: relative;
            max-width: 640px;">
                    <p class="subtitle " style="  margin: 0 0 20px;">
                        CHOOSE THE</p>
                    <h2 class="title "
                        style="font-weight: 500;
                font-size: 32px;
                line-height: 1.2;
                position: relative;
                color: #2F2D51;overflow-wrap: break-word;">
                        Different All Learning Paths </h2>
                </div>
            </div>

            <div class="row">
                <div class="col-md-4 col-lg-4 d-flex flex-wrap">
                    <div class="allcourse-card">
                        <div class="allcourse-img"><img src="/images/filles.jpg" alt="" class="img-fluid"></div>
                        <div class="allcourse-content">
                            <h4 class="mb-3">Design</h4>
                            <p>Over <span class="text-warning">2,500</span> Courses</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-lg-4 d-flex flex-wrap">
                    <div class="allcourse-card">
                        <div class="allcourse-img"><img src="/images/filles.jpg" alt="" class="img-fluid"></div>
                        <div class="allcourse-content">
                            <h4 class="mb-3">Digital Marketer</h4>
                            <p>Over <span class="text-warning">5,500</span> Courses</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-lg-4 d-flex flex-wrap">
                    <div class="allcourse-card">
                        <div class="allcourse-img"><img src="/images/filles.jpg" alt="" class="img-fluid">
                        </div>
                        <div class="allcourse-content">
                            <h4 class="mb-3">Photography</h4>
                            <p>Over <span class="text-warning">2,540</span> Courses</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-lg-4 d-flex flex-wrap">
                    <div class="allcourse-card">
                        <div class="allcourse-img"><img src="/images/filles.jpg" alt="" class="img-fluid">
                        </div>
                        <div class="allcourse-content">
                            <h4 class="mb-3">IT Security</h4>
                            <p>Over <span class="text-warning">2,750</span> Courses</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-lg-4 d-flex flex-wrap">
                    <div class="allcourse-card">
                        <div class="allcourse-img"><img src="/images/filles.jpg" alt="" class="img-fluid">
                        </div>
                        <div class="allcourse-content">
                            <h4 class="mb-3">Research</h4>
                            <p>Over <span class="text-warning">2,120</span> Courses</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-lg-4 d-flex flex-wrap">
                    <div class="allcourse-card">
                        <div class="allcourse-img"><img src="/images/filles.jpg" alt="" class="img-fluid">
                        </div>
                        <div class="allcourse-content">
                            <h4 class="mb-3">Finance</h4>
                            <p>Over <span class="text-warning">2,840</span> Courses</p>
                        </div>
                    </div>
                </div>
                <div class="section-btn m-auto"><button class="btn btn-course"
                        style="background-color: #C15DFB; color: white; ">View all Courses <i
                            class="fas fa-caret-right right-nav-white"></i></button></div>
            </div>
        </div>
    </section>


</body>

</html>
