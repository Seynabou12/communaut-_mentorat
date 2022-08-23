@extends('layouts.base')

@section('css')
    <link href="/vendor/datatables/css/jquery.dataTables.min.css" rel="stylesheet">
@endsection

@section('content')
    <div class="content-body">
        <div class="container-fluid">

            <div class="col-xl-8 col-lg-8">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Planifier une session</h4>
                    </div>
                    <div class="card-body">
                        <div class="basic-form">
                            <form  novalidate="" method="POST" action="/sessions/create" enctype="multipart/form-data" >
                                @csrf
                                <div class="form-group mb-3">
                                    <label for="connexion_id" class="control-label">Mentoré</label>
                                    <select name="connexion_id" id="connexion__id" class="form-control">
                                        @foreach ($connexions as $connexion)
                                            <option value="{{$connexion->id}}">{{$connexion->mentore->user->prenom}} {{$connexion->mentore->user->nom}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <input class="form-control form-control-lg" type="text"
                                        placeholder="Titre de la session" name="titre">
                                </div>
                                <div class="mb-3">
                                    <textarea class="form-control" type="text" placeholder="Description de la session" name="description"></textarea>
                                </div>
                                <div class="mb-3">
                                    <label for="">Date de la session"</label>
                                    <input class="form-control form-control-sm" type="date" placeholder="Date de la session" name="date">
                                </div>
                                <div class="mb-3 row">
                                    <div class="col-lg-8 ms-auto">
                                        <button type="submit" class="btn " style="background-color: #C15DFB; color: white;">Ajouter</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js')
    <!-- Datatable -->
    <script src="/vendor/datatables/js/jquery.dataTables.min.js"></script>
    <script src="/js/plugins-init/datatables.init.js"></script>
@endsection
