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

                            <a href="{{ route('admin_withdrawals.index') }}" class="btn btn-primary">All User Withdrawals</a>

                            <div class="table-responsive mb-4 mt-4">
                                <h2>Edit Withdrawal</h2>
                                <form action="{{ route('admin_withdrawals.update', $withdrawal->id) }}" method="POST">
                                    @csrf
                                    @method('PUT')
                                    <div class="form-group">
                                        <label for="name">Name:</label>
                                        {{-- <input type="text" class="form-control" id="name" name="name" value="{{ $withdrawal->name }}" required> --}}
                                        <select id="user_id" name="user_id" class="form-control" {{ $withdrawal->user ? 'disabled' : '' }}>
                                            @foreach($users as $user)
                                                <option value="{{ $user->id }}" {{ $withdrawal->user_id == $user->id ? 'selected' : '' }}>{{ $user->name }}</option>
                                            @endforeach
                                        </select>
                                        @if($withdrawal->user)
                                            <input type="hidden" name="user_id" value="{{ $withdrawal->user_id }}">
                                        @endif
                                    </div>
                                    <div class="form-group">
                                        <label for="date">Date:</label>
                                        <input type="date" class="form-control" id="date" name="date" value="{{ $withdrawal->date->format('Y-m-d') }}" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="amount">Amount:</label>
                                        <input type="number" class="form-control" id="amount" name="amount" value="{{ $withdrawal->amount }}" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="currency">Currency:</label>
                                        <input type="text" class="form-control" id="currency" name="currency" value="{{ $withdrawal->currency }}" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="withdrawal_status">Withdrawal Status</label>
                                        <select id="withdrawal_status" name="status" class="form-control" required>
                                            <option value="Not-Requested" {{ $withdrawal->status == 'Not-Requested' ? 'selected' : '' }}>Not-Requested</option>
                                            <option value="Pending" {{ $withdrawal->status == 'Pending' ? 'selected' : '' }}>Pending</option>
                                            <option value="Contracting" {{ $withdrawal->status == 'Contracting' ? 'selected' : '' }}>Contracting</option>
                                            <option value="Evaluating" {{ $withdrawal->status == 'Evaluating' ? 'selected' : '' }}>Evaluating</option>
                                            <option value="Taking-action" {{ $withdrawal->status == 'processing' ? 'selected' : '' }}>Taking-action</option>
                                            <option value="Completed" {{ $withdrawal->status == 'Completed' ? 'selected' : '' }}>Completed</option>
                                        </select>
                                        @error('status')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <button type="submit" class="btn btn-primary">Update</button>
                                </form>
                            </div>
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
