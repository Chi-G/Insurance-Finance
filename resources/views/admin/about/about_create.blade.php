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

                            <a href="{{ route('about.index') }}" class="btn btn-primary">All Abouts</a>

                            <div class="table-responsive mb-4 mt-4">
                                <form action="{{ route('about.store') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group">
                                        <label for="title1">Title 1</label>
                                        <input type="text" class="form-control" id="title1" name="title1" value="{{ old('title1') }}" required>
                                        @error('title1')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="title1_desc">Title 1 Description</label>
                                        <textarea class="form-control" id="title1_desc" name="title1_desc" rows="3" required>{{ old('title1_desc') }}</textarea>
                                        @error('title1_desc')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="mission_desc">Mission Description</label>
                                        <textarea class="form-control" id="mission_desc" name="mission_desc" rows="3" required>{{ old('mission_desc') }}</textarea>
                                        @error('mission_desc')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="vision_desc">Vision Description</label>
                                        <textarea class="form-control" id="vision_desc" name="vision_desc" rows="3" required>{{ old('vision_desc') }}</textarea>
                                        @error('vision_desc')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="experience_desc">Experience Description</label>
                                        <textarea class="form-control" id="experience_desc" name="experience_desc" rows="3" required>{{ old('experience_desc') }}</textarea>
                                        @error('experience_desc')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="title2">Title 2</label>
                                        <input type="text" class="form-control" id="title2" name="title2" value="{{ old('title2') }}" required>
                                        @error('title2')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="title2_desc">Title 2 Description</label>
                                        <textarea class="form-control" id="title2_desc" name="title2_desc" rows="3" required>{{ old('title2_desc') }}</textarea>
                                        @error('title2_desc')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="image1">Image 1</label>
                                        <input type="file" class="form-control" id="image1" name="image1" required>
                                        @error('image1')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="image2">Image 2</label>
                                        <input type="file" class="form-control" id="image2" name="image2" required>
                                        @error('image2')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
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
