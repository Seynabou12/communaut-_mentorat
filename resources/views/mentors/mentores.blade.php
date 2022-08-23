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
                            <h4 class="card-title">Listes des mentorés Connecté </h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="example3" class="display">
                                    <thead>
                                        <tr>
                                            <th>Profil</th>
                                            <th>Prenom et Nom</th>
                                            <th>Email</th>
                                            <th>Telephone</th>
                                            <th>Status</th>
                                            <th>Actions</th>
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
                                                {{-- <td><span class="text-black">{{ $connexion->status }} </span></td> --}}
                                                <td>
                                                    <div class="dropdown">
                                                        <a href="javascript:void(0);" class="btn-link"
                                                            data-bs-toggle="dropdown" aria-expanded="false">
                                                            <svg width="24" height="24" viewbox="0 0 24 24"
                                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M12 13C12.5523 13 13 12.5523 13 12C13 11.4477 12.5523 11 12 11C11.4477 11 11 11.4477 11 12C11 12.5523 11.4477 13 12 13Z"
                                                                    stroke="#575757" stroke-width="2" stroke-linecap="round"
                                                                    stroke-linejoin="round"></path>
                                                                <path
                                                                    d="M12 6C12.5523 6 13 5.55228 13 5C13 4.44772 12.5523 4 12 4C11.4477 4 11 4.44772 11 5C11 5.55228 11.4477 6 12 6Z"
                                                                    stroke="#575757" stroke-width="2" stroke-linecap="round"
                                                                    stroke-linejoin="round"></path>
                                                                <path
                                                                    d="M12 20C12.5523 20 13 19.5523 13 19C13 18.4477 12.5523 18 12 18C11.4477 18 11 18.4477 11 19C11 19.5523 11.4477 20 12 20Z"
                                                                    stroke="#575757" stroke-width="2" stroke-linecap="round"
                                                                    stroke-linejoin="round"></path>
                                                            </svg>
                                                        </a>
                                                        <div class="dropdown-menu dropdown-menu-right">
                                                            <a class="dropdown-item"
                                                                href="/mentors/destroy/{{ $connexion->id }}">Delete</a>
                                                            <a class="dropdown-item"
                                                                href="/mentors/edit/{{ $connexion->id }}">Edit</a>
                                                        </div>
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
