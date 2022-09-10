@extends('layouts.base')

@section('css')
    <link href="/vendor/datatables/css/jquery.dataTables.min.css" rel="stylesheet">
@endsection

@section('content')
    <div class="content-body" style="margin-top: -70px;">
        <div class="container-fluid">
            <div class="row page-titles">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item active"><a href="javascript:void(0)">Table</a></li>
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Bootstrap</a></li>
                </ol>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Listes des Mentors inscrit</h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="example3" class="display">
                                    <thead style="background-color: #C15DFB;">
                                        <tr>
                                            <th>Id</th>
                                            <th>Profil</th>
                                            <th>Adresse</th>
                                            <th>Telephone</th>
                                            <th>Email</th>
                                            <th>Parcours</th>
                                            <th>Nbre An Exp</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $no = 1; ?>
                                        @foreach ($mentors as $mentor)
                                            <tr>
                                                <td>{{ $no++ }}</td>
                                                <td>
                                                    <div class="row">
                                                        <div class="col-4">
                                                            <img src="{{ asset($mentor->user->photo) }}" alt=""
                                                                srcset="" width="35" height="35"
                                                                class="img img-responsive" style="border-radius: 50%;">
                                                        </div>
                                                        <div class="col-8">
                                                            {{ $mentor->user->prenom }} {{ $mentor->user->nom }}
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>{{ $mentor->user->adresse }}</td>
                                                <td>{{ $mentor->user->telephone }}</td>
                                                <td>{{ $mentor->user->email }}</td>
                                                <td>{{ $mentor->parcours }}</td>
                                                <td>{{ $mentor->experience }}</td>
                                                <td>
                                                    <div class="d-flex">
                                                        <button type="button" class="btn btn-outline-primary">Voir Profil</button>
                                                        
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