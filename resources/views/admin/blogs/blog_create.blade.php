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

                            <h1>{{ isset($blog) ? 'Edit Blog' : 'Create Blog' }}</h1>
                            <a href="{{ route('blog.index') }}" class="btn btn-primary">All Blogs</a>

                            <div class="table-responsive mb-4 mt-4">
                                <form action="{{ isset($blog) ? route('blog.update', $blog->id) : route('blog.store') }}" method="POST">
                                    @csrf
                                    @if(isset($blog))
                                        @method('PUT')
                                    @endif

                                    <div class="form-group">
                                        <label for="title">Title</label>
                                        <input type="text" class="form-control" id="title" name="title" value="{{ isset($blog) ? $blog->title : old('title') }}" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="desc1">Description 1</label>
                                        <textarea class="form-control" id="desc1" name="desc1" required>{{ isset($blog) ? $blog->desc1 : old('desc1') }}</textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="desc2">Description 2</label>
                                        <textarea class="form-control" id="desc2" name="desc2" required>{{ isset($blog) ? $blog->desc2 : old('desc2') }}</textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="excert">Excerpt</label>
                                        <textarea class="form-control" id="excert" name="excert" required>{{ isset($blog) ? $blog->excert : old('excert') }}</textarea>
                                    </div>

                                    <div class="form-group">
                                        <label for="image_sm">Image Small</label>
                                        <input type="file" class="form-control" id="image_sm" name="image_sm" value="{{ isset($blog) ? $blog->image_sm : old('image_sm') }}" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="image_bg">Image Big</label>
                                        <input type="file" class="form-control" id="image_bg" name="image_bg" value="{{ isset($blog) ? $blog->image_bg : old('image_bg') }}" required>
                                    </div>
                                    <button type="submit" class="btn btn-primary">{{ isset($blog) ? 'Update' : 'Save' }}</button>
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
