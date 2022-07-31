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
                        <h4 class="card-title">Ajouter un niveau d'étude</h4>
                    </div>
                    <div class="card-body">
                        <div class="basic-form">
                            <form  novalidate="" method="POST" action="/niveaux/create" enctype="multipart/form-data" >
                                @csrf
                                <div class="mb-3">
                                    <label for="libelle">Niveau d'étude</label>
                                    <input class="form-control form-control-lg" type="text"
                                        placeholder="Niveau d'étude" name="libelle">
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