<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <title>Tether Elite Finance - User Portfolio</title>
    @include('user.include.css')
    <link rel="stylesheet" type="text/css" href="{{asset('backend/plugins/bootstrap-touchspin/jquery.bootstrap-touchspin.min.css')}}">
    <link href="{{asset('backend/plugins/loaders/custom-loader.css')}}" rel="stylesheet" type="text/css" />

    <style>
         .t-rotate270 { -webkit-transform: rotate(270deg); transform:rotate(270deg) }

        #demo_vertical::-ms-clear, #demo_vertical2::-ms-clear { display: none; }
        input#demo_vertical { border-top-right-radius: 5px; border-bottom-right-radius: 5px; }
        input#demo_vertical2 { border-top-right-radius: 5px; border-bottom-right-radius: 5px; }

        .progress-status {
            font-size: 16px;
            font-weight: bold;
            color: white;
            margin-left: 10px;
        }

        .loader {
            border: 16px solid #f3f3f3; /* Light grey */
            border-top: 16px solid #3498db; /* Blue */
            border-radius: 50%;
            width: 60px;
            height: 60px;
            animation: spin 2s linear infinite;
            position: absolute;
            left: 50%;
            top: 50%;
            margin-left: -30px;
            margin-top: -30px;
        }

        @keyframes spin {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }

        .amount-style {
            background-color: #e0f7fa; /* Light cyan background */
            color: #00796b; /* Dark teal text color */
            padding: 5px 10px;
            border-radius: 4px;
            font-weight: bold;
            display: inline-flex;
            align-items: center;
        }

        .amount-style::before {
            content: '$'; /* Dollar sign as a pseudo-element */
            margin-right: 5px; /* Space between dollar sign and amount */
        }

        .wallet-address-style {
            background-color: #f1f8e9; /* Light green background */
            color: #388e3c; /* Dark green text color */
            padding: 5px 10px;
            border-radius: 4px;
            font-family: monospace; /* Monospaced font for a code-like appearance */
            word-break: break-all; /* Break long addresses to avoid overflow */
            display: inline-block;
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
                                                @php
                                                    $balance = $user->subscription->transactions->sum('profit_per_month') ?? 0;
                                                @endphp
                                                <p class="acc-amount">${{ number_format($balance, 2) }}</p>
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
                                                    $withdrawalStatus = $user->withdrawals->last()->status ?? 'not-requested';
                                                    $progress = 100;
                                                    $percentage = '20%';
                                                    $progressBarClass = 'bg-secondary'; // Default color

                                                    switch ($withdrawalStatus) {
                                                        case 'pending':
                                                            $progress = 100;
                                                            $percentage = '30%';
                                                            $progressBarClass = 'bg-warning';
                                                            break;
                                                        case 'contracting':
                                                            $progress = 100;
                                                            $percentage = '60%';
                                                            $progressBarClass = 'bg-info';
                                                            break;
                                                        case 'evaluating':
                                                            $progress = 100;
                                                            $percentage = '80%';
                                                            $progressBarClass = 'bg-primary';
                                                            break;
                                                        case 'taking-action':
                                                            $progress = 100;
                                                            $percentage = '90%';
                                                            $progressBarClass = 'bg-secondary';
                                                            break;
                                                        case 'completed':
                                                            $progress = 100;
                                                            $percentage = '100%';
                                                            $progressBarClass = 'bg-success';
                                                            break;
                                                        default:
                                                            $progress = 100;
                                                            $percentage = '20%';
                                                            $progressBarClass = 'bg-success';
                                                            break;
                                                    }
                                                @endphp

                                                <!-- Progress Bar Animated -->
                                                <p class="acc-amount">
                                                    <div class="progress br-30">
                                                        <div class="progress-bar {{ $progressBarClass }}" role="progressbar" style="width: {{ $progress }}%" aria-valuenow="{{ $progress }}" aria-valuemin="0" aria-valuemax="100">
                                                            <div class="progress-title">
                                                                <span class="progress-status">{{ $withdrawalStatus  }}: {{ $percentage }}</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </p>

                                                <p class="acc-amount">{{ $withdrawalStatus  }}</p>
                                            </div>

                                            <form id="withdrawal-form" action="{{ route('withdrawal.store') }}" method="POST" class="form-horizontal">
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
                                                    <div class="input-group bootstrap-touchspin">
                                                        <input id="amount" type="text" name="amount" class="form-control" required>
                                                    </div>
                                                    <div class="widget-header">
                                                        <h4>Wallet Address</h4>
                                                    </div>
                                                    <div class="input-group bootstrap-touchspin">
                                                        <input id="wallet_address" class="form-control" name="wallet_address" required>
                                                    </div>
                                                    <div class="input-group bootstrap-touchspin">
                                                        <button type="submit" class="mt-4 btn btn-primary">
                                                            Submit
                                                        </button>
                                                    </div>
                                                </div>

                                                <!-- Loader element -->
                                                <div id="loader" class="loader multi-loader mx-auto" style="display: none;"></div>
                                            </form>

                                            <!-- Modal Success -->
                                            <div class="modal fade" id="zoomupModal" tabindex="-1" role="dialog" aria-labelledby="zoomupModalLabel" aria-hidden="true">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="zoomupModalLabel">Submission Successful</h5>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <p>Thank you for your withdrawal request. Here are the details of your submission:</p>
                                                            <p><strong>Amount:</strong> <span id="modal-amount" class="amount-style">$<span class="amount-value">100.00</span></span></p>
                                                            <p><strong>Wallet Address:</strong> <span id="modal-wallet-address" class="wallet-address-style">1234abcd5678efgh</span></p>
                                                            <p>Your request is being processed. We will notify you once it has been completed.</p>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- Modal Error -->
                                            <div class="modal fade" id="errorModal" tabindex="-1" role="dialog" aria-labelledby="errorModalLabel" aria-hidden="true">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="errorModalLabel">Submission Failed</h5>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <p>There was an error processing your request. Please try again later.</p>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
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

    <script>
        document.getElementById('withdrawal-form').addEventListener('submit', function(event) {
            event.preventDefault(); // Prevent default form submission

            // Show loader
            document.getElementById('loader').style.display = 'block';

            // Simulate processing delay
            setTimeout(function() {
                // Hide loader
                document.getElementById('loader').style.display = 'none';

                // Get form data
                var formData = new FormData(document.getElementById('withdrawal-form'));

                // Submit form using AJAX
                fetch("{{ route('withdrawal.store') }}", {
                    method: 'POST',
                    headers: {
                        'X-CSRF-TOKEN': document.querySelector('input[name="_token"]').value,
                        'Accept': 'application/json'
                    },
                    body: formData
                })
                .then(response => response.json())
                .then(data => {
                    if (data.success) {
                        // Populate modal with form data
                        document.getElementById('modal-amount').textContent = formData.get('amount');
                        document.getElementById('modal-wallet-address').textContent = formData.get('wallet_address');

                        // Show success modal
                        $('#zoomupModal').modal('show');
                         // Clear the input fields
                        document.getElementById('amount').value = '';
                        document.getElementById('wallet_address').value = '';
                    } else {
                        // Handle error case
                        $('#errorModal').modal('show');
                    }
                })
                .catch(error => {
                    console.error('Error:', error);
                });
            }, 3000); // 3 seconds delay
        });

        // Check if there are success or error messages in the session
        @if(session('success'))
            $(document).ready(function() {
                $('#zoomupModal').modal('show');
            });
        @endif

        @if(session('error'))
            $(document).ready(function() {
                $('#errorModal').modal('show');
            });
        @endif
    </script>

    <script>
        $(document).ready(function() {
            // Display success or error messages from the session
            @if(session('success'))
            Swal.fire({
                position: 'top-end',
                icon: 'success',
                title: '{{ session('success') }}',
                showConfirmButton: false,
                timer: 3000,
                padding: '2em'
            });
            @endif

            @if(session('error'))
            Swal.fire({
                position: 'top-end',
                icon: 'error',
                title: '{{ session('error') }}',
                showConfirmButton: false,
                timer: 3000,
                padding: '2em'
            });
            @endif
        });
    </script>

</body>
</html>
