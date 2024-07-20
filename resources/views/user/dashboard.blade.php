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

                    <!-- Transactions Widget -->
                    <div class="col-xl-5 col-lg-12 col-md-6 col-sm-12 col-12 layout-spacing">
                        <div class="widget widget-table-one">
                            <div class="widget-heading">
                                <h5 class="">Transactions</h5>
                            </div>

                            <div class="widget-content">
                                @if($transactions->isEmpty())
                                    <p class="acc-amount">N/A</p>
                                    <p>No transactions found.</p>
                                @else
                                    @foreach($transactions as $transaction)
                                        <div class="transactions-list">
                                            <div class="t-item">
                                                <div class="t-company-name">
                                                    <div class="t-icon">
                                                        <div class="avatar avatar-xl">
                                                            <span class="avatar-title rounded-circle">{{ $transaction->user->initials }}</span>
                                                        </div>
                                                    </div>
                                                    <div class="t-name">
                                                        <h4>{{ $transaction->user->name }}</h4>
                                                        <p class="meta-date">{{ $transaction->created_at->format('d M Y h:i A') }}</p>
                                                    </div>
                                                </div>
                                                <div class="t-rate rate-inc">
                                                    <p>
                                                        <span>${{ number_format($transaction->amount, 2) }}</span>
                                                        <span>({{ $transaction->percentage_rate }}%)</span>
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-up">
                                                            <line x1="12" y1="19" x2="12" y2="5"></line>
                                                            <polyline points="5 12 12 5 19 12"></polyline>
                                                        </svg>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                @endif
                            </div>
                        </div>
                    </div>

                    <!-- Recent Activities -->
                    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12 layout-spacing">
                        <div class="widget widget-activity-four">
                            <div class="widget-heading">
                                <h5 class="">Recent Activities</h5>
                            </div>
                            <div class="widget-content">
                                <div class="mt-container mx-auto ps ps--active-y">
                                    <div class="timeline-line">
                                        @if($transactions->isEmpty())
                                            <p>No transactions found.</p>
                                        @else
                                            @foreach($transactions as $transaction)
                                                <div class="item-timeline
                                                    @if($transaction->profit_per_month > 0)
                                                        timeline-success
                                                    @elseif($transaction->profit_per_month == 0)
                                                        timeline-warning
                                                    @else
                                                        timeline-danger
                                                    @endif">
                                                    <div class="t-dot" data-original-title="" title=""></div>
                                                    <div class="t-text">
                                                        <p>
                                                            <span>{{ $transaction->subscription_plan }}</span>
                                                            <br>
                                                            Amount: ${{ number_format($transaction->amount, 2) }}
                                                            <br>
                                                            Profit Per Month: ${{ number_format($transaction->profit_per_month, 2) }}
                                                        </p>
                                                        <span class="badge
                                                            @if($transaction->profit_per_month > 0)
                                                                badge-success
                                                            @elseif($transaction->profit_per_month == 0)
                                                                badge-warning
                                                            @else
                                                                badge-danger
                                                            @endif">
                                                            {{ $transaction->profit_per_month > 0 ? 'Profit' : ($transaction->profit_per_month == 0 ? 'No Profit' : 'Loss') }}
                                                        </span>
                                                        <p class="t-time">{{ $transaction->created_at->format('d M Y h:i A') }}</p>
                                                    </div>
                                                </div>
                                            @endforeach
                                        @endif
                                    </div>
                                    <div class="ps__rail-x" style="left: 0px; bottom: 0px;">
                                        <div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div>
                                    </div>
                                    <div class="ps__rail-y" style="top: 0px; height: 272px; right: 0px;">
                                        <div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 168px;"></div>
                                    </div>
                                </div>
                                <div class="tm-action-btn">
                                    <button class="btn">View All
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down">
                                            <polyline points="6 9 12 15 18 9"></polyline>
                                        </svg>
                                    </button>
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
