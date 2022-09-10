@extends('layouts.base')

@section('css')
    <link href="/vendor/datatables/css/jquery.dataTables.min.css" rel="stylesheet">
@endsection

@section('content')
    <div class="content-body" style="margin-top: -60px;">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Listes des mentorés Connecté </h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="example3" class="display">
                                    <thead style="background-color: #C15DFB">
                                        <tr>
                                            <th style="color: white;">Profil</th>
                                            <th style="color: white;">Prenom et Nom</th>
                                            <th style="color: white;">Email</th>
                                            <th style="color: white;">Telephone</th>
                                            <th style="color: white;">Status</th>
                                            <th style="color: white;">Actions</th>
                                        </tr>
                                    </thead>
                                   
                                    <tbody>
                                        @foreach ($connexions as $connexion)
                                            <tr>
                                                <td>
                                                    <div class="row">
                                                        <div class="col-4">
                                                            <img src="{{ asset($connexion->mentore->user->photo) }}"
                                                                alt="" srcset="" width="70" height="70"
                                                                class="img img-responsive" style="border-radius: 50%;">
                                                        </div>
                                                    </div>
                                                </td>
                                                <td style="color: black;">
                                                    {{ $connexion->mentore->user->prenom }}
                                                    {{ $connexion->mentore->user->nom }}
                                                </td>
                                                <td><span class="text-black">{{ $connexion->mentore->user->email }}</span>
                                                </td>
                                                <td><span class="text-black">{{ $connexion->mentore->user->telephone }}
                                                    </span></td>
                                                <td>
                                                    @if ($connexion->status == 'en attente')
                                                        <div class="dropdown">
                                                            <a href="javascript:void(0);" class="btn-link"
                                                                data-bs-toggle="dropdown" aria-expanded="false">
                                                                <span
                                                                    class="badge light badge-warning">{{ $connexion->status }}</span>
                                                            </a>
                                                            <div class="dropdown-menu dropdown-menu-right">
                                                                <a class="dropdown-item"
                                                                    href="/connexion/{{ $connexion->id }}/status?status=1">Accepter</a>
                                                                <a class="dropdown-item"
                                                                    href="/connexion/{{ $connexion->id }}/status?status=2">Refuser</a>
                                                            </div>
                                                        </div>
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
                                                <td>
                                                    <div class="d-flex">
                                                        <button type="button" class="btn btn-outline-primary">Voir Mentoré</button>
                                                        
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
