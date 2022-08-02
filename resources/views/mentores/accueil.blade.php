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
    <link href="vendor/jquery-nice-select/css/nice-select.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

</head>

<body>
    @include('site.nav')
    <div class="">
        <div class="container-fluid">
            <h3>Des mentors recommandés pour vous</h3>
            <div class="row">
                @foreach ($mentors as $mentor)
                    <div class="col-md-3" style="margin-top: 100px; flex-direction: row;display: flex;">
                        <div class="card overflow-hidden" style="">
                            <div class="text-center p-3 overlay-box "
                                style="">
                                <div class="profile-photo">
                                    <img src="{{ $mentor->user->photo }}" width="100"
                                        class="img-fluid rounded-circle" alt="">
                                </div>
                                <h3 class="mt-3 mb-1 text-white">{{ $mentor->user->nom }} {{ $mentor->user->prenom }}
                                </h3>
                                <p class="text-white mb-0">{{ $mentor->user->email }}</p>
                            </div>
                            <ul class="list-group list-group-flush">
                                <p>{{ $mentor->parcours }}</p>
                            </ul>
                            <div class="card-footer border-0 mt-0">
                                <button class="btn btn-primary" style="color: white;">
                                    <a href="/mentores/{{ Auth::user()->mentore->id }}/connecte/{{ $mentor->id }}"
                                        class="card-link float-end">Se Connecter</a>

                                </button>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    </div>
</body>

</html>







{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="/vendor/datatables/css/jquery.dataTables.min.css" rel="stylesheet">
</head>
<body>
    <div class="content-body">
        <div class="container-fluid">
            <h3>Des mentors recommandés pour vous</h3>

            @foreach ($mentors as $mentor)
                <div class="col-md-4 col-sm-6">
                    <div class="card">
                        <div class="card-header border-0 pb-0">
                            <h5 class="card-title">{{$mentor->user->prenom}} {{$mentor->user->nom}}</h5>
                        </div>
                        <div class="card-body">
                            <p class="card-text">
                                {{$mentor->parcours}}
                            </p>
                        </div>
                        <div class="card-footer border-0 pt-0 d-flex">
                            <p class="card-text d-inline">
                                <a href="/mentores/{{Auth::user()->mentore->id}}/connecte/{{$mentor->id}}" class="card-link float-end">Se Connecter</a>
                            </p>
                            <a href="javascript:void(0);" class="card-link float-end">Card link</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</body>
</html> --}}
