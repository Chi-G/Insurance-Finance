<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <title>Tether Elite Finance - Admin Dashboard</title>
    @include('user.include.css')

    <style>
        .progress-status {
            font-weight: bold;
            color: black;
        }
    </style>

    <!-- END PAGE LEVEL PLUGINS/CUSTOM STYLES -->

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
                <div class="row layout-top-spacing" id="cancel-row">
                    <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
                        <div class="widget-content widget-content-area br-6">

                            <h3>{{ $user->name }}, welcome. Select a subscription plan</h3>
                            <div class="table-responsive mb-4 mt-4">

                                @if(session('success'))
                                    <div class="alert alert-success">
                                        {{ session('success') }}
                                    </div>
                                @endif

                                <form action="{{ route('user.portfolio.store') }}" method="POST">
                                    @csrf
                                    <div class="form-group">
                                        <label for="plan">Choose a Plan</label>
                                        <select id="plan" name="plan" class="form-control">
                                            @foreach($plans as $plan)
                                                <option value="{{ $plan }}">{{ $plan }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Subscribe</button>
                                </form>

                                <hr>

                                <h6>Subscription Progress</h6>
                                <table id="zero-config" class="table table-bordered table-hover dataTable table-condensed mb-4">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Active Plan</th>
                                            <th>Status</th>
                                            <th>Subscribed Date</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @if($subscription)
                                        <tr>
                                            <td>{{ $subscription->user->name }}</td>
                                            <td>{{ $subscription->plan }}</td>
                                            <td>
                                                <div class="progress br-30" style="position: relative;">
                                                    <div class="progress-bar br-30
                                                        @if($subscription->status == 'not-subscribed') bg-danger
                                                        @elseif($subscription->status == 'pending') bg-warning
                                                        @elseif($subscription->status == 'processing') bg-info
                                                        @elseif($subscription->status == 'active-subscription') bg-success
                                                        @endif"
                                                        role="progressbar"
                                                        style="width:
                                                            @if($subscription->status == 'not-subscribed') 0%
                                                            @elseif($subscription->status == 'pending') 25%
                                                            @elseif($subscription->status == 'processing') 50%
                                                            @elseif($subscription->status == 'active-subscription') 100%
                                                            @endif"
                                                        aria-valuenow="
                                                            @if($subscription->status == 'not-subscribed') 0
                                                            @elseif($subscription->status == 'pending') 25
                                                            @elseif($subscription->status == 'processing') 50
                                                            @elseif($subscription->status == 'active-subscription') 100
                                                            @endif"
                                                        aria-valuemin="0"
                                                        aria-valuemax="100"></div>
                                                    <span class="progress-status" style="position: absolute; left: 50%; top: 50%; transform: translate(-50%, -50%);">
                                                        @if($subscription->status == 'not-subscribed') Not Subscribed
                                                        @elseif($subscription->status == 'pending') Pending
                                                        @elseif($subscription->status == 'processing') Processing
                                                        @elseif($subscription->status == 'active-subscription') Active Subscription
                                                        @endif
                                                    </span>
                                                </div>
                                            </td>
                                            <td>{{ $subscription->created_at->format('d M Y') }}</td>
                                        </tr>
                                        @else
                                        <tr>
                                            <td colspan="4">You have no active subscriptions, kindly choose a subscription plan above</td>
                                        </tr>
                                        @endif
                                    </tbody>
                                </table>
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
