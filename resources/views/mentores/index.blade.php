@extends('layouts.base')

@section('css')
    <link href="/vendor/datatables/css/jquery.dataTables.min.css" rel="stylesheet">
@endsection

@section('content')
   
    <div class="content-body">
        <!-- row -->
        <div class="container-fluid">
            <div class="d-flex mb-3">
                <div class="mb-3 align-items-center me-auto">
                    <h4 class="card-title">Listes des mentorés inscrit</h4>
                </div>
                <a href="javascript:void(0);" class="btn btn-outline-primary mb-3"><i
                        class="fa fa-calendar me-3 scale3"></i>Filter Date</a>
            </div>
            <div class="row">
                <div class="col-xl-12">
                    <div class="table-responsive fs-14">
                        <table class="table card-table display mb-4 dataTablesCard " id="example5">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Date</th>
                                    <th>Profil</th>
                                    <th>Email</th>
                                    <th>Telephone</th>
                                    <th>Adresse</th>
                                    <th>Attentes</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 1; ?>
                                @foreach ($mentores as $mentore)
                                    <tr>

                                        <td><span class="text-black font-w500">{{ $no++ }}</span></td>
                                        <td><span class="text-black text-nowrap">{{ $mentore->created_at }}</span></td> 
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <img src="{{ asset($mentore->user->photo) }}" alt=""
                                                    class="rounded me-3" width="50">
                                                <div>
                                                    <h6 class="fs-16 text-black font-w600 mb-0 text-nowrap">
                                                        {{ $mentore->user->prenom }}
                                                    </h6>
                                                    <span class="fs-14">{{ $mentore->user->nom }}</span>
                                                </div>
                                            </div>
                                        </td>
                                        <td><span class="text-black">{{ $mentore->user->email }}</span></td>
                                        <td><span class="text-black">{{ $mentore->user->telephone }} </span></td>

                                        <td><span class="text-black">{{ $mentore->user->adresse }} </span></td>
                                        <td><span class="text-black">{{ $mentore->attente }} </span></td>
                                        {{-- <td><a href="javascript:void(0)" class="btn btn-success light">Completed</a></td> --}}
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
                                                    <a class="dropdown-item" href="/mentores/destroy/{{ $mentore->id }}">Delete</a>
                                                    <a class="dropdown-item" href="/mentores/edit/{{ $mentore->id }}">Edit</a>
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
