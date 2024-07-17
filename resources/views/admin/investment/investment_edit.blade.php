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

                            <a href="{{ route('investment.index') }}" class="btn btn-primary">All Investment</a>

                            <div class="table-responsive mb-4 mt-4">
                                <form action="{{ route('investment.update', $investment->id) }}" method="POST">
                                    @csrf
                                    @method('PUT')
                                    <div class="form-group">
                                        <label for="title">Title</label>
                                        <input type="text" class="form-control" id="title" name="title" value="{{ $investment->title }}" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="description">Description</label>
                                        <textarea class="form-control" id="description" name="description" rows="3" required>{{ $investment->description }}</textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="daily_percent">Daily %</label>
                                        <input type="number" step="0.01" class="form-control" id="daily_percent" name="daily_percent" value="{{ $investment->daily_percent }}" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="per_day">Per Day</label>
                                        <input type="number" step="0.01" class="form-control" id="per_day" name="per_day" value="{{ $investment->per_day }}" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="min_invest">Min Invest</label>
                                        <input type="number" step="0.01" class="form-control" id="min_invest" name="min_invest" value="{{ $investment->min_invest }}" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="max_invest">Max Invest</label>
                                        <input type="number" step="0.01" class="form-control" id="max_invest" name="max_invest" value="{{ $investment->max_invest }}" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="average_month">Average Month</label>
                                        <input type="number" step="0.01" class="form-control" id="average_month" name="average_month" value="{{ $investment->average_month }}" required>
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
