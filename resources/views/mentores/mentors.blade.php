@extends('layouts.base')

@section('css')
    <link href="/vendor/datatables/css/jquery.dataTables.min.css" rel="stylesheet">
@endsection

@section('content')
   
    <div class="content-body" style="margin-top: -70px;">
        <div class="container-fluid">
            <a href="/mentores" class="btn btn-primary d-sm-inline-block d-none " style="margin-left: 1200px; margin-bottom: 10px;">Rechercher un mentor</a>
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Listes des mentors Connecté </h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="example3" class="display">
                                    <thead style="background-color: #C15DFB;">
                                        <tr>
                                            <th style="color: white">Profil</th>
                                            <th style="color: white">Prenom et Nom</th>
                                            <th style="color: white">Email</th>
                                            <th style="color: white">Telephone</th>
                                            <th style="color: white">Status</th>
                                            {{-- <th style="color: white">Actions</th> --}}
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($connexions as $connexion)
                                            <tr>
                                                <td>
                                                    <div class="row">
                                                        <div class="col-4">
                                                            <img src="{{ asset($connexion->mentor->user->photo) }}"
                                                                alt="" srcset="" width="70" height="70"
                                                                class="img img-responsive" style="border-radius: 50%;">
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    {{ $connexion->mentor->user->prenom }}
                                                    {{ $connexion->mentor->user->nom }}
                                                </td>
                                                <td><span class="text-black">{{ $connexion->mentor->user->email }}</span>
                                                </td>
                                                <td><span class="text-black">{{ $connexion->mentor->user->telephone }}
                                                    </span></td>
                                                <td>
                                                    @if ($connexion->status == 'en attente')
                                                        <span
                                                            class="badge light badge-warning">{{ $connexion->status }}</span>
                                                    @else
                                                        @if ($connexion->status == 'accepté')
                                                            <span
                                                                class="badge light badge-success">{{ $connexion->status }}</span>
                                                        @else
                                                            <span
                                                                class="badge light badge-danger">{{ $connexion->status }}</span>
                                                        @endif
                                                    @endif
                                                </td>
                                                {{-- <td>
                                                    <button type="button" class="btn btn-outline-warning"><a
                                                            href="#">Voir Profil</a></button>
                                                </td> --}}
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
