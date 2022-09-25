@extends('layouts.base')

@section('css')
    <link href="/vendor/datatables/css/jquery.dataTables.min.css" rel="stylesheet">
@endsection
@section('content')
    <div class="content-body">
        <div class="container-fluid">
            <div class="col-xl-12 col-lg-12">
                <div class="card" style="margin-top: -100px;">
                    <div class="card-header">
                        <h4 class="card-title">Planifier une session</h4>
                    </div>
                    <div class="card-body">
                        <div class="basic-form">
                            <form  novalidate="" method="POST" action="/sessions/create" enctype="multipart/form-data" >
                                @csrf
                                <div class="mb-3">
                                    <label for="connexion_id" class="control-label">Selectionner le mentor</label>
                                    <select name="connexion_id" id="connexion__id" class="default-select wide form-control">
                                        @foreach ($connexions as $connexion)
                                            <option value="{{$connexion->id}}">{{$connexion->mentore->user->prenom}} {{$connexion->mentore->user->nom}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="titre">Titre de la Session</label>
                                    <input class="form-control form-control-lg" type="text" placeholder="Titre de la session" name="titre">
                                </div>
                                <div class="mb-3">
                                    <label for="description">Description de la Session</label>
                                    <textarea class="form-control" id="ckeditor" type="text" rows="5" name="description"></textarea>
                                </div>
                                <div class="mb-3">
                                    <label for="">Date de la session"</label>
                                    <input class="form-control form-control-sm" type="date" placeholder="Date de la session" name="date">
                                </div>
                               
                                <div class="mb-3 row">
                                    <div class="col-lg-8 ms-auto">
                                        <button type="submit" class="btn " style="background-color: #C15DFB; color: white;">Enregistrer</button>
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
    <script src="/js/plugins-init/datatables.init.js"></script>vendor/ckeditor/ckeditor.js
    <script src="/vendor/ckeditor/ckeditor.js"></script>
@endsection
