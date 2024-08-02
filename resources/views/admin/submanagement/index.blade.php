<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <title>Tether Elite Finance - Admin Dashboard</title>
    @include('Admin.include.css')
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
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

                            <div class="table-responsive mb-4 mt-4">
                                <h1>Users and Their Investments</h1>

                                    <table id="zero-config" class="table table-bordered table-hover dataTable table-condensed mb-4">
                                        <thead>
                                            <tr>
                                                <th>User</th>
                                                <th>Title</th>
                                                <th>Daily Percent</th>
                                                <th>Per Day</th>
                                                <th>Min Invest</th>
                                                <th>Max Invest</th>
                                                <th>Average Month</th>
                                                <th>Date</th>
                                                <th class="text-center">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($users as $user)
                                                @if($user->investment)
                                                    <tr>
                                                        <td>{{ $user->name }}</td>
                                                        <td>{{ $user->investment->title }}</td>
                                                        <td>{{ $user->investment->daily_percent }}</td>
                                                        <td>{{ $user->investment->per_day }}</td>
                                                        <td>{{ $user->investment->min_invest }}</td>
                                                        <td>{{ $user->investment->max_invest }}</td>
                                                        <td>{{ $user->investment->average_month }}</td>
                                                        <td>{{ $user->investment->created_at->format('d M Y') }}</td>
                                                        <td class="text-center">
                                                            <ul class="table-controls">
                                                                <li>
                                                                    <a href="{{ route('sub_management.edit', ['user_id' => $user->id, 'investment_id' => $user->investment->id]) }}" data-toggle="tooltip" data-placement="top" title="Edit">
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check-circle text-primary">
                                                                            <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path>
                                                                            <polyline points="22 4 12 14.01 9 11.01"></polyline>
                                                                        </svg>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <form action="{{ route('sub_management.destroy', ['user_id' => $user->id, 'investment_id' => $user->investment->id]) }}" method="POST" style="display:inline-block;">
                                                                        @csrf
                                                                        @method('DELETE')
                                                                        <button type="submit" style="border:none; background:none;" class="warning confirm btn btn-danger delete-button" data-id="{{ $user->investment->id }}" data-toggle="tooltip" data-placement="top" title="Delete">
                                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x-circle text-danger">
                                                                                <circle cx="12" cy="12" r="10"></circle>
                                                                                <line x1="15" y1="9" x2="9" y2="15"></line>
                                                                                <line x1="9" y1="9" x2="15" y2="15"></line>
                                                                            </svg>
                                                                        </button>
                                                                    </form>
                                                                </li>
                                                            </ul>
                                                        </td>
                                                    </tr>
                                                @endif
                                            @endforeach
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
            </div>
        </div>
        <!--  END CONTENT AREA  -->
    </div>
    <!-- END MAIN CONTAINER -->

    <!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
    @include('Admin.include.script')
    <script>
        $(document).ready(function() {
            // Handle delete button click
            $('.delete-button').on('click', function(e) {
                e.preventDefault();
                var button = $(this);
                var form = button.closest("form");

                Swal.fire({
                    title: 'Are you sure you want to delete?',
                    text: "You won't be able to revert this!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonText: 'Delete',
                    cancelButtonText: 'Cancel',
                    padding: '2em'
                }).then((result) => {
                    if (result.isConfirmed) {
                        form.submit();
                    }
                });
            });

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
    <!-- END PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->
</body>
</html>
