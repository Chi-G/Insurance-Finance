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
                            <a href="{{ route('admin_withdrawals.create') }}" class="btn btn-primary">Add New Withdrawal</a>

                            <div class="table-responsive mb-4 mt-4">
                                <table id="zero-config" class="table table-bordered table-hover dataTable table-condensed mb-4">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Amount</th>
                                            <th>Currency</th>
                                            <th>Withdrawal Status</th>
                                            <th>Date</th>
                                            <th class="text-center">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($withdrawals as $withdrawal)
                                        <tr>
                                            <td>{{ $withdrawal->user ? $withdrawal->user->name : $withdrawal->name }}</td>
                                            <td>{{ $withdrawal->amount }}</td>
                                            <td>{{ $withdrawal->currency }}</td>
                                            <td>
                                                <div class="badge badge-pill
                                                    @if($withdrawal->status === 'Not-Requested') badge-danger
                                                    @elseif($withdrawal->status === 'Pending') badge-warning
                                                    @elseif($withdrawal->status === 'Contracting') badge-info
                                                    @elseif($withdrawal->status === 'Evaluating') badge-primary
                                                    @elseif($withdrawal->status === 'Taking-action') badge-secondary
                                                    @elseif($withdrawal->status === 'Completed') badge-success
                                                    @endif">
                                                    {{ ucfirst($withdrawal->status) }}
                                                </div>
                                            </td>
                                            <td>{{ $withdrawal->date->format('d M Y') }}</td>
                                            <td class="text-center">
                                                <ul class="table-controls">
                                                    <li>
                                                        <a href="{{ route('admin_withdrawals.edit', $withdrawal->id) }}" data-toggle="tooltip" data-placement="top" title="Edit">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check-circle text-primary">
                                                                <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path>
                                                                <polyline points="22 4 12 14.01 9 11.01"></polyline>
                                                            </svg>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <form action="{{ route('admin_withdrawals.destroy', $withdrawal->id) }}" method="POST" style="display:inline-block;">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="button" style="border:none; background:none;" class="warning confirm btn btn-danger delete-button" data-id="{{ $withdrawal->id }}" data-toggle="tooltip" data-placement="top" title="Delete">
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
