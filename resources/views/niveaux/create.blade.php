@extends('layouts.base')

@section('css')
    <link href="/vendor/datatables/css/jquery.dataTables.min.css" rel="stylesheet">
@endsection

@section('content')
    <div class="content-body" style="margin-top: -50px;">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-6 col-lg-6">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Ajouter un niveau d'étude</h3>
                        </div>
                        <div class="card-body">
                            <div class="basic-form">
                                <form novalidate="" method="POST" action="/niveaux/create" enctype="multipart/form-data">
                                    @csrf
                                    <div class="mb-3">
                                        <label for="libelle">Ajout Niveau</label>
                                        <input class="form-control form-control-lg" type="text"
                                            placeholder="Niveau d'étude" name="libelle">
                                    </div>
                                    <div class="mb-3 row">
                                        <div class="col-lg-8 ms-auto">
                                            <button type="submit" class="btn "
                                                style="background-color: #C15DFB; color: white;">Ajouter</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Niveau d'Etude</h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="example5" class="display" style="min-width: 845px">
                                    <thead style="background-color: #C15DFB;">
                                        <tr>
                                            <th style="color: white;">Libelle</th>
                                            <th style="color: white;">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($niveaux as $niveau)
                                            <tr>
                                                <td>{{ $niveau->libelle }}</td>
                                                <td>
                                                    <div class="d-flex">
														<a href="#" class="btn btn-primary shadow btn-xs sharp me-1"><i class="fas fa-pencil-alt"></i></a>
														<a href="#" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
													</div>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
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
