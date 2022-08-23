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
                        <h4 class="card-title">Mes Sessions</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="example5" class="display" style="min-width: 845px">
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Date</th>
                                        <th>Titre</th>
                                        <th>Mentors</th>
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
                                        <td>{{ $session->connexion->mentor->user->nom }} {{ $session->connexion->mentor->user->prenom }}</td>
                                        <td>
                                            @if ($session->status == 'en cours')
                                                <div class="dropdown">
                                                    <span class="badge light badge-warning">{{ $session->status }}</span>
                                                </div>
                                            @else
                                                @if ($session->status == 'realisé')
                                                    <span class="badge light badge-success">{{ $session->status }}</span>
                                                @else
                                                    <span class="badge light badge-danger">{{ $session->status }}</span>
                                                @endif
                                            @endif
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-outline-warning"><a href="/sessions/{{ $session->id }}/voirplus">Voir plus</a></button>
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
