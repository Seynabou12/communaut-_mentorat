@extends('layouts.base')

@section('css')
    <link href="/vendor/datatables/css/jquery.dataTables.min.css" rel="stylesheet">
@endsection

@section('content')
    <div class="content-body">
        <div class="container-fluid">

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Listes des Mentorés inscrites</h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="example3" class="display">
                                    <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th>Profil</th>
                                            <th>Adresse</th>
                                            <th>Telephone</th>
                                            <th>Email</th>
                                            <th>Mot de Passe</th>
                                            <th>Attentes</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $no = 1; ?>
                                        @foreach ($mentores as $mentore)
                                            <tr>
                                                <td>{{ $no++ }}</td>
                                                <td>
                                                    <div class="row">
                                                        <div class="col-4">
                                                            <img src="{{ asset($mentore->photo) }}" alt="" srcset=""
                                                            width="35" height="35" class="img img-responsive" style="border-radius: 50%;">
                                                        </div>
                                                        <div class="col-8">
                                                            {{ $mentore->prenom }} {{ $mentore->nom }}
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>{{ $mentore->adresse }}</td>
                                                <td>{{ $mentore->telephone }}</td>
                                                <td>{{ $mentore->email }}</td>
                                                <td>{{ $mentore->motDePasse }}</td>
                                                <td>{{ $mentore->attentes }}</td>
                                                <td>
                                                    <div class="d-flex">
                                                        <a href="#"
                                                            class="btn btn-primary shadow btn-xs sharp me-1"><i
                                                                class="fas fa-pencil-alt"></i></a>
                                                        <a href="#" class="btn btn-danger shadow btn-xs sharp"><i
                                                                class="fa fa-trash"></i></a>
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
