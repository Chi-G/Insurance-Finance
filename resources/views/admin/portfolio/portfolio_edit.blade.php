<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <title>Tether Elite Finance - Admin Dashboard</title>
    @include('Admin.include.css')
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
    @include('Admin.include.navbar')
    <!--  END NAVBAR  -->

    <!--  BEGIN MAIN CONTAINER  -->
    <div class="main-container" id="container">
        <div class="overlay"></div>
        <div class="search-overlay"></div>

        <!--  BEGIN SIDEBAR  -->
        @include('Admin.include.sidebar')
        <!--  END SIDEBAR  -->

        <!--  BEGIN CONTENT AREA  -->
        <div id="content" class="main-content">
            <div class="layout-px-spacing">
                <div class="row layout-top-spacing" id="cancel-row">
                    <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
                        <div class="widget-content widget-content-area br-6">

                            <h1>{{ isset($subscription) ? 'Edit User Subscription' : 'Create New Subscription' }}</h1>

                            <a href="{{ route('admin.subscriptions') }}" class="btn btn-primary mb-3">All User Subscriptions</a>

                            <div class="table-responsive mb-4 mt-4">
                                <form action="{{ isset($subscription) ? route('admin.subscriptions.update', $subscription->id) : route('admin.subscriptions.store') }}" method="POST">
                                    @csrf
                                    @if(isset($subscription))
                                        @method('PATCH')
                                    @endif

                                    <div class="form-group">
                                        <label for="user_id">User</label>
                                        <input type="text" class="form-control" id="user_id" value="{{ $subscription->user->name }}" disabled>
                                    </div>

                                    <div class="form-group">
                                        <label for="plan">Plan</label>
                                        <select id="plan" name="plan_id" class="form-control" required>
                                            @foreach($plans as $plan)
                                                <option value="{{ $plan->id }}" {{ (isset($subscription) && $subscription->plan_id == $plan->id) ? 'selected' : '' }}>
                                                    {{ $plan->name }}
                                                </option>
                                            @endforeach
                                        </select>
                                        @error('plan_id')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label for="status">Status</label>
                                        <select id="status" name="status" class="form-control" required>
                                            <option value="not-subscribed" {{ (isset($subscription) && $subscription->status == 'not-subscribed') ? 'selected' : '' }}>Not Subscribed</option>
                                            <option value="pending" {{ (isset($subscription) && $subscription->status == 'pending') ? 'selected' : '' }}>Pending</option>
                                            <option value="processing" {{ (isset($subscription) && $subscription->status == 'processing') ? 'selected' : '' }}>Processing</option>
                                            <option value="active-subscription" {{ (isset($subscription) && $subscription->status == 'active-subscription') ? 'selected' : '' }}>Active Subscription</option>
                                        </select>
                                        @error('status')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <button type="submit" class="btn btn-primary">
                                        {{ isset($subscription) ? 'Update Subscription' : 'Create Subscription' }}
                                    </button>
                                </form>
                            </div>
                    </div>
                </div>
            </div>

            <div class="footer-wrapper">
                <div class="footer-section f-section-1">
                    <p class="">Copyright © 2020 <a target="_blank" href="https://tetherelitefinance.com">Tether Elite Finance</a>, All rights reserved.</p>
                </div>
            </div>
        </div>
        <!--  END CONTENT AREA  -->
    </div>
    <!-- END MAIN CONTAINER -->

    <!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
    @include('Admin.include.script')
    <!-- END PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->
</body>
</html>
