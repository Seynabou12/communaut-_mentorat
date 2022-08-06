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
                                    
                                    <th>Niveau Etude</th>
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
                                        

                                        <td><span class="text-black">{{ $mentore->niveau->libelle }} </span></td>
                                        {{-- <td><a href="javascript:void(0)" class="btn btn-success light">Completed</a></td> --}}
                                        <td>
                                            <div class="dropdown">
                                                
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
