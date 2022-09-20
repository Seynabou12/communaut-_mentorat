@extends('layouts.base')

@section('css')
    <link href="/vendor/datatables/css/jquery.dataTables.min.css" rel="stylesheet">
@endsection

@section('content')
    <div class="content-body">
        <div class="container-fluid">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Domaine du Mentor</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="example5" class="display" style="min-width: 845px">
                                <thead style="background-color: #C15DFB;">
                                    <tr>
                                        <th style="color: white;">Id</th>
                                        <th style="color: white;">Nom Domaine</th>
                                        <th style="color: white;">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no = 1; ?>
                                    @foreach ($domaines as $domaine)
                                        <tr>
                                            <td>{{ $no++ }}</td>
                                            <td>{{ $domaine->nomDomaine }}</td>
                                            <td>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a class="dropdown-item" href="#">Modifier</a>
                                                    <a class="dropdown-item" href="#">Supprimer</a>
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
@endsection


@section('js')
    <!-- Datatable -->
    <script src="/vendor/datatables/js/jquery.dataTables.min.js"></script>
    <script src="/js/plugins-init/datatables.init.js"></script>
@endsection
