<div class="sidebar-wrapper sidebar-theme">

    <nav id="sidebar">

        <ul class="navbar-nav theme-brand flex-row  text-center">
            <li class="nav-item theme-logo">
                <a href="{{route('admin.dashboard')}}">
                    <img src="{{asset('backend/assets/img/90x90.jpg')}}" class="navbar-logo" alt="logo">
                </a>
            </li>
            <li class="nav-item theme-text">
                <a href="{{route('admin.dashboard')}}" class="nav-link"> T E F </a>
            </li>
            <li class="nav-item toggle-sidebar">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-left sidebarCollapse"><line x1="19" y1="12" x2="5" y2="12"></line><polyline points="12 19 5 12 12 5"></polyline></svg>
            </li>
        </ul>
        <div class="shadow-bottom"></div>
        <ul class="list-unstyled menu-categories" id="accordionExample">
            <li class="menu active">
                <a href="#dashboard" data-toggle="collapse" aria-expanded="true" class="dropdown-toggle">
                    <div class="">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg>
                        <span>Dashboard</span>
                    </div>
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg>
                    </div>
                </a>
                <ul class="collapse submenu recent-submenu mini-recent-submenu list-unstyled show" id="dashboard" data-parent="#accordionExample">
                    <li class="active">
                        <a href="{{route('admin.dashboard')}}"> Home </a>
                    </li>
                    <li>
                        <a href="{{route('slider.index')}}"> Sliders </a>
                    </li>
                    <li>
                        <a href="{{route('advert.index')}}"> Advert Widget </a>
                    </li>
                </ul>
            </li>

            <li class="menu menu-heading">
                <div class="heading"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg><span>PAGE MANAGEMENT</span></div>
            </li>

            <li class="menu">
                <a href="{{route('about.index')}}" aria-expanded="false" class="dropdown-toggle">
                    <div class="">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-map-pin"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path><circle cx="12" cy="10" r="3"></circle></svg>
                        <span>About Us</span>
                    </div>
                </a>
            </li>

            <li class="menu">
                <a href="{{route('admin_deposits.index')}}" aria-expanded="false" class="dropdown-toggle">
                    <div class="">
                        <svg viewBox="0 -6.5 40 40" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <title>deposit copy</title> <desc>Created with Sketch.</desc> <defs> <linearGradient x1="50%" y1="0%" x2="50%" y2="100%" id="linearGradient-1"> <stop stop-color="#EDEEF4" offset="0%"> </stop> <stop stop-color="#D7D8E6" offset="100%"> </stop> </linearGradient> <linearGradient x1="100%" y1="50%" x2="0%" y2="50%" id="linearGradient-2"> <stop stop-color="#C3C4D4" offset="0%"> </stop> <stop stop-color="#AEAFC8" offset="100%"> </stop> </linearGradient> <linearGradient x1="50%" y1="0%" x2="50%" y2="100%" id="linearGradient-3"> <stop stop-color="#1DD47F" offset="0%"> </stop> <stop stop-color="#0DA949" offset="100%"> </stop> </linearGradient> <linearGradient x1="50%" y1="0%" x2="50%" y2="100%" id="linearGradient-4"> <stop stop-color="#7AA0FA" offset="0%"> </stop> <stop stop-color="#4466F3" offset="100%"> </stop> </linearGradient> <linearGradient x1="50%" y1="0%" x2="50%" y2="100%" id="linearGradient-5"> <stop stop-color="#2F6DC8" offset="0%"> </stop> <stop stop-color="#153B97" offset="100%"> </stop> </linearGradient> </defs> <g id="icons" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"> <g id="ui-gambling-website-lined-icnos-casinoshunter" transform="translate(-2160.000000, -2039.000000)" fill-rule="nonzero"> <g id="4" transform="translate(50.000000, 1871.000000)"> <g id="deposit-copy" transform="translate(2110.000000, 168.000000)"> <path d="M29.4402019,0 C30.9183269,0 32.1165839,1.20419964 32.1165839,2.68965517 L32.1165839,18.8275862 C32.1165839,20.3130417 30.9183269,21.5172414 29.4402019,21.5172414 L2.67638199,21.5172414 C1.19825703,21.5172414 1.42108547e-14,20.3130417 1.42108547e-14,18.8275862 L1.42108547e-14,2.68965517 C1.42108547e-14,1.20419964 1.19825703,0 2.67638199,0 L29.4402019,0 Z" id="Path" fill="url(#linearGradient-1)"> </path> <rect id="Rectangle" fill="url(#linearGradient-2)" x="3.56850933" y="15.2413793" width="6.74051761" height="1.65517241" rx="0.827586207"> </rect> <rect id="Rectangle-Copy-59" fill="url(#linearGradient-2)" x="11.2011543" y="15.2413793" width="6.74051761" height="1.65517241" rx="0.827586207"> </rect> <ellipse id="Oval" fill="#F15314" cx="5.35276399" cy="5.37931034" rx="1.78425466" ry="1.79310345"> </ellipse> <ellipse id="Oval-Copy-21" fill="#F59D00" cx="8.02914598" cy="5.37931034" rx="1.78425466" ry="1.79310345"> </ellipse> <path d="M30.1961474,3.80818423 C30.1961474,2.95430816 30.9399074,2.26210483 31.8573818,2.26210483 C32.1773631,2.26210483 32.4905356,2.34811087 32.7592563,2.50978508 L38.4999061,5.96361337 C39.2704021,6.42717776 39.4912295,7.38428405 38.993138,8.1013701 C38.8654862,8.28514613 38.6973702,8.44160861 38.4999061,8.56041168 L32.7592563,12.01424 C31.9887603,12.4778044 30.9603669,12.2722844 30.4622754,11.5551984 C30.2885594,11.3051052 30.1961474,11.0136414 30.1961476,10.7163908 L30.1959606,10.4717636 L20.9206986,10.472086 C20.0032243,10.472086 19.2594643,9.77988268 19.2594643,8.92600661 L19.2594643,5.59801844 C19.2594643,4.74414236 20.0032243,4.05193904 20.9206722,4.05193904 L30.1959611,4.0516646 L30.1961474,3.80818423 Z" id="Path" fill="url(#linearGradient-3)" transform="translate(29.259464, 7.262105) scale(-1, 1) translate(-29.259464, -7.262105) "> </path> <g id="chip-copy-7" transform="translate(21.000000, 13.000000)"> <path d="M7,0 C10.8659932,0 14,3.13400675 14,7 C14,10.8659932 10.8659932,14 7,14 C3.13400675,14 0,10.8659932 0,7 C0,3.13400675 3.13400675,0 7,0 Z" id="chip" fill="url(#linearGradient-4)"> </path> <path d="M7,0 C10.8659932,0 14,3.13400675 14,7 C14,10.8659932 10.8659932,14 7,14 C3.13400675,14 0,10.8659932 0,7 C0,3.13400675 3.13400675,0 7,0 Z M4.43853849,9.92622304 L4.41931818,9.95002806 L4.41931818,9.95002806 L2.78881632,11.5806555 C3.80791151,12.5180385 5.14064605,13.1197128 6.61164099,13.2102997 L6.61134556,10.8697107 C5.78307575,10.7875255 5.03124461,10.4454675 4.43853849,9.92622304 Z M7.38865444,10.8697107 L7.38835901,13.2102997 C8.91530999,13.116267 10.2932818,12.471524 11.3261104,11.4722349 C11.3019681,11.4583579 11.2792023,11.4402854 11.2582351,11.4193182 L9.66855872,9.82883918 C9.06056564,10.4025916 8.2676545,10.7824918 7.38865444,10.8697107 Z M3.13009215,7.38666211 L3.11111111,7.38888889 L3.11111111,7.38888889 L0.78970034,7.38835901 C0.874698876,8.76860855 1.40967218,10.02713 2.24973747,11.0190407 L3.86934624,9.40005612 L3.91287599,9.36530366 C3.48374323,8.80605343 3.20315359,8.12684456 3.13009215,7.38666211 Z M10.1792379,9.2401802 L11.8082071,10.8693462 L11.8413327,10.9089852 C12.6289122,9.93477714 13.1284143,8.71805532 13.2102997,7.38835901 L10.8888889,7.38888889 L10.8699078,7.38666211 C10.8022117,8.07248905 10.556348,8.70596882 10.1792379,9.2401802 Z M7,3.88888889 C5.28178078,3.88888889 3.88888889,5.28178078 3.88888889,7 C3.88888889,8.71821922 5.28178078,10.1111111 7,10.1111111 C8.71821922,10.1111111 10.1111111,8.71821922 10.1111111,7 C10.1111111,5.28178078 8.71821922,3.88888889 7,3.88888889 Z M0.78970034,6.61164099 L3.11111111,6.61111111 L3.13009215,6.61333789 C3.20315359,5.87315544 3.48374323,5.19394657 3.91287599,4.63469634 L3.86934624,4.59994388 L2.24973747,2.9809593 C1.40967218,3.97286995 0.874698876,5.23139145 0.78970034,6.61164099 Z M11.6791825,2.8984969 L10.024176,4.55483602 C10.488784,5.128748 10.7933322,5.83755281 10.8699078,6.61333789 L10.8888889,6.61111111 L10.8888889,6.61111111 L13.2102997,6.61164099 C13.1229278,5.19285177 12.5601017,3.90268335 11.6791825,2.8984969 Z M2.78881632,2.41934447 L4.41931818,4.04997194 C4.42709843,4.05775219 4.43448011,4.06578009 4.4414632,4.07403026 C5.03171981,3.55411618 5.78428141,3.21192611 6.61333789,3.13009215 C6.61127253,3.1241528 6.61111111,3.11765081 6.61111111,3.11111111 L6.61164099,0.78970034 C5.14064605,0.880287159 3.80791151,1.48196152 2.78881632,2.41934447 Z M7.38835901,0.78970034 L7.38888889,3.11111111 L7.38666211,3.13009215 C8.17674506,3.20807914 8.89735606,3.52251918 9.47675802,4.00167517 L11.1313569,2.34717519 C10.1229473,1.45113198 8.82124811,0.877940525 7.38835901,0.78970034 Z" id="chip" fill="url(#linearGradient-5)"> </path> </g> </g> </g> </g> </g> </g></svg>
                        <span>Last Deposits</span>
                    </div>
                </a>
            </li>

            <li class="menu">
                <a href="{{route('admin_withdrawals.index')}}" aria-expanded="false" class="dropdown-toggle">
                    <div class="">
                        <svg viewBox="0 -7.5 42 42" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <title>deposit</title> <desc>Created with Sketch.</desc> <defs> <linearGradient x1="50%" y1="0%" x2="50%" y2="100%" id="linearGradient-1"> <stop stop-color="#EDEEF4" offset="0%"> </stop> <stop stop-color="#D7D8E6" offset="100%"> </stop> </linearGradient> <linearGradient x1="100%" y1="50%" x2="0%" y2="50%" id="linearGradient-2"> <stop stop-color="#C3C4D4" offset="0%"> </stop> <stop stop-color="#AEAFC8" offset="100%"> </stop> </linearGradient> <linearGradient x1="50%" y1="0%" x2="50%" y2="100%" id="linearGradient-3"> <stop stop-color="#1DD47F" offset="0%"> </stop> <stop stop-color="#0DA949" offset="100%"> </stop> </linearGradient> <linearGradient x1="50%" y1="0%" x2="50%" y2="100%" id="linearGradient-4"> <stop stop-color="#7AA0FA" offset="0%"> </stop> <stop stop-color="#4466F3" offset="100%"> </stop> </linearGradient> <linearGradient x1="50%" y1="0%" x2="50%" y2="100%" id="linearGradient-5"> <stop stop-color="#2F6DC8" offset="0%"> </stop> <stop stop-color="#153B97" offset="100%"> </stop> </linearGradient> </defs> <g id="icons" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"> <g id="ui-gambling-website-lined-icnos-casinoshunter" transform="translate(-2029.000000, -2039.000000)" fill-rule="nonzero"> <g id="4" transform="translate(50.000000, 1871.000000)"> <g id="deposit" transform="translate(1979.000000, 168.000000)"> <path d="M29.4402019,0 C30.9183269,0 32.1165839,1.20419964 32.1165839,2.68965517 L32.1165839,18.8275862 C32.1165839,20.3130417 30.9183269,21.5172414 29.4402019,21.5172414 L2.67638199,21.5172414 C1.19825703,21.5172414 1.42108547e-14,20.3130417 1.42108547e-14,18.8275862 L1.42108547e-14,2.68965517 C1.42108547e-14,1.20419964 1.19825703,0 2.67638199,0 L29.4402019,0 Z" id="Path" fill="url(#linearGradient-1)"> </path> <rect id="Rectangle" fill="url(#linearGradient-2)" x="3.56850933" y="15.2413793" width="6.74051761" height="1.65517241" rx="0.827586207"> </rect> <rect id="Rectangle-Copy-59" fill="url(#linearGradient-2)" x="11.2011543" y="15.2413793" width="6.74051761" height="1.65517241" rx="0.827586207"> </rect> <ellipse id="Oval" fill="#F15314" cx="5.35276399" cy="5.37931034" rx="1.78425466" ry="1.79310345"> </ellipse> <ellipse id="Oval-Copy-21" fill="#F59D00" cx="8.02914598" cy="5.37931034" rx="1.78425466" ry="1.79310345"> </ellipse> <path d="M32.1961474,3.80818423 C32.1961474,2.95430816 32.9399074,2.26210483 33.8573818,2.26210483 C34.1773631,2.26210483 34.4905356,2.34811087 34.7592563,2.50978508 L40.4999061,5.96361337 C41.2704021,6.42717776 41.4912295,7.38428405 40.993138,8.1013701 C40.8654862,8.28514613 40.6973702,8.44160861 40.4999061,8.56041168 L34.7592563,12.01424 C33.9887603,12.4778044 32.9603669,12.2722844 32.4622754,11.5551984 C32.2885594,11.3051052 32.1961474,11.0136414 32.1961476,10.7163908 L32.1959606,10.4717636 L22.9206986,10.472086 C22.0032243,10.472086 21.2594643,9.77988268 21.2594643,8.92600661 L21.2594643,5.59801844 C21.2594643,4.74414236 22.0032243,4.05193904 22.9206722,4.05193904 L32.1959611,4.0516646 L32.1961474,3.80818423 Z" id="Path" fill="url(#linearGradient-3)"> </path> <g id="chip-copy-7" transform="translate(21.000000, 13.000000)"> <path d="M7,0 C10.8659932,0 14,3.13400675 14,7 C14,10.8659932 10.8659932,14 7,14 C3.13400675,14 0,10.8659932 0,7 C0,3.13400675 3.13400675,0 7,0 Z" id="chip" fill="url(#linearGradient-4)"> </path> <path d="M7,0 C10.8659932,0 14,3.13400675 14,7 C14,10.8659932 10.8659932,14 7,14 C3.13400675,14 0,10.8659932 0,7 C0,3.13400675 3.13400675,0 7,0 Z M4.43853849,9.92622304 L4.41931818,9.95002806 L4.41931818,9.95002806 L2.78881632,11.5806555 C3.80791151,12.5180385 5.14064605,13.1197128 6.61164099,13.2102997 L6.61134556,10.8697107 C5.78307575,10.7875255 5.03124461,10.4454675 4.43853849,9.92622304 Z M7.38865444,10.8697107 L7.38835901,13.2102997 C8.91530999,13.116267 10.2932818,12.471524 11.3261104,11.4722349 C11.3019681,11.4583579 11.2792023,11.4402854 11.2582351,11.4193182 L9.66855872,9.82883918 C9.06056564,10.4025916 8.2676545,10.7824918 7.38865444,10.8697107 Z M3.13009215,7.38666211 L3.11111111,7.38888889 L3.11111111,7.38888889 L0.78970034,7.38835901 C0.874698876,8.76860855 1.40967218,10.02713 2.24973747,11.0190407 L3.86934624,9.40005612 L3.91287599,9.36530366 C3.48374323,8.80605343 3.20315359,8.12684456 3.13009215,7.38666211 Z M10.1792379,9.2401802 L11.8082071,10.8693462 L11.8413327,10.9089852 C12.6289122,9.93477714 13.1284143,8.71805532 13.2102997,7.38835901 L10.8888889,7.38888889 L10.8699078,7.38666211 C10.8022117,8.07248905 10.556348,8.70596882 10.1792379,9.2401802 Z M7,3.88888889 C5.28178078,3.88888889 3.88888889,5.28178078 3.88888889,7 C3.88888889,8.71821922 5.28178078,10.1111111 7,10.1111111 C8.71821922,10.1111111 10.1111111,8.71821922 10.1111111,7 C10.1111111,5.28178078 8.71821922,3.88888889 7,3.88888889 Z M0.78970034,6.61164099 L3.11111111,6.61111111 L3.13009215,6.61333789 C3.20315359,5.87315544 3.48374323,5.19394657 3.91287599,4.63469634 L3.86934624,4.59994388 L2.24973747,2.9809593 C1.40967218,3.97286995 0.874698876,5.23139145 0.78970034,6.61164099 Z M11.6791825,2.8984969 L10.024176,4.55483602 C10.488784,5.128748 10.7933322,5.83755281 10.8699078,6.61333789 L10.8888889,6.61111111 L10.8888889,6.61111111 L13.2102997,6.61164099 C13.1229278,5.19285177 12.5601017,3.90268335 11.6791825,2.8984969 Z M2.78881632,2.41934447 L4.41931818,4.04997194 C4.42709843,4.05775219 4.43448011,4.06578009 4.4414632,4.07403026 C5.03171981,3.55411618 5.78428141,3.21192611 6.61333789,3.13009215 C6.61127253,3.1241528 6.61111111,3.11765081 6.61111111,3.11111111 L6.61164099,0.78970034 C5.14064605,0.880287159 3.80791151,1.48196152 2.78881632,2.41934447 Z M7.38835901,0.78970034 L7.38888889,3.11111111 L7.38666211,3.13009215 C8.17674506,3.20807914 8.89735606,3.52251918 9.47675802,4.00167517 L11.1313569,2.34717519 C10.1229473,1.45113198 8.82124811,0.877940525 7.38835901,0.78970034 Z" id="chip" fill="url(#linearGradient-5)"> </path> </g> </g> </g> </g> </g> </g></svg>
                        <span>Last Withdrawal</span>
                    </div>
                </a>
            </li>

            <li class="menu">
                <a href="{{route('investment.index')}}" aria-expanded="false" class="dropdown-toggle">
                    <div class="">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-dollar-sign"><line x1="12" y1="1" x2="12" y2="23"></line><path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"></path></svg>
                        <span>Investment</span>
                    </div>
                </a>
            </li>

            {{-- <li class="menu">
                <a href="{{ route('team.index') }}" aria-expanded="false" class="dropdown-toggle">
                    <div class="">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file-plus"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="12" y1="18" x2="12" y2="12"></line><line x1="9" y1="15" x2="15" y2="15"></line></svg>
                        <span>Teams</span>
                    </div>
                </a>
            </li> --}}

            <li class="menu">
                <a href="{{ route('faq.index') }}" aria-expanded="false" class="dropdown-toggle">
                    <div class="">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-message-square"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"></path></svg>
                        <span>Faq</span>
                    </div>
                </a>
            </li>

            <li class="menu">
                <a href="{{ route('review.index') }}" aria-expanded="false" class="dropdown-toggle">
                    <div class="">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-calendar"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect><line x1="16" y1="2" x2="16" y2="6"></line><line x1="8" y1="2" x2="8" y2="6"></line><line x1="3" y1="10" x2="21" y2="10"></line></svg>
                        <span>Reviews</span>
                    </div>
                </a>
            </li>

            {{-- <li class="menu">
                <a href="{{ route('blog.index') }}" aria-expanded="false" class="dropdown-toggle">
                    <div class="">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit"><path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path><path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path></svg>
                        <span>Blogs</span>
                    </div>
                </a>
            </li> --}}

            <li class="menu">
                <a href="{{ route('admin.subscriptions') }}" aria-expanded="false" class="dropdown-toggle">
                    <div class="">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit"><path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path><path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path></svg>
                        <span>Manage User</span>
                    </div>
                </a>
            </li>

            <li class="menu menu-heading">
                <div class="heading"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg><span>ADMIN MANEGEMENT</span></div>
            </li>

            <li class="menu">
                <a href="#users" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                    <div class="">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-users"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>
                        <span>Users</span>
                    </div>
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg>
                    </div>
                </a>
                <ul class="collapse submenu list-unstyled" id="users" data-parent="#accordionExample">
                    <li>
                        <a href="{{route('profile.edit')}}"> Profile </a>
                    </li>
                    <li>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>

                        <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"> Log Out </a>
                    </li>
                </ul>
            </li>

        </ul>

    </nav>

</div>
