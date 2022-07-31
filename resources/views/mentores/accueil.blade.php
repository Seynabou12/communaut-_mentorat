@extends('layouts.base')

@section('css')
    <link href="/vendor/datatables/css/jquery.dataTables.min.css" rel="stylesheet">
@endsection

@section('content')
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
@endsection

@section('js')
    <!-- Datatable -->
    <script src="/vendor/datatables/js/jquery.dataTables.min.js"></script>
    <script src="/js/plugins-init/datatables.init.js"></script>
@endsection
