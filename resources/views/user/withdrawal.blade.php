<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <title>Tether Elite Finance - User Portfolio</title>
    @include('user.include.css')
    <link rel="stylesheet" type="text/css" href="{{asset('backend/plugins/bootstrap-touchspin/jquery.bootstrap-touchspin.min.css')}}">

    <style>
         .t-rotate270 { -webkit-transform: rotate(270deg); transform:rotate(270deg) }

        #demo_vertical::-ms-clear, #demo_vertical2::-ms-clear { display: none; }
        input#demo_vertical { border-top-right-radius: 5px; border-bottom-right-radius: 5px; }
        input#demo_vertical2 { border-top-right-radius: 5px; border-bottom-right-radius: 5px; }

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

                                            <!-- Withdrawal Form Widget -->
                                            <h5 class="">Withdrawal Request</h5>

                                            <div class="info-detail-2">
                                                <p>Withdrawal Status</p>

                                                @php
                                                    $status = auth()->user()->status ?? 'not-requested';
                                                    $progress = 20;
                                                    $percentage = '20%';
                                                    $statusString = 'withdrawal ' . $status;
                                                    $progressBarClass = 'bg-secondary'; // Default color

                                                    switch ($status) {
                                                        case 'pending':
                                                            $progress = 30;
                                                            $percentage = '30%';
                                                            $progressBarClass = 'bg-warning';
                                                            break;
                                                        case 'contracting':
                                                            $progress = 60;
                                                            $percentage = '60%';
                                                            $progressBarClass = 'bg-info';
                                                            break;
                                                        case 'evaluating':
                                                            $progress = 80;
                                                            $percentage = '80%';
                                                            $progressBarClass = 'bg-primary';
                                                            break;
                                                        case 'taking-action':
                                                            $progress = 90;
                                                            $percentage = '90%';
                                                            $progressBarClass = 'bg-success';
                                                            break;
                                                        case 'completed':
                                                            $progress = 100;
                                                            $percentage = '100%';
                                                            $progressBarClass = 'bg-success';
                                                            break;
                                                        default:
                                                            $progress = 20;
                                                            $percentage = '20';
                                                            $progressBarClass = 'bg-secondary';
                                                            break;
                                                    }
                                                @endphp

                                                <!-- Progress Bar Animated -->
                                                <p class="acc-amount">
                                                    <div class="progress br-30">
                                                        <div class="progress-bar {{ $progressBarClass }}" role="progressbar" style="width: {{ $progress }}%" aria-valuenow="{{ $progress }}" aria-valuemin="0" aria-valuemax="100">
                                                            <div class="progress-title">
                                                                <span>{{ $statusString }}: {{ $percentage }}</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </p>

                                                <p class="acc-amount">{{ $status }}</p>
                                            </div>

                                            <form class="form-horizontal" method="POST" action="{{ route('withdrawal.store') }}">
                                                @csrf
                                                <div class="form-group mb-4">
                                                    <div class="widget-header">
                                                        <h4>Name</h4>
                                                    </div>
                                                    <div class="input-group bootstrap-touchspin">
                                                        <input class="form-control" name="name" value="{{ auth()->user()->name }}" readonly>
                                                    </div>
                                                    <div class="widget-header">
                                                        <h4>Amount</h4>
                                                    </div>
                                                    <div class="input-group bootstrap-touchspin bootstrap-touchspin-injected">
                                                        <input id="demo" type="text" value="0" name="amount" class="form-control">
                                                    </div>

                                                    <div class="widget-header">
                                                        <h4>Wallet Address</h4>
                                                    </div>
                                                    <div class="input-group bootstrap-touchspin">
                                                        <input class="form-control" name="wallet_address">
                                                    </div>
                                                    <div class="input-group bootstrap-touchspin">
                                                        <button type="submit" class="mt-4 btn btn-primary" data-toggle="modal" data-target="#zoomupModal">
                                                            Submit
                                                        </button>
                                                    </div>
                                                </div>
                                            </form>

                                            <!-- Modal -->
                                            <div id="zoomupModal" class="modal animated zoomInUp custo-zoomInUp" role="dialog">
                                                <div class="modal-dialog">
                                                    <!-- Modal content-->
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalLabel">Successful</h5>
                                                        </div>
                                                        <div class="modal-body">
                                                            <p class="modal-text">Please sign up and verify your account via the email we send. Once verified, choose an investment plan and make your payment to the provided USDT (TRC-20) address. Then, email a screenshot of your transaction receipt to <a href="mailto:info@tetherelitefinance.com">info@tetherelitefinance.com</a> for swift approval.</p>
                                                        </div>
                                                        <div class="modal-footer md-button">
                                                            <button style="background: #E6922E" class="btn" data-dismiss="modal"><i style="color:blanchedalmond" class="flaticon-cancel-12"></i> Okay</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

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
    <script src="{{asset('backend/plugins/highlight/highlight.pack.js')}}"></script>
    <script src="{{asset('backend/plugins/bootstrap-touchspin/jquery.bootstrap-touchspin.min.js')}}"></script>
    <script src="{{asset('backend/plugins/bootstrap-touchspin/custom-bootstrap-touchspin.js')}}"></script>
    <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->

    <!-- With prefix -->
    <script>
        $("input[name='amount']").TouchSpin({
            prefix: '$',
            buttondown_class: "btn btn-classic btn-danger",
            buttonup_class: "btn btn-classic btn-success"
        });
    </script>

</body>
</html>
