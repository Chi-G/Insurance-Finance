<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <title>Tether Elite Finance - Admin Dashboard</title>
    @include('user.include.css')
    <!-- END PAGE LEVEL PLUGINS/CUSTOM STYLES -->

    <style>
        .row {
            display: flex;
            flex-wrap: wrap;
        }

        .col-xl-8, .col-xl-4 {
            padding-left: 15px;
            padding-right: 15px;
        }

        .widget {
            display: flex;
            flex-direction: column;
            height: 100%;
        }

        .widget-content {
            flex: 1;
        }

        .widget-chart-one, .widget-account-invoice-one {
            height: 100%;
            background: #fff;
            border-radius: 5px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
        }
    </style>

</head>
<body>
    <!-- BEGIN LOADER -->
    <div id="load_screen"> <div class="loader"> <div class="loader-content">
        <div class="spinner-grow align-self-center"></div>
    </div></div></div>
    <!--  END LOADER -->

    <!--  BEGIN NAVBAR  -->
    @include('user.include.navbar')
    <!--  END NAVBAR  -->

    <!--  BEGIN MAIN CONTAINER  -->
    <div class="main-container" id="container">

        <div class="overlay"></div>
        <div class="search-overlay"></div>

        <!--  BEGIN SIDEBAR  -->
        @include('user.include.sidebar')
        <!--  END SIDEBAR  -->

        <!--  BEGIN CONTENT AREA  -->
        <div id="content" class="main-content">
            <div class="layout-px-spacing">
                <div class="row layout-top-spacing">
                    <!-- Revenue Widget -->
                    <div class="col-xl-8 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing">
                        <div class="widget widget-chart-one">
                            <div class="widget-heading">
                                <h5 class="">Revenue</h5>
                                <ul class="tabs tab-pills">
                                    <li><a href="javascript:void(0);" id="tb_1" class="tabmenu">Monthly</a></li>
                                </ul>
                            </div>

                            <div class="widget-content">
                                <div class="tabs tab-content">
                                    <div id="content_1" class="tabcontent">
                                        <div id="revenueMonthly">
                                            <!-- Include a chart or revenue details here -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Account Info Widget -->
                    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12 layout-spacing">
                        <div class="widget widget-account-invoice-one">
                            <div class="widget-heading">
                                <h5 class="">Account Info</h5>
                            </div>

                            <div class="widget-content">
                                <div class="invoice-box">
                                    <div class="acc-total-info">
                                        <h5>Balance</h5>
                                        <p class="acc-amount">{{ number_format($user->balance, 2) }}</p>
                                    </div>

                                    <div class="inv-detail">
                                        <div class="info-detail-1">
                                            <p>Subscription Plan</p>
                                            <p>{{ $user->subscription->plan }}</p>
                                        </div>
                                        <div class="info-detail-2">
                                            <p>Subscription Status</p>
                                            <p>{{ $user->subscription->status }}</p>
                                        </div>
                                        <div class="info-detail-3">
                                            <div class="info-detail">
                                                <p>Min Amount</p>
                                                <p>{{ number_format($user->subscription->min_amount, 2) }}</p>
                                            </div>
                                            <div class="info-detail">
                                                <p>Max Amount</p>
                                                <p>{{ number_format($user->subscription->max_amount, 2) }}</p>
                                            </div>
                                            <div class="info-detail">
                                                <p>Average Monthly</p>
                                                <p>{{ number_format($user->subscription->average_monthly, 2) }}</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="inv-action">
                                        <a href="{{ route('subscription.summary') }}" class="btn btn-outline-dark">Summary</a>
                                        <a href="{{ route('subscription.transfer') }}" class="btn btn-danger">Transfer</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="footer-wrapper">
                <div class="footer-section f-section-1">
                    <p class="">Copyright © 2020 <a target="_blank" href="https://tetherelitefinance.com">Tether Elite Finance</a>, All rights reserved.</p>
                </div>
                <div class="footer-section f-section-2">
                    <p class="">Coded with <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-heart"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path></svg> by TEF</p>
                </div>
            </div>
        </div>
        <!--  END CONTENT AREA  -->


    </div>
    <!-- END MAIN CONTAINER -->

    <!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
    @include('user.include.script')
    <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->

</body>
</html>
