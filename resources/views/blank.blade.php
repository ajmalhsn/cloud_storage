<!doctype html>
<html lang="en">
 
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Cloud Storage</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('assets/vendor/bootstrap/css/bootstrap.min.css')}}">
    <link href="{{asset('assets/vendor/fonts/circular-std/style.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('assets/libs/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('assets/vendor/fonts/fontawesome/css/fontawesome-all.css')}}">
</head>

<body>
    <!-- ============================================================== -->
    <!-- main wrapper -->
    <!-- ============================================================== -->
    <div class="dashboard-main-wrapper">
        <!-- ============================================================== -->
        <!-- navbar -->
        <!-- ============================================================== -->
         @include('navbar')
        <!-- ============================================================== -->
        <!-- end navbar -->
        <!-- ============================================================== -->
        @include('left_nav')
        <!-- ============================================================== -->
        <!-- wrapper  -->
        <!-- ============================================================== -->
        <div class="dashboard-wrapper">
            <div class="container-fluid dashboard-content">
                <div class="row">
                    <div class="offset-xl-10 col-xl-2 col-lg-2 col-md-6 col-sm-12 col-12">
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
                        <div class="card">
                            <h5 class="card-header">Total Income</h5>
                            <div class="card-body">
                                <div class="metric-value d-inline-block">
                                    <h1 class="mb-1">$5,79,000</h1>
                                </div>
                                <div class="metric-label d-inline-block float-right text-success font-weight-bold">
                                    <span class="icon-circle-small icon-box-xs text-success bg-success-light"><i class="fa fa-fw fa-arrow-up"></i></span><span class="ml-1">25%</span>
                                </div>
                            </div>
                            <div class="card-body bg-light p-t-40 p-b-40">
                                <div id="sparkline-revenue"></div>
                            </div>
                            <div class="card-footer text-center bg-white">
                                <a href="#" class="card-link">View Details</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
                        <div class="card">
                            <h5 class="card-header">Total Expenses</h5>
                            <div class="card-body">
                                <div class="metric-value d-inline-block">
                                    <h1 class="mb-1">$1,79,000</h1>
                                </div>
                                <div class="metric-label d-inline-block float-right text-secondary font-weight-bold">
                                    <span class="icon-circle-small icon-box-xs text-danger bg-danger-light"><i class="fa fa-fw fa-arrow-down"></i></span><span class="ml-1">15%</span>
                                </div>
                            </div>
                            <div class="card-body text-center bg-light p-t-40 p-b-40">
                                <div id="sparkline-revenue2"></div>
                            </div>
                            <div class="card-footer text-center bg-white">
                                <a href="#" class="card-link">View Details</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
                        <div class="card">
                            <h5 class="card-header">Cash on Hand</h5>
                            <div class="card-body">
                                <div class="metric-value d-inline-block">
                                    <h1 class="mb-1">$79,000</h1>
                                </div>
                                <div class="metric-label d-inline-block float-right text-success font-weight-bold">
                                    <span class="icon-circle-small icon-box-xs text-success bg-success-light"><i class="fa fa-fw fa-arrow-up"></i></span><span class="ml-1">25%</span>
                                </div>
                            </div>
                            <div class="card-body bg-light p-t-40 p-b-40">
                                <div id="sparkline-revenue3"></div>
                            </div>
                            <div class="card-footer text-center bg-white">
                                <a href="#" class="card-link">View Details</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
                        <div class="card">
                            <h5 class="card-header">Net Profit Margin</h5>
                            <div class="card-body">
                                <div class="metric-value d-inline-block">
                                    <h1 class="mb-1">$92,000</h1>
                                </div>
                                <div class="metric-label d-inline-block float-right text-success font-weight-bold">
                                    <span class="icon-circle-small icon-box-xs text-success bg-success-light"><i class="fa fa-fw fa-arrow-up"></i></span> <span class="ml-1">25%</span>
                                </div>
                            </div>
                            <div class="card-body bg-light p-b-40 p-t-40">
                                <div id="sparkline-revenue4"></div>
                            </div>
                            <div class="card-footer text-center bg-white">
                                <a href="#" class="card-link">View Details</a>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <div class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                            Copyright © 2018 Nobody. All rights reserved. Dashboard by <a href="https://colorlib.com/wp/">Nobody</a>.
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                            <div class="text-md-right footer-links d-none d-sm-block">
                                <a href="javascript: void(0);">About</a>
                                <a href="javascript: void(0);">Support</a>
                                <a href="javascript: void(0);">Contact Us</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- end footer -->
            <!-- ============================================================== -->
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- end main wrapper -->
    <!-- ============================================================== -->
    <!-- Optional JavaScript -->
    <script src="{{asset('/assets/vendor/jquery/jquery-3.3.1.min.js')}}"></script>
    <script src="{{asset('/assets/vendor/bootstrap/js/bootstrap.bundle.js')}}"></script>
    <script src="{{asset('/assets/vendor/slimscroll/jquery.slimscroll.js')}}"></script>
    <script src="{{asset('/assets/libs/js/main-js.js')}}"></script>

    <script src="{{asset('assets/vendor/charts/chartist-bundle/chartist.min.js')}}"></script>
    <script src="{{asset('assets/vendor/charts/chartist-bundle/Chartistjs.js')}}"></script>
    <script src="{{asset('assets/vendor/charts/chartist-bundle/chartist-plugin-threshold.js')}}"></script>
    <!-- chart C3 js -->
    <script src="{{asset('assets/vendor/charts/c3charts/c3.min.js')}}"></script>
    <script src="{{asset('assets/vendor/charts/c3charts/d3-5.4.0.min.js')}}"></script>
    <!-- chartjs js -->
    <script src="{{asset('assets/vendor/charts/charts-bundle/Chart.bundle.js')}}"></script>
    <script src="{{asset('assets/vendor/charts/charts-bundle/chartjs.js')}}"></script>
    <!-- sparkline js -->
    <script src="{{asset('assets/vendor/charts/sparkline/jquery.sparkline.js')}}"></script>
    <!-- dashboard finance js -->
    <script src="{{asset('assets/libs/js/dashboard-finance.js')}}"></script>
    <!-- main js -->
    <script src="{{asset('assets/libs/js/main-js.js')}}"></script>
    {{-- <!-- gauge js -->
    <script src="assets/vendor/gauge/gauge.min.js"></script>
    <!-- morris js -->
    <script src="assets/vendor/charts/morris-bundle/raphael.min.js"></script>
    <script src="assets/vendor/charts/morris-bundle/morris.js"></script>
    <script src="assets/vendor/charts/morris-bundle/morrisjs.html"></script>
    <!-- daterangepicker js -->
    <script src="{{asset('../../../../cdn.jsdelivr.net/momentjs/latest/moment.min.js')}}"></script>
    <script src="{{asset('../../../../cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js')}}"></script> 
    <script>
    $(function() {
        $('input[name="daterange"]').daterangepicker({
            opens: 'left'
        }, function(start, end, label) {
            console.log("A new date selection was made: " + start.format('YYYY-MM-DD') + ' to ' + end.format('YYYY-MM-DD'));
        });
    });
    </script>--}}
</body>
 
</html>