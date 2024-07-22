<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <title>Tether Elite Finance - User Portfolio</title>
    @include('user.include.css')

    <style>
        .progress-status {
            font-size: 10px;
            font-weight: bold;
            color: black;
            margin-left: 10px;
        }
    </style>

    <!-- END PAGE LEVEL PLUGINS/CUSTOM STYLES -->
</head>
<body>
    <!-- BEGIN LOADER -->
    <div id="load_screen">
        <div class="loader">
            <div class="loader-content">
                <div class="spinner-grow align-self-center"></div>
            </div>
        </div>
    </div>
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
                <div class="row layout-top-spacing" id="cancel-row">
                    <div class="col-xl-12 col-lg-12 col-sm-12 layout-spacing">
                        <div class="widget-content widget-content-area br-6">

                            <!-- Account Info Widget -->
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing">
                                <div class="widget widget-account-invoice-one">
                                    <div class="widget-heading">
                                        <h5 class="">Account Info</h5>
                                    </div>

                                    <div class="widget-content">
                                        <div class="invoice-box">
                                            <div class="acc-total-info">
                                                <h5>Balance</h5>
                                                @if ($user->subscription && $user->subscription->transactions->isNotEmpty())
                                                    <p class="acc-amount"> ${{ number_format($user->subscription->transactions->first()->profit_per_month ?? 0, 2) }} </p>
                                                @else
                                                    <p class="acc-amount">N/A</p>
                                                @endif
                                            </div>

                                            <hr>

                                            <div class="inv-detail">
                                                @if ($user->subscription)
                                                    <div class="info-detail-1">
                                                        <p>Subscription Plan</p>
                                                        <p class="acc-amount">{{ $user->subscription->plan->name }}</p>
                                                    </div>
                                                    <div class="info-detail-2">
                                                        <p>Subscription Status</p>
                                                        <p class="acc-amount">{{ ucfirst($user->subscription->status) }}</p>
                                                    </div><div class="info-detail-2">
                                                        <p>Withdrawal Status</p>
                                                        <p class="acc-amount">Pending</p>
                                                    </div>
                                                    <div class="info-detail-3">
                                                        <table class="table table-bordered">
                                                            <thead>
                                                                <tr>
                                                                    <th scope="col">Details</th>
                                                                    <th scope="col">Amount</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td>Min Investment</td>
                                                                    <td>${{ number_format($user->subscription->plan->min_investment, 2) }}</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Max Investment</td>
                                                                    <td>${{ number_format($user->subscription->plan->max_investment, 2) }}</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Average Monthly Profit</td>
                                                                    <td>${{ number_format($user->subscription->plan->average_monthly, 2) }}</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Daily Profit</td>
                                                                    <td>{{ $user->subscription->plan->daily_profit }}%</td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                @else
                                                    <p>No subscription details available.</p>
                                                @endif
                                            </div>

                                            {{-- <div class="inv-action">
                                                <a href="#" class="btn btn-outline-dark">Summary</a>
                                                <a href="#" class="btn btn-danger">Transfer</a>
                                            </div> --}}
                                        </div>
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
