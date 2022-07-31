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
</style>

<body style="font-family: 'Inter'; background: white;">
    @include('site.nav')
    <section class="section section-search">
        <div class="container content">
            <div class="banner-wrapper m-auto text-center aos aos-init aos-animate" data-aos="fade-up">
                <div class="banner-header">
                    <h1>Search Teacher in <span>Mentoring Appointment</span></h1>
                    <p>Discover the best Mentors &amp; institutions the city nearest to you.</p>
                </div>

                <div class="search-box">
                    <form action="search.html">
                        <div class="form-group search-location">
                            <button type="button" class="btn  btn-lg" style="background-color: #C15DFB; color: white; border-radius: 20px; border: solid 0 gray;">Devenir Mentoré</button>
                            
                        </div>
                        <div class="form-group search-info">
                            <button type="button" class="btn  btn-lg" style="background: white; color: #C15DFB;">Devenir Mentor</button>
                           
                            
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </section>
 
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
        <div class="row" style="flex-direction: row; justify-content: center; margin-top: 50px;">

            <div class="card text-white bg-white mb-3"
                style="max-width: 18rem; margin-left: 10px; box-shadow: 0 0 13px rgb(0 0 0 / 10%); margin: 0 40px 0 40px;">
                <div class="">
                    <img src="/images/icon-1.png" alt="" srcset=""
                        style="border: 4px solid white; border-radius: 50%; width: 100px; height: 100px;
                    margin-left: 90px; margin-top: 20px; background-color: #C15DFB">
                </div>
                <div class="card-body" style="text-align: center;">
                    <h5 class="card-title" style="font-weight: bold;">S'inscrire</h5>
                    <p class="card-text">Vous cherchez à rejoindre l'apprentissage en ligne? Maintenant c'est très
                        simple, Inscrivez-vous maintenant.</p>
                </div>
            </div>
            <div class="card text-white bg-white mb-3"
                style="max-width: 18rem;margin-left: 10px; box-shadow: 0 0 13px rgb(0 0 0 / 10%); margin: 0 40px 0 40px;">
                <div class="">
                    <img src="/images/icon-2.png" alt="" srcset=""
                        style="border: 4px solid white; border-radius: 50%; width: 100px; height: 100px;
                    margin-left: 90px; margin-top: 20px; background-color: #C15DFB">
                </div>
                <div class="card-body" style="text-align: center;">
                    <h5 class="card-title" style="font-weight: bold;">Collaborer</h5>
                    <p class="card-text">Collaborez selon votre propre timing, en planifiant avec la réservation d'un
                        mentor.</p>
                </div>
            </div>
            <div class="card text-white bg-white mb-3"
                style="max-width: 18rem;margin-left: 10px; box-shadow: 0 0 13px rgb(0 0 0 / 10%); margin: 0 40px 0 40px;">
                <div class="">
                    <img src="/images/icon-3.png" alt="" srcset=""
                        style="border: 4px solid white; border-radius: 50%; width: 100px; height: 100px;
                    margin-left: 90px; margin-top: 20px;background-color: #C15DFB">
                </div>
                <div class="card-body" style="text-align: center;">
                    <h5 class="card-title" style="font-weight: bold;">Amméliorer </h5>
                    <p class="card-text">vous pouvez rassembler différentes compétences et vous pouvez également devenir
                        mentor.</p>
                </div>
            </div>
        </div>
    </div>
    <section style="margin-top: 100px; background-color: #FFFFFF" class="container">

        @include('./layouts.dashbord')

        <div class="container text-center">
            <div class="row">
                <div class="col">
                    <div class="new-arrival-product card-body" style="width: 100%; height: 50%;">
                        <div class="new-arrivals-img-contnent">
                            <img class="img-fluid" src="images/product/1.jpg" alt="">
                        </div>

                    </div>
                </div>
                <div class="col">
                    <div class="new-arrival-product card-body">
                        <div class="new-arrivals-img-contnent">
                            <img class="img-fluid" src="images/product/1.jpg" alt="">
                        </div>

                    </div>
                </div>
                <div class="col">
                    <div class="new-arrival-product card-body">
                        <div class="new-arrivals-img-contnent">
                            <img class="img-fluid" src="images/product/1.jpg" alt="">
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div class="container text-center">
            <div class="row">
                <div class="col">
                    <div class="new-arrival-product card-body">
                        <div class="new-arrivals-img-contnent">
                            <img class="img-fluid" src="images/product/1.jpg" alt="">
                        </div>

                    </div>
                </div>
                <div class="col">
                    <div class="new-arrival-product card-body">
                        <div class="new-arrivals-img-contnent">
                            <img class="img-fluid" src="images/product/1.jpg" alt="">
                        </div>

                    </div>
                </div>
                <div class="col">
                    <div class="new-arrival-product card-body">
                        <div class="new-arrivals-img-contnent">
                            <img class="img-fluid" src="images/product/1.jpg" alt="">
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

</body>

</html>
