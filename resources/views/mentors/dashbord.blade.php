@extends('layouts.base')

@section('css')
    <link href="/vendor/datatables/css/jquery.dataTables.min.css" rel="stylesheet">
@endsection

@section('content')
    <div class="content-body">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="row">
                        <div class="col-xl-6 col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Mentors</h4>
                                </div>
                                <div class="card-body">
                                    <div id="simple-pie"
                                        class="ct-chart ct-golden-section simple-pie-chart-chartist chartlist-chart">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-6 col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Sessions </h4>
                                </div>
                                <div class="card-body">
                                    <div id="pie-chart" class="ct-chart ct-golden-section chartlist-chart"></div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js')
    <script src="/vendor/global/global.min.js"></script>
    <script src="/vendor/chart.js/Chart.bundle.min.js"></script>
    <!-- Apex Chart -->
    <script src="/vendor/apexchart/apexchart.js"></script>
    <script src="/vendor/chartist/js/chartist.min.js"></script>
    <script src="/vendor/chartist-plugin-tooltips/js/chartist-plugin-tooltip.min.js"></script>
    <script src="/vendor/jquery-nice-select/js/jquery.nice-select.min.js"></script>
    <script src="/js/plugins-init/chartist-init.js"></script>

    <script src="/js/custom.min.js"></script>
    <script src="/js/dlabnav-init.js"></script>
    <script src="/js/demo.js"></script>
    <script src="/js/styleSwitcher.js"></script>
    <script src="/vendor/chart.js/Chart.bundle.min.js"></script>
    <script src="/vendor/apexchart/apexchart.js"></script>
    <script src="/vendor/nouislider/nouislider.min.js"></script>
    <script src="/vendor/wnumb/wNumb.js"></script>
    <script src="/js/dashboard/my-wallet.js"></script>
    <script src="/js/styleSwitcher.js"></script>
@endsection
