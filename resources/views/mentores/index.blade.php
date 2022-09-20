
@extends('layouts.base')
@section('css')
    <link href="/vendor/datatables/css/jquery.dataTables.min.css" rel="stylesheet">
@endsection

@section('content')
    <div class="content-body">
        <!-- row -->
        <div class="container-fluid">

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Listes des Mentorés inscrit</h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="example3" class="display">
                                    <thead style="background-color: #C15DFB;">
                                        <tr>
                                            <th>Id</th>
                                            <th>Profil</th>
                                            <th>Email</th>
                                            <th>Telephone</th>
                                            <th>Adresse</th>
                                            <th>Niveau Etude</th>
                                            <th>Etat</th>
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
                                                            <img src="{{ asset($mentore->user->photo) }}" alt=""
                                                                srcset="" width="35" height="35"
                                                                class="img img-responsive" style="border-radius: 50%;">
                                                        </div>
                                                        <div class="col-8">
                                                            {{ $mentore->user->prenom }} {{ $mentore->user->nom }}
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>{{ $mentore->user->email }}</td>

                                                <td>{{ $mentore->user->telephone }}</td>
                                                <td>{{ $mentore->user->adresse }}</td>
                                               
                                                <td>{{ $mentore->niveau->libelle}}</td>
                                               
                                                <td>{{ $mentore->user->etat ? 'Actif' : 'Bloqué'}}</td>
                                                <td>
                                                    <div class="d-flex">
                                                        <button type="button" class="btn btn-outline-primary">Voir Profil</button>
                                                        <a href="/user/{{$mentore->user->id}}/etat"><button type="button" class="btn btn-outline-primary">{{$mentore->user->etat ? 'Bloqué' : 'Débloqué'}}</button></a>
                                                        
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
        @endsection


        @section('js')
            <!-- Datatable -->
            <script src="/vendor/datatables/js/jquery.dataTables.min.js"></script>
            <script src="/js/plugins-init/datatables.init.js"></script>
        @endsection
