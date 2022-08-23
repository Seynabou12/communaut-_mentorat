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
                        <h4 class="card-title">Patient</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="example5" class="display" style="min-width: 845px">
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Date</th>
                                        <th>Titre</th>
                                        <th>Mentoré</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <?php $no = 1; ?>
                                    @foreach ($sessions as $session)
                                        <tr>
                                            <td>{{ $no++ }}</td>
                                            <td>{{ $session->date }}</td>
                                            <td>{{ $session->titre }}</td>
                                            <td>{{ $session->connexion->mentore->user->nom }}
                                                {{ $session->connexion->mentore->user->prenom }}</td>
                                            <td>
                                                @if ($session->status == 'en cours')
                                                    <div class="dropdown">
                                                        <a href="javascript:void(0);" class="btn-link"
                                                            data-bs-toggle="dropdown" aria-expanded="false">
                                                            <span
                                                                class="badge light badge-warning">{{ $session->status }}</span>
                                                        </a>
                                                        <div class="dropdown-menu dropdown-menu-right">
                                                            <a class="dropdown-item"
                                                                href="/session/{{ $session->id }}/status?status=1">Annuler</a>
                                                            <a class="dropdown-item"
                                                                href="/session/{{ $session->id }}/status?status=2">Realiser</a>
                                                        </div>
                                                    </div>
                                                @else
                                                    @if ($session->status == 'realisé')
                                                        <span
                                                            class="badge light badge-success">{{ $session->status }}</span>
                                                    @else
                                                        <span class="badge light badge-danger">{{ $session->status }}</span>
                                                    @endif
                                                @endif
                                            </td>
                                            <td>
                                                <button type="button"
                                                    class="btn btn-outline-warning"><a href="/sessions/voirplus">Voir plus</a></button>
                        
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
