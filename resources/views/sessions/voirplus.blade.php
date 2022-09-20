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

        <form action="#"
            style="padding: 24px;
            margin-left: 20px;
            background: rgb(255, 255, 255) none repeat scroll 0% 0%;
            border-radius: 8px;margin-top: 16px;">
            <label>Ajouter un Rendu</label>
            <div class="input-group mb-3  input-success">
                <span class="input-group-text">https://example.com</span>
                <input type="text" class="form-control">
            </div>
        </form>
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
