<div class="sidebar-wrapper sidebar-theme">

    <nav id="sidebar">

        <ul class="navbar-nav theme-brand flex-row  text-center">
            <li class="nav-item theme-logo">
                <a href="{{route('user.dashboard')}}">
                    <img src="{{asset('backend/assets/img/90x90.jpg')}}" class="navbar-logo" alt="logo">
                </a>
            </li>
            <li class="nav-item theme-text">
                <a href="{{route('user.dashboard')}}" class="nav-link"> T E F </a>
            </li>
            <li class="nav-item toggle-sidebar">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-left sidebarCollapse"><line x1="19" y1="12" x2="5" y2="12"></line><polyline points="12 19 5 12 12 5"></polyline></svg>
            </li>
        </ul>
        <div class="shadow-bottom"></div>
        <ul class="list-unstyled menu-categories" id="accordionExample">
            <li class="menu active">
                <a href="{{ route('user.dashboard') }}" data-toggle="collapse" aria-expanded="true" class="dropdown-toggle">
                    <div class="">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg>
                        <span>Dashboard</span>
                    </div>
                </a>
            </li>

            <li class="menu menu-heading">
                <div class="heading"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg><span>USER MANEGEMENT</span></div>
            </li>

            <li class="menu">
                <a href="{{route('user.portfolio')}}" aria-expanded="false" class="dropdown-toggle">
                    <div class="">
                        <svg viewBox="0 0 1024 1024" class="icon" version="1.1" xmlns="http://www.w3.org/2000/svg" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><path d="M119.552 89.56928h-0.7168v182.37952h784.68096v-44.49792c0.03072-0.73216 0.21504-1.42336 0.21504-2.16576V96.76288c0-0.7424-0.18432-1.4336-0.21504-2.16576v-5.02272h-0.50176C899.51744 65.01888 878.7712 46.08 853.44256 46.08H169.12384c-25.32864 0-46.08 18.93888-49.57184 43.48928z" fill="#C4BCB1"></path><path d="M172.19584 112.8192h681.2672v208.55296H172.19584z" fill="#FFFFFF"></path><path d="M117.18144 251.8528h787.86048V977.92H117.18144z" fill="#EEDBC3"></path><path d="M117.18144 251.8528h407.8336V977.92H117.18144z" fill="#DCC9A5"></path><path d="M119.55712 939.22816h-0.72192V977.92h787.76832l0.22016-31.50336c0-0.7424-0.18432-1.4336-0.22016-2.16576v-5.02272h-0.50688c-3.5072-24.55552-24.33536-43.48928-49.76128-43.48928H169.3184c-25.42592-0.00512-46.25408 18.93376-49.76128 43.48928z" fill="#C4BCB1"></path><path d="M506.82368 629.4784a5.49376 5.49376 0 0 1-10.98752 0V418.00704a5.49376 5.49376 0 0 1 10.98752 0v211.47136z" fill="#F38181"></path><path d="M527.25248 443.41248m-47.88736 0a47.88736 47.88736 0 1 0 95.77472 0 47.88736 47.88736 0 1 0-95.77472 0Z" fill="#5B5144"></path><path d="M527.25248 443.41248m-24.71936 0a24.71936 24.71936 0 1 0 49.43872 0 24.71936 24.71936 0 1 0-49.43872 0Z" fill="#FCE38A"></path><path d="M626.8928 186.19904a13.1328 13.1328 0 0 1-13.1328 13.1328H243.00544a13.1328 13.1328 0 0 1 0-26.2656h370.75968a13.12768 13.12768 0 0 1 13.12768 13.1328z" fill="#C4BCB1"></path></g></svg>
                        <span>Subscription</span>
                    </div>
                </a>
            </li>

            <li class="menu">
                <a href="{{route('user.payment')}}" aria-expanded="false" class="dropdown-toggle">
                    <div class="">
                        <svg viewBox="0 0 120 120" id="Layer_1" version="1.1" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <style type="text/css"> .st0{fill:#383E56;} .st1{fill:#ACAFBF;} .st2{opacity:0.15;enable-background:new ;} .st3{fill:none;} .st4{fill:#E5CF89;} </style> <g> <g> <path class="st0" d="M103.9,76.6L34.6,91.7c-2.6,0.6-5.2-1.1-5.7-3.7l-9.7-44c-0.6-2.6,1.1-5.2,3.7-5.7l69.3-15.1 c2.6-0.6,5.2,1.1,5.7,3.7l9.6,44.1C108.1,73.5,106.5,76.1,103.9,76.6z"></path> <path class="st0" d="M28.8,88l-9.6-44"></path> <rect class="st1" height="9.2" transform="matrix(0.9771 -0.2128 0.2128 0.9771 -8.1615 13.9467)" width="80.6" x="20.4" y="40.3"></rect> <path class="st2" d="M105.8,74.4L36.5,89.5c-2.6,0.6-5.2-1.1-5.7-3.7l-9.6-44.1c-0.2-1-0.1-2.1,0.3-3c-1.7,1-2.7,3.1-2.3,5.1 L28.8,88c0.6,2.6,3.1,4.2,5.7,3.7l69.3-15.1c1.6-0.3,2.8-1.4,3.4-2.8C106.8,74.1,106.3,74.3,105.8,74.4z"></path> </g> <path class="st2" d="M95.7,50.4v45.1c0,1.1-0.4,2.2-1.1,3l0,0c-0.8,0.7-1.9,1.1-3,1.1h-71c-2.7,0-4.8-2.2-4.8-4.8V49.7 c0-1.1,0.4-2.2,1.1-3l0,0c0.8-0.7,1.9-1.1,3-1.1h70.9C93.5,45.5,95.7,47.7,95.7,50.4z"></path> <path class="st2" d="M95.7,50.4v45.1c0,1.1-0.4,2.2-1.1,3l0,0c-0.9,1.1-2.2,1.8-3.7,1.8h-71c-2.7,0-4.8-2.2-4.8-4.8V50.4 c0-1.5,0.7-2.8,1.8-3.7l0,0c0.8-0.7,1.9-1.1,3-1.1h70.9C93.5,45.5,95.7,47.7,95.7,50.4z"></path> <path class="st3" d="M90.8,100.3H19.9c-2.7,0-4.8-2.2-4.8-4.8V50.4c0-2.7,2.2-4.8,4.8-4.8h70.9c2.7,0,4.8,2.2,4.8,4.8v45.1 C95.6,98.1,93.5,100.3,90.8,100.3z"></path> <path class="st0" d="M90.8,100.3H19.9c-2.7,0-4.8-2.2-4.8-4.8V50.4c0-2.7,2.2-4.8,4.8-4.8h70.9c2.7,0,4.8,2.2,4.8,4.8v45.1 C95.6,98.1,93.5,100.3,90.8,100.3z"></path> <path class="st4" d="M38.2,78.7H24.1c-1,0-1.8-0.8-1.8-1.8v-8.1c0-1,0.8-1.8,1.8-1.8h14.1c1,0,1.8,0.8,1.8,1.8V77 C40,77.9,39.2,78.7,38.2,78.7z"></path> <path class="st2" d="M93.2,98.4h-71c-2.7,0-4.8-2.2-4.8-4.8V48.5c0-1.1,0.4-2,0.9-2.8c-1.9,0.6-3.3,2.4-3.3,4.5v45.1 c0,2.7,2.2,4.8,4.8,4.8h70.9c1.6,0,3-0.8,3.9-2C94.2,98.3,93.7,98.4,93.2,98.4z"></path> <g> <path class="st1" d="M85.9,91.8H69.3c-0.4,0-0.8,0.3-0.8,0.8v0.9c0,0.4,0.3,0.8,0.8,0.8h16.6c0.4,0,0.8-0.3,0.8-0.8v-0.9 C86.7,92.1,86.3,91.8,85.9,91.8z"></path> <path class="st1" d="M65.3,91.8H40.2c-0.4,0-0.8,0.3-0.8,0.8v0.9c0,0.4,0.3,0.8,0.8,0.8h25.1c0.4,0,0.8-0.3,0.8-0.8v-0.9 C66.1,92.1,65.8,91.8,65.3,91.8z"></path> </g> </g> </g></svg>
                        <span>Payment</span>
                    </div>
                </a>
            </li>

            <li class="menu">
                <a href="{{route('user.withdrawal')}}" aria-expanded="false" class="dropdown-toggle">
                    <div class="">
                        <svg viewBox="0 0 16 16" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path fill="#444" d="M8 0l2 3h-1v2h-2v-2h-1l2-3z"></path> <path fill="#444" d="M15 7v8h-14v-8h14zM16 6h-16v10h16v-10z"></path> <path fill="#444" d="M8 8c1.657 0 3 1.343 3 3s-1.343 3-3 3h5v-1h1v-4h-1v-1h-5z"></path> <path fill="#444" d="M5 11c0-1.657 1.343-3 3-3h-5v1h-1v4h1v1h5c-1.657 0-3-1.343-3-3z"></path> </g></svg>
                        <span>Withdrawal</span>
                    </div>
                </a>
            </li>

        </ul>

    </nav>

</div>
