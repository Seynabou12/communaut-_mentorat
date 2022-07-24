@extends('layouts.base')

@section('css')
    <link href="/vendor/datatables/css/jquery.dataTables.min.css" rel="stylesheet">
@endsection

@section('content')
    <div class="content-body">
        <div class="container-fluid">

            <div class="row page-titles">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item active"><a href="javascript:void(0)">Mentors</a></li>
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Inscrites</a></li>
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
                                <table id="example3" class="display" style="min-width: 845px">
                                    <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th>Photo Profil</th>
                                            <th>Prenom</th>
                                            <th>Nom</th>
                                            <th>Adresse</th>
                                            <th>Region</th>
                                            <th>Telephone</th>
                                            <th>Email</th>
                                            <th>Mot de Passe</th>
                                            <th>Confirme mdp</th>
                                            <th>Parcours</th>
                                            <th>Nbre An Exp</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $no=1; ?>
                                        @foreach ($mentors as $mentor)
                                        <tr>
                                            <td>{{ $no++ }}</td>
                                            <td>
                                                <img src="{{ asset($mentor->photo) }}" alt="" srcset="" width="35" height="35" class="img img-responsive">
                                            </td>
                                            {{-- <td >{{ $mentor->photo }}</td> --}}
                                            <td>{{ $mentor->prenom }}</td>
                                            <td>{{ $mentor->nom }}</td>
                                            <td>{{ $mentor->adresse }}</td>
                                            <td>{{ $mentor->region }}</td>
                                            <td>{{ $mentor->telephone }}</td>
                                            <td>{{ $mentor->email }}</td>
                                            <td>{{ $mentor->motDePasse }}</td>
                                            <td>{{ $mentor->confirmeMdp }}</td>
                                            <td>{{ $mentor->parcours }}</td>
                                            <td>{{ $mentor->nombreAnneeExperience }}</td>
                                            <td>
                                                <div class="d-flex">
                                                    <a href="#" class="btn btn-primary shadow btn-xs sharp me-1"><i
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
