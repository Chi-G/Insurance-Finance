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

                            <a href="{{ route('faq.index') }}" class="btn btn-primary">All Faq</a>

                            <div class="table-responsive mb-4 mt-4">
                                <form action="{{ route('faq.store') }}" method="POST">
                                    @csrf
                                    <div class="form-group">
                                        <label for="title">Title</label>
                                        <input type="text" class="form-control" id="title" name="title" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="description">Description</label>
                                        <textarea class="form-control" id="description" name="description" required></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="faq1_title">FAQ 1 Title</label>
                                        <input type="text" class="form-control" id="faq1_title" name="faq1_title" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="faq1_desc">FAQ 1 Description</label>
                                        <textarea class="form-control" id="faq1_desc" name="faq1_desc" required></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="faq2_title">FAQ 2 Title</label>
                                        <input type="text" class="form-control" id="faq2_title" name="faq2_title">
                                    </div>
                                    <div class="form-group">
                                        <label for="faq2_desc">FAQ 2 Description</label>
                                        <textarea class="form-control" id="faq2_desc" name="faq2_desc"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="faq3_title">FAQ 3 Title</label>
                                        <input type="text" class="form-control" id="faq3_title" name="faq3_title">
                                    </div>
                                    <div class="form-group">
                                        <label for="faq3_desc">FAQ 3 Description</label>
                                        <textarea class="form-control" id="faq3_desc" name="faq3_desc"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="faq4_title">FAQ 4 Title</label>
                                        <input type="text" class="form-control" id="faq4_title" name="faq4_title">
                                    </div>
                                    <div class="form-group">
                                        <label for="faq4_desc">FAQ 4 Description</label>
                                        <textarea class="form-control" id="faq4_desc" name="faq4_desc"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="faq5_title">FAQ 5 Title</label>
                                        <input type="text" class="form-control" id="faq5_title" name="faq5_title">
                                    </div>
                                    <div class="form-group">
                                        <label for="faq5_desc">FAQ 5 Description</label>
                                        <textarea class="form-control" id="faq5_desc" name="faq5_desc"></textarea>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Save</button>
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
