@extends('layouts.base')

@section('css')
    <link href="/vendor/datatables/css/jquery.dataTables.min.css" rel="stylesheet">
@endsection

@section('content')
    <div class="content-body">
        <div class="container-fluid">
            <h3>Des mentors recommandés pour vous</h3>
            <div class="row">
                <div class="col-xl-12">
                    <div class="table-responsive fs-14">
                        <table class="table card-table display mb-4 dataTablesCard " id="example5">
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
                                            <div class="d-flex align-items-center">
                                                <img src="{{ asset($connexion->mentor->user->photo) }}" alt=""
                                                    class="rounded me-3" width="50">
                                            </div>
                                        </td>
                                        <td>
                                            {{ $connexion->mentor->user->prenom }} {{ $connexion->mentor->user->nom }}
                                        </td>
                                        <td><span class="text-black">{{ $connexion->mentor->user->email }}</span></td>
                                        <td><span class="text-black">{{ $connexion->mentor->user->telephone }} </span></td>
                                        <td>
                                            @if ($connexion->status == 'en attente')
                                                <span class="badge light badge-warning">{{ $connexion->status }}</span>
                                            @else
                                                @if ($connexion->status == 'accepté')
                                                    <span class="badge light badge-success">{{ $connexion->status }}</span>
                                                @else
                                                    <span class="badge light badge-danger">{{ $connexion->status }}</span>
                                                @endif
                                            @endif
                                        </td>
                                        {{-- <td><span class="text-black">{{ $connexion->status }} </span></td> --}}
                                        <td>
                                            <div class="dropdown">
                                                <a href="javascript:void(0);" class="btn-link" data-bs-toggle="dropdown"
                                                    aria-expanded="false">
                                                    <svg width="24" height="24" viewbox="0 0 24 24" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
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
                                                        href="/mentores/destroy/{{ $connexion->id }}">Delete</a>
                                                    <a class="dropdown-item"
                                                        href="/mentores/edit/{{ $connexion->id }}">Edit</a>
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
@endsection

@section('js')
    <!-- Datatable -->
    <script src="/vendor/datatables/js/jquery.dataTables.min.js"></script>
    <script src="/js/plugins-init/datatables.init.js"></script>
@endsection
