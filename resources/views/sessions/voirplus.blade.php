@extends('layouts.base')

@section('css')
    <link href="/vendor/datatables/css/jquery.dataTables.min.css" rel="stylesheet">
    <style>
        *,
        ::before,
        ::after {
            box-sizing: border-box;
        }
    </style>
@endsection

@section('content')
    <div class="content-body">

        <div class="bspy4f-6 dKLozd"
            style="width: 100%;
                display: flex;
                flex-direction: column;">
            <div class="b99hij-0 flpvII"
                style="width: 100%;
                    display: grid;
                    grid-template-columns: repeat(12, 1fr);
                    gap: 16px;
                    grid-auto-flow: row;">
                <div class="sc-6hg9sk-0 bspy4f-1 dKoEov kVFBii" style="min-width: 0px; grid-column: span 8;">
                    <div class="sc-1qt8j1-7 bRkdcs"
                        style="padding: 24px;
                        margin-left: 20px;
                        background: rgb(255, 255, 255) none repeat scroll 0% 0%;
                        border-radius: 8px;">
                        <div class="sc-1qt8j1-0 fhXqDc"
                            style="width: 100%;
                                height: 240px;
                                position: relative;
                                display: flex;">
                            <span
                                style="box-sizing: border-box; display: block; overflow: hidden; width: initial; height: initial; background: rgba(0, 0, 0, 0) none repeat scroll 0% 0%; opacity: 1; border: 0px none; margin: 0px; padding: 0px; position: absolute; inset: 0px;"><img
                                    alt="" sizes="100vw"
                                    srcset="/_next/image?url=https%3A%2F%2Fsimplonline-v3-prod.s3.eu-west-3.amazonaws.com%2Fmedia%2Fimage%2Fjpg%2F18db624f-a51d-4a3b-93c1-d0fab11b4557.jpg&amp;w=640&amp;q=75 640w, /_next/image?url=https%3A%2F%2Fsimplonline-v3-prod.s3.eu-west-3.amazonaws.com%2Fmedia%2Fimage%2Fjpg%2F18db624f-a51d-4a3b-93c1-d0fab11b4557.jpg&amp;w=750&amp;q=75 750w, /_next/image?url=https%3A%2F%2Fsimplonline-v3-prod.s3.eu-west-3.amazonaws.com%2Fmedia%2Fimage%2Fjpg%2F18db624f-a51d-4a3b-93c1-d0fab11b4557.jpg&amp;w=828&amp;q=75 828w, /_next/image?url=https%3A%2F%2Fsimplonline-v3-prod.s3.eu-west-3.amazonaws.com%2Fmedia%2Fimage%2Fjpg%2F18db624f-a51d-4a3b-93c1-d0fab11b4557.jpg&amp;w=1080&amp;q=75 1080w, /_next/image?url=https%3A%2F%2Fsimplonline-v3-prod.s3.eu-west-3.amazonaws.com%2Fmedia%2Fimage%2Fjpg%2F18db624f-a51d-4a3b-93c1-d0fab11b4557.jpg&amp;w=1280&amp;q=75 1280w"
                                    src="/_next/image?url=https%3A%2F%2Fsimplonline-v3-prod.s3.eu-west-3.amazonaws.com%2Fmedia%2Fimage%2Fjpg%2F18db624f-a51d-4a3b-93c1-d0fab11b4557.jpg&amp;w=1280&amp;q=75"
                                    decoding="async" data-nimg="fill"
                                    style="position: absolute; inset: 0px; box-sizing: border-box; padding: 0px; border: medium none; margin: auto; display: block; width: 0px; height: 0px; min-width: 100%; max-width: 100%; min-height: 100%; max-height: 100%; object-fit: cover; object-position: center center;"><noscript></noscript>
                            </span>
                        </div>
                        <h1 class="ekeyz-0 sc-1qt8j1-1 dgmsZo bxSxRn"
                            style="margin-bottom: 24px;margin: 0px;
                            font-family: Nunito Sans, sans-serif;
                            font-size: 3.2rem;
                            line-height: 4rem;
                            font-weight: 800;
                            color: var(--text-color,#000000);
                            text-decoration: none;">
                            {{ $session->titre }}</h1>
                        <div class="sc-1qt8j1-6 fgFgJJ"
                            style="display: flex;
                                -moz-box-align: center;
                                align-items: center;">
                            <span class="ekeyz-0 dPTSJD sc-48swuy-0 jzZKXF bi2o3c-0 Ajoal"><img
                                    src="{{ $session->connexion->mentor->user->photo }}"
                                    style=" height: 58px;
                                    width: 58px;border-radius: 50%;overflow: hidden;"></span>
                            <div style="margin-left: 16px; ">
                                <p class="ekeyz-0 kFXjqR"
                                    style="margin: 0px;
                                    font-family: Nunito Sans, sans-serif;
                                    font-size: 1.2rem;
                                    line-height: 1.6rem;
                                    font-weight: 600;
                                    color: var(--text-color,#000000);
                                    text-decoration: none;">
                                    {{ $session->connexion->mentor->user->prenom }}
                                    {{ $session->connexion->mentor->user->nom }}</p>
                                <p class="ekeyz-0 sc-1qt8j1-3 kFXjqR cshyT"
                                    style="margin: 0px;
                                    font-family: Nunito Sans, sans-serif;
                                    font-size: 1.2rem;
                                    color: rgb(110, 106, 105);
                                    line-height: 1.6rem;
                                    font-weight: 600;
                                    color: var(--text-color,#000000);
                                    text-decoration: none;">
                                    {{ $session->date }}
                                </p>
                            </div>
                        </div>
                        <ul class="sc-1qt8j1-2 gRVEdY"
                            style="display: flex;
                                flex-wrap: wrap;
                                padding: 0px;
                                margin: 16px 0px 0px;">
                            <li style="list-style: none;"><button
                                    class="sc-160r80n-0 sc-5tr75l-1 eToZxs dFUNIb sc-5tr75l-2 ikIDR" disabled=""
                                    type="button"
                                    style="margin: 8px 8px 0px 0px; display: inline-flex;
                                        -moz-box-align: center;
                                        align-items: center;
                                        border-radius: 8px;
                                        border: 0px none;
                                        padding: 4px 8px;
                                        color: white;
                                        background-color: #C15DFB;
                                        outline: currentcolor none medium;
                                        transition: all 0.2s ease 0s;
                                        cursor: auto;pointer-events: none; opacity: 1;
                                        margin: 8px 8px 0px 0px;"><span
                                        class="ekeyz-0 kFXjqR"
                                        style="pointer-events: none;cursor: auto;">Domaine</span></button>
                            </li>
                        </ul>
                    </div>

                    <div class="sc-7lcum6-0 edCusw"
                        style="padding: 24px;
                            margin-left: 20px;
                            background: rgb(255, 255, 255) none repeat scroll 0% 0%;
                            border-radius: 8px;margin-top: 16px;">
                        <h2 class="ekeyz-0 dPTSJD"
                            style="margin: 0px;
                            font-family: Nunito Sans, sans-serif;
                            font-size: 2rem;
                            line-height: 3.2rem;
                            font-weight: 700;
                            color: var(--text-color,#000000);
                            text-decoration: none; ">
                            Contexte du Sujet </h2>
                        <div>
                            <div>
                                <p class="ekeyz-0 jasXoh">{{ $session->description }}</p>
                                
                                <p class="ekeyz-0 jasXoh">​</p>
                                <p class="ekeyz-0 jasXoh">​</p>
                            </div>
                        </div>
                    </div>
                    <div class="sc-7lcum6-0 edCusw"
                        style="padding: 24px;
                        margin-left: 20px;
                        background: rgb(255, 255, 255) none repeat scroll 0% 0%;
                        border-radius: 8px;margin-top: 16px;">
                        <h2 class="ekeyz-0 dPTSJD">Exercice à rendre </h2>
                        <div>
                            <div>
                                <p class="ekeyz-0 jasXoh">le 03/03/2022 à 17h00.</p>
                            </div>
                        </div>
                    </div>

                    {{-- <div class="sc-7lcum6-0 buHFMv" style="border-radius: 8px;">
                        <h3 class="ekeyz-0 dPTSJD" style="margin-left: 20px;">Documenter vous sur les sites suivants</h3>
                        <div class="b99hij-0 flpvII"
                            style="width: 100%;
                                    display: grid;
                                    grid-template-columns: repeat(12, 1fr);
                                    gap: 16px;
                                    grid-auto-flow: row;">
                            <div class="sc-6hg9sk-0 fhdcGJ"
                                style="min-width: 0px;
                                            grid-column: span 6;">
                                <div class="sc-1jto8d5-5 fpmKPx"
                                    style="display: flex;
                                        margin-left: 20px;
                                        -moz-box-align: center;
                                        align-items: center;
                                        -moz-box-pack: justify;
                                        justify-content: space-between;
                                        width: 100%;
                                        background: rgb(255, 255, 255) none repeat scroll 0% 0%;
                                        border-radius: 8px;
                                        padding: 12px 16px;">
                                    <div class="sc-1jto8d5-0 fVnFvZ">
                                        <div class="sc-1jto8d5-4 fZwNrY"><svg width="59" height="60"
                                                viewBox="0 0 59 60" fill="none" xmlns="http://www.w3.org/2000/svg"
                                                aria-hidden="true" focusable="false">
                                                <path
                                                    d="M17.0656 15.2958L16.8955 40.4177C16.8746 43.4953 18.0772 46.4386 20.2387 48.6001C22.4002 50.7616 25.3434 51.9641 28.4211 51.9433C31.4987 51.9224 34.4586 50.6799 36.6495 48.4889C38.8405 46.298 40.083 43.3381 40.1039 40.2605L40.274 15.1386C40.2879 13.0868 39.4862 11.1246 38.0452 9.68365C36.6042 8.24267 34.642 7.44094 32.5903 7.45484C30.5385 7.46873 28.5653 8.29712 27.1047 9.75775C25.644 11.2184 24.8157 13.1916 24.8018 15.2434L24.6452 40.3789C24.6382 41.4047 25.0391 42.3858 25.7596 43.1063C26.4801 43.8268 27.4612 44.2277 28.487 44.2207C29.5129 44.2138 30.4995 43.7996 31.2299 43.0693C31.9602 42.339 32.3744 41.3523 32.3813 40.3265L32.5247 17.1318"
                                                    stroke="black" stroke-width="2" stroke-linecap="round"
                                                    stroke-linejoin="round"></path>
                                                <path
                                                    d="M39.3178 53.955L33.486 60H14.1963C13.5383 60 13 59.4559 13 58.791V14.209C13 13.5441 13.5383 13 14.1963 13H43.8037C44.4617 13 45 13.5441 45 14.209V48.3633L39.3178 53.955Z"
                                                    fill="#5447C8"></path>
                                                <path d="M33.9346 48.6655L33.486 59.9999H23.3926L33.9346 48.6655Z"
                                                    fill="#302D75"></path>
                                                <path
                                                    d="M39.1681 54.1061L33.4858 60V49.5874C33.4858 48.9073 34.0242 48.3633 34.6971 48.3633H44.9999L39.1681 54.1061Z"
                                                    fill="#7666FF"></path>
                                                <path
                                                    d="M27.1049 9.75796C25.6443 11.2186 24.8159 13.1918 24.802 15.2436L24.6454 40.3791C24.6384 41.405 25.0393 42.3861 25.7598 43.1065C26.4803 43.827 27.4614 44.2279 28.4873 44.221C29.5131 44.214 30.4997 43.7998 31.2301 43.0695C31.9604 42.3392 32.3746 41.3526 32.3815 40.3267L32.525 17.132"
                                                    stroke="black" stroke-width="2" stroke-linecap="round"
                                                    stroke-linejoin="round"></path>
                                            </svg></div>
                                        <div class="sc-1jto8d5-3 iTkYhR"><a
                                                href="https://simplonline-v3-prod.s3.eu-west-3.amazonaws.com/media/file/xlsx/190b9edf-0611-419a-ad71-abf417de7e48.xlsx"
                                                target="_blank" rel="noopener noreferrer"
                                                class="ekeyz-0 sc-1jto8d5-1 jWuork eyhKxP">Base de Données CC.xlsx</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="sc-6hg9sk-0 fhdcGJ">
                                <div class="sc-1jto8d5-5 fpmKPx">
                                    <div class="sc-1jto8d5-0 fVnFvZ">
                                        <div class="sc-1jto8d5-4 fZwNrY"><svg width="74" height="47"
                                                viewBox="0 0 74 47" fill="none" xmlns="http://www.w3.org/2000/svg"
                                                aria-hidden="true" focusable="false">
                                                <path
                                                    d="M53.9 0.7C53.7 0.3 53.3 0 52.8 0H33.5H23.2C22.5 0 22 0.5 22 1.2V11.6V45.8C22 46 22 46.1 22.1 46.3C22.2 46.6 22.5 46.8 22.7 46.9C22.9 47 23 47 23.2 47H42.5H52.8C53.5 47 54 46.5 54 45.8V35.4V1.2C54 1 54 0.9 53.9 0.7Z"
                                                    fill="#5447C8"></path>
                                                <path
                                                    d="M35.8999 27.7H24.8999C24.2999 27.7 23.8999 27.3 23.8999 26.7V17.7C23.8999 17.1 24.2999 16.7 24.8999 16.7H35.8999C36.4999 16.7 36.8999 17.1 36.8999 17.7V26.7C36.8999 27.3 36.4999 27.7 35.8999 27.7Z"
                                                    fill="#625FC7"></path>
                                                <path
                                                    d="M50.8999 18.7H38.8999C38.2999 18.7 37.8999 18.3 37.8999 17.7C37.8999 17.1 38.2999 16.7 38.8999 16.7H50.8999C51.4999 16.7 51.8999 17.1 51.8999 17.7C51.8999 18.3 51.4999 18.7 50.8999 18.7Z"
                                                    fill="#625FC7"></path>
                                                <path
                                                    d="M50.8999 21.7H38.8999C38.2999 21.7 37.8999 21.3 37.8999 20.7C37.8999 20.1 38.2999 19.7 38.8999 19.7H50.8999C51.4999 19.7 51.8999 20.1 51.8999 20.7C51.8999 21.3 51.4999 21.7 50.8999 21.7Z"
                                                    fill="#625FC7"></path>
                                                <path
                                                    d="M50.8999 24.7H38.8999C38.2999 24.7 37.8999 24.3 37.8999 23.7C37.8999 23.1 38.2999 22.7 38.8999 22.7H50.8999C51.4999 22.7 51.8999 23.1 51.8999 23.7C51.8999 24.3 51.4999 24.7 50.8999 24.7Z"
                                                    fill="#625FC7"></path>
                                                <path
                                                    d="M50.8999 27.7H38.8999C38.2999 27.7 37.8999 27.3 37.8999 26.7C37.8999 26.1 38.2999 25.7 38.8999 25.7H50.8999C51.4999 25.7 51.8999 26.1 51.8999 26.7C51.8999 27.3 51.4999 27.7 50.8999 27.7Z"
                                                    fill="#625FC7"></path>
                                                <path
                                                    d="M50.8999 4.69995H24.8999C24.2999 4.69995 23.8999 4.29995 23.8999 3.69995V2.69995C23.8999 2.09995 24.2999 1.69995 24.8999 1.69995H50.8999C51.4999 1.69995 51.8999 2.09995 51.8999 2.69995V3.69995C51.8999 4.29995 51.4999 4.69995 50.8999 4.69995Z"
                                                    fill="#625FC7"></path>
                                                <path
                                                    d="M50.8999 15.7H24.8999C24.2999 15.7 23.8999 15.3 23.8999 14.7V6.69995C23.8999 6.09995 24.2999 5.69995 24.8999 5.69995H50.8999C51.4999 5.69995 51.8999 6.09995 51.8999 6.69995V14.7C51.8999 15.3 51.4999 15.7 50.8999 15.7Z"
                                                    fill="#625FC7"></path>
                                                <path
                                                    d="M50.8999 44.7H24.8999C24.2999 44.7 23.8999 44.3 23.8999 43.7V29.7C23.8999 29.1 24.2999 28.7 24.8999 28.7H50.8999C51.4999 28.7 51.8999 29.1 51.8999 29.7V43.7C51.8999 44.3 51.4999 44.7 50.8999 44.7Z"
                                                    fill="#625FC7"></path>
                                                <path
                                                    d="M53.9 0.7C53.7 0.3 53.3 0 52.8 0H33.5H23.2C22.5 0 22 0.5 22 1.2V11.6V45.8C22 46 22 46.1 22.1 46.3C22.2 46.6 22.5 46.8 22.7 46.9C22.9 47 23 47 23.2 47H42.5H52.8C53.5 47 54 46.5 54 45.8V35.4V1.2C54 1 54 0.9 53.9 0.7Z"
                                                    fill="#5447C8"></path>
                                                <path
                                                    d="M35.8999 27.7H24.8999C24.2999 27.7 23.8999 27.3 23.8999 26.7V17.7C23.8999 17.1 24.2999 16.7 24.8999 16.7H35.8999C36.4999 16.7 36.8999 17.1 36.8999 17.7V26.7C36.8999 27.3 36.4999 27.7 35.8999 27.7Z"
                                                    fill="#7666FF"></path>
                                                <path
                                                    d="M50.8999 18.7H38.8999C38.2999 18.7 37.8999 18.3 37.8999 17.7C37.8999 17.1 38.2999 16.7 38.8999 16.7H50.8999C51.4999 16.7 51.8999 17.1 51.8999 17.7C51.8999 18.3 51.4999 18.7 50.8999 18.7Z"
                                                    fill="#7666FF"></path>
                                                <path
                                                    d="M50.8999 21.7H38.8999C38.2999 21.7 37.8999 21.3 37.8999 20.7C37.8999 20.1 38.2999 19.7 38.8999 19.7H50.8999C51.4999 19.7 51.8999 20.1 51.8999 20.7C51.8999 21.3 51.4999 21.7 50.8999 21.7Z"
                                                    fill="#7666FF"></path>
                                                <path
                                                    d="M50.8999 24.7H38.8999C38.2999 24.7 37.8999 24.3 37.8999 23.7C37.8999 23.1 38.2999 22.7 38.8999 22.7H50.8999C51.4999 22.7 51.8999 23.1 51.8999 23.7C51.8999 24.3 51.4999 24.7 50.8999 24.7Z"
                                                    fill="#7666FF"></path>
                                                <path
                                                    d="M50.8999 27.7H38.8999C38.2999 27.7 37.8999 27.3 37.8999 26.7C37.8999 26.1 38.2999 25.7 38.8999 25.7H50.8999C51.4999 25.7 51.8999 26.1 51.8999 26.7C51.8999 27.3 51.4999 27.7 50.8999 27.7Z"
                                                    fill="#7666FF"></path>
                                                <path
                                                    d="M50.8999 4.69995H24.8999C24.2999 4.69995 23.8999 4.29995 23.8999 3.69995V2.69995C23.8999 2.09995 24.2999 1.69995 24.8999 1.69995H50.8999C51.4999 1.69995 51.8999 2.09995 51.8999 2.69995V3.69995C51.8999 4.29995 51.4999 4.69995 50.8999 4.69995Z"
                                                    fill="#7666FF"></path>
                                                <path
                                                    d="M50.8999 15.7H24.8999C24.2999 15.7 23.8999 15.3 23.8999 14.7V6.69995C23.8999 6.09995 24.2999 5.69995 24.8999 5.69995H50.8999C51.4999 5.69995 51.8999 6.09995 51.8999 6.69995V14.7C51.8999 15.3 51.4999 15.7 50.8999 15.7Z"
                                                    fill="#7666FF"></path>
                                                <path
                                                    d="M50.8999 44.7H24.8999C24.2999 44.7 23.8999 44.3 23.8999 43.7V29.7C23.8999 29.1 24.2999 28.7 24.8999 28.7H50.8999C51.4999 28.7 51.8999 29.1 51.8999 29.7V43.7C51.8999 44.3 51.4999 44.7 50.8999 44.7Z"
                                                    fill="#7666FF"></path>
                                                <path
                                                    d="M23.2643 20.72H26.0483L22.0163 32H19.6803L17.2963 25.232L14.8803 32H12.5283L8.51231 20.72H11.5043L13.8403 27.872L16.3683 20.72H18.4003L20.8163 28L23.2643 20.72ZM41.2018 20.72H43.9858L39.9538 32H37.6178L35.2338 25.232L32.8178 32H30.4658L26.4498 20.72H29.4418L31.7778 27.872L34.3058 20.72H36.3378L38.7538 28L41.2018 20.72ZM59.1393 20.72H61.9233L57.8913 32H55.5553L53.1713 25.232L50.7553 32H48.4033L44.3873 20.72H47.3793L49.7153 27.872L52.2433 20.72H54.2753L56.6913 28L59.1393 20.72ZM62.0083 29.088H64.9683V32H62.0083V29.088Z"
                                                    fill="black"></path>
                                            </svg></div>
                                        <div class="sc-1jto8d5-3 iTkYhR"><a
                                                href="https://www.ionos.fr/digitalguide/sites-internet/developpement-web/php-8/"
                                                target="_blank" rel="noopener noreferrer"
                                                class="ekeyz-0 sc-1jto8d5-1 jWuork eyhKxP">PHP 8</a></div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div> --}}
                    <div class="sc-7lcum6-0 edCusw"
                        style="padding: 24px;
                        margin-left: 20px;
                        background: rgb(255, 255, 255) none repeat scroll 0% 0%;
                        border-radius: 8px;margin-top: 16px;">
                        <h2 class="ekeyz-0 dPTSJD">Rendus</h2>
                        <p class="ekeyz-0 jasXoh">Lien de google document contenant l'exercice</p>
                    </div>
                </div>
            </div>
        </div>
        <form action="" style="display: flex;
            flex-direction: column;">
            <div class="sc-26jkbn-2 ibnEkx"
                style="display: flex;
                        flex-direction: column;
                        border-radius: 8px 8px 0px 0px;
                        background-color: rgb(246, 246, 252);">
                <div class="sc-26jkbn-0 kHCLzy"
                    style="display: flex;
                    -moz-box-align: center;
                    align-items: center;
                    border-radius: 8px 8px 0px 0px;
                    border-bottom: 1px solid rgb(220, 219, 243);
                    padding: 12px 16px 8px;">
                    <button type="button" class="sc-160r80n-0 gfiwjV"
                        style="font-family: Nunito Sans, sans-serif;
                        font-size: 1.2rem;
                        line-height: 1.6rem;
                        font-weight: 600;
                        text-decoration: none;
                        color: rgb(255, 255, 255);
                        --icon-color: #FFFFFF;
                        display: flex;
                        -moz-box-align: center;
                        align-items: center;
                        -moz-box-pack: center;
                        justify-content: center;
                        gap: 8px;
                        margin: 4px;
                        padding: calc(2px) calc(6px);
                        border-radius: 8px;
                        border: 2px solid rgb(80, 77, 193);
                        background-color: rgb(80, 77, 193);
                        cursor: pointer;
                        transition: all 0.2s ease 0s;
                        will-change: box-shadow, transform;"><span>Soumettre
                            un
                            rendu</span><span> </span><svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                            xmlns="http://www.w3.org/2000/svg" aria-hidden="true" focusable="false"
                            style="height: 1.6rem;
                            width: 1.6rem;
                            flex-shrink: 0;
                            background-color: var(--icon-bg-color,transparent);
                            border-radius: 50%;
                            box-sizing: content-box;
                            border: calc((24px - 24px) / 2) solid var(--icon-bg-color,transparent);"
                            class="sc-15iua2v-0 dIfPYi">
                            <line x1="12" y1="7" x2="12" y2="17" stroke="black"
                                style="stroke: var(--icon-color,#000000);" stroke-width="2" stroke-linecap="round"
                                class="colorStroke"></line>
                            <line x1="7" y1="12" x2="17" y2="12" stroke="black"
                                stroke-width="2" stroke-linecap="round" class="colorStroke"
                                style="stroke: var(--icon-color,#000000);"></line>
                        </svg></button>
                    <p class="ekeyz-0 kFXjqR"
                        style="margin-left: 16px;
                        --text-color: #6E6A69;margin: 0px;
                        font-family: Nunito Sans, sans-serif;
                        font-size: 1.2rem;
                        line-height: 1.6rem;
                        font-weight: 600;
                        color: var(--text-color,#000000);
                        text-decoration: none;">
                        Ajouter un URL ou/et une pièce jointe</p>
                </div>
                <div class="sc-26jkbn-1 gQXfTM"
                    style="display: flex;
                            -moz-box-align: end;
                            align-items: end;
                            padding: 8px 16px 16px;
                            gap: 8px;">
                    <div class="phn7vi-4 dTCQtx"
                        style="flex: 1 1 0%;position: relative;
                    display: flex;
                    flex-direction: column;
                    gap: 4px;">
                        <label for="message" class="ekeyz-0 phn7vi-0 jWuork kDAEEB"
                            style="white-space: nowrap;
                    text-overflow: ellipsis;
                    overflow: hidden;
                    max-width: 100%;margin: 0px;
                    font-family: Nunito Sans, sans-serif;
                    font-size: 1.4rem;
                    line-height: 2.4rem;
                    font-weight: 400;
                    color: var(--text-color,#000000);
                    text-decoration: none;">Écrire
                            un message
                            <sup class="phn7vi-1 fOvwvI" style="color: rgb(206, 0, 51);">*</sup></label>
                        <div><input name="message" id="message" aria-invalid="false" placeholder="Tapez ici ..."
                                class="sc-1mcsrt-0 cswTiz" value=""
                                style="width: 100%;
                                height: 48px;
                                background-color: rgb(255, 255, 255);
                                padding: 12px;
                                border-radius: 8px;
                                font-family: Nunito Sans, sans-serif;
                                font-size: 1.4rem;
                                line-height: 2.4rem;
                                font-weight: 400;
                                color: var(--text-color,#000000);
                                text-decoration: none;
                                outline: currentcolor none medium;
                                border: 1px solid rgb(179, 179, 179);
                                box-shadow: transparent 0px 0px 0px 0px;
                                transition: box-shadow 0.2s ease 0s;
                                will-change: box-shadow;">
                        </div>
                    </div><button type="submit" aria-label="Soumettre ce message" class="kltvjl-0 bsCnGQ"
                        style="display: flex;
                                -moz-box-align: center;
                                align-items: center;
                                gap: 12px;
                                border-radius: 50%;
                                text-decoration: none;
                                border: medium none;
                                background: rgba(0, 0, 0, 0) none repeat scroll 0% 0%;
                                padding: 0px;
                                outline: currentcolor none medium;
                                --icon-bg-color: #F0F0F0;
                                --icon-color: #504DC1;"><svg
                            size="48" class="sc-15iua2v-0 jaSQos ye9e3z-0 bhhnXa" width="24" height="24"
                            viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true"
                            focusable="false"
                            style="background-color: var(--icon-bg-color,transparent);
                            border-radius: 50%;
                            box-sizing: content-box;
                            border: calc((48px - 24px) / 2) solid var(--icon-bg-color,transparent);
                            width: 24px;
                            height: 24px;">
                            <path d="M21 2.91992L10 14.3599" stroke="black" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="colorStroke" style="stroke: var(--icon-color,#000000);">
                            </path>
                            <path d="M21 2.91992L14 23.7199L10 14.3599L1 10.1999L21 2.91992Z" stroke="black"
                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="colorStroke"
                                style="  stroke: var(--icon-color,#000000);">
                            </path>
                        </svg></button>
                </div>
            </div>
        </form>

    </div>
@endsection

@section('js')
    <!-- Datatable -->
    <script src="/vendor/datatables/js/jquery.dataTables.min.js"></script>
    <script src="/js/plugins-init/datatables.init.js"></script>
@endsection
